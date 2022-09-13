---
title: Fluid Typography
slug: fluid-typography
date: 2020-05-20
categories: html, css
---


<style>
.fluid-text, .fluid-text pre code, .fluid-text code {
    font-size: clamp(1rem, 2.5vw, 1.5rem);
}
</style>

<div class="fluid-text">


# Fluid Typography
<p class='timestamp'><time datetime='20-05-2020'>20-05-2020</time></p>
<hr>

Fluid typography has long been something I've wanted to implement in my projects. 
There's never been an elegant way of going about doing this though.

To achieve fluid typography, you typically need to use some obsucre combination of media queries and css `calc()` like this:

``` css
html {
  font-size: 16px;
}
@media screen and (min-width: 320px) {
  html {
    font-size: calc(16px + 6 * ((100vw - 320px) / 680));
  }
}
@media screen and (min-width: 1000px) {
  html {
    font-size: 22px;
  }
}
```

This works, and works quite well. It scales the font-size from a minimum of 16px (at a 320px viewport) 
to a maximum of 22px (at a 1000px viewport)

Writing this, however, is both cumbersome and annoying. It forces the developer to decide on screen sizes and and uses "magic numbers" liberally.

Fear not... There's a better way. `clamp()`.

If you're reading this article on a desktop device, you may have noticed that the typography is suspiciously large. 

Try resizing the window, and you'll see the font-size scale accordingly. 

I've implemented the following code on this specific page, to make the typography fluid

```css
.fluid-text {
    font-size: clamp(1rem, 2.5vw, 1.5rem);
}
```

CSS `clamp()` takes 3 values. A minimum value, a preferred value, and a maximum allowed value. 
The clamp() CSS function simply clamps a value between the minimum and maximum value.

You can play around with an example on Codepen:
<p class="codepen" data-height="270" data-theme-id="light" data-default-tab="css,result" data-user="triss90" data-slug-hash="ZEbmdEO" data-editable="true" style="height: 270px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css clamp()">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/ZEbmdEO">
  css clamp()</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


## Browser support
As of the writing of this article, CSS `clamp()` isn't supported in Safari, Internet Explorer and a number of other mobile browsers. 
So, we're probably stuck with the bloated method above, for the foreseeable future.
<p class="ciu_embed" data-feature="mdn-css__types__clamp" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=mdn-css_types_clamp">he clamp() CSS function clamps a value between an upper and lower bound. clamp() enables selecting a middle value within a range of values between a defined minimum and maximum.</a>
</p>


<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>


</div>


