---
title: Units on the Web
slug: units-on-the-web
date: 2023-03-12
categories: css
---

<style>
.box {
	border: 2px solid black;
	background: white;
	color: black;
	display: inline-block;
	margin-bottom: 5px;
	padding: 5px;
}
.darkmode .box,
.darkmode .grid .item {
	border: 2px solid white;
	/* background: black; */
	/* color: white; */
}
.grid {
	display: grid;
	gap: 5px;
	grid-template-columns: 1fr 1fr 1fr 1fr;
	grid-template-rows: 100px 200px 100px;
	grid-template-areas:
		"head head . side"
		"main main . side"
		"footer footer footer footer";
	
}
.grid .item {
	border: 2px solid black;
	display: flex;
	justify-content: center;
	align-items: center;
}
.grid .item.item-1 {
	grid-area: head;	
}
.grid .item.item-2 {
	grid-area: main;	
}
.grid .item.item-3 {
	grid-area: side;	
}
.grid .item.item-4 {
	grid-area: footer;	
}
</style>

# Units on the Web

<p class='timestamp'><time datetime='12-03-2023'>12-03-2023</time></p>
<hr>

https://developer.mozilla.org/en-US/docs/Learn/CSS/Building_blocks/Values_and_units

In CSS, units are used to define the size, distance, and other dimensions of elements on a web page. There are several types of units in CSS:

## Absolute length units
These units are fixed and do not change with screen resolution or zoom level. They include:

| Unit	| Name					| Equivalent
| ---	| ---					| ---
| `1cm`	| Centimeters			| 37.8px
| `1mm`	| Millimeters			| 3.78px
| `1Q`	| Quarter-millimeters	| 0.95px
| `1in`	| Inches				| 96px
| `1pc`	| Picas					| 16px
| `1pt`	| Points				| 1.33px
| `1px` | Pixels				| 1px

Pixel is the most commonly used absolute unit in CSS. It represents a single dot on a screen and is often used for precise measurements.

You will rarely have use for other absolute units of length on the web, though there are cases where you might want to create a layout that translates well on print.
Under those conditions, real world measurements like inches, centimeters and even millimeters might come in handy.

### Examples
The following examples have their `width` set to the respective units and measurements:
<div class="box" style="background-color:#e6b0aa; width:3cm;">3cm</div>
<div class="box" style="background-color:#f5b6b1; width:30mm;">30mm</div>
<div class="box" style="background-color:#d7bce1; width:120Q;">150Q</div>
<div class="box" style="background-color:#d2b4de; width:1.5in;">1.5in</div>
<div class="box" style="background-color:#a9cce3; width:8pc;">8pc</div>
<div class="box" style="background-color:#aed6f1; width:100pt;">100pt</div>
<div class="box" style="background-color:#a3e4d7; width:100px;">100px</div>

## Relative length units
These units are relative to other elements on the page or to the viewport size. They include:

| Unit			| Relative to
| ---			| ---
| `vw`			| % of the viewport's width
| `vh`			| % of the viewport's height
| `vmin`		| % of the viewport's smaller dimension
| `vmax`		| % of the viewport's larger dimension
| `vb`			| % of the size of the initial containing block in the direction of the root element's _block_ axis
| `vi`			| % of the size of the initial containing block in the direction of the root element's _inline_ axis
| `svw` `svh`	| % of the small viewport's width and height, respectively
| `lvw` `lvh`	| % of the large viewport's width and height, respectively
| `dvw` `dvh`	| % of the dynamic viewport's width and height, respectively
| `%`			| % of the parent element

### Examples
Note how(try resizing your browser window) the `width` of these elements change according to the size(height and width) of the viewport(your browser window):

<div class="box" style="background-color:#e6b0aa; width:10vw;">10vw</div>
<div class="box" style="background-color:#f5b6b1; width:10vh;">10vh</div>
<div class="box" style="background-color:#d7bce1; width:10vmin;">10vmin</div>
<div class="box" style="background-color:#d2b4de; width:10vmax;">10vmax</div>
<div class="box" style="background-color:#a9cce3; width:10vb;">10vb</div>
<div class="box" style="background-color:#aed6f1; width:10vi;">10vi</div>
<div class="box" style="background-color:#a3e4d7; width:10svw;">10svw</div>
<div class="box" style="background-color:#a2d9ce; width:10svh;">10svh</div>
<div class="box" style="background-color:#d4efdf; width:10lvw;">10lvw</div>
<div class="box" style="background-color:#d5f5e3; width:10lvh;">10lvh</div>
<div class="box" style="background-color:#fbf3cf; width:10dvw;">10dvw</div>
<div class="box" style="background-color:#fdebd0; width:10dvh;">10dvh</div>
<div class="box" style="background-color:#f9e5d3; width:10%;">10%</div>

## Font-relative length units
These units are used to define the size of text, and are relative to the font-size or line-height of the element. They include:

| Unit	| Relative to
| ---	| ---
| `em`	| Font size of the parent
| `rem`	| Font size of the root element
| `lh`	| Line height of the element
| `rlh`	| Line height of the root element

### Examples
These units are commonly used to define the font-size and width of elements:

<div class="box" style="background-color:#e6b0aa; width:10em;">10em</div>
<div class="box" style="background-color:#f5b6b1; width:10rem;">10rem</div>
<div class="box" style="background-color:#d7bce1; width:10lh;">10lh</div>
<div class="box" style="background-color:#d2b4de; width:10rlh;">10rlh</div>


`em` and `rem` are the two relative lengths you are most likely to encounter when sizing anything from boxes to text. 
It's worth understanding how these work, and the differences between them. 

The below examples provide a demonstration.

To start with, we set _16px_ as the `font-size` on the `<html>` element:
```CSS
html {
	font-size: 16px;
}
```

Thanks to the cascading nature of CSS, this means that the default `font-size` of our document is now _16px_ 
and is thusly inherited by all elements that don't otherwise have a specified `font-size`.

We can now use `em` and `rem` to directly reference this unit of measurement, as we've set 1em & 1rem = 16px.

So we can write CSS like this:

```CSS
p {
	font-size: 2rem /* or 2 * 16px = 32px */
}
```

Say we want to change this for a specific element, but not everywhere on the page. 
All we need to do in this case, is reference the parent element(with `em`) instead of the root element(with `rem`) and update the pixel value of the parent accordingly:

```CSS
.text-block {
	font-size: 20px
}
.text-block p {
	font-size: 2em /* or 2 * 20px = 40px */
}
```

`em` and `rem` are very powerful tools when attempting to scale elements in relation to one another.

## Other length units

CSS also supports other units such as the `ex` unit (relative to the x-height of the font), 
the `ch` unit (relative to the width of the "0" character in the font), and the `fr` unit (used in CSS Grid Layout to distribute available space).

| Unit	| Description
| ---	| ---
| `fr`	| Used in CSS Grid Layout to distribute available space
| `ex`	| Relative to the x-height of the the element's font
| `ch`	| The advance measure (width) of the glyph "0" of the element's font.

### `fr`-unit
With CSS Grid Layout, we get a new flexible unit: the `fr` unit. 
This is a fractional unit which means that `1fr` takes up 1 part of the available space. 

In the following example we're working with 4 columns which in turn means that `1fr` = `25%`

```CSS
.grid {
	display: grid;
	gap: 5px;
	
	grid-template-columns: 1fr 1fr 1fr 1fr;
	
	grid-template-rows: 100px 200px 100px;
	grid-template-areas:
		"head head . side"
		"main main . side"
		"footer footer footer footer";
}
```

<div class="grid">
	<div class="item item-1">Head</div>
	<div class="item item-2">Main</div>
	<div class="item item-3">Side</div>
	<div class="item item-4">Footer</div>
</div>

## Conclusion
While you can accomplish a lot with knowledge of just a few of the units available to you, it is very beneficial to have a grasp of them all.

It lets you do some cool shenanigans like [fluid typography](https://triss.dev/blog/2020/05/20/fluid-typography/):

```CSS
html {
	font-size: calc(16px + 6 * ((100vw - 320px) / 680));
}
```
and much more!


<script>

</script>