<?php
    $activePage = "blog";
    $description = 'Learn how hexadecimal colors work';
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
                    <h1>A Guide to Hex</h1>
<p class='timestamp'><time datetime='12-06-2019'>12-06-2019</time></p>
<hr>
<p>Hex code is one way to communicate a color value to the browser, and in turn to the computer.
Hex is surprisingly similar to HSL and RGB, though at first sight it may not look like it.</p>
<h2>Syntax</h2>
<p>Hex: <code>#f2317f</code></p>
<p>RGB: <code>rgb(242,49,127)</code></p>
<p>HSL: <code>hsl(336%,88%,57%)</code></p>
<p>The syntax of both RGB and HSL are very descriptive and easy to read.
It's easily deduced that, the RGB color listed above contains more red(242) than it does green(49),
Leading to the conclusion that the color might lean towards the red side of the colorwheel.</p>
<p>Hex codes are comprised of 6 values that are part of the hexadecimal system, or base 16.
Instead of the 10 values we're used to with the decimal system(0-9), there are 16 (0-9 and A-F).</p>
<p>Each of the hexadecimal values represent a decimal value:</p>
<ul>
<li>0: 0</li>
<li>1: 1</li>
<li>2: 2</li>
<li>3: 3</li>
<li>4: 4</li>
<li>5: 5</li>
<li>6: 6</li>
<li>7: 7</li>
<li>8: 8</li>
<li>9: 9</li>
<li>A: 10</li>
<li>B: 11</li>
<li>C: 12</li>
<li>D: 13</li>
<li>E: 14</li>
<li>F: 15</li>
</ul>
<p>The 6 values that comprise the Hex color code can be further divided into 3 value pairs.
The first pair defines the red amount.
The second pair defines the green amount. And you guessed it,
the last pair defines the blue amount. This sounds a lot like RGB, doesn't it?</p>
<h2>#<span style="background:#f5c9c9;color:#e57373;padding:0 0.5rem;">f2</span><span style="background:#ebf6ec;color:#a5d6a7;padding:0 0.5rem;">31</span><span style="background:#e3f5fe;color:#81d4fa;padding:0 0.5rem;">7f</span></h2>
<h2>Converting Hex to RGB</h2>
<p>Knowing that hex color codes are just pairs of values that represent red, green and blue amounts,
we can go ahead and convert these to their decimal counterparts.</p>
<h3>Let's convert <code>#f2317f</code></h3>
<p>We start by dividing it into its three pairs: <code>f2</code>, <code>31</code>, <code>7f</code>.
Converting hexadecimal numbers to decimal is done using the following equation:</p>
<pre><code>decimal = hex_value * (16 ^ position)
</code></pre>
<p>The Hex value is translated using the table above. E.g. <code>d</code> = <code>13</code>.</p>
<p>To find the position, we start by assigning positional values to the first pair <code>f2</code>.
We do this from <strong>right</strong> to <strong>left</strong>. So <strong>2</strong> is assigned the value <code>0</code> and <strong>f</strong> is assigned the value <code>1</code>.</p>
<h3>Example</h3>
<pre><code>f: 15 * (16¹) = 240
2: 2 * (16⁰) = 2
</code></pre>
<p>We now have two new values, <code>240</code> and <code>2</code>. The last step is to add these to values, which gives us 242. This is our new decimal value for the first hex pair.
In other words, this is our &quot;red&quot; value.</p>
<p>Rinse and repeat, and we end up with <code>rgb(242,49,127)</code>.</p>
<p>I've made a handy script to easily convert Hex to RGB:</p>
<pre><code class="language-javascript">function hexToRgb(input) {
 const base16 = {
  0: 0,
  1: 1,
  2: 2,
  3: 3,
  4: 4,
  5: 5,
  6: 6,
  7: 7,
  8: 8,
  9: 9,
  a: 10,
  b: 11,
  c: 12,
  d: 13,
  e: 14,
  f: 15,
 };
 const hex = input.split(&quot;&quot;);
 let r = hex.splice(0, 2);
 r =
  parseInt(base16[r[0]], 10) * Math.pow(16, 1) +
  parseInt(base16[r[1]], 10) * Math.pow(16, 0);
 let g = hex.splice(0, 2);
 g =
  parseInt(base16[g[0]], 10) * Math.pow(16, 1) +
  parseInt(base16[g[1]], 10) * Math.pow(16, 0);
 let b = hex.splice(0, 2);
 b =
  parseInt(base16[b[0]], 10) * Math.pow(16, 1) +
  parseInt(base16[b[1]], 10) * Math.pow(16, 0);
 return {
  r: r,
  g: g,
  b: b,
 };
}

const rgb = hexToRgb(&quot;f06d06&quot;);
console.log(rgb[&quot;r&quot;], rgb[&quot;g&quot;], rgb[&quot;b&quot;]);
</code></pre>
<p>Here's a live example of the script in action:</p>
<p class="codepen" data-height="265" data-theme-id="light" data-default-tab="js,result" data-user="triss90" data-slug-hash="GbRdZx" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="hex to rgb">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/GbRdZx/">
  hex to rgb</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>

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