<?php
    $activePage = "blog";
    $description = 'How to create CSS variables(custom properties)';
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
                    <h1>CSS Variables</h1>
<p class='timestamp'><time datetime='03-01-2017'>03-01-2017</time></p>
<hr>
<p>I've been using a <code>scss</code> for a while. With that, comes variables which are easily defined like so: <code>$color-variable: #f06d06</code>.
If this is more or less the reason, why you're a using scss instead of regular css. You might not need to.</p>
<p>You can use CSS's custom properties like so:</p>
<pre><code class="language-css">/*
 Declare the variables on the root element
 to make them available globally
*/
:root {
 --color-1: red;
 --color-2: blue;
}

html,
body {
 background-color: var(--color-1);
 color: var(--color-2);
}

/*
    You can later overwrite variables 
    and scope to them to specific elements
*/
main {
 --color-1: yellow;
 background: var(--color-1);
}
</code></pre>
<p>Pretty nifty if you ask me!</p>
<h2>Manipulating the properties with JS</h2>
<p>Manipulating CSS's custom properties is super easy! You can both get the values and set them like so:</p>
<p class="codepen" data-height="265" data-theme-id="light" data-default-tab="js" data-user="triss90" data-slug-hash="QRKyrR" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS Custom Properties">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/QRKyrR/">
  CSS Custom Properties</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>

                </div>
            </div>
        </div>
    </main>

    <script src='../../assets/js/article.js'></script>
    <script src='../../assets/js/vendor/highlight.pack.js'></script>
    <script>
    hljs.initHighlightingOnLoad();
    </script>

    <?php include '../../inc/footer.php'; ?>
    <?php include '../../inc/scripts.php'; ?>
</body>

</html>