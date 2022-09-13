---
title: CSS Darkmode
slug: css-darkmode
date: 2019-08-24
categories: css
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
``` css
/* Base color scheme (fallback) */
:root {
    --background-color: #fff;
    --primary-color: #157efb;
    --font-color: #151513;
    --border-color: #dfe1e7;
}

/* whitemode or fallback if user has no preference */
@media (prefers-color-scheme: light), 
       (prefers-color-scheme: no-preference) {
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

## Browser Support
The `prefers-color-scheme` media query is only supported by Chrome, Firefox and Safari and Opera.
This, however, should not stop you from implementing a similar solution on your website, as the site simply defaults to
"white" mode if it's not supported.

<p class="ciu_embed" data-feature="prefers-color-scheme" data-periods="future_1,current,past_1,past_2" data-accessible-colours="false">
  <a href="https://caniuse.com/#feat=prefers-color-scheme">Media query to detect if the user has set their system to use a light or dark color theme.</a>
</p>
<script src="https://cdn.jsdelivr.net/gh/ireade/caniuse-embed/caniuse-embed.min.js"></script>

