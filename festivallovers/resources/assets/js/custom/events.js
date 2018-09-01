$(document).ready(function () {
    // Filter zurücksetzen
    $("#events-result-reset").click(function () {
        $("#jazz").removeClass("--darken-yellow");
        $("#hiphop").removeClass("--darken-pink");
        $("#indie").removeClass("--darken-mint");
        $("#poprock").removeClass("--darken-blue");
        $("#electronic").removeClass("--darken-violet");
    });

    // MOBILE
    // zum Start Icon von Liste auf Opacity 0.5 setzen
    $("#icon-liste").addClass('opacity-50');

    // DESKTOP
    // events: Zwischen Kacheln und Liste switchen - Text der jeweiligen Ansicht bold setzen
    $("#btn__events-kacheln").click(function () {
        $("#eventslist_kacheln").show();
        $("#eventslist_liste").hide();
        $("#text-kacheln").addClass('bold');
        $("#text-liste").removeClass('bold');
    });
    $("#btn__events-liste").click(function () {
        $("#eventslist_liste").show();
        $("#eventslist_kacheln").hide();
        $("#text-liste").addClass('bold');
        $("#text-kacheln").removeClass('bold');
    });

    // events: Hover auf Kacheln-/Listensymbol
    $("#btn__events-kacheln").click(function () {
        $("#eventslist_kacheln").show();
        $("#eventslist_liste").hide();
        $("#text-kacheln").addClass('bold');
        $("#text-liste").removeClass('bold');
    });
    $("#btn__events-liste").click(function () {
        $("#eventslist_liste").show();
        $("#eventslist_kacheln").hide();
        $("#text-liste").addClass('bold');
        $("#text-kacheln").removeClass('bold');
    });

    // MOBILE
    // events: Zwischen Kacheln und Liste switchen - Icon der passiven Ansicht auf Opacity 0.5 setzen
    $("#btn__events-kacheln-sm").click(function () {
        $("#eventslist_kacheln-sm").show();
        $("#eventslist_liste-sm").hide();
        $("#icon-liste").addClass('opacity-50');
        $("#icon-liste").removeClass('opacity-100');
        $("#icon-kacheln").addClass('opacity-100');
        $("#icon-kacheln").removeClass('opacity-50');
    });
    $("#btn__events-liste-sm").click(function () {
        $("#eventslist_liste-sm").show();
        $("#eventslist_kacheln-sm").hide();
        $("#icon-liste").removeClass('opacity-50');
        $("#icon-liste").addClass('opacity-100');
        $("#icon-kacheln").addClass('opacity-50');
        $("#icon-kacheln").removeClass('opacity-100');
    });

    // Zurück zu den Filtern
    $("#events-filter-show").click(function () {
        window.location = $(this).find("a:first").attr("href");
        return false;
    });

    // Zum jeweiligen Event weiterverlinkt werden (Kacheln-Ansicht)
    $(".img__container").click(function () {
        window.location = $(this).find("a:first").attr("href");
        return false;
    });

    // Zum jeweiligen Event weiterverlinkt werden (Listen-Ansicht)
    $(".eventslist__row").click(function () {
        window.location = $(this).find("a:first").attr("href");
        return false;
    });
});