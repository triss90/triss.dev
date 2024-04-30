<?php
    $activePage = "blog";
    $description = 'Learn how to add a smooth scroll-to-top feature to your projects';
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
    <div class="article-progress">
        <div class="article-progress-inner"></div>
    </div>
    <?php include '../../inc/navigation.php'; ?>

    <main id='post'>
        <div class='container'>
            <div class='row'>
                <div class='tiny-12 small-10 medium-8 small-offset-1 medium-offset-2'>
                    <h1>Smooth scroll-to-top</h1>
<p class='timestamp'><time datetime='21-02-2023'>21-02-2023</time></p>
<hr>
<p>Back in the day, circa 2010, when we needed to scroll to top we would use the jQuery library to accomplish this.</p>
<p>I dug out the following snippet from a project I launched way back in 2010.
While the project is long since obsolete, it does serve to show just how far we've come:</p>
<pre><code class="language-javascript">// Select all links with hashes
$('a[href*=&quot;#&quot;]')
 .not('[href=&quot;#&quot;]')
 .not('[href=&quot;#0&quot;]')
 .click(function (event) {
  if (
   location.pathname.replace(/^\//, &quot;&quot;) ==
    this.pathname.replace(/^\//, &quot;&quot;) &amp;&amp;
   location.hostname == this.hostname
  ) {
   var target = $(this.hash);
   target = target.length ? target : $(&quot;[name=&quot; + this.hash.slice(1) + &quot;]&quot;);
   if (target.length) {
    event.preventDefault();
    $(&quot;html, body&quot;).animate(
     {
      scrollTop: target.offset().top,
     },
     1000,
     function () {
      var $target = $(target);
      $target.focus();
      if ($target.is(&quot;:focus&quot;)) {
       return false;
      } else {
       $target.attr(&quot;tabindex&quot;, &quot;-1&quot;);
       $target.focus();
      }
     }
    );
   }
  }
 });
</code></pre>
<p>I believe this, or at least a version of it, was originally posted by Chris Coyier over at <a href="https://css-tricks.com">css-tricks.com</a>,
though I can't be sure.</p>
<p>It simply targets all <code>#</code> links and applies smooth scrolling to their respective elements.</p>
<p>Today there's luckily a much simpler and better way to achieve this effect, and it's even available in native Javascript:</p>
<pre><code class="language-html">&lt;button onclick=&quot;scrollToTop();&quot;&gt;scroll-to-top&lt;/button&gt;

&lt;script&gt;
 function scrollToTop() {
  window.scrollTo({
   top: 0,
   left: 0,
   behavior: &quot;smooth&quot;,
  });
 }
&lt;/script&gt;
</code></pre>
<p>Simply trigger this function with a button at the position you want to scroll from and watch the window magically scroll to the top.</p>
<p>I've recently implemented this feature in the footer on this site.</p>
<p>Try it for yourself:
<a href="#0" style="display: inline;" onclick="scrollToTop();return false;" class="totop" title="Go to top" aria-label="Go to top">↑ Top ↑</a></p>

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