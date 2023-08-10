<?php $description = 'Learn how to use the HTML progress tag';?>

<?php include '../../_inc/header.php';?>
<?php include '../../_inc/icons.php';?>

<span class='inverted'><?php include '../../_inc/navigation.php';?></span>

<main id='main' class='central space post blog'>

    <h1>HTML &lt;progress&gt; Tag</h1>
<p class='timestamp'><time datetime='19-09-2019'>19-09-2019</time></p>
<hr>
<style>
progress {
 -webkit-appearance: none;
 -moz-appearance: none;
 appearance: none;
}
progress.one::-webkit-progress-bar {
 background: red;
}
progress.two::-webkit-progress-value {
 background: red;
}
</style>
<p>This week we're looking at the <code>&lt;progress&gt;</code> tag.</p>
<p>The <code>&lt;progress&gt;</code> tag offers a method of indicating a progress state. Thus it represents the completion
of a task, like loading a site, downloading a file and so on.</p>
<p>The progress tag takes two attributes: <code>max</code> which represent the maximum value
and <code>value</code> which represents the current value.</p>
<h2>Styling</h2>
<p>WebKit/Blink provides two pseudo classes for styling the progress element: <code>-webkit-progress-bar</code> which lets you modify the progress element container,
and <code>-webkit-progress-value</code> which is used for styling the value inside the container.</p>
<p>Start by resetting the styles:</p>
<pre><code class="language-css">progress {
 -webkit-appearance: none;
 -moz-appearance: none;
 appearance: none;
}
</code></pre>
<h3>-webkit-progress-bar</h3>
<pre><code class="language-html">&lt;progress max=&quot;100&quot; value=&quot;65&quot;&gt;&lt;/progress&gt;
</code></pre>
<pre><code class="language-css">progress::-webkit-progress-bar {
 background: red;
}
</code></pre>
<p><progress class="one" max="100" value="65"></progress></p>
<h3>-webkit-progress-value</h3>
<pre><code class="language-html">&lt;progress max=&quot;100&quot; value=&quot;65&quot;&gt;&lt;/progress&gt;
</code></pre>
<pre><code class="language-css">progress::-webkit-progress-value {
 background: red;
}
</code></pre>
<p><progress class="two" max="100" value="65"></progress></p>
<h2>Example</h2>
<p class="codepen" data-height="265" data-theme-id="light" data-default-tab="result" data-user="triss90" data-slug-hash="XWrXRJy" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="HTML Progress Test">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/XWrXRJy/">
  HTML Progress Test</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
<h2>Browser Support</h2>
<p>The <code>&lt;progress&gt;</code> tag is widely supported. Besides iOS Safari which only partly supports it,
every other browser offers full support.</p>
<p class="ciu_embed" data-feature="progress" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=progress">Method of indicating a progress state.</a>
</p>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>


</main>

<script src='../../assets/js/highlight.pack.js'></script>
<script>hljs.initHighlightingOnLoad();</script>

<?php include '../../_inc/footer.php';?>
