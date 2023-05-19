---
title: Color systems with CSS color-mix
slug: color-systems-with-css-color-mix
date: 2023-05-17
categories: CSS
---

<style>
:root {
  --primary: #e62739;
  --primary-a90: color-mix(in srgb, var(--primary), transparent 10%);
  --primary-a80: color-mix(in srgb, var(--primary), transparent 20%);
  --primary-a50: color-mix(in srgb, var(--primary), transparent 50%);
  --secondary: #21A8A3;
  --secondary-a90: color-mix(in srgb, var(--secondary), transparent 10%);
  --secondary-a80: color-mix(in srgb, var(--secondary), transparent 20%);
  --secondary-a50: color-mix(in srgb, var(--secondary), transparent 50%);
  --dark: #19191a;
  --dark-a90: color-mix(in srgb, var(--dark), transparent 10%);
  --dark-a80: color-mix(in srgb, var(--dark), transparent 20%);
  --dark-a50: color-mix(in srgb, var(--dark), transparent 50%);
  --light: #f1f1f1;
  --light-a90: color-mix(in srgb, var(--light), transparent 10%);
  --light-a80: color-mix(in srgb, var(--light), transparent 20%);
  --light-a50: color-mix(in srgb, var(--light), transparent 50%);
}
.box-group {
  display: flex;
  margin-bottom: 1rem;
  overflow: hidden;
  border-radius: 0.5rem;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
}
.box {
  width: 25%;
  aspect-ratio: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  font-size: 65%;
  color: var(--light);
}
.box-group#light .box {
  color: var(--dark);
}
</style>

# Color systems with CSS color-mix()

<p class='timestamp'><time datetime='17-05-2023'>17-05-2023</time></p>
<hr>

With the advent of CSS4, we're introduced to the `color-mix()` function, which offers a powerful tool for web designers and developers. This function allows the mixing of two colors in a specified color space, providing a high degree of control over the resultant color.

The syntax for the `color-mix()` function is as follows:

```
color-mix(<colorspace> <color> [percentage], <color>)
```

The `<colorspace>` can be any one of `srgb`, `display-p3`, `a98-rgb`, `prophoto-rgb`, or `rec-2020`, each offering a different color gamut. The `<color>` values represent the two colors to be mixed, and the optional `[percentage]` value determines the proportion of the first color in the resultant color. If the `[percentage]` is not provided, the two colors are mixed equally.

For example, mixing red and blue equally in the sRGB color space can be achieved as follows:

```CSS
div {
  background-color: color-mix(in srgb, red, blue);
}
```

**Example:**

<div class="box" style="background-color:color-mix(in srgb, red, blue); box-shadow: 0 0 10px rgba(0,0,0,0.2); border-radius: 0.5rem"></div>

Or, to mix red and blue in the sRGB color space with red contributing 60% to the resultant color, you would use:

```CSS
div {
  background-color: color-mix(in srgb, red 60%, blue);
}
```

**Example:**

<div class="box" style="background-color: color-mix(in srgb, red 60%, blue); box-shadow: 0 0 10px rgba(0,0,0,0.2); border-radius: 0.5rem"></div>

## Color System

A color framework for a web project is essentially a set of guidelines that help maintain consistency, improve user experience, and emphasize the visual identity of a web application or site. It involves a systematic approach to using color throughout a web project, from the user interface design to the branding.

A color framework usually consists of a series of primary colors, secondary colors, dark and light colors, but also hues, or darker and lighter shades of these. `color-mix`can be used to achieve this while mainting very readable code:

```CSS
:root {
  --primary: #e62739;
  --primary-a90: color-mix(in srgb, var(--primary), transparent 10%);
  --primary-a80: color-mix(in srgb, var(--primary), transparent 20%);
  --primary-a50: color-mix(in srgb, var(--primary), transparent 50%);

  --secondary: #21A8A3;
  --secondary-a90: color-mix(in srgb, var(--secondary), transparent 10%);
  --secondary-a80: color-mix(in srgb, var(--secondary), transparent 20%);
  --secondary-a50: color-mix(in srgb, var(--secondary), transparent 50%);

  --dark: #19191a;
  --dark-a90: color-mix(in srgb, var(--dark), transparent 10%);
  --dark-a80: color-mix(in srgb, var(--dark), transparent 20%);
  --dark-a50: color-mix(in srgb, var(--dark), transparent 50%);

  --light: #f1f1f1;
  --light-a90: color-mix(in srgb, var(--light), transparent 10%);
  --light-a80: color-mix(in srgb, var(--light), transparent 20%);
  --light-a50: color-mix(in srgb, var(--light), transparent 50%);
}
```

**Example:**

<div class="box-group">
  <div class="box" style="background-color: var(--primary)">var(--primary</div>
  <div class="box" style="background-color: var(--primary-a90)">var(--primary-a90)</div>
  <div class="box" style="background-color: var(--primary-a80)">var(--primary-a80)</div>
  <div class="box" style="background-color: var(--primary-a50)">var(--primary-a50)</div>
</div>
<div class="box-group">
  <div class="box" style="background-color: var(--secondary)">var(--secondary</div>
  <div class="box" style="background-color: var(--secondary-a90)">var(--secondary-a90)</div>
  <div class="box" style="background-color: var(--secondary-a80)">var(--secondary-a80)</div>
  <div class="box" style="background-color: var(--secondary-a50)">var(--secondary-a50)</div>
</div>
<div class="box-group">
  <div class="box" style="background-color: var(--dark)">var(--dark</div>
  <div class="box" style="background-color: var(--dark-a90)">var(--dark-a90)</div>
  <div class="box" style="background-color: var(--dark-a80)">var(--dark-a80)</div>
  <div class="box" style="background-color: var(--dark-a50)">var(--dark-a50)</div>
</div>
<div class="box-group" id="light">
  <div class="box" style="background-color: var(--light)">var(--light</div>
  <div class="box" style="background-color: var(--light-a90)">var(--light-a90)</div>
  <div class="box" style="background-color: var(--light-a80)">var(--light-a80)</div>
  <div class="box" style="background-color: var(--light-a50)">var(--light-a50)</div>
</div>

## My color system template

Presented below is my standardized color system framework, which I employ as a foundational template for every new project I undertake. It seamlessly incorporates native support for both light and dark mode.

```CSS
/* Base color scheme (fallback) */
:root {
  --color-1: #e62739; /* The primary color (var(--primary), var(--primary-a90), var(--primary-80), var(--primary-a50)) */
  --color-2: #21A8A3; /* The secondary color (var(--secondary), var(--secondary-a90), var(--secondary-80), var(--secondary-a50)) */
  --color-3: #19191a; /* Initial foreground color (var(--foreground), var(--foreground-a90), var(--foreground-80), var(--foreground-a50)) */
  --color-4: #f1f1f1; /* Initial background color (var(--background), var(--background-a90), var(--background-80), var(--background-a50)) */

  --primary: var(--color-1);
  --primary-a90: color-mix(in srgb, var(--primary), transparent 10%);
  --primary-a80: color-mix(in srgb, var(--primary), transparent 20%);
  --primary-a50: color-mix(in srgb, var(--primary), transparent 50%);

  --secondary: var(--color-2);
  --secondary-a90: color-mix(in srgb, var(--secondary), transparent 10%);
  --secondary-a80: color-mix(in srgb, var(--secondary), transparent 20%);
  --secondary-a50: color-mix(in srgb, var(--secondary), transparent 50%);

  --foreground: var(--color-3);
  --foreground-a90: color-mix(in srgb, var(--foreground), transparent 10%);
  --foreground-a80: color-mix(in srgb, var(--foreground), transparent 20%);
  --foreground-a50: color-mix(in srgb, var(--foreground), transparent 50%);

  --background: var(--color-4);
  --background-a90: color-mix(in srgb, var(--background), transparent 10%);
  --background-a80: color-mix(in srgb, var(--background), transparent 20%);
  --background-a50: color-mix(in srgb, var(--background), transparent 50%);
}

/* lightmode or fallback if user has no preference */
@media (prefers-color-scheme: light),(prefers-color-scheme: no-preference) {
  :root {
    --foreground: var(--color-3);
    --foreground-a90: color-mix(in srgb, var(--foreground), transparent 10%);
    --foreground-a80: color-mix(in srgb, var(--foreground), transparent 20%);
    --foreground-a50: color-mix(in srgb, var(--foreground), transparent 50%);

    --background: var(--color-4);
    --background-a90: color-mix(in srgb, var(--background), transparent 10%);
    --background-a80: color-mix(in srgb, var(--background), transparent 20%);
    --background-a50: color-mix(in srgb, var(--background), transparent 50%);
  }
}

/* darkmode */
@media (prefers-color-scheme: dark) {
  :root {
    --foreground: var(--color-4);
    --foreground-a90: color-mix(in srgb, var(--foreground), transparent 10%);
    --foreground-a80: color-mix(in srgb, var(--foreground), transparent 20%);
    --foreground-a50: color-mix(in srgb, var(--foreground), transparent 50%);

    --background: var(--color-3);
    --background-a90: color-mix(in srgb, var(--background), transparent 10%);
    --background-a80: color-mix(in srgb, var(--background), transparent 20%);
    --background-a50: color-mix(in srgb, var(--background), transparent 50%);
  }
}
```
