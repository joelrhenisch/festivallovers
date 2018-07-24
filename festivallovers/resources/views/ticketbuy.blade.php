<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js" type="javascript"></script>
    <title>Festival Lovers</title>
</head>

<body>

@include ('layouts.nav')

<div class="buy__heading">
        <img src={{asset('icons/music_indie.svg')}} height="40px"/>
</div>

<section class="heading__titel">
    <h1>Tickets für Sur Le Lac</h1>
</section>

<section class="heading__lead">
    <h3>
        Liebe FestivalLovers unsere Festivals sind begehrt, daher sind auch unsere Tickets immer schnell ausverkauft<br> Sichert euch die besten Angebote – verpasst eure Chance nicht!
    </h3>
</section>

<div class="ticketBuy__container">

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

    <div class="ticketbuy__festivalTicketContainer">
        <h3>Festivaleintritt</h3>
        <div class="ticketContainer">
            <div class="ticketGreen">
                <img src={{asset('icons/tickets_standard.svg')}}  height="20px" alt="ticket">
                <p class="title">1 Tag Pass</p>
                <p class="price">CHF 75.–</p>
            </div>
        </div>

    </div>


</div>
@include ('layouts.eventslist_buy')

@include ('layouts.footer')

</body>
</html>
