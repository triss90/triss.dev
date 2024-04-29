<?php
    $activePage = "blog";
    $description = 'Learn how to use the HTML meter tag';
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
                    <h1>HTML &lt;meter&gt; Tag</h1>
<p class='timestamp'><time datetime='12-09-2019'>12-09-2019</time></p>
<hr>
<p>This week's article in the installment &quot;what's that weird html tag?&quot;,
takes a look at the <code>&lt;meter&gt;</code> tag.</p>
<p>The <code>&lt;meter&gt;</code> element represents a scalar measurement within a known range, for example disk usage.
It should not be used to create progress bars or in any other way indicate progress. Use the <a href="https://triss.dev/blog/2019/09/19/html-progress-tag">progress bar element</a> instead.</p>
<br>
<h2>Styling</h2>
<p>There are five pseudo classes you can use for styling the meter element
-webkit-meter-inner-element
-webkit-meter-bar
-webkit-meter-optimum-value
-webkit-meter-suboptimum-value
-webkit-meter-even-less-good-value</p>
<h3>-webkit-meter-inner-element</h3>
<p>Additional markup to render the meter element as read-only.</p>
<h3>-webkit-meter-bar</h3>
<p>The meter bar container. This is used for styling the meter element.</p>
<pre><code class="language-html">&lt;meter min=&quot;0&quot; max=&quot;10&quot; value=&quot;3&quot;&gt;3 out of 10&lt;/meter&gt;
</code></pre>
<pre><code class="language-css">meter::-webkit-meter-bar {
 background: salmon;
}
</code></pre>
<style>
meter.ex1::-webkit-meter-bar {
 background: salmon;
}
</style>
<p><meter class="ex1" min="0" max="10" value="3">3 out of 10</meter></p>
<h3>-webkit-meter-optimum-value</h3>
<p>This is the current value of the meter. It's green by default when the value falls within the low-high range.</p>
<pre><code class="language-html">&lt;meter min=&quot;0&quot; max=&quot;10&quot; value=&quot;3&quot; optimum=&quot;0&quot;&gt;3 out of 10&lt;/meter&gt;
</code></pre>
<pre><code class="language-css">meter::-webkit-meter-optimum-value {
 background: green;
}
</code></pre>
<style>
meter.ex2::-webkit-meter-optimum-value {
 background: green;
}
</style>
<p><meter class="ex2" min="0" max="10" value="3" optimum="3">3 out of 10</meter></p>
<h3>-webkit-meter-suboptimum-value</h3>
<p>Gives a yellow color to the meter element when the value attribute falls outside the low-high range.</p>
<pre><code class="language-html">&lt;meter min=&quot;0&quot; max=&quot;10&quot; value=&quot;6&quot; optimum=&quot;0&quot; low=&quot;5&quot;&gt;6 out of 10&lt;/meter&gt;
</code></pre>
<pre><code class="language-css">meter::-webkit-meter-suboptimum-value {
 background: yellow;
}
</code></pre>
<style>
meter.ex3::-webkit-meter-suboptimum-value {
 background: yellow;
}
</style>
<p><meter class="ex3" min="0" max="10" value="6" optimum="0" low="5">6 out of 10</meter></p>
<h3>-webkit-meter-even-less-good-value</h3>
<p>Gives a red color to the meter element when the value and the optimum attributes fall outside the low-high range but in opposite zones. For example, value &lt; low &lt; high &lt; optimum or value &gt; high &gt; low &gt; optimum</p>
<pre><code class="language-html">&lt;meter min=&quot;0&quot; max=&quot;10&quot; value=&quot;9&quot; optimum=&quot;0&quot; low=&quot;5&quot; high=&quot;8&quot;&gt;
 9 out of 10
&lt;/meter&gt;
</code></pre>
<pre><code class="language-css">meter::-webkit-meter-suboptimum-value {
 background: red;
}
</code></pre>
<style>
meter.ex4::-webkit-meter-even-less-good-value {
 background: red;
}
</style>
<p><meter class="ex4" min="0" max="10" value="9" optimum="0" low="5" high="8">9 out of 10</meter></p>
<br>
<h2>Example</h2>
<p class="codepen" data-height="265" data-theme-id="light" data-default-tab="result" data-user="triss90" data-slug-hash="LwgdRv" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Meter HTML Test">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/LwgdRv/">
  Meter HTML Test</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
<br>
<h2>Browser Support</h2>
<p>The <code>&lt;meter&gt;</code> tag is widely supported, only lacking support on IE and IE Mobile:</p>
<p class="ciu_embed" data-feature="meter" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=meter">Method of indicating the current level of a gauge.</a>
</p>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>

                </div>
            </div>
        </div>
    </main>

    <script src='../../assets/js/article.js'></script>
    <script src='../../assets/js/vendor/highlight.pack.js'></script>
    <script>
    hljs.initHighlightingOnLoad();
    </script>

    <?php include '../../inc/footer.php'; ?>
    <?php include '../../inc/scripts.php'; ?>
</body>

</html>