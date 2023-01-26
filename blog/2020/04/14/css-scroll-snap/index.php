
            <?php $description = 'CSS Scroll Snap';  ?>
            <?php include('../../../../../_inc/header.php'); ?>
            <?php include('../../../../../_inc/icons.php'); ?>
            
            <span class='inverted'><?php include('../../../../../_inc/navigation.php'); ?></span>
            <main id='main' class='central space post'>
        <h1>CSS Scroll Snap</h1>
<p class='timestamp'><time datetime='14-04-2020'>14-04-2020</time></p>
<hr>
<p>Ever wondered if you could make a CSS-only carousel or image gallery, without the use of awkward hacks? 
Well it's 2020 and you can!</p>
<p>The new(ish) CSS <code>scroll-snap-type</code> lets you do just that.</p>
<style>
iframe.example {
    width: 100%;
    border: 0;
    height: 35vh;
}
</style>
<iframe class="example" src="../../../../../examples/css-scroll-snap.php"></iframe>
<p>If you want to play around with CSS Scroll snap, you can do so using the example above, on CodePen: </p>
<p class="codepen" data-height="265" data-theme-id="dark" data-default-tab="css" data-user="triss90" data-slug-hash="bGVNLww" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS Scroll Snap">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/bGVNLww">
  CSS Scroll Snap</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
<h2>Browser Support</h2>
<p>CSS scroll snap has wide support, with the exception of Internet Explorer and a few mobile browsers</p>
<p class="ciu_embed" data-feature="css-snappoints" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=css-snappoints">CSS technique that allows customizable scrolling experiences like pagination of carousels by setting defined snap positions.</a>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>
<p>To learn more about CSS Scroll Snap, please refer to the docs on <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/scroll-snap-type" target="_blank" rel="noopener"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/scroll-snap-type">https://developer.mozilla.org/en-US/docs/Web/CSS/scroll-snap-type</a></a></p>
            </main>
            <script src='../../../../../assets/js/highlight.pack.js'></script>
            <script>hljs.initHighlightingOnLoad();</script>
            <?php include('../../../../../_inc/footer.php'); ?>
        