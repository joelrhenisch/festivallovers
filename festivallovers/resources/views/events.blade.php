@extends('master')

@section('content')

<section class="heading__titel">
    <h1>Alles für deinen Musikgeschmack</h1>
</section>

<section class="heading__lead">
    <h3>
        Unsere FestivalLovers verdienen nur das Beste. Wir bringen euch alle Festivals, Stars & Bands sowie Infos für einen genialen und unvergessenlichen Musiksommer.
    </h3>
</section>

@include ('layouts.filter')

<div class="filter">
    <div class="action__boxwhite">FILTER ZURÜCKSETZEN</div>
</div>


{{--@include ('layouts.eventslist_liste')--}}
@include ('layouts.eventslist_kacheln')

@endsection