<?php $description = "Blog - 6"; ?>
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
                <!-- Page Content START --><li><h3><a href='/../blog/css-target-trick'>CSS Target Trick</a></h3>
<time class='post-date' datetime='2019-10-02'>2019-10-02</time>
<span class='categories'>html, css</span>
<hr>
</li><li><h3><a href='/../blog/html-output-tag'>HTML Output Tag</a></h3>
<time class='post-date' datetime='2019-09-26'>2019-09-26</time>
<span class='categories'>html</span>
<hr>
</li><li><h3><a href='/../blog/html-progress-tag'>HTML Progress Tag</a></h3>
<time class='post-date' datetime='2019-09-19'>2019-09-19</time>
<span class='categories'>html</span>
<hr>
</li><li><h3><a href='/../blog/html-meter-tag'>HTML Meter Tag</a></h3>
<time class='post-date' datetime='2019-09-12'>2019-09-12</time>
<span class='categories'>html</span>
<hr>
</li><li><h3><a href='/../blog/html-wbr-tag'>HTML Wbr Tag</a></h3>
<time class='post-date' datetime='2019-09-05'>2019-09-05</time>
<span class='categories'>html</span>
<hr>
</li><!-- Pagination START --><nav class='pagination' aria-label='Pagination'>
<ul>
<li><a href='/../blog/5/' aria-label='Prev Page' title='Previous page'>←</a></li> <li><a href='/../blog/1/' aria-label='Page 1'>1</a></li> <li><span>...</span></li> <li><a href='/../blog/4/' aria-label='Page 4'>4</a></li> <li><a href='/../blog/5/' aria-label='Page 5'>5</a></li> <li><a href='/../blog/6/' aria-label='Page 6' aria-current='page'>6</a></li> <li><a href='/../blog/7/' aria-label='Page 7'>7</a></li> <li><a href='/../blog/8/' aria-label='Page 8'>8</a></li> <li><span>...</span></li> <li><a href='/../blog/11/' aria-label='Page 11'>11</a></li> <li><a href='/../blog/7/' aria-label='Next Page' title='Next page'>→</a></li> </ul>
</nav>

            </ul>
        </nav>
    </div>
</main>


<?php include('../../_inc/footer.php'); ?>
