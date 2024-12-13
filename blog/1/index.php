<?php
    $activePage = "blog";
    $description = "Articles - 1"; 
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
                                <!-- Page Content START --><li><h2><a class='post-transition-start' href='/../blog/the-best-books-i-have-read-in-2024'>The Best Books I Have Read in 2024</a></h2>
<time class='post-date' datetime='December 13, 2024'>December 13, 2024</time>
<p class='excerpt'>The Best Books I Have Read in 2024</p>
<hr>
</li><li><h2><a class='post-transition-start' href='/../blog/a-lesson-learned-the-hard-way'>A Lesson Learned the Hard Way</a></h2>
<time class='post-date' datetime='October 17, 2024'>October 17, 2024</time>
<p class='excerpt'>A Lesson Learned the Hard Way</p>
<hr>
</li><li><h2><a class='post-transition-start' href='/../blog/launching-particle-firework'>Launching Particle Firework</a></h2>
<time class='post-date' datetime='September 2, 2024'>September 2, 2024</time>
<p class='excerpt'>Launching my newest personal project, Particle Firework</p>
<hr>
</li><li><h2><a class='post-transition-start' href='/../blog/announcing-senbee'>Announcing Senbee</a></h2>
<time class='post-date' datetime='August 9, 2024'>August 9, 2024</time>
<p class='excerpt'>Announcing my newest venture, Senbee</p>
<hr>
</li><li><h2><a class='post-transition-start' href='/../blog/css-only-scroll-into-view-effect'>CSS Only Scroll Into View Effect</a></h2>
<time class='post-date' datetime='June 8, 2024'>June 8, 2024</time>
<p class='excerpt'>Scroll elements into view with only 3 lines of css!</p>
<hr>
</li></ul>
</nav>
<nav class='pagination' aria-label='Pagination'>
<ul>
<li><a href='/../blog/1/' aria-label='Page 1' aria-current='page'>1</a></li> <li><a href='/../blog/2/' aria-label='Page 2'>2</a></li> <li><a href='/../blog/3/' aria-label='Page 3'>3</a></li> <li><span>...</span></li> <li><a href='/../blog/13/' aria-label='Page 13'>13</a></li> <li><a href='/../blog/2/' aria-label='Next Page' title='Next page'>→</a></li> </ul>

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