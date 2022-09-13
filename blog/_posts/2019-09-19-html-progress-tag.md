---
title: HTML Progress Tag
slug: html-progress-tag
date: 2019-09-19
categories: html
---




# HTML &lt;progress&gt; Tag
<p class='timestamp'><time datetime='19-09-2019'>19-09-2019</time></p>
<hr>

<style>
progress {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
progress.one::-webkit-progress-bar {
    background: red;
}
progress.two::-webkit-progress-value {
    background: red;
}
</style>

This week we're looking at the `<progress>` tag.

The `<progress>` tag offers a method of indicating a progress state. Thus it represents the completion
of a task, like loading a site, downloading a file and so on. 

The progress tag takes two attributes: `max` which represent the maximum value 
and `value` which represents the current value.

## Styling
WebKit/Blink provides two pseudo classes for styling the progress element: `-webkit-progress-bar` which lets you modify the progress element container,
and `-webkit-progress-value` which is used for styling the value inside the container.

Start by resetting the styles:
``` css
progress {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
```


### -webkit-progress-bar
``` html
<progress max="100" value="65"></progress>
```
``` css
progress::-webkit-progress-bar {
    background: red;
}
```

<progress class="one" max="100" value="65"></progress>


### -webkit-progress-value
``` html
<progress max="100" value="65"></progress>
```
``` css
progress::-webkit-progress-value {
    background: red;
}
```

<progress class="two" max="100" value="65"></progress>


## Example
<p class="codepen" data-height="265" data-theme-id="light" data-default-tab="result" data-user="triss90" data-slug-hash="XWrXRJy" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="HTML Progress Test">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/XWrXRJy/">
  HTML Progress Test</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>


## Browser Support
The `<progress>` tag is widely supported. Besides iOS Safari which only partly supports it, 
every other browser offers full support.

<p class="ciu_embed" data-feature="progress" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=progress">Method of indicating a progress state.</a>
</p>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>

