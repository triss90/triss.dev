<?php
    $activePage = "snippets";
    $description = "Toggle Snippet";
?>
<!DOCTYPE html>
<html lang="en">
<!--
  What's up, Inspector Gadget? 🕵️‍♂️
  Go on then! I've made it convenient for you, view the source here: https://github.com/triss90/triss.dev

  Lighthouse scores (24/04/2024):
  Performance: 100
  Accessibility: 100
  Best Practices: 100
  SEO: 100
-->

<head>
    <?php include '../../inc/meta.php'; ?>
    <style id="toggle-css">
    <?php require_once ($rootDir.'/snippets/toggle/toggle.css');
    ?>
    </style>
</head>

<body>
    <a id="top" href="#main">skip to content</a>
    <?php include '../../inc/themes.php'; ?>
    <?php include '../../inc/navigation.php'; ?>

    <main id="main">
        <div class="container">

            <header class="hero small">
                <div class="row">
                    <div class="tiny">
                        <h1 class="title">Accessible Toggle Buttons</h1>
                        <p class="subtitle">Toggle buttons are a pleasant interface for toggling a value between two states, and offer the same semantics and keyboard navigation as native checkbox elements.</p>
                    </div>
                </div>
            </header>

            <section id="example">
                <div class="row">
                    <div class="tiny">
                        <h2>Example</h2>
                        <div class="toggle-group">
                            <div class="toggle">
                                <input type="checkbox" id="checked" class="toggle-input" checked />
                                <label for="checked" role="checkbox" aria-checked="true" tabindex="0" aria-labelledby="checked" class="toggle-label"></label>
                                <span class="toggle-text">Checked Toggle Buttons</span>
                            </div>
                            <div class="toggle">
                                <input type="checkbox" id="unchecked" class="toggle-input" />
                                <label for="unchecked" role="checkbox" aria-checked="false" tabindex="0" aria-labelledby="unchecked" class="toggle-label"></label>
                                <span class="toggle-text">Unchecked Toggle Buttons</span>
                            </div>
                            <div class="toggle">
                                <input type="checkbox" id="unchecked_disabled" class="toggle-input" disabled />
                                <label for="unchecked_disabled" role="checkbox" aria-checked="false" tabindex="0" aria-labelledby="unchecked_disabled" class="toggle-label"></label>
                                <span class="toggle-text">Disabled Toggle Buttons</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="html">
                <div class="row">
                    <div class="tiny">
                        <h2>Markup (HTML)</h2>
                        <pre><code class="language-HTML">&lt;div class=&quot;toggle&quot;&gt;
  &lt;input type=&quot;checkbox&quot; id=&quot;checked&quot; class=&quot;toggle-input&quot; checked /&gt;
  &lt;label for=&quot;checked&quot; role=&quot;checkbox&quot; aria-checked=&quot;true&quot; tabindex=&quot;0&quot; aria-labelledby=&quot;checked&quot; class=&quot;toggle-label&quot;&gt;&lt;/label&gt;
  &lt;span class=&quot;toggle-text&quot;&gt;Checked Toggle Buttons&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;toggle&quot;&gt;
  &lt;input type=&quot;checkbox&quot; id=&quot;unchecked&quot; class=&quot;toggle-input&quot; /&gt;
  &lt;label for=&quot;unchecked&quot; role=&quot;checkbox&quot; aria-checked=&quot;false&quot; tabindex=&quot;0&quot; aria-labelledby=&quot;unchecked&quot; class=&quot;toggle-label&quot;&gt;&lt;/label&gt;
  &lt;span class=&quot;toggle-text&quot;&gt;Unchecked Toggle Buttons&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;toggle&quot;&gt;
  &lt;input type=&quot;checkbox&quot; id=&quot;unchecked_disabled&quot; class=&quot;toggle-input&quot; disabled /&gt;
  &lt;label for=&quot;unchecked_disabled&quot; role=&quot;checkbox&quot; aria-checked=&quot;false&quot; tabindex=&quot;0&quot; aria-labelledby=&quot;unchecked_disabled&quot; class=&quot;toggle-label&quot;&gt;&lt;/label&gt;
  &lt;span class=&quot;toggle-text&quot;&gt;Disabled Toggle Buttons&lt;/span&gt;
&lt;/div&gt;</code></pre>

                        <h2>Styles (CSS)</h2>
                        <pre><code class="language-CSS">.checkbox {
  --color-1: hsl(240 31% 28%);
  --color-1-90: hsl(240 31% 28% / 0.1);
  --color-2: hsl(0 0% 75%);
  --color-2-40: hsl(0 0% 65%);
  margin: 20px 0;
}
.checkbox .checkbox-label {
  position: relative;
  display: block;
  height: 20px;
  width: 44px;
  background: var(--color-1-90);
  border-radius: 100px;
  cursor: pointer;
  transition: all 300ms ease;
}
.checkbox .checkbox-label:after {
  position: absolute;
  left: -2px;
  top: -3px;
  display: block;
  width: 26px;
  height: 26px;
  border-radius: 100px;
  background: var(--color-2);
  box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.05);
  content: &#x22;&#x22;;
  transition: all 300ms ease;
}
.checkbox .checkbox-label:active:after {
  transform: scale(1.15, 0.85);
}
.checkbox .checkbox-input {
  display: none;
}
.checkbox .checkbox-input:checked ~ label {
  background: var(--color-1-90);
}
.checkbox .checkbox-input:checked ~ label:after {
  left: 20px;
  background: var(--color-1);
}
.checkbox .checkbox-input:disabled ~ label {
  background: var(--color-2);
  pointer-events: none;
}
.checkbox .checkbox-input:disabled ~ label:after {
  background: var(--color-2-40);
}
</code></pre>

                        <h2>Functionality (JS)</h2>
                        <pre><code class="language-JS">const checkboxes = document.querySelectorAll('.checkbox');
let label, input;

checkboxes.forEach((checkbox) => {
  checkbox.addEventListener('keydown', handler, false);
  checkbox.children[1].addEventListener('click', handler, false);
});

function handler(e) {
  label = e.srcElement;
  input = label.previousElementSibling;
  
  if(e.type == 'keydown' && e.keyCode == 32 && input.disabled == false || e.type == 'click' && input.disabled == false) {
    e.preventDefault();
    if (input.checked == true) {
      label.setAttribute('aria-checked', 'false');
      label.setAttribute('aria-labelledby', 'unchecked');
      input.checked = false;
    } else {
      label.setAttribute('aria-checked', 'true');
      label.setAttribute('aria-labelledby', 'checked');
      input.checked = true;
    }
  }
}
</code></pre>
                    </div>
                </div>
            </section>

        </div>

    </main>

    <?php include '../../inc/footer.php'; ?>
    <?php include '../../inc/scripts.php'; ?>
    <script src="/snippets/toggle/toggle.js"></script>
    <script src='../../assets/js/vendor/highlight.pack.js'></script>
    <script>
    hljs.initHighlightingOnLoad();
    </script>
</body>

</html>