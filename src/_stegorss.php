<?php
// https://github.com/mibe/FeedWriter/blob/master/examples/example_rss1.php
include 'vendor/_feedwriter/Item.php';
include 'vendor/_feedwriter/Feed.php';
include 'vendor/_feedwriter/RSS2.php';
date_default_timezone_set('UTC');
use \FeedWriter\RSS2;

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

foreach(array_slice($siteIndex, 0, 20) as $sidex) {
    $newItem = $BlogFeed->createNewItem();
    $newItem->setTitle($sidex['title']);
    $newItem->setLink('https://triss.dev/'.$blogName.'/'.$sidex['url']);
    $newItem->setDate($sidex['date']);
    $newItem->setDescription($sidex['description']);
    $newItem->setAuthor('Tristan White', 'tristan@white.chat');
    $BlogFeed->addItem($newItem);
}

file_put_contents($blogFolder.'/rss.xml', $BlogFeed->generateFeed());