---
layout: post
title: CSS Only Scroll Into View Effect
slug: css-only-scroll-into-view-effect
date: 2024-06-08
draft: false
description: Scroll elements into view with only 3 lines of css!
category: CSS
---

<h1 class="post-transition-end">CSS Only Scroll Into View Effect</h1>

<p class='timestamp'><time datetime='%%date%%'>%%date%%</time></p><hr>

You know how sometimes you stumble upon something so cool and simple, you just have to share it? That’s exactly what happened to me the other day with a CSS trick that feels like finding a hidden shortcut in your favorite video game. For years, I've have used a mix of CSS hacks and JavaScript libraries to create animations that only kick in when you actually see them on your screen. But with this one trick, it can be as easy as adding just three lines of CSS!

Cue the Spotlight with `animation-timeline: view();`:

```CSS
.animate {
    animation: slide-in linear;
    animation-timeline: view();
    animation-range: entry 0 cover 40%;
}
```

This neat line of CSS is like hiring a stage manager for your web elements. Gone are the days of elements popping up prematurely as the page loads. With `animation-timeline: view();`, your elements wait quietly in out of view, making their entrance only when they become visible to the user.

Just include the CSS we mentioned above on any element you want to animate as it comes into view. Then, choose a fitting animation to bring it to life:

```CSS
@keyframes appear {
    from {
        opacity: 0;
        scale: 0.5;
    }
    to {
        opacity: 1;
        scale: 1;
    }
}
````

## Example 1

<p class="codepen" data-height="475" data-default-tab="result" data-slug-hash="yLWooLb" data-pen-title="Scroll Into View" data-user="triss90" style="height: 475px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/yLWooLb">
  Scroll Into View</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

## Example 2

<p class="codepen" data-height="475" data-default-tab="result" data-slug-hash="vYwJJVO" data-pen-title="Scroll Into View (Example 2)" data-user="triss90" style="height: 475px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/vYwJJVO">
  Scroll Into View (Example 2)</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>