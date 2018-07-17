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

{{--HEADING SINGLE FESTIVAL--}}
<div class="singleevent__headingtext font-festival">
    Sur Le Lac<br>ein kleines<br>Fest der Musik
</div>

<div class="singleevent__headingcontainer">
    <img class="singleevent__imagefullscreen" src={{asset('images/BigFestival.png')}} />
    <div class="singleevent__areagreen">
    </div>
</div>

<div class="singleevent__eventnewscontainer">
    <div class="col-3">
        <section class="singleevent__eventnewslead">COUNTDOWN</section>
        <section class="singleevent__eventnewstitle">7 TAGE</section>
    </div>
       <div class="col-3">
        <section class="singleevent__eventnewslead">ÜBRIGE TICKETS</section>
        <section class="singleevent__eventnewstitle">43</section>
    </div>
       <div class="col-3">
        <section class="singleevent__eventnewslead">BESUCHER</section>
        <section class="singleevent__eventnewstitle">12'000</section>
    </div>
       <div class="col-3">
        <section class="singleevent__eventnewslead">WETTER</section>
        <section class="singleevent__eventnewstitle">28°</section>
    </div>
</div>

<div class="singleevent__descriptioncontainer">

    <div class="singleevent__description">

        <div class="singleevent__descriptionTop col-7">
            <h1>Spannende, innovative<br>und progressive Musik</h1>

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

        <div class="singleevent__descriptionMid col-10">
                <div class="singleevent__descriptionText">
                    <p class="font-lead">Das eintätige Festival präsentiert Künstler, welche sich im Spannungsfeld zwischen verschiedensten musikalischen Strömungen und Einflüssen bewegen. Wir bieten Musikern, die sich für spannende, innovative und progressive Musik einsetzen eine Plattform. Das Fest findet mit einem atemberaubenden Ausblick über den Bodensee auf der Eggersrieter Höhe statt.</p>
                    <p class="font-breadcrumb">Wir bieten euch auf dem Gelände verschiedenste Freuden für Gaumen und Kehle. Ob orientalischer Falafel oder käseplättli mit einem Glas Wein kredenzt, marokkanische Teespezialität oder klassischer Schüblig vom Grill. Es sollte für jeden Geschmack etwas dabei sein. Um die Angebote zu sehr fairen Preisen und auch den Eintritt in diesem Rahmen beibehalten zu können, bitten wir euch auf das Mitbringen von Getränken und Lunchpäcklis jeglicher Art zu verzichten. Vielen Dank für eure Unersttzung un mit unserem kulinarischen Genuss wird das Fest bestimmt unvergesslich<br><br>Der Verein "Sur le Lac", welcher non-profit agiert, organisiert seit 2008 das "Sur le Lac — Ein kleines Fest der Musik". Das eintägige Festival präsentiert Künstler, welche sich im Spannungsfeld zwischen verschiedensten musikalischen Strömungen und Einflüssen bewegen. An einem Festival herrrscht ein ständig hoher Lärmpegel. Schützt euer Gehör mit den überall auf dem Festgelände gratis erhältlichen Oropax.</p>
                </div>

                <div class="col-1"></div>

                <div class="singleevent__descriptionBreadcrumb col-3">
                    <div class="eventslist__notice">
                        <div class="eventslist__noticeimg">
                            <img src={{asset('icons/detail_merken.svg')}}  height="20px" alt="notice">
                        </div>
                        <div class="eventslist_noticedescription nopadding">
                            MERKEN
                        </div>
                    </div>

                    <div class="action__boxblack nomargin mb-3">
                        TICKET KAUFEN
                    </div>

                    <div class="action__boxwhite nomargin mb-3">
                        FESTIVAL TEILEN
                    </div>

                    <div class="singleevent__descriptionAdd">
                        <img src={{asset('images/unterstuetzt_von_ceros.png')}} width="100%" alt="Unterstützt_von_Ceros">
                    </div>

                </div>
        </div>

    </div>
</div>





@include ('layouts.footer')

</body>
</html>
