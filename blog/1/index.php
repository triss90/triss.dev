<?php $description = "Blog - 1"; ?>
<?php include('../../_inc/header.php'); ?>
<?php include('../../_inc/icons.php'); ?>

<header role="banner" class="blog">
    <?php include('../../_inc/navigation.php'); ?>
    <div class="central center">
        <h1>Tristan's blog</h1><br>
        <a class="rss-link" href="../rss.xml" title="RSS Feed" target="_blank" rel="noopener"><svg class="icon icon-rss"><use xlink:href="#icon-rss"></use></svg></a>
        <?php include('../../_inc/search.php'); ?>
    </div>
</header>

<main id="main">
    <div class="central space">
        <nav aria-label="posts">
            <ul id="postsList">
                <!-- Page Content START --><li><h3><a href='/../blog/weekly-widget-self-coding-website'>Weekly Widget - Self-codeing Website</a></h3>
<time class='post-date' datetime='2023-06-26'>2023-06-26</time>
<span class='categories'>weekly widget, css, html</span>
<hr>
</li><li><h3><a href='/../blog/weekly-widget-css-star-rating'>Weekly Widget - Pure CSS Star Rating</a></h3>
<time class='post-date' datetime='2023-06-19'>2023-06-19</time>
<span class='categories'>weekly widget, css, html</span>
<hr>
</li><li><h3><a href='/../blog/weekly-widget-isometric-menu'>Weekly Widget - Isometric Menu</a></h3>
<time class='post-date' datetime='2023-06-12'>2023-06-12</time>
<span class='categories'>weekly widget, css, html</span>
<hr>
</li><li><h3><a href='/../blog/weekly-widget-hsla-editor'>Weekly Widget - HSLA editor</a></h3>
<time class='post-date' datetime='2023-06-05'>2023-06-05</time>
<span class='categories'>weekly widget, css, html, javascript</span>
<hr>
</li><li><h3><a href='/../blog/colordrop-release-2023'>ColorDrop Release 2023</a></h3>
<time class='post-date' datetime='2023-05-30'>2023-05-30</time>
<span class='categories'></span>
<hr>
</li><!-- Pagination START --><nav class='pagination' aria-label='Pagination'>
<ul>
<li><a href='/../blog/1/' aria-label='Page 1' aria-current='page'>1</a></li> <li><a href='/../blog/2/' aria-label='Page 2'>2</a></li> <li><a href='/../blog/3/' aria-label='Page 3'>3</a></li> <li><span>...</span></li> <li><a href='/../blog/11/' aria-label='Page 11'>11</a></li> <li><a href='/../blog/2/' aria-label='Next Page' title='Next page'>→</a></li> </ul>
</nav>

            </ul>
        </nav>
    </div>
</main>


<?php include('../../_inc/footer.php'); ?>
