<div id="nav-switch">
    <div id="nav-normal" class="nav sticky">
        <div id="nav__btn-menu" class="nav__btn-menu col-4">
            <button id="menu" class="nav__btn-menu-container">
                <img id="navigation-menu-black" src={{asset('icons/navigation_menu.svg')}} alt="Menu">
                <img id="navigation-menu-gray" src={{asset('icons/navigation_menu_gray.svg')}} alt="Menu">
                <span class="nav__btn-menu-text"> MENU </span>
            </button>
            <!-- Zurück-Button ist nur für Mobile, bei Filterauswahl -->
            <button class="nav__btn-back d-none" id="nav__btn-back">
                <img class="mr-2" src={{asset('icons/navigation_zurueck.svg')}} height="20px" alt="back">
                ZURÜCK
                <a href="/events"></a>
            </button>
        </div>

        <button id="home" class="nav__logo-festivallovers col-4">
            <a href="/"></a>
            <img id="logo" src={{asset('images/FestivalLovers_Logo.jpg')}} height="33px" alt="FestivalLovers Logo">
            <img id="logo-sm" src={{asset('images/FestivalLovers_Logo-sm.jpg')}} height="33px" alt="FestivalLovers Logo">
        </button>

        <div class="nav__login-ticket col-4">
            <button class="nav__btn-login">
                <div id="ticket-white"></div>
                <img id="navigation-login-gray" class="position-absolute" src={{asset('icons/navigation_login_gray.svg')}} height="33px" alt="Login">
                <img id="navigation-login-black" src={{asset('icons/navigation_login.svg')}} height="33px" alt="Login">
                <p id="text-login" class="nav__btn-login-ticket-texttitle">LOGIN</p>

                <!-- Start Login Box -->
                <div id="login-white" class="login__box">
                    <div class="login__box-top">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="E-Mail Adresse" aria-label="E-Mail Adresse"
                                   aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Passwort" aria-label="Passwort"
                                   aria-describedby="basic-addon2">
                        </div>
                        <div class="action__box--white w-50 mx-auto mt-4 mb-3">
                            ANMELDEN
                        </div>
                        <p><span class="bold-underline">Passwort</span> <span>vergessen?</span></p>
                    </div>
                    <div class="login__box-bottom">
                        <div class="login__register-box">
                            <p class="mx-auto mb-0">Neu bei FestivalLovers?<br>Jetzt <span
                                        class="bold-underline">registrieren</span>.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Ende Login Box -->
            </button>

            <!-- Ticketkaufen-Button -->
            <button id="go-to-ticket" class="nav__btn-ticket-kaufen">
                <a href="/ticketavaible"></a>
                <img id="navigation-ticket-gray" class="position-absolute" src={{asset('icons/navigation_ticketkauf_gray.svg')}} height="25px" alt="Ticket">
                <img id="navigation-ticket-black" src={{asset('icons/navigation_ticketkauf.svg')}} height="25px" alt="Ticket">
                <p id="text-ticketkaufen" class="nav__btn-login-ticket-texttitle">TICKETS KAUFEN</p>
            </button>
        </div>
    </div>
</div>


<script>

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

</script>