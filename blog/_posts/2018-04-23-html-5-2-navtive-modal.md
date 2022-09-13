---
title: HTML 5.2 Native modal
slug: html-5-2-native-modal
date: 2018-04-23
categories: html, javascript
---

# HTML 5.2 Native modal
<p class='timestamp'><time datetime='23-04-2018'>23-04-2018</time></p>
<hr>

With HTML 5.2 creating and maintaining modals is super easy!!

``` html
<button id="dialog-open">Open dialog</button>

<dialog id="dialog">
	<p>This is a dialog</p>
	<button id="dialog-close">close</button>
</dialog>
```

Adding the `open` parameter to the dialog element forces it open.

``` html
<dialog id="dialog" open></dialog>
```

This can easily be manipulated with javascript using  `dialogElement.showModal();` and `dialogElement.close();`

You can edit the backdrop of the dialog using `::backdrop` like so:
``` css
#dialog::backdrop {
    opacity: 0.3;
    background: blue;
}
```

<br>
### Interactive example
<p data-height="465" data-theme-id="light" data-slug-hash="wpxEEe" data-default-tab="result" data-user="triss90" data-embed-version="2" data-pen-title="HTML 5.2 Native modal" class="codepen">See the Pen <a href="https://codepen.io/triss90/pen/wpxEEe/">HTML 5.2 Native modal</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>

<br>

Unfortunately this awesome feature is very poorly supported. Currently only Google Chrome has support for this.
<p class="ciu_embed" data-feature="dialog" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=dialog">Method of easily creating custom dialog boxes to display to the user with modal or non-modal options. Also includes a ::backdrop pseudo-element for behind the element.</a>
</p>


You can read more about this on the [MDN Web Docs](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog)


<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>
