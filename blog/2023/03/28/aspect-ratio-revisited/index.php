
            <?php $description = 'Aspect Ratio Revisited';  ?>
            <?php include('../../../../../_inc/header.php'); ?>
            <?php include('../../../../../_inc/icons.php'); ?>
            
            <span class='inverted'><?php include('../../../../../_inc/navigation.php'); ?></span>
            <main id='main' class='central space post'>
        <style>
  .result {
    text-decoration-line: underline;
    text-decoration-style: double;
  }
  .example {
    width: 100%;
    background-image: url('https://webbox.dev/placeholder/image.php?width=533&height=300&text=placeholder&textColor=162,252,162&backgroundColor=34,34,34');
    background-size: cover;
  }
  .example-1 {
    height: 0;
    padding-top: 56.25%
  }
  .example-2 {
    aspect-ratio: 16 / 9;
  }
</style>
<h1>Aspect Ratio Revisited</h1>
<p class='timestamp'><time datetime='28-03-2023'>28-03-2023</time></p>
<hr>
<p>Back in 2019 I wrote a short post about <a href="https://triss.dev/blog/2019/06/07/maintaining-aspect-ration/">Maintaining Aspect Ratio</a> with CSS. </p>
<p>The example I gave, took advantage of what is called the "padding-hack", 
which works by setting the <code>height</code> of an element to 0 and the <code>padding-top</code> 
to the percentage that represents the relation between width and height, i.e. the aspect ratio.</p>
<p>To maintain an aspect ratio of 9:16 you would be setting the <code>padding-top</code> to 56.25% like so:</p>
<pre><code>.element {
  width: 100%;
  background-image: url('https://webbox.dev/placeholder/image.php?width=533&amp;height=300&amp;text=placeholder&amp;textColor=162,252,162&amp;backgroundColor=34,34,34');
  background-size: cover;

  /* Aspect Ratio */
  height: 0;
  padding-top: 56.25%
}</code></pre>
<p><strong>Result:</strong></p>
<p><small>Resize window to see the effect of the applied aspect ratio</small></p>
<div class="example example-1"></div>
<p>To calculate the percentage of your aspect ratio, simply divide the dimensions like so: ( 9 / 16 ) × 100 = <span class=result>56.25%</span>.</p>
<h2>So what's new?</h2>
<p>In the time since I posted this "hack", the CSS property <code>aspect-ratio</code> has gained full support in all major browsers, 
so we now have a much better way of defining aspect ratio.</p>
<p>Using the CSS property <code>aspect-ratio</code> removes all the guesswork and calculations required. 
You simply need to define your preferred aspect ratio like so:</p>
<pre><code>.element {
  width: 100%;
  background-image: url('https://webbox.dev/placeholder/image.php?width=533&amp;height=300&amp;text=placeholder&amp;textColor=162,252,162&amp;backgroundColor=34,34,34');
  background-size: cover;

  /* Aspect Ratio */
  aspect-ratio: 16 / 9;
}</code></pre>
<p><strong>Result:</strong></p>
<p><small>Resize window to see the effect of the applied aspect ratio</small></p>
<div class="example example-2"></div>
<p>Note that whenever you want to use <code>aspect-ratio</code> you must only define one dimension, either width or height, 
otherwise the aspect ratio will be overridden.</p>
            </main>
            <script src='../../../../../assets/js/highlight.pack.js'></script>
            <script>hljs.initHighlightingOnLoad();</script>
            <?php include('../../../../../_inc/footer.php'); ?>
        