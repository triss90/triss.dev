<?php
    $activePage = "blog";
    $description = 'Scroll elements into view with only 3 lines of css!';
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
                    <h1 class="post-transition-end">CSS Only Scroll Into View Effect</h1>
<p class='timestamp'><time datetime='June 8, 2024'>June 8, 2024</time></p><hr>
<p>You know how sometimes you stumble upon something so cool and simple, you just have to share it? That’s exactly what happened to me the other day with a CSS trick that feels like finding a hidden shortcut in your favorite video game. For years, I've have used a mix of CSS hacks and JavaScript libraries to create animations that only kick in when you actually see them on your screen. But with this one trick, it can be as easy as adding just three lines of CSS!</p>
<p>Cue the Spotlight with <code>animation-timeline: view();</code>:</p>
<pre><code class="language-CSS">.animate {
    animation: appear linear;
    animation-timeline: view();
    animation-range: entry 0 cover 40%;
}
</code></pre>
<p>This neat line of CSS is like hiring a stage manager for your web elements. Gone are the days of elements popping up prematurely as the page loads. With <code>animation-timeline: view();</code>, your elements wait quietly in out of view, making their entrance only when they become visible to the user.</p>
<p>Just include the CSS we mentioned above on any element you want to animate as it comes into view. Then, choose a fitting animation to bring it to life:</p>
<pre><code class="language-CSS">@keyframes appear {
    from {
        opacity: 0;
        scale: 0.5;
    }
    to {
        opacity: 1;
        scale: 1;
    }
}
</code></pre>
<h2>Example 1</h2>
<p class="codepen" data-height="475" data-default-tab="result" data-slug-hash="yLWooLb" data-pen-title="Scroll Into View" data-user="triss90" style="height: 475px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/yLWooLb">
  Scroll Into View</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<h2>Example 2</h2>
<p class="codepen" data-height="475" data-default-tab="result" data-slug-hash="vYwJJVO" data-pen-title="Scroll Into View (Example 2)" data-user="triss90" style="height: 475px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/vYwJJVO">
  Scroll Into View (Example 2)</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

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