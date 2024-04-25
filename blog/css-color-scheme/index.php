<?php
    $activePage = "blog";
    $description = 'Learn how to create a color-scheme with CSS';
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
    <?php include '../../inc/navigation.php'; ?>

    <main id='post'>
        <div class='container'>
            <div class='row'>
                <div class='tiny-12 small-10 medium-8 small-offset-1 medium-offset-2'>
                    <style>
:root {
  color-scheme: light;
}
#color-scheme-button {
  font-size: 1.25rem;
  line-height: 1.35;
  display: inline-block;
  margin: 0 auto;
}
.dark {
  color-scheme: dark;
}
</style>
<h1>CSS color-scheme</h1>
<p class='timestamp'><time datetime='01-02-2023'>01-02-2023</time></p>
<hr>
<p>Elements on a page has a default color defined by the <code>color-scheme</code> value in the User Agent stylesheet.</p>
<p>This is what defines the <code>background-color</code> of body as white, the <code>text-color</code> as black and the varying grey colors of buttons and other interactive elements.</p>
<p>Apple visualizes this very well with their video on <a href="https://developer.apple.com/videos/play/wwdc2019/511/?time=157">&quot;Supporting Dark Mode in Your Web Content&quot;</a>:</p>
<blockquote>
<p><code>color-scheme</code> changes the default text and background colors of the page to match the current system appearance, standard form controls, scrollbars and other named system colors also change their look automatically.</p>
</blockquote>
<p>Getting started with this is very easy and only requires a few lines of CSS:</p>
<pre><code class="language-CSS">:root {
  color-scheme: light;
}
</code></pre>
<p>Now, whenever you want to switch the color scheme, you simply update the <code>:root color-scheme</code> to:</p>
<pre><code class="language-CSS">:root {
  color-scheme: dark;
}
</code></pre>
<p>You can test this directly on this page with the following demo:</p>
<br>
<button id="color-scheme-button">Toggle Color Scheme</button>
<small>(Requires the site to be in lightmode)</small>
<br><br>
<p><code>color-scheme</code> differs from <code>prefers-color-scheme</code> in one important way, though it's easy to confuse the two. While <code>prefers-color-scheme</code> is all about writing your own styles, <code>color-scheme</code> is all about default appearances. It tells the browser to update the colors in its stylesheet.</p>
<p>For more information on how to implement and use <code>prefers-color-scheme</code> on you websites, see: <a href="https://triss.dev/blog/2019/08/24/css-darkmode/">CSS Darkmode</a></p>
<script>
const root = document.querySelector(":root");
const navbar = document.querySelector("body > span");
const colorSchemeButton = document.getElementById("color-scheme-button");
if (colorSchemeButton) {
  colorSchemeButton.addEventListener('click', function() {
    event.preventDefault();
    root.classList.toggle('dark');
    navbar.classList.toggle('inverted');
    console.log('color scheme swapped');
  });
}
console.log(colorSchemeButton);
</script>

                </div>
            </div>
        </div>
    </main>

    <script src='../../assets/js/vendor/highlight.pack.js'></script>
    <script>
    hljs.initHighlightingOnLoad();
    </script>

    <?php include '../../inc/footer.php'; ?>
    <?php include '../../inc/scripts.php'; ?>
</body>

</html>