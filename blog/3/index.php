<?php $description = "Blog - 3"; ?>
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
                <!-- Page Content START --><li><h3><a href='/../blog/weekly-widget-css-coupon'>Weekly Widget - CSS Coupon</a></h3>
<time class='post-date' datetime='2023-03-27'>2023-03-27</time>
<span class='categories'>weekly widget, css, html</span>
<hr>
</li><li><h3><a href='/../blog/units-on-the-web'>Units on the Web</a></h3>
<time class='post-date' datetime='2023-03-10'>2023-03-10</time>
<span class='categories'>css</span>
<hr>
</li><li><h3><a href='/../blog/animating-the-web'>Animating the Web</a></h3>
<time class='post-date' datetime='2023-02-23'>2023-02-23</time>
<span class='categories'>javascript, css, animation</span>
<hr>
</li><li><h3><a href='/../blog/smooth-scroll-to-top'>Smooth scroll-to-top</a></h3>
<time class='post-date' datetime='2023-02-21'>2023-02-21</time>
<span class='categories'>javascript</span>
<hr>
</li><li><h3><a href='/../blog/css-color-scheme'>CSS color-scheme</a></h3>
<time class='post-date' datetime='2023-02-01'>2023-02-01</time>
<span class='categories'>html, css</span>
<hr>
</li><!-- Pagination START --><nav class='pagination' aria-label='Pagination'>
<ul>
<li><a href='/../blog/2/' aria-label='Prev Page' title='Previous page'>←</a></li> <li><a href='/../blog/1/' aria-label='Page 1'>1</a></li> <li><a href='/../blog/2/' aria-label='Page 2'>2</a></li> <li><a href='/../blog/3/' aria-label='Page 3' aria-current='page'>3</a></li> <li><a href='/../blog/4/' aria-label='Page 4'>4</a></li> <li><a href='/../blog/5/' aria-label='Page 5'>5</a></li> <li><span>...</span></li> <li><a href='/../blog/10/' aria-label='Page 10'>10</a></li> <li><a href='/../blog/4/' aria-label='Next Page' title='Next page'>→</a></li> </ul>
</nav>

            </ul>
        </nav>
    </div>
</main>


<?php include('../../_inc/footer.php'); ?>
