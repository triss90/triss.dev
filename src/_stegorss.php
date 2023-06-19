<?php
$feed = "<?xml version='1.0' encoding='UTF-8'?>
<rss version='2.0'>
<channel>
<title>w3schools.in | RSS</title>
<link>https://www.w3schools.in/</link>
<description>Cloud RSS</description>
<language>en-us</language>";

foreach(array_slice($siteIndex, 0, 20) as $sidex) {
    $title = $sidex['title'];
    $link = 'https://triss.dev/'.$blogName.'/'.$sidex['url'];
    $description = $sidex['description'];
    $date = $sidex['date'];
    $author = 'tristan@white.chat (Tristan White)';
    $feed .= "<item>
    <title>".$title."</title>
    <link>".$link."</link>
    <pubDate>".$date."</pubDate>
    <description>".$description."</description>
    <author>".$author."</author>
    </item>";
}

$feed .= "</channel></rss>";

file_put_contents($blogFolder.'/rss.xml', $feed);