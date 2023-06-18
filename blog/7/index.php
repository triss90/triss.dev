<?php $description = "Blog - 7"; ?>
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
                <!-- Page Content START --><li><h3><a href='/../blog/writing-svg-path'>Writing SVG Paths</a></h3>
<time class='post-date' datetime='2019-08-08'>2019-08-08</time>
<span class='categories'>svg</span>
<hr>
</li><li><h3><a href='/../blog/css-conical-gradients'>CSS Conical Gradients</a></h3>
<time class='post-date' datetime='2019-08-07'>2019-08-07</time>
<span class='categories'>css</span>
<hr>
</li><li><h3><a href='/../blog/html-datalist-element'>HTML Datalist Element</a></h3>
<time class='post-date' datetime='2019-08-03'>2019-08-03</time>
<span class='categories'>html</span>
<hr>
</li><li><h3><a href='/../blog/hiding-text-in-images'>Hiding Text in Images</a></h3>
<time class='post-date' datetime='2019-07-30'>2019-07-30</time>
<span class='categories'>encryption</span>
<hr>
</li><li><h3><a href='/../blog/html-input-patterns'>HTML Input Patterns</a></h3>
<time class='post-date' datetime='2019-07-17'>2019-07-17</time>
<span class='categories'>html</span>
<hr>
</li><!-- Pagination START --><nav class='pagination' aria-label='Pagination'>
<ul>
<li><a href='/../blog/6/' aria-label='Prev Page' title='Previous page'>←</a></li> <li><a href='/../blog/1/' aria-label='Page 1'>1</a></li> <li><span>...</span></li> <li><a href='/../blog/5/' aria-label='Page 5'>5</a></li> <li><a href='/../blog/6/' aria-label='Page 6'>6</a></li> <li><a href='/../blog/7/' aria-label='Page 7' aria-current='page'>7</a></li> <li><a href='/../blog/8/' aria-label='Page 8'>8</a></li> <li><a href='/../blog/9/' aria-label='Page 9'>9</a></li> <li><a href='/../blog/10/' aria-label='Page 10'>10</a></li> <li><a href='/../blog/8/' aria-label='Next Page' title='Next page'>→</a></li> </ul>
</nav>

            </ul>
        </nav>
    </div>
</main>


<?php include('../../_inc/footer.php'); ?>