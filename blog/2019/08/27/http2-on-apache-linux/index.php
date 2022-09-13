
            <?php $description = 'HTTP2 on Apache - Linux';  ?>
            <?php include('../../../../../_inc/header.php'); ?>
            <?php include('../../../../../_inc/icons.php'); ?>
            
            <span class='inverted'><?php include('../../../../../_inc/navigation.php'); ?></span>
            <main id='main' class='central space post'>
        <h1>HTTP2 on Apache - Linux</h1>
<p class='timestamp'><time datetime='27-08-2019'>27-08-2019</time></p>
<hr>
<p>To enable http2 support on Apache you need to load the following two modules:</p>
<ul>
<li>SSL</li>
<li>HTTP/2</li>
</ul>
<p>To do so, run the following commands in your terminal</p>
<pre><code class="language-bash">sudo a2enmod ssl</code></pre>
<p>And</p>
<pre><code class="language-bash">sudo a2enmod http2</code></pre>
<p>Then activate the new modules by restarting Apache</p>
<pre><code class="language-bash">sudo systemctl restart apache2</code></pre>
<p>After activating the Apache modules, navigate to the Apache directory and edit the configuration.
Simply add the following line to your global Apache configuration or inside an individual virtual hos.</p>
<pre><code class="language-htaccess">Protocols h2 http/1.1</code></pre>
<h2>Example</h2>
<pre><code class="language-htaccess">&lt;VirtualHost *:443&gt;

  ServerName triss.dev
  ServerAlias www.triss.dev
  DocumentRoot /var/www/public_html/triss.dev
  SSLEngine on
  SSLCertificateKeyFile /path/to/private.pem
  SSLCertificateFile /path/to/cert.pem
  SSLProtocol all -SSLv3 -TLSv1 -TLSv1.1

  Protocols h2 http/1.1

&lt;/VirtualHost&gt;</code></pre>
            </main>
            <script src='../../../../../assets/js/highlight.pack.js'></script>
            <script>hljs.initHighlightingOnLoad();</script>
            <?php include('../../../../../_inc/footer.php'); ?>
        