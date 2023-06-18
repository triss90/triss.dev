<?php

// Config
$blogName = "blog";

$postsFolder = "_posts";
$blogFolder = "../".$blogName;

$domain = "https://triss.dev/".$blogName."/";
$domainDev = "http://localhost:8889/";

// Layouts for different types of content
$defaultLayout = "post";  // fallback layout if nothing is defined (.html is not requied)
$tagLayout = "post";
$articlesLayout = "articles";
$searchLayout = "search";

// Name of (pageX.html):
$pageName = "index"; 

$pageSize = 5;
$displayPages = 2; // pagination, show [4] pages at a time
