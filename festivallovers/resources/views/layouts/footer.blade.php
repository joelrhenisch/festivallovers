<!-- Footer Desktop -->
<footer id="footer-lg" class="footer">
    <div class="footer__container">
        <div class="footer__box-left">
            <button id="go-to-events-lg" class="footer__item-left pl-0">
                FESTIVALS
                <a href="/events"></a>
            </button>
            <button id="go-to-magazin-lg" class="footer__item-left">
                MAGAZIN
                <a href="/#magazin"></a>
            </button>
            <button id="go-to-news-lg" class="footer__item-left">
                NEWS
                <a href="/#news"></a>
            </button>
        </div>

        <div class="footer__box-center">
            <button class="footer__icons">
                <img src={{asset('icons/socialmedia_facebook.svg')}} height="20px" alt="facebook">
            </button>
            <button class="footer__icons">
                <img src={{asset('icons/socialmedia_instagram.svg')}} height="20px" alt="instagram">
            </button>
            <button class="footer__icons">
                <img src={{asset('icons/socialmedia_snapchat.svg')}} height="20px" alt="snapchat">
            </button>
            <button class="footer__icons">
                <img src={{asset('icons/socialmedia_youtube.svg')}} height="20px" alt="youtube">
            </button>
            <button class="footer__icons">
                <img src={{asset('icons/socialmedia_twitter.svg')}} height="20px" alt="twitter">
            </button>
        </div>

        <button id="go-to-top-lg" class="footer__item-right">
            BACK TO TOP
            <img class="ml-2" src={{asset('icons/navigation_backtotop.svg')}} height="15px" alt="back to top">
        </button>
    </div>
</footer>

<!-- Footer Smartphone -->
<footer id="footer-sm" class="footer-sm">
    <div class="footer__container">
        <div class="footer__box-top">
            <button id="go-to-events-sm" class="p-0 footer__list-item">
                <a href="/events"></a>
                FESTIVALS
            </button>
            <button id="go-to-magazin-sm" class="p-0 footer__list-item">
                MAGAZIN
                <a href="#magazin"></a>
            </button>
            <button id="go-to-news-sm" class="p-0 footer__list-item">
                NEWS
                <a href="#news"></a>
            </button>
            <button id="go-to-top-sm" class="p-0 footer__list-item">
                <img src={{asset('icons/navigation_backtotop.svg')}} height="15px" alt="back to top">
            </button>
        </div>

        <div class="footer__box-bottom">
            <button class="footer__icons">
                <img src={{asset('icons/socialmedia_facebook.svg')}} height="20px" alt="facebook">
            </button>
            <button class="footer__icons">
                <img src={{asset('icons/socialmedia_instagram.svg')}} height="20px" alt="instagram">
            </button>
            <button class="footer__icons">
                <img src={{asset('icons/socialmedia_snapchat.svg')}} height="20px" alt="snapchat">
            </button>
            <button class="footer__icons">
                <img src={{asset('icons/socialmedia_youtube.svg')}} height="20px" alt="youtube">
            </button>
            <button class="footer__icons">
                <img src={{asset('icons/socialmedia_twitter.svg')}} height="20px" alt="twitter">
            </button>
        </div>
    </div>
</footer>

<script>
    $(document).ready(function () {
        // Desktop
        // Zu Events
        $("#go-to-events-lg").click(function () {
            window.location = $(this).find("a:first").attr("href");
            return false;
        });
        // Zu Magazin
        $("#go-to-magazin-lg").click(function () {
            window.location = $(this).find("a:first").attr("href");
            return false;
        });
        // Zu News
        $("#go-to-news-lg").click(function () {
            window.location = $(this).find("a:first").attr("href");
            return false;
        });
        // Zum Anfang der Seite wechseln
        $("#go-to-top-lg").click(function () {
            $(window).scrollTop(0);
        });
        // Mobile
        // Zu Events
        $("#go-to-events-sm").click(function () {
            window.location = $(this).find("a:first").attr("href");
            return false;
        });
        // Zu Magazin
        $("#go-to-magazin-sm").click(function () {
            window.location = $(this).find("a:first").attr("href");
            return false;
        });
        // Zu News
        $("#go-to-news-sm").click(function () {
            window.location = $(this).find("a:first").attr("href");
            return false;
        });
        // Zum Anfang der Seite wechseln
        $("#go-to-top-sm").click(function () {
            $(window).scrollTop(0);
        });
    });
</script>