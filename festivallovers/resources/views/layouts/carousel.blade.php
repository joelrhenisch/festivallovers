{{--START CAROUSEL--}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    {{-- DESKTOP - mit Fullscreen--}}
    <div id="carousel-lg">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="/images/carousel_image-1_fullscreen.jpg" alt="Crowd" data-fancybox="images">
                    <img class="d-block" src="images/carousel_image-1.jpg" >
                </a>
            </div>
            <div class="carousel-item">
                <a href="/images/carousel_image-2_fullscreen.jpg" alt="Women Fan" data-fancybox="images">
                    <img class="d-block" src="images/carousel_image-2.jpg" >
                </a>
            </div>
            <div class="carousel-item">
                <a href="/images/carousel_image-3_fullscreen.jpg" alt="Women Fan" data-fancybox="images">
                    <img class="d-block" src="images/carousel_image-3.jpg" >
                </a>
            </div>
        </div>
    </div>

    {{-- MOBILE - ohne Fullscreen--}}
    <div id="carousel-sm">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block" src="images/carousel_image-1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="images/carousel_image-2.jpg"
                     alt="Women Fan">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="images/carousel_image-3.jpg" alt="Crows Surfing">
            </div>
        </div>
    </div>


    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="hide-carousel-arrow-sm sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
{{--STOP CAROUSEL--}}

<script>

    // Carousel von Desktop bei Mobile ausblenden. Dies musste per jQuery gelöst werden, weil sonst Konflikte im DOM entstehen zwischen den Mobile/Desktop-Carousel
    if($('#carousel-lg').css('display') == 'none') {
        $("#carousel-lg").remove();
    }

</script>