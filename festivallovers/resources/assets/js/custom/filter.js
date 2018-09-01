// Aktiver Zustand der Filterbuttons
$(function () {
    $("#jazz").click(function () {
        $(this).toggleClass("--darken-yellow");
    });
    $("#hiphop").click(function () {
        $(this).toggleClass("--darken-pink");
    });
    $("#indie").click(function () {
        $(this).toggleClass("--darken-mint");
    });
    $("#poprock").click(function () {
        $(this).toggleClass("--darken-blue");
    });
    $("#electronic").click(function () {
        $(this).toggleClass("--darken-violet");
    });

    // Filter zurücksetzen
    $("#result-reset").click(function () {
        $("#jazz").removeClass("--darken-yellow");
        $("#hiphop").removeClass("--darken-pink");
        $("#indie").removeClass("--darken-mint");
        $("#poprock").removeClass("--darken-blue");
        $("#electronic").removeClass("--darken-violet");
    });
});