
            <?php $description = 'CSS Darkmode';  ?>
            <?php include('../../../../../_inc/header.php'); ?>
            <?php include('../../../../../_inc/icons.php'); ?>
            
            <span class='inverted'><?php include('../../../../../_inc/navigation.php'); ?></span>
            <main id='main' class='central space post'>
        <h1>CSS Darkmode</h1>
<p class='timestamp'><time datetime='24-08-2019'>24-08-2019</time></p>
<hr>
<p>I was messing around with native darkmode on the web the other day, and ended up implementing
<code>prefers-color-scheme</code> on <a href="https://mrkdwn.net">mrkdwn.net</a> as proof of concept.</p>
<p><code>prefers-color-scheme</code> has three available keyword values: </p>
<ul>
<li><code>no-preference</code> which indicates that the user has no preference, as to where the site should appear dark og light. </li>
<li><code>light</code> which indicates that the user prefers <strong>light</strong> mode</li>
<li><code>dark</code>, which indicates that the user prefers <strong>dark</strong> mode.</li>
</ul>
<h2>Example</h2>
<pre><code class="language-css">/* Base color scheme (fallback) */
:root {
    --background-color: #fff;
    --primary-color: #157efb;
    --font-color: #151513;
    --border-color: #dfe1e7;
}

/* whitemode or fallback if user has no preference */
@media (prefers-color-scheme: light), 
       (prefers-color-scheme: no-preference) {
    :root {
        --background-color: #fff;
        --primary-color: #157efb;
        --font-color: #151513;
        --border-color: #dfe1e7;
    }
}

/* darkmode */
@media (prefers-color-scheme: dark) {
    :root {
        --background-color: #1e1e1e;
        --primary-color: #157efb;
        --font-color: #dedede;
        --border-color: #000;
    }
}
</code></pre>
<h2>Browser Support</h2>
<p>The <code>prefers-color-scheme</code> media query is only supported by Chrome, Firefox and Safari and Opera.
This, however, should not stop you from implementing a similar solution on your website, as the site simply defaults to
"white" mode if it's not supported.</p>
<p class="ciu_embed" data-feature="prefers-color-scheme" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=prefers-color-scheme">Media query to detect if the user has set their system to use a light or dark color theme.</a>
</p>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>
            </main>
            <script src='../../../../../assets/js/highlight.pack.js'></script>
            <script>hljs.initHighlightingOnLoad();</script>
            <?php include('../../../../../_inc/footer.php'); ?>
        