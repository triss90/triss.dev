<?php
    $activePage = "blog";
    $description = 'Using SVG backgrounds for your headers';
?>
<!DOCTYPE html>
<html lang="en">
<!--
	What's up, Inspector Gadget? 🕵️‍♂️
	Go on then! I've made it convenient for you, view the source here: https://github.com/triss90/triss.dev
-->

<head>
    <?php include '../../inc/meta.php'; ?>
</head>

<body>
    <a id="top" href="#main">skip to content</a>
    <?php include '../../inc/themes.php'; ?>
    <div class="article-progress">
        <div class="article-progress-inner"></div>
    </div>
    <?php include '../../inc/navigation.php'; ?>

    <main id='post'>
        <div class='container'>
            <div class='row'>
                <div class='tiny-12 small-10 medium-8 small-offset-1 medium-offset-2'>
                    <h1>SVG Header Waves</h1>
<p class='timestamp'><time datetime='20-04-2018'>20-04-2018</time></p>
<hr>
<p>The other day I was thinking about an elegant solution to creating non-rectangular headers with CSS. While there are many ways to achieve this effect, like <code>border-radius</code>, <code>transform: skew</code>, <code>clip-path</code>, <code>svg</code> and <code>img</code>.
I ultimately ended up going with a simple SVG image as my specific situation called for a wave-like header.</p>
<p>The problem I encountered with this solution, was creating a system that would be easy to maintain and expand upon. I would need to use the wave with several background colors and both on the top and on the bottom of sections.</p>
<p>If you include the SVG code directly in your HTML, you can of course manipulate the SVG at you leisure, but I wanted to keep the HTML as clean as possible, preferably like this: <code>&lt;header class=&quot;wave-bottom&quot;&gt;This is some text&lt;/header&gt;</code></p>
<p>In order to do this, I would have to embed the SVG with with css <code>background-image</code>. This however would not let me manipulate the SVG code after the fact. And thus I'd need to create 10's of images to accommodate my need.</p>
<p>Now enough talk, time to present my solution:</p>
<h4>wave.php</h4>
<pre><code class="language-php">&lt;?php

// Examples:
// wave.php?color=000000&amp;orientation=180 # Hex-code without hashtag
// wave.php?color=#333333&amp;orientation=0 # Hex-code with hashtag
// wave.php?color=white&amp;orientation=180 # CSS Color Definition
// wave.php?orientation=180 # No color, fallback to black
// wave.php # No orientation, fallback to 0deg

header('Content-Type: image/svg+xml');
$color = ((ctype_xdigit($_GET['color']) ? &quot;#&quot;.$_GET['color'] : $_GET['color']) ?:  &quot;#000000&quot;);
$orientation = ($_GET['orientation'] ? intval($_GET['orientation']) : '0') . &quot;deg&quot;;

?&gt;
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;

&lt;svg width=&quot;100%&quot; height=&quot;130px&quot; viewBox=&quot;0 0 1440 130&quot; preserveAspectRatio=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; xmlns:xlink=&quot;http://www.w3.org/1999/xlink&quot; style=&quot;transform-origin: 50% 50%; transform: rotateX(&lt;?php echo $orientation; ?&gt;);&quot;&gt;&lt;path  id=&quot;wave-bottom-white&quot; fill=&quot;&lt;?php echo $color; ?&gt;&quot; d=&quot;M0,56.050526 C121.352261,18.683509 262.172393,0 422.460394,0 C662.892396,0 818.88453,115.474324 1058.94661,115.474324 C1218.988,115.474324 1342.92081,94.808741 1440,56 L1440,130 L0,130 L0,56.050526 Z&quot; &gt;&lt;/path&gt;&lt;/svg&gt;


</code></pre>
<p>As you can see above, I ended up embedding the SVG in a PHP file. This way I would have full control over any parameters I'd need to modify and would also easily be able to use the image like this: <a href="https://triss.dev/examples/wave.php?color=red&amp;orientation=180deg">https://triss.dev/examples/wave.php?color=red&amp;orientation=180deg</a></p>
<p>With this method I only have 1 SVG file to maintain, and endless ways to expand, should need be.</p>
<h4>The finale result</h4>
<p data-height="365" data-theme-id="light" data-slug-hash="bMNaZz" data-default-tab="result" data-user="triss90" data-embed-version="2" data-pen-title="background wave" class="codepen">See the Pen <a href="https://codepen.io/triss90/pen/bMNaZz/">background wave</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>

                </div>
            </div>
        </div>
    </main>

    <script src='../../assets/js/article.min.js'></script>
    <script src='../../assets/js/vendor/highlight.pack.js'></script>
    <script>
    hljs.initHighlightingOnLoad();
    </script>

    <?php include '../../inc/footer.php'; ?>
    <?php include '../../inc/scripts.php'; ?>
</body>

</html>