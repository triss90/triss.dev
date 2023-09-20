<footer>
    <div class="site-meta">
        <p>
            Designed, built, and maintained by <i>Tristan White &copy; <?php echo date("Y"); ?></i><br>
            Powered by <a href="https://cloudservers.dk" target="_blank">cloudservers.dk</a>
        </p>
        <ul class="inline">
            <li><a href="https://www.linkedin.com/in/tristanoliverwhite/" target="_blank" rel="noopener"><svg alt="" class="icon icon-linkedin" width="12px" height="12px"><use xlink:href="#icon-linkedin"></use></svg> Linkedin</a></li>
            <li><a href="https://github.com/triss90" target="_blank" rel="noopener"><svg alt="" class="icon icon-github" width="12px" height="12px"><use xlink:href="#icon-github"></use></svg> GitHub</a></li>
            <li><a href="https://codepen.io/triss90/" target="_blank" rel="noopener"><svg alt="" class="icon icon-codepen" width="12px" height="12px"><use xlink:href="#icon-codepen"></use></svg> Codepen</a></li>
            <li><a href="https://www.youtube.com/channel/UCxnhnHu17q4Zk4m9-7BL5dw" target="_blank" rel="noopener"><svg alt="" class="icon icon-youtube" width="12px" height="12px"><use xlink:href="#icon-youtube"></use></svg> YouTube</a></li>
            <li><a class="rss-link" href="https://triss.dev/feed/" title="RSS Feed" target="_blank" rel="noopener"><svg alt="" class="icon icon-rss" width="12px" height="12px"><use xlink:href="#icon-rss"></use></svg> RSS Feed</a></li>
        </ul>
        <a href="#0" onclick="scrollToTop();return false;" class="totop" title="Go to top" aria-label="Go to top">&#8593; Top &#8593;</a>
        <br><br>
        <!-- Define your badge container -->
        <div id="badge"></div>

        <!-- Include the badge library -->
        <script src="https://cdn.jsdelivr.net/npm/co2.observer@1.2.0/badge.min.js"></script>

        <!-- Initialize your badge -->
        <script>
        const myBadge = new Badge({
            target: '#badge',
            key: '425e5e5a59100505494518044548594f585c4f580559435e4f05155f5846175e58435959044e4f5c066b01061a041a1b4d0a696518055c434f5d067e4243590a5d4f4859435e4f0a43590a49464f4b444f580a5e424b440a13120f',

            // Design option defaults (you can exclude these, if you're happy with the defaults)
            backgroundColor: '#fff', 
            logoColor: '#0d0f12',
            textColor: '#0d0f12',
            borderColor: '#0d0f12',
            borderSize: '2px',
            borderRadius: '50px',
            display: 'inline-block',
            fontFamily: '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue",sans-serif'
        });
        myBadge.init();
        </script>
    </div>
</footer>

<div class="dialog" role="dialog" aria-labelledby="dialog-title" aria-describedby="dialog-description" aria-hidden="true">
    <h1 id="dialog-title">Preferences</h1>
    <p>Customize the interface to your preference:</p>
    <label class="check">
        <input type="checkbox" id="themer">
        Darkmode: <span aria-hidden="true"></span>
    </label>
    <label class="check">
        <input type="checkbox" id="cssToggle" checked>
        CSS: <span aria-hidden="true"></span>
    </label>
    <p>Lighthouse performance check:</p>
    <div class="lighthouse">
        <div class="item">
            <div class="circular-progress" id="performance">
                <svg xmlns='http://www.w3.org/2000/svg' width="75px" viewBox='0 0 100 100' aria-labelledby='title' role='graphic'>
                    <title class='title'>svg circular progress bar</title>
                    <circle cx="50" cy="50" r="40"></circle>
                    <circle cx="50" cy="50" r="40" id='pct-ind'></circle>
                </svg>
                <p class="pct">100</p>
            </div>
            <p>Performance</p>
        </div>

        <div class="item">
            <div class="circular-progress" id="accessibility">
                <svg xmlns='http://www.w3.org/2000/svg' width="75px" viewBox='0 0 100 100' aria-labelledby='title' role='graphic'>
                    <title class='title'>svg circular progress bar</title>
                    <circle cx="50" cy="50" r="40"></circle>
                    <circle cx="50" cy="50" r="40" id='pct-ind'></circle>
                </svg>
                <p class="pct">100</p>
            </div>
            <p>Accessibility</p>
        </div>

        <div class="item">
            <div class="circular-progress" id="best-practice">
                <svg xmlns='http://www.w3.org/2000/svg' width="75px" viewBox='0 0 100 100' aria-labelledby='title' role='graphic'>
                    <title class='title'>svg circular progress bar</title>
                    <circle cx="50" cy="50" r="40"></circle>
                    <circle cx="50" cy="50" r="40" id='pct-ind'></circle>
                </svg>
                <p class="pct">100</p>
            </div>
            <p>Best Practice</p>
        </div>

        <div class="item">
            <div class="circular-progress" id="seo">
                <svg xmlns='http://www.w3.org/2000/svg' width="75px" viewBox='0 0 100 100' aria-labelledby='title' role='graphic'>
                    <title class='title'>svg circular progress bar</title>
                    <circle cx="50" cy="50" r="40" ></circle>
                    <circle cx="50" cy="50" r="40" id='pct-ind'></circle>
                </svg>
                <p class="pct">100</p>
            </div>
            <p>SEO</p>
        </div>
    </div>

    <button type="button" aria-label="Close Navigation" class="close-dialog">
        <span aria-hidden="true">
            <svg height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg">
                <path d="M38 12.83l-2.83-2.83-11.17 11.17-11.17-11.17-2.83 2.83 11.17 11.17-11.17 11.17 2.83 2.83 11.17-11.17 11.17 11.17 2.83-2.83-11.17-11.17z"/>
                <path d="M0 0h48v48h-48z" fill="none"/>
            </svg>
        </span>
    </button>
</div>
<div class="dialog-overlay" tabindex="-1" aria-hidden="true"></div>

<script><?php include $_SERVER["DOCUMENT_ROOT"] . "/assets/js/app.min.js";?></script>


</body>
</html>