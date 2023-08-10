<?php $description = 'Learn how to write SVG by hand';?>

<?php include '../../_inc/header.php';?>
<?php include '../../_inc/icons.php';?>

<span class='inverted'><?php include '../../_inc/navigation.php';?></span>

<main id='main' class='central space post blog'>

    <h1>Writing SVG Paths</h1>
<p class='timestamp'><time datetime='08-08-2019'>08-08-2019</time></p>
<hr class="stop">
<p>The <code>&lt;path&gt;</code> in SVG is by far the most versatile drawing element. You can draw everything from lines and squares to triangles and circles.<wbr>
Basically, if you can imagine a shape, you can draw it with SVG <code>&lt;path&gt;</code>.</p>
<p>An example path would look something like this:</p>
<pre><code class="language-html">&lt;path
 d=&quot;M1.37109375,165.960938 C44.4153646,263.429688 122.199219,312.164063 234.722656,312.164063 C347.246094,312.164063 421.278646,263.429688 456.820312,165.960938 L234.722656,0.71484375 L1.37109375,165.960938 Z&quot;
 id=&quot;Path&quot;
 stroke=&quot;#979797&quot;
&gt;&lt;/path&gt;
</code></pre>
<p>Reformatting the above, so we can make sense of it:</p>
<pre><code class="language-html">&lt;path
 d=&quot;
  M 1.37109375,165.960938 
  C 44.4153646,263.429688 122.199219,312.164063 234.722656,312.164063 
  C 347.246094,312.164063 421.278646,263.429688 456.820312,165.960938 
  L 234.722656,0.71484375 
  L 1.37109375,165.960938 
  Z&quot;
&gt;
&lt;/path&gt;
</code></pre>
<p>The letters represent an &quot;svg command&quot; and the numbers represent the value or coordinate of said command.</p>
<p>Example from above</p>
<svg fill="#000" width="50%" viewBox="0 0 458 313" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <path d="M1.37109375,165.960938 C44.4153646,263.429688 122.199219,312.164063 234.722656,312.164063 C347.246094,312.164063 421.278646,263.429688 456.820312,165.960938 L234.722656,0.71484375 L1.37109375,165.960938 Z"></path>
</svg>
<style>
.flex {
 display: flex;
 flex-wrap: wrap;
 justify-content: space-between;
}
.fifty {
    width: calc(50% - 20px);
    margin: 10px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: center;
}
span {
 color: #777;
}
.svgExample2 {
 fill: none;
 stroke: white;
 stroke-width: 2;
 stroke-linecap: round;
 stroke-linejoin: round;
 max-width: 100px;
 background: #222;
 margin: 0 auto;
}
</style>
<p><br><br><br></p>
<center>
<p>##SVG Path Commands Explained</p>
</center>
<hr class="stop">
<div class="flex">
 <div class="fifty">
  <h3>M <span>X,Y</span></h3>
  <p>Move to the absolute X and Y coordinates</p>
  <svg class="svgExample2" viewBox="0 0 20 20">
   <path d="M 10,10 Z" />
  </svg>
<p><code>&lt;path d=&quot;M 10,10 Z&quot; /&gt;</code></p>
 </div>
 <div class="fifty">
  <h3>m <span>X,Y</span></h3>
  <p>Move to the right x and down y (or left and up if negative values)</p>
  <svg class="svgExample2" viewBox="0 0 20 20">
   <path d="M 5,5 Z m 10,10 z" />
  </svg>
<p><code>&lt;path d=&quot;M 5,5 Z m 10,10 z&quot; /&gt;</code></p>
 </div>
</div>
<hr class="stop">
<div class="flex">
 <div class="fifty">
  <h3>L <span>X,Y</span></h3>
  <p>Draw a straight line to the absolute coordinates x,y</p>
  <svg class="svgExample2" viewBox="0 0 20 20">
   <path d="M 5,5 L 12,12 " />
  </svg>
<p><code>&lt;path d=&quot;M 5,5 L 12,12&quot; /&gt;</code></p>
 </div>
 <div class="fifty">
  <h3>l <span>X,Y</span></h3>
  <p>Draw a straight line to a point that is relatively right x and down y (or left and up if negative values)</p>
  <svg class="svgExample2" viewBox="0 0 20 20">
   <path d="M 5,5 l 12,12 " />
  </svg>
<p><code>&lt;path d=&quot;M 5,5 l 12,12&quot; /&gt;</code></p>
 </div>
</div>
<hr class="stop">
<div class="flex">
 <div class="fifty">
  <h3>H <span>X</span></h3>
  <p>Draw a line horizontally to the exact coordinate x</p>
  <svg class="svgExample2" viewBox="0 0 20 20">
   <path d="M 5,10 H 10 " />
  </svg>
<p><code>&lt;path d=&quot;M 5,10 H 10&quot; /&gt;</code></p>
 </div>
 <div class="fifty">
  <h3>h <span>X</span></h3>
  <p>Draw a line horizontally relatively to the right x (or to the left if a negative value)</p>
  <svg class="svgExample2" viewBox="0 0 20 20">
   <path d="M 5,10 h 10 " />
  </svg>
<p><code>&lt;path d=&quot;M 5,10 h 10&quot; /&gt;</code></p>
</div>
</div>
<hr class="stop">
<div class="flex">
 <div class="fifty">
  <h3>V <span>Y</span></h3>
  <p>Draw a line vertically to the exact coordinate y</p>
  <svg class="svgExample2" viewBox="0 0 20 20">
   <path d="M 10,5 V 10 " />
  </svg>
<p><code>&lt;path d=&quot;M 10,5 V 10&quot; /&gt;</code></p>
</div>
<div class="fifty">
<h3>v <span>Y</span></h3>
<p>Draw a line vertically relatively down y (or up if a negative value)</p>
<svg class="svgExample2" viewBox="0 0 20 20">
<path d="M 10,5 v 10 " />
</svg>
`<path d="M 10,5 v 10" />`
</div>
</div>
<hr class="stop">
<div class="flex">
 <div class="fifty">
  <h3>Z / z <span>Y</span></h3>
  <p>Draw a straight line back to the start of the path</p>
  <svg class="svgExample2" viewBox="0 0 20 20">
   <path d="M 5,5 L 15,15" />
   <path d="M 5,5 V 15 h 10" style="opacity:0.2;" />
  </svg>
<p><code>&lt;path d=&quot;M 5,5 V 15 h 10 Z&quot; /&gt;</code></p>
 </div>
</div>
<hr class="stop">
<div class="flex">
 <div class="fifty">
  <h3>C <span>cX1,cY1 cX2,cY2 eX,eY</span></h3>
  <p>Draw a bezier curve based on two bezier control points and end at specified coordinates</p>
  <svg class="svgExample2" viewBox="0 0 20 20">
   <path d="M 3,3 C 3,20 17,20 17,3 " />
  </svg>
<p><code>&lt;path d=&quot;M 3,3 C 3,20 17,20 17,3&quot; /&gt;</code></p>
</div>
<div class="fifty">
<h3>c <span>cX1,cY1 cX2,cY2 eX,eY</span></h3>
<p>Same with all relative values</p>
<svg class="svgExample2" viewBox="0 0 20 20">
<path d="M 3,3 c 0,17 14,17 14,0 " />
</svg>
`<path d="M 3,3 c 0,17 14,17 14,0" />`
</div>
</div>
<hr class="stop">
<div class="flex">
 <div class="fifty">
  <h3>S <span>cX2,cY2 eX,eY</span></h3>
  <p>Basically a C command that assumes the first bezier control point is a reflection of the last bezier point used in the previous S or C command</p>
  <svg class="svgExample2" viewBox="0 0 20 20">
   <path d="M 3,17 S 3,3 16,12 " />
  </svg>
<p><code>&lt;path d=&quot;M 3,17 S 3,3 16,12&quot; /&gt;</code></p>
 </div>
 <div class="fifty">
  <h3>s <span>cX2,cY2 eX,eY</span></h3>
  <p>Same with all relative values</p>
  <svg class="svgExample2" viewBox="0 0 20 20">
   <path d="M 3,17 s 1,-14 13,-4 " />
  </svg>
<p><code>&lt;path d=&quot;M 3,17 s 1,-14 13,-4&quot; /&gt;</code></p>
 </div>
</div>
<hr class="stop">
<div class="flex">
 <div class="fifty">
  <h3>Q <span>cX,cY eX,eY</span></h3>
  <p>Draw a bezier curve based a single bezier control point and end at specified coordinates</p>
  <svg class="svgExample2" viewBox="0 0 20 20">
   <path d="M 3,17 Q 10,3 17,17 " />
  </svg>
<p><code>&lt;path d=&quot;M 3,17 Q 10,3 17,17&quot; /&gt;</code></p>
 </div>
 <div class="fifty">
  <h3>q <span>cX,cY eX,eY</span></h3>
  <p>Same with all relative values</p>
  <svg class="svgExample2" viewBox="0 0 20 20">
   <path d="M 3,17 q 7,-14 14,0 " />
  </svg>
<p><code>&lt;path d=&quot;M 3,17 q 7,-14 14,0&quot; /&gt;</code></p>
 </div>
</div>
<hr class="stop">
<div class="flex">
 <div class="fifty">
  <h3>T <span>eX,eY</span></h3>
  <p>Basically a Q command that assumes the first bezier control point is a reflection of the last bezier point used in the previous Q or T command</p>
  <svg class="svgExample2" viewBox="0 0 20 20">
   <path d="M 2,12 Q 6,1 10,12" style="opacity: 0.2;" />
   <path d="M 10,12 Q 14,23 18,12" />
  </svg>
<p><code>&lt;path d=&quot;M 2,12 Q 6,1 10,12 T 18,12&quot; /&gt;</code></p>
 </div>
 <div class="fifty">
  <h3>t <span>eX,eY</span></h3>
  <p>Same with all relative values</p>
  <svg class="svgExample2" viewBox="0 0 20 20">
   <path d="M 2,12 q 4,-11 8,0" style="opacity: 0.2;" />
   <path d="M 10,12 q 4,11 8,0" />
  </svg>
<p><code>&lt;path d=&quot;M 2,12 Q 6,1 10,12 t 8,0&quot; /&gt;</code></p>
 </div>
</div>
<hr class="stop">
<div class="flex">
 <div class="fifty">
  <h3>A <span>rX,rY rotation, arc, sweep, eX,eY</span></h3>
  <p>Draw an arc that is based on the curve an oval makes. First define the width and height of the oval. Then the rotation of the oval. Along with the end point, this makes two possible ovals. So the arc and sweep are either 0 or 1 and determine which oval and which path it will take.</p>
  <svg class="svgExample2" viewBox="0 0 20 20">
   <path d="M 2,10 A 1,1 40 1 0 18,10" />
  </svg>
<p><code>&lt;path d=&quot;M 2,10 A 1,1 40 1 0 18,10&quot; /&gt;</code></p>
</div>
<div class="fifty">
<h3>a <span>rX,rY rotation, arc, sweep, eX,eY</span></h3>
<p>Same with all relative values</p>
<svg class="svgExample2" viewBox="0 0 20 20">
<path d="M 2,10 a 1,1 40 1 0 16,0" />
</svg>
<p><code>&lt;path d=&quot;M 2,10 a 1,1 40 1 0 16,0&quot; /&gt;</code></p>
</div>
</div>
<p style="margin-top:0;">
<a class="source-link" target="_blank" rel="noopener" href="https://css-tricks.com/svg-path-syntax-illustrated-guide/" title="CSS Tricks">Source (css-tricks.com)</a>
</p>
<br><br><br>
<h2>Drawing SVG by hand</h2>
<style>
    svg.svgExample {
        width: 100%;
        height: 300px;
        background: #222;
    }
    svg.svgExample > path {
        stroke: white;
        fill: none;
        stroke-width: 3;
        stroke-linecap: round;
        stroke-linejoin: round;
    }
</style>
<h3>Example 1</h3>
<pre><code class="language-html">&lt;svg viewBox=&quot;0 0 100 100&quot;&gt;
 &lt;path
  d=&quot;
        M 25,40
        L 65,40
        L 65,65
        L 50,65
        Z
    &quot;
 /&gt;
&lt;/svg&gt;
</code></pre>
<center>
<svg class="svgExample" viewBox="0 0 100 100">
    <path d="
        M 25,40
        L 65,40
        L 65,65
        L 50,65
        Z
    "/>
</svg>
</center>
<h3>Example 2</h3>
<pre><code class="language-html">&lt;svg viewBox=&quot;0 0 100 100&quot;&gt;
 &lt;path
  d=&quot;
        M 50,50
        L 60,25
        L 40,25
        Z
    &quot;
 /&gt;
&lt;/svg&gt;
</code></pre>
<center>
<svg class="svgExample" viewBox="0 0 100 100">
    <path d="
        M 50,50
        L 60,25
        L 40,25
        Z
    "/>
</svg>
</center>
<h3>Example 3</h3>
<pre><code class="language-html">&lt;svg viewBox=&quot;0 0 64 64&quot; stroke-width=&quot;10&quot; stroke-linecap=&quot;round&quot;&gt;
 &lt;path
  d=&quot;
        M 7,12 
        L 57,12 
        M 7,32 
        L 57,32 
        M 7,52 
        L 57,52&quot;
 /&gt;
&lt;/svg&gt;
</code></pre>
<style>
    svg.burger {
        stroke-width: 10;
    }
</style>
<center>
<svg class="svgExample burger" viewBox="0 0 64 64" stroke-width="10" stroke-linecap="round">
 <path d="M 7,12 L 57,12 M 7,32 L 57,32 M 7,52 L 57,52" />
</svg>
</center>
<h3>Example 4</h3>
<pre><code class="language-html">&lt;svg viewBox=&quot;0 0 100 100&quot;&gt;
 &lt;path
  d=&quot;
        M 25,25
        S 75,25 75,75
        L 25,75
        L 50,50
        S 25,50 25,25
    &quot;
 /&gt;
&lt;/svg&gt;
</code></pre>
<center>
<svg class="svgExample" viewBox="0 0 100 100">
    <path d="
        M 25,25
        S 75,25 75,75
        L 25,75
        L 50,50
        S 25,50 25,25
    "/>
</svg>
</center>
<p><br><br><br></p>
<h2>Drawing SVG in real life</h2>
<p>I've put my newly acquired skills to use, and made a few SVG icons by hand</p>
<p class="codepen" data-height="274" data-theme-id="light" data-default-tab="result" data-user="triss90" data-slug-hash="d765a70efc3539b7ec44ab85b77021c6" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Handdrawn SVG">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/d765a70efc3539b7ec44ab85b77021c6/">
  Handdrawn SVG</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
<p>If you're looking to hone your SVG skills, CSS-Tricks has <a href="https://css-tricks.com/svg-path-syntax-illustrated-guide/" target="_blank" rel="noopener">a great article</a>, which goes into detail on the subject.</p>


</main>

<script src='../../assets/js/highlight.pack.js'></script>
<script>hljs.initHighlightingOnLoad();</script>

<?php include '../../_inc/footer.php';?>
