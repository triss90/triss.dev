---
title: HTML Wbr Tag
slug: html-wbr-tag
date: 2019-09-05
categories: html
---

# HTML &lt;wbr&gt; Tag
<p class='timestamp'><time datetime='05-09-2019'>05-09-2019</time></p>
<hr>

This is a first article in the month long installment "what's that weird html tag?".

Today we're taking a log at the `<wbr>` tag.

The `<wbr>` html element represents a possible wordbreak, or in other words,<wbr> 
a position within a text where the browser may insert a break. <wbr>
Even if the normal line-breaking rules would not apply at that location.

## Example
``` html
<div id="example-paragraphs">
    <p>Lorem ipsum dolor sit amet, <wbr> consectetur adipisicing elit.</p>
    <p>Lorem ipsum dolor sit amet, <wbr> consectetur adipisicing elit. <wbr>Alias aspernatur blanditiis consectetur, <wbr> eaque ex sequi tenetur unde. <wbr> Accusamus molestiae nobis quasi quibusdam reprehenderit? <wbr> Amet error exercitationem incidunt natus saepe tempore!</p>
</div>
```

## Browser Support
The `<wbr>` tag is widely supported, only lacking support on IE and IE Mobile:
<p class="ciu_embed" data-feature="wbr-element" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
<a href="http://caniuse.com/#feat=wbr-element">Can I Use wbr-element?</a> Data on support for the wbr-element feature across the major browsers from caniuse.com.
</p>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>

