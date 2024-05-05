<?php
    $activePage = "blog";
    $description = 'How to add pure CSS line numbers';
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
                    <h1>Pure CSS Line Numbers</h1>
<p class='timestamp'><time datetime='15-07-2016'>15-07-2016</time></p>
<hr>
<p>I was messing around with an easy way of display code on my website, and stumbled upon a neat trick for making incrementing line numbers with CSS.</p>
<pre><code class="language-css">.codeblock {
  counter-reset: step;
  counter-increment: step 0;
}
.codeblock .line:before {
  content: counter(step);
  counter-increment: step;
}
</code></pre>
<p>The final result is awesome! Check it out:</p>
<p data-height="700" data-theme-id="light" data-slug-hash="bZaQYJ" data-default-tab="result" data-user="triss90" data-embed-version="2" data-pen-title="CSS line numbers" class="codepen">See the Pen <a href="https://codepen.io/triss90/pen/bZaQYJ/">CSS line numbers</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>) on <a href="https://codepen.io">CodePen</a>.</p>
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