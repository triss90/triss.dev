<nav class="site-nav">
    <div class="container">
        <div class="row tiny-center">
            <div class="tiny-12 small-4 tiny-center">
                <a href="/" class="logo">
                    <img src="/assets/img/tw.png" alt="Image of Tristan White">
                    <span>Tristan White</span>
                </a>
            </div>
            <div class="tiny-12 small-8 tiny-center">
                <ul class="menu">
                    <li class="item <?php echo ($activePage == 'home') ? 'active' : ''; ?>"><a href="/"><strong>01</strong> home</a></li>
                    <li class="item <?php echo ($activePage == 'projects') ? 'active' : ''; ?>"><a href="/projects"><strong>02</strong> projects</a></li>
                    <li class="item <?php echo ($activePage == 'blog') ? 'active' : ''; ?>"><a href="/blog"><strong>03</strong> articles</a></li>
                    <li class="item <?php echo ($activePage == 'about') ? 'active' : ''; ?>"><a href="/about"><strong>04</strong> about</a></li>
                    <li class="item cta">
                        <button aria-label="Toggle Theme Editor" name="Toggle Theme Editor" class="btn" id="theme-toggle" onclick="toggleThemeMenu()">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 1em; height: 1em;" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-palette">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
                                <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>