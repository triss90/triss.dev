<?php

// Examples:
// wave.php?color=000000&orientation=180 # Hex-code without hashtag
// wave.php?color=#333333&orientation=0 # Hex-code with hashtag
// wave.php?color=white&orientation=180 # CSS Color Definition
// wave.php?orientation=180 # No color, fallback to black
// wave.php # No orientation, fallback to 0deg

header('Content-Type: image/svg+xml');
$color = ((ctype_xdigit($_GET['color']) ? "#".$_GET['color'] : $_GET['color']) ?:  "#000000");
$orientation = ($_GET['orientation'] ? intval($_GET['orientation']) : '0') . "deg";

?>
<?xml version="1.0" encoding="utf-8"?>
<svg width="100%" height="130px" viewBox="0 0 1440 130" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="transform-origin: 50% 50%; transform: rotateX(<?php echo $orientation; ?>);"><path  id="wave-bottom-white" fill="<?php echo $color; ?>" d="M0,56.050526 C121.352261,18.683509 262.172393,0 422.460394,0 C662.892396,0 818.88453,115.474324 1058.94661,115.474324 C1218.988,115.474324 1342.92081,94.808741 1440,56 L1440,130 L0,130 L0,56.050526 Z" ></path></svg>
