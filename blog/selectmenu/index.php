<?php
    $activePage = "blog";
    $description = 'Learn how HTML element selectmenu works';
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
selectmenu.logos::part(button) {
  width: 200px;
  max-width: 100%;
  font-size: 1rem;
  color: #444;
  line-height: 1.3;
  padding: .6em 1.4em .5em .8em;
  box-sizing: border-box;
  margin: 0;
  border: 1px solid #aaa;
  box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
  border-radius: .5em;
  background-color: #fff;
}
selectmenu.logos::part(selected-value) {
  width: 100%;
  text-align: left;
}
selectmenu.logos::part(listbox) {
  color: #444;
  line-height: 1.3;
  border-radius: .5em;
}
selectmenu.logos option {
  padding: 0.5rem;
}
selectmenu.logos option {
  display: flex;
  gap: 0.5rem;
  align-items: center;
}
selectmenu.logos option::before {
  display: inline-block;
  content: "";
  width: 1rem;
  height: 1rem;
  background-repeat: no-repeat;
  background-size: contain;
}
selectmenu.logos option[value="brave"]::before {
  background-image: url("https://upload.wikimedia.org/wikipedia/commons/c/c4/Brave_lion.png");
}
selectmenu.logos option[value="edge"]::before {
  background-image: url("https://upload.wikimedia.org/wikipedia/commons/7/7e/Microsoft_Edge_logo_%282019%29.png");
}
selectmenu.logos option[value="chrome"]::before {
  background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Google_Chrome_icon_%28September_2014%29.svg/1200px-Google_Chrome_icon_%28September_2014%29.svg.png");
}
selectmenu.logos option[value="firefox"]::before {
  background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Firefox_logo%2C_2019.svg/1200px-Firefox_logo%2C_2019.svg.png");
}
selectmenu.logos option[value="safari"]::before {
  background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Safari_browser_logo.svg/1200px-Safari_browser_logo.svg.png");
}
selectmenu.logos option[value="opera"]::before {
  background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Opera_2015_icon.svg/640px-Opera_2015_icon.svg.png");
}
</style>
<h1>CSS selectmenu</h1>
<p class='timestamp'><time datetime='28-01-2022'>28-01-2022</time></p>
<hr>
<p>As of <strong>28-01-2022</strong>, this feature is only available as an Experimental Web Platform feature in Chrome. This feature can be enabled in your Chrome browser here:
<a href="chrome://flags/#experimental-web-platform-features">chrome://flags/#experimental-web-platform-features</a>.</p>
<selectmenu class="logos">
  <option value="edge" selected>Edge</option>
  <option value="chrome">Chrome</option>
  <option value="firefox">Firefox</option>
  <option value="brave">Brave</option>
  <option value="safari">Safari</option>
  <option value="opera">Opera</option>
</selectmenu>
<p>You use <code>selectmenu</code> just like you would use <code>select</code>:</p>
<pre><code class="language-html">&lt;selectmenu class=&quot;logos&quot;&gt;
 &lt;option value=&quot;edge&quot; selected&gt;Edge&lt;/option&gt;
 &lt;option value=&quot;chrome&quot;&gt;Chrome&lt;/option&gt;
 &lt;option value=&quot;firefox&quot;&gt;Firefox&lt;/option&gt;
 &lt;option value=&quot;brave&quot;&gt;Brave&lt;/option&gt;
 &lt;option value=&quot;safari&quot;&gt;Safari&lt;/option&gt;
 &lt;option value=&quot;opera&quot;&gt;Opera&lt;/option&gt;
&lt;/selectmenu&gt;
</code></pre>
<h2>Styling selectmenu</h2>
<p>With the <code>selectmenu</code> element you have the ability to style every element of the select menu, using a variety of new CSS selectors such as:</p>
<ul>
<li>selectmenu: <code>selectmenu {}</code>
</li>
<li>button: <code>selectmenu::part(button) {}</code>
</li>
<li>selected-value: <code>selectmenu::part(selected-value) {}</code>
</li>
<li>listbox: <code>selectmenu::part(listbox) {}</code>
</li>
<li>optgroup: <code>selectmenu optgroup {}</code>
</li>
<li>option: <code>selectmenu option {}</code>
</li>
</ul>
<style>
selectmenu, selectmenu::part(button) {
  font-size: 1rem;
}
</style>
<h4>selectmenu</h4>
<pre><code class="language-css">selectmenu {
 border: 2px dashed red;
}
</code></pre>
<style>
.selectmenu {
  border: 2px dashed red;
}
</style>
<selectmenu class="selectmenu">
  <option>Option 1</option>
  <option>Option 2</option>
  <option>Option 3</option>
</selectmenu>
<h4>selectmenu::part(button)</h4>
<pre><code class="language-css">selectmenu::part(button) {
 border: 2px dashed red;
}
</code></pre>
<style>
.selectmenubutton::part(button) {
  border: 2px dashed red;
}
</style>
<selectmenu class="selectmenubutton">
  <option>Option 1</option>
  <option>Option 2</option>
  <option>Option 3</option>
</selectmenu>
<h4>selectmenu::part(selected-value)</h4>
<pre><code class="language-css">selectmenu::part(selected-value) {
 border: 2px dashed red;
}
</code></pre>
<style>
.selectmenuselected::part(selected-value) {
  border: 2px dashed red;
}
</style>
<selectmenu class="selectmenuselected">
  <option>Option 1</option>
  <option>Option 2</option>
  <option>Option 3</option>
</selectmenu>
<h4>selectmenu::part(listbox)</h4>
<pre><code class="language-css">selectmenu::part(listbox) {
 border: 2px dashed red;
}
</code></pre>
<style>
.selectmenulistbox::part(listbox) {
  border: 2px dashed red;
}
</style>
<selectmenu class="selectmenulistbox">
  <option>Option 1</option>
  <option>Option 2</option>
  <option>Option 3</option>
</selectmenu>
<h4>selectmenu optgroup</h4>
<pre><code class="language-css">selectmenu optgroup {
 border: 2px dashed red;
}
</code></pre>
<style>
.selectmenuoptgroup optgroup {
  border: 2px dashed red;
}
</style>
<selectmenu class="selectmenuoptgroup">
  <optgroup label="First option set">
    <option>Option 1</option>
    <option>Option 2</option>
    <option>Option 3</option>
  </optgroup>
  <optgroup  label="Second option set">
    <option>Option 4</option>
    <option>Option 5</option>
    <option>Option 6</option>
  </optgroup>
</selectmenu>
<h4>selectmenu option</h4>
<pre><code class="language-css">selectmenu option {
 border: 2px dashed red;
}
</code></pre>
<style>
.selectmenuoption option {
  border: 2px dashed red;
}
</style>
<selectmenu class="selectmenuoption">
  <option>Option 1</option>
  <option>Option 2</option>
  <option>Option 3</option>
</selectmenu>

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