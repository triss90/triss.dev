<?php $description = "Contact";?>
<?php include '../_inc/header.php';?>
<?php include '../_inc/icons.php';?>

<div class="contact">

<header role="banner" class="blog">
    <?php include '../_inc/navigation.php';?>
    <div class="central center">
        <h1>Contact Tristan</h1>
    </div>
</header>

<main id="main">
    <div class="central space center">

        <?php if (isset($_GET['m'])) {?>
            <div role="status" aria-live="polite">
                <div class="message award">
                    <p><?php echo $_GET['m']; ?></p>
                </div>
            </div>
        <?php }?>

        <form action="sendmail.php" method="POST">

            <script src="https://js.hcaptcha.com/1/api.js" async defer></script>

            <fieldset>

                <label for="name">Name <span class="required">(required)</span></label>
                <span><input type="text" name="your-name" value="" size="40" id="name" aria-label="Name" aria-required="true" aria-invalid="false" required placeholder="Your name here"></span>

                <label for="e-mail">Email address <span class="required">(required)</span></label>
                <span><input type="email" name="your-email" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" size="40" id="e-mail" aria-label="Email address" aria-required="true" aria-invalid="false" required placeholder="Your email here"></span>

                <label for="message">Message <span class="required">(required)</span></label>
                <textarea name="message" rows="6" cols="25" id="message" aria-label="Message" aria-required="true" aria-invalid="false" required placeholder="Your message here"></textarea>

                <!-- <div class="h-captcha" data-sitekey="582fd987-6bdc-408d-b80b-9f378d9496dc" data-callback="correctCaptcha"></div><br> -->

            </fieldset>

            <input type="submit" id="contactSubmit" disabled value="Send message">
            <input type="reset" value="Clear contact form">
        </form>
        <br><br><br>
        <hr class="stop">
        <br>
        <p>You can also reach Tristan directly at <a href="mailto:tristan@white.chat">tristan@white.chat</a>, or on Twitter <a href="https://twitter.com/triss90" target="_blank" rel="noopener">@triss90</a>.</p>
        <br>
        <hr class="stop">
    </div>
</main>

<script>
// function correctCaptcha() {
//     const contactSubmit = document.getElementById('contactSubmit');
//     contactSubmit.classList.remove('disabled');
//     contactSubmit.removeAttribute('disabled');
// }
</script>

<?php include '../_inc/footer.php';?>

</div>