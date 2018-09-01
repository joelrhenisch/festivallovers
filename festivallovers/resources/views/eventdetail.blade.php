@extends('master')

@section('content')

    <script type="text/javascript" src="js/map.js"></script>



    {{-- Heading mit Bild und Titel --}}
    <div class="singleevent__headingicon">
        <img src={{asset('icons/music_indie.svg')}} height="120px">
    </div>

    <div class="singleevent__headingtext font-festival">
        Sur Le Lac<br>ein kleines<br>Fest der Musik
    </div>

    <div class="singleevent__headingcontainer">
        <div class="image-container">
            <img id="surlelac-festivalsite-scaled-sm" class="singleevent__imagefullscreen" src={{asset('images/BigFestival.jpg')}} />
        </div>
        <div class="singleevent__areagreen"></div>
    </div>

    {{-- 4 Teaserinfos --}}
    <div class="singleevent__eventnewscontainer">
        <div class="col-sm-12 col-lg-3 container-pd-sm">
            <section class="singleevent__eventnewslead">COUNTDOWN</section>
            <section class="singleevent__eventnewstitle">7 TAGE</section>
        </div>
        <div class="col-sm-12 col-lg-3 container-pd-sm">
            <section class="singleevent__eventnewslead">ÜBRIGE TICKETS</section>
            <section class="singleevent__eventnewstitle">43</section>
        </div>
        <div class="col-sm-12 col-lg-3 container-pd-sm">
            <section class="singleevent__eventnewslead">BESUCHER</section>
            <section class="singleevent__eventnewstitle">12'000</section>
        </div>
        <div class="col-sm-12 col-lg-3 container-pd-sm">
            <section class="singleevent__eventnewslead">WETTER</section>
            <section class="singleevent__eventnewstitle">28°</section>
        </div>
    </div>

    <div class="singleevent__descriptioncontainer">
        <div class="col-12">
            @include ('layouts.pfadleiste')
        </div>

        {{-- Festivalbeschreibung --}}
        <div class="p-0 singleevent__description">

            <div class="col-lg-7 col-sm-12">
                <h1>Spannende, innovative und progressive Musik</h1>

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

            <div class="singleevent__descriptionMid col-lg-10 col-sm-12">
                <div class="singleevent__descriptionText">
                    <p class="font-lead">Das eintätige Festival präsentiert Künstler, welche sich im Spannungsfeld zwischen
                        verschiedensten musikalischen Strömungen und Einflüssen bewegen. Wir bieten Musikern, die sich für
                        spannende, innovative und progressive Musik einsetzen eine Plattform. Das Fest findet mit einem
                        atemberaubenden Ausblick über den Bodensee auf der Eggersrieter Höhe statt.</p>
                    <p class="font-breadcrumb">Wir bieten euch auf dem Gelände verschiedenste Freuden für Gaumen und Kehle.
                        Ob orientalischer Falafel oder käseplättli mit einem Glas Wein kredenzt, marokkanische
                        Teespezialität oder klassischer Schüblig vom Grill. Es sollte für jeden Geschmack etwas dabei sein.
                        Um die Angebote zu sehr fairen Preisen und auch den Eintritt in diesem Rahmen beibehalten zu können,
                        bitten wir euch auf das Mitbringen von Getränken und Lunchpäcklis jeglicher Art zu verzichten.
                        Vielen Dank für eure Unersttzung un mit unserem kulinarischen Genuss wird das Fest bestimmt
                        unvergesslich<br><br>Der Verein "Sur le Lac", welcher non-profit agiert, organisiert seit 2008 das
                        "Sur le Lac — Ein kleines Fest der Musik". Das eintägige Festival präsentiert Künstler, welche sich
                        im Spannungsfeld zwischen verschiedensten musikalischen Strömungen und Einflüssen bewegen. An einem
                        Festival herrrscht ein ständig hoher Lärmpegel. Schützt euer Gehör mit den überall auf dem
                        Festgelände gratis erhältlichen Oropax.</p>
                </div>

                <div class="col-1"></div> <!-- Zwischenraum zwischen den Spalten -->

                <div class="singleevent__descriptionBreadcrumb col-lg-3 col-sm-12">
                    <div class="d-flex mb-3 singleevent__merken-unique-sm">
                        <div class="eventslist__noticeimg">
                            <img src={{asset('icons/detail_merken.svg')}}  height="20px" alt="notice">
                        </div>
                        <button class="eventslist_noticedescription nopadding">
                            MERKEN
                        </button>
                    </div>

                    <button class="action__box--black mb-3 mt-0 mx-0 w-100 go-to-ticketbuy">
                        TICKET KAUFEN
                        <a href="/ticketavaible"></a>
                    </button>

                    <button class="action__box--white mb-3 mt-0 mx-0 w-100">
                        FESTIVAL TEILEN
                    </button>

                    <div class="singleevent__descriptionAdd mb-3">
                        <img src={{asset('images/unterstuetzt_von_ceros.png')}} width="100%" alt="Unterstützt_von_Ceros">
                    </div>
                </div>

            </div>

            <div class="singleevent__descriptionMid col-lg-7 col-sm-12">
                <div id="carousel" class="carousel">
                    @include ('layouts.carousel')
                </div>
            </div>
        </div>
    </div>

    <!-- Line Up DESKTOP -->
    <div id="lineup-lg" class="singleevent__descriptioncontainer pt-5 bg-greylighter">
        <div class="singleevent__description">
            <div class="singleevent__descriptionBottom col-7">
                <h1>Line Up</h1>
                <p class="font-lead">Wir freuen uns auch dieses Jahr wieder ein spannendes und einzigartiges Line Up
                    präsentieren zu dürfen. Auf der Hauptbühne wird definitiv viel los sein.</p>

                <div class="tabs__container d-flex">
                    <button id="tabs__btnfreitag-lg" class="tabs__btn">
                        FREITAG
                    </button>
                    <button class="tabs__btn">SAMSTAG</button>
                    <button class="tabs__btn">SONNTAG</button>
                </div>

                <div id="zielbox" class="tabs__imagebox"></div>
            </div>
        </div>
    </div>

    <!-- Line Up MOBILE -->
    <div id="lineup-sm" class="singleevent__descriptioncontainer bg-greylighter">
        <div class="singleevent__lineup">
            <div class="singleevent__descriptionBottom col-lg-7 col-sm-12">
                <p class="like-h1">Line Up</p>
                <p class="font-lead mb-5">Wir freuen uns auch dieses Jahr wieder ein spannendes und einzigartiges Line Up
                    präsentieren zu dürfen. Auf der Hauptbühne wird definitiv viel los sein.</p>

                <div class="tabs__container">
                    <button id="tabs__btnfreitag-sm" class="tabs__btn">
                        FREITAG
                        <img src={{asset('icons/steuerung_dropdown_white.svg')}}  height="15px" alt="arrow-down">
                    </button>
                    <div id="zielbox-sm" class="mb-4"></div>
                    <button class="tabs__btn">SAMSTAG
                        <img src={{asset('icons/steuerung_dropdown_white.svg')}}  height="15px" alt="arrow-down">
                    </button>
                    <button class="tabs__btn">SONNTAG
                        <img src={{asset('icons/steuerung_dropdown_white.svg')}}  height="15px" alt="arrow-down">
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- Video -->
    <div class="singleevent__video">
        <div class="singleevent_videoimage"></div>
    </div>

    <div class="singleevent__descriptioncontainer">
        <div class="singleevent__description">
            <div class="singleevent__descriptionBottom col-lg-7 col-sm-12">
                <p class="like-h1">Wissenswertes</p>
                <p class="font-lead">Damit euer Festivalerlebnis glatt verläuft und ihr es in vollen Zügen geniessen könnt,
                    gibt es hier nochmals eine Übersicht mit allem was ihr wissen und beachten müsst.</p>

                {{-- Akkordeon --}}
                <button id="anreise" class="singleevent__akkordeon">
                    <span class="like-h2">Anreise & Rückreise</span> <span class="status">Mehr</span>
                </button>

                <div id="container__anreiserueckreise">
                    <div id="content__anreiserueckreise">
                        <p class="font-breadcrumb">Die Anreise ans Sur le Lac gestaltet sich wie folgt und ganz unkompliziert.
                            Wir empfehlen die öffentliche Verkehrsmittel zu benützen. Ab Eggersriet Post bringen euch
                            Shuttlebusse direkt aufs Gelände. Naturverbundenen Besuchern legen wir den 15-minütigen Spaziergang
                            vorbei an Blüten und Blatt Festgelände sehr ans Herz. In der Nacht bringen euch dann stündlich
                            Speziallbusse sicher und behütet zurück nach St. Gallen. Die Spezialbusse sind im Eintrittspreis
                            inbegriffen. Besucher, welche mit Privatautos anreisen, stehen in begrenzter Anzahl Parkplätze
                            unweit des Festgeländes zur Verfügung.</p>

                        {{-- Google Maps --}}
                        <div class="map" id="map"></div>
                        <!-- Der Map-Inhalt wird via js, der unten aufgeführt ist, erstellt -->
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBr12pJzLGPiz37H6bBrECHnQi65ez3Dwg&callback=initMap"
                                async defer></script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="promote__banner">
        <div class="promote__container">
            <p class="title">Sei ein Teil von Sur Le Lac</p>
            <div class="promote_img">
            </div>
            <button class="promote__buttonBuy go-to-ticketbuy">
                TICKETS KAUFEN
                <a href="/ticketavaible"></a>
            </button>
        </div>
    </div>
    <div class="promote__bottom">
        <div class="content">
            <div class="promote__bottom-row justify-content-end border-bottom-white">
                <button class="promote__button">
                    <span class="arrowleft"><img src="{{asset('icons/navigation_zurueck_white.svg')}}" width="25px"></span>
                    <span class="text">Musikfestwochen</span>
                </button>
                <div class="promote__button-img img-women">
                    <img src="{{asset('images/NexFestival.png')}}">
                </div>
            </div>

            <div class="promote__bottom-row justify-content-start">
                <div class="promote__button-img img-men">
                    <img src="{{asset('images/kruselkopf.png')}}">
                </div>
                <button class="promote__buttonright">
                    <span class="text">Openair Zürich</span>
                    <span class="arrowright"><img src="{{asset('icons/navigation_vorwaerts_white.svg')}}" width="25px"></span>
                </button>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/eventdetail.js"></script>



@endsection

