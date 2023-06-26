<?php $description = "Blog - 10"; ?>
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
                <!-- Page Content START --><li><h3><a href='/../blog/html-5-2-native-modal'>HTML 5.2 Native modal</a></h3>
<time class='post-date' datetime='2018-04-23'>2018-04-23</time>
<span class='categories'>html, javascript</span>
<hr>
</li><li><h3><a href='/../blog/svg-header-waves'>SVG Header Waves</a></h3>
<time class='post-date' datetime='2018-04-20'>2018-04-20</time>
<span class='categories'>svg, php</span>
<hr>
</li><li><h3><a href='/../blog/css-variables'>CSS Variables</a></h3>
<time class='post-date' datetime='2017-01-03'>2017-01-03</time>
<span class='categories'>css</span>
<hr>
</li><li><h3><a href='/../blog/pure-css-line-numbers'>Pure CSS Line Numbers</a></h3>
<time class='post-date' datetime='2016-07-15'>2016-07-15</time>
<span class='categories'>css, html</span>
<hr>
</li><li><h3><a href='/../blog/responsive-videos-in-html'>Responsive Videos in HTML</a></h3>
<time class='post-date' datetime='2015-12-01'>2015-12-01</time>
<span class='categories'>css, html</span>
<hr>
</li><!-- Pagination START --><nav class='pagination' aria-label='Pagination'>
<ul>
<li><a href='/../blog/9/' aria-label='Prev Page' title='Previous page'>←</a></li> <li><a href='/../blog/1/' aria-label='Page 1'>1</a></li> <li><span>...</span></li> <li><a href='/../blog/8/' aria-label='Page 8'>8</a></li> <li><a href='/../blog/9/' aria-label='Page 9'>9</a></li> <li><a href='/../blog/10/' aria-label='Page 10' aria-current='page'>10</a></li> <li><a href='/../blog/11/' aria-label='Page 11'>11</a></li> <li><a href='/../blog/11/' aria-label='Next Page' title='Next page'>→</a></li> </ul>
</nav>

            </ul>
        </nav>
    </div>
</main>


<?php include('../../_inc/footer.php'); ?>
