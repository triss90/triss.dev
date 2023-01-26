
            <?php $description = 'Maintaining Aspect Ratio';  ?>
            <?php include('../../../../../_inc/header.php'); ?>
            <?php include('../../../../../_inc/icons.php'); ?>
            
            <span class='inverted'><?php include('../../../../../_inc/navigation.php'); ?></span>
            <main id='main' class='central space post'>
        <h1>Maintaining Aspect Ratio</h1>
<p class='timestamp'><time datetime='07-06-2019'>07-06-2019</time></p>
<hr>
<p>So, maintaining aspect ratio on a responsive element is surprisingly easy!
You know how adding <code>padding-top: 50%</code> does not actually add 50% of the original height of the element as padding?
Rather it adds 50% of the width of the parent element! </p>
<p>With this in mind we can quickly force e`lements to maintain their aspect ratio when being resized:</p>
<pre><code class="language-css">.element {
  width: 100%;
  padding-bottom: 100%;
  height: 0;
}</code></pre>
<p>I use this trick on <a href="https://colordrop.io">colordrop.io</a>, to maintain the aspect ratio of the color palettes.</p>
<p><strong>Here's a quick example from <a href="https://colordrop.io">colordrop.io</a>:</strong></p>
<p class="codepen" data-height="465" data-theme-id="light" data-default-tab="html,result" data-user="triss90" data-slug-hash="ZNOyem" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Aspect Ratio Example">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/ZNOyem/">
  Aspect Ratio Example</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
            </main>
            <script src='../../../../../assets/js/highlight.pack.js'></script>
            <script>hljs.initHighlightingOnLoad();</script>
            <?php include('../../../../../_inc/footer.php'); ?>
        