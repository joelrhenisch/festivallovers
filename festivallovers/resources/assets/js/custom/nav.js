// Login-Panel ein- und ausblenden
$("#ticket-white").click(function () {
    $("#login-white").toggle();
});
// Auf Startseite gehen
$("#home").click(function () {
    window.location = $(this).find("a:first").attr("href");
    return false;
});
// Auf Ticketseite gehen
$("#go-to-ticket").click(function () {
    window.location = $(this).find("a:first").attr("href");
    return false;
});
// wenn links oben auf menu geklickt wird
$("#menu").click(function () {
    // Scrolling deaktivieren
    let html = document.documentElement;
    html.classList.add('disable-scrolling');
    // Schwarzes Menufenster einblenden
    if ($("#navigation__menu-neg").hasClass("d-none")) {
        $("#navigation__menu-neg").removeClass('d-none');
        $("#navigation__menu-neg").addClass('d-show');
        // normale Navi im Hintergrund ausblenden
        $("#nav-normal").removeClass('d-show');
        $("#nav-normal").addClass('d-none');
    }
});