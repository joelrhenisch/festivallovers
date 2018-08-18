@extends('master')

@section('content')

<div class="first-element__fix-margin fix-pos-left">
    @include ('layouts.pfadleiste')
</div>

<section class="heading__titel">
    <h1>Tickets</h1>
</section>

<section class="heading__lead">
    <h3 class="like-h3-Regular">
        Liebe FestivalLovers unsere Festivals sind begehrt, daher sind auch unsere Tickets immer schnell ausverkauft. Sichert euch die besten Angebote – verpasst eure Chance nicht!
    </h3>
</section>


@include ('layouts.eventslist_buy')

@endsection