@extends('master')

@section('content')

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
        @include ('layouts.pfadleiste')

        {{-- Festivalbeschreibung --}}
        <div class="singleevent__description">

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

                    <button class="action__box--black mb-3 mt-0 mx-0 w-100">
                        TICKET KAUFEN
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
                    <button id="tabs__btnfreitag" class="tabs__btn" onclick="picture()">
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
                <h1>Line Up</h1>
                <p class="font-lead mb-5">Wir freuen uns auch dieses Jahr wieder ein spannendes und einzigartiges Line Up
                    präsentieren zu dürfen. Auf der Hauptbühne wird definitiv viel los sein.</p>

                <div class="tabs__container">
                    <button id="tabs__btnfreitag" class="tabs__btn" onclick="picturesm()">
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
                <h1>Wissenswertes</h1>
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
            <button class="promote__buttonBuy">
                TICKETS KAUFEN
            </button>
        </div>
    </div>
    <div class="promote__bottom">
        <div class="content">
            <div class="d-flex justify-content-between border-bottom-white">
                <button class="promote__button">
                    <span class="arrowleft"><img src="{{asset('icons/navigation_zurueck_white.svg')}}" width="25px"></span>
                    <span class="text">Musikfestwochen</span>
                </button>
                <div class="promote__button-img img-women">
                    <img src="{{asset('images/NexFestival.png')}}">
                </div>
            </div>

            <div class="d-flex justify-content-between">
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


    <script>

        // Anreise & Rückreise (Akkordeon) ein- und ausblenden
        $(document).ready(function () {
            $("#anreise").click(function () {
                $("#container__anreiserueckreise").toggle();

            });
        });

        // Line Up von Freitag ein- und ausblenden
        // DESKTOP
        function picture() {
            if ($('#zielbox').is(':empty')) {
                let pic = document.createElement('img');
                pic.setAttribute("src", "images/lineup_detailsite.png");
                pic.classList.add('img-183prozent');
                document.getElementById("zielbox").appendChild(pic);
                document.getElementById('tabs__btnfreitag').classList.add('tabs__btn--active', '.tabs__imagebox');
            }
            else {
                let list = document.getElementById("zielbox");
                list.removeChild(list.childNodes[0]);
                document.getElementById('tabs__btnfreitag').classList.add('tabs__btn');
                document.getElementById('tabs__btnfreitag').classList.remove('tabs__btn--active');
            }
        }

        // MOBILE
        function picturesm() {
            if ($('#zielbox-sm').is(':empty')) {
                let pic = document.createElement('img');
                pic.setAttribute("src", "images/lineup_detailsite.png");
                pic.classList.add('img-183prozent');
                document.getElementById("zielbox-sm").appendChild(pic);
                document.getElementById('tabs__btnfreitag').classList.add('tabs__btn--active', '.tabs__imagebox');
            }
            else {
                let list = document.getElementById("zielbox-sm");
                list.removeChild(list.childNodes[0]);
                document.getElementById('tabs__btnfreitag').classList.add('tabs__btn');
                document.getElementById('tabs__btnfreitag').classList.remove('tabs__btn--active');
            }
        }

        // Google Maps API wird ausgeführt und eine Map erstellt
        function initMap() {
            // styling Google Maps
            let map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: {
                    lat: 47.4431335,
                    lng: 9.4695168
                },
                styles: [
                    {
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#bdbdbd"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#eeeeee"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e5e5e5"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dadada"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e5e5e5"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#eeeeee"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#c9c9c9"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    }
                ]
            });
            // Füge Marker der Map hinzu
            let marker = new google.maps.Marker({
                position: {lat: 47.444242, lng: 9.469508},
                map: map
            });
        }

    </script>

@endsection