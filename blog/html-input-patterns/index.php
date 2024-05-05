<?php
    $activePage = "blog";
    $description = 'A collection of useful HTML input patterns';
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
                    <h1>Input patterns</h1>
<p class='timestamp'><time datetime='17-07-2019'>17-07-2019</time></p>
<hr>
<p>Here's a handy list of useful html input patterns. Ranging from password requirements to IP filters and currency requirements.</p>
<h2>IPv4 Address</h2>
<pre><code class="language-html">&lt;input
 type=&quot;“text”&quot;
 name=&quot;“ipv4”&quot;
 pattern=&quot;((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$&quot;
 required
/&gt;
</code></pre>
<h2>IPv6 Address</h2>
<pre><code class="language-html">&lt;input
 type=&quot;“text”&quot;
 name=&quot;“ipv6”&quot;
 pattern=&quot;((^|:)([0-9a-fA-F]{0,4})){1,8}$&quot;
 required
/&gt;
</code></pre>
<h2>Password</h2>
<pre><code class="language-html">&lt;input
 type=&quot;“password”&quot;
 name=&quot;“password”&quot;
 pattern=&quot;(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}&quot;
 required
/&gt;
</code></pre>
<p>Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</p>
<h2>Domains like “abc.de”</h2>
<pre><code class="language-html">&lt;input
 type=&quot;“text”&quot;
 name=&quot;“domain”&quot;
 pattern=&quot;^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}$&quot;
 required
/&gt;
</code></pre>
<h2>Numbers with or without decimals</h2>
<pre><code class="language-html">&lt;input
 type=&quot;“text”&quot;
 name=&quot;“number”&quot;
 pattern=&quot;[-+]?[0-9]*[.,]?[0-9]+&quot;
 required
/&gt;
</code></pre>
<p>Format: 9 or 9.9 or 9,9</p>
<h2>UUID</h2>
<pre><code class="language-html">&lt;input
 type=&quot;“text”&quot;
 name=&quot;“uuid”&quot;
 pattern=&quot;^[0-9A-Fa-f]{8}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{12}$&quot;
 required
/&gt;
</code></pre>
<h2>Latitude or Longitude</h2>
<pre><code class="language-html">&lt;input type=&quot;“text”&quot; name=&quot;“long-lat”&quot; pattern=&quot;-?\d{1,3}\.\d+&quot; required /&gt;
</code></pre>
<h2>Price (Format: 1.00)</h2>
<pre><code class="language-html">&lt;input type=&quot;“text”&quot; name=&quot;“price”&quot; pattern=&quot;\d+(\.\d{2})?&quot; required /&gt;
</code></pre>
<h2>Price (Format: 1,00)</h2>
<pre><code class="language-html">&lt;input type=&quot;“text”&quot; name=&quot;“price”&quot; pattern=&quot;\d+(,\d{2})?&quot; required /&gt;
</code></pre>
<h2>ISBN</h2>
<pre><code class="language-html">&lt;input
 type=&quot;“text”&quot;
 name=&quot;“isbn”&quot;
 pattern=&quot;(?:(?=.{17}$)97[89][ -](?:[0-9]+[ -]){2}[0-9]+[ -][0-9]|97[89][0-9]{10}|(?=.{13}$)(?:[0-9]+[ -]){2}[0-9]+[ -][0-9Xx]|[0-9]{9}[0-9Xx])&quot;
 required
/&gt;
</code></pre>
<h2>Md5 Hash</h2>
<pre><code class="language-html">&lt;input type=&quot;“text”&quot; name=&quot;“md5”&quot; pattern=&quot;[0-9a-fA-F]{32}&quot; required /&gt;
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