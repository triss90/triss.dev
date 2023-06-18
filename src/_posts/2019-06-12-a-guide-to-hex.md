---
layout: post
title: A Guide to Hex
slug: a-guide-to-hex
date: 2019-06-12
description: Learn how hexadecimal colors work
draft: false
category: web development
tags:
  - css
  - javascript
---

# A Guide to Hex

<p class='timestamp'><time datetime='12-06-2019'>12-06-2019</time></p>
<hr>

Hex code is one way to communicate a color value to the browser, and in turn to the computer.
Hex is surprisingly similar to HSL and RGB, though at first sight it may not look like it.

## Syntax

Hex: `#f2317f`

RGB: `rgb(242,49,127)`

HSL: `hsl(336%,88%,57%)`

The syntax of both RGB and HSL are very descriptive and easy to read.
It's easily deduced that, the RGB color listed above contains more red(242) than it does green(49),
Leading to the conclusion that the color might lean towards the red side of the colorwheel.

Hex codes are comprised of 6 values that are part of the hexadecimal system, or base 16.
Instead of the 10 values we're used to with the decimal system(0-9), there are 16 (0-9 and A-F).

Each of the hexadecimal values represent a decimal value:

- 0: 0
- 1: 1
- 2: 2
- 3: 3
- 4: 4
- 5: 5
- 6: 6
- 7: 7
- 8: 8
- 9: 9
- A: 10
- B: 11
- C: 12
- D: 13
- E: 14
- F: 15

The 6 values that comprise the Hex color code can be further divided into 3 value pairs.
The first pair defines the red amount.
The second pair defines the green amount. And you guessed it,
the last pair defines the blue amount. This sounds a lot like RGB, doesn't it?

## \#<span style="background:#f5c9c9;color:#e57373;padding:0 0.5rem;">f2</span><span style="background:#ebf6ec;color:#a5d6a7;padding:0 0.5rem;">31</span><span style="background:#e3f5fe;color:#81d4fa;padding:0 0.5rem;">7f</span>

## Converting Hex to RGB

Knowing that hex color codes are just pairs of values that represent red, green and blue amounts,
we can go ahead and convert these to their decimal counterparts.

### Let's convert `#f2317f`

We start by dividing it into its three pairs: `f2`, `31`, `7f`.
Converting hexadecimal numbers to decimal is done using the following equation:

```
decimal = hex_value * (16 ^ position)
```

The Hex value is translated using the table above. E.g. `d` = `13`.

To find the position, we start by assigning positional values to the first pair `f2`.
We do this from **right** to **left**. So **2** is assigned the value `0` and **f** is assigned the value `1`.

### Example

```
f: 15 * (16¹) = 240
2: 2 * (16⁰) = 2
```

We now have two new values, `240` and `2`. The last step is to add these to values, which gives us 242. This is our new decimal value for the first hex pair.
In other words, this is our "red" value.

Rinse and repeat, and we end up with `rgb(242,49,127)`.

I've made a handy script to easily convert Hex to RGB:

```javascript
function hexToRgb(input) {
 const base16 = {
  0: 0,
  1: 1,
  2: 2,
  3: 3,
  4: 4,
  5: 5,
  6: 6,
  7: 7,
  8: 8,
  9: 9,
  a: 10,
  b: 11,
  c: 12,
  d: 13,
  e: 14,
  f: 15,
 };
 const hex = input.split("");
 let r = hex.splice(0, 2);
 r =
  parseInt(base16[r[0]], 10) * Math.pow(16, 1) +
  parseInt(base16[r[1]], 10) * Math.pow(16, 0);
 let g = hex.splice(0, 2);
 g =
  parseInt(base16[g[0]], 10) * Math.pow(16, 1) +
  parseInt(base16[g[1]], 10) * Math.pow(16, 0);
 let b = hex.splice(0, 2);
 b =
  parseInt(base16[b[0]], 10) * Math.pow(16, 1) +
  parseInt(base16[b[1]], 10) * Math.pow(16, 0);
 return {
  r: r,
  g: g,
  b: b,
 };
}

const rgb = hexToRgb("f06d06");
console.log(rgb["r"], rgb["g"], rgb["b"]);
```

Here's a live example of the script in action:

<p class="codepen" data-height="265" data-theme-id="light" data-default-tab="js,result" data-user="triss90" data-slug-hash="GbRdZx" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="hex to rgb">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/GbRdZx/">
  hex to rgb</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
