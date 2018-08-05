<div id="login"> // dient für das Ein- und Ausblenden vom Loginpanel
    <div class="nav sticky">
        <div class="nav__btn-menu col-4">
            <div class="nav__btn-menu-container">
                <img id="navigation-menu-black" src={{asset('icons/navigation_menu.svg')}} alt="Menu">
                <img id="navigation-menu-gray" src={{asset('icons/navigation_menu_gray.svg')}} alt="Menu">
                MENU
            </div>
        </div>

        <div class="nav__logo-festivallovers col-4">
            <img src={{asset('images/FestivalLovers_Logo.jpg')}} height="33px" alt="FestivalLovers Logo">
        </div>

        <div class="nav__login-ticket col-4">
            <div @click="show = !show" class="nav__btn-login">
                <img id="navigation-login-gray" src={{asset('icons/navigation_login_gray.svg')}} height="33px" alt="Login">
                <img id="navigation-login-black" src={{asset('icons/navigation_login.svg')}} height="33px" alt="Login">
                <p>LOGIN</p>
            </div>
            <div class="nav__btn-ticket-kaufen">
                <img id="navigation-ticket-gray" src={{asset('icons/navigation_ticketkauf_gray.svg')}} alt="Ticket">
                <img id="navigation-ticket-black" src={{asset('icons/navigation_ticketkauf.svg')}} alt="Ticket">
                <p>TICKETS KAUFEN</p>
            </div>
        </div>
    </div>


    // Login Box
    <div v-if="show" class="login__box">
        <div class="login__box-top">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="E-Mail Adresse" aria-label="E-Mail Adresse"
                       aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Passwort" aria-label="Passwort"
                       aria-describedby="basic-addon2">
            </div>
            <div class="action__box-white w-50 mx-auto mt-4 mb-3">
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
</div>

<script>
    new Vue({
        el: '#login',
        data: {
            show: false
        }
    })
</script>