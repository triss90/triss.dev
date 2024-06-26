---
layout: post
title: Hiding Text in Images
slug: hiding-text-in-images
date: 2019-07-30
description: Learn how to obscure information in images
draft: false
category: security
tags:
  - encryption
---

# Hiding Text in Images

<p class='timestamp'><time datetime='30-07-2019'>30-07-2019</time></p>
<hr>

The best way to hide sensitive information is usually to hide it in plain sight.
A wonderful way to do this, in an increasingly online world, is to simply embed sensitive text information
inside one of the possibly thousands of images you already have.

There are many online tools for this, but why go through the trouble,
and possible security risks by uploading your images, when you can simply do it on your own computer.

## Mac

To easily combine two files on macOS simply use the `cat` command like so:

```cmd
cat image.jpg text.txt > hidden.jpg
```

To the untrained eye, the image will look no different than before.
To see the hidden text, simply inspect the image in a text editor and scroll to the bottom.

```text
...
...
...
A‚[‡†'s=_5÷KﬂIﬂı∞"m◊ÍqÄøõ”9Ùâ%~¿Zb'[pƒ¡Ò`_Ω=hú?œÅ‹W.·¯ƒ≠Fvgv—ú!∂;th‚à±U ‘‰h
õ%¶‹Ûﬂ6§ÕO∑Ìÿ·}Wç{9ó•Îö}ÇÒ,©[˜ZNÓ›><v,z’»1[	tÄl◊Vk£;ó‘≠]ŸﬂÏ8~∏u‚®1:ÅnLÁƒ˙à¶Ê<∑e”')  `€Ò√o^5jlìÅdfSH ¸WN5¸ÂgÍÎ”Ó§øÁ‚qØ∂™‹…A	»JØ04Ç¯Ç•õ◊Yb’ÛïÌ«rÂË1+ß—»NSú^ Œø∏§~ÌéÅ^l˚±√Î'ç{¿5»≤·ïÄ› ›µ¥nÌÜˆÌ¬f·ÏŸÚë]®K˙Ë¥µTµA◊x¿≠9v-jxœ.Ì/≠|}ˆl(Æ]∆ UfÍ§◊†\Vøa?rVñh‡|˘˙Î+‰Ñ4ûITñâÎsùŒFXl◊äMõ“ûØ=g¬ßø§ÚrËÚ .YÛ≥”	„PUbªómZ}<ì˜ƒˇ>∂ïƒ¨ï
    IENDÆB`ÇThis is a secrect text
```

## Windows

To easily combine two files on Windows simply use the `copy` command like so:

```cmd
copy /b image.jpg + text.txt hidden.jpg
```

As with the Mac, you won't be able to tell the difference between the images.
To see the hidden text, simply inspect the image in a text editor and scroll to the bottom.

```text
...
...
...
A‚[‡†'s=_5÷KﬂIﬂı∞"m◊ÍqÄøõ”9Ùâ%~¿Zb'[pƒ¡Ò`_Ω=hú?œÅ‹W.·¯ƒ≠Fvgv—ú!∂;th‚à±U ‘‰h
õ%¶‹Ûﬂ6§ÕO∑Ìÿ·}Wç{9ó•Îö}ÇÒ,©[˜ZNÓ›><v,z’»1[	tÄl◊Vk£;ó‘≠]ŸﬂÏ8~∏u‚®1:ÅnLÁƒ˙à¶Ê<∑e”')  `€Ò√o^5jlìÅdfSH ¸WN5¸ÂgÍÎ”Ó§øÁ‚qØ∂™‹…A	»JØ04Ç¯Ç•õ◊Yb’ÛïÌ«rÂË1+ß—»NSú^ Œø∏§~ÌéÅ^l˚±√Î'ç{¿5»≤·ïÄ› ›µ¥nÌÜˆÌ¬f·ÏŸÚë]®K˙Ë¥µTµA◊x¿≠9v-jxœ.Ì/≠|}ˆl(Æ]∆ UfÍ§◊†\Vøa?rVñh‡|˘˙Î+‰Ñ4ûITñâÎsùŒFXl◊äMõ“ûØ=g¬ßø§ÚrËÚ .YÛ≥”	„PUbªómZ}<ì˜ƒˇ>∂ïƒ¨ï
    IENDÆB`ÇThis is a secrect text
```
