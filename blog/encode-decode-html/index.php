<?php
    $activePage = "blog";
    $description = 'Learn how to encode and decode HTML';
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
                    <h1>Encode/Decode HTML</h1>
<p class='timestamp'><time datetime='01-06-2019'>01-06-2019</time></p>
<hr>
<p>If you want to display html code on a website, you can't just type a <code>&lt;</code> in you index.html and expect it to show up. You have to use an equivalent html entity instead.</p>
<h2>Client-side (Javascript)</h2>
<p>The following javascript function is a handy way of encoding and decoding html, so you can display the code on your website.</p>
<pre><code class="language-javascript">window.htmlentities = {
 encode: function (str) {
  var buf = [];
  for (var i = str.length - 1; i &gt;= 0; i--) {
   buf.unshift([&quot;&amp;#&quot;, str[i].charCodeAt(), &quot;;&quot;].join(&quot;&quot;));
  }
  return buf.join(&quot;&quot;);
 },
 decode: function (str) {
  return str.replace(/&amp;#(\d+);/g, function (match, dec) {
   return String.fromCharCode(dec);
  });
 },
};
</code></pre>
<h3>Encode</h3>
<pre><code class="language-javascript">htmlentities.encode(
 &quot;Hello, this is a test stríng &gt; &lt; with characters that could break html. Therefore we convert it to its html characters.&quot;
);
</code></pre>
<p><strong>Output:</strong>
<em>&quot;Hello, this is a test str<code>&amp;#237;</code>ng <code>&amp;gt;</code> <code>&amp;lt;</code> with characters that could break html. Therefore we convert it to its html characters.&quot;</em></p>
<h3>Decode</h3>
<pre><code class="language-javascript">htmlentities.decode(
 &quot;Hello, this is a test str&amp;#237;ng &amp;gt; &amp;lt; with characters that could break html. Therefore we convert it to its html characters.&quot;
);
</code></pre>
<p><strong>Output:</strong>
<em>&quot;Hello, this is a test stríng &gt; &lt; with characters that could break html. Therefore we convert it to its html characters.&quot;</em></p>
<h2>Server-side (PHP)</h2>
<p>If you need to convert html entities serverside, this can easily be done with PHP like so:</p>
<pre><code class="language-PHP">&lt;?php
    $converted_html = htmlspecialchars(&quot;&lt;a href='test'&gt;Test&lt;/a&gt;&quot;, ENT_QUOTES);
    echo $converted_html; // &amp;lt;a href=&amp;#039;test&amp;#039;&amp;gt;Test&amp;lt;/a&amp;gt;
?&gt;
</code></pre>

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