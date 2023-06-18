---
layout: post
title: Aspect Ratio Revisited
slug: aspect-ratio-revisited
date: 2023-03-28
draft: false
description: Learn how aspect ratios work and how we can use this on the web
category: web development
tags:
  - css
---

<style>
  .result {
    text-decoration-line: underline;
    text-decoration-style: double;
  }
  .example {
    width: 100%;
    background-image: url('https://webbox.dev/placeholder/image.php?width=533&height=300&text=placeholder&textColor=162,252,162&backgroundColor=34,34,34');
    background-size: cover;
  }
  .example-1 {
    height: 0;
    padding-top: 56.25%
  }
  .example-2 {
    aspect-ratio: 16 / 9;
  }
</style>

# Aspect Ratio Revisited

<p class='timestamp'><time datetime='28-03-2023'>28-03-2023</time></p>
<hr>

Back in 2019 I wrote a short post about [Maintaining Aspect Ratio](https://triss.dev/blog/2019/06/07/maintaining-aspect-ration/) with CSS.

The example I gave, took advantage of what is called the "padding-hack",
which works by setting the `height` of an element to 0 and the `padding-top`
to the percentage that represents the relation between width and height, i.e. the aspect ratio.

To maintain an aspect ratio of 9:16 you would be setting the `padding-top` to 56.25% like so:

```
.element {
  width: 100%;
  background-image: url('https://webbox.dev/placeholder/image.php?width=533&height=300&text=placeholder&textColor=162,252,162&backgroundColor=34,34,34');
  background-size: cover;

  /* Aspect Ratio */
  height: 0;
  padding-top: 56.25%
}
```

**Result:**

<small>Resize window to see the effect of the applied aspect ratio</small>

<div class="example example-1"></div>

To calculate the percentage of your aspect ratio, simply divide the dimensions like so: ( 9 / 16 ) × 100 = <span class=result>56.25%</span>.

## So what's new?

In the time since I posted this "hack", the CSS property `aspect-ratio` has gained full support in all major browsers,
so we now have a much better way of defining aspect ratio.

Using the CSS property `aspect-ratio` removes all the guesswork and calculations required.
You simply need to define your preferred aspect ratio like so:

```
.element {
  width: 100%;
  background-image: url('https://webbox.dev/placeholder/image.php?width=533&height=300&text=placeholder&textColor=162,252,162&backgroundColor=34,34,34');
  background-size: cover;

  /* Aspect Ratio */
  aspect-ratio: 16 / 9;
}
```

**Result:**

<small>Resize window to see the effect of the applied aspect ratio</small>

<div class="example example-2"></div>

Note that whenever you want to use `aspect-ratio` you must only define one dimension, either width or height,
otherwise the aspect ratio will be overridden.
