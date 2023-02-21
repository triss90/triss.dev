
            <?php $description = 'Smooth scroll-to-top';  ?>
            <?php include('../../../../../_inc/header.php'); ?>
            <?php include('../../../../../_inc/icons.php'); ?>
            
            <span class='inverted'><?php include('../../../../../_inc/navigation.php'); ?></span>
            <main id='main' class='central space post'>
        <h1>Smooth scroll-to-top</h1>
<p class='timestamp'><time datetime='21-02-2023'>21-02-2023</time></p>
<hr>
<p>Back in the day, circa 2010, when we needed to scroll to top, we would use the jQuery library to accomplish this. </p>
<p>I dug out the following snippet from a project I launched way back in 2010. 
While the project is long since obsolete, it does serve to show just how far we've come:</p>
<pre><code class="language-javascript">// Select all links with hashes
$('a[href*="#"]')
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
  if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
    &amp;&amp; 
    location.hostname == this.hostname
  ) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000, function() {
        var $target = $(target);
        $target.focus();
        if ($target.is(":focus")) {
          return false;
        } else {
          $target.attr('tabindex','-1');
          $target.focus();
        };
      });
    }
  }
});</code></pre>
<p>I believe this, or at least a version of it, was originally posted by Chris Coyier over at <a href="https://css-tricks.com">css-tricks.com</a>,
though I can't be sure.</p>
<p>It simply targets all <code>#</code> links and applies smooth scrolling to their respective elements.</p>
<p>Today there's luckily a much simpler and better way to achieve this effect, and it's available in native Javascript:</p>
<pre><code class="language-html">&lt;a href="#0" onclick="scrollToTop();"&gt;scroll-to-top&lt;/a&gt;

&lt;script&gt;
function scrollToTop() {
  window.scrollTo({
      top: 0,
      left: 0,
      behavior: 'smooth'
  });
}
&lt;/script&gt;</code></pre>
<p>Simply trigger this function with a button at the position you want to scroll from and watch the window magically scroll to the top.</p>
<p>I've recently implemented this feature in the footer on this site.</p>
<p>Try it for yourself:
<a href="#0" style="display: inline;" onclick="scrollToTop();return false;" class="totop" title="Go to top" aria-label="Go to top">&#8593; Top &#8593;</a></p>
            </main>
            <script src='../../../../../assets/js/highlight.pack.js'></script>
            <script>hljs.initHighlightingOnLoad();</script>
            <?php include('../../../../../_inc/footer.php'); ?>
        