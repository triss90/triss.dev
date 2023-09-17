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
                <!-- Page Content START --><li><h3><a href='/../blog/color-systems-with-css-color-mix'>Color systems with CSS color-mix</a></h3>
<time class='post-date' datetime='2023-05-17'>2023-05-17</time>
<span class='categories'>css</span>
<hr>
</li><li><h3><a href='/../blog/weekly-widget-toss-cart-animation'>Weekly Widget - "Toss" Add to Cart Animation</a></h3>
<time class='post-date' datetime='2023-05-10'>2023-05-10</time>
<span class='categories'>weekly widget, css, html, javascript</span>
<hr>
</li><li><h3><a href='/../blog/weekly-widget-css-skewed-graphic'>Weekly Widget - CSS Skewed Graphic</a></h3>
<time class='post-date' datetime='2023-04-03'>2023-04-03</time>
<span class='categories'>weekly widget, css, html</span>
<hr>
</li><li><h3><a href='/../blog/aspect-ratio-revisited'>Aspect Ratio Revisited</a></h3>
<time class='post-date' datetime='2023-03-28'>2023-03-28</time>
<span class='categories'>css</span>
<hr>
</li><li><h3><a href='/../blog/weekly-widget-css-coupon'>Weekly Widget - CSS Coupon</a></h3>
<time class='post-date' datetime='2023-03-27'>2023-03-27</time>
<span class='categories'>weekly widget, css, html</span>
<hr>
</li><!-- Pagination START --><nav class='pagination' aria-label='Pagination'>
<ul>
<li><a href='/../blog/2/' aria-label='Prev Page' title='Previous page'>←</a></li> <li><a href='/../blog/1/' aria-label='Page 1'>1</a></li> <li><a href='/../blog/2/' aria-label='Page 2'>2</a></li> <li><a href='/../blog/3/' aria-label='Page 3' aria-current='page'>3</a></li> <li><a href='/../blog/4/' aria-label='Page 4'>4</a></li> <li><a href='/../blog/5/' aria-label='Page 5'>5</a></li> <li><span>...</span></li> <li><a href='/../blog/11/' aria-label='Page 11'>11</a></li> <li><a href='/../blog/4/' aria-label='Next Page' title='Next page'>→</a></li> </ul>
</nav>

            </ul>
        </nav>
    </div>
</main>


<?php include('../../_inc/footer.php'); ?>
