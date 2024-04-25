<?php
    $activePage = "about";
    $description = "A Systems Engineer with flair for Front-End UI/UX based in Aarhus Denmark";
?>
<!DOCTYPE html>
<html lang="en">
<!--
	What's up, Inspector Gadget? 🕵️‍♂️
	Go on then! I've made it convenient for you, view the source here: https://github.com/triss90/triss.dev

    Lighthouse scores (24/04/2024):
    Performance: 100
    Accessibility: 100
    Best Practices: 100
    SEO: 100
-->

<head>
    <?php include '../inc/meta.php'; ?>
</head>

<body>
    <?php include '../inc/themes.php'; ?>
    <?php include '../inc/navigation.php'; ?>

    <main>
        <div class="container">

            <header id="top" class="hero small">
                <div class="row">
                    <div class="tiny tiny-center small-start">
                        <h1 class="title">About me.</h1>
                        <p class="subtitle">I'm a Systems Engineer with flair for Front-End UI/UX based in Aarhus, Denmark.</p>
                    </div>
                </div>
            </header>

            <section id="about">
                <div class="row">
                    <div class="tiny tiny-center small-start">
                        <p>Today I co-own and work at ServicePoint A/S, primarily focusing on developing and mainting cloud infrastructure at <a href="https://cloudservers.dk" target="_blank">cloudservers.dk</a> and building management development at <a href="https://flowsense.dk" target="_blank">flowsense.dk</a>.</p>
                        <p>Building the right foundation to ongoing optimization and support. In short, I try to make the web a better place.</p>
                        <p>I have worked with corporations, institutions and startups in a wide range of industries, spanning a number of European countries.</p>
                        <p>See small bits of my experimental work on
                            <a href="https://codepen.io/triss90/" target="_blank" rel="noopener">Codepen</a>, projects on
                            <a href="https://github.com/triss90" target="_blank" rel="noopener">GitHub</a>, thoughts on my
                            <a href="/blog">Blog</a> and some of my work <a href="/projects">here</a>.
                        </p>
                        <p>You can reach me directly at <a href="mailto:tristan@white.chat">tristan@white.chat</a>, or on LinkedIn <a href="https://www.linkedin.com/in/tristanoliverwhite/" target="_blank" rel="noopener">@tristanoliverwhite</a>.</p>
                    </div>
                </div>
            </section>

        </div>

    </main>

    <?php include '../inc/footer.php'; ?>
    <?php include '../inc/scripts.php'; ?>
</body>

</html>