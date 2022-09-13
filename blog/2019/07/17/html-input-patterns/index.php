
            <?php $description = 'HTML Input Patterns';  ?>
            <?php include('../../../../../_inc/header.php'); ?>
            <?php include('../../../../../_inc/icons.php'); ?>
            
            <span class='inverted'><?php include('../../../../../_inc/navigation.php'); ?></span>
            <main id='main' class='central space post'>
        <h1>Input patterns</h1>
<p class='timestamp'><time datetime='17-07-2019'>17-07-2019</time></p>
<hr>
<p>Here's a handy list of useful html input patterns. Ranging from password requirements to IP filters and currency requirements.</p>
<h2>IPv4 Address</h2>
<pre><code class="language-html">&lt;input type=“text” name=“ipv4” pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$" required&gt;</code></pre>
<h2>IPv6 Address</h2>
<pre><code class="language-html">&lt;input type=“text” name=“ipv6” pattern="((^|:)([0-9a-fA-F]{0,4})){1,8}$" required&gt;</code></pre>
<h2>Password</h2>
<pre><code class="language-html">&lt;input type=“password” name=“password” pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required&gt;</code></pre>
<p>Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</p>
<h2>Domains like “abc.de”</h2>
<pre><code class="language-html">&lt;input type=“text” name=“domain” pattern="^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}$" required&gt;</code></pre>
<h2>Numbers with or without decimals</h2>
<pre><code class="language-html">&lt;input type=“text” name=“number” pattern="[-+]?[0-9]*[.,]?[0-9]+" required&gt;</code></pre>
<p>Format: 9 or 9.9 or 9,9</p>
<h2>UUID</h2>
<pre><code class="language-html">&lt;input type=“text” name=“uuid” pattern="^[0-9A-Fa-f]{8}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{12}$" required&gt;</code></pre>
<h2>Latitude or Longitude</h2>
<pre><code class="language-html">&lt;input type=“text” name=“long-lat” pattern="-?\d{1,3}\.\d+" required&gt;</code></pre>
<h2>Price (Format: 1.00)</h2>
<pre><code class="language-html">&lt;input type=“text” name=“price” pattern="\d+(\.\d{2})?" required&gt;</code></pre>
<h2>Price (Format: 1,00)</h2>
<pre><code class="language-html">&lt;input type=“text” name=“price” pattern="\d+(,\d{2})?" required&gt;</code></pre>
<h2>ISBN</h2>
<pre><code class="language-html">&lt;input type=“text” name=“isbn” pattern="(?:(?=.{17}$)97[89][ -](?:[0-9]+[ -]){2}[0-9]+[ -][0-9]|97[89][0-9]{10}|(?=.{13}$)(?:[0-9]+[ -]){2}[0-9]+[ -][0-9Xx]|[0-9]{9}[0-9Xx])" required&gt;</code></pre>
<h2>Md5 Hash</h2>
<pre><code class="language-html">&lt;input type=“text” name=“md5” pattern="[0-9a-fA-F]{32}" required&gt;</code></pre>
            </main>
            <script src='../../../../../assets/js/highlight.pack.js'></script>
            <script>hljs.initHighlightingOnLoad();</script>
            <?php include('../../../../../_inc/footer.php'); ?>
        