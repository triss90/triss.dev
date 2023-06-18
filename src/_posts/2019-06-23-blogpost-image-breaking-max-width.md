---
layout: post
title: Breaking Max Width
slug: breaking-max-width
date: 2019-06-23
description: Breaking max width the proper way with CSS
draft: false
category: web development
tags:
  - css
---

# Breaking Max Width

<p class='timestamp'><time datetime='23-06-2019'>23-06-2019</time></p>
<hr>
                                                                 
Not every problem requires a complex solution! Today I want to show you a technique for breaking 
an image out of it’s parent container using only CSS. Yep that's right, no Javascript is involved.

But first, what am I talking about?

The following image breaks its parent's container, which is centered and takes up a maximum of 32rems.

<style>
.full-width {
  width: 100vw;
  position: relative;
  left: 50%;
  transform: translateX(-50%);
}
</style>
<img src="https://triss.dev/assets/img/blog/example-pattern.jpg" alt="abstract turquoise wave pattern" class="full-width">

There are a few ways of achieving this effect.

You can dynamically calculate the difference and push the image to one side(This was my goto solution when first trying to solve this problem).

```css
.full-width {
 width: 100vw;
 position: relative;
 // 32rem is the width of the parent container.
 // This could be set with an SCSS variable or CSS custom property.
 left: calc(-50vw + (32rem / 2));
 @media (max-width: 32rem) {
  left: 0;
 }
}
```

Luckily there are a few other ways of achieving the same effect. Some a lot more elegant than my solution above.
Here's an example by <a href="https://twitter.com/Una" target="_blank" rel="noopener">Una Kravets</a>:

```css
.full-width {
 left: 50%;
 margin-left: -50vw;
 margin-right: -50vw;
 max-width: 100vw;
 position: relative;
 right: 50%;
 width: 100vw;
}
```

Playing around with that concept. Here's another similar solution, though expressed a bit more succinctly

```css
.full-width {
 width: 100vw;
 position: relative;
 left: 50%;
 transform: translateX(-50%);
}
```

## Example

<p class="codepen" data-height="265" data-theme-id="light" data-default-tab="result" data-user="triss90" data-slug-hash="arPLGG" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Blogpost image - breaking max width">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/arPLGG/">
  Blogpost image - breaking max width</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
