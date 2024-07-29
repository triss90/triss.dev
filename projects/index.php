<?php
    $activePage = "projects";
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
                        <h1 class="title">Projects.</h1>
                        <p class="subtitle">I've worked on all kinds of projects, big and small. Dive in below and check some of them out!</p>
                    </div>
                </div>
            </header>

            <!-- Other Projects -->
            <section id="projects_other">

                <div class="row">
                    <div class="tiny-12 small-10 medium-8 tiny-center small-start small-offset-1 medium-offset-2">

                        <div class="project animate">
                            <a href="https://senbee.com" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Senbee
                                </h2>
                            </a>
                            <br><small class="date">2024-<?php echo date("Y"); ?> · senbee.com</small>
                            <p class="description">Senbee provides a seamless experience by centralizing the management of services from multiple providers in one convenient location.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://co2.observer" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    CO2 Observer
                                </h2>
                            </a>
                            <br><small class="date">2023-<?php echo date("Y"); ?> · co2.observer</small>
                            <p class="description">Provides you with valuable insights into the performance and environmental impact of your website. By utilizing our scanner, you can test your websites to receive a comprehensive analysis, as well as a detailed assessment of the website's carbon footprint.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://colordrop.io" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    ColorDrop
                                </h2>
                            </a>
                            <br><small class="date">2015-<?php echo date("Y"); ?> · colordrop.io</small>
                            <p class="description">Explore thousands of color palettes or create your own. Ideal for designers and artists seeking inspiration. Start your color journey now!</p>
                        </div>

                        <div class="project animate">
                            <a href="https://leakedpassword.com" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Leaked Passwords
                                </h2>
                            </a>
                            <br><small class="date">2019-<?php echo date("Y"); ?> · leakedpassword.com</small>
                            <p class="description">Search across multiple data breaches to see if your pass has been compromised. Implement the API in your signup process to validate users' passwords.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://cloudservers.dk" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    CloudServers
                                </h2>
                            </a>
                            <br><small class="date">2021-<?php echo date("Y"); ?> · cloudservers.dk</small>
                            <p class="description">Global cloud infrastructure to develop, deploy and manage applications.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://cloudportal.dk" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    CloudPortal
                                </h2>
                            </a>
                            <br><small class="date">2020-<?php echo date("Y"); ?> · cloudportal.dk</small>
                            <p class="description">The future of IT outsourcing in the cloud.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://webbox.dev" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Webbox
                                </h2>
                            </a>
                            <br><small class="date">2020-<?php echo date("Y"); ?> · webbox.dev</small>
                            <p class="description">A collection of useful tools covering topics like web, network, design, security and many more.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://cloudnet.dk" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Cloudnet
                                </h2>
                            </a>
                            <br><small class="date">2019-<?php echo date("Y"); ?> · cloudnet.dk</small>
                            <p class="description">Probably Denmark's best and cheapest LiteSpeed cPanel webhotel.</p>
                        </div>


                        <div class="project animate">
                            <a href="https://sarcasticwhite.style" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Sarcastic White
                                </h2>
                            </a>
                            <br><small class="date">2023-<?php echo date("Y"); ?> · sarcasticwhite.style</small>
                            <p class="description">A cool and crisp color theme created around uncluttered design patterns to achieve optimal focus & readability.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://gridder.io" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Gridder
                                </h2>
                            </a>
                            <br><small class="date">2017-2023 · gridder.io</small>
                            <p class="description">A cool and crisp color theme created around uncluttered design patterns to achieve optimal focus & readability.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://darky.app" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    DarkyJS
                                </h2>
                            </a>
                            <br><small class="date">2023 · darky.app</small>
                            <p class="description">Add a dark mode to your website in seconds. No hassle, no reworking your entire codebase!</p>
                        </div>

                        <div class="project animate">
                            <a href="https://github.com/triss90/sortable.js" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    sortable.js
                                </h2>
                            </a>
                            <br><small class="date">2023 · Github</small>
                            <p class="description">sortable.js is a powerful, lightweight JS framework used for adding simple sorting controls to HTML tables.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://openl.ist" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Open List
                                </h2>
                            </a>
                            <br><small class="date">2020 · openl.ist</small>
                            <p class="description">The easy way to share lists width friends, family and co-workers.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://muds.io" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    MUDS Editor
                                </h2>
                            </a>
                            <br><small class="date">2019 · muds.io</small>
                            <p class="description">The lightest WYSIWYG editor on the internet.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://plaask.com" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Plaask
                                </h2>
                            </a>
                            <br><small class="date">2018 · plaask.com</small>
                            <p class="description">Notifications, share dialogs, subscription forms and popups.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://yirra.net" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Yirra
                                </h2>
                            </a>
                            <br><small class="date">2022 · yirra.net</small>
                            <p class="description">Free custom URL Shortener with analytics! Shortened URLs will never expire.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://scutum.pw" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Scutum
                                </h2>
                            </a>
                            <br><small class="date">2021-2023 · scutum.pw</small>
                            <p class="description">scutum.pw allows you to encrypt and transfer passwords and other sensitive data via a one-time link.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://html.digital" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    html.digital
                                </h2>
                            </a>
                            <br><small class="date">2021 · html.digital</small>
                            <p class="description">A reintepretaion of the browser's stylesheet.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://github.com/triss90/dotbot" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Dotbot
                                </h2>
                            </a>
                            <br><small class="date">2019 · Github</small>
                            <p class="description">A simple library that let's you create a randomised, dotted background-pattern on any given element on your website.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://codepen.io/triss90/pen/XNEdRe" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    CSS Radio Buttons
                                </h2>
                            </a>
                            <br><small class="date">2019 · CodePen</small>
                            <p class="description">Elegant, pure CSS radio buttons.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://dittesdilemma.dk" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Ditte's Dilemma
                                </h2>
                            </a>
                            <br><small class="date">2019 · dittesdilemma.dk</small>
                            <p class="description">A blog about overcoming obstacles and living an alternative life, marked by chronic pain.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://cutandmove.dk/" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Cut And Move
                                </h2>
                            </a>
                            <br><small class="date">2020 · cutandmove.dk</small>
                            <p class="description">Jeg kører ud til virksomheder med min mobile frisørsalon. Medarbejderen booker via mit system og afregner direkte hos mig.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://wordboss.de" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    WordBoss
                                </h2>
                            </a>
                            <br><small class="date">2018 · wordboss.de</small>
                            <p class="description">WordBoss is an owner-run company for professional translations and language services. In their role as translation specialists, they have been a reliable business partner for more than 20 years.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://codepen.io/triss90/pen/ZZmbVx" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Terminal Portfolio
                                </h2>
                            </a>
                            <br><small class="date">2019 · CodePen</small>
                            <p class="description">A Javascript powered terminal portfolio. Navigate the portfolio using commands.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://compressionbear.com" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Compressionbear
                                </h2>
                            </a>
                            <br><small class="date">2019 · compressionbear.com</small>
                            <p class="description">Make your images ready for the internet by compressing them by up to 90%, all without loosing quality.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://www.iconfinder.com/iconsets/flaticons-1" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Flat Icons
                                </h2>
                            </a>
                            <br><small class="date">2015 · Iconfinder</small>
                            <p class="description">Make your design process a breeze with these 68 carefully crafted icons.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://github.com/triss90/hover-effects" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    CSS Hover Effects
                                </h2>
                            </a>
                            <br><small class="date">2015 · Iconfinder</small>
                            <p class="description">A compilation of css hover effects ranging from rotate effects to bounce effects and many more.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://mrkdwn.net" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Mrkdwn
                                </h2>
                            </a>
                            <br><small class="date">2019 · mrkdwn.net</small>
                            <p class="description">Mrkdwn is a free and open-source reference guide that explains how to use Markdown, the simple and easy-to-use markup language you can use to format virtually any document.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://codepen.io/triss90/pen/adb63fdc530050cd75f6b26b0f4cb573" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Sticky Navigation
                                </h2>
                            </a>
                            <br><small class="date">2018 · CodePen</small>
                            <p class="description">A navigation example that sticks when the user has scrolled to a certain point.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://github.com/triss90/masonry" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Masonry
                                </h2>
                            </a>
                            <br><small class="date">2015-2017 · Github</small>
                            <p class="description">A lightweight, responsive Masonry grid framework.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://github.com/triss90/sceletus.css" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Sceletus
                                </h2>
                            </a>
                            <br><small class="date">2015 · Github</small>
                            <p class="description">A simple, lightweight, responsive css-framework inspired by bootstrap, pure, skeleton and foundation.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://gum.co/iewNgu" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Food Icons
                                </h2>
                            </a>
                            <br><small class="date">2017 · Gumroad</small>
                            <p class="description">Designing a food app? Make your design process a breeze with these carefully crafted icons. The collection includes 12 uniquely designed food icons.</p>
                        </div>

                        <div class="project animate">
                            <a href="http://pc123.dk/" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    PC123
                                </h2>
                            </a>
                            <br><small class="date">2019-<?php echo date("Y"); ?> · pc123.dk</small>
                            <p class="description">A Teamviewer remote control website, that lets users download and start a Teamviewer session quickly and smoothly.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://codepen.io/triss90/pen/bZaQYJ" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    CSS line numbers
                                </h2>
                            </a>
                            <br><small class="date">2019 · CodePen</small>
                            <p class="description">Pure CSS line numbers, made with "counter-reset" and "counter-increment".</p>
                        </div>

                        <div class="project animate">
                            <a href="https://codepen.io/triss90/pen/gMwRXQ" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Simplistic Dialog
                                </h2>
                            </a>
                            <br><small class="date">2019 · CodePen</small>
                            <p class="description">A simple, yet powerful jQuery modal.</p>
                        </div>

                        <div class="project animate">
                            <a href="https://gumroad.com/l/gfVN" target="_blank" rel="noopener">
                                <h2 class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                    Wireframe UI Kit
                                </h2>
                            </a>
                            <br><small class="date">2017 · Gumroad</small>
                            <p class="description">Impress your clients with uniquely designed user-flows and wireframing UX elements. You'll receive 30 unique elements!</p>
                        </div>

                    </div>
                </div>

            </section>

        </div>

    </main>

    <?php include '../inc/footer.php'; ?>
    <?php include '../inc/scripts.php'; ?>
</body>

</html>