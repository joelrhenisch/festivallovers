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

<div class="filter">
    <div class="action__boxwhite">FILTER ZURÜCKSETZEN</div>
</div>

@include ('layouts.eventslist')

@include ('layouts.footer')

</body>
</html>
