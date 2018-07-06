
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Load custom fonts -->
    <style type="text/css">
        @font-face {
            font-family: 'Adelle';
            src: url('/public/fonts/Adelle_Reg.otf');
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="/css/styles.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/modernizer.css" rel="stylesheet">


</head>

<body>

@include ('layouts.nav')

<section id="title" class="text-center">
    <h1>Auf welche Musik stehst du?</h1>
</section>

<section id="lead" class="text-center">
    <h3>
        Unsere FestivalLovers verdienen nur das Beste. Wir bringen euch<br>
        alle Festivals, Stars & Bands sowie Infos für einen genialen und<br>
        unvergessenlichen Musiksommer.
    </h3>
</section>

<div id="filter" class="filter">

    <div id="jazz" class="box__filter">
        <img id="filter" class="svg-music" src={{asset('icons/music_jazz.svg')}} />
        <span class="genre">JAZZ</span> <span class="number">20</span>
    </div>

    <div id="hiphop" class="box__filter">
        <img id="filter" class="svg-music" src={{asset('icons/music_hiphop.svg')}} />
        <span class="genre">HIPHOP</span> <span class="number">9</span>
    </div>

    <div id="indie" class="box__filter">
        <img id="filter" class="svg-music" src={{asset('icons/music_indie.svg')}} />
        <span class="genre">INDIE</span> <span class="number">11</span>
    </div>

    <div id="poprock" class="box__filter">
        <img id="filter" class="svg-music" src={{asset('icons/music_poprock.svg')}} />
        <span class="genre">POP & ROCK</span> <span class="number">35</span>
    </div>

    <div id="electronic" class="box__filter">
        <img id="filter" class="svg-music" src={{asset('icons/music_electronic.svg')}} />
        <span class="genre">ELECTRONICS</span> <span class="number">28</span>
    </div>

    <div id="genres" class="box_genres">
        <span class="mehrgenres">Mehr Genres</span>
    </div>

</div>

<div id="filter" class="filter">
    <div id="filterreset" class="filter__reset">FILTER ZURÜCKSETZEN</div>
    <div id="filtershow" class="filter__show">ERGEBNIS ANZEIGEN</div>
</div>

<section class="bigteaser">
    <img id="concert" class="img__bigteaser" src={{asset('images/BigTeaser.png')}} />
</section>

<div id="magazin">
    <h1 class="text-center">Magazin</h1>

    <div class="container">
        <div class="row">

        <article class="col">
            <h3> Einfach bloss nichts vergessen </h3>
            <p> Zelt, Schlafsack, Isomatte vergessen: 3 Tage wach! Regenjacke, Mütze, Handtuch: 3 Tage nass! Zahnbürste, Deo, Socken: 3 Tage baah! Es geht auch anders. Der Festivalguide Check gegen Alzheimer und Co </p>
        </article>

        <article class="col">
            <h3> Einfach bloss nichts vergessen </h3>
            <p> Zelt, Schlafsack, Isomatte vergessen: 3 Tage wach! Regenjacke, Mütze, Handtuch: 3 Tage nass! Zahnbürste, Deo, Socken: 3 Tage baah! Es geht auch anders. Der Festivalguide Check gegen Alzheimer und Co </p>
        </article>

        <article class="col">
            <h3> Einfach bloss nichts vergessen </h3>
            <p> Zelt, Schlafsack, Isomatte vergessen: 3 Tage wach! Regenjacke, Mütze, Handtuch: 3 Tage nass! Zahnbürste, Deo, Socken: 3 Tage baah! Es geht auch anders. Der Festivalguide Check gegen Alzheimer und Co </p>
        </article>

        </div>
    </div>
</div>



<div class="container">
    @yield ('content' )
</div>

@include ('layouts.footer')

</body>
</html>
