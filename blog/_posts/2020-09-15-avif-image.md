---
title: AVIF Image
slug: avif-image
date: 2020-09-15
categories: html
---

<style>

</style>


# AVIF Image Format
<p class='timestamp'><time datetime='20-05-2020'>20-05-2020</time></p>
<hr>

Google Chrome just added support for the new AVIF image format.
 
The AVIF Image format is a modern image format based on the AV1 video format. AVIF generally has better compression than WebP, JPEG, PNG and GIF and is designed to supersede them. 

My preliminary tests show an easy reduction in size by a factor of 10. Take the following examples:

## bruce.jpg (221KB)
<img src="https://triss.dev/examples/bruce.jpg" alt="Cute pug on couch">

## bruce.avif (24KB)
<img src="https://triss.dev/examples/bruce.avif" alt="Cute pug on couch">


## Browser support
The AVIF image format is currently only supported by Chrome, but can easily be used with backwards compatible jpgs like so:
``` html
<picture>
	<source type="image/avif" srcset="https://triss.dev/examples/bruce.avif">
	<img src="https://triss.dev/examples/bruce.jpg" alt="Cute pug on couch">
</picture>
```
<p class="ciu_embed" data-feature="avif" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=mdn-avif">A modern image format based on the AV1 video format. AVIF generally has better compression than WebP, JPEG, PNG and GIF and is designed to supersede them.</a>
</p>

<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>


