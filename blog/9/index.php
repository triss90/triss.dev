<?php $description = "Blog - 9"; ?>
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
                <!-- Page Content START --><li><h3><a href='/../blog/maintaining-aspect-ration'>Maintaining Aspect Ratio</a></h3>
<time class='post-date' datetime='2019-06-07'>2019-06-07</time>
<span class='categories'>css</span>
<hr>
</li><li><h3><a href='/../blog/encode-decode-html'>Encode/Decode HTML</a></h3>
<time class='post-date' datetime='2019-06-01'>2019-06-01</time>
<span class='categories'>html, javascript</span>
<hr>
</li><li><h3><a href='/../blog/creating-a-js-library'>Creating a JS Library</a></h3>
<time class='post-date' datetime='2019-05-15'>2019-05-15</time>
<span class='categories'>javascript</span>
<hr>
</li><li><h3><a href='/../blog/html-details-summary'>HTML Details/Summary</a></h3>
<time class='post-date' datetime='2019-05-02'>2019-05-02</time>
<span class='categories'>html, css</span>
<hr>
</li><li><h3><a href='/../blog/animating-my-first-svg'>Animating My First SVG</a></h3>
<time class='post-date' datetime='2019-04-24'>2019-04-24</time>
<span class='categories'>svg, css</span>
<hr>
</li><!-- Pagination START --><nav class='pagination' aria-label='Pagination'>
<ul>
<li><a href='/../blog/8/' aria-label='Prev Page' title='Previous page'>←</a></li> <li><a href='/../blog/1/' aria-label='Page 1'>1</a></li> <li><span>...</span></li> <li><a href='/../blog/7/' aria-label='Page 7'>7</a></li> <li><a href='/../blog/8/' aria-label='Page 8'>8</a></li> <li><a href='/../blog/9/' aria-label='Page 9' aria-current='page'>9</a></li> <li><a href='/../blog/10/' aria-label='Page 10'>10</a></li> <li><a href='/../blog/11/' aria-label='Page 11'>11</a></li> <li><a href='/../blog/10/' aria-label='Next Page' title='Next page'>→</a></li> </ul>
</nav>

            </ul>
        </nav>
    </div>
</main>


<?php include('../../_inc/footer.php'); ?>
