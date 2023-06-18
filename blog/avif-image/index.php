<?php $description = 'An introduction to AVIF images';  ?>

<?php include('../../_inc/header.php'); ?>
<?php include('../../_inc/icons.php'); ?>

<span class='inverted'><?php include('../../_inc/navigation.php'); ?></span>

<main id='main' class='central space post'>

    <style>

</style>
<h1>AVIF Image Format</h1>
<p class='timestamp'><time datetime='20-05-2020'>20-05-2020</time></p>
<hr>
<p>Google Chrome just added support for the new AVIF image format.</p>
<p>The AVIF Image format is a modern image format based on the AV1 video format. AVIF generally has better compression than WebP, JPEG, PNG and GIF and is designed to supersede them.</p>
<p>My preliminary tests show an easy reduction in size by a factor of 10. Take the following examples:</p>
<h2>bruce.jpg (221KB)</h2>
<img src="https://triss.dev/examples/bruce.jpg" alt="Cute pug on couch">
<h2>bruce.avif (24KB)</h2>
<img src="https://triss.dev/examples/bruce.avif" alt="Cute pug on couch">
<h2>Browser support</h2>
<p>The AVIF image format is currently only supported by Chrome, but can easily be used with backwards compatible jpgs like so:</p>
<pre><code class="language-html">&lt;picture&gt;
 &lt;source type=&quot;image/avif&quot; srcset=&quot;https://triss.dev/examples/bruce.avif&quot; /&gt;
 &lt;img src=&quot;https://triss.dev/examples/bruce.jpg&quot; alt=&quot;Cute pug on couch&quot; /&gt;
&lt;/picture&gt;
</code></pre>
<p class="ciu_embed" data-feature="avif" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=mdn-avif">A modern image format based on the AV1 video format. AVIF generally has better compression than WebP, JPEG, PNG and GIF and is designed to supersede them.</a>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>


</main>

<script src='../../assets/js/highlight.pack.js'></script>
<script>hljs.initHighlightingOnLoad();</script>

<?php include('../../_inc/footer.php'); ?>
