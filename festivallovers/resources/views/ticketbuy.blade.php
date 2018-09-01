@extends('master')

@section('content')

    {{--grüner Header--}}
    <div class="buy__heading">
        <img src={{asset('icons/music_indie.svg')}} height="40px"/>
    </div>

    <div class="pfadleiste__fix-pos-left-events">
        @include ('layouts.pfadleiste')
    </div>
    {{--Titel--}}
    <section class="heading__titel">
        <h1>Tickets für Sur Le Lac</h1>
    </section>

    {{--Lead--}}
    <section class="heading__lead">
        <h3 class="like-h3-Regular">
            Liebe FestivalLovers unsere Festivals sind begehrt, daher sind auch unsere Tickets immer schnell ausverkauft. Sichert euch die besten Angebote – verpasst eure Chance
            nicht!
        </h3>
    </section>

    {{--Content fängt an--}}
    <div class="ticketBuy__container">

        {{--Location und Date--}}
        <div class="ticketbuy__LocDate">
            <div class="singleevent__descriptionLocCalContainer">
                <div class="singleevent__descriptionLocation">
                    <img src={{asset('icons/detail_place.svg')}}  height="20px" alt="location">
                    Eggersriet SG
                </div>

                <div class="singleevent__descriptionCalendar">
                    <img src={{asset('icons/detail_kalender.svg')}}  height="20px" alt="calendar">
                    Fr, 13. - So, 15. Aug 2016
                </div>
            </div>
        </div>

        {{-- FESTIVALEINTRITT--}}
        {{--Tickets: grüner Teil--}}
        <div class="ticketbuy__festivalTicket">
            <div class="ticketbuy__main-container">
                <div style="display: contents" id="app">
                    <h2 class="text-center-sm">Festivaleintritt</h2>
                    <div class="ticketbuy__tickets">
                        <div class="ticketbuy__festivalTicketContainer">
                            <ticket-container></ticket-container>
                        </div>

                    </div>
                    <div class="ticketBuy__submitContainer">
                        <ticket-button></ticket-button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/ticketbuy.js"></script>

@endsection