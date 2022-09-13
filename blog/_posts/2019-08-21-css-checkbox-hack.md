---
title: CSS Checkbox Hack
slug: css-checkbox-hack
date: 2019-08-21
categories: html, css
---

# CSS Checkbox Hack
<p class='timestamp'><time datetime='21-08-2019'>21-08-2019</time></p>
<hr>

The "Checkbox Hack" is the method of using a connected checkbox and label
to control one or more elements.

The markup might look something along these lines:

``` html
<label for="toggleButtonInput">Show/Hide</label>
<input type="checkbox" id="toggleButtonInput">
<div id="control">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
```

And the accompanying CSS like this:

``` css
input[type="checkbox"] {
   display: none;
   position: absolute;
   top: -9999px;
   left: -9999px;
}

#control {
   display: none;
}

input[type=checkbox]:checked ~ #control {
   display: block;
}
```

## Try it out

<style>
.exampleWrapper {
	text-align: center;	
}
#toggleButtonInput {
	position: absolute;
	top: -9999px;
	left: -9999px;
	display: none;
}
#toggleButton {
	background-color: #222;
	color: #fefefe;
	padding: 0.5rem 1rem;
	font-size: 1rem;
	margin: 30px auto;
	display: inline-block;
}
#control {
	display: none;
}
input[type=checkbox]:checked ~ #control {
	display: block;
}
</style>

<hr>

<div class="exampleWrapper">
	<label id="toggleButton" for="toggleButtonInput">Show/Hide 👀</label>
	<input type="checkbox" id="toggleButtonInput">
	<div id="control">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>

<hr>

## Accessibility

This "hack" has its drawbacks however. It's in no way accessible. This flaw can be improved upon, 
however, not fixed entirely:

``` html
<label id="toggleButton" for="toggleButtonInput" style="cursor: pointer;">
    <button id="ToggleAccessibility">Show/Hide 👀</button>
</label>
```

Make sure you can still click the label
``` css
#toggleButton button {
    pointer-events: none;
}
```

This makes the toggle button "tabbable", but not "clickable". 
You'd have to control that with external javascript.

<style>
.exampleWrapper2 {
	text-align: center;	
}
#toggleButtonInput2 {
	position: absolute;
	top: -9999px;
	left: -9999px;
	display: none;
}
#toggleButton2 {
	background-color: #222;
	color: #fefefe;
	padding: 0.5rem 1rem;
	font-size: 1rem;
	margin: 30px auto;
	display: inline-block;
}
#toggleButton2 > button {
    background: none;
    color: #f2f2f2;
    border: none;
    pointer-events: none;
    font-size: 1rem;
}
#control2 {
	display: none;
}
input[type=checkbox]:checked ~ #control2 {
	display: block;
}
</style>

<hr>
<div class="exampleWrapper2">
	<label id="toggleButton2" for="toggleButtonInput2" style="cursor: pointer;">
		<button id="ToggleAccessibility">Show/Hide 👀</button>
	</label>
	<input type="checkbox" id="toggleButtonInput2">
	<div id="control2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>
<hr>

## Example

<p class="codepen" data-height="650" data-theme-id="light" data-default-tab="result" data-user="triss90" data-slug-hash="rrJgLE" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Tabs (checkbox-hack)">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/rrJgLE/">
  Tabs (checkbox-hack)</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>

**More Examples:**
<ul>
    <li><a href="http://jsfiddle.net/genelocklin/LXx5v/" target="_blank" rel="noopener">Hide the sidebar!</a> by @genelocklin</li>
    <li><a href="https://codepen.io/gubs/pen/kqEaz" target="_blank" rel="noopener">Checkbox hack - popup</a> by Michael Gubitosa</li>
</ul>