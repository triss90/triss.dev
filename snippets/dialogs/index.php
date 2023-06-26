<?php include('../../_inc/header.php'); ?>
<?php include('../../_inc/icons.php'); ?>

<style>
<?php include($_SERVER["DOCUMENT_ROOT"]."/assets/css/gridder.css"); ?>
<?php include($_SERVER["DOCUMENT_ROOT"]."/assets/css/snippet_dialog.css"); ?>
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
                <p>adadadad</p>
            </div>
        </div>   
        <div class="row tiny-center">
            <div class="tiny-12 huge-10 huge-offset-1">            
                
              <p>Demo goes here...</p>

              <button class="open-dialog-example" aria-haspopup="true" aria-expanded="false" aria-label="dialog Example">Open Dialog</button>

              <div class="dialog-example" role="dialog" aria-labelledby="dialog-title" aria-describedby="dialog-description" aria-hidden="true">
                <h1 id="dialog-title">Dialog</h1>
                <p>This is a dialog window</p>
                <button type="button" aria-label="Close Navigation" class="close-dialog-example">Close Dialog</button>
              </div>

              <div class="dialog-overlay-example" tabindex="-1" aria-hidden="true"></div>
                    
            </div>
        </div>

        <div class="row">
            <div class="tiny-12 huge-10 huge-offset-1">
                <h2>Markup (HTML)</h2>
<pre><code class="language-HTML">&#x3C;button class=&#x22;open-dialog-example&#x22; aria-haspopup=&#x22;true&#x22; aria-expanded=&#x22;false&#x22; aria-label=&#x22;dialog Example&#x22;&#x3E;Open Dialog&#x3C;/button&#x3E;

&#x3C;div class=&#x22;dialog-example&#x22; role=&#x22;dialog&#x22; aria-labelledby=&#x22;dialog-title&#x22; aria-describedby=&#x22;dialog-description&#x22; aria-hidden=&#x22;true&#x22;&#x3E;
    &#x3C;h1 id=&#x22;dialog-title&#x22;&#x3E;Dialog&#x3C;/h1&#x3E;
    &#x3C;p&#x3E;This is a dialog window&#x3C;/p&#x3E;
    &#x3C;button type=&#x22;button&#x22; aria-label=&#x22;Close Navigation&#x22; class=&#x22;close-dialog-example&#x22;&#x3E;Close Dialog&#x3C;/button&#x3E;
&#x3C;/div&#x3E;

&#x3C;div class=&#x22;dialog-overlay-example&#x22; tabindex=&#x22;-1&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/div&#x3E;
</code></pre>

                <h2>Styles (CSS)</h2>
<pre><code class="language-CSS">
</code></pre>

                <h2>Functionality (JS)</h2>
<pre><code class="language-JS">// Dialog
function Dialog(dialogEl, overlayEl) {
    this.dialogEl = dialogEl;
    this.overlayEl = overlayEl;
    this.focusedElBeforeOpen;
    var focusableEls = this.dialogEl.querySelectorAll('a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), [tabindex="0"]');
    this.focusableEls = Array.prototype.slice.call(focusableEls);
    this.firstFocusableEl = this.focusableEls[0];
    this.lastFocusableEl = this.focusableEls[ this.focusableEls.length - 1 ];
    this.close(); // Reset
}

// Open Dialog
Dialog.prototype.open = function() {
    var Dialog = this;
    this.dialogEl.removeAttribute('aria-hidden');
    this.overlayEl.removeAttribute('aria-hidden');
    this.focusedElBeforeOpen = document.activeElement;
    this.dialogEl.addEventListener('keydown', function(e) {
        Dialog._handleKeyDown(e);
    });
    this.overlayEl.addEventListener('click', function() {
        Dialog.close();
    });
    this.firstFocusableEl.focus();
};

// Close Dialog
Dialog.prototype.close = function() {
    this.dialogEl.setAttribute('aria-hidden', true);
    this.overlayEl.setAttribute('aria-hidden', true);
    if ( this.focusedElBeforeOpen ) {
        this.focusedElBeforeOpen.focus();
    }
};

// Handle keyboard shortcuts
Dialog.prototype._handleKeyDown = function(e) {
    var Dialog = this;
    var KEY_TAB = 9;
    var KEY_ESC = 27;
    function handleBackwardTab() {
        if ( document.activeElement === Dialog.firstFocusableEl ) {
            e.preventDefault();
            Dialog.lastFocusableEl.focus();
        }
    }
    function handleForwardTab() {
        if ( document.activeElement === Dialog.lastFocusableEl ) {
            e.preventDefault();
            Dialog.firstFocusableEl.focus();
        }
    }
    switch(e.keyCode) {
        case KEY_TAB:
            if ( Dialog.focusableEls.length === 1 ) {
                e.preventDefault();
                break;
            }
            if ( e.shiftKey ) {
                handleBackwardTab();
            } else {
                handleForwardTab();
            }
            break;
        case KEY_ESC:
            Dialog.close();
            break;
        default:
            break;
    }
};

// Bind event listeners
Dialog.prototype.addEventListeners = function(openDialogSel, closeDialogSel) {
    var Dialog = this;
    var i;
    var openDialogEls = document.querySelectorAll(openDialogSel);
    for (i = 0; i < openDialogEls.length; i++) {
        openDialogEls[i].addEventListener('click', function() {
            Dialog.open();
        });
    }
    var closeDialogEls = document.querySelectorAll(closeDialogSel);
    for (i = 0; i < closeDialogEls.length; i++) {
        closeDialogEls[i].addEventListener('click', function() {
            Dialog.close();
        });
    }
};

var navDialogEl = document.querySelector('.dialog-example');
var dialogOverlay = document.querySelector('.dialog-overlay-example');
var myDialog = new Dialog(navDialogEl, dialogOverlay);
myDialog.addEventListeners('.open-dialog-example', '.close-dialog-example');
</code></pre>
            </div>
        </div>
    </main>

    <script src="../../../../../assets/js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <script>
      // Dialog
      function Dialog(dialogEl, overlayEl) {
          this.dialogEl = dialogEl;
          this.overlayEl = overlayEl;
          this.focusedElBeforeOpen;
          var focusableEls = this.dialogEl.querySelectorAll('a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), [tabindex="0"]');
          this.focusableEls = Array.prototype.slice.call(focusableEls);
          this.firstFocusableEl = this.focusableEls[0];
          this.lastFocusableEl = this.focusableEls[ this.focusableEls.length - 1 ];
          this.close(); // Reset
      }

      // Open Dialog
      Dialog.prototype.open = function() {
          var Dialog = this;
          this.dialogEl.removeAttribute('aria-hidden');
          this.overlayEl.removeAttribute('aria-hidden');
          this.focusedElBeforeOpen = document.activeElement;
          this.dialogEl.addEventListener('keydown', function(e) {
              Dialog._handleKeyDown(e);
          });
          this.overlayEl.addEventListener('click', function() {
              Dialog.close();
          });
          this.firstFocusableEl.focus();
      };

      // Close Dialog
      Dialog.prototype.close = function() {
          this.dialogEl.setAttribute('aria-hidden', true);
          this.overlayEl.setAttribute('aria-hidden', true);
          if ( this.focusedElBeforeOpen ) {
              this.focusedElBeforeOpen.focus();
          }
      };

      // Handle keyboard shortcuts
      Dialog.prototype._handleKeyDown = function(e) {
          var Dialog = this;
          var KEY_TAB = 9;
          var KEY_ESC = 27;
          function handleBackwardTab() {
              if ( document.activeElement === Dialog.firstFocusableEl ) {
                  e.preventDefault();
                  Dialog.lastFocusableEl.focus();
              }
          }
          function handleForwardTab() {
              if ( document.activeElement === Dialog.lastFocusableEl ) {
                  e.preventDefault();
                  Dialog.firstFocusableEl.focus();
              }
          }
          switch(e.keyCode) {
              case KEY_TAB:
                  if ( Dialog.focusableEls.length === 1 ) {
                      e.preventDefault();
                      break;
                  }
                  if ( e.shiftKey ) {
                      handleBackwardTab();
                  } else {
                      handleForwardTab();
                  }
                  break;
              case KEY_ESC:
                  Dialog.close();
                  break;
              default:
                  break;
          }
      };

      // Bind event listeners
      Dialog.prototype.addEventListeners = function(openDialogSel, closeDialogSel) {
          var Dialog = this;
          var i;
          var openDialogEls = document.querySelectorAll(openDialogSel);
          for (i = 0; i < openDialogEls.length; i++) {
              openDialogEls[i].addEventListener('click', function() {
                  Dialog.open();
              });
          }
          var closeDialogEls = document.querySelectorAll(closeDialogSel);
          for (i = 0; i < closeDialogEls.length; i++) {
              closeDialogEls[i].addEventListener('click', function() {
                  Dialog.close();
              });
          }
      };

      var navDialogEl = document.querySelector('.dialog-example');
      var dialogOverlay = document.querySelector('.dialog-overlay-example');
      var myDialog = new Dialog(navDialogEl, dialogOverlay);
      myDialog.addEventListeners('.open-dialog-example', '.close-dialog-example');
    </script>
    
    <?php include('../../_inc/footer.php'); ?>

</div>