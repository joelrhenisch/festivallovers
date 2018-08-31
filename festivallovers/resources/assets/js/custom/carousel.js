// Carousel von Desktop bei Mobile ausblenden. Dies musste per jQuery gelöst werden, weil sonst Konflikte im DOM entstehen zwischen den Mobile/Desktop-Carousel
if($('#carousel-lg').css('display') == 'none') {
    $("#carousel-lg").remove();
}