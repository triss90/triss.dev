---
title: Encode/Decode HTML
slug: encode-decode-html
date: 2019-06-01
categories: html, js
---

# Encode/Decode HTML
<p class='timestamp'><time datetime='01-06-2019'>01-06-2019</time></p>
<hr>

If you want to display html code on a website, you can't just type a `<` in you index.html and expect it to show up. You have to use an equivalent html entity instead.

## Client-side (Javascript)
The following javascript function is a handy way of encoding and decoding html, so you can display the code on your website.
``` javascript
window.htmlentities = {
    encode : function(str) {
        var buf = [];
        for (var i=str.length-1;i>=0;i--) {
            buf.unshift(['&#', str[i].charCodeAt(), ';'].join(''));
        }
        return buf.join('');
    },
    decode : function(str) {
        return str.replace(/&#(\d+);/g, function(match, dec) {
            return String.fromCharCode(dec);
        });
    }
};
```

### Encode
``` javascript
htmlentities.encode("Hello, this is a test stríng > < with characters that could break html. Therefore we convert it to its html characters.");
`````
**Output:**
_"Hello, this is a test str`&#237;`ng `&gt;` `&lt;` with characters that could break html. Therefore we convert it to its html characters."_


### Decode
``` javascript
htmlentities.decode("Hello, this is a test str&#237;ng &gt; &lt; with characters that could break html. Therefore we convert it to its html characters.");
```
**Output:**
_"Hello, this is a test stríng > < with characters that could break html. Therefore we convert it to its html characters."_

## Server-side (PHP)
If you need to convert html entities serverside, this can easily be done with PHP like so:

``` PHP
<?php
    $converted_html = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
    echo $converted_html; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
?>
```