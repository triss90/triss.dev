<?php
    $activePage = "blog";
    $description = 'Learn how to use the HTML datalist element';
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
                    <h1>HTML Datalist Element</h1>
<p class='timestamp'><time datetime='03-08-2019'>03-08-2019</time></p>
<hr>
<p>Making sortable input lists on a webpage usually requires a ton of javascript.
The <code>&lt;datalist&gt;</code> element was introduced with HTML5 and aims to solve this exact problem.</p>
<h2>Using &quot;datalist&quot;</h2>
<p>Using the datalist element is fairly straight forward.
Simply define the search input: <code>&lt;input list=&quot;list-name&quot; name=&quot;list-name&quot;&gt;</code>.
The keyword here, is the <code>list</code> attribute, which links the list to the input.</p>
<p>Next to the input element create a <code>&lt;datalist id=&quot;list-name&quot;&gt;</code> with <code>&lt;option&gt;</code> elements inside,
defining each selectable item.</p>
<p><strong>Example</strong></p>
<pre><code class="language-html">&lt;form action=&quot;/action_page.php&quot; method=&quot;get&quot;&gt;
 &lt;input list=&quot;flavours&quot; name=&quot;flavours&quot; /&gt;
 &lt;datalist id=&quot;flavours&quot;&gt;
  &lt;option value=&quot;Chocolate&quot;&gt;&lt;/option&gt;
  &lt;option value=&quot;Vanilla&quot;&gt;&lt;/option&gt;
  &lt;option value=&quot;Grape&quot;&gt;&lt;/option&gt;
  &lt;option value=&quot;Strawberry&quot;&gt;&lt;/option&gt;
  &lt;option value=&quot;Honey&quot;&gt;&lt;/option&gt;
  &lt;option value=&quot;Coconut&quot;&gt;&lt;/option&gt;
  &lt;option value=&quot;Cherry&quot;&gt;&lt;/option&gt;
 &lt;/datalist&gt;

 &lt;input type=&quot;submit&quot; /&gt;
&lt;/form&gt;
</code></pre>
<h2>Styling &quot;datalist&quot;</h2>
<p>The styling capabilities are, unfortunately, very limited. The input box itself, can of course be styled to your preference.
But the dropdown is entirely dependent on the browser's styles.
One thing you can control though, is the dropdown-arrow. It can be selected like so</p>
<pre><code class="language-css">input[list]::-webkit-calendar-picker-indicator {
 background: red;
 color: white;
}
</code></pre>
<h2>Live Example</h2>
<p class="codepen" data-height="300" data-theme-id="36048" data-default-tab="result" data-user="triss90" data-slug-hash="c59369ea77bf1c6515c1330a1c3ca45b" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Datalist Example">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/c59369ea77bf1c6515c1330a1c3ca45b/">
  Datalist Example</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
<h2>Browser Support</h2>
<p>As with other &quot;new&quot; HTML5 elements, browser support is somewhat lacking.</p>
<p class="ciu_embed" data-feature="datalist" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=datalist">Method of setting a list of options for a user to select in a text field, while leaving the ability to enter a custom value.</a>
</p>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/public/caniuse-embed.min.js"></script>
<p>So if you want to use this in production, you may want to include a polyfill, like
<a href="https://github.com/mfranzke/datalist-polyfill" target="_blank" rel="noopener" title="Datalist Polyfill">this one by Maximilian Franzke</a></p>

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