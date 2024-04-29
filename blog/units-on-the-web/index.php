<?php
    $activePage = "blog";
    $description = 'An introduction to units on the web';
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
                    <style>
.box {
 border: 2px solid black;
 background: white;
 color: black;
 display: inline-block;
 margin-bottom: 5px;
 padding: 5px;
 text-align: center;
}
.darkmode .box,
.darkmode .grid .item {
 border: 2px solid white;
}
.grid {
 display: grid;
 gap: 5px;
 grid-template-columns: 1fr 1fr 1fr 1fr;
 grid-template-rows: 100px 200px 100px;
 grid-template-areas:
  "head head blank side"
  "main main blank side"
  "footer footer footer footer";
 
}
.grid .item {
 border: 2px solid black;
 display: flex;
 justify-content: center;
 align-items: center;
 text-align: center;
}
.grid .item.item-1 {
 grid-area: head; 
}
.grid .item.item-2 {
 grid-area: main;
}
.grid .item.item-2-5 {
 grid-area: blank;
 border: 0;
 background-color: #F9F7FF30;
 background: repeating-linear-gradient( -45deg, #00000010, #00000010 calc( 5px/2), #F9F7FF30 calc( 5px/2), #F9F7FF30 calc( 5px*2) );
}
.grid .item.item-3 {
 grid-area: side; 
}
.grid .item.item-4 {
 grid-area: footer; 
}
</style>
<h1>Units on the Web</h1>
<p class='timestamp'><time datetime='10-03-2023'>10-03-2023</time></p>
<hr>
<p>In CSS, units are used to define the size, distance, and other dimensions of elements on a web page. There are several types of units in CSS:</p>
<h2>Absolute length units</h2>
<p>These units are fixed and do not change with screen resolution or zoom level. They include:</p>
<p>| Unit  | Name                | Equivalent |
| ----- | ------------------- | ---------- |
| <code>1cm</code> | Centimeters         | 37.8px     |
| <code>1mm</code> | Millimeters         | 3.78px     |
| <code>1Q</code>  | Quarter-millimeters | 0.95px     |
| <code>1in</code> | Inches              | 96px       |
| <code>1pc</code> | Picas               | 16px       |
| <code>1pt</code> | Points              | 1.33px     |
| <code>1px</code> | Pixels              | 1px        |</p>
<p>Pixel is the most commonly used absolute unit in CSS. It represents a single dot on a screen and is often used for precise measurements.</p>
<p>You will rarely have use for other absolute units of length on the web, though there are cases where you might want to create a layout that translates well on print.
Under those conditions, real world measurements like inches, centimeters and even millimeters might come in handy.</p>
<h3>Examples</h3>
<p>The following examples have their <code>width</code> set to the respective units and measurements:</p>
<div class="box" style="background-color:#e6b0aa; width:3cm;">3cm</div>
<div class="box" style="background-color:#f5b6b1; width:30mm;">30mm</div>
<div class="box" style="background-color:#d7bce1; width:120Q;">150Q</div>
<div class="box" style="background-color:#d2b4de; width:1.5in;">1.5in</div>
<div class="box" style="background-color:#a9cce3; width:8pc;">8pc</div>
<div class="box" style="background-color:#aed6f1; width:100pt;">100pt</div>
<div class="box" style="background-color:#a3e4d7; width:100px;">100px</div>
<h2>Relative length units</h2>
<p>These units are relative to other elements on the page or to the viewport size. They include:</p>
<p>| Unit        | Relative to                                                                                        |
| ----------- | -------------------------------------------------------------------------------------------------- |
| <code>vw</code>        | % of the viewport's width                                                                          |
| <code>vh</code>        | % of the viewport's height                                                                         |
| <code>vmin</code>      | % of the viewport's smaller dimension                                                              |
| <code>vmax</code>      | % of the viewport's larger dimension                                                               |
| <code>vb</code>        | % of the size of the initial containing block in the direction of the root element's <em>block</em> axis  |
| <code>vi</code>        | % of the size of the initial containing block in the direction of the root element's <em>inline</em> axis |
| <code>svw</code> <code>svh</code> | % of the small viewport's width and height, respectively                                           |
| <code>lvw</code> <code>lvh</code> | % of the large viewport's width and height, respectively                                           |
| <code>dvw</code> <code>dvh</code> | % of the dynamic viewport's width and height, respectively                                         |
| <code>%</code>         | % of the parent element                                                                            |</p>
<h3>Examples</h3>
<p>Note how(try resizing your browser window) the <code>width</code> of these elements change according to the size(height and width) of the viewport(your browser window):</p>
<div class="box" style="background-color:#e6b0aa; width:10vw;">10vw</div>
<div class="box" style="background-color:#f5b6b1; width:10vh;">10vh</div>
<div class="box" style="background-color:#d7bce1; width:10vmin;">10vmin</div>
<div class="box" style="background-color:#d2b4de; width:10vmax;">10vmax</div>
<div class="box" style="background-color:#a9cce3; width:10vb;">10vb</div>
<div class="box" style="background-color:#aed6f1; width:10vi;">10vi</div>
<div class="box" style="background-color:#a3e4d7; width:10svw;">10svw</div>
<div class="box" style="background-color:#a2d9ce; width:10svh;">10svh</div>
<div class="box" style="background-color:#d4efdf; width:10lvw;">10lvw</div>
<div class="box" style="background-color:#d5f5e3; width:10lvh;">10lvh</div>
<div class="box" style="background-color:#fbf3cf; width:10dvw;">10dvw</div>
<div class="box" style="background-color:#fdebd0; width:10dvh;">10dvh</div>
<div class="box" style="background-color:#f9e5d3; width:10%;">10%</div>
<h2>Font-relative length units</h2>
<p>These units are used to define the size of text, and are relative to the font-size or line-height of the element. They include:</p>
<p>| Unit  | Relative to                     |
| ----- | ------------------------------- |
| <code>em</code>  | Font size of the parent         |
| <code>rem</code> | Font size of the root element   |
| <code>lh</code>  | Line height of the element      |
| <code>rlh</code> | Line height of the root element |</p>
<h3>Examples</h3>
<p>These units are commonly used to define the font-size and width of elements:</p>
<div class="box" style="background-color:#e6b0aa; width:10em;">10em</div>
<div class="box" style="background-color:#f5b6b1; width:10rem;">10rem</div>
<div class="box" style="background-color:#d7bce1; width:10lh;">10lh</div>
<div class="box" style="background-color:#d2b4de; width:10rlh;">10rlh</div>
<p><code>em</code> and <code>rem</code> are the two relative lengths you are most likely to encounter when sizing anything from boxes to text.
It's worth understanding how these work, and the differences between them.</p>
<p>The below examples provide a demonstration.</p>
<p>To start with, we set <em>16px</em> as the <code>font-size</code> on the <code>&lt;html&gt;</code> element:</p>
<pre><code class="language-CSS">html {
 font-size: 16px;
}
</code></pre>
<p>Thanks to the cascading nature of CSS, this means that the default <code>font-size</code> of our document is now <em>16px</em>
and is thusly inherited by all elements that don't otherwise have a specified <code>font-size</code>.</p>
<p>We can now use <code>em</code> and <code>rem</code> to directly reference this unit of measurement, as we've set 1em &amp; 1rem = 16px.</p>
<p>So we can write CSS like this:</p>
<pre><code class="language-CSS">p {
 font-size: 2rem /* or 2 * 16px = 32px */
}
</code></pre>
<p>Say we want to change this for a specific element, but not everywhere on the page.
All we need to do in this case, is reference the parent element(with <code>em</code>) instead of the root element(with <code>rem</code>) and update the pixel value of the parent accordingly:</p>
<pre><code class="language-CSS">.text-block {
 font-size: 20px
}
.text-block p {
 font-size: 2em /* or 2 * 20px = 40px */
}
</code></pre>
<p><code>em</code> and <code>rem</code> are very powerful tools when attempting to scale elements in relation to one another.</p>
<h2>Other length units</h2>
<p>CSS also supports other units such as the <code>ex</code> unit (relative to the x-height of the font),
the <code>ch</code> unit (relative to the width of the &quot;0&quot; character in the font), and the <code>fr</code> unit (used in CSS Grid Layout to distribute available space).</p>
<p>| Unit | Description                                                         |
| ---- | ------------------------------------------------------------------- |
| <code>fr</code> | Used in CSS Grid Layout to distribute available space               |
| <code>ex</code> | Relative to the x-height of the the element's font                  |
| <code>ch</code> | The advance measure (width) of the glyph &quot;0&quot; of the element's font. |</p>
<h3><code>fr</code>-unit</h3>
<p>With CSS Grid Layout, we get a new flexible unit: the <code>fr</code> unit.
This is a fractional unit which means that <code>1fr</code> takes up 1 part of the available space.</p>
<p>In the following example we're working with 4 columns which in turn means that <code>1fr</code> = <code>25%</code></p>
<pre><code class="language-CSS">.grid {
 display: grid;
 gap: 5px;

 grid-template-columns: 1fr 1fr 1fr 1fr;

 grid-template-rows: 100px 200px 100px;
 grid-template-areas:
  &quot;head head . side&quot;
  &quot;main main . side&quot;
  &quot;footer footer footer footer&quot;;
}
</code></pre>
<div class="grid">
 <div class="item item-1">head<br>&larr;2fr&rarr;</div>
 <div class="item item-2">main<br>&larr;2fr&rarr;</div>
 <div class="item item-2-5">&larr;1fr&rarr;</div>
 <div class="item item-3">side<br>&larr;1fr&rarr;</div>
 <div class="item item-4">footer<br>&larr;4fr&rarr;</div>
</div>
<h2>Conclusion</h2>
<p>While you can accomplish a lot with knowledge of just a few of the units available to you, it is very beneficial to have a grasp of them all.</p>
<p>Without insight into the different unit types, you couldn't do fun stuff like <a href="https://triss.dev/blog/2020/05/20/fluid-typography/">fluid typography</a>:</p>
<pre><code class="language-CSS">html {
 font-size: calc(16px + 6 * ((100vw - 320px) / 680));
}
</code></pre>

                </div>
            </div>
        </div>
    </main>

    <script src='../../assets/js/article.js'></script>
    <script src='../../assets/js/vendor/highlight.pack.js'></script>
    <script>
    hljs.initHighlightingOnLoad();
    </script>

    <?php include '../../inc/footer.php'; ?>
    <?php include '../../inc/scripts.php'; ?>
</body>

</html>