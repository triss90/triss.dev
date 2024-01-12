<?php $description = 'The hexadecimal color system includes an option for an alpha channel!';?>

<?php include '../../_inc/header.php';?>
<?php include '../../_inc/icons.php';?>

<span class='inverted'><?php include '../../_inc/navigation.php';?></span>

<main id='main' class='central space post blog'>

    <h1>Hex color notation have an alpha channel</h1>
<p class='timestamp'><time datetime='2024-01-12'>2024-01-12</time></p><hr>
<p>The hexadecimal color system includes an option for an alpha channel. This alpha channel is used to specify transparency and can be added to the basic hex color codes. There are two formats for incorporating the alpha channel: either as <code>#RGB[A]</code> or as <code>#RRGGBB[AA]</code>.</p>
<p>The alpha value in these formats is represented in hexadecimal, where <code>00</code> denotes complete transparency and `FF`` signifies full opacity.</p>
<p>For the longer format, <code>#RRGGBB[AA]</code>, the alpha channel is a two-digit hexadecimal number. In contrast, the shorter <code>#RGB[A]</code> version uses a single hexadecimal digit for the alpha channel, ranging from <code>0</code> to <code>F</code>.</p>
<p>Examples include:</p>
<pre><code>#FF7f00     /* orange               */
#FF7f0000   /* orange 	 0% opaque  */
#FF7f0080   /* orange   50% opaque  */
#FF7f00FF   /* orange  100% opaque  */

#01E        /* blue               */
#01E0       /* blue     0% opaque */
#01E8       /* blue    53% opaque */
#01EF       /* blue   100% opaque */
</code></pre>
<p>Additional details and examples can be found on the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/hex-color">Mozilla Developer Network (MDN) website</a>.</p>


</main>

<script src='../../assets/js/highlight.pack.js'></script>
<script>hljs.initHighlightingOnLoad();</script>

<?php include '../../_inc/footer.php';?>
