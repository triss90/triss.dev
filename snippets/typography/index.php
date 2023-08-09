<?php include '../../_inc/header.php';?>
<?php include '../../_inc/icons.php';?>

<div class="snippets" >

    <header role="banner" class="snippets">
        <?php include '../../_inc/navigation.php';?>
        <div class="central center">
            <h1>Typography Template</h1>
            <br><br>
        </div>
    </header>

    <br><br>
    <style>
      <?php include $_SERVER["DOCUMENT_ROOT"] . "/assets/css/gridder.css";?>
      <?php include $_SERVER["DOCUMENT_ROOT"] . "/assets/css/snippet_typography.css";?>
    </style>

    <main class="container" id="main" style="font-size:16px;">

        <div class="row">
          <div class="tiny-10 tiny-offset-1">
            <h2>The code</h2>
            <pre><code>

            </code></pre>

            <br><br><hr>
          </div>
        </div>

        <div id="typography-template" class="row">
            <div class="tiny-10 tiny-offset-1">
              <h1>Heading 1 (h1)</h1>
              <pre><code>&lt;h1&gt;Heading 1 (h1)&lt;/h1&gt;</code></pre>
              <h2>Heading 2 (h2)</h2>
              <pre><code>&lt;h2&gt;Heading 2 (h2)&lt;/h2&gt;</code></pre>
              <h3>Heading 3 (h3)</h3>
              <pre><code>&lt;h3&gt;Heading 3 (h3)&lt;/h3&gt;</code></pre>
              <h4>Heading 4 (h4)</h4>
              <pre><code>&lt;h4&gt;Heading 4 (h4)&lt;/h4&gt;</code></pre>
              <h5>Heading 5 (h5)</h5>
              <pre><code>&lt;h5&gt;Heading 5 (h5)&lt;/h5&gt;</code></pre>
              <h6>Heading 6 (h6)</h6>
              <pre><code>&lt;h6&gt;Heading 6 (h6)&lt;/h6&gt;</code></pre>
            </div>
        </div>

    </main>

    <script src="../../../../../assets/js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <?php include '../../_inc/footer.php';?>

</div>