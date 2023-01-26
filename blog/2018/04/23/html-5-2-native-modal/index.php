
            <?php $description = 'HTML 5.2 Native modal';  ?>
            <?php include('../../../../../_inc/header.php'); ?>
            <?php include('../../../../../_inc/icons.php'); ?>
            
            <span class='inverted'><?php include('../../../../../_inc/navigation.php'); ?></span>
            <main id='main' class='central space post'>
        <h1>HTML 5.2 Native modal</h1>
<p class='timestamp'><time datetime='23-04-2018'>23-04-2018</time></p>
<hr>
<p>With HTML 5.2 creating and maintaining modals is super easy!!</p>
<pre><code class="language-html">&lt;button id="dialog-open"&gt;Open dialog&lt;/button&gt;

&lt;dialog id="dialog"&gt;
    &lt;p&gt;This is a dialog&lt;/p&gt;
    &lt;button id="dialog-close"&gt;close&lt;/button&gt;
&lt;/dialog&gt;</code></pre>
<p>Adding the <code>open</code> parameter to the dialog element forces it open.</p>
<pre><code class="language-html">&lt;dialog id="dialog" open&gt;&lt;/dialog&gt;</code></pre>
<p>This can easily be manipulated with javascript using  <code>dialogElement.showModal();</code> and <code>dialogElement.close();</code></p>
<p>You can edit the backdrop of the dialog using <code>::backdrop</code> like so:</p>
<pre><code class="language-css">#dialog::backdrop {
    opacity: 0.3;
    background: blue;
}</code></pre>
<p><br></p>
<h3>Interactive example</h3>
<p data-height="465" data-theme-id="light" data-slug-hash="wpxEEe" data-default-tab="result" data-user="triss90" data-embed-version="2" data-pen-title="HTML 5.2 Native modal" class="codepen">See the Pen <a href="https://codepen.io/triss90/pen/wpxEEe/">HTML 5.2 Native modal</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
<p><br></p>
<p>Unfortunately this awesome feature is very poorly supported. Currently only Google Chrome has support for this.</p>
<p class="ciu_embed" data-feature="dialog" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=dialog">Method of easily creating custom dialog boxes to display to the user with modal or non-modal options. Also includes a ::backdrop pseudo-element for behind the element.</a>
</p>
<p>You can read more about this on the <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog">MDN Web Docs</a></p>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>
            </main>
            <script src='../../../../../assets/js/highlight.pack.js'></script>
            <script>hljs.initHighlightingOnLoad();</script>
            <?php include('../../../../../_inc/footer.php'); ?>
        