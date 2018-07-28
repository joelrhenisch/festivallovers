@extends('master')

@section('content')

{{--grüner Header--}}
<div class="buy__heading">
    <img src={{asset('icons/music_indie.svg')}} height="40px"/>
</div>

{{--Titel--}}
<section class="heading__titel">
    <h1>Tickets für Sur Le Lac</h1>
</section>

{{--Lead--}}
<section class="heading__lead">
    <h3>
        Liebe FestivalLovers unsere Festivals sind begehrt, daher sind auch unsere Tickets immer schnell ausverkauft<br>
        Sichert euch die besten Angebote – verpasst eure Chance nicht!
    </h3>
</section>

{{--Content fängt an--}}
<div class="ticketBuy__container">

    {{--Location und Date--}}
    <div class="ticketbuy__LocDate">
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

    {{-- FESTIVALEINTRITT--}}
    {{--Tickets: grüner Teil--}}
    <div class="ticketbuy__festivalTicketContainer">
        <h2>Festivaleintritt</h2>
        <div class="ticketContainer">
            <div class="ticketGreen">
                <img src={{asset('icons/tickets_standard_white.svg')}}  height="60px" alt="ticket">
                <p class="title">1 Tag Pass</p>
                <p class="price">CHF 75.–</p>
            </div>

            <div class="ticketGreen">
                <img src={{asset('icons/tickets_standard_white.svg')}}  height="60px" alt="ticket">
                <p class="title">1 Tag Pass</p>
                <p class="price">CHF 75.–</p>
            </div>

            <div class="ticketGreen">
                <img src={{asset('icons/tickets_standard_white.svg')}}  height="60px" alt="ticket">
                <p class="title">1 Tag Pass</p>
                <p class="price">CHF 75.–</p>
            </div>

            <div class="ticketGreen">
                <img src={{asset('icons/tickets_standard_white.svg')}}  height="60px" alt="ticket">
                <p class="title">1 Tag Pass</p>
                <p class="price">CHF 75.–</p>
            </div>
        </div>

        {{--weisser Teil mit verfügbaren Tickets--}}
        <div class="ticketsArea">
            <div class="ticketContainer nomargin">
                <div class="ticketsSmaller">
                    <div class="container">
                        <div class="text">
                            <span class="textRegGreen">Verfügbare Tickets</span>
                            <div class="d-flex">
                                <span class="textBoldGreen">960</span>
                                <span class="textRegGrey"> / 1200</span>
                            </div>
                        </div>
                        <div class="ticketsSymbol">
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratQ"></div>
                            <div class="QuadratQ"></div>
                        </div>
                    </div>
                </div>

                <div class="ticketsSmaller">
                    <div class="container">
                        <div class="text">
                            <span class="textRegGreen">Verfügbare Tickets</span>
                            <div class="d-flex">
                                <span class="textBoldGreen">960</span>
                                <span class="textRegGrey"> / 1200</span>
                            </div>
                        </div>
                        <div class="ticketsSymbol">
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratQ"></div>
                            <div class="QuadratQ"></div>
                        </div>
                    </div>
                </div>

                <div class="ticketsSmaller">
                    <div class="container">
                        <div class="text">
                            <span class="textRegGreen">Verfügbare Tickets</span>
                            <div class="d-flex">
                                <span class="textBoldGreen">960</span>
                                <span class="textRegGrey"> / 1200</span>
                            </div>
                        </div>
                        <div class="ticketsSymbol">
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratQ"></div>
                            <div class="QuadratQ"></div>
                        </div>
                    </div>
                </div>

                <div class="ticketsSmaller">
                    <div class="container">
                        <div class="text">
                            <span class="textRegGreen">Verfügbare Tickets</span>
                            <div class="d-flex">
                                <span class="textBoldGreen">960</span>
                                <span class="textRegGrey"> / 1200</span>
                            </div>
                        </div>
                        <div class="ticketsSymbol">
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratQ"></div>
                            <div class="QuadratQ"></div>
                        </div>
                    </div>
                </div>
            </div>

            {{--Ticketanzahl + und ---}}
            <div class="ticketContainer nomargin">
                <div class="ticketsCounter">
                    <div class="container">
                            <div class="box">
                                <img src={{asset('icons/steuerung_minus.svg')}}  width="20px" alt="ticket minus">
                            </div>
                            <p class="fontticket">0 Tickets</p>
                            <div class="box">
                                <img src={{asset('icons/steuerung_plus.svg')}}  width="20px" alt="ticket plus">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- CAMPING--}}
    {{--Tickets: grüner Teil--}}
    <div class="ticketbuy__festivalTicketContainer">
        <h2>Camping</h2>
        <div class="ticketContainer">
            <div class="ticketGreen">
                <img src={{asset('icons/tickets_standard_white.svg')}}  height="60px" alt="ticket">
                <p class="title">Standard Zelt</p>
                <p class="price">CHF 25.–</p>
            </div>

            <div class="ticketGreen">
                <img src={{asset('icons/tickets_standard_white.svg')}}  height="60px" alt="ticket">
                <p class="title">1 Tag Pass</p>
                <p class="price">CHF 75.–</p>
            </div>

            <div class="ticketGreen">
                <img src={{asset('icons/tickets_standard_white.svg')}}  height="60px" alt="ticket">
                <p class="title">1 Tag Pass</p>
                <p class="price">CHF 75.–</p>
            </div>

            <div class="ticketGreen">
                <img src={{asset('icons/tickets_standard_white.svg')}}  height="60px" alt="ticket">
                <p class="title">1 Tag Pass</p>
                <p class="price">CHF 75.–</p>
            </div>
        </div>

        {{--weisser Teil mit verfügbaren Tickets--}}
        <div class="ticketsArea">
            <div class="ticketContainer nomargin">
                <div class="ticketsSmaller">
                    <div class="container">
                        <div class="text">
                            <span class="textRegGreen">Verfügbare Tickets</span>
                            <div class="d-flex">
                                <span class="textBoldGreen">960</span>
                                <span class="textRegGrey"> / 1200</span>
                            </div>
                        </div>
                        <div class="ticketsSymbol">
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratQ"></div>
                            <div class="QuadratQ"></div>
                        </div>
                    </div>
                </div>

                <div class="ticketsSmaller">
                    <div class="container">
                        <div class="text">
                            <span class="textRegGreen">Verfügbare Tickets</span>
                            <div class="d-flex">
                                <span class="textBoldGreen">960</span>
                                <span class="textRegGrey"> / 1200</span>
                            </div>
                        </div>
                        <div class="ticketsSymbol">
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratQ"></div>
                            <div class="QuadratQ"></div>
                        </div>
                    </div>
                </div>

                <div class="ticketsSmaller">
                    <div class="container">
                        <div class="text">
                            <span class="textRegGreen">Verfügbare Tickets</span>
                            <div class="d-flex">
                                <span class="textBoldGreen">960</span>
                                <span class="textRegGrey"> / 1200</span>
                            </div>
                        </div>
                        <div class="ticketsSymbol">
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratQ"></div>
                            <div class="QuadratQ"></div>
                        </div>
                    </div>
                </div>

                <div class="ticketsSmaller">
                    <div class="container">
                        <div class="text">
                            <span class="textRegGreen">Verfügbare Tickets</span>
                            <div class="d-flex">
                                <span class="textBoldGreen">960</span>
                                <span class="textRegGrey"> / 1200</span>
                            </div>
                        </div>
                        <div class="ticketsSymbol">
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratF"></div>
                            <div class="QuadratQ"></div>
                            <div class="QuadratQ"></div>
                        </div>
                    </div>
                </div>
            </div>

            {{--Ticketanzahl + und ---}}
            <div class="ticketContainer nomargin">
                <div class="ticketsCounter">
                    <div class="container">
                        <div class="box">
                            <img src={{asset('icons/steuerung_minus.svg')}}  width="20px" alt="ticket minus">
                        </div>
                        <p class="fontticket">0 Tickets</p>
                        <div class="box">
                            <img src={{asset('icons/steuerung_plus.svg')}}  width="20px" alt="ticket plus">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ticketBuy__submitContainer">
        <div class="action__boxblack">
            4 TICKETS KAUFEN
        </div>
    </div>

</div>

@endsection