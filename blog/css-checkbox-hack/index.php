<?php $description = 'Learn how the infamous checkbox hack workds';  ?>

<?php include('../../_inc/header.php'); ?>
<?php include('../../_inc/icons.php'); ?>

<span class='inverted'><?php include('../../_inc/navigation.php'); ?></span>

<main id='main' class='central space post'>

    <h1>CSS Checkbox Hack</h1>
<p class='timestamp'><time datetime='21-08-2019'>21-08-2019</time></p>
<hr>
<p>The &quot;Checkbox Hack&quot; is the method of using a connected checkbox and label
to control one or more elements.</p>
<p>The markup might look something along these lines:</p>
<pre><code class="language-html">&lt;label for=&quot;toggleButtonInput&quot;&gt;Show/Hide&lt;/label&gt;
&lt;input type=&quot;checkbox&quot; id=&quot;toggleButtonInput&quot; /&gt;
&lt;div id=&quot;control&quot;&gt;
 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
 incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
 nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
&lt;/div&gt;
</code></pre>
<p>And the accompanying CSS like this:</p>
<pre><code class="language-css">input[type=&quot;checkbox&quot;] {
 display: none;
 position: absolute;
 top: -9999px;
 left: -9999px;
}

#control {
 display: none;
}

input[type=&quot;checkbox&quot;]:checked ~ #control {
 display: block;
}
</code></pre>
<h2>Try it out</h2>
<style>
.exampleWrapper {
 text-align: center; 
}
#toggleButtonInput {
 position: absolute;
 top: -9999px;
 left: -9999px;
 display: none;
}
#toggleButton {
 background-color: #222;
 color: #fefefe;
 padding: 0.5rem 1rem;
 font-size: 1rem;
 margin: 30px auto;
 display: inline-block;
}
#control {
 display: none;
}
input[type=checkbox]:checked ~ #control {
 display: block;
}
</style>
<hr>
<div class="exampleWrapper">
 <label id="toggleButton" for="toggleButtonInput">Show/Hide 👀</label>
 <input type="checkbox" id="toggleButtonInput">
 <div id="control">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>
<hr>
<h2>Accessibility</h2>
<p>This &quot;hack&quot; has its drawbacks however. It's in no way accessible. This flaw can be improved upon,
however, not fixed entirely:</p>
<pre><code class="language-html">&lt;label id=&quot;toggleButton&quot; for=&quot;toggleButtonInput&quot; style=&quot;cursor: pointer;&quot;&gt;
 &lt;button id=&quot;ToggleAccessibility&quot;&gt;Show/Hide 👀&lt;/button&gt;
&lt;/label&gt;
</code></pre>
<p>Make sure you can still click the label</p>
<pre><code class="language-css">#toggleButton button {
 pointer-events: none;
}
</code></pre>
<p>This makes the toggle button &quot;tabbable&quot;, but not &quot;clickable&quot;.
You'd have to control that with external javascript.</p>
<style>
.exampleWrapper2 {
 text-align: center; 
}
#toggleButtonInput2 {
 position: absolute;
 top: -9999px;
 left: -9999px;
 display: none;
}
#toggleButton2 {
 background-color: #222;
 color: #fefefe;
 padding: 0.5rem 1rem;
 font-size: 1rem;
 margin: 30px auto;
 display: inline-block;
}
#toggleButton2 > button {
    background: none;
    color: #f2f2f2;
    border: none;
    pointer-events: none;
    font-size: 1rem;
}
#control2 {
 display: none;
}
input[type=checkbox]:checked ~ #control2 {
 display: block;
}
</style>
<hr>
<div class="exampleWrapper2">
 <label id="toggleButton2" for="toggleButtonInput2" style="cursor: pointer;">
  <button id="ToggleAccessibility">Show/Hide 👀</button>
 </label>
 <input type="checkbox" id="toggleButtonInput2">
 <div id="control2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>
<hr>
<h2>Example</h2>
<p class="codepen" data-height="650" data-theme-id="light" data-default-tab="result" data-user="triss90" data-slug-hash="rrJgLE" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Tabs (checkbox-hack)">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/rrJgLE/">
  Tabs (checkbox-hack)</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
<p><strong>More Examples:</strong></p>
<ul>
    <li><a href="http://jsfiddle.net/genelocklin/LXx5v/" target="_blank" rel="noopener">Hide the sidebar!</a> by @genelocklin</li>
    <li><a href="https://codepen.io/gubs/pen/kqEaz" target="_blank" rel="noopener">Checkbox hack - popup</a> by Michael Gubitosa</li>
</ul>


</main>

<script src='../../assets/js/highlight.pack.js'></script>
<script>hljs.initHighlightingOnLoad();</script>

<?php include('../../_inc/footer.php'); ?>
