
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/css/app.css" rel="stylesheet">
    <title>Festival Lovers</title>
</head>

<body>

@include ('layouts.nav')

<section class="heading__titel">
    <h1>Alles für deinen Musikgeschmack</h1>
</section>

<section class="heading__lead">
    <h3>
        Unsere FestivalLovers verdienen nur das Beste. Wir bringen euch<br>
        alle Festivals, Stars & Bands sowie Infos für einen genialen und<br>
        unvergessenlichen Musiksommer.
    </h3>
</section>

@include ('layouts.filter')

<div id="filter" class="filter">
    <div class="action__boxblack">FILTER ZURÜCKSETZEN</div>
</div>

<div class="events__container d-flex align-items-center">
    <div class="events__date d-flex">
        <div class="events__boxleft">
            Datum
        </div>
        <img src={{asset('icons/steuerung_sortierung.svg')}} height="20px" alt="date">
    </div>

    <div class="events__choosecountry d-flex align-items-center">
        <div class="events__boxleft">
            Kanton auswählen
        </div>        <img src={{asset('icons/steuerung_dropdown.svg')}} height="10px" alt="country">
    </div>

    <div class="events__displayoption">
        <div class="mr-3 d-flex align-items-center">
            <div class="events__boxleft d-flex">
                 <img src={{asset('icons/steuerung_kacheln.svg')}} height="15px" alt="kacheln">
            </div>
            Kacheln
        </div>

        <div class="d-flex align-items-center">
            <div class="events__boxleft d-flex">
            <img src={{asset('icons/steuerung_liste.svg')}} height="15px" alt="kacheln">
            </div>
            Liste
         </div>

    </div>
</div>

@include ('layouts.footer')

</body>
</html>
