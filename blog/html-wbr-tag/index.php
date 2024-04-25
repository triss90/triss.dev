<?php
    $activePage = "blog";
    $description = 'Learn how to properly use the wbr HTML tag';
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
                    <h1>HTML &lt;wbr&gt; Tag</h1>
<p class='timestamp'><time datetime='05-09-2019'>05-09-2019</time></p>
<hr>
<p>This is a first article in the month long installment &quot;what's that weird html tag?&quot;.</p>
<p>Today we're taking a log at the <code>&lt;wbr&gt;</code> tag.</p>
<p>The <code>&lt;wbr&gt;</code> html element represents a possible wordbreak, or in other words,<wbr>
a position within a text where the browser may insert a break. <wbr>
Even if the normal line-breaking rules would not apply at that location.</p>
<h2>Example</h2>
<pre><code class="language-html">&lt;div id=&quot;example-paragraphs&quot;&gt;
 &lt;p&gt;Lorem ipsum dolor sit amet, &lt;wbr /&gt; consectetur adipisicing elit.&lt;/p&gt;
 &lt;p&gt;
  Lorem ipsum dolor sit amet, &lt;wbr /&gt; consectetur adipisicing elit.
  &lt;wbr /&gt;Alias aspernatur blanditiis consectetur, &lt;wbr /&gt; eaque ex sequi
  tenetur unde. &lt;wbr /&gt; Accusamus molestiae nobis quasi quibusdam
  reprehenderit? &lt;wbr /&gt; Amet error exercitationem incidunt natus saepe
  tempore!
 &lt;/p&gt;
&lt;/div&gt;
</code></pre>
<h2>Browser Support</h2>
<p>The <code>&lt;wbr&gt;</code> tag is widely supported, only lacking support on IE and IE Mobile:</p>
<p class="ciu_embed" data-feature="wbr-element" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
<a href="http://caniuse.com/#feat=wbr-element">Can I Use wbr-element?</a> Data on support for the wbr-element feature across the major browsers from caniuse.com.
</p>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>

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