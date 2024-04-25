<?php
$feed = "<?xml version='1.0' encoding='UTF-8'?>
<rss version='2.0'>
    <channel>
        <title>triss.dev | RSS</title>
        <link>https://triss.dev/</link>
        <description>Tristan White's RSS Feed</description>
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

        $feed .= "
    </channel>
</rss>";

file_put_contents($blogFolder.'/rss.xml', $feed);