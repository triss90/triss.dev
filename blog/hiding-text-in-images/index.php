<?php
    $activePage = "blog";
    $description = 'Learn how to obscure information in images';
?>
<!DOCTYPE html>
<html lang="en">
<!--
	What's up, Inspector Gadget? 🕵️‍♂️
	Go on then! I've made it convenient for you, view the source here: https://github.com/triss90/triss.dev
-->

<head>
    <?php include '../../inc/meta.php'; ?>
</head>

<body>
    <a id="top" href="#main">skip to content</a>
    <?php include '../../inc/themes.php'; ?>
    <div class="article-progress">
        <div class="article-progress-inner"></div>
    </div>
    <?php include '../../inc/navigation.php'; ?>

    <main id='post'>
        <div class='container'>
            <div class='row'>
                <div class='tiny-12 small-10 medium-8 small-offset-1 medium-offset-2'>
                    <h1>Hiding Text in Images</h1>
<p class='timestamp'><time datetime='30-07-2019'>30-07-2019</time></p>
<hr>
<p>The best way to hide sensitive information is usually to hide it in plain sight.
A wonderful way to do this, in an increasingly online world, is to simply embed sensitive text information
inside one of the possibly thousands of images you already have.</p>
<p>There are many online tools for this, but why go through the trouble,
and possible security risks by uploading your images, when you can simply do it on your own computer.</p>
<h2>Mac</h2>
<p>To easily combine two files on macOS simply use the <code>cat</code> command like so:</p>
<pre><code class="language-cmd">cat image.jpg text.txt &gt; hidden.jpg
</code></pre>
<p>To the untrained eye, the image will look no different than before.
To see the hidden text, simply inspect the image in a text editor and scroll to the bottom.</p>
<pre><code class="language-text">...
...
...
A‚[‡†'s=_5÷KﬂIﬂı∞&quot;m◊ÍqÄøõ”9Ùâ%~¿Zb'[pƒ¡Ò`_Ω=hú?œÅ‹W.·¯ƒ≠Fvgv—ú!∂;th‚à±U ‘‰h
õ%¶‹Ûﬂ6§ÕO∑Ìÿ·}Wç{9ó•Îö}ÇÒ,©[˜ZNÓ›&gt;&lt;v,z’»1[	tÄl◊Vk£;ó‘≠]ŸﬂÏ8~∏u‚®1:ÅnLÁƒ˙à¶Ê&lt;∑e”')  `€Ò√o^5jlìÅdfSH ¸WN5¸ÂgÍÎ”Ó§øÁ‚qØ∂™‹…A	»JØ04Ç¯Ç•õ◊Yb’ÛïÌ«rÂË1+ß—»NSú^ Œø∏§~ÌéÅ^l˚±√Î'ç{¿5»≤·ïÄ› ›µ¥nÌÜˆÌ¬f·ÏŸÚë]®K˙Ë¥µTµA◊x¿≠9v-jxœ.Ì/≠|}ˆl(Æ]∆ UfÍ§◊†\Vøa?rVñh‡|˘˙Î+‰Ñ4ûITñâÎsùŒFXl◊äMõ“ûØ=g¬ßø§ÚrËÚ .YÛ≥”	„PUbªómZ}&lt;ì˜ƒˇ&gt;∂ïƒ¨ï
    IENDÆB`ÇThis is a secrect text
</code></pre>
<h2>Windows</h2>
<p>To easily combine two files on Windows simply use the <code>copy</code> command like so:</p>
<pre><code class="language-cmd">copy /b image.jpg + text.txt hidden.jpg
</code></pre>
<p>As with the Mac, you won't be able to tell the difference between the images.
To see the hidden text, simply inspect the image in a text editor and scroll to the bottom.</p>
<pre><code class="language-text">...
...
...
A‚[‡†'s=_5÷KﬂIﬂı∞&quot;m◊ÍqÄøõ”9Ùâ%~¿Zb'[pƒ¡Ò`_Ω=hú?œÅ‹W.·¯ƒ≠Fvgv—ú!∂;th‚à±U ‘‰h
õ%¶‹Ûﬂ6§ÕO∑Ìÿ·}Wç{9ó•Îö}ÇÒ,©[˜ZNÓ›&gt;&lt;v,z’»1[	tÄl◊Vk£;ó‘≠]ŸﬂÏ8~∏u‚®1:ÅnLÁƒ˙à¶Ê&lt;∑e”')  `€Ò√o^5jlìÅdfSH ¸WN5¸ÂgÍÎ”Ó§øÁ‚qØ∂™‹…A	»JØ04Ç¯Ç•õ◊Yb’ÛïÌ«rÂË1+ß—»NSú^ Œø∏§~ÌéÅ^l˚±√Î'ç{¿5»≤·ïÄ› ›µ¥nÌÜˆÌ¬f·ÏŸÚë]®K˙Ë¥µTµA◊x¿≠9v-jxœ.Ì/≠|}ˆl(Æ]∆ UfÍ§◊†\Vøa?rVñh‡|˘˙Î+‰Ñ4ûITñâÎsùŒFXl◊äMõ“ûØ=g¬ßø§ÚrËÚ .YÛ≥”	„PUbªómZ}&lt;ì˜ƒˇ&gt;∂ïƒ¨ï
    IENDÆB`ÇThis is a secrect text
</code></pre>

                </div>
            </div>
        </div>
    </main>

    <script src='../../assets/js/article.min.js'></script>
    <script src='../../assets/js/vendor/highlight.pack.js'></script>
    <script>
    hljs.initHighlightingOnLoad();
    </script>

    <?php include '../../inc/footer.php'; ?>
    <?php include '../../inc/scripts.php'; ?>
</body>

</html>