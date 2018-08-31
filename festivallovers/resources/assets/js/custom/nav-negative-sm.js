// Login-Panel ein- und ausblenden
$("#ticket-black").click(function () {
    $("#login-black").toggle();
});
// Auf Startseite gehen
$("#home-black").click(function(){
    window.location = $(this).find("a:first").attr("href");
    return false;
});
// Auf Ticketseite gehen
$("#go-to-ticket-black").click(function(){
    window.location = $(this).find("a:first").attr("href");
    return false;
});
$("#close").click(function () {
    // Scrolling aktivieren
    let html = document.documentElement;
    html.classList.remove('disable-scrolling');
    // normale Navi wieder ausblenden
    $("#nav-normal").removeClass('d-none');
    $("#nav-normal").addClass('d-show');
    // Schwarzes Menufenster ausblenden
    $("#navigation__menu-neg").removeClass('d-show');
    $("#navigation__menu-neg").addClass('d-none');
});

// Menupunkte bei schwarzem Overlay verlinken
$(".nav__list-element").click(function(){
    window.location = $(this).find("a:first").attr("href");
    return false;
});
