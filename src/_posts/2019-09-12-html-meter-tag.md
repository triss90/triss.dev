---
layout: post
title: HTML Meter Tag
slug: html-meter-tag
date: 2019-09-12
description: Learn how to use the HTML meter tag
draft: false
category: web development
tags:
  - html
---

# HTML &lt;meter&gt; Tag

<p class='timestamp'><time datetime='12-09-2019'>12-09-2019</time></p>
<hr>

This week's article in the installment "what's that weird html tag?",
takes a look at the `<meter>` tag.

The `<meter>` element represents a scalar measurement within a known range, for example disk usage.
It should not be used to create progress bars or in any other way indicate progress. Use the <a href="https://triss.dev/blog/2019/09/19/html-progress-tag">progress bar element</a> instead.

<br>

## Styling

There are five pseudo classes you can use for styling the meter element
-webkit-meter-inner-element
-webkit-meter-bar
-webkit-meter-optimum-value
-webkit-meter-suboptimum-value
-webkit-meter-even-less-good-value

### -webkit-meter-inner-element

Additional markup to render the meter element as read-only.

### -webkit-meter-bar

The meter bar container. This is used for styling the meter element.

```html
<meter min="0" max="10" value="3">3 out of 10</meter>
```

```css
meter::-webkit-meter-bar {
 background: salmon;
}
```

<style>
meter.ex1::-webkit-meter-bar {
 background: salmon;
}
</style>

<meter class="ex1" min="0" max="10" value="3">3 out of 10</meter>

### -webkit-meter-optimum-value

This is the current value of the meter. It's green by default when the value falls within the low-high range.

```html
<meter min="0" max="10" value="3" optimum="0">3 out of 10</meter>
```

```css
meter::-webkit-meter-optimum-value {
 background: green;
}
```

<style>
meter.ex2::-webkit-meter-optimum-value {
 background: green;
}
</style>

<meter class="ex2" min="0" max="10" value="3" optimum="3">3 out of 10</meter>

### -webkit-meter-suboptimum-value

Gives a yellow color to the meter element when the value attribute falls outside the low-high range.

```html
<meter min="0" max="10" value="6" optimum="0" low="5">6 out of 10</meter>
```

```css
meter::-webkit-meter-suboptimum-value {
 background: yellow;
}
```

<style>
meter.ex3::-webkit-meter-suboptimum-value {
 background: yellow;
}
</style>

<meter class="ex3" min="0" max="10" value="6" optimum="0" low="5">6 out of 10</meter>

### -webkit-meter-even-less-good-value

Gives a red color to the meter element when the value and the optimum attributes fall outside the low-high range but in opposite zones. For example, value < low < high < optimum or value > high > low > optimum

```html
<meter min="0" max="10" value="9" optimum="0" low="5" high="8">
 9 out of 10
</meter>
```

```css
meter::-webkit-meter-suboptimum-value {
 background: red;
}
```

<style>
meter.ex4::-webkit-meter-even-less-good-value {
 background: red;
}
</style>

<meter class="ex4" min="0" max="10" value="9" optimum="0" low="5" high="8">9 out of 10</meter>

<br>

## Example

<p class="codepen" data-height="265" data-theme-id="light" data-default-tab="result" data-user="triss90" data-slug-hash="LwgdRv" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Meter HTML Test">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/LwgdRv/">
  Meter HTML Test</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>

<br>

## Browser Support

The `<meter>` tag is widely supported, only lacking support on IE and IE Mobile:

<p class="ciu_embed" data-feature="meter" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=meter">Method of indicating the current level of a gauge.</a>
</p>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/public/caniuse-embed.min.js"></script>
