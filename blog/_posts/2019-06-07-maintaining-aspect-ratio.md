---
title: Maintaining Aspect Ratio
slug: maintaining-aspect-ration
date: 2019-06-07
categories: css
---

# Maintaining Aspect Ratio
<p class='timestamp'><time datetime='07-06-2019'>07-06-2019</time></p>
<hr>

So, maintaining aspect ratio on a responsive element is surprisingly easy!
You know how adding `padding-top: 50%` does not actually add 50% of the original height of the element as padding?
Rather it adds 50% of the width of the parent element! 

With this in mind we can quickly force e`lements to maintain their aspect ratio when being resized:

``` css
.element {
  width: 100%;
  padding-bottom: 100%;
  height: 0;
}
```

I use this trick on [colordrop.io](https://colordrop.io), to maintain the aspect ratio of the color palettes.

**Here's a quick example from [colordrop.io](https://colordrop.io):**
<p class="codepen" data-height="465" data-theme-id="light" data-default-tab="html,result" data-user="triss90" data-slug-hash="ZNOyem" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Aspect Ratio Example">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/ZNOyem/">
  Aspect Ratio Example</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>

                                                                           

