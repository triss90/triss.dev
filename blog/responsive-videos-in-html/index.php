<?php $description = 'How to handle responsive videos in HTML';?>

<?php include '../../_inc/header.php';?>
<?php include '../../_inc/icons.php';?>

<span class='inverted'><?php include '../../_inc/navigation.php';?></span>

<main id='main' class='central space post blog'>

    <style>
.responsive-video {
  position: relative;
  padding-bottom: 56.25%;
}
.responsive-video iframe {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: $light-text-color;
  padding: 10px;
  border: 1px solid darken($light-text-color, 10%);
  border-radius: 3px;
}
</style>
<h1>Responsive Videos in HTML</h1>
<p class='timestamp'><time datetime='01-12-2015'>01-12-2015</time></p>
<hr>
<p>I happened upon an effective way of making videos responsive, and immediately implemented it on this site. Try resizing the window, to see the video beneath, adjust to the width of the page, while remaining its aspect ratio.</p>
<div class="responsive-video">
   <iframe src="https://www.youtube.com/embed/DgDg2ddiKIo"></iframe>
</div>
<br>
<p>The effect is achieved by adding a padding of 56.25% on the bottom of the div containing the video. We arrive at this number by dividing the aspect ratio's height and width and multiplying that number by 100 to get the result in percent. e.g. `( 9 / 16 ) * 100 = 56.25%</p>
<br>
<h3>The CSS</h3>
<pre><code class="language-css">.responsive-video {
 position: relative;
 padding-bottom: 56.25%;
}

.responsive-video iframe {
 position: absolute;
 width: 100%;
 height: 100%;
 top: 0;
 left: 0;
}
</code></pre>
<h3>The HTML</h3>
<pre><code class="language-html">&lt;div class=&quot;responsive-video&quot;&gt;
 &lt;iframe src=&quot;https://www.youtube.com/embed/DgDg2ddiKIo&quot;&gt;&lt;/iframe&gt;
&lt;/div&gt;
</code></pre>


</main>

<script src='../../assets/js/highlight.pack.js'></script>
<script>hljs.initHighlightingOnLoad();</script>

<?php include '../../_inc/footer.php';?>
