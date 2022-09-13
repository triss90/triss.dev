---
title: CSS Conical Gradients
slug: css-conical-gradients
date: 2019-08-07
categories: css
---

# CSS Conical Gradients
<p class='timestamp'><time datetime='07-08-2019'>07-08-2019</time></p>
<hr>

A conic gradient is very similar to a radial gradient. 
They are both circular in nature, and both use the center as source point.
The color of a radial gradient spreads from the center out towards the edge,
where as the color of a conic gradient spreads around the circle

<style>
.split {
    display: flex;
    align-items: center;
    justify-content: space-around;
    text-align: center;
}
.conic-gradient {
	height: 200px;
	width: 200px;
	border-radius: 50%;
	margin: 5px;
	background: conic-gradient(#fff, #000);
}
.radial-gradient {
	height: 200px;
	width: 200px;
	border-radius: 50%;
	margin: 5px;
	background: radial-gradient(#fff, #000);
}
@media(max-width: 768px) {
    .conic-gradient, .radial-gradient {
        height: 125px;
        width: 125px;
    }
}
</style>

<div class="split">
<span>
    <strong>Conic Gradient</strong>
    <div class="conic-gradient"></div>
</span>
<span>
    <strong>Radial Gradient</strong>
    <div class="radial-gradient"></div>
</span>
</div>

## Using Conical Gradients
Just like radial gradients, conical gradients are very easy to use:

``` css
.conic-gradient {
    background: conic-gradient(#fff, #000);
}
```

### Example
<p class="codepen" data-height="300" data-theme-id="36048" data-default-tab="result" data-user="triss90" data-slug-hash="PMjoPj" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS Conical Gradients">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/PMjoPj/">
  CSS Conical Gradients</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>

## Browser Support
As of the writing of this article, conic gradients are only supported by Safari and Chrome.

<p class="ciu_embed" data-feature="css-conic-gradients" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=css-conic-gradients">Method of defining a conical or repeating conical color gradient as a CSS image.</a>
</p>

<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>