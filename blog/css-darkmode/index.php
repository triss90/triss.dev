<?php
    $activePage = "blog";
    $description = 'Learn how to add darkmode to your website';
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
                    <h1>CSS Darkmode</h1>
<p class='timestamp'><time datetime='24-08-2019'>24-08-2019</time></p>
<hr>
<p>I was messing around with native darkmode on the web the other day, and ended up implementing
<code>prefers-color-scheme</code> on <a href="https://mrkdwn.net">mrkdwn.net</a> as proof of concept.</p>
<p><code>prefers-color-scheme</code> has three available keyword values:</p>
<ul>
<li>
<code>no-preference</code> which indicates that the user has no preference, as to where the site should appear dark og light.</li>
<li>
<code>light</code> which indicates that the user prefers <strong>light</strong> mode</li>
<li>
<code>dark</code>, which indicates that the user prefers <strong>dark</strong> mode.</li>
</ul>
<h2>Example</h2>
<pre><code class="language-css">/* Base color scheme (fallback) */
:root {
 --background-color: #fff;
 --primary-color: #157efb;
 --font-color: #151513;
 --border-color: #dfe1e7;
}

/* whitemode or fallback if user has no preference */
@media (prefers-color-scheme: light), (prefers-color-scheme: no-preference) {
 :root {
  --background-color: #fff;
  --primary-color: #157efb;
  --font-color: #151513;
  --border-color: #dfe1e7;
 }
}

/* darkmode */
@media (prefers-color-scheme: dark) {
 :root {
  --background-color: #1e1e1e;
  --primary-color: #157efb;
  --font-color: #dedede;
  --border-color: #000;
 }
}
</code></pre>
<h3>Update 17/5/2023</h3>
<p>Using <code>color-mix</code> adds a whole new dimention to the usability</p>
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
@media (prefers-color-scheme: background),(prefers-color-scheme: no-preference) {
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
@media (prefers-color-scheme: foreground) {
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
<h2>Browser Support</h2>
<p>The <code>prefers-color-scheme</code> media query is only supported by Chrome, Firefox and Safari and Opera.
This, however, should not stop you from implementing a similar solution on your website, as the site simply defaults to
&quot;white&quot; mode if it's not supported.</p>
<p class="ciu_embed" data-feature="prefers-color-scheme" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=prefers-color-scheme">Media query to detect if the user has set their system to use a light or dark color theme.</a>
</p>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/public/caniuse-embed.min.js"></script>

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