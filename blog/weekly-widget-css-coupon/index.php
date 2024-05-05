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
                    <h1>Weekly Widget - CSS Coupon</h1>
<p class='timestamp'><time datetime='27-03-2023'>27-03-2023</time></p>
<hr>
<p>I was looking some old work and stumbled upon a few widgets I found interesting.
So I'm officially introducing a new segment: <strong>Weekly Widget</strong>.</p>
<p>I'll attempt to post an interesting snippet every week, for however long I keep digging up stuff worthy of posting.</p>
<p>This week's widget is a simple CSS coupon:</p>
<p class="codepen" data-height="436.04296875" data-default-tab="result" data-slug-hash="jONKXZY" data-user="triss90" style="height: 436.04296875px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/jONKXZY">
  CSS Coupon</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

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