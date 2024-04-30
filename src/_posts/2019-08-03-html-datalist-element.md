---
layout: post
title: HTML Datalist Element
slug: html-datalist-element
date: 2019-08-03
description: Learn how to use the HTML datalist element
draft: false
category: web development
tags:
  - html
---

# HTML Datalist Element

<p class='timestamp'><time datetime='03-08-2019'>03-08-2019</time></p>
<hr>

Making sortable input lists on a webpage usually requires a ton of javascript.
The `<datalist>` element was introduced with HTML5 and aims to solve this exact problem.

## Using "datalist"

Using the datalist element is fairly straight forward.
Simply define the search input: `<input list="list-name" name="list-name">`.
The keyword here, is the `list` attribute, which links the list to the input.

Next to the input element create a `<datalist id="list-name">` with `<option>` elements inside,
defining each selectable item.

**Example**

```html
<form action="/action_page.php" method="get">
 <input list="flavours" name="flavours" />
 <datalist id="flavours">
  <option value="Chocolate"></option>
  <option value="Vanilla"></option>
  <option value="Grape"></option>
  <option value="Strawberry"></option>
  <option value="Honey"></option>
  <option value="Coconut"></option>
  <option value="Cherry"></option>
 </datalist>

 <input type="submit" />
</form>
```

## Styling "datalist"

The styling capabilities are, unfortunately, very limited. The input box itself, can of course be styled to your preference.
But the dropdown is entirely dependent on the browser's styles.
One thing you can control though, is the dropdown-arrow. It can be selected like so

```css
input[list]::-webkit-calendar-picker-indicator {
 background: red;
 color: white;
}
```

## Live Example

<p class="codepen" data-height="300" data-theme-id="36048" data-default-tab="result" data-user="triss90" data-slug-hash="c59369ea77bf1c6515c1330a1c3ca45b" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Datalist Example">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/c59369ea77bf1c6515c1330a1c3ca45b/">
  Datalist Example</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>

## Browser Support

As with other "new" HTML5 elements, browser support is somewhat lacking.

<p class="ciu_embed" data-feature="datalist" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=datalist">Method of setting a list of options for a user to select in a text field, while leaving the ability to enter a custom value.</a>
</p>

<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/public/caniuse-embed.min.js"></script>

So if you want to use this in production, you may want to include a polyfill, like
<a href="https://github.com/mfranzke/datalist-polyfill" target="_blank" rel="noopener" title="Datalist Polyfill">this one by Maximilian Franzke</a>
