<?php
    $activePage = "blog";
    $description = 'Learn how to set up and use fluid typography';
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
    <div class="article-progress">
        <div class="article-progress-inner"></div>
    </div>
    <?php include '../../inc/navigation.php'; ?>

    <main id='post'>
        <div class='container'>
            <div class='row'>
                <div class='tiny-12 small-10 medium-8 small-offset-1 medium-offset-2'>
                    <style>
.fluid-text, .fluid-text pre code, .fluid-text code {
    font-size: clamp(1rem, 2.5vw, 1.5rem);
}
</style>
<div class="fluid-text">
<h1>Fluid Typography</h1>
<p class='timestamp'><time datetime='20-05-2020'>20-05-2020</time></p>
<hr>
<p>Fluid typography has long been something I've wanted to implement in my projects.
There's never been an elegant way of going about doing this though.</p>
<p>To achieve fluid typography, you typically need to use some obsucre combination of media queries and css <code>calc()</code> like this:</p>
<pre><code class="language-css">html {
 font-size: 16px;
}
@media screen and (min-width: 320px) {
 html {
  font-size: calc(16px + 6 * ((100vw - 320px) / 680));
 }
}
@media screen and (min-width: 1000px) {
 html {
  font-size: 22px;
 }
}
</code></pre>
<p>This works, and works quite well. It scales the font-size from a minimum of 16px (at a 320px viewport)
to a maximum of 22px (at a 1000px viewport)</p>
<p>Writing this, however, is both cumbersome and annoying. It forces the developer to decide on screen sizes and and uses &quot;magic numbers&quot; liberally.</p>
<p>Fear not... There's a better way. <code>clamp()</code>.</p>
<p>If you're reading this article on a desktop device, you may have noticed that the typography is suspiciously large.</p>
<p>Try resizing the window, and you'll see the font-size scale accordingly.</p>
<p>I've implemented the following code on this specific page, to make the typography fluid</p>
<pre><code class="language-css">.fluid-text {
 font-size: clamp(1rem, 2.5vw, 1.5rem);
}
</code></pre>
<p>CSS <code>clamp()</code> takes 3 values. A minimum value, a preferred value, and a maximum allowed value.
The clamp() CSS function simply clamps a value between the minimum and maximum value.</p>
<p>You can play around with an example on Codepen:</p>
<p class="codepen" data-height="270" data-theme-id="light" data-default-tab="css,result" data-user="triss90" data-slug-hash="ZEbmdEO" data-editable="true" style="height: 270px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css clamp()">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/ZEbmdEO">
  css clamp()</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<h2>Browser support</h2>
<p>As of the writing of this article, CSS <code>clamp()</code> isn't supported in Safari, Internet Explorer and a number of other mobile browsers.
So, we're probably stuck with the bloated method above, for the foreseeable future.</p>
<p class="ciu_embed" data-feature="mdn-css__types__clamp" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=mdn-css_types_clamp">he clamp() CSS function clamps a value between an upper and lower bound. clamp() enables selecting a middle value within a range of values between a defined minimum and maximum.</a>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/public/caniuse-embed.min.js"></script>
</div>

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