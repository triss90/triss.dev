<?php include('../../_inc/header.php'); ?>
<?php include('../../_inc/icons.php'); ?>

<style>
<?php include($_SERVER["DOCUMENT_ROOT"]."/assets/css/gridder.css"); ?>
<?php include($_SERVER["DOCUMENT_ROOT"]."/assets/css/snippet_checkbox.css"); ?>
pre:hover {
    left: 0;
    width: 100%;
}
h2 {
    font-size: 1.25rem;
}
p {
    font-size: 1rem;
}
</style>

<div class="snippets" >

    <header role="banner" class="snippets">
        <?php include('../../_inc/navigation.php'); ?>
        <div class="central center">
            <h1>Checkbox Toggle</h1>
            <br><br>
        </div>
    </header>

    <br><br>

    <main class="container" id="main" style="font-size:16px;">   
        <div class="row">
            <div class="tiny">
                <p>An HTML checkbox is an interactive form element that allows users to select multiple options from a set. Created using the <code>&#x3C;input&#x3E;</code> tag with <code>type="checkbox"</code>, it returns a boolean value.</p>
            </div>
        </div>   
        <div class="row tiny-center">
            <div class="tiny-12 huge-10 huge-offset-1">            
                <div class="checkbox-group">
                    <div class="checkbox">
                        <input type="checkbox" id="unchecked" class="checkbox-input"/>
                        <label for="unchecked" role="checkbox" aria-checked="false" tabindex="0" aria-labelledby="unchecked" class="checkbox-label"></label>    
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="checked" class="checkbox-input" checked/>
                        <label for="checked" role="checkbox" aria-checked="true" tabindex="0" aria-labelledby="checked" class="checkbox-label"></label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="unchecked_disabled" class="checkbox-input" disabled/>
                        <label for="unchecked_disabled" role="checkbox" aria-checked="false" tabindex="0" aria-labelledby="unchecked_disabled" class="checkbox-label"></label>
                    </div>
                </div>
                    
            </div>
        </div>

        <div class="row">
            <div class="tiny-12 huge-10 huge-offset-1">
                <h2>Markup (HTML)</h2>
<pre><code class="language-HTML">&#x3C;div class=&#x22;checkbox&#x22;&#x3E;
  &#x3C;input type=&#x22;checkbox&#x22; id=&#x22;unchecked&#x22; class=&#x22;checkbox-input&#x22;/&#x3E;
  &#x3C;label for=&#x22;unchecked&#x22; role=&#x22;checkbox&#x22; aria-checked=&#x22;false&#x22; tabindex=&#x22;0&#x22; aria-labelledby=&#x22;unchecked&#x22; class=&#x22;checkbox-label&#x22;&#x3E;&#x3C;/label&#x3E;    
&#x3C;/div&#x3E;

&#x3C;div class=&#x22;checkbox&#x22;&#x3E;
  &#x3C;input type=&#x22;checkbox&#x22; id=&#x22;checked&#x22; class=&#x22;checkbox-input&#x22; checked/&#x3E;
  &#x3C;label for=&#x22;checked&#x22; role=&#x22;checkbox&#x22; aria-checked=&#x22;true&#x22; tabindex=&#x22;0&#x22; aria-labelledby=&#x22;checked&#x22; class=&#x22;checkbox-label&#x22;&#x3E;&#x3C;/label&#x3E;
&#x3C;/div&#x3E;

&#x3C;div class=&#x22;checkbox&#x22;&#x3E;
  &#x3C;input type=&#x22;checkbox&#x22; id=&#x22;unchecked_disabled&#x22; class=&#x22;checkbox-input&#x22; disabled/&#x3E;
  &#x3C;label for=&#x22;unchecked_disabled&#x22; role=&#x22;checkbox&#x22; aria-checked=&#x22;false&#x22; tabindex=&#x22;0&#x22; aria-labelledby=&#x22;unchecked_disabled&#x22; class=&#x22;checkbox-label&#x22;&#x3E;&#x3C;/label&#x3E;
&#x3C;/div&#x3E;</code></pre>

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

                <h2>Styles (CSS)</h2>
<pre><code class="language-JS">
const checkboxes = document.querySelectorAll('.checkbox');
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
    </main>

    <script src="../../../../../assets/js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <script>
      const checkboxes = document.querySelectorAll('.checkbox');
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
    </script>
    
    <?php include('../../_inc/footer.php'); ?>

</div>