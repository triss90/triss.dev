---
layout: post
title: Hex color notation have an alpha channel
slug: hex-color-alpha-channel
date: 2024-01-12
draft: false
description: The hexadecimal color system includes an option for an alpha channel!
category: PHP
---

# Hex color notation have an alpha channel

<p class='timestamp'><time datetime='%%date%%'>%%date%%</time></p><hr>

The hexadecimal color system includes an option for an alpha channel. This alpha channel is used to specify transparency and can be added to the basic hex color codes. There are two formats for incorporating the alpha channel: either as `#RGB[A]` or as `#RRGGBB[AA]`. 

The alpha value in these formats is represented in hexadecimal, where `00` denotes complete transparency and `FF`` signifies full opacity.

For the longer format, `#RRGGBB[AA]`, the alpha channel is a two-digit hexadecimal number. In contrast, the shorter `#RGB[A]` version uses a single hexadecimal digit for the alpha channel, ranging from `0` to `F`.

Examples include:

```
#FF7f00     /* orange               */
#FF7f0000   /* orange 	 0% opaque  */
#FF7f0080   /* orange   50% opaque  */
#FF7f00FF   /* orange  100% opaque  */

#01E        /* blue               */
#01E0       /* blue     0% opaque */
#01E8       /* blue    53% opaque */
#01EF       /* blue   100% opaque */
```

Additional details and examples can be found on the [Mozilla Developer Network (MDN) website](https://developer.mozilla.org/en-US/docs/Web/CSS/hex-color).