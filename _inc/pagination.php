<?php
$fi = new FilesystemIterator("../_posts/", FilesystemIterator::SKIP_DOTS);
$postsTotal = (int)iterator_count($fi) + 1;
$pageMin = 1;
$pageMax = ceil($postsTotal / $postsPerPage);
$pagePrevious = $pageNumber - 1;
if ($pagePrevious < 1) {
    $pagePrevious = 1;
}
$pageNext = $pageNumber + 1;
if ($pageNext > $pageMax) {
    $pageNext = $pageMax;
}
?>

<nav id="pagination" class="central" aria-label="Pagination navigation">
    <ul>

        <?php if ($pageNumber != $pageMin && $pageNumber != $pageMin+1) {?>
            <li><a href="/blog/page/<?php echo $pageMin; ?>/" title="First page" aria-label="First page">&#171;</a></li>
        <?php } ?>

        <?php if ($pageNumber > $pageMin) {?>
            <li><a href="/blog/page/<?php echo $pagePrevious; ?>/" title="Previous page" aria-label="Previous page">&#8249;</a></li>
        <?php } ?>

        <?php if($pageNumber == $pageMin) { ?>
            <?php if($pageMax == 2) { ?>
                <li><a class="pagination-item current" href="/blog/page/<?php echo $pageNumber; ?>/" aria-label="Page <?php echo $pageNumber; ?>, Current Page" aria-current="true"><?php echo $pageNumber; ?></a></li>
                <li><a class="pagination-item" href="/blog/page/<?php echo $pageNumber+1; ?>/" aria-label="Goto Page <?php echo $pageNumber+1; ?>"><?php echo $pageNumber+1; ?></a></li>
            <?php } else if($pageMax == 1) { ?>
                <li><a class="pagination-item current" href="/blog/page/<?php echo $pageNumber; ?>/" aria-label="Page <?php echo $pageNumber; ?>, Current Page" aria-current="true"><?php echo $pageNumber; ?></a></li>
            <?php } else { ?>
                <li><a class="pagination-item current" href="/blog/page/<?php echo $pageNumber; ?>/" aria-label="Page <?php echo $pageNumber; ?>, Current Page" aria-current="true"><?php echo $pageNumber; ?></a></li>
                <li><a class="pagination-item" href="/blog/page/<?php echo $pageNumber+1; ?>/" aria-label="Goto Page <?php echo $pageNumber+1; ?>"><?php echo $pageNumber+1; ?></a></li>
                <li><a class="pagination-item" href="/blog/page/<?php echo $pageNumber+2; ?>/" aria-label="Goto Page <?php echo $pageNumber+2; ?>"><?php echo $pageNumber+2; ?></a></li>
            <?php } ?>
        <?php } else if($pageNumber == $pageMax) { ?>
            <?php if($pageMax == 2) { ?>
                <li><a class="pagination-item" href="/blog/page/<?php echo $pageNumber-1; ?>/" aria-label="Goto Page <?php echo $pageNumber-1; ?>"><?php echo $pageNumber-1; ?></a></li>
                <li><a class="pagination-item current" href="/blog/page/<?php echo $pageNumber; ?>/" aria-label="Page <?php echo $pageNumber; ?>, Current Page" aria-current="true"><?php echo $pageNumber; ?></a></li>
            <?php } else if($pageMax == 1) { ?>
                <li><a class="pagination-item current" href="/blog/page/<?php echo $pageNumber; ?>/" aria-label="Page <?php echo $pageNumber; ?>, Current Page" aria-current="true"><?php echo $pageNumber; ?></a></li>
            <?php } else { ?>
                <li><a class="pagination-item" href="/blog/page/<?php echo $pageNumber-2; ?>/" aria-label="Goto Page <?php echo $pageNumber-2; ?>"><?php echo $pageNumber-2; ?></a></li>
                <li><a class="pagination-item" href="/blog/page/<?php echo $pageNumber-1; ?>/" aria-label="Goto Page <?php echo $pageNumber-1; ?>"><?php echo $pageNumber-1; ?></a></li>
                <li><a class="pagination-item current" href="/blog/page/<?php echo $pageNumber; ?>/" aria-label="Page <?php echo $pageNumber; ?>, Current Page" aria-current="true"><?php echo $pageNumber; ?></a></li>
            <?php } ?>
        <?php } else { ?>
            <li><a class="pagination-item" href="/blog/page/<?php echo $pageNumber-1; ?>/" aria-label="Goto Page <?php echo $pageNumber-1; ?>" aria-current="true"><?php echo $pageNumber-1; ?></a></li>
            <li><a class="pagination-item current" href="/blog/page/<?php echo $pageNumber; ?>/" aria-label="Page <?php echo $pageNumber; ?>, Current Page"><?php echo $pageNumber; ?></a></li>
            <li><a class="pagination-item" href="/blog/page/<?php echo $pageNumber+1; ?>/" aria-label="Goto Page <?php echo $pageNumber+1; ?>" aria-current="true"><?php echo $pageNumber+1; ?></a></li>
        <?php } ?>

        <?php if ($pageNumber < $pageMax) {?>
            <li><a href="/blog/page/<?php echo $pageNext; ?>/" title="Next page" aria-label="Next page">&#8250;</a></li>
        <?php } ?>

        <?php if ($pageNumber != $pageMax && $pageNumber != $pageMax-1) {?>
            <li><a href="/blog/page/<?php echo $pageMax; ?>/" title="Last page" aria-label="Last page">&#187;</a></li>
        <?php } ?>

    </ul>
</nav>

