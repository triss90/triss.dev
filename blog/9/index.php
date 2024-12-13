<?php
    $activePage = "blog";
    $description = "Articles - 9"; 
?>
<!DOCTYPE html>
<html lang="en">
<!--
	What's up, Inspector Gadget? 🕵️‍♂️
	Go on then! I've made it convenient for you, view the source here: https://github.com/triss90/triss.dev

    Lighthouse scores (24/04/2024):
    Performance: 100
    Accessibility: 100
    Best Practices: 100
    SEO: 100
-->

<head>
    <?php include '../../inc/meta.php'; ?>
</head>

<body>
    <a id="top" href="#main">skip to content</a>
    <?php include '../../inc/themes.php'; ?>
    <?php include '../../inc/navigation.php'; ?>

    <main>
        <div class="container">

            <header class="hero small">
                <div class="row">
                    <div class="tiny-12 small-10 medium-8 tiny-center small-start small-offset-1 medium-offset-2">
                        <h1 class="title">Articles.</h1>
                        <p class="subtitle">
                            <a class="icon rss" data-tooltip="RSS" data-tooltip-direction="top" data-tooltip-delay="0" href="/blog/rss.xml" title="RSS Feed" target="_blank" rel="noopener">
                                <svg style="width:1em;height:1em;position:relative;top:0.125em;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-rss">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    <path d="M4 4a16 16 0 0 1 16 16" />
                                    <path d="M4 11a9 9 0 0 1 9 9" />
                                </svg>
                            </a>
                            Some of my thoughts on the web, design and tech philosophy.
                            <?php include('../../inc/search.php'); ?>
                        </p>
                    </div>
                </div>
            </header>


            <section class="posts-container">
                <div class="row">
                    <div class="tiny-12 small-10 medium-8 tiny-center small-start small-offset-1 medium-offset-2">
                        <nav aria-label="posts">
                            <ul id="posts-list">
                                <!-- Page Content START --><li><h2><a class='post-transition-start' href='/../blog/css-darkmode'>CSS Darkmode</a></h2>
<time class='post-date' datetime='August 24, 2019'>August 24, 2019</time>
<p class='excerpt'>Learn how to add darkmode to your website</p>
<hr>
</li><li><h2><a class='post-transition-start' href='/../blog/css-checkbox-hack'>CSS Checkbox Hack</a></h2>
<time class='post-date' datetime='August 21, 2019'>August 21, 2019</time>
<p class='excerpt'>Learn how the infamous checkbox hack workds</p>
<hr>
</li><li><h2><a class='post-transition-start' href='/../blog/the-perfect-alt-text'>The Perfect Alt-text</a></h2>
<time class='post-date' datetime='August 14, 2019'>August 14, 2019</time>
<p class='excerpt'>Learn how to write the perfect</p>
<hr>
</li><li><h2><a class='post-transition-start' href='/../blog/writing-svg-path'>Writing SVG Paths</a></h2>
<time class='post-date' datetime='August 8, 2019'>August 8, 2019</time>
<p class='excerpt'>Learn how to write SVG by hand</p>
<hr>
</li><li><h2><a class='post-transition-start' href='/../blog/css-conical-gradients'>CSS Conical Gradients</a></h2>
<time class='post-date' datetime='August 7, 2019'>August 7, 2019</time>
<p class='excerpt'>Learn how to use CSS canonical gradients</p>
<hr>
</li></ul>
</nav>
<nav class='pagination' aria-label='Pagination'>
<ul>
<li><a href='/../blog/8/' aria-label='Prev Page' title='Previous page'>←</a></li> <li><a href='/../blog/1/' aria-label='Page 1'>1</a></li> <li><span>...</span></li> <li><a href='/../blog/7/' aria-label='Page 7'>7</a></li> <li><a href='/../blog/8/' aria-label='Page 8'>8</a></li> <li><a href='/../blog/9/' aria-label='Page 9' aria-current='page'>9</a></li> <li><a href='/../blog/10/' aria-label='Page 10'>10</a></li> <li><a href='/../blog/11/' aria-label='Page 11'>11</a></li> <li><span>...</span></li> <li><a href='/../blog/13/' aria-label='Page 13'>13</a></li> <li><a href='/../blog/10/' aria-label='Next Page' title='Next page'>→</a></li> </ul>

                            </ul>
                        </nav>
                    </div>
                </div>
            </section>

        </div>

    </main>

    <?php include '../../inc/footer.php'; ?>
    <?php include '../../inc/scripts.php'; ?>
</body>

</html>