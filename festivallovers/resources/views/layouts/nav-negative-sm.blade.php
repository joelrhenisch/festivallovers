<!-- Start schwarzes Menu -->
<div id="navigation__menu-neg" class="d-none">

    <div class="navigation__menu-container">

        <!-- Nav -->
        <div class="nav-black sticky">
            <div id="close" class="nav__btn-menu col-4">
                <div id="nav__btn-menu-black">
                    <img id="navigation-menu-black" src={{asset('icons/navigation_schliessen_white.svg')}} height="25px" alt="close">
                    Schliessen
                </div>
            </div>

            <div class="nav__logo-festivallovers col-4">
                <img id="logo" src={{asset('images/FestivalLovers_Logo_black.jpg')}} height="33px" alt="FestivalLovers Logo">
                <img id="logo-sm" src={{asset('images/FestivalLovers_Logo-sm_black.png')}} height="33px" alt="FestivalLovers Logo">
            </div>

            <div class="nav__btn-ticket-kaufen-black">
                <img id="navigation-ticket-gray" src={{asset('icons/navigation_login_white.svg')}} height="34px" alt="Login">
                <p id="text-ticketkaufen">TICKETS KAUFEN</p>
            </div>

            <div class="nav__btn-ticket-kaufen-black">
                <img id="navigation-ticket-gray" src={{asset('icons/navigation_ticketkauf_white.svg')}} height="28px" alt="Ticket">
                <p id="text-ticketkaufen">TICKETS KAUFEN</p>
            </div>
        </div>

        <div class="nav__list-container">
            <div class="nav__list-element">Festivals</div>
            <div class="nav__list-element">Magazin</div>
            <div class="nav__list-element">News</div>
        </div>

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


        <div class="nav__background-black"></div>


    </div>

</div>
<!-- Ende schwarzes Menu -->

<script>

    $("#close").click(function () {
        // Scrolling aktivieren
        let html = document.documentElement;
        html.classList.remove('disable-scrolling');

        // Menu schliessen
        let menu = document.getElementById('navigation__menu-neg');
        menu.classList.add('d-none');

    });
</script>
