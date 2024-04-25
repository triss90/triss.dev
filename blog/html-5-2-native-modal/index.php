<?php
    $activePage = "blog";
    $description = 'HTML 5.2 ships with native modals. Learn how to use them';
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
                    <h1>HTML 5.2 Native modal</h1>
<p class='timestamp'><time datetime='23-04-2018'>23-04-2018</time></p>
<hr>
<p>With HTML 5.2 creating and maintaining modals is super easy!!</p>
<pre><code class="language-html">&lt;button id=&quot;dialog-open&quot;&gt;Open dialog&lt;/button&gt;

&lt;dialog id=&quot;dialog&quot;&gt;
 &lt;p&gt;This is a dialog&lt;/p&gt;
 &lt;button id=&quot;dialog-close&quot;&gt;close&lt;/button&gt;
&lt;/dialog&gt;
</code></pre>
<p>Adding the <code>open</code> parameter to the dialog element forces it open.</p>
<pre><code class="language-html">&lt;dialog id=&quot;dialog&quot; open&gt;&lt;/dialog&gt;
</code></pre>
<p>This can easily be manipulated with javascript using <code>dialogElement.showModal();</code> and <code>dialogElement.close();</code></p>
<p>You can edit the backdrop of the dialog using <code>::backdrop</code> like so:</p>
<pre><code class="language-css">#dialog::backdrop {
 opacity: 0.3;
 background: blue;
}
</code></pre>
<br>
### Interactive example
<p data-height="465" data-theme-id="light" data-slug-hash="wpxEEe" data-default-tab="result" data-user="triss90" data-embed-version="2" data-pen-title="HTML 5.2 Native modal" class="codepen">See the Pen <a href="https://codepen.io/triss90/pen/wpxEEe/">HTML 5.2 Native modal</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
<br>
<p>Unfortunately this awesome feature is very poorly supported. Currently only Google Chrome has support for this.</p>
<p class="ciu_embed" data-feature="dialog" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=dialog">Method of easily creating custom dialog boxes to display to the user with modal or non-modal options. Also includes a ::backdrop pseudo-element for behind the element.</a>
</p>
<p>You can read more about this on the <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog">MDN Web Docs</a></p>
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