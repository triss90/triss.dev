<?php
    $activePage = "blog";
    $description = 'Weekly widget';
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
                    <h1>Animated Background</h1>
<p class='timestamp'><time datetime='2023-05-22'>2023-05-22</time></p><hr>
<p>This week's widget is a animated background with CSS. Note how the background color gradually shifts from a pure blue to a purple gradiant:</p>
<p class="codepen" data-height="715.390625" data-default-tab="result" data-slug-hash="KKwGKKQ" data-user="triss90" data-token="aa67671b3662cab49fb6bfb8668bf419" style="height: 715.390625px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/KKwGKKQ/aa67671b3662cab49fb6bfb8668bf419">
  Animating background</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
<p>The effect is achieved by gradually shifting the CSS <code>background-position</code>.</p>

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