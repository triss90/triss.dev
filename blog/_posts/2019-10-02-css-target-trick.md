---
title: CSS Target Trick
slug: css-target-trick
date: 2019-10-02
categories: html, css
---

<script>
document.getElementsByTagName("body")[0].id = "targetTrick";
</script>

<style>
#targetTrick:target {
    background: PapayaWhip;
}
.darkmode#targetTrick:target {
    background: DarkSlateGrey;
}
</style>


# CSS :target Trick
<p class='timestamp'><time datetime='02-10-2019'>02-10-2019</time></p>
<hr>

The CSS `:target` trick works by matching the hash(#) in the URL, to the ID of an element. 

Consider the following URL `https://triss.dev/blog/2019/10/02/css-target-trick/#targetTrick`

If the page contains an element with the ID of `#targetTrick`, the following selector will match and apply:

``` css
#targetTrick:target {
    background: PapayaWhip;
}
```

Click this link: <a href="#targetTrick" style="color: DodgerBlue">#targetTrick</a> and notice how the url now includes
`#targetTrick` which matches the ID on the body element.

This means that the selector above is valid and the background-color is applied.

## Examples

You can do lots of awesome things with this trick. Here are a few examples:

### Sidebar navigation

<p class="codepen" data-height="650" data-theme-id="light" data-default-tab="result" data-user="triss90" data-slug-hash="oLGpmx" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS ':target'  Navigation">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/oLGpmx/">
  Tabs (checkbox-hack)</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

### Fluid responsive navigation
<p class="codepen" data-height="650" data-theme-id="light" data-default-tab="result" data-user="triss90" data-slug-hash="GZKRJo" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Fluid CSS Navigation">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/GZKRJo">
  Tabs (checkbox-hack)</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
 

