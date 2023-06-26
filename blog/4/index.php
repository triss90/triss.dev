<?php $description = "Blog - 4"; ?>
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
                <!-- Page Content START --><li><h3><a href='/../blog/css-color-scheme'>CSS color-scheme</a></h3>
<time class='post-date' datetime='2023-02-01'>2023-02-01</time>
<span class='categories'>html, css</span>
<hr>
</li><li><h3><a href='/../blog/selectmenu'>CSS selectmenu</a></h3>
<time class='post-date' datetime='2022-01-28'>2022-01-28</time>
<span class='categories'>html, css</span>
<hr>
</li><li><h3><a href='/../blog/specificity-on-the-web'>Specificity on the Web</a></h3>
<time class='post-date' datetime='2021-05-06'>2021-05-06</time>
<span class='categories'>css</span>
<hr>
</li><li><h3><a href='/../blog/hsl-simplified'>HSL Simplified</a></h3>
<time class='post-date' datetime='2021-03-22'>2021-03-22</time>
<span class='categories'>html, css</span>
<hr>
</li><li><h3><a href='/../blog/avif-image'>AVIF Image</a></h3>
<time class='post-date' datetime='2020-09-15'>2020-09-15</time>
<span class='categories'>html</span>
<hr>
</li><!-- Pagination START --><nav class='pagination' aria-label='Pagination'>
<ul>
<li><a href='/../blog/3/' aria-label='Prev Page' title='Previous page'>←</a></li> <li><a href='/../blog/1/' aria-label='Page 1'>1</a></li> <li><a href='/../blog/2/' aria-label='Page 2'>2</a></li> <li><a href='/../blog/3/' aria-label='Page 3'>3</a></li> <li><a href='/../blog/4/' aria-label='Page 4' aria-current='page'>4</a></li> <li><a href='/../blog/5/' aria-label='Page 5'>5</a></li> <li><a href='/../blog/6/' aria-label='Page 6'>6</a></li> <li><span>...</span></li> <li><a href='/../blog/11/' aria-label='Page 11'>11</a></li> <li><a href='/../blog/5/' aria-label='Next Page' title='Next page'>→</a></li> </ul>
</nav>

            </ul>
        </nav>
    </div>
</main>


<?php include('../../_inc/footer.php'); ?>
