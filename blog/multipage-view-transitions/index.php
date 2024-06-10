<?php
    $activePage = "blog";
    $description = 'Getting started with multipage view transitions';
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
                    <h1 class="post-transition-end">Multipage View Transitions</h1>
<p class='timestamp'><time datetime='April 28, 2024'>April 28, 2024</time></p><hr>
<h2>Enable support</h2>
<p>As of April 2024, View Transitions, are still an experimental feature and thus need to be activated in Chrome like so: <a href="chrome://flags#view-transition-on-navigation">chrome://flags#view-transition-on-navigation</a></p>
<p>⚠️ Once the flag has been enabled, make sure to restart your browser.</p>
<h2>Include view-transitions meta tag</h2>
<p>Insert the following line into the global <code>&lt;head&gt;</code> section of your layout template:</p>
<pre><code>&lt;meta name=&quot;view-transition&quot; content=&quot;same-origin&quot; /&gt;
</code></pre>
<p>Congratulations, you've enabled page transitions! This simple addition implements a crossfade effect throughout your website, making it resemble a PowerPoint presentation. It's uncertain whether this <code>&lt;meta&gt;</code> tag will remain the definitive method for activating this feature, but it's great to see that it functions effectively.</p>
<h2>Add individual transitions</h2>
<p>To apply transitions to specific elements, use named view transitions in your CSS. Assign the same unique <code>view-transition-name</code> to the element you wish to transition from (located on <code>page-1.html</code>) and the element you want to transition to (on <code>page-2.html</code>).</p>
<h3>page-1.html</h3>
<pre><code>&lt;div class=&quot;hero-page-1&quot; style=&quot;view-transition-name: hero&quot;&gt;
    &lt;h1&gt;This is Page 1&lt;/h1&gt;
    &lt;a href=&quot;/page-2.html&quot;&gt;Go to page 2&lt;/a&gt;
&lt;/div&gt;
</code></pre>
<h3>page-2.html</h3>
<pre><code>&lt;div class=&quot;hero-page-2&quot; style=&quot;view-transition-name: hero&quot;&gt;
    &lt;h1&gt;This is Page 2&lt;/h1&gt;
&lt;/div&gt;
</code></pre>
<p>There you go! This creates a &quot;morph&quot; effect between the two pages. If you prefer not to use inline styles, you can also achieve this with a CSS file. Additionally, if you want to consider accessibility, disable the view transitions for users who experience motion sickness:</p>
<pre><code>@media not (prefers-reduced-motion: reduce) {
    .hero-page-1,
    .hero-page-2 { 
        view-transition-name: hero 
    }
}
</code></pre>
<h2>How does it work</h2>
<p>Under the hood, the browser rasterizes (i.e., creates images of) the initial and final states of the DOM elements you're transitioning. It then identifies the differences between these two snapshots and interpolates between them.</p>
<h2>Browser support</h2>
<p>The View Transition API is still in the experimental stage and is presently only available in Chrome browsers, accessible behind an experimental flag at <a href="chrome://flags#view-transition-on-navigation">chrome://flags#view-transition-on-navigation</a>. Nevertheless, this feature supports progressive enhancement, meaning you can safely incorporate the meta tag into your head section to benefit from smooth transitions.</p>
<p class="ciu_embed" data-feature="view-transitions" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=view-transitions">Provides a mechanism for easily creating animated transitions between different DOM states,</a>
</p>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/public/caniuse-embed.min.js"></script>

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