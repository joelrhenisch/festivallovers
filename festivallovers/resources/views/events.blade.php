@extends('master')

@section('content')

    <section class="heading__titel">
        <h1>Alles für deinen Musikgeschmack</h1>
    </section>

    <section class="heading__lead">
        <h3 class="font-lead">Unsere FestivalLovers verdienen nur das Beste. Wir bringen euch alle Festivals, Stars & Bands sowie Infos für einen genialen und unvergessenlichen Musiksommer.</h3>
    </section>

    <!-- DESKTOP -->
    <div id="events-lg">
        @include ('layouts.filter')

        <div class="filter">
            <div class="action__box--white">FILTER ZURÜCKSETZEN</div>
        </div>

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
                            Kanton auswählen
                        </div>
                        <img src={{asset('icons/steuerung_dropdown.svg')}} height="10px" alt="country">
                    </div>

                    <div class="events__displayoption">
                        <div id="btn__events-liste" class="mr-3 d-flex align-items-center">
                            <div class="events__boxside d-flex">
                                <img src={{asset('icons/steuerung_kacheln.svg')}} height="15px" alt="display option">
                            </div>
                            Kacheln
                        </div>
                        <div id="btn__events-kacheln" class="d-flex align-items-center">
                            <div  class="events__boxside d-flex">
                                <img src={{asset('icons/steuerung_liste.svg')}} height="15px" alt="events">
                            </div>
                            Liste
                        </div>
                    </div>
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
                <div class="action__boxtransparent">MEHR ANZEIGEN
                    <span class="filter__number">9</span>
                </div>
            </div>
        </div>
</div>


<!-- Mobile -->
<div id="events-sm">
<div class="action__box--black">FILTER ANZEIGEN</div>

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
                    <div id="btn__events-liste-sm" class="mr-3 d-flex align-items-center">
                        <div class="events__boxside d-flex">
                            <img src={{asset('icons/steuerung_kacheln.svg')}} height="15px" alt="display option">
                        </div>
                    </div>
                    <div id="btn__events-kacheln-sm" class="d-flex align-items-center">
                        <div  class="events__boxside d-flex">
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
            <div class="action__boxtransparent">MEHR ANZEIGEN</div>
        </div>
    </div>
</div>


<script>
    // DESKTOP

    // events: Zwischen Kacheln und Liste switchen
    $( document ).ready(function() {
        console.log( "dom is ready " );

        $("#btn__events-kacheln").click(function () {
            $("#eventslist_kacheln").hide();
            $("#eventslist_liste").show();
        });

        $("#btn__events-liste").click(function () {
            $("#eventslist_liste").hide();
            $("#eventslist_kacheln").show();
        });

    });


    // MOBILE

    // events: Zwischen Kacheln und Liste switchen
    $("#btn__events-kacheln-sm").click(function () {
        $("#eventslist_kacheln-sm").hide();
        $("#eventslist_liste-sm").show();
    });

    $("#btn__events-liste-sm").click(function () {
        $("#eventslist_liste-sm").hide();
        $("#eventslist_kacheln-sm").show();
    });



</script>


@endsection