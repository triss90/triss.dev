---
layout: post
title: CSS Variables
slug: css-variables
date: 2017-01-03
description: How to create CSS variables(custom properties)
draft: false
category: web development
tags:
  - css
---

# CSS Variables

<p class='timestamp'><time datetime='03-01-2017'>03-01-2017</time></p>
<hr>

I've been using a `scss` for a while. With that, comes variables which are easily defined like so: `$color-variable: #f06d06`.
If this is more or less the reason, why you're a using scss instead of regular css. You might not need to.

You can use CSS's custom properties like so:

```css
/*
 Declare the variables on the root element
 to make them available globally
*/
:root {
 --color-1: red;
 --color-2: blue;
}

html,
body {
 background-color: var(--color-1);
 color: var(--color-2);
}

/*
    You can later overwrite variables 
    and scope to them to specific elements
*/
main {
 --color-1: yellow;
 background: var(--color-1);
}
```

Pretty nifty if you ask me!

## Manipulating the properties with JS

Manipulating CSS's custom properties is super easy! You can both get the values and set them like so:

<p class="codepen" data-height="265" data-theme-id="light" data-default-tab="js" data-user="triss90" data-slug-hash="QRKyrR" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS Custom Properties">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/QRKyrR/">
  CSS Custom Properties</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
