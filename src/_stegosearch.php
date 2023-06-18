<?php
$frontendVariables = array(
    'title' => "Search" ,
    'description' => ""
);
// Do some magic
$blogContentParsed = $stegosaurus->includeFiles(__DIR__ . '/_layouts/' . $searchLayout.".php");
$blogContentParsed = $stegosaurus->includeVars($blogContentParsed, $frontendVariables);
$dirPublish = __DIR__ . "/$blogFolder/";
if (!file_exists($dirPublish)) {
    mkdir($dirPublish, 0777, true);
}
mkdir($dirPublish . $searchLayout, 0777, true);
file_put_contents($dirPublish. "/search/index.php", $blogContentParsed);