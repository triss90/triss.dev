<?php
$xmlString = '<?xml version="1.0" encoding="UTF-8"?>';
$xmlString .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';

$xmlString .= '<url>';
$xmlString .= '<loc>https://triss.dev/</loc>';
$xmlString .= '<lastmod>'.date(DATE_ATOM,time()).'</lastmod>';
$xmlString .= '<changefreq>daily</changefreq>';
$xmlString .= '<priority>1.0</priority>';
$xmlString .= '</url>';

$xmlString .= '<url>';
$xmlString .= '<loc>https://triss.dev/contact</loc>';
$xmlString .= '<lastmod>'.date(DATE_ATOM,time()).'</lastmod>';
$xmlString .= '<changefreq>daily</changefreq>';
$xmlString .= '<priority>0.8</priority>';
$xmlString .= '</url>';

$xmlString .= '<url>';
$xmlString .= '<loc>https://triss.dev/about</loc>';
$xmlString .= '<lastmod>'.date(DATE_ATOM,time()).'</lastmod>';
$xmlString .= '<changefreq>daily</changefreq>';
$xmlString .= '<priority>1.0</priority>';
$xmlString .= '</url>';

$xmlString .= '<url>';
$xmlString .= '<loc>https://triss.dev/feed</loc>';
$xmlString .= '<lastmod>'.date(DATE_ATOM,time()).'</lastmod>';
$xmlString .= '<changefreq>daily</changefreq>';
$xmlString .= '<priority>1.0</priority>';
$xmlString .= '</url>';

foreach($siteIndex as $sidex) {
    $xmlString .= '<url>';
    $xmlString .= '<loc>'.$sidex['uri'].'</loc>';
    $xmlString .= '<lastmod>'.date(DATE_ATOM,time()).'</lastmod>';
    $xmlString .= '<changefreq>daily</changefreq>';
    $xmlString .= '<priority>1.0</priority>';
    $xmlString .= '</url>';
}
$xmlString .= '</urlset>';

$dom = new DOMDocument;
$dom->preserveWhiteSpace = FALSE;
$dom->loadXML($xmlString);
$dom->save('../sitemap.xml');

file_put_contents('../sitemap.json',  json_encode($siteIndex));

