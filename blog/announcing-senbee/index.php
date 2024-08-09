<?php
    $activePage = "blog";
    $description = 'Announcing my newest venture, Senbee';
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
    <a id="top" href="#main">skip to content</a>
    <?php include '../../inc/themes.php'; ?>
    <div class="article-progress">
        <div class="article-progress-inner"></div>
    </div>
    <?php include '../../inc/navigation.php'; ?>

    <main id='post'>
        <div class='container'>
            <div class='row'>
                <div class='tiny-12 small-10 medium-8 small-offset-1 medium-offset-2'>
                    <h1 class="post-transition-end">Senbee - Simplifying Your Service Management</h1>
<p class='timestamp'><time datetime='August 9, 2024'>August 9, 2024</time></p><hr>
<svg width="100%" height="200px" viewBox="0 0 1270 256" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 192C0 156.654 28.6538 128 64 128H128V192C128 227.346 99.3462 256 64 256V256C28.6538 256 0 227.346 0 192V192Z" fill="#F9A826"/>
<path d="M128 128H192C227.346 128 256 156.654 256 192V192C256 227.346 227.346 256 192 256V256C156.654 256 128 227.346 128 192V128Z" fill="#C2D2EA"/>
<path d="M128 64C128 28.6538 156.654 0 192 0V0C227.346 0 256 28.6538 256 64V64C256 99.3462 227.346 128 192 128H128V64Z" fill="#5A8D87"/>
<path d="M0 64C0 28.6538 28.6538 0 64 0V0C99.3462 0 128 28.6538 128 64V128H64C28.6538 128 0 99.3462 0 64V64Z" fill="#B2D7D2"/>
<path d="M373.5 212.75C366.833 212.75 359.833 212.25 352.5 211.25C345.333 210.417 338.5 209.083 332 207.25C325.5 205.417 319.667 203.25 314.5 200.75C310 198.583 306.833 195.75 305 192.25C303.167 188.583 302.5 184.75 303 180.75C303.5 176.75 304.917 173.25 307.25 170.25C309.583 167.083 312.667 165 316.5 164C320.333 162.833 324.667 163.333 329.5 165.5C335.833 168.5 343 170.833 351 172.5C359 174.167 366.5 175 373.5 175C384.5 175 392.167 173.583 396.5 170.75C401 167.75 403.25 164.083 403.25 159.75C403.25 155.917 401.667 152.833 398.5 150.5C395.5 148.167 390.083 146.167 382.25 144.5L353 138.25C337 134.917 325.083 129.083 317.25 120.75C309.417 112.417 305.5 101.667 305.5 88.5C305.5 79.8333 307.25 72 310.75 65C314.417 57.8333 319.5 51.75 326 46.75C332.667 41.75 340.5 37.9167 349.5 35.25C358.667 32.4167 368.833 31 380 31C388.667 31 397.417 32 406.25 34C415.25 35.8333 423 38.6667 429.5 42.5C433.333 44.5 436.083 47.25 437.75 50.75C439.417 54.25 440.083 57.9167 439.75 61.75C439.417 65.4167 438.083 68.6667 435.75 71.5C433.583 74.3333 430.583 76.25 426.75 77.25C423.083 78.0833 418.667 77.4167 413.5 75.25C408.667 73.0833 403.167 71.5 397 70.5C391 69.3333 385.167 68.75 379.5 68.75C373.333 68.75 368.083 69.5 363.75 71C359.417 72.3333 356.083 74.3333 353.75 77C351.583 79.6667 350.5 82.75 350.5 86.25C350.5 89.75 351.917 92.75 354.75 95.25C357.75 97.5833 363.167 99.5833 371 101.25L400 107.5C416.167 111 428.25 116.75 436.25 124.75C444.25 132.75 448.25 143.167 448.25 156C448.25 164.667 446.5 172.5 443 179.5C439.5 186.5 434.5 192.5 428 197.5C421.5 202.333 413.667 206.083 404.5 208.75C395.333 211.417 385 212.75 373.5 212.75Z" fill="#242F4C"/>
<path d="M494.842 210C487.009 210 481.009 208 476.842 204C472.842 199.833 470.842 193.917 470.842 186.25V57.5C470.842 49.8333 472.842 44 476.842 40C481.009 35.8333 487.009 33.75 494.842 33.75H579.592C585.592 33.75 590.092 35.25 593.092 38.25C596.092 41.25 597.592 45.5833 597.592 51.25C597.592 57.0833 596.092 61.5833 593.092 64.75C590.092 67.75 585.592 69.25 579.592 69.25H514.842V102.75H574.092C579.925 102.75 584.342 104.25 587.342 107.25C590.509 110.25 592.092 114.667 592.092 120.5C592.092 126.333 590.509 130.75 587.342 133.75C584.342 136.75 579.925 138.25 574.092 138.25H514.842V174.5H579.592C585.592 174.5 590.092 176.083 593.092 179.25C596.092 182.25 597.592 186.583 597.592 192.25C597.592 198.083 596.092 202.5 593.092 205.5C590.092 208.5 585.592 210 579.592 210H494.842Z" fill="#242F4C"/>
<path d="M645.906 212.25C638.906 212.25 633.573 210.417 629.906 206.75C626.24 203.083 624.406 197.667 624.406 190.5V54.25C624.406 46.9167 626.24 41.3333 629.906 37.5C633.573 33.5 638.406 31.5 644.406 31.5C649.74 31.5 653.906 32.5 656.906 34.5C659.906 36.5 663.24 39.8333 666.906 44.5L746.156 143.5H739.156V53C739.156 46 740.906 40.6667 744.406 37C748.073 33.3333 753.406 31.5 760.406 31.5C767.406 31.5 772.656 33.3333 776.156 37C779.823 40.6667 781.656 46 781.656 53V191.5C781.656 197.833 779.99 202.917 776.656 206.75C773.323 210.417 768.823 212.25 763.156 212.25C757.49 212.25 752.99 211.25 749.656 209.25C746.49 207.083 743.073 203.75 739.406 199.25L660.156 100H667.156V190.5C667.156 197.667 665.323 203.083 661.656 206.75C658.156 210.417 652.906 212.25 645.906 212.25Z" fill="#242F4C"/>
<path d="M837.859 210C830.026 210 824.026 208 819.859 204C815.859 199.833 813.859 193.917 813.859 186.25V57.5C813.859 49.8333 815.859 44 819.859 40C824.026 35.8333 830.026 33.75 837.859 33.75H898.859C911.526 33.75 922.276 35.6667 931.109 39.5C940.109 43.1667 946.943 48.4167 951.609 55.25C956.276 62.0833 958.609 70.0833 958.609 79.25C958.609 89.5833 955.609 98.4167 949.609 105.75C943.776 113.083 935.776 118.083 925.609 120.75V116.75C937.609 118.917 946.859 123.75 953.359 131.25C960.026 138.75 963.359 148.333 963.359 160C963.359 175.5 957.776 187.75 946.609 196.75C935.609 205.583 920.526 210 901.359 210H837.859ZM857.859 176.25H895.109C903.609 176.25 909.776 174.667 913.609 171.5C917.609 168.167 919.609 163.25 919.609 156.75C919.609 150.25 917.609 145.417 913.609 142.25C909.776 139.083 903.609 137.5 895.109 137.5H857.859V176.25ZM857.859 103.75H890.609C898.943 103.75 905.026 102.25 908.859 99.25C912.859 96.25 914.859 91.6667 914.859 85.5C914.859 79.3333 912.859 74.8333 908.859 72C905.026 69 898.943 67.5 890.609 67.5H857.859V103.75Z" fill="#242F4C"/>
<path d="M1013.4 210C1005.56 210 999.563 208 995.397 204C991.397 199.833 989.397 193.917 989.397 186.25V57.5C989.397 49.8333 991.397 44 995.397 40C999.563 35.8333 1005.56 33.75 1013.4 33.75H1098.15C1104.15 33.75 1108.65 35.25 1111.65 38.25C1114.65 41.25 1116.15 45.5833 1116.15 51.25C1116.15 57.0833 1114.65 61.5833 1111.65 64.75C1108.65 67.75 1104.15 69.25 1098.15 69.25H1033.4V102.75H1092.65C1098.48 102.75 1102.9 104.25 1105.9 107.25C1109.06 110.25 1110.65 114.667 1110.65 120.5C1110.65 126.333 1109.06 130.75 1105.9 133.75C1102.9 136.75 1098.48 138.25 1092.65 138.25H1033.4V174.5H1098.15C1104.15 174.5 1108.65 176.083 1111.65 179.25C1114.65 182.25 1116.15 186.583 1116.15 192.25C1116.15 198.083 1114.65 202.5 1111.65 205.5C1108.65 208.5 1104.15 210 1098.15 210H1013.4Z" fill="#242F4C"/>
<path d="M1166.96 210C1159.13 210 1153.13 208 1148.96 204C1144.96 199.833 1142.96 193.917 1142.96 186.25V57.5C1142.96 49.8333 1144.96 44 1148.96 40C1153.13 35.8333 1159.13 33.75 1166.96 33.75H1251.71C1257.71 33.75 1262.21 35.25 1265.21 38.25C1268.21 41.25 1269.71 45.5833 1269.71 51.25C1269.71 57.0833 1268.21 61.5833 1265.21 64.75C1262.21 67.75 1257.71 69.25 1251.71 69.25H1186.96V102.75H1246.21C1252.04 102.75 1256.46 104.25 1259.46 107.25C1262.63 110.25 1264.21 114.667 1264.21 120.5C1264.21 126.333 1262.63 130.75 1259.46 133.75C1256.46 136.75 1252.04 138.25 1246.21 138.25H1186.96V174.5H1251.71C1257.71 174.5 1262.21 176.083 1265.21 179.25C1268.21 182.25 1269.71 186.583 1269.71 192.25C1269.71 198.083 1268.21 202.5 1265.21 205.5C1262.21 208.5 1257.71 210 1251.71 210H1166.96Z" fill="#242F4C"/>
</svg>
<p>I am thrilled to announce the launch of my newest venture, <a href="https://senbee.com">Senbee</a>. After over a decade of dedicated work behind the scenes, we have finally brought to life a platform that revolutionizes how you manage services from multiple providers.</p>
<h2>What is Senbee?</h2>
<p>Senbee provides a seamless experience by centralizing the management of services from various providers into one convenient location. Our proprietary platforms integrate both internal and external data, creating a unified system that simplifies your operations and makes managing everything effortless.</p>
<p>Visit our website to learn more: <a href="https://senbee.com">senbee.com</a>.</p>
<p><img src="/examples/senbee-3.png" alt="Senbee UI example" /></p>
<h2>Meet the Founders</h2>
<p>Senbee is founded by a team of passionate and experienced professionals:</p>
<ul>
<li>
<strong><a href="https://senbee.com/team/tristan_white/">Tristan White</a></strong>, CEO</li>
<li>
<strong><a href="https://senbee.com/team/daniel_bahl/">Daniel Bahl</a></strong>, CTO</li>
<li>
<strong><a href="https://senbee.com/team/mads_christensen/">Mads Christensen</a></strong>, CFO</li>
<li>
<strong><a href="https://senbee.com/team/kim_stein/">Kim Stein</a></strong>, CVO</li>
</ul>
<p>Our combined expertise and shared vision have been the driving forces behind Senbee. We are committed to delivering a solution that not only meets but exceeds your service management needs.</p>
<h2>A Decade in the Making</h2>
<p>Senbee is the culmination of 10 years of hard work and innovation. We've spent countless hours refining our technology, understanding the market needs, and building a platform that truly simplifies service management. Our journey has been long, but the result is a product that we are incredibly proud of and excited to share with you.</p>
<p><img src="/examples/senbee-1.png" alt="Senbee UI example" /></p>
<h2>Leveraging AI for Superior Service</h2>
<p>At Senbee, we utilize cutting-edge AI technology to enhance our service offerings. Our AI-driven solutions enable smarter data integration and more efficient service management. By automating routine tasks and providing predictive analytics, Senbee empowers you to make informed decisions and optimize your operations.</p>
<p><img src="/examples/senbee-4.png" alt="Senbee UI example" /></p>
<h2>Commitment to the Environment</h2>
<p>We believe in creating technology that not only benefits our users but also the planet. Senbee is designed with sustainability in mind. Our platforms are optimized for energy efficiency, and we continuously seek ways to minimize our environmental footprint. By choosing Senbee, you are supporting a company that values and actively promotes environmental responsibility.</p>
<p><img src="/examples/senbee-2.png" alt="Senbee UI example" /></p>
<h2>Join Us on This Journey</h2>
<p>We invite you to explore Senbee and see for yourself how it can transform your service management experience. Whether you're looking to streamline your operations, integrate data seamlessly, or manage services more efficiently, Senbee is here to help.</p>
<p>Thank you for your support, and we look forward to embarking on this journey together.</p>
<p>Connect on <a href="https://www.linkedin.com/company/senbee/">LinkedIn</a> or learn more on <a href="https://senbee.com">senbee.com</a>.</p>

                </div>
            </div>
        </div>
    </main>

    <script src='../../assets/js/article.min.js'></script>
    <script src='../../assets/js/vendor/highlight.pack.js'></script>
    <script>
    hljs.initHighlightingOnLoad();
    </script>

    <?php include '../../inc/footer.php'; ?>
    <?php include '../../inc/scripts.php'; ?>
</body>

</html>