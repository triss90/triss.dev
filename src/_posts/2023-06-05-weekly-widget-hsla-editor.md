---
layout: post
title: Weekly Widget - HSLA editor
slug: weekly-widget-hsla-editor
date: 2023-06-05
draft: false
description: Weekly widget
category: web development
tags:
  - weekly widget
  - css
  - html
  - javascript
---

# HSLA editor

<p class='timestamp'><time datetime='%%date%%'>%%date%%</time></p><hr>

This week's widget is a simple HSLA color slider

<p class="codepen" data-height="566.2734375" data-default-tab="result" data-slug-hash="JjbqWKK" data-user="triss90" style="height: 566.2734375px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/JjbqWKK">
  HSLA editor</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

HSLA colors in CSS can be used to define color properties for various elements in your web design. HSLA stands for Hue, Saturation, Lightness, and Alpha.

Here's a breakdown of how each component of HSLA is used in CSS:

- **Hue (H)**: This is the first parameter and represents the color itself. It's a degree on the color wheel; 0 (or 360) is red, 120 is green, and 240 is blue.
- **Saturation (S)**: This is the second parameter and represents the amount of color, or the intensity. It's a percentage; 100% is full color, and 0% is a shade of grey.
- **Lightness (L)**: This is the third parameter and represents the amount of white or black in the color. It's also a percentage; 0% lightness is black, 100% lightness is white, and 50% lightness is neither added white nor black.
- **Alpha (A)**: This is the fourth parameter and represents the opacity of the color. An alpha value of 1 is completely opaque, and an alpha value of 0 is completely transparent.

Here's how you can define HSLA color in CSS:

```CSS
element {
    background-color: hsla(120, 100%, 50%, 0.3);
}
```

In the above example, the background-color of the element is set to a color with hue 120 (green), 100% saturation (full color), 50% lightness (neither light nor dark), and 0.3 alpha (somewhat transparent).
