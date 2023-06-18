---
layout: post
title: Fixing Whitespace Between Inline Elements
slug: fixing-whitespace-between-inline-elements
date: 2020-03-11
draft: false
description: Learn how to fix whitespace between inline elements
category: web development
tags:
  - html
  - css
---

<style>
section.demo div.test {
  display: inline-block;
  padding: 10px;
  background: #ca3e47;
}
</style>

# Fixing Whitespace Between Inline Elements

<p class='timestamp'><time datetime='11-03-2020'>11-03-2020</time></p>
<hr>

I was messing around with inline elements the other day and stumbled upon a minor annoyance.
You see, a series of inline-block elements with no formatting applied, will have spaces in between them.

**HTML**

```html
<section>
 <div>One</div>
 <div>Two</div>
 <div>Three</div>
 <div>Four</div>
</section>
```

**CSS**

```css
section div {
 padding: 10px;
 background: #ca3e47;
 display: inline-block;
}
```

This will result in the following:

<section class="demo">
    <div class="test">One</div>
    <div class="test">Two</div>
    <div class="test">Three</div>
    <div class="test">Four</div>
</section>

Notice the spaces? Normally you'd want the elements to stay flush against each other to avoid awkward, unclickable gaps.

Luckily there are a few ways to get around this.

## Remove the spaces

```html
<section>
 <div>One</div>
 <div>Two</div>
 <div>Three</div>
 <div>Four</div>
</section>
```

or

```html
<section>
 <div>One</div>
 <div>Two</div>
 <div>Three</div>
 <div>Four</div>
</section>
```

or by inserting comments

```html
<section>
 <div>One</div>
 <!--
    -->
 <div>Two</div>
 <!--
    -->
 <div>Three</div>
 <!--
    -->
 <div>Four</div>
</section>
```

All of the above will result in the following:

<section class="demo">
    <div class="test">One</div><!--
    --><div class="test">Two</div><!--
    --><div class="test">Three</div><!--
    --><div class="test">Four</div>
</section>

While none of these solutions are elegant, they get the job done.

## Negative margin

Another solution is to add negative margin the elements, thus compensating for the space.

```css
section div {
 display: inline-block;
 margin-right: -7px;
}
```

<style>
section.demo2 div.test2 {
  display: inline-block;
  padding: 10px;
  background: #ca3e47;
  margin-right: -7px;
}
</style>

The above will result in the following:

<section class="demo2">
    <div class="test2">One</div>
    <div class="test2">Two</div>
    <div class="test2">Three</div>
    <div class="test2">Four</div>
</section>

## Omit the closing tag

With HTML5 we no longer _have_ to add closing tags. While this method will remove the unwanted space, it may introduce other awkward problems.

```html
<section>
    <div>One
    <div>Two
    <div>Three
    <div>Four
</section>
```

The above will result in the following:

<section class="demo">
    <div class="test">One
    <div class="test">Two
    <div class="test">Three
    <div class="test">Four
</section>

## Set the fontsize

<style>
section.demo3 {
    font-size: 0;
}
div.test3 {
    display: inline-block;
    padding: 10px;
    background: #ca3e47;
    font-size: calc(1rem + 0.5vw);
}
</style>

```css
section {
 font-size: 0;
}
div {
 font-size: 16px;
}
```

The above will result in the following:

<section class="demo3">
    <div class="test3">One</div>
    <div class="test3">Two</div>
    <div class="test3">Three</div>
    <div class="test3">Four</div>
</section>
