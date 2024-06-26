<?php
$searchQuery = "";
if(isset($_GET['q'])) {
    $searchQuery = $_GET['q']; 
}
?>

<form role="search" action="/blog/search/" method="get" class="search">
    <label class="search-label" for="search" aria-labelledby="searchTitle">Search:</label>
    <input id="search" class="search-input" name="q" type="text" placeholder="e.g. native modal" required value="<?php echo $searchQuery; ?>">
    <button aria-label="Search articles" name="Search articles" class="search-button" type="submit" value="Search">
        <span class="screen-reader-text">Search</span>
        <svg height="32px" fill="inherit" version="1.1" viewBox="0 0 32 32" width="32px" xmlns="http://www.w3.org/2000/svg">
            <g fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1">
                <g id="icon-111-search">
                    <path d="M19.4271164,21.4271164 C18.0372495,22.4174803 16.3366522,23 14.5,23 C9.80557939,23 6,19.1944206 6,14.5 C6,9.80557939 9.80557939,6 14.5,6 C19.1944206,6 23,9.80557939 23,14.5 C23,16.3366522 22.4174803,18.0372495 21.4271164,19.4271164 L27.0119176,25.0119176 C27.5621186,25.5621186 27.5575313,26.4424687 27.0117185,26.9882815 L26.9882815,27.0117185 C26.4438648,27.5561352 25.5576204,27.5576204 25.0119176,27.0119176 L19.4271164,21.4271164 L19.4271164,21.4271164 Z M14.5,21 C18.0898511,21 21,18.0898511 21,14.5 C21,10.9101489 18.0898511,8 14.5,8 C10.9101489,8 8,10.9101489 8,14.5 C8,18.0898511 10.9101489,21 14.5,21 L14.5,21 Z" id="search" />
                </g>
            </g>
        </svg>
    </button>
</form>