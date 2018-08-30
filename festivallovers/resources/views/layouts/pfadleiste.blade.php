<div class="d-flex mt-4">
    <div class="dropdown">
        <button class="p-0 mr-3 d-flex btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src={{asset('icons/navigation_home_grey.svg')}} class="pfadleiste__linking" height="18" alt="home">
        </button>

        <img class="mr-3 d-flex" src={{asset('icons/steuerung_pfeil_rechts_grey.svg')}} height="11px" alt="arrow right">

        <span class="mr-2">Festivals</span>
        <button class="p-0 mr-3 d-flex btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src={{asset('icons/steuerung_dropdown_kreise_grey.svg')}} height="18px" alt="arrow down">
        </button>

        <div class="mr-3 dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/events">Festivals</a>
            <a class="dropdown-item" href="/#magazin">Magazin</a>
            <a class="dropdown-item" href="/#news">News</a>
        </div>
    </div>

    <div class="dropdown">
        <img class="mr-3 d-flex" src={{asset('icons/steuerung_pfeil_rechts_grey.svg')}} height="11px" alt="arrow right">

        <span class="mr-2">Sur Le Lac</span>
        <button class="p-0 mr-3 btn d-flex" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src={{asset('icons/steuerung_dropdown_kreise_grey.svg')}} height="18px" alt="arrow down">
        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="">Sur le Lac</a>
            <a class="dropdown-item" href="">Openair Zürich</a>
            <a class="dropdown-item" href="">Musikfestwochen</a>
        </div>
    </div>
</div>

<script>
    // Zu Zahlvorgang
    $(".pfadleiste__linking").click(function () {
        window.location = $(this).find("a:first").attr("href");
        return false;
    });
</script>