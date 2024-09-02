<?php
    $activePage = "home";
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
    <?php include 'inc/meta.php'; ?>
</head>

<body>
    <a id="top" href="#main">skip to content</a>
    <?php include 'inc/themes.php'; ?>
    <?php include 'inc/navigation.php'; ?>

    <main id="main">
        <div class=" container">
            <header class="hero">
                <div class="row">
                    <div class="tiny tiny-center small-start">
                        <p class="pretitle">Hi, my name is Tristan White</p>
                        <h1 class="title">I build websites.</h1>
                        <p class="subtitle">I'm a developer and co-founder of <a href="https://senbee.com/" target="_blank">Senbee</a>, a software company in Denmark. When I'm not <a href="/projects">building the web</a>, I occasionally write about it on my <a href="/blog">blog</a>.</p>
                    </div>
                </div>
            </header>

            <section id="projects">

                <div class="row">
                    <div class="tiny-12 small-6 tiny-center small-start">
                        <h2>Highlighted Projects</h2>
                        <br>
                    </div>
                    <div class="tiny-12 small-6 tiny-center small-end">
                        <br>
                        <p>
                            <a href="/projects">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="position: relative; top: 2px;" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 15l6 -6" />
                                    <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                    <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                </svg>
                                Explore all projects
                            </a>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <!-- Senbee -->
                    <div class="tiny-12 small-6 medium-4 large-4">
                        <div class="card animate senbee">
                            <a class="card-link" href="https://senbee.com" target="_blank" rel="noopener">
                                <div class="card-bg"></div>
                                <div class="card-title">Senbee</div>
                                <p class="card-description">Senbee places people at the heart of building interaction, automating and optimizing every aspect of how they experience a space for a smarter, more intuitive environment.</p>
                                <div class="card-footer"><span class="card-date">2024-<?php echo date("Y"); ?></span></div>
                            </a>
                        </div>
                    </div>

                    <!-- Leaked Password -->
                    <div class="tiny-12 small-6 medium-4 large-4">
                        <div class="card animate leakedpasswords">
                            <a class="card-link" href="https://leakedpassword.com" target="_blank" rel="noopener">
                                <div class="card-bg"></div>
                                <div class="card-title">Leaked Passwords</div>
                                <p class="card-description">Search multiple data sets to see if your password has been compromised.</p>
                                <div class="card-footer"><span class="card-date">2019-<?php echo date("Y"); ?></span></div>
                            </a>
                        </div>
                    </div>

                    <!-- ColorDrop -->
                    <div class="tiny-12 small-6 medium-4 large-4">
                        <div class="card animate colordrop">
                            <a class="card-link" href="https://colordrop.io" target="_blank" rel="noopener">
                                <div class="card-bg"></div>
                                <div class="card-title">ColorDrop</div>
                                <p class="card-description">Thousands of curated colors & palettes as well as numerous color tools.</p>
                                <div class="card-footer"><span class="card-date">2015-<?php echo date("Y"); ?></span></div>
                            </a>
                        </div>
                    </div>

                    <!-- CloudServers -->
                    <div class="tiny-12 small-6 medium-4 large-4">
                        <div class="card animate cloudservers">
                            <a class="card-link" href="https://cloudservers.dk" target="_blank" rel="noopener">
                                <div class="card-bg"></div>
                                <div class="card-title">CloudServers</div>
                                <p class="card-description">Global cloud infrastructure to develop, deploy and manage applications.</p>
                                <div class="card-footer"><span class="card-date">2021-<?php echo date("Y"); ?></span></div>
                            </a>
                        </div>
                    </div>

                    <!-- CO2 Observer -->
                    <div class="tiny-12 small-6 medium-4 large-4">
                        <div class="card animate co2observer">
                            <a class="card-link" href="https://co2.observer" target="_blank" rel="noopener">
                                <div class="card-bg"></div>
                                <div class="card-title">CO2 Observer</div>
                                <p class="card-description">Scan and estimate the carbon footprint of any website.</p>
                                <div class="card-footer"><span class="card-date">2023-<?php echo date("Y"); ?></span></div>
                            </a>
                        </div>
                    </div>

                    <!-- Webbox -->
                    <div class="tiny-12 small-6 medium-4 large-4">
                        <div class="card animate webbox">
                            <a class="card-link" href="https://webbox.dev" target="_blank" rel="noopener">
                                <div class="card-bg"></div>
                                <div class="card-title">Webbox</div>
                                <p class="card-description">A collection of useful tools covering topics like web, network, design, security and many more.</p>
                                <div class="card-footer"><span class="card-date">2020-<?php echo date("Y"); ?></span></div>
                            </a>
                        </div>
                    </div>

                    <!-- CloudPortal -->
                    <div class="tiny-12 small-6 medium-4 large-4">
                        <div class="card animate cloudportal">
                            <a class="card-link" href="https://cloudportal.dk" target="_blank" rel="noopener">
                                <div class="card-bg"></div>
                                <div class="card-title">CloudPortal</div>
                                <p class="card-description">The future of IT outsourcing in the cloud.</p>
                                <div class="card-footer"><span class="card-date">2020-<?php echo date("Y"); ?></span></div>
                            </a>
                        </div>
                    </div>

                    <!-- Cloudnet -->
                    <div class="tiny-12 small-6 medium-4 large-4">
                        <div class="card animate cloudnet">
                            <a class="card-link" href="https://cloudnet.dk" target="_blank" rel="noopener">
                                <div class="card-bg"></div>
                                <div class="card-title">Cloudnet</div>
                                <p class="card-description">Probably Denmark's best and cheapest LiteSpeed cPanel webhotel.</p>
                                <div class="card-footer"><span class="card-date">2019-<?php echo date("Y"); ?></span></div>
                            </a>
                        </div>
                    </div>

                    <!-- Sarcastic White -->
                    <div class="tiny-12 small-6 medium-4 large-4">
                        <div class="card animate sarcasticwhite">
                            <a class="card-link" href="https://sarcasticwhite.style" target="_blank" rel="noopener">
                                <div class="card-bg"></div>
                                <div class="card-title">Sarcastic White</div>
                                <p class="card-description">A color theme created around uncluttered design patterns, focus, readability and structure for code, syntax highlighting and UI components.</p>
                                <div class="card-footer"><span class="card-date">2023-<?php echo date("Y"); ?></span></div>
                            </a>
                        </div>
                    </div>

                </div>

            </section>

        </div>

    </main>

    <?php include 'inc/footer.php'; ?>
    <?php include 'inc/scripts.php'; ?>
</body>

</html>