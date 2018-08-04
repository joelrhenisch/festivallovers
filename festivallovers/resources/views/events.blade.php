
@extends('master')

@section('content')

    <section class="heading__titel">
        <h1>Alles für deinen Musikgeschmack</h1>
    </section>

    <section class="heading__lead">
        <h3>
            Unsere FestivalLovers verdienen nur das Beste. Wir bringen euch alle Festivals, Stars & Bands sowie Infos
            für einen genialen und unvergessenlichen Musiksommer.
        </h3>
    </section>


    @include ('layouts.filter')

    <div class="filter">
        <div class="action__boxwhite">FILTER ZURÜCKSETZEN</div>
    </div>


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
                    <div id="btn__eventsListe" class="mr-3 d-flex align-items-center">
                        <div class="events__boxside d-flex">
                            <img src={{asset('icons/steuerung_kacheln.svg')}} height="15px" alt="display option">
                        </div>
                        Kacheln
                    </div>
                    <div id="btn__eventsKacheln" class="d-flex align-items-center">
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


<script>
    // events: Zwischen Kacheln und Liste switchen
    $("#btn__eventsListe").click(function () {
        $("#eventslist_kacheln").hide();
        $("#eventslist_liste").show();
    });

    $("#btn__eventsKacheln").click(function () {
        $("#eventslist_liste").hide();
        $("#eventslist_kacheln").show();
    });
</script>






@endsection