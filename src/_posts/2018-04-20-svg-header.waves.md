---
layout: post
title: SVG Header Waves
slug: svg-header-waves
date: 2018-04-20
description: Using SVG backgrounds for your headers
draft: false
category: web development
tags:
  - svg
  - php
---

# SVG Header Waves

<p class='timestamp'><time datetime='20-04-2018'>20-04-2018</time></p>
<hr>

The other day I was thinking about an elegant solution to creating non-rectangular headers with CSS. While there are many ways to achieve this effect, like `border-radius`, `transform: skew`, `clip-path`, `svg` and `img`.
I ultimately ended up going with a simple SVG image as my specific situation called for a wave-like header.

The problem I encountered with this solution, was creating a system that would be easy to maintain and expand upon. I would need to use the wave with several background colors and both on the top and on the bottom of sections.

If you include the SVG code directly in your HTML, you can of course manipulate the SVG at you leisure, but I wanted to keep the HTML as clean as possible, preferably like this: `<header class="wave-bottom">This is some text</header>`

In order to do this, I would have to embed the SVG with with css `background-image`. This however would not let me manipulate the SVG code after the fact. And thus I'd need to create 10's of images to accommodate my need.

Now enough talk, time to present my solution:

#### wave.php

```php
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


```

As you can see above, I ended up embedding the SVG in a PHP file. This way I would have full control over any parameters I'd need to modify and would also easily be able to use the image like this: [https://triss.dev/examples/wave.php?color=red&orientation=180deg](https://triss.dev/examples/wave.php?color=red&orientation=180deg)

With this method I only have 1 SVG file to maintain, and endless ways to expand, should need be.

#### The finale result

<p data-height="365" data-theme-id="light" data-slug-hash="bMNaZz" data-default-tab="result" data-user="triss90" data-embed-version="2" data-pen-title="background wave" class="codepen">See the Pen <a href="https://codepen.io/triss90/pen/bMNaZz/">background wave</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
