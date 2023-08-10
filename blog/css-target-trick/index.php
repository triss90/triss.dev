<?php $description = 'Learn how the CSS :target trick works';?>

<?php include '../../_inc/header.php';?>
<?php include '../../_inc/icons.php';?>

<span class='inverted'><?php include '../../_inc/navigation.php';?></span>

<main id='main' class='central space post blog'>

    <script>
document.getElementsByTagName("body")[0].id = "targetTrick";
</script>
<style>
#targetTrick:target {
    background: PapayaWhip;
}
.darkmode#targetTrick:target {
    background: DarkSlateGrey;
}
</style>
<h1>CSS :target Trick</h1>
<p class='timestamp'><time datetime='02-10-2019'>02-10-2019</time></p>
<hr>
<p>The CSS <code>:target</code> trick works by matching the hash(#) in the URL, to the ID of an element.</p>
<p>Consider the following URL <code>https://triss.dev/blog/2019/10/02/css-target-trick/#targetTrick</code></p>
<p>If the page contains an element with the ID of <code>#targetTrick</code>, the following selector will match and apply:</p>
<pre><code class="language-css">#targetTrick:target {
 background: PapayaWhip;
}
</code></pre>
<p>Click this link: <a href="#targetTrick" style="color: DodgerBlue">#targetTrick</a> and notice how the url now includes
<code>#targetTrick</code> which matches the ID on the body element.</p>
<p>This means that the selector above is valid and the background-color is applied.</p>
<h2>Examples</h2>
<p>You can do lots of awesome things with this trick. Here are a few examples:</p>
<h3>Sidebar navigation</h3>
<p class="codepen" data-height="650" data-theme-id="light" data-default-tab="result" data-user="triss90" data-slug-hash="oLGpmx" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS ':target'  Navigation">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/oLGpmx/">
  Tabs (checkbox-hack)</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<h3>Fluid responsive navigation</h3>
<p class="codepen" data-height="650" data-theme-id="light" data-default-tab="result" data-user="triss90" data-slug-hash="GZKRJo" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Fluid CSS Navigation">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/GZKRJo">
  Tabs (checkbox-hack)</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>


</main>

<script src='../../assets/js/highlight.pack.js'></script>
<script>hljs.initHighlightingOnLoad();</script>

<?php include '../../_inc/footer.php';?>
