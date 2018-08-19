@extends('master')

@section('content')

<div class="heading__titel-sm-bigger heading__titel">
    <h1 class="p-3">Auf welche Musik stehst du?</h1>
</div>

<div class="heading__lead">
    <p class="font-lead">
        Egal auf was du stehtst wir haben alles für deinen Musikgeschmack und garanteiren dir eine erlebnisreiche Festivalzeit.
    </p>
</div>

<div id="include-filter">
    @include ('layouts.filter')
</div>

<div id="filter-lg" class="filter">
    <div class="action__box--white">FILTER ZURÜCKSETZEN</div>
    <div id="result-show" class="action__box--black"> <a href="/events"></a> ERGEBNIS ANZEIGEN </div>

</div>

<div id="filter-sm" class="filter">
    <div class="action__box--black">ERGEBNIS ANZEIGEN</div>
</div>

<div class="bigteaser">
    <img class="bigteaser__img" src={{asset('images/BigTeaser.png')}} />
</div>

<div id="magazin">
    <div class="text-center magazin-title">
        <h1>Magazin</h1>
    </div>

    <div class="magazin__container">
        <div class="magazin__colums col-lg-10">

            <article class="magazin__article">
                <h2> Einfach bloss nichts vergessen </h2>
                <p id="article-1-show" class="font-breadcrumb underline">LESEN</p>
                <p id="article-1" class="font-breadcrumb"> Zelt, Schlafsack, Isomatte vergessen: 3 Tage wach! Regenjacke, Mütze, Handtuch: 3 Tage nass! Zahnbürste, Deo, Socken: 3 Tage baah! Es geht auch anders. Der Festivalguide Check gegen Alzheimer und Co </p>
                <hr id="hor-line-1">
            </article>

            <article class="magazin__article">
                <h2> Erste Hilfe und die Reiseapotheke </h2>
                <p id="article-2-show" class="font-breadcrumb underline">LESEN</p>
                <p id="article-2" class="font-breadcrumb"> Was der Arzt rät: Sonnenstich, Kater, Fuss ungeknickt ... Festivals stecken voller versteckten Gefahren. Wir haben unseren Hausarzt angerufen und gefragt was man unbedingt bedenken und beachten sollte damit man wieder gesund und munter vom Festival nach Hause kommt. </p>
                <hr id="hor-line-2">
            </article>

            <article class="magazin__article">
                <h2> Wie soll ich mich bei Gewitter verhalten? </h2>
                <p id="article-3-show" class="font-breadcrumb underline">LESEN</p>
                <p id="article-3" class="font-breadcrumb"> Die Sturm- und Gewitterwarnungen auf Festivals nehmen zu. Blitzeinschläge führen immer wieder zu zahlreichen Verletzten. Da wir nicht davon ausgehen können, dass sich diese Entwicklung wieder umkehrt, müssen wir damit reechnen, dass Festivals immer wieder davon betroffen sein werden. Was sollte man also beachten? </p>
                <hr id="hor-line-3">
            </article>

        <div id="article__container">
            <article class="magazin__article">
                <h2> Tipps zum Bier kaltstellen </h2>
                <p id="article-4-show" class="font-breadcrumb underline">LESEN</p>
                <p id="article-4" class="font-breadcrumb"> Mit diesen Ratschlägen habt ihr auch auf dem Festival immer kühles Bier. Was will man noch mehr. </p>
                <hr id="hor-line-4">
            </article>

            <article class="magazin__article">
                <h2> 7 Life Hacks für den Festivalbesuch </h2>
                <p id="article-5-show" class="font-breadcrumb underline">LESEN</p>
                <p id="article-5" class="font-breadcrumb"> Mit diesen Tricks macht ihr euch das Campen auf dem Festival noch leichter. Es gibt viele kreative Lösungen mit Einmalseife, Klopapierspender, Grillanzünder, Kaffeebeutel und Strohhalmen. </p>
                <hr id="hor-line-5">
            </article>

            <article class="magazin__article nomargin">
                <h2> Wo stelle ich mein Zelt auf? </h2>
                <p id="article-6-show" class="font-breadcrumb underline">LESEN</p>
                <p id="article-6" class="font-breadcrumb"> Der perfekte Platz auf dem Campingplatz muss zuerst gefunden werden. Ältere Festivalbesucher können bestätigen: Die Auswahl des Zeltplatzes ist ein Lernen durch Schmerzen. Wir möchten euch daher gut vorbereiten um euch ein paar Qualen ersparen zu können. </p>
                <hr id="hor-line-6">
            </article>
        </div>

        </div>
    </div>

    <div id="article-show-more" class="d-flex justify-content-center mb-5">
        <div id="article__btn-show-more" class="action__box--white">
            MEHR ANZEIGEN
        </div>
    </div>

</div>

<script>

    // Button zu Events verlinken. (Sucht erstes a-Element und verwendet das href-Attribut davon)
    $("#result-show").click(function(){
        window.location = $(this).find("a:first").attr("href");
        return false;
    });

    // einzelne Artikel aufklappen
    $("#article-1-show").click(function () {
        $("#article-1").toggle();
    });
    $("#article-2-show").click(function () {
        $("#article-2").toggle();
    });
    $("#article-3-show").click(function () {
        $("#article-3").toggle();
    });
    $("#article-4-show").click(function () {
        $("#article-4").toggle();
    });
    $("#article-5-show").click(function () {
        $("#article-5").toggle();
    });
    $("#article-6-show").click(function () {
        $("#article-6").toggle();
    });

    // weiter Artikel aufklappen via Button, unterhalb von letztem Artikel
    $("#article__btn-show-more").click(function () {
        $("#article__container").show();
        $("#article__btn-show-more").hide();
    });
</script>

@endsection