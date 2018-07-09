
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
    <h1>Auf welche Musik stehst du?</h1>
</section>

<section class="heading__lead">
    <h3>
        Unsere FestivalLovers verdienen nur das Beste. Wir bringen euch<br>
        alle Festivals, Stars & Bands sowie Infos für einen genialen und<br>
        unvergessenlichen Musiksommer.
    </h3>
</section>

<div id="filter" class="filter">

    <div id="jazz" class="filter__box">
        <img id="filter" class="filter__svgmusic" src={{asset('icons/music_jazz.svg')}} />
        <span class="filter__genres">JAZZ</span> <span class="filter__number">20</span>
    </div>

    <div id="hiphop" class="filter__box">
        <img id="filter" class="filter__svgmusic" src={{asset('icons/music_hiphop.svg')}} />
        <span class="filter__genres">HIPHOP</span> <span class="filter__number">9</span>
    </div>

    <div id="indie" class="filter__box">
        <img id="filter" class="filter__svgmusic" src={{asset('icons/music_indie.svg')}} />
        <span class="filter__genres">INDIE</span> <span class="filter__number">11</span>
    </div>

    <div id="poprock" class="filter__box">
        <img id="filter" class="filter__svgmusic" src={{asset('icons/music_poprock.svg')}} />
        <span class="filter__genres">POP & ROCK</span> <span class="filter__number">35</span>
    </div>

    <div id="electronic" class="filter__box">
        <img id="filter" class="filter__svgmusic" src={{asset('icons/music_electronic.svg')}} />
        <span class="filter__genres">ELECTRONICS</span> <span class="filter__number">28</span>
    </div>

    <div>
        <span class="filter__mehrgenres">Mehr Genres</span>
    </div>

</div>

<div id="filter" class="filter">
    <div class="filter__reset">FILTER ZURÜCKSETZEN</div>
    <div class="filter__show">ERGEBNIS ANZEIGEN</div>
</div>

<section class="bigteaser">
    <img class="bigteaser__img" src={{asset('images/BigTeaser.png')}} />
</section>

<div id="magazin">
    <div class="text-center magazin-title">
        <h1>Magazin</h1>
    </div>

    <div class="magazin__container">
        <div class="magazin__colums col-lg-9">

            <article class="magazin__article">
                <h2> Einfach bloss nichts vergessen </h2>
                <p class="font-breadcrumb"> Zelt, Schlafsack, Isomatte vergessen: 3 Tage wach! Regenjacke, Mütze, Handtuch: 3 Tage nass! Zahnbürste, Deo, Socken: 3 Tage baah! Es geht auch anders. Der Festivalguide Check gegen Alzheimer und Co </p>
            </article>

            <article class="magazin__article">
                <h2> Erste Hilfe und die Reiseapotheke </h2>
                <p class="font-breadcrumb"> Was der Arzt rät: Sonnenstich, Kater, Fuss ungeknickt ... Festivals stecken voller versteckten Gefahren. Wir haben unseren Hausarzt angerufen und gefragt was man unbedingt bedenken und beachten sollte damit man wieder gesund und munter vom Festival nach Hause kommt. </p>
            </article>

            <article class="magazin__article">
                <h2> Wie soll ich mich bei Gewitter verhalten? </h2>
                <p class="font-breadcrumb"> Die Sturm- und Gewitterwarnungen auf Festivals nehmen zu. Blitzeinschläge führen immer wieder zu zahlreichen Verletzten. Da wir nicht davon ausgehen können, dass sich diese Entwicklung wieder umkehrt, müssen wir damit reechnen, dass Festivals immer wieder davon betroffen sein werden. Was sollte man also beachten? </p>
            </article>

            <article class="magazin__article">
                <h2> Tipps zum Bier kaltstellen </h2>
                <p class="font-breadcrumb"> Mit diesen Ratschlägen habt ihr auch auf dem Festival immer kühles Bier. Was will man noch mehr. </p>
            </article>

            <article class="magazin__article">
                <h2> 7 Life Hacks für den Festivalbesuch </h2>
                <p class="font-breadcrumb"> Mit diesen Tricks macht ihr euch das Campen auf dem Festival noch leichter. Es gibt viele kreative Lösungen mit Einmalseife, Klopapierspender, Grillanzünder, Kaffeebeutel und Strohhalmen. </p>
            </article>

            <article class="magazin__article">
                <h2> Wo stelle ich mein Zelt auf? </h2>
                <p class="font-breadcrumb"> Der perfekte Platz auf dem Campingplatz muss zuerst gefunden werden. Ältere Festivalbesucher können bestätigen: Die Auswahl des Zeltplatzes ist ein Lernen durch Schmerzen. Wir möchten euch daher gut vorbereiten um euch ein paar Qualen ersparen zu können. </p>
            </article>

        </div>
    </div>
</div>

@include ('layouts.footer')

</body>
</html>
