<?php
    $language = "";
    $timestamp = time();
    
    header('Cache-Control: max-age=31536000, public');

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
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, user-scalable=1">
<meta name="view-transition" content="same-origin" />
<title>Tristan White | <?php echo $description; ?> </title>
<meta name="google-site-verification" content="yIFeaDSsvI7qzx8DTtQ7CBx3ZaZwD7vX_7F0yhrs_IY">
<meta name="language" content="en">
<meta name="description" content="<?php echo $description; ?> ">
<meta name="keywords" content="systems engineer, freelancer, front-end web developer, HTML, CSS, SVG, UI, UX, a11y, Denmark">
<meta name="twitter:url" content="https://triss.dev">
<meta name="twitter:title" property="og:title" content="Tristan White | <?php echo $description; ?> ">
<meta name="twitter:image" content="https://triss.dev/assets/img/tw_750.jpg">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@triss90">
<meta property="og:url" content="https://triss.dev">
<meta property="og:title" content="Tristan White | <?php echo $description; ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="https://triss.dev/assets/img/tw_750.jpg">
<meta content="<?php echo $description; ?>" name="description">
<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
<link rel="manifest" href="/assets/img/site.webmanifest">
<link rel="mask-icon" href="/assets/img/safari-pinned-tab.svg" color="var(--color-secondary)">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="msapplication-TileColor" content="var(--color-primary)">
<meta name="msapplication-config" content="/assets/img/browserconfig.xml">
<meta name="theme-color" content="var(--color-bg)">
<style id="themes-css">
<?php require_once ($rootDir.'/assets/css/themes.min.css');
?>
</style>
<style id="app-css">
<?php require_once ($rootDir.'/assets/css/app.min.css');
?>
</style>