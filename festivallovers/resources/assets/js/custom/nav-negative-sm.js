// Login-Panel ein- und ausblenden
$("#ticket-black").click(function () {
    // Wenn auf Panel geklickt wird, soll dieses eingeblendet bleiben.
    // (#login-black ist ein untergeordnetes Element von #ticket-black, darum folgende 3 Zeilen
    $("#login-black").click(function () {
        return false;
    });
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

// wenn links oben auf menu geklickt wird
$("#nav__btn-menu-black").click(function () {
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

