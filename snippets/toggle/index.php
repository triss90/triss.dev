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

    ?>.btn-copy {
        margin-bottom: .5em;
        margin-top: 2em;
        padding: 0.5em;
        background: none;
        border: 0;
        color: var(--color-primary);
        scale: 1;
        cursor: pointer;
        transition: all 200ms ease-in-out;

        .tooltip {
            top: -2.5rem !important;
        }
    }

    .btn-copy:hover {
        transform: scale(1.1);
        scale: 1.1;
        color: var(--color-secondary);
    }
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
                        <div class="toggle-w-group">
                            <div class="toggle-w">
                                <input type="checkbox" id="checked" class="toggle-w-input" checked />
                                <label for="checked" role="checkbox" aria-checked="true" tabindex="0" aria-labelledby="checked" class="toggle-w-label"></label>
                                <span class="toggle-w-text">Checked Toggle Buttons</span>
                            </div>
                            <div class="toggle-w">
                                <input type="checkbox" id="unchecked" class="toggle-w-input" />
                                <label for="unchecked" role="checkbox" aria-checked="false" tabindex="0" aria-labelledby="unchecked" class="toggle-w-label"></label>
                                <span class="toggle-w-text">Unchecked Toggle Buttons</span>
                            </div>
                            <div class="toggle-w">
                                <input type="checkbox" id="unchecked_disabled" class="toggle-w-input" disabled />
                                <label for="unchecked_disabled" role="checkbox" aria-checked="false" tabindex="0" aria-labelledby="unchecked_disabled" class="toggle-w-label"></label>
                                <span class="toggle-w-text">Disabled Toggle Buttons</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="html">
                <div class="row tiny-space-between">
                    <div class="tiny">
                        <h2>Markup (HTML)</h2>
                    </div>
                    <div class="tiny tiny-end">
                        <button class="btn-copy" onclick="copyContent('html')" title="Copy HTML Content" data-tooltip="Copy&nbsp;HTML" data-tooltip-direction="top" data-tooltip-delay="0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-copy">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 7m0 2.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" />
                                <path d="M4.012 16.737a2.005 2.005 0 0 1 -1.012 -1.737v-10c0 -1.1 .9 -2 2 -2h10c.75 0 1.158 .385 1.5 1" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="tiny">
                        <pre><code id="html" class="language-HTML">&lt;div class=&quot;toggle&quot;&gt;
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
                    </div>
                </div>
                <div class="row tiny-space-between">
                    <div class="tiny">
                        <h2>Styles (CSS)</h2>
                    </div>
                    <div class="tiny tiny-end">
                        <button class="btn-copy" onclick="copyContent('css')" title="Copy CSS Content" data-tooltip="Copy&nbsp;CSS" data-tooltip-direction="top" data-tooltip-delay="0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-copy">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 7m0 2.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" />
                                <path d="M4.012 16.737a2.005 2.005 0 0 1 -1.012 -1.737v-10c0 -1.1 .9 -2 2 -2h10c.75 0 1.158 .385 1.5 1" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="tiny">
                        <pre><code id="css" class="language-CSS">.toggle {
  --color-1: #eceeef;
  --color-2: #777f86;
  --color-3: #313436;
  --color-4: #E2001A;
  --color-5: #fff6f6;

  margin-block: 20px;
  display: flex;
}
.toggle .toggle-label {
  position: relative;
  display: block;
  height: 20px;
  width: 40px;
  background: var(--color-1);
  border-radius: 100px;
  cursor: pointer;
  transition: all 300ms ease;
}
.toggle .toggle-label::after {
  position: absolute;
  left: 0px;
  top: 0px;
  display: block;
  width: 20px;
  height: 20px;
  border-radius: 100px;
  background: var(--color-2);
  box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.05);
  content: "";
  transition: all 300ms ease;
}
.toggle .toggle-label:active:after {
  transform: scale(1.15, 0.85);
}
.toggle .toggle-text {
  margin-left: 10px;
  font-size: 1rem;
  line-height: 20px;
  color: var(--color-3);
}
.toggle:has(.toggle-input:disabled) {
  cursor: not-allowed !important;
}
.toggle .toggle-input {
  display: none;
}
.toggle .toggle-input:checked ~ label {
  background: var(--color-1);
}
.toggle .toggle-input:checked ~ label:after {
  left: 20px;
  background: var(--color-4);
}
.toggle .toggle-input:disabled ~ label {
  background: var(--color-1);
  pointer-events: none;
}
.toggle .toggle-input:disabled ~ label:after {
  background: var(--color-5);
  cursor: not-allowed;
}</code></pre>
                    </div>
                </div>
                <div class="row tiny-space-between">
                    <div class="tiny">
                        <h2>Functionality (JS)</h2>
                    </div>
                    <div class="tiny tiny-end">
                        <button class="btn-copy" onclick="copyContent('js')" title="Copy Javascript Content" data-tooltip="Copy&nbsp;JS" data-tooltip-direction="top" data-tooltip-delay="0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-copy">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 7m0 2.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" />
                                <path d="M4.012 16.737a2.005 2.005 0 0 1 -1.012 -1.737v-10c0 -1.1 .9 -2 2 -2h10c.75 0 1.158 .385 1.5 1" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="tiny">
                        <pre><code id="js" class="language-JS">const toggles = document.querySelectorAll('.toggle');
let label, input;

toggles.forEach((toggle) => {
  toggle.addEventListener('keydown', handler, false);
  toggle.children[1].addEventListener('click', handler, false);
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
}</code></pre>
                    </div>
                </div>
            </section>

        </div>

    </main>

    <?php include '../../inc/footer.php'; ?>
    <?php include '../../inc/scripts.php'; ?>
    <script src="/snippets/toggle/toggle.min.js"></script>
    <script src='/assets/js/vendor/highlight.pack.js'></script>
    <script>
    hljs.initHighlightingOnLoad();
    </script>
</body>

</html>