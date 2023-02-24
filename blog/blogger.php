<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// https://github.com/mibe/FeedWriter/blob/master/examples/example_rss1.php
include '_feedwriter/Item.php';
include '_feedwriter/Feed.php';
include '_feedwriter/RSS2.php';
//include '_feedwriter/InvalidOperationException.php';
date_default_timezone_set('UTC');
use \FeedWriter\RSS2;

// https://github.com/erusev/parsedown
include('parsedown.php');
$Parsedown = new Parsedown();
$dir = '_posts';
$fileExtension = '.php';
$postContent = "";
$postSlug = "";
$postDate = "";
$postCategories = "";
$postTitle = "";
$posts = array();
$post = array();
$files = scandir($dir);
$postCount = count($files);
$rssPostCount = 20;
$rssPostSkip = $postCount - $rssPostCount;
$rssIncrement = 0;
$postsPerPage = 5;
$postPageCount = ceil($postCount / $postsPerPage);


//Creating an instance of RSS1 class.
$BlogFeed = new RSS2();
$BlogFeed->setTitle('Tristan White\'s Blog');
$BlogFeed->setLink('https://triss.dev/');
$BlogFeed->setDescription('Tristan works for small companies and startups, creating responsive web applications, and online experiences.');
$BlogFeed->setImage('https://triss.dev/assets/img/me/tw_720.jpg', 'Tristan White', 'https://triss.dev/');
$BlogFeed->setChannelElement('language', 'en-US');
$BlogFeed->setDate(time());
$BlogFeed->setChannelElement('pubDate', date(\DATE_RSS, time()));
$BlogFeed->setSelfLink('https://triss.dev/feed');

// Clear console
echo chr(27).chr(91).'H'.chr(27).chr(91).'J';   //^[H^[J  

// Generate blogposts
foreach ($files as $file) {

    $file = $dir . '/' . $file;
    
    if (!is_dir($file)) {
       $fileInfo = file($file); 
       
    }
        
    if ($file != $dir . '/.' && $file != $dir . '/..' && $file != $dir . '/.DS_Store') {

        $post = array();

        // Get post data from header (First 6 lines)
        for ($i = 0; $i < 5; $i++) {
            if (strpos($fileInfo[$i], '---') === false) {
                $fileInfoLine = explode(':', $fileInfo[$i]);
                if ($fileInfoLine[0] == 'title') {
                    $postTitle = $fileInfoLine[1];
                    $postTitle = substr($postTitle, 1);
                    $postTitle = substr_replace($postTitle, "", -1);
                }
                if ($fileInfoLine[0] == 'slug') {
                    $postSlug = $fileInfoLine[1];
                    $postSlug = substr_replace($postSlug, "", -1);
                    $postSlug = substr($postSlug, 1);
                }
                if ($fileInfoLine[0] == 'date') {
                    $postDate = $fileInfoLine[1];
                    $postDateStripped = substr_replace($postDate, "", -1);
                    $postDateStripped = substr($postDateStripped, 1);
                }
                if ($fileInfoLine[0] == 'categories') {
                    $postCategories = $fileInfoLine[1];
                    $postCategories = substr_replace($postCategories, "", -1);
                    $postCategories = substr($postCategories, 1);
                }
                if ($fileInfoLine[0] == 'excerpt') {
                    $postExcerpt = $fileInfoLine[1];
                    $postExcerpt = substr_replace($postExcerpt, "", -1);
                    $postExcerpt = substr($postExcerpt, 1);
                }
            }
        }

        // Generate post content
        $postContent = file_get_contents($file);
        $lines = explode("\n", $postContent);
        $skipped_content = implode("\n", array_slice($lines, 6));
        $postContent = "
            <?php \$description = '$postTitle';  ?>
            <?php include('../../../../../_inc/header.php'); ?>
            <?php include('../../../../../_inc/icons.php'); ?>
            
            <span class='inverted'><?php include('../../../../../_inc/navigation.php'); ?></span>
            <main id='main' class='central space post'>
        ";
        $postContent .= $Parsedown->text($skipped_content);
        $postContent .= "
            </main>
            <script src='../../../../../assets/js/highlight.pack.js'></script>
            <script>hljs.initHighlightingOnLoad();</script>
            <?php include('../../../../../_inc/footer.php'); ?>
        ";

        // Split post date
        $postDate = explode('-', $postDate);
        $postYear = substr($postDate[0], 1);
        $postMonth = $postDate[1];
        $postDay = substr_replace($postDate[2], "", -1);
        $postPath = $postYear.'/'.$postMonth.'/'.$postDay.'/'.$postSlug.'/';
        $postDateFormatted = $postDay.'/'.$postMonth.'/'.$postYear;

        if ($rssIncrement >= $rssPostSkip) {
            $newItem = $BlogFeed->createNewItem();
            $newItem->setTitle($postTitle);
            $newItem->setLink('https://triss.dev/blog/'.$postPath);
            $newItem->setDate($postYear.'-'.$postMonth.'-'.$postDay);
            $newItem->setDescription($Parsedown->text(substr($skipped_content, 0, 250)."..."));
            $newItem->setAuthor('Tristan White', 'oliver.tristan@gmail.com');
            $BlogFeed->addItem($newItem);
        }
        $rssIncrement++;

        // Write post data to array.
        array_push($post, $postTitle);
        array_push($post, $postSlug);
        array_push($post, $postDateFormatted);
        array_push($post, $postCategories);
        array_push($post, $postPath);
        array_push($post, $Parsedown->text($skipped_content));
        //array_push($post, $postExcerpt);

        // Create folder structure
        if (!file_exists($postYear)) {
            mkdir($postYear, 0777);
            //echo "\e[0;34m" . $postYear . "\e[0m ====> Created\n";
        } else {
            //echo "❌  \e[0;34;41m" . $postYear . "\e[0m ====> Already Exists \n";
        }
        if (!file_exists($postYear.'/'.$postMonth)) {
            mkdir($postYear.'/'.$postMonth, 0777);
            //echo "\e[0;34m" . $postYear.'/'.$postMonth . "\e[0m ====> Created\n";
        } else {
            //echo "❌  \e[0;34;41m" . $postYear.'/'.$postMonth  . "\e[0m ====> Already Exists \n";
        }
        if (!file_exists($postYear.'/'.$postMonth.'/'.$postDay)) {
            mkdir($postYear.'/'.$postMonth.'/'.$postDay, 0777);
            //echo "\e[0;34m" . $postYear.'/'.$postMonth.'/'.$postDay . "\e[0m ====> Created\n";
        } else {
            //echo "❌  \e[0;34;41m" . $postYear.'/'.$postMonth.'/'.$postDay . "\e[0m ====> Already Exists \n";
        }
        if (!file_exists($postYear.'/'.$postMonth.'/'.$postDay.'/'.$postSlug)) {
            mkdir($postYear.'/'.$postMonth.'/'.$postDay.'/'.$postSlug, 0777);
            //echo "\e[0;34m" . $postYear.'/'.$postMonth.'/'.$postDay.'/'.$postSlug . "\e[0m ====> Created\n";
        } else {
            //echo "❌  \e[0;34;41m" . $postYear.'/'.$postMonth.'/'.$postDay.'/'.$postSlug . "\e[0m ====> Already Exists \n";
        }
        //echo "\e[0;34m" .$postPath.'index.php'. "\e[0m ====> \e[0;32mSuccess!\n";

        array_push($posts, $post);
        $posts = array_values($posts);

        // Create html files
        file_put_contents($postYear.'/'.$postMonth.'/'.$postDay.'/'.$postSlug.'/index'.$fileExtension, $postContent);

    }
}
// Posts Generated
echo "\e[0;34m Posts(".$postCount.") \e[0m  ====>  \e[0;32m Generated ".date('l jS \of F Y h:i:s A')."\n";

//OK. Everything is done. Now generate the feed.
$fp = fopen('rss.xml', 'w');
fwrite($fp, $BlogFeed->generateFeed());
fclose($fp);
//echo "\n";
echo "\e[0;34m RSS \e[0m        ====>  \e[0;32m Generated ".date('l jS \of F Y h:i:s A')."\n";

// Create JSON data file
$posts = json_encode($posts);
file_put_contents('post_feed.json', $posts);
echo "\e[0;34m Post Feed \e[0m  ====>  \e[0;32m Generated ".date('l jS \of F Y h:i:s A')."";