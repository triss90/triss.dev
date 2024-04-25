<?php
    $activePage = "blog";
    $description = 'A simple Sass mixin grid system example';
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
    <?php include '../../inc/themes.php'; ?>
    <?php include '../../inc/navigation.php'; ?>

    <main id='post'>
        <div class='container'>
            <div class='row'>
                <div class='tiny-12 small-10 medium-8 small-offset-1 medium-offset-2'>
                    <h1>Sass Mixin Grid system</h1>
<p class='timestamp'><time datetime='15-11-2015'>15-11-2015</time></p>
<hr>
<p>Regular CSS grid systems have many upsides, but certainly a few downsides as well. One of the bigger downsides is that you often end up with one <code>div</code> with a ton of class. This makes the markup clumsy and unreadable! To combat this I've made a SCSS Mixin grid system. It's modular, simple and incredibly easy to use.</p>
<p>To use the grid system you'll need to use two separate Mixins. One for the container and one for every grid item.</p>
<h3>The container Mixin</h3>
<pre><code class="language-css">@mixin row() {
 font-size: 0;
 box-sizing: border-box;
 padding: 0 10px 0 10px;
 max-width: 1200px;
 margin: 0 auto;
 @media only screen and (min-width: 750px) {
  padding: 0 10% 0 10%;
 }
 @media only screen and (min-width: 975px) {
  padding: 0 5% 0 5%;
 }
 @media only screen and (min-width: 1200px) {
  padding: 0;
 }
}
</code></pre>
<h4>How to use</h4>
<pre><code class="language-css">.wrapper {
 @include row();
}
</code></pre>
<p>This Mixin takes no values. It simply sets the size and position of the container, and makes sure that it'll adapt to different screen sizes. It saves</p>
<hr>
<h3>The grid Item</h3>
<pre><code class="language-css">@mixin col($col, $sum, $gap: 1em, $align: top) {
 width: 100%;
 font-size: 16px;
 display: inline-block;
 vertical-align: $align;
 box-sizing: border-box;
 padding-left: $gap;
 padding-right: $gap;
 @media only screen and (min-width: 750px) {
  width: percentage($col/$sum);
  vertical-align: $align;
 }
}
</code></pre>
<p>The grid Mixin is vastly more exiting. It takes 4 paramaters:</p>
<ol>
<li>$col - The amount of columns you want this grid item to take up</li>
<li>$sum - The total amount of columns in your grid (12 is a good number)</li>
<li>$gap - The left and right padding. The standard is <code>1em</code>
</li>
<li>$align - The vertical alignment of the item</li>
</ol>
<p>You can easily modify the Mixin, for example to add additional breakpoints to modify the grid.</p>
<h4>How to use</h4>
<pre><code class="language-css">.content {
 @include col(9, 12, 2em, bottom);
}
.sidebar {
 @include col(3, 12);
}
</code></pre>
<h3>Example</h3>
<p data-height="450" data-theme-id="16012" data-slug-hash="LpozKX" data-default-tab="result" data-user="triss90" class='codepen'>See the Pen <a href='http://codepen.io/triss90/pen/LpozKX/'>SASS Mixin Grid</a> by Tristan Oliver Mose Jensen White (<a href='http://codepen.io/triss90'>@triss90</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//assets.codepen.io/assets/embed/ei.js"></script>

                </div>
            </div>
        </div>
    </main>

    <script src='../../assets/js/vendor/highlight.pack.js'></script>
    <script>
    hljs.initHighlightingOnLoad();
    </script>

    <?php include '../../inc/footer.php'; ?>
    <?php include '../../inc/scripts.php'; ?>
</body>

</html>