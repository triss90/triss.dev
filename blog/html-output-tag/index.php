<?php
    $activePage = "blog";
    $description = 'Learn how to use the HTML output tag';
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
    <a id="top" href="#main">skip to content</a>
    <?php include '../../inc/themes.php'; ?>
    <div class="article-progress">
        <div class="article-progress-inner"></div>
    </div>
    <?php include '../../inc/navigation.php'; ?>

    <main id='post'>
        <div class='container'>
            <div class='row'>
                <div class='tiny-12 small-10 medium-8 small-offset-1 medium-offset-2'>
                    <h1>HTML &lt;output&gt; Tag</h1>
<p class='timestamp'><time datetime='26-09-2019'>26-09-2019</time></p>
<hr>
<p>In this final installment of &quot;what's that weird html tag?&quot;, we're taking a look at the <code>&lt;output&gt;</code> tag.</p>
<p>The <code>&lt;output&gt;</code> tag provides a method of outputting calculated input data.
The output tag could be used when calculating server costs, when showing the result of an interest rate calculation and so on.</p>
<p>The tag is used like so <code>&lt;output name=&quot;result&quot;&gt;&lt;/output&gt;</code>, and provides the following attributes:</p>
<ul>
<li>
<code>for</code>: Allows an explicit relationship to be made between the result of a calculation and the elements
that represent the values that went into the calculation or that otherwise influenced the calculation.
The value must be a list of IDs (separated by a space) of elements within the same document.</li>
<li>
<code>form</code>: Associates the output with a form.</li>
<li>
<code>name</code>: Specifies the name of this element.</li>
</ul>
<h2>Example</h2>
<style>
.full-width {
 left: 50%;
 margin-left: -50vw;
 margin-right: -50vw;
 max-width: 100vw;
 position: relative;
 right: 50%;
 width: 100vw;
}
#form-container {
 box-shadow: 0 0 50px rgba(0,0,0,0.2);
 padding: 10%;
 border-radius: 0.5rem;
 font-size: 1rem;
}
form#calc {
 position: relative;
}
form#calc input {
 width: 100%;
}
form#calc input[type="number"],
form#calc select {
 -webkit-appearance: none;
 -moz-appearance: none;
 appearance: none;
 margin-bottom: 1rem;
 width: 100%;
 font-size: 1rem;
 padding: 0.5rem !important;
 background: white;
 border: 1px solid #ddd;
 border-radius: 4px; 
}
#number_one_output {
 position: absolute;
 left: 63%;
}
#calculation {
 color: green;
 font-weight: bold;
 text-decoration-line: underline;
 text-decoration-style: double;
}
</style>
<div id="form-container">
    <form id="calc" oninput="calculation.value = parseInt(number_one.value)+parseInt(number_two.value)+parseInt(number_three.value); number_one_output.value = parseInt(number_one.value); number_one_output.style.left = parseInt(number_one.value)-2 + '%';">
        <output name="number_one_output" id="number_one_output" for="number_one" form="calc">65</output><br>
        <input type="range" name="number_one" id="number_one" value="65"><br>
        <input type="number" name="number_two" id="number_two" value="30"><br>
        <select name="number_three" id="number_three">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
            <option value="50">50</option>
            <option value="60">60</option>
            <option value="70">70</option>
            <option value="80">80</option>
            <option value="90">90</option>
            <option value="100">100</option><br>
        </select>
        Output = <output name="calculation" id="calculation" for="number_one number_two number_three" form="calc">105</output>
    </form>
</div>
<h3>Code</h3>
<pre><code class="language-html">&lt;div id=&quot;form-container&quot;&gt;
 &lt;form
  id=&quot;calc&quot;
  oninput=&quot;calculation.value = parseInt(number_one.value)+parseInt(number_two.value)+parseInt(number_three.value); number_one_output.value = parseInt(number_one.value); number_one_output.style.left = parseInt(number_one.value)-2 + '%';&quot;
 &gt;
  &lt;output
   name=&quot;number_one_output&quot;
   id=&quot;number_one_output&quot;
   for=&quot;number_one&quot;
   form=&quot;calc&quot;
   &gt;65&lt;/output
  &gt;&lt;br /&gt;
  &lt;input type=&quot;range&quot; name=&quot;number_one&quot; id=&quot;number_one&quot; value=&quot;65&quot; /&gt;&lt;br /&gt;
  &lt;input type=&quot;number&quot; name=&quot;number_two&quot; id=&quot;number_two&quot; value=&quot;30&quot; /&gt;&lt;br /&gt;
  &lt;select name=&quot;number_three&quot; id=&quot;number_three&quot;&gt;
   &lt;option value=&quot;10&quot;&gt;10&lt;/option&gt;
   &lt;option value=&quot;20&quot;&gt;20&lt;/option&gt;
   &lt;option value=&quot;30&quot;&gt;30&lt;/option&gt;
   &lt;option value=&quot;40&quot;&gt;40&lt;/option&gt;
   &lt;option value=&quot;50&quot;&gt;50&lt;/option&gt;
   &lt;option value=&quot;60&quot;&gt;60&lt;/option&gt;
   &lt;option value=&quot;70&quot;&gt;70&lt;/option&gt;
   &lt;option value=&quot;80&quot;&gt;80&lt;/option&gt;
   &lt;option value=&quot;90&quot;&gt;90&lt;/option&gt;
   &lt;option value=&quot;100&quot;&gt;100&lt;/option&gt;
   &lt;br /&gt;
  &lt;/select&gt;
  Output =
  &lt;output
   name=&quot;calculation&quot;
   id=&quot;calculation&quot;
   for=&quot;number_one number_two number_three&quot;
   form=&quot;calc&quot;
   &gt;105&lt;/output
  &gt;
 &lt;/form&gt;
&lt;/div&gt;
</code></pre>
<h2>Browser Support</h2>
<p>The <code>&lt;output&gt;</code> tag is widely supported, only lacking behind in Internet Explorer.</p>
<p>See <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/output">https://developer.mozilla.org/</a> for more info.</p>

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