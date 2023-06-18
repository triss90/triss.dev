---
layout: post
title: Animating My First SVG
slug: animating-my-first-svg
date: 2019-04-24
description: Learn how to animate SVGs.
draft: false
category: web development
tags:
  - svg
  - css
---

# Animating my first SVG

<p class='timestamp'><time datetime='24-04-2019'>24-04-2019</time></p>
<hr>

So! The goal was simple. I wanted to animate a simple menu icon on hover. I've worked with SVG for years,
but never directly manipulated the code other than perhaps simple transforms.
For this first project however, I wanted to try my luck,
with actually changing the size and dimension of SVG paths (Which turned out to be relatively easy).

**Here's the SVG in question:**

```xml
<svg xmlns="http://www.w3.org/2000/svg" width="101" height="78" viewBox="0 0 101 78">
  <g fill="none" fill-rule="evenodd" stroke="#000" stroke-width="4">
    <g id="bar-top">
      <circle cx="27.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L20 8.5M45.5 8.5L97 8.5"/>
    </g>
    <g id="bar-middle" transform="translate(0 30)">
      <circle cx="54.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L45.5 8.5M72.5 8.5L97 8.5"/>
    </g>
    <g id="bar-bottom" transform="translate(1 61)">
      <circle cx="41.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L34 8.5M60.5 8.5L96 8.5"/>
    </g>
  </g>
</svg>
```

<svg xmlns="http://www.w3.org/2000/svg" width="101" height="78" viewBox="0 0 101 78">
  <g fill="none" fill-rule="evenodd" stroke="#000" stroke-width="4">
    <g id="bar-top">
      <circle cx="27.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L20 8.5M45.5 8.5L97 8.5"/>
    </g>
    <g id="bar-middle" transform="translate(0 30)">
      <circle cx="54.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L45.5 8.5M72.5 8.5L97 8.5"/>
    </g>
    <g id="bar-bottom" transform="translate(1 61)">
      <circle cx="41.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L34 8.5M60.5 8.5L96 8.5"/>
    </g>
  </g>
</svg>

I created this SVG using sketch. As I don't know SVG intimately, I opted for creating a starting point(the image above),
and an endpoint (the following):

```xml
<svg xmlns="http://www.w3.org/2000/svg" width="101" height="78" viewBox="0 0 101 78">
  <g fill="none" fill-rule="evenodd" stroke="#000" stroke-width="4">
    <g id="bar-top">
      <circle cx="68.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L61 8.5M88 8.5L97 8.5"/>
    </g>
    <g id="bar-middle" transform="translate(0 30)">
      <circle cx="26.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L19 8.5M46 8.5L97 8.5"/>
    </g>
    <g id="bar-bottom" transform="translate(1 61)">
      <circle cx="52.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L45 8.5M71 8.5L96 8.5"/>
    </g>
  </g>
</svg>
```

<svg xmlns="http://www.w3.org/2000/svg" width="101" height="78" viewBox="0 0 101 78">
  <g fill="none" fill-rule="evenodd" stroke="#000" stroke-width="4">
    <g id="bar-top">
      <circle cx="68.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L61 8.5M88 8.5L97 8.5"/>
    </g>
    <g id="bar-middle" transform="translate(0 30)">
      <circle cx="26.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L19 8.5M46 8.5L97 8.5"/>
    </g>
    <g id="bar-bottom" transform="translate(1 61)">
      <circle cx="52.5" cy="8.5" r="6.5"/>
      <path stroke-linecap="round" d="M.5 8.5L45 8.5M71 8.5L96 8.5"/>
    </g>
  </g>
</svg>

This way I could compare the the path values and then easily transition from one to the other.

Transitioning the SVG – or more specifically, the paths – can be done using CSS like so:

```scss
svg:hover {
 #bar-top {
  circle {
   transform: translateX(40px);
  }
  path {
   d: path("M.5 8.5L61 8.5M88 8.5L97 8.5");
  }
 }
 #bar-middle {
  circle {
   transform: translateX(-27px);
  }
  path {
   d: path("M.5 8.5L19 8.5M46 8.5L97 8.5");
  }
 }
 #bar-bottom {
  circle {
   transform: translateX(20px);
  }
  path {
   d: path("M.5 8.5L45 8.5M71 8.5L96 8.5");
  }
 }
}
```

## Example

<p class="codepen" data-height="300" data-theme-id="36048" data-default-tab="result" data-user="triss90" data-slug-hash="EJrKpV" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid black; margin: 1em 0; padding: 1em;" data-pen-title="Animated SVG settings icon">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/EJrKpV/">
  Animated SVG settings icon</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
