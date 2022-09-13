---
title: CSS selectmenu
slug: selectmenu
date: 2022-01-28
categories: html, css
---

<style>
selectmenu.logos::part(button) {
  width: 200px;
  max-width: 100%;
  font-size: 1rem;
  color: #444;
  line-height: 1.3;
  padding: .6em 1.4em .5em .8em;
  box-sizing: border-box;
  margin: 0;
  border: 1px solid #aaa;
  box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
  border-radius: .5em;
  background-color: #fff;
}
selectmenu.logos::part(selected-value) {
  width: 100%;
  text-align: left;
}
selectmenu.logos::part(listbox) {
  color: #444;
  line-height: 1.3;
  border-radius: .5em;
}
selectmenu.logos option {
  padding: 0.5rem;
}
selectmenu.logos option {
  display: flex;
  gap: 0.5rem;
  align-items: center;
}
selectmenu.logos option::before {
  display: inline-block;
  content: "";
  width: 1rem;
  height: 1rem;
  background-repeat: no-repeat;
  background-size: contain;
}
selectmenu.logos option[value="brave"]::before {
  background-image: url("https://upload.wikimedia.org/wikipedia/commons/c/c4/Brave_lion.png");
}
selectmenu.logos option[value="edge"]::before {
  background-image: url("https://upload.wikimedia.org/wikipedia/commons/7/7e/Microsoft_Edge_logo_%282019%29.png");
}
selectmenu.logos option[value="chrome"]::before {
  background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Google_Chrome_icon_%28September_2014%29.svg/1200px-Google_Chrome_icon_%28September_2014%29.svg.png");
}
selectmenu.logos option[value="firefox"]::before {
  background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Firefox_logo%2C_2019.svg/1200px-Firefox_logo%2C_2019.svg.png");
}
selectmenu.logos option[value="safari"]::before {
  background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Safari_browser_logo.svg/1200px-Safari_browser_logo.svg.png");
}
selectmenu.logos option[value="opera"]::before {
  background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Opera_2015_icon.svg/640px-Opera_2015_icon.svg.png");
}
</style>

# CSS selectmenu

<p class='timestamp'><time datetime='28-01-2022'>28-01-2022</time></p>
<hr>

As of **28-01-2022**, this feature is only available as an Experimental Web Platform feature in Chrome. This feature can be enabled in your Chrome browser here: 
[chrome://flags/#experimental-web-platform-features](chrome://flags/#experimental-web-platform-features).

<selectmenu class="logos">
  <option value="edge" selected>Edge</option>
  <option value="chrome">Chrome</option>
  <option value="firefox">Firefox</option>
  <option value="brave">Brave</option>
  <option value="safari">Safari</option>
  <option value="opera">Opera</option>
</selectmenu>

You use `selectmenu` just like you would use `select`:

```html
<selectmenu class="logos">
  <option value="edge" selected>Edge</option>
  <option value="chrome">Chrome</option>
  <option value="firefox">Firefox</option>
  <option value="brave">Brave</option>
  <option value="safari">Safari</option>
  <option value="opera">Opera</option>
</selectmenu>
```

## Styling selectmenu

With the `selectmenu` element you have the ability to style every element of the select menu, using a variety of new CSS selectors such as: 
- selectmenu: `selectmenu {}`
- button: `selectmenu::part(button) {}`
- selected-value: `selectmenu::part(selected-value) {}`
- listbox: `selectmenu::part(listbox) {}`
- optgroup: `selectmenu optgroup {}`
- option: `selectmenu option {}`


<style>
selectmenu, selectmenu::part(button) {
  font-size: 1rem;
}
</style>

#### selectmenu
```css
selectmenu {
  border: 2px dashed red;
}
```

<style>
.selectmenu {
  border: 2px dashed red;
}
</style>
<selectmenu class="selectmenu">
  <option>Option 1</option>
  <option>Option 2</option>
  <option>Option 3</option>
</selectmenu>


#### selectmenu::part(button)
```css
selectmenu::part(button) {
  border: 2px dashed red;
}
```

<style>
.selectmenubutton::part(button) {
  border: 2px dashed red;
}
</style>
<selectmenu class="selectmenubutton">
  <option>Option 1</option>
  <option>Option 2</option>
  <option>Option 3</option>
</selectmenu>


#### selectmenu::part(selected-value)
```css
selectmenu::part(selected-value) {
  border: 2px dashed red;
}
```

<style>
.selectmenuselected::part(selected-value) {
  border: 2px dashed red;
}
</style>
<selectmenu class="selectmenuselected">
  <option>Option 1</option>
  <option>Option 2</option>
  <option>Option 3</option>
</selectmenu>


#### selectmenu::part(listbox)
```css
selectmenu::part(listbox) {
  border: 2px dashed red;
}
```

<style>
.selectmenulistbox::part(listbox) {
  border: 2px dashed red;
}
</style>
<selectmenu class="selectmenulistbox">
  <option>Option 1</option>
  <option>Option 2</option>
  <option>Option 3</option>
</selectmenu>


#### selectmenu optgroup
```css
selectmenu optgroup {
  border: 2px dashed red;
}
```

<style>
.selectmenuoptgroup optgroup {
  border: 2px dashed red;
}
</style>
<selectmenu class="selectmenuoptgroup">
  <optgroup label="First option set">
    <option>Option 1</option>
    <option>Option 2</option>
    <option>Option 3</option>
  </optgroup>
  <optgroup  label="Second option set">
    <option>Option 4</option>
    <option>Option 5</option>
    <option>Option 6</option>
  </optgroup>
</selectmenu>

#### selectmenu option
```css
selectmenu option {
  border: 2px dashed red;
}
```

<style>
.selectmenuoption option {
  border: 2px dashed red;
}
</style>
<selectmenu class="selectmenuoption">
  <option>Option 1</option>
  <option>Option 2</option>
  <option>Option 3</option>
</selectmenu>

