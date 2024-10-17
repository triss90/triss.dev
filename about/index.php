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
                        <p class="subtitle">I'm an innovative technologist, CEO, and co-founder, dedicated to creating smarter digital solutions in Aarhus, Denmark.</p>
                    </div>
                </div>
            </header>

            <section id="about">
                <div class="row">
                    <div class="tiny-12 small-10 medium-8 tiny-center small-start small-offset-1 medium-offset-2">
                        <p>I'm Tristan White, CEO and co-founder of Senbee A/S, as well as CEO and partner at ServicePoint A/S. My work revolves around revolutionizing how people interact with buildings and how buildings connect with our environment. At Senbee, we create smarter, more intuitive spaces through technology, enhancing efficiency and user experience.</p>
                        <p>At ServicePoint A/S, I focus on delivering high-quality infrastructure and management solutions to help businesses thrive in the digital age. I'm committed to making both digital and physical environments smarter and more responsive to human needs.</p>
                        <p>Throughout my career, I've collaborated with a wide range of industries across Europe, from startups to large corporations and institutions. These experiences have given me a unique perspective and an adaptable skill set in the tech space.</p>
                        <p>Interested in exploring a different side of my technical pursuits? Dive into my experimental projects on <a href="https://codepen.io/triss90/" target="_blank" rel="noopener">Codepen</a> or explore my open-source contributions on <a href="https://github.com/triss90" target="_blank" rel="noopener">GitHub</a>. I also share personal insights and updates on my <a href="/blog">Blog</a>, and feature some of my unique projects <a href="/projects">here</a>.</p>
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