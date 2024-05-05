<?php
    $activePage = "snippets";
    $description = "Accessible UI Components, Snippets and Code Experiments by Tristan White";
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

            <header class="hero">
                <div class="row">
                    <div class="tiny-12 medium-6 tiny-center medium-start">
                        <h1 class="title">Accessible UI Components.</h1>
                        <p class="subtitle">Building inclusive and user-friendly web interfaces.</p>
                    </div>
                    <div class="tiny-12 medium-6 tiny-center medium-start">
                        <svg id="components-animation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 555.4 335.8">
                            <title>components</title>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <path d="M367.6,296.8a7.8,7.8,0,0,1-4.3-1.3l-209.7-151a4.7,4.7,0,0,1,0-7.8l17.2-12.3a7.1,7.1,0,0,1,4.3-1.4,6.9,6.9,0,0,1,4.3,1.4L389.1,275.3a4.7,4.7,0,0,1,0,7.8l-17.2,12.4A7.8,7.8,0,0,1,367.6,296.8Z" fill="var(--color-bg)" />
                                    <path d="M175.1,125a5.8,5.8,0,0,1,3.2,1L387.9,276.9c1.8,1.3,1.8,3.3,0,4.5l-17.2,12.4a5.3,5.3,0,0,1-6.2,0L154.8,142.9a2.6,2.6,0,0,1,0-4.5L172,126a5.7,5.7,0,0,1,3.1-1m0-4a9.1,9.1,0,0,0-5.4,1.7l-17.2,12.4a6.9,6.9,0,0,0-3,5.5,6.6,6.6,0,0,0,3,5.5l209.6,151a9.4,9.4,0,0,0,5.5,1.7,9.7,9.7,0,0,0,5.5-1.7l17.2-12.4a7.1,7.1,0,0,0,2.9-5.5,6.8,6.8,0,0,0-2.9-5.5l-209.7-151a9.2,9.2,0,0,0-5.5-1.7Z" fill="var(--color-text-offset)" />
                                    <path d="M335.5,334.8a5.9,5.9,0,0,1-3.7-1.2L90.8,160.1a3.9,3.9,0,0,1-1.7-3,4.1,4.1,0,0,1,1.7-3.1L210.5,67.8a6.8,6.8,0,0,1,3.8-1.1,6.7,6.7,0,0,1,3.7,1.1l56.3,40.6a3.6,3.6,0,0,1,0,6.1l-19.2,13.9L435.4,258.2a3.9,3.9,0,0,1,1.8,3.1,3.8,3.8,0,0,1-1.8,3l-96.2,69.3A5.9,5.9,0,0,1,335.5,334.8ZM175.1,119.4a4.1,4.1,0,0,0-2.5.8l-17.2,12.3a2,2,0,0,0-.9,1.5,1.7,1.7,0,0,0,.9,1.4L365,286.4a4.4,4.4,0,0,0,2.6.7,4.1,4.1,0,0,0,2.5-.7L387.3,274a1.8,1.8,0,0,0,.9-1.5,1.7,1.7,0,0,0-.9-1.4L177.7,120.2A4.5,4.5,0,0,0,175.1,119.4Z" fill="var(--color-bg)" />
                                    <path d="M214.3,67.7a5.6,5.6,0,0,1,3.1.9l56.3,40.6a2.6,2.6,0,0,1,0,4.5l-20.3,14.7L434.9,259a2.6,2.6,0,0,1,0,4.5l-96.3,69.3a5.3,5.3,0,0,1-6.2,0L91.4,159.3a2.6,2.6,0,0,1,0-4.5l63.4-45.6,32.9-23.7,23.4-16.9a5.7,5.7,0,0,1,3.2-.9M367.6,288.1a5.4,5.4,0,0,0,3.1-.9l17.2-12.4a2.6,2.6,0,0,0,0-4.5l-209.6-151a5.7,5.7,0,0,0-3.2-.9,5.6,5.6,0,0,0-3.1.9l-17.2,12.4a2.6,2.6,0,0,0,0,4.5l209.7,151a5.4,5.4,0,0,0,3.1.9M214.3,65.7A7.5,7.5,0,0,0,210,67L186.5,83.9l-32.9,23.7L90.3,153.2a4.6,4.6,0,0,0,0,7.8L331.2,334.4a7.3,7.3,0,0,0,8.6,0L436,265.2a4.6,4.6,0,0,0,0-7.8l-179.2-129,18.1-13.1a4.8,4.8,0,0,0,2.1-3.8,5,5,0,0,0-2.1-3.9L218.5,67a7.2,7.2,0,0,0-4.2-1.3ZM367.6,286.1a3.9,3.9,0,0,1-2-.5L156,134.6c-.3-.2-.5-.4-.5-.6s.2-.4.5-.6L173.2,121a3.1,3.1,0,0,1,1.9-.6,3.2,3.2,0,0,1,2,.6L386.8,271.9a1.5,1.5,0,0,1,.4.6,1.3,1.3,0,0,1-.4.7l-17.3,12.4a3.6,3.6,0,0,1-1.9.5Z" fill="var(--color-text)" />
                                    <polygon points="247.9 109.8 216.6 87.2 219.7 85 251 107.5 247.9 109.8" fill="var(--color-text-offset)" />
                                    <polygon points="237.9 185.2 175.3 140.1 178.4 137.9 241 182.9 237.9 185.2" fill="#var(--color-border)" />
                                    <path d="M327.3,311.1,271,270.5a2.6,2.6,0,0,1,0-4.5l17.2-12.4a6,6,0,0,1,6.3,0l56.3,40.6a2.6,2.6,0,0,1,0,4.5l-17.2,12.4A6,6,0,0,1,327.3,311.1Z" fill="#var(--color-border)" />
                                    <polygon points="325 294.7 293.7 272.2 296.8 269.9 328.1 292.5 325 294.7" fill="var(--color-bg)" />
                                    <polygon points="287.4 13.7 304.8 1.2 553.7 180.5 536.4 193 287.4 13.7" fill="var(--color-bg)" />
                                    <path d="M304.8,2.5,552,180.5l-15.6,11.2L289.1,13.7,304.8,2.5m0-2.5-1.2.8L288,12.1l-2.3,1.6,2.3,1.7L535.2,193.3l1.2.9,1.1-.9,15.7-11.2,2.2-1.6-2.2-1.7L306,.8,304.8,0Z" fill="var(--color-text)" />
                                    <polygon points="340.8 41.9 309.5 19.4 312.6 17.1 343.9 39.6 340.8 41.9" fill="var(--color-text-offset)" />
                                    <polygon points="387.7 75.7 356.4 53.2 359.6 50.9 390.8 73.4 387.7 75.7" fill="var(--color-text-offset)" />
                                    <polygon points="434.7 109.5 403.4 87 406.5 84.7 437.8 107.2 434.7 109.5" fill="var(--color-text-offset)" />
                                    <polygon points="481.6 143.3 450.3 120.8 453.4 118.5 484.7 141 481.6 143.3" fill="var(--color-text-offset)" />
                                    <polygon points="528.5 177.1 497.2 154.5 500.4 152.3 531.7 174.8 528.5 177.1" fill="var(--color-text-offset)" />
                                    <polygon points="436.2 119.6 389.3 85.8 404.9 74.6 451.9 108.4 436.2 119.6" fill="" />
                                    <polygon points="434.7 109.5 403.4 87 406.5 84.7 437.8 107.2 434.7 109.5" fill="var(--color-bg)" />
                                    <g opacity="0.2">
                                        <path d="M145.7,323.9,3.3,221.4a2.6,2.6,0,0,1,0-4.5l56.3-40.5a5.6,5.6,0,0,1,6.3,0L208.3,278.9a2.6,2.6,0,0,1,0,4.5l-56.4,40.5A5.4,5.4,0,0,1,145.7,323.9Z" />
                                    </g>
                                    <path d="M148.8,281.6a6.5,6.5,0,0,1-3.7-1.1L2.7,178A3.8,3.8,0,0,1,1,174.9a3.6,3.6,0,0,1,1.7-3L59,131.3a6.8,6.8,0,0,1,3.8-1.1,6.7,6.7,0,0,1,3.7,1.1L208.8,233.8a3.6,3.6,0,0,1,0,6.2l-56.3,40.5A6.5,6.5,0,0,1,148.8,281.6Z" fill="var(--color-bg)" />
                                    <path d="M62.8,131.2a5.6,5.6,0,0,1,3.1.9L208.3,234.6a2.6,2.6,0,0,1,0,4.5l-56.4,40.6a5.8,5.8,0,0,1-6.2,0L3.3,177.2a2.6,2.6,0,0,1,0-4.5l56.3-40.6a5.7,5.7,0,0,1,3.2-.9m0-2a7.5,7.5,0,0,0-4.3,1.3L2.1,171.1A4.7,4.7,0,0,0,0,174.9a5,5,0,0,0,2.1,3.9L144.5,281.3a7.8,7.8,0,0,0,8.6,0l56.3-40.5a4.6,4.6,0,0,0,0-7.8L67,130.5a7.2,7.2,0,0,0-4.2-1.3Z" fill="var(--color-text)" />
                                    <path d="M145.7,268.4,89.4,227.9c-1.8-1.3-1.8-7.3,0-8.5l17.2-8.4a5.4,5.4,0,0,1,6.2,0l56.3,36.5c1.8,1.3,1.8,7.3,0,8.5l-17.2,12.4A5.4,5.4,0,0,1,145.7,268.4Z" fill="var(--color-secondary)" />
                                    <path d="M145.7,264.4,89.4,223.9c-1.8-1.3-1.8-3.3,0-4.5L106.6,207a5.4,5.4,0,0,1,6.2,0l56.3,40.5c1.8,1.3,1.8,3.3,0,4.5l-17.2,12.4A5.4,5.4,0,0,1,145.7,264.4Z" fill="var(--color-secondary)" />
                                    <polygon points="143.3 248.1 112 225.6 115.2 223.3 146.5 245.8 143.3 248.1" fill="var(--color-bg)" />
                                    <path d="M75.3,217.7,18.9,177.2c-1.7-1.3-1.7-7.3,0-8.5l17.3-8.4a5.4,5.4,0,0,1,6.2,0l56.3,36.5c1.8,1.3,1.8,7.3,0,8.5L81.5,217.7A5.4,5.4,0,0,1,75.3,217.7Z" fill="var(--color-primary-offset)" />
                                    <path d="M75.3,213.7,18.9,173.2a2.6,2.6,0,0,1,0-4.5l17.3-12.4a5.4,5.4,0,0,1,6.2,0l56.3,40.5c1.8,1.3,1.8,3.3,0,4.5L81.5,213.7A5.4,5.4,0,0,1,75.3,213.7Z" fill="var(--color-primary)" />
                                    <polygon points="72.9 197.4 41.6 174.9 44.8 172.6 76.1 195.1 72.9 197.4" fill="var(--color-bg)" />
                                    <polygon points="188.7 242 55.7 146.2 58.8 143.9 191.8 239.7 188.7 242" fill="var(--color-text-offset)" />
                                    <polygon points="126.1 208.2 47.9 151.8 51 149.6 129.2 205.9 126.1 208.2" fill="var(--color-text-offset)" />
                                    <g opacity="0.2">
                                        <polygon points="384.6 219.9 293.8 154.5 387.7 87 478.5 152.3 384.6 219.9" />
                                    </g>
                                    <polygon points="292.1 143.5 387.7 74.7 480.2 141.2 384.6 210.1 292.1 143.5" fill="var(--color-bg)" />
                                    <path d="M387.7,75.9l90.8,65.3-93.9,67.6-90.8-65.3,93.9-67.6m0-2.5-1.2.9-93.8,67.6-2.3,1.6,2.3,1.6,90.7,65.3,1.2.9,1.2-.9,93.8-67.5,2.3-1.7-2.3-1.6L388.9,74.3l-1.2-.9Z" fill="var(--color-text)" />
                                    <polygon points="404.1 174.5 341.6 129.4 344.7 127.1 407.3 172.2 404.1 174.5" fill="var(--color-text-offset)" />
                                    <polygon points="419.8 163.2 357.2 118.1 360.3 115.9 422.9 160.9 419.8 163.2" fill="var(--color-text-offset)" />
                                    <polygon points="435.4 151.9 372.9 106.9 376 104.6 438.6 149.7 435.4 151.9" fill="var(--color-text-offset)" />
                                    <polygon points="451.1 140.7 388.5 95.6 391.6 93.4 454.2 138.4 451.1 140.7" fill="var(--color-text-offset)" />
                                    <polygon points="380.7 191.4 318.1 146.3 321.2 144 383.8 189.1 380.7 191.4" fill="var(--color-text-offset)" />
                                    <polygon points="407.3 192.5 316.5 127.1 317.3 126.6 408.1 191.9 407.3 192.5" fill="var(--color-text-offset)" />
                                    <polygon points="412 189.1 321.2 123.8 336.9 112.5 427.6 177.8 412 189.1" fill="var(--color-primary)" />
                                    <polygon points="404.1 174.5 341.6 129.4 344.7 127.1 407.3 172.2 404.1 174.5" fill="var(--color-bg)" />
                                    <g opacity="0.2">
                                        <polygon points="454.2 302.7 363.5 237.3 433.1 187.2 523.8 252.6 454.2 302.7" />
                                    </g>
                                    <polygon points="361.8 215.2 433.1 163.9 525.5 230.4 454.2 281.8 361.8 215.2" fill="var(--color-bg)" />
                                    <path d="M433.1,165.1l90.7,65.3-69.6,50.2-90.7-65.4,69.6-50.1m0-2.5-1.2.9-69.6,50.1-2.3,1.6,2.3,1.6L453,282.2l1.2.8,1.2-.8L525,232l2.3-1.6-2.3-1.6-90.7-65.3-1.2-.9Z" fill="var(--color-text)" />
                                    <polygon points="449.5 263.7 386.9 218.6 390.1 216.3 452.6 261.4 449.5 263.7" fill="var(--color-text-offset)" />
                                    <polygon points="465.2 252.4 402.6 207.3 405.7 205.1 468.3 250.1 465.2 252.4" fill="#var(--color-border)" />
                                    <polygon points="480.8 241.1 418.2 196.1 421.4 193.8 483.9 238.9 480.8 241.1" fill="var(--color-text-offset)" />
                                    <polygon points="496.5 229.9 433.9 184.8 437 182.5 499.6 227.6 496.5 229.9" fill="var(--color-text-offset)" />
                                    <polygon points="504.3 244.5 413.5 179.2 429.2 167.9 519.9 233.2 504.3 244.5" fill="var(--color-primary)" />
                                    <polygon points="496.5 229.9 433.9 184.8 437 182.5 499.6 227.6 496.5 229.9" fill="var(--color-bg)" />
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </header>

            <section id="about">
                <div class="row">
                    <!-- Toggle Buttons -->
                    <div class="tiny-12 small-6 medium-4 large-3">
                        <a href="/snippets/toggle" class="snippet">
                            <div class="snippet-image">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" width="400" height="300" viewBox="0 0 400 300" fill="none">
                                    <rect x="53" y="121" width="123" height="60" rx="29.5" fill="var(--color-primary)" />
                                    <circle cx="83" cy="151" r="24" fill="var(--color-bg)" />
                                    <rect x="226" y="121" width="123" height="60" rx="29.5" fill="var(--color-text-offset)" />
                                    <circle cx="319" cy="151" r="24" fill="var(--color-bg)" />
                                </svg>
                            </div>
                            <div class="snippet-body">
                                <h2 class="snippet-title">Toggle Buttons</h2>
                                <p class="snippet-description">Toggle buttons are a pleasant interface for toggling a value between two states, and offer the same semantics and keyboard navigation as native checkbox elements.</p>
                            </div>
                            <div class="snippet-footer">

                            </div>
                        </a>
                    </div>

                    <!-- Radio Buttons -->
                    <div class="tiny-12 small-6 medium-4 large-3">
                        <div class="snippet disabled">
                            <div class="snippet-image">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" width="400" height="300" viewBox="0 0 400 300" fill="none">
                                    <rect x="60" y="127" width="46" height="46" rx="23" fill="var(--color-primary)" />
                                    <rect x="177" y="127" width="46" height="46" rx="23" fill="var(--color-primary)" />
                                    <rect x="300" y="127" width="46" height="46" rx="23" fill="var(--color-text-offset)" />
                                    <line x1="115" y1="150" x2="167" y2="150" stroke="var(--color-text-offset)" stroke-width="8" />
                                    <line x1="236" y1="150" x2="288" y2="150" stroke="var(--color-text-offset)" stroke-width="8" />
                                    <circle cx="200" cy="150" r="10" fill="var(--color-bg)" />
                                    <circle cx="323" cy="150" r="10" fill="var(--color-bg)" />
                                    <path d="M73 152L78.7809 158.226C79.1715 158.646 79.8351 158.652 80.2335 158.239L93 145" stroke="var(--color-bg)" stroke-width="4" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div class="snippet-body">
                                <h2 class="snippet-title">Radio Buttons</h2>
                                <p class="snippet-description">Radio buttons are a type of input element that allows users to select only one option from a list of predefined options. They are commonly used in forms and provide a way for users to make a single selection.</p>
                            </div>
                            <div class="snippet-footer"></div>
                        </div>
                    </div>

                    <!-- Tables -->
                    <div class="tiny-12 small-6 medium-4 large-3">
                        <div class="snippet disabled">
                            <div class="snippet-image">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" width="400" height="300" viewBox="0 0 400 300" fill="none">
                                    <path d="M53 89C53 85.6863 55.6863 83 59 83H341C344.314 83 347 85.6863 347 89V218H53V89Z" fill="var(--color-bg)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M71 132.5C71 130.015 73.0147 128 75.5 128H116.5C118.985 128 121 130.015 121 132.5C121 134.985 118.985 137 116.5 137H75.5C73.0147 137 71 134.985 71 132.5Z" fill="var(--color-text-offset)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M134 132.5C134 130.015 136.015 128 138.5 128H209.5C211.985 128 214 130.015 214 132.5C214 134.985 211.985 137 209.5 137H138.5C136.015 137 134 134.985 134 132.5Z" fill="var(--color-text-offset)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M227 132.5C227 130.015 229.015 128 231.5 128H262.5C264.985 128 267 130.015 267 132.5C267 134.985 264.985 137 262.5 137H231.5C229.015 137 227 134.985 227 132.5Z" fill="var(--color-text-offset)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M280 132.5C280 130.015 282.015 128 284.5 128H324.5C326.985 128 329 130.015 329 132.5C329 134.985 326.985 137 324.5 137H284.5C282.015 137 280 134.985 280 132.5Z" fill="var(--color-text-offset)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M71 153.5C71 151.015 73.0147 149 75.5 149H116.5C118.985 149 121 151.015 121 153.5C121 155.985 118.985 158 116.5 158H75.5C73.0147 158 71 155.985 71 153.5Z" fill="var(--color-text-offset)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M134 153.5C134 151.015 136.015 149 138.5 149H209.5C211.985 149 214 151.015 214 153.5C214 155.985 211.985 158 209.5 158H138.5C136.015 158 134 155.985 134 153.5Z" fill="var(--color-text-offset)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M227 153.5C227 151.015 229.015 149 231.5 149H262.5C264.985 149 267 151.015 267 153.5C267 155.985 264.985 158 262.5 158H231.5C229.015 158 227 155.985 227 153.5Z" fill="var(--color-text-offset)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M280 153.5C280 151.015 282.015 149 284.5 149H324.5C326.985 149 329 151.015 329 153.5C329 155.985 326.985 158 324.5 158H284.5C282.015 158 280 155.985 280 153.5Z" fill="var(--color-text-offset)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M71 174.5C71 172.015 73.0147 170 75.5 170H116.5C118.985 170 121 172.015 121 174.5C121 176.985 118.985 179 116.5 179H75.5C73.0147 179 71 176.985 71 174.5Z" fill="var(--color-text-offset)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M134 174.5C134 172.015 136.015 170 138.5 170H209.5C211.985 170 214 172.015 214 174.5C214 176.985 211.985 179 209.5 179H138.5C136.015 179 134 176.985 134 174.5Z" fill="var(--color-text-offset)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M227 174.5C227 172.015 229.015 170 231.5 170H262.5C264.985 170 267 172.015 267 174.5C267 176.985 264.985 179 262.5 179H231.5C229.015 179 227 176.985 227 174.5Z" fill="var(--color-text-offset)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M280 174.5C280 172.015 282.015 170 284.5 170H324.5C326.985 170 329 172.015 329 174.5C329 176.985 326.985 179 324.5 179H284.5C282.015 179 280 176.985 280 174.5Z" fill="var(--color-text-offset)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M71 195.5C71 193.015 73.0147 191 75.5 191H116.5C118.985 191 121 193.015 121 195.5C121 197.985 118.985 200 116.5 200H75.5C73.0147 200 71 197.985 71 195.5Z" fill="var(--color-text-offset)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M134 195.5C134 193.015 136.015 191 138.5 191H209.5C211.985 191 214 193.015 214 195.5C214 197.985 211.985 200 209.5 200H138.5C136.015 200 134 197.985 134 195.5Z" fill="var(--color-text-offset)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M227 195.5C227 193.015 229.015 191 231.5 191H262.5C264.985 191 267 193.015 267 195.5C267 197.985 264.985 200 262.5 200H231.5C229.015 200 227 197.985 227 195.5Z" fill="var(--color-text-offset)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M280 195.5C280 193.015 282.015 191 284.5 191H324.5C326.985 191 329 193.015 329 195.5C329 197.985 326.985 200 324.5 200H284.5C282.015 200 280 197.985 280 195.5Z" fill="var(--color-text-offset)" />
                                    <rect x="53" y="83" width="294" height="27" fill="var(--color-border)" />
                                </svg>
                            </div>
                            <div class="snippet-body">
                                <h2 class="snippet-title">Tables</h2>
                                <p class="snippet-description">Tables are perfect for displaying data in a structured format. they can be used to present tabular data with rows and columns.</p>
                            </div>
                            <div class="snippet-footer"></div>
                        </div>
                    </div>

                    <!-- Dialogs -->
                    <div class="tiny-12 small-6 medium-4 large-3">
                        <div class="snippet disabled">
                            <div class="snippet-image">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" width="400" height="300" viewBox="0 0 400 300" fill="none">
                                    <rect x="53" y="53" width="294" height="194" rx="13" fill="var(--color-bg)" />
                                    <rect x="76" y="76" width="176" height="20" rx="10" fill="var(--color-text-offset)" />
                                    <rect x="76" y="118" width="216" height="12" rx="6" fill="var(--color-border)" />
                                    <rect x="76" y="144" width="216" height="12" rx="6" fill="var(--color-border)" />
                                    <rect x="76" y="170" width="165" height="12" rx="6" fill="var(--color-border)" />
                                    <rect x="252" y="203" width="72" height="21" rx="4" fill="var(--color-border)" />
                                    <rect x="164" y="203" width="72" height="21" rx="4" fill="var(--color-primary)" />
                                    <g clip-path="url(#clip0_6_34)">
                                        <path d="M308.293 92.2936C308.105 92.4812 308 92.7356 308 93.0008C308 93.266 308.105 93.5204 308.293 93.7079C308.481 93.8954 308.735 94.0007 309 94.0006C309.266 94.0006 309.52 93.8952 309.707 93.7076L315.882 87.5336C315.898 87.518 315.916 87.5057 315.936 87.4973C315.956 87.4889 315.978 87.4846 316 87.4846C316.022 87.4846 316.044 87.4889 316.064 87.4973C316.084 87.5057 316.103 87.518 316.118 87.5336L322.293 93.7089C322.386 93.8018 322.496 93.8755 322.617 93.9258C322.738 93.976 322.869 94.0019 323 94.002C323.131 94.002 323.261 93.9762 323.383 93.9259C323.504 93.8757 323.614 93.8021 323.707 93.7092C323.8 93.6164 323.874 93.5061 323.924 93.3848C323.974 93.2635 324 93.1335 324 93.0021C324 92.8708 323.974 92.7407 323.924 92.6194C323.874 92.498 323.8 92.3878 323.707 92.2949L317.533 86.1182C317.518 86.1027 317.506 86.0843 317.497 86.0641C317.489 86.0439 317.484 86.0221 317.484 86.0002C317.484 85.9783 317.489 85.9566 317.497 85.9363C317.506 85.9161 317.518 85.8977 317.533 85.8822L323.709 79.7076C323.896 79.5198 324.001 79.2652 324.001 78.9998C324.001 78.7345 323.896 78.4801 323.708 78.2926C323.52 78.105 323.265 77.9998 323 78C322.735 78.0002 322.48 78.1058 322.293 78.2936L316.118 84.4669C316.103 84.4824 316.084 84.4947 316.064 84.5031C316.044 84.5115 316.022 84.5159 316 84.5159C315.978 84.5159 315.956 84.5115 315.936 84.5031C315.916 84.4947 315.898 84.4824 315.882 84.4669L309.707 78.2936C309.615 78.2007 309.504 78.127 309.383 78.0767C309.262 78.0264 309.132 78.0005 309 78.0005C308.735 78.0004 308.481 78.1057 308.293 78.2932C308.105 78.4807 308 78.7351 308 79.0003C308 79.2656 308.105 79.52 308.293 79.7076L314.467 85.8822C314.482 85.8977 314.495 85.9161 314.503 85.9363C314.511 85.9566 314.516 85.9783 314.516 86.0002C314.516 86.0221 314.511 86.0439 314.503 86.0641C314.495 86.0843 314.482 86.1027 314.467 86.1182L308.293 92.2936Z" fill="#718096" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_6_34">
                                            <rect width="16" height="16" fill="var(--color-bg)" transform="translate(308 78)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="snippet-body">
                                <h2 class="snippet-title">Dialogs</h2>
                                <p class="snippet-description">Dialogs are user interface components that display crucial messages or request input through modal windows, ensuring key information or actions are effectively communicated.</p>
                            </div>
                            <div class="snippet-footer"></div>
                        </div>
                    </div>

                    <!-- Typohraphy -->
                    <div class="tiny-12 small-6 medium-4 large-3">
                        <div class="snippet disabled">
                            <div class="snippet-image">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" width="400" height="300" viewBox="0 0 400 300" fill="none">
                                    <rect x="53" y="76" width="176" height="29" rx="14.5" fill="var(--color-primary)" />
                                    <rect x="53" y="123" width="294" height="12" rx="6" fill="var(--color-border)" />
                                    <rect x="53" y="153" width="294" height="12" rx="6" fill="var(--color-border)" />
                                    <rect x="53" y="183" width="294" height="12" rx="6" fill="var(--color-border)" />
                                    <rect x="53" y="213" width="224" height="12" rx="6" fill="var(--color-border)" />
                                </svg>
                            </div>
                            <div class="snippet-body">
                                <h2 class="snippet-title">Typography</h2>
                                <p class="snippet-description">Typography implements consistent, visually appealing text formatting across different sections of the interface, ensuring readability and enhancing the overall user experience.</p>
                            </div>
                            <div class="snippet-footer"></div>
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