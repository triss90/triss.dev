<?php
    $activePage = "blog";
    $description = 'Learn how to create a rudimentary javascript library';
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
    <?php include '../../inc/navigation.php'; ?>

    <main id='post'>
        <div class='container'>
            <div class='row'>
                <div class='tiny-12 small-10 medium-8 small-offset-1 medium-offset-2'>
                    <h1>Creating a JS Library</h1>
<p class='timestamp'><time datetime='15-05-2019'>15-05-2019</time></p>
<hr>
<p>Lately I've been dabbling in JS libraries. Specifically I've been trying my hand at creating a few.</p>
<ul>
<li>
<a href="https://github.com/triss90/muds.io">Muds</a> - A simple, open source WYSIWYG editor</li>
<li>
<a href="https://github.com/triss90/dotbot">DobBot</a> - A framework for creating a randomized, dotted background pattern.</li>
</ul>
<p>While I don't claim to be an expert on the field. I did learn a thing or two in the process.</p>
<h2>The dream!</h2>
<pre><code class="language-javascript">var instance = new myLibrary({
  selector: &quot;#selector&quot;,
  anOption: 123,
  anotherOption: &quot;Some option&quot;
)};
</code></pre>
<p>The example above is a brilliant way of initializing a new instance of a library or module. My initial goal was create something that would adhere to this format.</p>
<p>I found that It would take 3 simple steps.</p>
<ul>
<li>Create some way of handling initial settings or options</li>
<li>Figure out a way of overwriting these</li>
<li>Write the library logic itself</li>
</ul>
<h2>Creating the library</h2>
<p>Start out by creating a new self invoking function like so</p>
<pre><code class="language-javascript">(function () {})();
</code></pre>
<p>Next step is to name the library, thus making it globally accessible: <code>window.myLib = myLib;</code></p>
<p>You can now initialize the library like so</p>
<pre><code class="language-html">&lt;script src=&quot;path/to/my/library.js&quot;&gt;&lt;/script&gt;
&lt;script&gt;
 var instance = new myLib({

 )};
&lt;/script&gt;
</code></pre>
<p>next we need to add some default options</p>
<pre><code class="language-javascript">(function () {
 myLib.defaults = {
  selector: &quot;&quot;,
  text: &quot;Hello World!&quot;,
  color: &quot;black&quot;,
 };
 window.myLib = myLib;
})();
</code></pre>
<p>With our default options in place. It's time to write the logic that'll merge our user-defined options with the defaults</p>
<pre><code class="language-javascript">(function(){
    const myLib = function(opts) {
        // Merge default options with user options
     this.options = Object.assign(myLib.defaults, opts);

     // Define merged options
        this.selector = document.querySelector(this.options.selector);
        this.text = this.options.text;
        this.color = this.options.color;
    }
 myLib.defaults = {...};
 window.myLib = myLib;
})();
</code></pre>
<p>With this in place, all there's left to do, is to write the library logic itself.</p>
<p>This demo library simply prints a text.</p>
<pre><code class="language-javascript">(function(){
    const myLib = function(opts) {...}

    // library logic
    myLib.prototype.init = function() {
        this.selector.style.color = this.color;
        this.selector.innerHTML = this.text;
    };

 myLib.defaults = {...};
 window.myLib = myLib;
})();
</code></pre>
<p>Now you can run the init function and you're all set!</p>
<pre><code class="language-javascript">(function(){
    const myLib = function(opts) {
        ...
        this.init();
    }

    myLib.prototype.init = function() {...};
    myLib.defaults = {...};
    window.myLib = myLib;
})();
</code></pre>
<h2>User options</h2>
<p>The user can overwrite our default options when initializing the library like this:</p>
<pre><code class="language-html">&lt;script src=&quot;path/to/my/library.js&quot;&gt;&lt;/script&gt;
&lt;script&gt;
 var instance = new myLib({
     selector: '#myLibrary',
     text: 'Hello Earth!',
     color: 'red'
 )};
&lt;/script&gt;
</code></pre>
<h2>Browser support</h2>
<p>While <code>Object.assign()</code> is amazing, it's not supported by Internet Explorer 11. So if you need to support IE11 you'll have to merge the options manually.
Merging the the options can be done by looping through the attributes like this:</p>
<pre><code class="language-javascript">function merge_options(defaults, user_options) {
 let new_options = {};
 let attrname;
 for (attrname in defaults) {
  new_options[attrname] = defaults[attrname];
 }
 for (attrname in user_options) {
  new_options[attrname] = user_options[attrname];
 }
 return new_options;
}
this.options = merge_options(myLib.defaults, opts);
</code></pre>
<p>Simply replace the following with the example above</p>
<pre><code class="language-javascript">this.options = Object.assign(myLib.defaults, opts);
</code></pre>
<h2>Example</h2>
<p class="codepen" data-height="265" data-theme-id="light" data-default-tab="html,result" data-user="triss90" data-slug-hash="afd2a9184f4c76b101c916937c415075" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="JS Library example">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/afd2a9184f4c76b101c916937c415075/">
  JS Library example</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>

                </div>
            </div>
        </div>
    </main>

    <script src='../../assets/js/vendor/highlight.pack.js'></script>
    <script>
    hljs.initHighlightingOnLoad();
    </script>

    <?php include '../../inc/footer.php'; ?>
    <?php include '../../inc/scripts.php'; ?>
</body>

</html>