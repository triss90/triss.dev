<?php
/**********************************************************************
 *                                                                    *
 *                    CODENAME: STEGOSAURUS                           *
 *           Stegosaurus Static Site Compiler (SSSC) v.0.1            *
 *                                                                    *
 *               AUTHORS: Tristan White & Daniel Bahl                 *
 *                                                                    *
 *********************************************************************/

require('_stegoinit.php');
require('_stegoconfig.php');
system('clear');

// Print status
$art ="\e[32m
                         .       .
                        / `.   .' \ 
                .---.  <    > <    >  .---.
                |    \  \ - ~ ~ - /  /    |
                 ~-..-~             ~-..-~
             \~~~\.'                    `./~~~/
   .-~~^-.    \__/                        \__/
 .'  O    \     /               /       \  \
(_____,    `._.'               |         }  \/~~~/
 `----.          /       }     |        /    \__/
       `-.      |       /      |       /      `. ,~~|
           ~-.__|      /_ - ~ ^|      /- _      `..-'   f: f:
                |     /        |     /     ~-.     `-. _||_||_
                |_____|        |_____|         ~ - . _ _ _ _ _>
\e[92m                
 _____ _____ _____ _____ _____ _____  ___  _   _______ _   _ _____ 
/  ___|_   _|  ___|  __ \  _  /  ___|/ _ \| | | | ___ \ | | /  ___|
\ `--.  | | | |__ | |  \/ | | \ `--./ /_\ \ | | | |_/ / | | \ `--. 
 `--. \ | | |  __|| | __| | | |`--. \  _  | | | |    /| | | |`--. \
/\__/ / | | | |___| |_\ \ \_/ /\__/ / | | | |_| | |\ \| |_| /\__/ /
\____/  \_/ \____/ \____/\___/\____/\_| |_/\___/\_| \_|\___/\____/ 
\e[32m
 -------------------------------------------------------------                                                        
";
echo $art;

// Load and list all blogposts in array
$dir = new DirectoryIterator(__DIR__.'/'.$postsFolder);
$dirSorted = array();
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->getExtension() === 'md') {

        $post = file_get_contents(__DIR__.'/'.$postsFolder.'/'.$fileinfo->getFilename());
        $post = $parser->parse($post);

        $yaml = $post->getYAML();
        $html = $post->getContent();
        
        $dirSorted[] = array(
            'filename' => __DIR__.'/_posts/'.$fileinfo->getFilename(),
            'title' => $yaml['title'],
            'dateUnixTimestamp' => $yaml['date'],
            'dateParsedTimestamp' => date("Y-m-d", $yaml['date'])
        );
    }
}

// Sort the array with posts by dateUnixTimestamp
usort($dirSorted, function($a, $b) {
    return $b['dateUnixTimestamp'] <=> $a['dateUnixTimestamp'];
});

// Remove old 
$blogfolderExec = __DIR__."/".$blogFolder."/*";
$blogfolderExec = str_replace("src/../", "", $blogfolderExec);
$blogfolderExec = addslashes($blogfolderExec);
exec('rm -rf '.$blogfolderExec);
echo "\e[92m - Purged old files from \e[32m".$blogName."\n";

// Json for RSS and Sitemap:
$siteIndex = array();
$draftIndex = array();
$draftIndex = array();
// $tagIndex = array();
$pageCount = 0;
$tags = "";


// Create posts
foreach($dirSorted as $p) {

    //echo "🦖 Parsing: " . $p['title'] . "\n";
    $markdown = file_get_contents($p['filename']);
    
    // parse markdown
    $result = $parser->parse($markdown);
    $blogFrontMatter = $result->getYAML();
    $blogContent = $result->getContent();

     $frontendVariables = array(
        'title' => $blogFrontMatter['title'],
        'description' => $blogFrontMatter['description'],
        'content' => $blogContent,
        'year' => date("Y"),
        'date' => date("Y-m-d", $blogFrontMatter['date'])
    );

    // no layout defined, fallback to "post":
    $p['layout'] = (!empty($blogFrontMatter['layout'])) ? $blogFrontMatter['layout'] : "post";
    $p['title'] = (!empty($blogFrontMatter['title'])) ? $blogFrontMatter['title'] : $blogFrontMatter['filename'];

    // Get layout template
    $blogContentParsed = $stegosaurus->includeFiles(__DIR__ . '/_layouts/'. $p['layout'] . ".php");
    $blogContentParsed = $stegosaurus->includeVars($blogContentParsed, $frontendVariables);


    // Create publish and redirect directory
    $dirPublish = __DIR__ . "/".$blogFolder."/" . strtolower($blogFrontMatter['slug']) . "/";
    if (!file_exists($dirPublish)) {
        mkdir($dirPublish, 0777, true);
    }
    $dirRedirect = __DIR__ . "/".$blogFolder."/";


    // Create redirect file
    file_put_contents($dirRedirect."index.php", '<?php header("Location: /'.$blogFolder.'/1/"); die(); ?>');


    // Write tags to string
    if (isset($blogFrontMatter['tags']) && !empty($blogFrontMatter['tags'])) {
        $tags = implode(", ", $blogFrontMatter['tags']);
    } else {
        $tags = "";
    }
    
    // If draft
    if(isset($blogFrontMatter['draft']) && $blogFrontMatter['draft'] == "true") {
        
        // Create individual blog post files
        file_put_contents($dirPublish."index.php", $blogContentParsed);

        $draftIndex[] = array(
            'title' => $blogFrontMatter['title'],
            'description' => $blogFrontMatter['description'],
            'date' => date("Y-m-d", $blogFrontMatter['date']),
            'draft' => $blogFrontMatter['draft'],
            'tags' => $tags,
            'url' => strtolower($blogFrontMatter['slug']),
            'uri' => $domainDev.$blogName."/".strtolower($blogFrontMatter['slug']).'/',
        );
    } else {
        // Create individual blog post files
        file_put_contents($dirPublish."index.php", $blogContentParsed);

        $siteIndex[] = array(
            'title' => $blogFrontMatter['title'],
            'description' => $blogFrontMatter['description'],
            'date' => date("Y-m-d", $blogFrontMatter['date']),
            'draft' => $blogFrontMatter['draft'],
            'tags' => $tags,
            'url' => strtolower($blogFrontMatter['slug']),
            'uri' => $domain.strtolower($blogFrontMatter['slug']).'/',
        );
    }
}
echo "\e[92m - Generated \e[32m".count($siteIndex)." \e[92mPosts\n";
echo "\e[92m - Generated \e[32m".count($draftIndex)." \e[92mDrafts\n";
foreach ($draftIndex as $draft) {
    echo "\e[92m   -\e[94m ".$draft['uri']." \n";
}


// Create articles pages with pagination
$totalRecords = count($siteIndex);
$totalPages   = ceil($totalRecords / $pageSize);
for($i = 0; $i < $totalPages; $i++) {
    // Extract a portion of $siteIndex array
    $page_data = array_slice($siteIndex, $i*$pageSize, $pageSize);

    // var_dump($page_data);
    
    $articles = "<!-- Page Content START -->";
    foreach($page_data as $item) {
        $articles .= "<li>";
        $articles .= "<h2><a class='post-transition-start' href='/".$blogFolder."/" . $item['url'] . "'>" . $item['title'] . "</a></h2>\n";
        $articles .= "<time class='post-date' datetime='".$item['date']."'>" . $item['date'] . "</time>\n";
        // $articles .= "<span class='categories'>" . $item['tags'] . "</span>\n";
        $articles .= "<p class='excerpt'>" . $item['description'] . "</p>\n";
        $articles .= "<hr>\n";
        $articles .= "</li>";
    }
  
    $articles .= "</ul>\n";
    $articles .= "</nav>\n";


    // Generate pagination
    $articles .= "<nav class='pagination' aria-label='Pagination'>\n";
    $articles .= "<ul>\n";
    

    // Previous link
    if ($i > 0) {
        // $articles .= "<li><a href='" .$pageName. $i . ".php' aria-label='Prev Page'>← Prev</a></li> ";
        $articles .= "<li><a href='/" . $blogFolder . "/" . $i . "/' aria-label='Prev Page' title='Previous page'>←</a></li> ";
    }
    
    // Add a 'First page' link if the first page isn't visible
    if ($i - $displayPages > 0) {
        $articles .= "<li><a href='/" . $blogFolder . "/1/' aria-label='Page 1'>1</a></li> ";
        if ($i - $displayPages > 1) {
            $articles .= "<li><span>...</span></li> ";
        }
    }

    // Paginated pages
    for($j = 0; $j < $totalPages; $j++) {
        if(abs($j - $i) <= $displayPages) { // Show pages near current, first and last page
            if($j == $i) {
                // Current page, so don't make it a link
                $articles .= "<li><a href='/" . $blogFolder . "/" . ($j+1) . "/' aria-label='Page " . ($j+1) . "' aria-current='page'>" . ($j+1) . "</a></li> ";
            } else {
                // Not the current page, so make it a link
                $articles .= "<li><a href='/" . $blogFolder . "/" . ($j+1) . "/' aria-label='Page " . ($j+1) . "'>" . ($j+1) . "</a></li> ";
            }
        }
    }

    // Add a '...' and the last page number if the last page isn't visible
    if ($i + $displayPages < $totalPages - 2) {
        $articles .= "<li><span>...</span></li> ";
    }
    if ($i + $displayPages < $totalPages - 1) {
        $articles .= "<li><a href='/" . $blogFolder . "/" . $totalPages . "/' aria-label='Page " . $totalPages . "'>" . $totalPages . "</a></li> ";
    }

    // Next link
    if ($i < $totalPages - 1) {
        $articles .= "<li><a href='/" . $blogFolder . "/" . ($i + 2) . "/' aria-label='Next Page' title='Next page'>→</a></li> ";
    }

    $articles .= "</ul>\n";
    

    $frontendVariables = array(
        'title' => "Alle indlæg - Side " . ($i+1),
        'description' => "Alle indlæg",
        'pageNumber' => ($i+1),
        'content' => $articles,
        'tags' => $tags,
        'year' => date("Y")
    );
    
    // Do some magic
    $blogContentParsed = $stegosaurus->includeFiles(__DIR__ . '/_layouts/' . $articlesLayout.".php");
    $blogContentParsed = $stegosaurus->includeVars($blogContentParsed, $frontendVariables);
    $dirPublish = __DIR__ . "/$blogFolder/";
    if (!file_exists($dirPublish)) {
        mkdir($dirPublish, 0777, true);
    }
    mkdir($dirPublish . ($i+1), 0777, true);
    file_put_contents($dirPublish. ($i+1) . "/" . $pageName . ".php", $blogContentParsed);
    $pageCount++;
}
echo "\e[92m - Generated \e[32m".$pageCount."\e[92m Article pages:\e[94m".$domainDev.$blogName."/1\n";


// Create search page
include('_stegosearch.php');
echo "\e[92m - Generated search page: \e[94m".$domainDev."search/ \n";


// Create XML Sitemap
include('_stegositemap.php');
echo "\e[92m - Generated sitemap: \e[94m".$domainDev."sitemap.xml \n";
echo "\e[92m   - Submit sitemap to Google: \e[91mphp stegosubmit.php \n";
echo "\e[92m - Generated JSON Feed: \e[94m".$domainDev."sitemap.json \n";


// Create RSS Feed
include('_stegorss.php');
echo "\e[92m - Generated RSS Feed: \e[94m".$domainDev.$blogName."/rss.xml \n";
echo "\n";

