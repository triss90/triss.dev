<?php
    $activePage = "blog";
    $description = 'Learn how to fix whitespace between inline elements';
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
                    <style>
section.demo div.test {
  display: inline-block;
  padding: 10px;
  background: #ca3e47;
}
</style>
<h1>Fixing Whitespace Between Inline Elements</h1>
<p class='timestamp'><time datetime='11-03-2020'>11-03-2020</time></p>
<hr>
<p>I was messing around with inline elements the other day and stumbled upon a minor annoyance.
You see, a series of inline-block elements with no formatting applied, will have spaces in between them.</p>
<p><strong>HTML</strong></p>
<pre><code class="language-html">&lt;section&gt;
 &lt;div&gt;One&lt;/div&gt;
 &lt;div&gt;Two&lt;/div&gt;
 &lt;div&gt;Three&lt;/div&gt;
 &lt;div&gt;Four&lt;/div&gt;
&lt;/section&gt;
</code></pre>
<p><strong>CSS</strong></p>
<pre><code class="language-css">section div {
 padding: 10px;
 background: #ca3e47;
 display: inline-block;
}
</code></pre>
<p>This will result in the following:</p>
<section class="demo">
    <div class="test">One</div>
    <div class="test">Two</div>
    <div class="test">Three</div>
    <div class="test">Four</div>
</section>
<p>Notice the spaces? Normally you'd want the elements to stay flush against each other to avoid awkward, unclickable gaps.</p>
<p>Luckily there are a few ways to get around this.</p>
<h2>Remove the spaces</h2>
<pre><code class="language-html">&lt;section&gt;
 &lt;div&gt;One&lt;/div&gt;
 &lt;div&gt;Two&lt;/div&gt;
 &lt;div&gt;Three&lt;/div&gt;
 &lt;div&gt;Four&lt;/div&gt;
&lt;/section&gt;
</code></pre>
<p>or</p>
<pre><code class="language-html">&lt;section&gt;
 &lt;div&gt;One&lt;/div&gt;
 &lt;div&gt;Two&lt;/div&gt;
 &lt;div&gt;Three&lt;/div&gt;
 &lt;div&gt;Four&lt;/div&gt;
&lt;/section&gt;
</code></pre>
<p>or by inserting comments</p>
<pre><code class="language-html">&lt;section&gt;
 &lt;div&gt;One&lt;/div&gt;
 &lt;!--
    --&gt;
 &lt;div&gt;Two&lt;/div&gt;
 &lt;!--
    --&gt;
 &lt;div&gt;Three&lt;/div&gt;
 &lt;!--
    --&gt;
 &lt;div&gt;Four&lt;/div&gt;
&lt;/section&gt;
</code></pre>
<p>All of the above will result in the following:</p>
<section class="demo">
    <div class="test">One</div><!--
    --><div class="test">Two</div><!--
    --><div class="test">Three</div><!--
    --><div class="test">Four</div>
</section>
<p>While none of these solutions are elegant, they get the job done.</p>
<h2>Negative margin</h2>
<p>Another solution is to add negative margin the elements, thus compensating for the space.</p>
<pre><code class="language-css">section div {
 display: inline-block;
 margin-right: -7px;
}
</code></pre>
<style>
section.demo2 div.test2 {
  display: inline-block;
  padding: 10px;
  background: #ca3e47;
  margin-right: -7px;
}
</style>
<p>The above will result in the following:</p>
<section class="demo2">
    <div class="test2">One</div>
    <div class="test2">Two</div>
    <div class="test2">Three</div>
    <div class="test2">Four</div>
</section>
<h2>Omit the closing tag</h2>
<p>With HTML5 we no longer <em>have</em> to add closing tags. While this method will remove the unwanted space, it may introduce other awkward problems.</p>
<pre><code class="language-html">&lt;section&gt;
    &lt;div&gt;One
    &lt;div&gt;Two
    &lt;div&gt;Three
    &lt;div&gt;Four
&lt;/section&gt;
</code></pre>
<p>The above will result in the following:</p>
<section class="demo">
    <div class="test">One
    <div class="test">Two
    <div class="test">Three
    <div class="test">Four
</section>
<h2>Set the fontsize</h2>
<style>
section.demo3 {
    font-size: 0;
}
div.test3 {
    display: inline-block;
    padding: 10px;
    background: #ca3e47;
    font-size: calc(1rem + 0.5vw);
}
</style>
<pre><code class="language-css">section {
 font-size: 0;
}
div {
 font-size: 16px;
}
</code></pre>
<p>The above will result in the following:</p>
<section class="demo3">
    <div class="test3">One</div>
    <div class="test3">Two</div>
    <div class="test3">Three</div>
    <div class="test3">Four</div>
</section>

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