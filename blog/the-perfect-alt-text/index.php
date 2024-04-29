<?php
    $activePage = "blog";
    $description = 'Learn how to write the perfect';
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
    <?php include '../../inc/themes.php'; ?>
    <div class="article-progress">
        <div class="article-progress-inner"></div>
    </div>
    <?php include '../../inc/navigation.php'; ?>

    <main id='post'>
        <div class='container'>
            <div class='row'>
                <div class='tiny-12 small-10 medium-8 small-offset-1 medium-offset-2'>
                    <h1>The Perfect Alt-text</h1>
<p class='timestamp'><time datetime='14-08-2019'>14-08-2019</time></p>
<hr>
<p>Writing proper and thorough alternative text (alt-text) for images on the web,
is not just important. It is vital for those who depend on screen readers for
navigating the web.</p>
<p>In spite of this, many publishers continue to include useless text
or neglect the alt-text entirely.</p>
<h2>So, how do you do it?</h2>
<p>Writing proper alt-text is, at its core, very simple. All you need to do,
is describe the image. E.g.: “Group of people on a train station.”.</p>
<p>A few things to avoid would be:</p>
<ul>
<li>Including the name of the photographer</li>
<li>Adding keywords for search engine optimization.</li>
<li>Saying &quot;Image of&quot; or &quot;Photo of&quot;.</li>
</ul>
<a href="https://axesslab.com/alt-texts/" target="_blank" rel="noopener" title="Article: Alt-texts: The Ultimate Guide">
Daniel Göransson published a wonderful article on the subject back in October 2017.
</a>

                </div>
            </div>
        </div>
    </main>

    <script src='../../assets/js/article.js'></script>
    <script src='../../assets/js/vendor/highlight.pack.js'></script>
    <script>
    hljs.initHighlightingOnLoad();
    </script>

    <?php include '../../inc/footer.php'; ?>
    <?php include '../../inc/scripts.php'; ?>
</body>

</html>