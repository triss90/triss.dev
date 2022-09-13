
            <?php $description = 'HTML Datalist Element';  ?>
            <?php include('../../../../../_inc/header.php'); ?>
            <?php include('../../../../../_inc/icons.php'); ?>
            
            <span class='inverted'><?php include('../../../../../_inc/navigation.php'); ?></span>
            <main id='main' class='central space post'>
        <h1>HTML Datalist Element</h1>
<p class='timestamp'><time datetime='03-08-2019'>03-08-2019</time></p>
<hr>
<p>Making sortable input lists on a webpage usually requires a ton of javascript. 
The <code>&lt;datalist&gt;</code> element was introduced with HTML5 and aims to solve this exact problem.</p>
<h2>Using "datalist"</h2>
<p>Using the datalist element is fairly straight forward. 
Simply define the search input: <code>&lt;input list="list-name" name="list-name"&gt;</code>. 
The  keyword here, is the <code>list</code> attribute, which links the list to the input.</p>
<p>Next to the input element create a <code>&lt;datalist id="list-name"&gt;</code> with <code>&lt;option&gt;</code> elements inside, 
defining each selectable item.</p>
<p><strong>Example</strong></p>
<pre><code class="language-html">&lt;form action="/action_page.php" method="get"&gt;
    &lt;input list="flavours" name="flavours"&gt;
    &lt;datalist id="flavours"&gt;
        &lt;option value="Chocolate"&gt;
        &lt;option value="Vanilla"&gt;
        &lt;option value="Grape"&gt;
        &lt;option value="Strawberry"&gt;
        &lt;option value="Honey"&gt;
        &lt;option value="Coconut"&gt;
        &lt;option value="Cherry"&gt;
    &lt;/datalist&gt;
    &lt;input type="submit"&gt;
&lt;/form&gt;</code></pre>
<h2>Styling "datalist"</h2>
<p>The styling capabilities are, unfortunately, very limited. The input box itself, can of course be styled to your preference.
But the dropdown is entirely dependent on the browser's styles.
One thing you can control though, is the dropdown-arrow. It can be selected like so</p>
<pre><code class="language-css">input[list]::-webkit-calendar-picker-indicator {
    background: red;
    color: white;
}</code></pre>
<h2>Live Example</h2>
<p class="codepen" data-height="300" data-theme-id="36048" data-default-tab="result" data-user="triss90" data-slug-hash="c59369ea77bf1c6515c1330a1c3ca45b" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Datalist Example">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/c59369ea77bf1c6515c1330a1c3ca45b/">
  Datalist Example</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
<h2>Browser Support</h2>
<p>As with other "new" HTML5 elements, browser support is somewhat lacking.</p>
<p class="ciu_embed" data-feature="datalist" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=datalist">Method of setting a list of options for a user to select in a text field, while leaving the ability to enter a custom value.</a>
</p>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>
<p>So if you want to use this in production, you may want to include a polyfill, like 
<a href="https://github.com/mfranzke/datalist-polyfill" target="_blank" rel="noopener" title="Datalist Polyfill">this one by Maximilian Franzke</a></p>
            </main>
            <script src='../../../../../assets/js/highlight.pack.js'></script>
            <script>hljs.initHighlightingOnLoad();</script>
            <?php include('../../../../../_inc/footer.php'); ?>
        