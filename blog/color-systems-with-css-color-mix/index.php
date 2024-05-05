<?php
    $activePage = "blog";
    $description = 'Setting up a color system with CSS color-mix';
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
    <a id="top" href="#main">skip to content</a>
    <?php include '../../inc/themes.php'; ?>
    <div class="article-progress">
        <div class="article-progress-inner"></div>
    </div>
    <?php include '../../inc/navigation.php'; ?>

    <main id='post'>
        <div class='container'>
            <div class='row'>
                <div class='tiny-12 small-10 medium-8 small-offset-1 medium-offset-2'>
                    <style>
:root {
  --primary: #e62739;
  --primary-a90: color-mix(in srgb, var(--primary), transparent 10%);
  --primary-a80: color-mix(in srgb, var(--primary), transparent 20%);
  --primary-a50: color-mix(in srgb, var(--primary), transparent 50%);
  --secondary: #21A8A3;
  --secondary-a90: color-mix(in srgb, var(--secondary), transparent 10%);
  --secondary-a80: color-mix(in srgb, var(--secondary), transparent 20%);
  --secondary-a50: color-mix(in srgb, var(--secondary), transparent 50%);
  --dark: #19191a;
  --dark-a90: color-mix(in srgb, var(--dark), transparent 10%);
  --dark-a80: color-mix(in srgb, var(--dark), transparent 20%);
  --dark-a50: color-mix(in srgb, var(--dark), transparent 50%);
  --light: #f1f1f1;
  --light-a90: color-mix(in srgb, var(--light), transparent 10%);
  --light-a80: color-mix(in srgb, var(--light), transparent 20%);
  --light-a50: color-mix(in srgb, var(--light), transparent 50%);
}
.box-group {
  display: flex;
  margin-bottom: 1rem;
  overflow: hidden;
  border-radius: 0.5rem;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
}
.box {
  width: 25%;
  aspect-ratio: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  font-size: 65%;
  color: var(--light);
}
.box-group#light .box {
  color: var(--dark);
}
</style>
<h1>Color systems with CSS color-mix()</h1>
<p class='timestamp'><time datetime='17-05-2023'>17-05-2023</time></p>
<hr>
<p>With the advent of CSS4, we're introduced to the <code>color-mix()</code> function, which offers a powerful tool for web designers and developers. This function allows the mixing of two colors in a specified color space, providing a high degree of control over the resultant color.</p>
<p>The syntax for the <code>color-mix()</code> function is as follows:</p>
<pre><code>color-mix(&lt;colorspace&gt; &lt;color&gt; [percentage], &lt;color&gt;)
</code></pre>
<p>The <code>&lt;colorspace&gt;</code> can be any one of <code>srgb</code>, <code>display-p3</code>, <code>a98-rgb</code>, <code>prophoto-rgb</code>, or <code>rec-2020</code>, each offering a different color gamut. The <code>&lt;color&gt;</code> values represent the two colors to be mixed, and the optional <code>[percentage]</code> value determines the proportion of the first color in the resultant color. If the <code>[percentage]</code> is not provided, the two colors are mixed equally.</p>
<p>For example, mixing red and blue equally in the sRGB color space can be achieved as follows:</p>
<pre><code class="language-CSS">div {
  background-color: color-mix(in srgb, red, blue);
}
</code></pre>
<p><strong>Example:</strong></p>
<div class="box" style="background-color:color-mix(in srgb, red, blue); box-shadow: 0 0 10px rgba(0,0,0,0.2); border-radius: 0.5rem"></div>
<p>Or, to mix red and blue in the sRGB color space with red contributing 60% to the resultant color, you would use:</p>
<pre><code class="language-CSS">div {
  background-color: color-mix(in srgb, red 60%, blue);
}
</code></pre>
<p><strong>Example:</strong></p>
<div class="box" style="background-color: color-mix(in srgb, red 60%, blue); box-shadow: 0 0 10px rgba(0,0,0,0.2); border-radius: 0.5rem"></div>
<h2>Color System</h2>
<p>A color framework for a web project is essentially a set of guidelines that help maintain consistency, improve user experience, and emphasize the visual identity of a web application or site. It involves a systematic approach to using color throughout a web project, from the user interface design to the branding.</p>
<p>A color framework usually consists of a series of primary colors, secondary colors, dark and light colors, but also hues, or darker and lighter shades of these. <code>color-mix</code>can be used to achieve this while mainting very readable code:</p>
<pre><code class="language-CSS">:root {
  --primary: #e62739;
  --primary-a90: color-mix(in srgb, var(--primary), transparent 10%);
  --primary-a80: color-mix(in srgb, var(--primary), transparent 20%);
  --primary-a50: color-mix(in srgb, var(--primary), transparent 50%);

  --secondary: #21A8A3;
  --secondary-a90: color-mix(in srgb, var(--secondary), transparent 10%);
  --secondary-a80: color-mix(in srgb, var(--secondary), transparent 20%);
  --secondary-a50: color-mix(in srgb, var(--secondary), transparent 50%);

  --dark: #19191a;
  --dark-a90: color-mix(in srgb, var(--dark), transparent 10%);
  --dark-a80: color-mix(in srgb, var(--dark), transparent 20%);
  --dark-a50: color-mix(in srgb, var(--dark), transparent 50%);

  --light: #f1f1f1;
  --light-a90: color-mix(in srgb, var(--light), transparent 10%);
  --light-a80: color-mix(in srgb, var(--light), transparent 20%);
  --light-a50: color-mix(in srgb, var(--light), transparent 50%);
}
</code></pre>
<p><strong>Example:</strong></p>
<div class="box-group">
  <div class="box" style="background-color: var(--primary)">var(--primary</div>
  <div class="box" style="background-color: var(--primary-a90)">var(--primary-a90)</div>
  <div class="box" style="background-color: var(--primary-a80)">var(--primary-a80)</div>
  <div class="box" style="background-color: var(--primary-a50)">var(--primary-a50)</div>
</div>
<div class="box-group">
  <div class="box" style="background-color: var(--secondary)">var(--secondary</div>
  <div class="box" style="background-color: var(--secondary-a90)">var(--secondary-a90)</div>
  <div class="box" style="background-color: var(--secondary-a80)">var(--secondary-a80)</div>
  <div class="box" style="background-color: var(--secondary-a50)">var(--secondary-a50)</div>
</div>
<div class="box-group">
  <div class="box" style="background-color: var(--dark)">var(--dark</div>
  <div class="box" style="background-color: var(--dark-a90)">var(--dark-a90)</div>
  <div class="box" style="background-color: var(--dark-a80)">var(--dark-a80)</div>
  <div class="box" style="background-color: var(--dark-a50)">var(--dark-a50)</div>
</div>
<div class="box-group" id="light">
  <div class="box" style="background-color: var(--light)">var(--light</div>
  <div class="box" style="background-color: var(--light-a90)">var(--light-a90)</div>
  <div class="box" style="background-color: var(--light-a80)">var(--light-a80)</div>
  <div class="box" style="background-color: var(--light-a50)">var(--light-a50)</div>
</div>
<h2>My color system template</h2>
<p>Presented below is my standardized color system framework, which I employ as a foundational template for every new project I undertake. It seamlessly incorporates native support for both light and dark mode.</p>
<pre><code class="language-CSS">/* Base color scheme (fallback) */
:root {
  --color-1: #e62739; /* The primary color (var(--primary), var(--primary-a90), var(--primary-80), var(--primary-a50)) */
  --color-2: #21A8A3; /* The secondary color (var(--secondary), var(--secondary-a90), var(--secondary-80), var(--secondary-a50)) */
  --color-3: #19191a; /* Initial foreground color (var(--foreground), var(--foreground-a90), var(--foreground-80), var(--foreground-a50)) */
  --color-4: #f1f1f1; /* Initial background color (var(--background), var(--background-a90), var(--background-80), var(--background-a50)) */

  --primary: var(--color-1);
  --primary-a90: color-mix(in srgb, var(--primary), transparent 10%);
  --primary-a80: color-mix(in srgb, var(--primary), transparent 20%);
  --primary-a50: color-mix(in srgb, var(--primary), transparent 50%);

  --secondary: var(--color-2);
  --secondary-a90: color-mix(in srgb, var(--secondary), transparent 10%);
  --secondary-a80: color-mix(in srgb, var(--secondary), transparent 20%);
  --secondary-a50: color-mix(in srgb, var(--secondary), transparent 50%);

  --foreground: var(--color-3);
  --foreground-a90: color-mix(in srgb, var(--foreground), transparent 10%);
  --foreground-a80: color-mix(in srgb, var(--foreground), transparent 20%);
  --foreground-a50: color-mix(in srgb, var(--foreground), transparent 50%);

  --background: var(--color-4);
  --background-a90: color-mix(in srgb, var(--background), transparent 10%);
  --background-a80: color-mix(in srgb, var(--background), transparent 20%);
  --background-a50: color-mix(in srgb, var(--background), transparent 50%);
}

/* lightmode or fallback if user has no preference */
@media (prefers-color-scheme: light),(prefers-color-scheme: no-preference) {
  :root {
    --foreground: var(--color-3);
    --foreground-a90: color-mix(in srgb, var(--foreground), transparent 10%);
    --foreground-a80: color-mix(in srgb, var(--foreground), transparent 20%);
    --foreground-a50: color-mix(in srgb, var(--foreground), transparent 50%);

    --background: var(--color-4);
    --background-a90: color-mix(in srgb, var(--background), transparent 10%);
    --background-a80: color-mix(in srgb, var(--background), transparent 20%);
    --background-a50: color-mix(in srgb, var(--background), transparent 50%);
  }
}

/* darkmode */
@media (prefers-color-scheme: dark) {
  :root {
    --foreground: var(--color-4);
    --foreground-a90: color-mix(in srgb, var(--foreground), transparent 10%);
    --foreground-a80: color-mix(in srgb, var(--foreground), transparent 20%);
    --foreground-a50: color-mix(in srgb, var(--foreground), transparent 50%);

    --background: var(--color-3);
    --background-a90: color-mix(in srgb, var(--background), transparent 10%);
    --background-a80: color-mix(in srgb, var(--background), transparent 20%);
    --background-a50: color-mix(in srgb, var(--background), transparent 50%);
  }
}
</code></pre>

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