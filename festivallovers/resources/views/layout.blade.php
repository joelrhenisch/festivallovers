@extends('master')

@section('content')

    <div class="heading__titel">
        <h1 class="p-3">Auf welche Musik stehst du?</h1>
    </div>

    <div class="heading__lead">
        <p class="font-lead">
            Egal auf was du stehtst wir haben alles für deinen Musikgeschmack und garanteiren dir eine erlebnisreiche Festivalzeit.
        </p>
    </div>

    <!-- Filter für Desktop -->
    <div id="include-filter-lg">
        @include ('layouts.filter')
    </div>

    <!-- Buttons für Desktop -->
    <div id="filter-lg" class="filter">
        <button id="result-reset-lg" class="action__box--white">FILTER ZURÜCKSETZEN</button>
        <button id="result-show-lg" class="action__box--black"><a href="/events"></a> ERGEBNIS ANZEIGEN</button>
    </div>

    <!-- Buttons für Mobile -->
    <div id="filter-sm" class="filter">
        <button class="action-full-width action__box--black"><a href="/filtering-sm"></a> FILTER ANZEIGEN</button>
    </div>

    <div id="magazin" class="bigteaser">
        <img class="bigteaser__img" src={{asset('images/BigTeaser.png')}} />
    </div>

    <!-- Magazin -->
    <div class="text-center magazin-title">
        <h1>Magazin</h1>
    </div>

    <div class="magazin__container">
        <div class="magazin__colums col-lg-10">

            <article class="magazin__article">
                <h2> Einfach bloss nichts vergessen </h2>
                <p id="article-1-show" class="font-breadcrumb underline">LESEN</p>
                <p id="article-1" class="font-breadcrumb"> Zelt, Schlafsack, Isomatte vergessen: 3 Tage wach! Regenjacke, Mütze, Handtuch: 3 Tage nass! Zahnbürste, Deo,
                    Socken: 3 Tage baah! Es geht auch anders. Der Festivalguide Check gegen Alzheimer und Co </p>
                <hr id="hor-line-1">
            </article>

            <article class="magazin__article">
                <h2> Erste Hilfe und die Reiseapotheke </h2>
                <p id="article-2-show" class="font-breadcrumb underline">LESEN</p>
                <p id="article-2" class="font-breadcrumb"> Was der Arzt rät: Sonnenstich, Kater, Fuss ungeknickt ... Festivals stecken voller versteckten Gefahren. Wir
                    haben unseren Hausarzt angerufen und gefragt was man unbedingt bedenken und beachten sollte damit man wieder gesund und munter vom Festival nach Hause
                    kommt. </p>
                <hr id="hor-line-2">
            </article>

            <article class="magazin__article">
                <h2> Wie soll ich mich bei Gewitter verhalten? </h2>
                <p id="article-3-show" class="font-breadcrumb underline">LESEN</p>
                <p id="article-3" class="font-breadcrumb"> Die Sturm- und Gewitterwarnungen auf Festivals nehmen zu. Blitzeinschläge führen immer wieder zu zahlreichen
                    Verletzten. Da wir nicht davon ausgehen können, dass sich diese Entwicklung wieder umkehrt, müssen wir damit reechnen, dass Festivals immer wieder davon
                    betroffen sein werden. Was sollte man also beachten? </p>
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
                    <p id="article-5" class="font-breadcrumb"> Mit diesen Tricks macht ihr euch das Campen auf dem Festival noch leichter. Es gibt viele kreative Lösungen
                        mit Einmalseife, Klopapierspender, Grillanzünder, Kaffeebeutel und Strohhalmen. </p>
                    <hr id="hor-line-5">
                </article>

                <article class="magazin__article nomargin">
                    <h2> Wo stelle ich mein Zelt auf? </h2>
                    <p id="article-6-show" class="font-breadcrumb underline">LESEN</p>
                    <p id="article-6" class="font-breadcrumb"> Der perfekte Platz auf dem Campingplatz muss zuerst gefunden werden. Ältere Festivalbesucher können
                        bestätigen: Die Auswahl des Zeltplatzes ist ein Lernen durch Schmerzen. Wir möchten euch daher gut vorbereiten um euch ein paar Qualen ersparen zu
                        können. </p>
                    <hr id="hor-line-6">
                </article>
            </div>

        </div>
    </div>

    <div id="article-show-more" class="d-flex justify-content-center mb-5">
        <button id="article__btn-show-more" class="action-full-width action__box--white">
            MEHR ANZEIGEN
        </button>
    </div>

    <!-- Ad iPhone -->
    <div class="ad-iphone__box">
        <div class="ad-iphone__container">
            <img src={{asset('/images/iphone.png')}} />
            <div class="ad-iphone__content-lg">
                <span class="text like-h1 text-white">Mit der App unabhägig am Festival feiern.</span>
                <div class="ad-iphone__buttons">
                    <button class="margin action__box-margin--black">APP DOWNLOADEN</button>
                    <div class="ad__logos">
                        <img src={{asset('/icons/apple_store.svg')}} />
                        <img src={{asset('/icons/google_play.svg')}} />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Musikstreifen -->
    <div class="heading__titel">
        <h1 class="p-3">Entdeckungen</h1>
    </div>

    <div class="heading__lead">
        <p class="font-lead">
            Sei offen für neues und geniesse unerwartete Musikerlebnisse. Höre dir die Samples an und entdecke deine Leidenschaften.
        </p>
    </div>

    <div class="music__container jazz">
        <img src={{asset('/icons/detail_video_play_black.svg')}} />
    </div>
    <div class="music__container soul">
        <img src={{asset('/icons/detail_video_play_black.svg')}} />
    </div>
    <div class="music__container indie">
        <img src={{asset('/icons/detail_video_play_black.svg')}} />
    </div>
    <div class="music__container poprock">
        <img src={{asset('/icons/detail_video_play_black.svg')}} />
    </div>
    <div class="music__container electronic">
        <img src={{asset('/icons/detail_video_play_black.svg')}} />
    </div>

    <div id="mehr-samples-lg" class="d-flex justify-content-center">
        <button class="mb-5 mt-5 action__boxtransparent">MEHR SAMPLES</button>
    </div>

    <div class="mt-5"></div> <!-- nur für den Abstand -->

    <!-- News -->
    <div id="news" class="news__box">
        <div class="heading__titel">
            <h1 class="p-3">News</h1>
        </div>

        <div class="news__masonry">
            <!-- Newsbox mit Bild -->
            <div class="news__container">
                <div class="image__container">
                    <img class="image" src={{asset('/images/SocialMedia.png')}} />
                </div>
                <div class="content-top">
                    <span class="font-title-small d-block">3. Jun 2016</span>
                    <span class="font-breadcrumb">#festivallovers are you ready for a #competition #follow @envirofoneshop and we'll announce next week #festival</span>
                    <hr class="news__hor-line">
                </div>
                <div class="content-bottom">
                    <img src={{asset('/icons/detail_like_filled.svg')}} />
                    <span class="font-title-small d-block">13</span>
                </div>
            </div>

            <!-- Newsbox ohne Bild -->
            <div class="news__container">
                <div class="content-top">
                    <span class="font-title-small d-block">3. Jun 2016</span>
                    <span class="font-breadcrumb">#festivallovers are you ready for a #competition #follow @envirofoneshop and we'll announce next week #festival</span>
                    <hr class="news__hor-line">
                </div>
                <div class="content-bottom">
                    <img src={{asset('/icons/detail_like.svg')}} />
                    <span class="font-title-small d-block">54</span>
                </div>
            </div>

            <!-- Newsbox ohne Bild -->
            <div class="news__container">
                <div class="content-top">
                    <span class="font-title-small d-block">3. Jun 2016</span>
                    <span class="font-breadcrumb">#festivallovers are you ready for a #competition #follow @envirofoneshop and we'll announce next week #festival</span>
                    <hr class="news__hor-line">
                </div>
                <div class="content-bottom">
                    <img src={{asset('/icons/detail_like.svg')}} />
                    <span class="font-title-small d-block">26</span>
                </div>
            </div>

            <!-- Newsbox mit Bild -->
            <div class="news__container">
                <div class="image__container">
                    <img class="image" src={{asset('/images/i_love_jazz.png')}} />
                </div>
                <div class="content-top">
                    <span class="font-title-small d-block">1m</span>
                    <span class="font-breadcrumb">#jazzfest #festival #homeland #weekend</span>
                    <hr class="news__hor-line">
                </div>
                <div class="content-bottom">
                    <img src={{asset('/icons/detail_like_filled.svg')}} />
                    <span class="font-title-small d-block">5</span>
                </div>
            </div>

            <!-- Newsbox mit Bild -->
            <div class="news__container">
                <div class="image__container">
                    <img class="image" src={{asset('/images/shoe.png')}} />
                </div>
                <div class="content-top">
                    <span class="font-title-small d-block">4h</span>
                    <span class="font-breadcrumb">Italiaaa #boots #italy #germany #2016 #camping #festival #sexylegs</span>
                    <hr class="news__hor-line">
                </div>
                <div class="content-bottom">
                    <img src={{asset('/icons/detail_like.svg')}} />
                    <span class="font-title-small d-block">47</span>
                </div>
            </div>

            <!-- Newsbox ohne Bild -->
            <div class="news__container">
                <div class="content-top">
                    <span class="font-title-small d-block">3. Jun 2016</span>
                    <span class="font-breadcrumb">#festivallovers are you ready for a #competition #follow @envirofoneshop and we'll announce next week #festival<br>#festivallovers are you ready for a #competition #follow @envirofoneshop and we'll announce next week #festival</span>
                    <hr class="news__hor-line">
                </div>
                <div class="content-bottom">
                    <img src={{asset('/icons/detail_like.svg')}} />
                    <span class="font-title-small d-block">26</span>
                </div>
            </div>

            <!-- Newsbox ohne Bild -->
            <div class="news__container">
                <div class="content-top">
                    <span class="font-title-small d-block">3. Jun 2016</span>
                    <span class="font-breadcrumb">#festivallovers are you ready for a #competition #follow @envirofoneshop and we'll announce next week #festival</span>
                    <hr class="news__hor-line">
                </div>
                <div class="content-bottom">
                    <img src={{asset('/icons/detail_like.svg')}} />
                    <span class="font-title-small d-block">26</span>
                </div>
            </div>

            <!-- Container für mehr Artikel -->
            <div id="news-show-more">
                <!-- Newsbox mit Bild -->
                <div class="news__container">
                    <div class="image__container">
                        <img class="image" src={{asset('/images/SocialMedia.png')}} />
                    </div>
                    <div class="content-top">
                        <span class="font-title-small d-block">3. Jun 2016</span>
                        <span class="font-breadcrumb">#festivallovers are you ready for a #competition #follow @envirofoneshop and we'll announce next week #festival</span>
                        <hr class="news__hor-line">
                    </div>
                    <div class="content-bottom">
                        <img src={{asset('/icons/detail_like_filled.svg')}} />
                        <span class="font-title-small d-block">13</span>
                    </div>
                </div>

                <!-- Newsbox mit Bild -->
                <div class="news__container">
                    <div class="image__container">
                        <img class="image" src={{asset('/images/i_love_jazz.png')}} />
                    </div>
                    <div class="content-top">
                        <span class="font-title-small d-block">1m</span>
                        <span class="font-breadcrumb">#jazzfest #festival #homeland #weekend</span>
                        <hr class="news__hor-line">
                    </div>
                    <div class="content-bottom">
                        <img src={{asset('/icons/detail_like_filled.svg')}} />
                        <span class="font-title-small d-block">5</span>
                    </div>
                </div>

                <!-- Newsbox ohne Bild -->
                <div class="news__container">
                    <div class="content-top">
                        <span class="font-title-small d-block">3. Jun 2016</span>
                        <span class="font-breadcrumb">#festivallovers are you ready for a #competition #follow @envirofoneshop and we'll announce next week #festival</span>
                        <hr class="news__hor-line">
                    </div>
                    <div class="content-bottom">
                        <img src={{asset('/icons/detail_like.svg')}} />
                        <span class="font-title-small d-block">54</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="hide-himself">
        <div id="news__btn-show-more" class="news__box d-flex justify-content-center">
            <div class="cursor-pointer mb-5 action__boxtransparent action-full-width">
                MEHR ANZEIGEN
            </div>
        </div>
    </div>

    <script>
        // Filter für Mobile einblenden
        $("#filter-sm").click(function () {
            window.location = $(this).find("a:first").attr("href");
            return false;
        });
        // Button zu Events verlinken. (Sucht erstes a-Element und verwendet das href-Attribut davon)
        $("#result-show-lg").click(function () {
            window.location = $(this).find("a:first").attr("href");
            return false;
        });
        // Filter zurücksetzen
        $("#result-reset-lg").click(function () {
            $("#jazz").removeClass("--darken-yellow");
            $("#hiphop").removeClass("--darken-pink");
            $("#indie").removeClass("--darken-mint");
            $("#poprock").removeClass("--darken-blue");
            $("#electronic").removeClass("--darken-violet");
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
        // weitere Artikel aufklappen via Button, unterhalb von letztem Artikel
        $("#article__btn-show-more").click(function () {
            $("#article__container").show();
            $("#article__btn-show-more").hide();
        });
        // weitere News einblenden via Button, unterhalb von letzter News
        $("#news__btn-show-more").click(function () {
            $("#news-show-more").show();
            $("#hide-himself").hide();
        });
    </script>
@endsection

