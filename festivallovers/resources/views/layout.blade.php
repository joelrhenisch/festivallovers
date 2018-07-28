@extends('master')

@section('content')

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

@include ('layouts.filter')

<div id="filter" class="filter">
    <div class="action__boxwhite">
        FILTER ZURÜCKSETZEN</div>
    <div class="action__boxblack">ERGEBNIS ANZEIGEN</div>
</div>

<section class="bigteaser">
    <img class="bigteaser__img" src={{asset('images/BigTeaser.png')}} />
</section>

<div id="magazin">
    <div class="text-center magazin-title">
        <h1>Magazin</h1>
    </div>

    <div class="magazin__container">
        <div class="magazin__colums col-lg-10">

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

    <div class="d-flex justify-content-center mt-4 mb-5">
        <div class="action__boxwhite">
            MEHR ANZEIGEN
        </div>
    </div>

</div>

@endsection