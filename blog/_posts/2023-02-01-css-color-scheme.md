---
title: CSS color-scheme
slug: css-color-scheme
date: 2023-02-01
categories: html, css
---

<style>
:root {
  color-scheme: light;
}
#color-scheme-button {
  font-size: 1.25rem;
  line-height: 1.35;
  display: inline-block;
  margin: 0 auto;
}
.dark {
  color-scheme: dark;
}
</style>

# CSS color-scheme

<p class='timestamp'><time datetime='02-02-2023'>01-02-2023</time></p>
<hr>

Elements on a page has a default color defined by the `color-scheme` value in the User Agent stylesheet.

This is what defines the `background-color` of body as white, the `text-color` as black and the varying grey colors of buttons and other interactive elements.

Apple visualizes this very well with their video on ["Supporting Dark Mode in Your Web Content"](https://developer.apple.com/videos/play/wwdc2019/511/?time=157):

> `color-scheme` changes the default text and background colors of the page to match the current system appearance, standard form controls, scrollbars and other named system colors also change their look automatically.

Getting started with this is very easy and only requires a few lines of CSS:

```CSS
:root {
  color-scheme: light;
}
```

Now, whenever you want to switch the color scheme, you simply update the `:root color-scheme` to:

```CSS
:root {
  color-scheme: dark;
}
```

You can test this directly on this page with the following demo:

<br>
<button id="color-scheme-button">Toggle Color Scheme</button>
<small>(Requires the site to be in lightmode)</small>
<br><br>

`color-scheme` differs from `prefers-color-scheme` in one important way, though it's easy to confuse the two. While `prefers-color-scheme` is all about writing your own styles, `color-scheme` is all about default appearances. It tells the browser to update the colors in its stylesheet.


For more information on how to implement and use `prefers-color-scheme` on you websites, see: [CSS Darkmode](https://triss.dev/blog/2019/08/24/css-darkmode/)


<script>
const root = document.querySelector(":root");
const navbar = document.querySelector("body > span");
const colorSchemeButton = document.getElementById("color-scheme-button");
if (colorSchemeButton) {
  colorSchemeButton.addEventListener('click', function() {
    event.preventDefault();
    root.classList.toggle('dark');
    navbar.classList.toggle('inverted');
    console.log('color scheme swapped');
  });
}
console.log(colorSchemeButton);
</script>