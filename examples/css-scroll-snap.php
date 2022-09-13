
<style>
    :root {
        --padding: 60px;
        --gap: 10px;
    }
    .wrapper {
        --padding: 60px;
        --gap: 10px;
        overflow: hidden;
        height: calc( (100vw/2) - (100vw/5) + ((var(--padding)*2) - var(--gap)));
        display: grid;
        grid-template-columns: 1fr 5fr;
        grid-gap: var(--gap);
    }
    .wrapper .gallery {
        overflow: scroll;
        scroll-behavior: smooth;
        -ms-scroll-snap-type: x mandatory;
        scroll-snap-type: x mandatory;
        height: 100%;
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        gap: 10px;
    }
    .wrapper .gallery .bg {
        scroll-snap-align: start;
        min-height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        display: block;
        max-width: 100%;
    }
    .wrapper .gallery .bg.bg-1 {
        background-color: #e42c64;
    }
    .wrapper .gallery .bg.bg-2 {
        background-color: #614ad3;
    }
    .wrapper .gallery .bg.bg-3 {
        background-color: #08ffc8;
    }
    .wrapper .gallery .bg.bg-4 {
        background-color: #f6003c;
    }
    .wrapper .gallery .bg.bg-5 {
        background-color: #FFD800;
    }
    .wrapper .gallery .bg.bg-6 {
        background-color: #a1d4e2;
    }
    .wrapper .gallery .bg.bg-7 {
        background-color: #1fda9a;
    }
    .wrapper .img-navigation {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        overflow-x: scroll;
        scroll-behavior: smooth;
    }
    .wrapper .img-navigation a.bg-button {
        min-height: 25%;
        overflow: hidden;
        display: -webkit-box;
        display: flex;
        margin-bottom: 10px;
        scroll-snap-align: start;
        -webkit-transition: 0.3s ease all;
        transition: 0.3s ease all;
        -o-object-fit: cover;
        object-fit: cover;
        height: 100%;
        width: 100%;
        display: block;
        max-width: 100%;
    }
    .wrapper .img-navigation a.bg-button.bg-button-1 {
        background-color: #e42c64;
    }
    .wrapper .img-navigation a.bg-button.bg-button-2 {
        background-color: #614ad3;
    }
    .wrapper .img-navigation a.bg-button.bg-button-3 {
        background-color: #08ffc8;
    }
    .wrapper .img-navigation a.bg-button.bg-button-4 {
        background-color: #f6003c;
    }
    .wrapper .img-navigation a.bg-button.bg-button-5 {
        background-color: #FFD800;
    }
    .wrapper .img-navigation a.bg-button.bg-button-6 {
        background-color: #a1d4e2;
    }
    .wrapper .img-navigation a.bg-button.bg-button-7 {
        background-color: #1fda9a;
    }
</style>

<div class="wrapper">
    <nav class="img-navigation">
        <a href="#image-1" class="bg-button bg-button-1"></a>
        <a href="#image-2" class="bg-button bg-button-2"></a>
        <a href="#image-3" class="bg-button bg-button-3"></a>
        <a href="#image-4" class="bg-button bg-button-4"></a>
        <a href="#image-5" class="bg-button bg-button-5"></a>
        <a href="#image-6" class="bg-button bg-button-6"></a>
        <a href="#image-7" class="bg-button bg-button-7"></a>
    </nav>
    <div class="gallery">
        <div id="image-1" class="bg bg-1"></div>
        <div id="image-2" class="bg bg-2"></div>
        <div id="image-3" class="bg bg-3"></div>
        <div id="image-4" class="bg bg-4"></div>
        <div id="image-5" class="bg bg-5"></div>
        <div id="image-6" class="bg bg-6"></div>
        <div id="image-7" class="bg bg-7"></div>
    </div>
</div>