<?php
    $activePage = "404";
    $description = "404 - Page could not be found";
?>
<!DOCTYPE html>
<html lang="en">

<!--
	What's up, Inspector Gadget? 🕵️‍♂️
    This page doesn't exist, but you can view the source here: https://github.com/triss90/triss.dev
-->

<head>
    <?php include '../inc/meta.php'; ?>
</head>

<body>
    <?php include '../inc/themes.php'; ?>
    <?php include '../inc/navigation.php'; ?>

    <header class="hero container">
        <div class="row">
            <div class="tiny tiny-center">
                <h1>404: Page not found :(</h1>
                <p>The page you are looking for does not exist.</p>
                <p><a href="/" title="Return to the previous page">&laquo; Go back</a></p>
            </div>
        </div>
    </header>

    <?php include '../inc/footer.php'; ?>
    <?php include '../inc/scripts.php'; ?>
</body>

</html>