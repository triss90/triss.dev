---
layout: post
title: HTML Details/Summary
slug: html-details-summary
date: 2019-05-02
description: Learn how to use the details and summary elements
draft: false
category: web development
tags:
  - html
  - css
---

# HTML Details/Summary

<p class='timestamp'><time datetime='02-05-2019'>02-05-2019</time></p>
<hr>

Making a dropdown can be tricky. Here's an easy, albeit not fully supported, way of making a html dropdown:

```html
<details>
 <summary>Dropdown</summary>
 <div>
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque impedit in
  consectetur facere recusandae iure voluptatem quas nostrum, harum quasi qui
  magni, adipisci, obcaecati esse nisi itaque doloribus ab ullam.
 </div>
</details>
```

**Result:**

<details>
 <summary>Dropdown</summary>
 <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque impedit in consectetur facere recusandae iure voluptatem quas nostrum, harum quasi qui magni, adipisci, obcaecati esse nisi itaque doloribus ab ullam.</div>
</details>

You can force the dropdown state _open_ like so: `<details open>...</details>`

Interestingly, you can even manipulate the dropdown triangle indicator with css. Here's an example:

```css
details summary::-webkit-details-marker {
 display: none;
}
details summary:after {
 content: "+";
}
details[open] summary:after {
 content: "-";
}
```

The trick is to overwrite the default styles with `::-webkit-details-marker{}` and then again display the change in state with `details[open]`.

Here's a full example:

<p class="codepen" data-height="465" data-theme-id="light" data-default-tab="result" data-user="triss90" data-slug-hash="PgrzvQ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid black; margin: 1em 0; padding: 1em;" data-pen-title="HTML Details/Summary">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/PgrzvQ/">
  HTML Details/Summary</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>

This awesome feature, does suffer from a lack of support in some key browsers though.

<p class="ciu_embed" data-feature="details" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=details">The details element generates a simple no-JavaScript widget to show/hide element contents, optionally by clicking on its child summary element.</a>
</p>

<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>
