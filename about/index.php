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
    <a id="top" href="#main">skip to content</a>
    <?php include '../inc/themes.php'; ?>
    <?php include '../inc/navigation.php'; ?>

    <main id="main">
        <div class="container">

            <header class="hero small">
                <div class="row">
                    <div class="tiny-12 small-10 medium-8 tiny-center small-start small-offset-1 medium-offset-2">
                        <h1 class="title">About me.</h1>
                        <p class="subtitle">I'm an innovative technologist and co-owner at ServicePoint A/S, leading software and cloud development in Aarhus, Denmark.</p>
                    </div>
                </div>
            </header>

            <section id="about">
                <div class="row">
                    <div class="tiny-12 small-10 medium-8 tiny-center small-start small-offset-1 medium-offset-2">
                        <p>As co-owner of ServicePoint A/S, I dedicate my professional life to advancing cloud infrastructure and developing management solutions. I primarily focus on optimizing and enhancing our services at <a href="https://cloudservers.dk" target="_blank">cloudservers.dk</a> and <a href="https://flowsense.dk" target="_blank">flowsense.dk</a>.</p>
                        <p>My role involves laying robust foundations and providing ongoing optimization and support to ensure that our solutions not only meet but exceed the evolving needs of our clients. In essence, I'm committed to making the web a better, more efficient place.</p>
                        <p>My career has allowed me to collaborate with a diverse range of industries across Europe, working with everything from startups to large corporations and institutions. This experience has equipped me with a unique perspective and an adaptable skill set in the tech space.</p>
                        <p>Interested in a different side of my technical pursuits? Dive into my experimental projects on <a href="https://codepen.io/triss90/" target="_blank" rel="noopener">Codepen</a> or explore my open-source contributions on <a href="https://github.com/triss90" target="_blank" rel="noopener">GitHub</a>. I also share personal insights and updates on my <a href="/blog">Blog</a>, and feature some of my unique projects <a href="/projects">here</a>.</p>
                        <p>If you wish to get in touch, feel free to email me at <a href="mailto:tristan@white.chat">tristan@white.chat</a>, or connect with me on LinkedIn at <a href="https://www.linkedin.com/in/tristanoliverwhite/" target="_blank" rel="noopener">@tristanoliverwhite</a>.</p>
                    </div>
                </div>
            </section>

        </div>

    </main>

    <?php include '../inc/footer.php'; ?>
    <?php include '../inc/scripts.php'; ?>
</body>

</html>