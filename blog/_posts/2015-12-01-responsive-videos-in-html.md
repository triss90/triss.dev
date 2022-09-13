---
title: Responsive Videos in HTML
slug: responsive-videos-in-html
date: 2015-12-01
categories: css, html
---

<style>
.responsive-video {
  position: relative;
  padding-bottom: 56.25%;
}
.responsive-video iframe {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: $light-text-color;
  padding: 10px;
  border: 1px solid darken($light-text-color, 10%);
  border-radius: 3px;
}
</style>


# Responsive Videos in HTML
<p class='timestamp'><time datetime='01-12-2015'>01-12-2015</time></p>
<hr>

I happened upon an effective way of making videos responsive, and immediately implemented it on this site. Try resizing the window, to see the video beneath, adjust to the width of the page, while remaining its aspect ratio.

<div class="responsive-video">
   <iframe src="https://www.youtube.com/embed/DgDg2ddiKIo"></iframe>
</div>

<br>

The effect is achieved by adding a padding of 56.25% on the bottom of the div containing the video. We arrive at this number by dividing the aspect ratio's height and width and multiplying that number by 100 to get the result in percent. e.g. `( 9 / 16 ) * 100 = 56.25%

<br>

### The CSS
~~~~ css
.responsive-video {
   position: relative;
   padding-bottom: 56.25%;
}

.responsive-video iframe {
   position: absolute;
   width: 100%;
   height: 100%;
   top: 0;
   left: 0;
}
~~~~

### The HTML
~~~~ html
<div class="responsive-video">
   <iframe src="https://www.youtube.com/embed/DgDg2ddiKIo"></iframe>
</div>
~~~~
