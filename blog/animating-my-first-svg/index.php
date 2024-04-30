<?php
    $activePage = "blog";
    $description = 'Learn how to animate SVGs.';
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
                    <h1>Animating my first SVG</h1>
<p class='timestamp'><time datetime='24-04-2019'>24-04-2019</time></p>
<hr>
<p>So! The goal was simple. I wanted to animate a simple menu icon on hover. I've worked with SVG for years,
but never directly manipulated the code other than perhaps simple transforms.
For this first project however, I wanted to try my luck,
with actually changing the size and dimension of SVG paths (Which turned out to be relatively easy).</p>
<p><strong>Here's the SVG in question:</strong></p>
<pre><code class="language-xml">&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;101&quot; height=&quot;78&quot; viewBox=&quot;0 0 101 78&quot;&gt;
  &lt;g fill=&quot;none&quot; fill-rule=&quot;evenodd&quot; stroke=&quot;#000&quot; stroke-width=&quot;4&quot;&gt;
    &lt;g id=&quot;bar-top&quot;&gt;
      &lt;circle cx=&quot;27.5&quot; cy=&quot;8.5&quot; r=&quot;6.5&quot;/&gt;
      &lt;path stroke-linecap=&quot;round&quot; d=&quot;M.5 8.5L20 8.5M45.5 8.5L97 8.5&quot;/&gt;
    &lt;/g&gt;
    &lt;g id=&quot;bar-middle&quot; transform=&quot;translate(0 30)&quot;&gt;
      &lt;circle cx=&quot;54.5&quot; cy=&quot;8.5&quot; r=&quot;6.5&quot;/&gt;
      &lt;path stroke-linecap=&quot;round&quot; d=&quot;M.5 8.5L45.5 8.5M72.5 8.5L97 8.5&quot;/&gt;
    &lt;/g&gt;
    &lt;g id=&quot;bar-bottom&quot; transform=&quot;translate(1 61)&quot;&gt;
      &lt;circle cx=&quot;41.5&quot; cy=&quot;8.5&quot; r=&quot;6.5&quot;/&gt;
      &lt;path stroke-linecap=&quot;round&quot; d=&quot;M.5 8.5L34 8.5M60.5 8.5L96 8.5&quot;/&gt;
    &lt;/g&gt;
  &lt;/g&gt;
&lt;/svg&gt;
</code></pre>
<svg xmlns="http://www.w3.org/2000/svg" width="101" height="78" viewBox="0 0 101 78">
  <g fill="none" fill-rule="evenodd" stroke="#000" stroke-width="4">
    <g id="bar-top">
      <circle cx="27.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L20 8.5M45.5 8.5L97 8.5"/>
    </g>
    <g id="bar-middle" transform="translate(0 30)">
      <circle cx="54.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L45.5 8.5M72.5 8.5L97 8.5"/>
    </g>
    <g id="bar-bottom" transform="translate(1 61)">
      <circle cx="41.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L34 8.5M60.5 8.5L96 8.5"/>
    </g>
  </g>
</svg>
<p>I created this SVG using sketch. As I don't know SVG intimately, I opted for creating a starting point(the image above),
and an endpoint (the following):</p>
<pre><code class="language-xml">&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;101&quot; height=&quot;78&quot; viewBox=&quot;0 0 101 78&quot;&gt;
  &lt;g fill=&quot;none&quot; fill-rule=&quot;evenodd&quot; stroke=&quot;#000&quot; stroke-width=&quot;4&quot;&gt;
    &lt;g id=&quot;bar-top&quot;&gt;
      &lt;circle cx=&quot;68.5&quot; cy=&quot;8.5&quot; r=&quot;6.5&quot;/&gt;
      &lt;path stroke-linecap=&quot;round&quot; d=&quot;M.5 8.5L61 8.5M88 8.5L97 8.5&quot;/&gt;
    &lt;/g&gt;
    &lt;g id=&quot;bar-middle&quot; transform=&quot;translate(0 30)&quot;&gt;
      &lt;circle cx=&quot;26.5&quot; cy=&quot;8.5&quot; r=&quot;6.5&quot;/&gt;
      &lt;path stroke-linecap=&quot;round&quot; d=&quot;M.5 8.5L19 8.5M46 8.5L97 8.5&quot;/&gt;
    &lt;/g&gt;
    &lt;g id=&quot;bar-bottom&quot; transform=&quot;translate(1 61)&quot;&gt;
      &lt;circle cx=&quot;52.5&quot; cy=&quot;8.5&quot; r=&quot;6.5&quot;/&gt;
      &lt;path stroke-linecap=&quot;round&quot; d=&quot;M.5 8.5L45 8.5M71 8.5L96 8.5&quot;/&gt;
    &lt;/g&gt;
  &lt;/g&gt;
&lt;/svg&gt;
</code></pre>
<svg xmlns="http://www.w3.org/2000/svg" width="101" height="78" viewBox="0 0 101 78">
  <g fill="none" fill-rule="evenodd" stroke="#000" stroke-width="4">
    <g id="bar-top">
      <circle cx="68.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L61 8.5M88 8.5L97 8.5"/>
    </g>
    <g id="bar-middle" transform="translate(0 30)">
      <circle cx="26.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L19 8.5M46 8.5L97 8.5"/>
    </g>
    <g id="bar-bottom" transform="translate(1 61)">
      <circle cx="52.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L45 8.5M71 8.5L96 8.5"/>
    </g>
  </g>
</svg>
<p>This way I could compare the the path values and then easily transition from one to the other.</p>
<p>Transitioning the SVG – or more specifically, the paths – can be done using CSS like so:</p>
<pre><code class="language-scss">svg:hover {
 #bar-top {
  circle {
   transform: translateX(40px);
  }
  path {
   d: path(&quot;M.5 8.5L61 8.5M88 8.5L97 8.5&quot;);
  }
 }
 #bar-middle {
  circle {
   transform: translateX(-27px);
  }
  path {
   d: path(&quot;M.5 8.5L19 8.5M46 8.5L97 8.5&quot;);
  }
 }
 #bar-bottom {
  circle {
   transform: translateX(20px);
  }
  path {
   d: path(&quot;M.5 8.5L45 8.5M71 8.5L96 8.5&quot;);
  }
 }
}
</code></pre>
<h2>Example</h2>
<p class="codepen" data-height="300" data-theme-id="36048" data-default-tab="result" data-user="triss90" data-slug-hash="EJrKpV" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid black; margin: 1em 0; padding: 1em;" data-pen-title="Animated SVG settings icon">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/EJrKpV/">
  Animated SVG settings icon</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
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