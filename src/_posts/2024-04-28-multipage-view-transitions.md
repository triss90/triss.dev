---
layout: post
title: Multipage View Transitions
slug: multipage-view-transitions
date: 2024-04-28
draft: false
description: Getting started with multipage view transitions
category: Browser
---

<h1 class="post-transition-end">Multipage View Transitions</h1>

<p class='timestamp'><time datetime='%%date%%'>%%date%%</time></p><hr>

## Enable support

As of April 2024, View Transitions, are still an experimental feature and thus need to be activated in Chrome like so: [chrome://flags#view-transition-on-navigation](chrome://flags#view-transition-on-navigation)

⚠️ Once the flag has been enabled, make sure to restart your browser.


## Include view-transitions meta tag

Insert the following line into the global `<head>` section of your layout template:

```
<meta name="view-transition" content="same-origin" />
```

Congratulations, you've enabled page transitions! This simple addition implements a crossfade effect throughout your website, making it resemble a PowerPoint presentation. It's uncertain whether this `<meta>` tag will remain the definitive method for activating this feature, but it's great to see that it functions effectively.

## Add individual transitions

To apply transitions to specific elements, use named view transitions in your CSS. Assign the same unique `view-transition-name` to the element you wish to transition from (located on `page-1.html`) and the element you want to transition to (on `page-2.html`).

### page-1.html
```
<div class="hero-page-1" style="view-transition-name: hero">
    <h1>This is Page 1</h1>
    <a href="/page-2.html">Go to page 2</a>
</div>
```

### page-2.html
```
<div class="hero-page-2" style="view-transition-name: hero">
    <h1>This is Page 2</h1>
</div>
```

There you go! This creates a "morph" effect between the two pages. If you prefer not to use inline styles, you can also achieve this with a CSS file. Additionally, if you want to consider accessibility, disable the view transitions for users who experience motion sickness:

```
@media not (prefers-reduced-motion: reduce) {
    .hero-page-1,
    .hero-page-2 { 
        view-transition-name: hero 
    }
}
```

## How does it work

Under the hood, the browser rasterizes (i.e., creates images of) the initial and final states of the DOM elements you're transitioning. It then identifies the differences between these two snapshots and interpolates between them.

## Browser support

The View Transition API is still in the experimental stage and is presently only available in Chrome browsers, accessible behind an experimental flag at [chrome://flags#view-transition-on-navigation](chrome://flags#view-transition-on-navigation). Nevertheless, this feature supports progressive enhancement, meaning you can safely incorporate the meta tag into your head section to benefit from smooth transitions.


<p class="ciu_embed" data-feature="view-transitions" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=view-transitions">Provides a mechanism for easily creating animated transitions between different DOM states,</a>
</p>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>
