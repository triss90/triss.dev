<?php
    $activePage = "blog";
    $description = 'Darky.js Release';
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
    <?php include '../../inc/themes.php'; ?>
    <?php include '../../inc/navigation.php'; ?>

    <main id='post'>
        <div class='container'>
            <div class='row'>
                <div class='tiny-12 small-10 medium-8 small-offset-1 medium-offset-2'>
                    <style>
img {
    max-width: 100%;
}
</style>
<h1>Darky.js Release</h1>
<p class='timestamp'><time datetime='2023-07-28'>2023-07-28</time></p><hr>
<p>After a lot of hard work and dedication, I'm pleased to present <a href="https://darky.app">Darky.js</a>, a new JavaScript library that enables dark mode on any website without any hassle or need to rework the existing codebase.</p>
<ul>
<li>Web: <a href="https://darky.app">https://darky.app</a>
</li>
<li>Github: <a href="https://github.com/triss90/Darky">https://github.com/triss90/Darky</a>
</li>
<li>NPM: <a href="https://www.npmjs.com/package/darkyjs">https://www.npmjs.com/package/darkyjs</a>
</li>
</ul>
<p><a href="https://darky.app">Darky.js</a> is a simple yet powerful tool that gives developers the capability to switch to a dark theme with just a few lines of code. It offers various customization options, making it adaptable to your design needs. <a href="https://darky.app">Darky.js</a> has been created with user experience in mind, making it a breeze to switch between light and dark themes.</p>
<p><img src="https://triss.dev/examples/darky-js-example.gif" alt="darky.js example" /></p>
<h2>Key features of Darky.js:</h2>
<ul>
<li>Easy Integration: It's as simple as embedding a JS file. No need to rewrite or redesign your existing codebase.</li>
<li>Customizable: The library provides various customization options for the dark mode button and background.</li>
<li>Save in Cookies: Option to save user's theme preference using cookies.</li>
<li>Auto Match OS Theme: <a href="https://darky.app">Darky.js</a> can automatically match the OS's color scheme preference.</li>
<li>Callbacks: It provides an optional callback function onChange that is triggered when the dark mode is toggled.</li>
</ul>
<p>With <a href="https://darky.app">Darky.js</a>, your website can now be friendlier to users' eyes during night-time browsing or for those who simply prefer darker themes. I encourage you to give it a try and look forward to seeing all the amazing things you will do with it.</p>
<p>I am eager to see your feedback and how I can improve <a href="https://darky.app">Darky.js</a> for you. Let's make the web a darker place together! Happy coding! 💻🌙</p>
<p>/Tristan White</p>

                </div>
            </div>
        </div>
    </main>

    <script src='../../assets/js/vendor/highlight.pack.js'></script>
    <script>
    hljs.initHighlightingOnLoad();
    </script>

    <?php include '../../inc/footer.php'; ?>
    <?php include '../../inc/scripts.php'; ?>
</body>

</html>