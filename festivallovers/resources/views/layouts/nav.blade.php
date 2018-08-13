<div id="nav-switch">
<div id="nav-normal" class="nav sticky">
    <div id="menu" class="nav__btn-menu col-4">
        <div id="nav__btn-menu" class="nav__btn-menu-container">
            <img id="navigation-menu-black" src={{asset('icons/navigation_menu.svg')}} alt="Menu">
            <img id="navigation-menu-gray" src={{asset('icons/navigation_menu_gray.svg')}} alt="Menu">
            MENU
        </div>
        <!-- Zurück-Button ist nur für Mobile, bei Filterauswahl -->
        <div class="nav__btn-back d-none" id="nav__btn-back">
            <img class="mr-2" src={{asset('icons/navigation_zurueck.svg')}} height="20px" alt="back">
            ZURÜCK
        </div>
    </div>

    <div class="nav__logo-festivallovers col-4">
        <img id="logo" src={{asset('images/FestivalLovers_Logo.jpg')}} height="33px" alt="FestivalLovers Logo">
        <img id="logo-sm" src={{asset('images/FestivalLovers_Logo-sm.jpg')}} height="33px" alt="FestivalLovers Logo">
    </div>

    <div class="nav__login-ticket col-4">
        <div id="ticket-white" class="nav__btn-login">
            <img id="navigation-login-gray" src={{asset('icons/navigation_login_gray.svg')}} height="33px" alt="Login">
            <img id="navigation-login-black" src={{asset('icons/navigation_login.svg')}} height="33px" alt="Login">
            <p id="text-login">LOGIN</p>

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

        </div>
        <div class="nav__btn-ticket-kaufen">
            <img id="navigation-ticket-gray" src={{asset('icons/navigation_ticketkauf_gray.svg')}} height="25px" alt="Ticket">
            <img id="navigation-ticket-black" src={{asset('icons/navigation_ticketkauf.svg')}} height="25px" alt="Ticket">
            <p id="text-ticketkaufen">TICKETS KAUFEN</p>
        </div>
    </div>
</div>
</div>


<script>

    // Login-Panel ein- und ausblenden
    $("#ticket-white").click(function () {
        $("#login-white").toggle();
    });


    // wenn links oben auf menu geklickt wird
     $("#menu").click(function(){

         // Scrolling deaktivieren
         let html = document.documentElement;
         html.classList.add('disable-scrolling');

         // Schwarzes Menufenster einblenden
         if( $("#navigation__menu-neg").hasClass("d-none")) {
             $("#navigation__menu-neg").removeClass('d-none');
             $("#navigation__menu-neg").addClass('d-show');
             // normale Navi im Hintergrund ausblenden
             $("#nav-normal").removeClass('d-show');
             $("#nav-normal").addClass('d-none');
         }


    });

</script>