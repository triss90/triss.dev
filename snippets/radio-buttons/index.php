<?php include('../../_inc/header.php'); ?>
<?php include('../../_inc/icons.php'); ?>

<style>
<?php include($_SERVER["DOCUMENT_ROOT"]."/assets/css/gridder.css"); ?>
<?php include($_SERVER["DOCUMENT_ROOT"]."/assets/css/snippet_radio-button.css"); ?>
pre:hover {
    left: 0;
    width: 100%;
}
h2 {
    font-size: 1.25rem;
}
p {
    font-size: 1rem;
}
</style>

<div class="snippets" >

    <header role="banner" class="snippets">
        <?php include('../../_inc/navigation.php'); ?>
        <div class="central center">
            <h1>Radio Buttons</h1>
            <br><br>
        </div>
    </header>

    <br><br>

    <main class="container" id="main" style="font-size:16px;">   
        <div class="row">
            <div class="tiny">
                <p>A web radio button is a round graphical user interface element allowing single-choice selection within a predefined set of options. Clicking a radio button deselects the previously chosen option, ensuring only one option is selected at a time.</p>
            </div>
        </div>   
        <div class="row tiny-center medium-start">
            <div class="tiny-12 huge-10 huge-offset-1">            
               
                <br>

                <fieldset>
      
                    <legend>Radio Buttons</legend>
                    
                    <div class="radio-row">
                        <div class="radio-wrapper">
                            <input type="radio" name="group" id="radio-1" />
                            <span aria-hidden="true"></span>
                        </div>
                        <label for="radio-1">Radio option one</label>
                    </div>

                    <div class="radio-row">
                        <div class="radio-wrapper">
                            <input type="radio" name="group" id="radio-2" />
                            <span aria-hidden="true"></span>
                        </div>
                        <label for="radio-2">Radio option Two</label>
                    </div>

                    <div class="radio-row">
                        <div class="radio-wrapper">
                            <input type="radio" name="group" id="radio-3" />
                            <span aria-hidden="true"></span>
                        </div>
                        <label for="radio-3">Radio option Three</label>
                    </div>

                </fieldset>

                <br>
                    
            </div>
        </div>

        <div class="row">
            <div class="tiny-12 huge-10 huge-offset-1">
                <h2>Markup (HTML)</h2>
<pre><code class="language-HTML">&#x3C;fieldset&#x3E;

    &#x3C;legend&#x3E;Radio Buttons&#x3C;/legend&#x3E;
    
    &#x3C;div class=&#x22;radio-row&#x22;&#x3E;
        &#x3C;div class=&#x22;radio-wrapper&#x22;&#x3E;
            &#x3C;input type=&#x22;radio&#x22; name=&#x22;group&#x22; id=&#x22;radio-1&#x22; /&#x3E;
            &#x3C;span aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/span&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;label for=&#x22;radio-1&#x22;&#x3E;Radio option one&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;

    &#x3C;div class=&#x22;radio-row&#x22;&#x3E;
        &#x3C;div class=&#x22;radio-wrapper&#x22;&#x3E;
            &#x3C;input type=&#x22;radio&#x22; name=&#x22;group&#x22; id=&#x22;radio-2&#x22; /&#x3E;
            &#x3C;span aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/span&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;label for=&#x22;radio-2&#x22;&#x3E;Radio option Two&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;

    &#x3C;div class=&#x22;radio-row&#x22;&#x3E;
        &#x3C;div class=&#x22;radio-wrapper&#x22;&#x3E;
            &#x3C;input type=&#x22;radio&#x22; name=&#x22;group&#x22; id=&#x22;radio-3&#x22; /&#x3E;
            &#x3C;span aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/span&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;label for=&#x22;radio-3&#x22;&#x3E;Radio option Three&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;

&#x3C;/fieldset&#x3E;</code></pre>

                <h2>Styles (CSS)</h2>
<pre><code class="language-CSS">fieldset {
	border: 0 none;
}

legend {
	color: #31315d;
	font-size: 1rem;
	margin-bottom: 0rem;
	font-weight: bold;
}

.radio-row {
	margin-bottom: 0.5rem;
}
.radio-row label {
	font-size: 1rem;
	margin-left: 0.35rem;
	vertical-align: middle;
}

.radio-wrapper {
	display: inline-block;
	font-size: 1rem;
	position: relative;
	vertical-align: middle;
}
.radio-wrapper > [type="radio"] {
	cursor: pointer;
	height: 100%;
	left: 0;
	margin: 0;
	opacity: 0;
	position: absolute;
	top: 0;
	width: 100%;
	z-index: 0;
}
.radio-wrapper > [type="radio"] + span {
	border: 0.2rem solid #31315d;
	border-radius: 50%;
	box-shadow: 0 0 0 0 transparent;
	box-sizing: border-box;
	display: block;
	height: 1.1rem;
	position: relative;
	transition: box-shadow 200ms ease-in-out;
	width: 1.1rem;
	z-index: 0;
}
.radio-wrapper > [type="radio"] + span::after {
	content: "";
	height: 0.5rem;
	width: 0.5rem;
	background: #31315d;
	border-radius: 50%;
	display: block;
	opacity: 0;
	position: relative;
	top: 0.11rem;
	left: 0.11rem;
	transform: scale(0);
	transition: all 200ms ease-in-out;
}
.radio-wrapper > [type="radio"]:checked + span::after {
	opacity: 1;
	transform: scale(1);
}
.radio-wrapper > [type="radio"]:focus + span {
	outline: 4px solid #1099c3;
	outline-offset: 2px;
}</code></pre>

            </div>
        </div>
    </main>

    <script src="../../../../../assets/js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <script>
     
    </script>
    
    <?php include('../../_inc/footer.php'); ?>

</div>