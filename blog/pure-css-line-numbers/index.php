<?php $description = 'How to add pure CSS line numbers';  ?>

<?php include('../../_inc/header.php'); ?>
<?php include('../../_inc/icons.php'); ?>

<span class='inverted'><?php include('../../_inc/navigation.php'); ?></span>

<main id='main' class='central space post'>

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


</main>

<script src='../../assets/js/highlight.pack.js'></script>
<script>hljs.initHighlightingOnLoad();</script>

<?php include('../../_inc/footer.php'); ?>
