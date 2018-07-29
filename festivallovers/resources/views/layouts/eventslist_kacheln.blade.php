<div class="events__container">

    {{--START CONTROLBAR--}}
    <div class="events__barcontainer">
        <div class="events__bar">

            <div class="events__date d-flex">
                <div class="events__boxside">
                    Datum
                </div>
                <img src={{asset('icons/steuerung_sortierung.svg')}} height="20px" alt="date">
            </div>

            <div class="events__choosecountry d-flex align-items-center">
                <div class="events__boxside">
                    Kanton auswählen
                </div>
                <img src={{asset('icons/steuerung_dropdown.svg')}} height="10px" alt="country">
            </div>

            <div class="events__displayoption">
                <div class="mr-3 d-flex align-items-center">
                    <div class="events__boxside d-flex">
                        <img src={{asset('icons/steuerung_kacheln.svg')}} height="15px" alt="display option">
                    </div>
                    Kacheln
                </div>
                <div class="d-flex align-items-center">
                    <div class="events__boxside d-flex">
                        <img src={{asset('icons/steuerung_liste.svg')}} height="15px" alt="events">
                    </div>
                    Liste
                </div>
            </div>
        </div>
    </div>
    {{--END CONTROLBAR--}}

    {{--KACHELN--}}
    {{--START FESTIVAL 1--}}
    <div class="events__rowscontainerKacheln">
        <div class="eventslist__EventKacheln">
            <div class="eventslist__EventKacheln img__container">
                <img id="surlelac-scaled" src={{asset('images/BigFestival.png')}} alt="sur le lac">
                <div class="logo__overImage">
                    <img src={{asset('icons/music_indie.svg')}} height="20px" alt="logo indie">
                </div>
            </div>
                <div class="eventslist__ContentKacheln">
                <p class="locationDate">Eggersriet SG / 13. Aug – 15. Aug 2016</p>
                <p class="title">Sur Le Lac</p>
                <p class="description">Das Festival präsentiert Künstler, welche sich im Spannungsfeld zwischen verschiedensten musikalischen Strömungen und Einflüssen ...</p>
                </div>

                <div class="eventslist__ContentNotice">
                    <img src={{asset('icons/detail_merken.svg')}}  height="20px" alt="notice">
                    <p class="statusText">MERKEN</p>
                </div>
            </div>

        </div>
    </div>



    {{--START FESTIVAL 1--}}
    {{--<div class="events__rowscontainer">--}}
        {{--<div class="eventslist__row">--}}
            {{--<div class="eventslist__img">--}}
                {{--<img src={{asset('images/Teaser_Liste.png')}} height="104px" alt="sur le lac">--}}
            {{--</div>--}}
            {{--<div class="eventslist__icon bgmint">--}}
                {{--<img src={{asset('icons/music_indie.svg')}} height="60px" width="60px" alt="icon indie">--}}
            {{--</div>--}}
            {{--<div class="eventslist__name">--}}
                {{--Sur Le Lac--}}
            {{--</div>--}}
            {{--<div class="eventslist__location">--}}
                {{--Eggersriet SG--}}
            {{--</div>--}}
            {{--<div class="eventslist__date">--}}
                {{--13. Aug – 15. Aug 2016--}}
            {{--</div>--}}
            {{--<div class="eventslist__notice indie">--}}
                {{--<div class="eventslist__noticeimg">--}}
                    {{--<img src={{asset('icons/detail_merken.svg')}}  height="20px" alt="notice">--}}
                {{--</div>--}}
                {{--<div class="eventslist_noticedescription">--}}
                    {{--MERKEN--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--END FESTIVAL 1--}}

    {{--START FESTIVAL 2--}}
    {{--<div class="events__rowscontainer">--}}
        {{--<div class="eventslist__row">--}}
            {{--<div class="eventslist__img">--}}
                {{--<img src={{asset('images/stars_of_sounds.png')}} height="104px" alt="stars of sounds">--}}
            {{--</div>--}}
            {{--<div class="eventslist__icon bgpink">--}}
                {{--<img src={{asset('icons/music_hiphop.svg')}} height="60px" width="60px" alt="icon hiphop">--}}
            {{--</div>--}}
            {{--<div class="eventslist__name">--}}
                {{--Stars of Sounds--}}
            {{--</div>--}}
            {{--<div class="eventslist__location">--}}
                {{--Aarberg BE--}}
            {{--</div>--}}
            {{--<div class="eventslist__date">--}}
                {{--08. Jul — 09 Jul 2016--}}
            {{--</div>--}}
            {{--<div class="eventslist__notice hiphop">--}}
                {{--<div class="eventslist__noticeimg">--}}
                    {{--<img src={{asset('icons/detail_merken_filled.svg')}}  height="20px" alt="notice filled">--}}
                {{--</div>--}}
                {{--<div class="eventslist_noticedescription">--}}
                    {{--GEMERKT--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--END FESTIVAL 2--}}

{{--MEHR ANZEIGEN-BUTTON--}}
    <div class="filter filter__eventslistfixmargin">
        <div class="action__boxtransparent">MEHR ANZEIGEN
            <span class="filter__number">9</span>
        </div>
    </div>

</div>


<div class="login__box">

    <div class="login__boxTop">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="E-Mail Adresse" aria-label="E-Mail Adresse" aria-describedby="basic-addon2">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Passwort" aria-label="Passwort" aria-describedby="basic-addon2">
        </div>
        <div class="action__boxwhite w-50 mx-auto mt-4 mb-3">
            ANMELDEN
        </div>
        <p><span class="boldUnderline">Passwort</span> <span>vergessen?</span></p>
    </div>

    <div class="login__boxBottom">
        <div class="login__registerBox">
            <p class="mx-auto mb-0">Neu bei FestivalLovers?<br>Jetzt <span class="boldUnderline">registrieren</span>.</p>
        </div>
    </div>

</div>

