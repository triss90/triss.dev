<?php
    $activePage = "blog";
    $description = 'Weekly widget';
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
                    <h1>HSLA editor</h1>
<p class='timestamp'><time datetime='2023-06-05'>2023-06-05</time></p><hr>
<p>This week's widget is a simple HSLA color slider</p>
<p class="codepen" data-height="566.2734375" data-default-tab="result" data-slug-hash="JjbqWKK" data-user="triss90" style="height: 566.2734375px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/JjbqWKK">
  HSLA editor</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
<p>HSLA colors in CSS can be used to define color properties for various elements in your web design. HSLA stands for Hue, Saturation, Lightness, and Alpha.</p>
<p>Here's a breakdown of how each component of HSLA is used in CSS:</p>
<ul>
<li>
<strong>Hue (H)</strong>: This is the first parameter and represents the color itself. It's a degree on the color wheel; 0 (or 360) is red, 120 is green, and 240 is blue.</li>
<li>
<strong>Saturation (S)</strong>: This is the second parameter and represents the amount of color, or the intensity. It's a percentage; 100% is full color, and 0% is a shade of grey.</li>
<li>
<strong>Lightness (L)</strong>: This is the third parameter and represents the amount of white or black in the color. It's also a percentage; 0% lightness is black, 100% lightness is white, and 50% lightness is neither added white nor black.</li>
<li>
<strong>Alpha (A)</strong>: This is the fourth parameter and represents the opacity of the color. An alpha value of 1 is completely opaque, and an alpha value of 0 is completely transparent.</li>
</ul>
<p>Here's how you can define HSLA color in CSS:</p>
<pre><code class="language-CSS">element {
    background-color: hsla(120, 100%, 50%, 0.3);
}
</code></pre>
<p>In the above example, the background-color of the element is set to a color with hue 120 (green), 100% saturation (full color), 50% lightness (neither light nor dark), and 0.3 alpha (somewhat transparent).</p>

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