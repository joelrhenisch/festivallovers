// Filter für Mobile einblenden
$("#filter-sm").click(function () {
    window.location = $(this).find("a:first").attr("href");
    return false;
});

// Button zu Events verlinken. (Sucht erstes a-Element und verwendet das href-Attribut davon)
$("#result-show-lg").click(function () {
    window.location = $(this).find("a:first").attr("href");
    return false;
});

// Filter zurücksetzen
$("#result-reset-lg").click(function () {
    $("#jazz").removeClass("--darken-yellow");
    $("#hiphop").removeClass("--darken-pink");
    $("#indie").removeClass("--darken-mint");
    $("#poprock").removeClass("--darken-blue");
    $("#electronic").removeClass("--darken-violet");
});

// einzelne Artikel aufklappen
$("#article-1-show").click(function () {
    $("#article-1").toggle();
});
$("#article-2-show").click(function () {
    $("#article-2").toggle();
});
$("#article-3-show").click(function () {
    $("#article-3").toggle();
});
$("#article-4-show").click(function () {
    $("#article-4").toggle();
});
$("#article-5-show").click(function () {
    $("#article-5").toggle();
});
$("#article-6-show").click(function () {
    $("#article-6").toggle();
});

// weitere Artikel aufklappen via Button, unterhalb von letztem Artikel
$("#article__btn-show-more").click(function () {
    $("#article__container").show();
    $("#article__btn-show-more").hide();
});

// weitere News einblenden via Button, unterhalb von letzter News
$("#news__btn-show-more").click(function () {
    $("#news-show-more").show();
    $("#hide-himself").hide();
});