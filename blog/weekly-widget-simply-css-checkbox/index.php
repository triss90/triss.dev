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
    <?php include '../../inc/navigation.php'; ?>

    <main id='post'>
        <div class='container'>
            <div class='row'>
                <div class='tiny-12 small-10 medium-8 small-offset-1 medium-offset-2'>
                    <h1>Weekly Widget - Simple CSS Checkbox</h1>
<p class='timestamp'><time datetime='2023-07-03'>2023-07-03</time></p>
<hr>
<p>Today's featured widget is a simple CSS checkbox, which happens to be my most viewed and highly rated pen on codepen.io. It perfectly demonstrates the &quot;checkbox-hack&quot;, achieving a pure CSS toggle effect:</p>
<p class="codepen" data-height="435.21875" data-default-tab="result" data-slug-hash="PbKWxM" data-user="triss90" style="height: 435.21875px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/PbKWxM">
  Simple CSS Checkbox</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<p>I've since expanded on this concept, largly focusing on accessibility and progressive enhancement. You can see the snippet <a href="https://triss.dev/snippets/checkboxes/">here</a>.</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

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