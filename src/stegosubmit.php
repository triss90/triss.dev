<?php
$host = 'http://www.google.com/ping?sitemap='.$domain.'/sitemap.xml'; 
$ch = curl_init($host);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
if($httpcode>=200 && $httpcode<300){
  echo 'success';
} else {
  echo 'try again';
}