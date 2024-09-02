<?php
    $activePage = "blog";
    $description = 'Launching my newest personal project, Particle Firework';
?>
<!DOCTYPE html>
<html lang="en">
<!--
	What's up, Inspector Gadget? 🕵️‍♂️
	Go on then! I've made it convenient for you, view the source here: https://github.com/triss90/triss.dev
-->

<head>
    <?php include '../../inc/meta.php'; ?>
</head>

<body>
    <a id="top" href="#main">skip to content</a>
    <?php include '../../inc/themes.php'; ?>
    <div class="article-progress">
        <div class="article-progress-inner"></div>
    </div>
    <?php include '../../inc/navigation.php'; ?>

    <main id='post'>
        <div class='container'>
            <div class='row'>
                <div class='tiny-12 small-10 medium-8 small-offset-1 medium-offset-2'>
                    <h1 class="post-transition-end">Launching ParticleFirework.js</h1>
<p class='timestamp'><time datetime='September 2, 2024'>September 2, 2024</time></p><hr>
<p>I’m excited to announce a new addition to the <a href="https://webbox.dev/">Webbox</a> family: <a href="https://webbox.dev/particles/">ParticleFirework.js</a> 🎉</p>
<p>ParticleFirework.js is a lightweight framework that makes it easy to add dynamic particle effects to your website. It’s simple to integrate, supports custom SVG particles, and allows you to create everything from subtle backgrounds to eye-catching animations with minimal effort.</p>
<p>Check it out <a href="https://webbox.dev/particles/">here</a> and see what you can create!</p>

                </div>
            </div>
        </div>
    </main>

    <script src='../../assets/js/article.min.js'></script>
    <script src='../../assets/js/vendor/highlight.pack.js'></script>
    <script>
    hljs.initHighlightingOnLoad();
    </script>

    <?php include '../../inc/footer.php'; ?>
    <?php include '../../inc/scripts.php'; ?>
</body>

</html>