<?php include('../../_inc/header.php'); ?>
<?php include('../../_inc/icons.php'); ?>

<header role="banner" class="blog">
    <?php include('../../_inc/navigation.php'); ?>
    <div class="central center">
        <h1>Tristan's blog</h1>
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
        xobj.open('GET', '../post_feed.json', true);
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

            var results = [];
            var searchField = 5;
            var searchVal = "<?php echo $searchQuery; ?>";
            var searchValRegex = RegExp('/*'+searchVal+'/*','i');
            for (var i = 0; i < post.length; i++) {
                if (searchValRegex.test(post[i][searchField])) {
                    results.push(post[i]);
                }
            }
            if (results.length == 0) {
                var elLink = document.createElement("a");
                elLink.setAttribute('href', '/blog/' + postPath);
                elLink.innerText = postTitle;
                var elHeader = document.createElement("h3");
                elHeader.appendChild(elLink);
                var elList = document.createElement("li");
                elList.appendChild(elHeader);
                elList.appendChild(elTime);
                elList.appendChild(elSplitter);
                postsList.appendChild(elList);
            } else {
                for (var i = 0; i <= results.length; i++) {
                    var postTitle = results[i][0];
                    var postSlug = results[i][1];
                    var postDate = results[i][2];
                    var postCategories = results[i][3];
                    var postPath = results[i][4];
                    var elSplitter = document.createElement("hr");
                    var elTime = document.createElement("time");
                    elTime.setAttribute("class", "post-date");
                    elTime.setAttribute("datetime", postDate);
                    elTime.innerText = postDate;
                    var elLink = document.createElement("a");
                    elLink.setAttribute('href', '/blog/' + postPath);
                    elLink.innerText = postTitle;
                    var elHeader = document.createElement("h3");
                    elHeader.appendChild(elLink);
                    var elList = document.createElement("li");
                    elList.appendChild(elHeader);
                    elList.appendChild(elTime);
                    elList.appendChild(elSplitter);
                    postsList.appendChild(elList);
                }
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

<?php include('../../_inc/footer.php'); ?>
