---
layout: post
title: CSS Darkmode
slug: css-darkmode
date: 2019-08-24
description: Learn how to add darkmode to your website
draft: false
category: web development
tags:
  - css
---

# CSS Darkmode

<p class='timestamp'><time datetime='24-08-2019'>24-08-2019</time></p>
<hr>

I was messing around with native darkmode on the web the other day, and ended up implementing
`prefers-color-scheme` on <a href="https://mrkdwn.net">mrkdwn.net</a> as proof of concept.

`prefers-color-scheme` has three available keyword values:

- `no-preference` which indicates that the user has no preference, as to where the site should appear dark og light.
- `light` which indicates that the user prefers **light** mode
- `dark`, which indicates that the user prefers **dark** mode.

## Example

```css
/* Base color scheme (fallback) */
:root {
 --background-color: #fff;
 --primary-color: #157efb;
 --font-color: #151513;
 --border-color: #dfe1e7;
}

/* whitemode or fallback if user has no preference */
@media (prefers-color-scheme: light), (prefers-color-scheme: no-preference) {
 :root {
  --background-color: #fff;
  --primary-color: #157efb;
  --font-color: #151513;
  --border-color: #dfe1e7;
 }
}

/* darkmode */
@media (prefers-color-scheme: dark) {
 :root {
  --background-color: #1e1e1e;
  --primary-color: #157efb;
  --font-color: #dedede;
  --border-color: #000;
 }
}
```

### Update 17/5/2023

Using `color-mix` adds a whole new dimention to the usability

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
@media (prefers-color-scheme: background),(prefers-color-scheme: no-preference) {
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
@media (prefers-color-scheme: foreground) {
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

## Browser Support

The `prefers-color-scheme` media query is only supported by Chrome, Firefox and Safari and Opera.
This, however, should not stop you from implementing a similar solution on your website, as the site simply defaults to
"white" mode if it's not supported.

<p class="ciu_embed" data-feature="prefers-color-scheme" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=prefers-color-scheme">Media query to detect if the user has set their system to use a light or dark color theme.</a>
</p>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>
