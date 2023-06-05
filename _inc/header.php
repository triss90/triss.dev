<?php
    $language = "";
    $timestamp = time();
    
    header('Cache-Control: max-age=31557600');
    $tsstring = gmdate('D, d M Y H:i:s ', $timestamp) . 'GMT';
    $etag = $language . $timestamp;

    $if_modified_since = isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? $_SERVER['HTTP_IF_MODIFIED_SINCE'] : false;
    $if_none_match = isset($_SERVER['HTTP_IF_NONE_MATCH']) ? $_SERVER['HTTP_IF_NONE_MATCH'] : false;
    if ((($if_none_match && $if_none_match == $etag) || (!$if_none_match)) && ($if_modified_since && $if_modified_since == $tsstring)) {
        header('HTTP/1.1 304 Not Modified');
        exit();
    }
    else {
        header("Last-Modified: $tsstring");
        header("ETag: \"{$etag}\"");
    }
    if (!isset($description)) {
        $description = "A Systems Engineer with flair for Front-End UI/UX based in Aarhus Denmark";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, user-scalable=1">
    <title>Tristan White | <?php echo $description; ?> </title>
    <meta name="google-site-verification" content="yIFeaDSsvI7qzx8DTtQ7CBx3ZaZwD7vX_7F0yhrs_IY">
    <meta name="language" content="en">
    <meta name="description" content="<?php echo $description; ?> ">
    <meta name="keywords" content="systems engineer, freelancer, front-end web developer, HTML, CSS, SVG, UI, UX, a11y, Denmark">
    <meta name="twitter:url" content="https://triss.dev">
    <meta name="twitter:title" property="og:title" content="Tristan White | <?php echo $description; ?> ">
    <meta name="twitter:image" content="https://triss.dev/assets/img/me/tw_720.jpg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@triss90">
    <meta property="og:url" content="https://triss.dev">
    <meta property="og:title" content="Tristan White | <?php echo $description; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://triss.dev/assets/img/me/tw_720.jpg">
    <meta content="<?php echo $description; ?>" name="description">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/site.webmanifest">
    <link rel="mask-icon" href="/assets/img/safari-pinned-tab.svg" color="#31315d">
    <link rel="shortcut icon" href="/assets/img/favicon.ico">
    <meta name="msapplication-TileColor" content="#31315d">
    <meta name="msapplication-config" content="/assets/img/browserconfig.xml">
    <meta name="theme-color" content="#31315d">
    
    <style id="styles" media="screen"><?php include($_SERVER["DOCUMENT_ROOT"]."/assets/css/app.css"); ?></style>
    <style id="inverter" media="none"><?php include($_SERVER["DOCUMENT_ROOT"]."/assets/css/darkmode.css"); ?></style>
</head>
<body>
<a id="top" href="#main">skip to content</a>


