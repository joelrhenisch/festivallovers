@extends('master')

@section('content')

    <div class="pfadleiste__fix-pos-left-events">
        @include ('layouts.pfadleiste')
    </div>

    <section class="heading__titel">
        <h1>Alles für deinen Musikgeschmack</h1>
    </section>

    <section class="heading__lead mt-4">
        <h3 class="font-lead">Unsere FestivalLovers verdienen nur das Beste. Wir bringen euch alle Festivals, Stars & Bands sowie Infos für einen genialen und unvergessenlichen
            Musiksommer.</h3>
    </section>

    <!-- DESKTOP -->
    <div id="events-lg">
        @include ('layouts.filter')

        <div class="filter">
            <button id="events-result-reset" class="action__box--white">FILTER ZURÜCKSETZEN</button>
        </div>

        <div class="events__container">
            {{--START CONTROLBAR--}}
            <div class="events__bar-container">
                <div class="events__bar">

                    <button class="events__date d-flex">
                        <div class="events__boxside">
                            Datum
                        </div>
                        <img src={{asset('icons/steuerung_sortierung.svg')}} height="20px" alt="date">
                    </button>

                    <button class="events__choose-country d-flex align-items-center">
                        <div class="events__boxside">
                            Kanton auswählen
                        </div>
                        <img src={{asset('icons/steuerung_dropdown.svg')}} height="10px" alt="country">
                    </button>

                    <button class="events__displayoption">
                        <div id="btn__events-kacheln" class="mr-3 d-flex align-items-center">
                            <div class="events__boxside d-flex">
                                <img src={{asset('icons/steuerung_kacheln.svg')}} height="15px" alt="display option">
                            </div>
                            <span id="text-kacheln" class="bold">Kacheln</span>
                        </div>
                        <div id="btn__events-liste" class="d-flex align-items-center">
                            <div class="events__boxside d-flex">
                                <img src={{asset('icons/steuerung_liste.svg')}} height="15px" alt="events">
                            </div>
                            <span id="text-liste">Liste</span>
                        </div>
                    </button>
                </div>
            </div>
            {{--END CONTROLBAR--}}

            <div id="eventslist_kacheln">
                @include ('layouts.eventslist_kacheln')
            </div>

            <div id="eventslist_liste">
                @include ('layouts.eventslist_liste')
            </div>

            {{--MEHR ANZEIGEN-BUTTON--}}
            <div class="filter filter__eventslistfixmargin">
                <button class="action__boxtransparent">
                    MEHR ANZEIGEN
                    <span class="filter__number">9</span>
                </button>
            </div>
        </div>
    </div>


    <!-- Mobile -->
    <div id="events-sm">
        <div id="events-filter-show" class="action__box--black mb-5"><a href="/filtering-sm"></a> FILTER ANZEIGEN</div>

        <div class="events__container">
            {{--START CONTROLBAR--}}
            <div class="events__bar-container">
                <div class="events__bar">

                    <div class="events__date d-flex">
                        <div class="events__boxside">
                            Datum
                        </div>
                        <img src={{asset('icons/steuerung_sortierung.svg')}} height="20px" alt="date">
                    </div>

                    <div class="events__choose-country d-flex align-items-center">
                        <div class="events__boxside">
                            Kanton
                        </div>
                        <img src={{asset('icons/steuerung_dropdown.svg')}} height="10px" alt="country">
                    </div>

                    <div class="events__displayoption">
                        <div id="btn__events-kacheln-sm" class="mr-3 d-flex align-items-center">
                            <div id="icon-kacheln" class="events__boxside d-flex">
                                <img src={{asset('icons/steuerung_kacheln.svg')}} height="15px" alt="display option">
                            </div>
                        </div>
                        <div id="btn__events-liste-sm" class="d-flex align-items-center">
                            <div id="icon-liste" class="events__boxside d-flex ">
                                <img src={{asset('icons/steuerung_liste.svg')}} height="15px" alt="events">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--END CONTROLBAR--}}

            <div id="eventslist_kacheln-sm">
                @include ('layouts.eventslist_kacheln-sm')
            </div>

            <div id="eventslist_liste-sm">
                @include ('layouts.eventslist_liste-sm')
            </div>

            {{--MEHR ANZEIGEN-BUTTON--}}
            <div class="filter__eventslistfixmargin">
                <button class="action__boxtransparent">MEHR ANZEIGEN</button>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/events.js"></script>

@endsection