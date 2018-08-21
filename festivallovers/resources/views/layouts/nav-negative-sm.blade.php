<!-- Start schwarzes Menu -->
<div id="navigation__menu-neg" class="d-none">

    <div class="navigation__menu-container">

        <!-- Nav -->
        <div class="nav-black sticky">
            <button id="nav__btn-menu-black" class="nav__btn-menu col-5">
                <div id="close">
                    <img id="navigation-menu-black" src={{asset('icons/navigation_schliessen_white.svg')}} height="25px" alt="close">
                    Schliessen
                </div>
            </button>

            <button id="home-black" class="nav__logo-festivallovers col-2">
                <a href="/"></a>
                <img id="logo" src={{asset('images/FestivalLovers_Logo_black.png')}} height="33px" alt="FestivalLovers Logo">
                <img id="logo-sm" src={{asset('images/FestivalLovers_Logo-sm_black.png')}} height="33px" alt="FestivalLovers Logo">
            </button>

            <div class="nav__login-ticket col-5">
                <button id="ticket-black" class="nav__btn-login">
                    <img id="navigation-login-gray" src={{asset('icons/navigation_login_white.svg')}} height="33px" alt="Login">
                    <img id="navigation-login-black" src={{asset('icons/navigation_login.svg')}} height="33px" alt="Login">
                    <p id="text-login">LOGIN</p>


                <!-- Start Login Box -->
                <div id="login-black" class="login__box">
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

                <button id="go-to-ticket-black" class="nav__btn-ticket-kaufen">
                    <a href="/ticketavaible"></a>
                    <img id="navigation-ticket-gray" src={{asset('icons/navigation_ticketkauf_white.svg')}} height="25px" alt="Ticket">
                    <img id="navigation-ticket-black" src={{asset('icons/navigation_ticketkauf.svg')}} height="25px" alt="Ticket">
                    <p id="text-ticketkaufen">TICKETS&nbsp;KAUFEN</p>
                </button>
            </div>
        </div>

        <div class="nav__list-container">
            <div class="nav__list-element">Festivals</div>
            <div class="nav__list-element">Magazin</div>
            <div class="nav__list-element">News</div>
        </div>

        <div id="search-icon-container">
            <div class="nav__search-container">
                <input type="search" class="nav__search">
                <img class="nav__search-image" src={{asset('icons/navigation_suche_white.svg')}} height="35px" alt="search">
            </div>
            <div class="d-flex justify-content-center mt-5">
                <img class="mx-3" src={{asset('icons/socialmedia_facebook_white.svg')}} height="30px" alt="facebook">
                <img class="mx-3" src={{asset('icons/socialmedia_instagram_white.svg')}} height="30px" alt="instagramm">
                <img class="mx-3" src={{asset('icons/socialmedia_snapchat_white.svg')}} height="30px" alt="snapchat">
                <img class="mx-3" src={{asset('icons/socialmedia_youtube_white.svg')}} height="30px" alt="youtube">
                <img class="mx-3" src={{asset('icons/socialmedia_twitter_white.svg')}} height="30px" alt="twitter">
            </div>
        </div>

        <div class="nav__background-black"></div>


    </div>

</div>
<!-- Ende schwarzes Menu -->

<script>

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

</script>
