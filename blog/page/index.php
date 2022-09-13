<?php
    $pageNumber = (int)$_GET['p'];
    $postsPerPage = 5; // Edit this to adjust posts per page
    if (!isset($pageNumber) || $pageNumber == "") {
        $pageNumber = 1;
    }
    $postEnd = ($postsPerPage * $pageNumber) - 1;
    $postStart = $postEnd - ($postsPerPage-1);
?>

<?php $description = "Blog - Page ".$pageNumber; ?>
<?php include('../../_inc/header.php'); ?>
<?php include('../../_inc/icons.php'); ?>

<header role="banner" class="blog">
    <?php include('../../_inc/navigation.php'); ?>
    <div class="central center">
        <h1>Tristan's blog</h1><br>
        <a class="rss-link" href="https://triss.dev/feed/" title="RSS Feed" target="_blank" rel="noopener"><svg class="icon icon-rss"><use xlink:href="#icon-rss"></use></svg></a>
        <?php include('../../_inc/search.php'); ?>
    </div>
</header>

<main id="main">
    <div class="central space">
        <nav aria-label="posts"><ul id="postsList"></ul></nav>
    </div>
</main>

<script>
    function loadJSON(callback) {

        var xobj = new XMLHttpRequest();
        xobj.overrideMimeType("application/json");
        xobj.open('GET', '../../post_feed.json?v=<?php echo time(); ?>', true);
        xobj.onreadystatechange = function () {
            if (xobj.readyState == 4 && xobj.status == "200") {
                callback(xobj.responseText);
            }
        };
        xobj.send(null);
    }

    function init() {

        var postsList = document.getElementById('postsList');

        loadJSON(function(response) {

            var post = JSON.parse(response);
            post = post.reverse();
            console.log(post);

            for (var i = <?php echo $postStart; ?>; i <= <?php echo $postEnd; ?>; i++) {
                var postTitle = post[i][0];
                var postSlug = post[i][1];
                var postDate = post[i][2];
                var postCategories = post[i][3];
                var postPath = post[i][4];
                var elSplitter = document.createElement("hr");
                var elTime = document.createElement("time");
                elTime.setAttribute("class", "post-date");
                elTime.setAttribute("datetime", postDate);
                elTime.innerText = postDate;
                var elCat = document.createElement("span");
                elCat.classList.add("categories");
                elCat.innerText = " " + postCategories;
                var elLink = document.createElement("a");
                elLink.setAttribute('href', '/blog/'+postPath);
                elLink.innerText = postTitle;
                var elHeader = document.createElement("h3");
                elHeader.appendChild(elLink);
                var elList = document.createElement("li");
                elList.appendChild(elHeader);
                elList.appendChild(elTime);
                elList.appendChild(elCat);
                elList.appendChild(elSplitter);
                postsList.appendChild(elList);
            }
        });
    }

    function ready(fn) {
        if (document.attachEvent ? document.readyState === "complete" : document.readyState !== "loading"){
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
            init();
        }
    }

    ready();

</script>

<?php include('../../_inc/pagination.php'); ?>
<?php include('../../_inc/footer.php'); ?>
