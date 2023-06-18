<?php 
    $description = "Blog - %%pageNumber%%";
?>
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
            <ul id="postsList"></ul>
        </nav>
    </div>
</main>


<script src="https://cdn.jsdelivr.net/npm/fuse.js/dist/fuse.js"></script>
<script src="/assets/js/search.js"></script>

<?php include('../../_inc/footer.php'); ?>
