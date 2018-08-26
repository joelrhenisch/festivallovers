@extends('master')

@section('bodyClass', 'background-mint')

@section('content')

    <!-- Schritt 1  -->
    <div id="payment-step-1" class="bg__green">
        <h1 class="text-center text-white">Zahlung</h1>
        <div class="loginSite__box">
            <div class="loginSite__boxTop">
                <div class="input-group mb-3">
                    <select class="form-control text-greydark bg-greylighter provider__select">
                        <option class="text-greydarker">VISA</option>
                        <option class="text-greydarker">MASTERCARD</option>
                        <option class="text-greydarker">PAYPALL</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control text-greydark bg-greylighter" placeholder="1111-1111-1111-1111" aria-label="Cardnumber" aria-describedby="basic-addon2">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control text-greydark bg-greylighter" placeholder="MM / JJ" aria-label="Date">
                    <input type="text" class="form-control text-greydark bg-greylighter" placeholder="CVC" aria-label="CVC">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control text-greydark bg-greylighter" placeholder="Karteninhaber" aria-describedby="basic-addon2">
                </div>
                <div id="bezahlen" class="action__box--black mx-auto d-flex justify-content-center align-items-center">
                    <img class="mr-2" src={{asset('icons/tickets_securtiy_white.svg')}} height="18px" alt="secure">
                    <span>CHF 895.– BEZAHLEN</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Schritt 2  -->
    <div id="payment-step-2" class="bg__green">
        <h1 class="text-center text-white">Zahlung</h1>
        <div class="loginSite__box">
            <div class="loginSite__boxTop">
                <div class="payment__container-row-multiple mb-3">
                    <div class="payment__provider">
                        <img src={{asset('images/visa.png')}} height="18px" alt="visa">
                    </div>
                    <div class="payment__provider">
                        <img src={{asset('images/mastercard.png')}} height="18px" alt="mastercard">
                    </div>
                    <div class="payment__provider">
                        <img src={{asset('images/paypal.png')}} height="18px" alt="paypal">
                    </div>
                </div>
                <div class="payment__container-row-single mb-3">
                    <div class="payment__container">
                        <div><span class="description">Kartennummer</span><br><span class="input">1234-12341-1234-1234</span></div>
                        <div class="d-flex align-items-center">
                            <img src={{asset('images/visa.png')}} height="18px" alt="visa">
                        </div>
                    </div>
                </div>

                <div class="payment__container-row-single mb-3">
                    <div class="payment__container w-50">
                        <div><span class="description">MM / JJ</span><br><span class="input">03 / 18</span></div>
                    </div>
                    <div class="payment__container w-50 border-left-1px-greydarker">
                        <div class="col"><span class="description">CVC</span><br><span class="input">123</span></div>
                        <div class="col d-flex align-items-center"><img class="mr-2" src={{asset('icons/tickets_info_grey.svg')}} height="23px" alt="secure"></div>
                    </div>
                </div>

                <div class="payment__container-row-single mb-3">
                    <div class="payment__container">
                        <div><span class="description">Karteninhaber</span><br><span class="input">Tobias Schneider</span></div>
                    </div>
                </div>

                <div id="bezahlt" class="action__box--mint mx-auto d-flex justify-content-center align-items-center">
                    <img class="mr-2" src={{asset('icons/steuerung_checkmark_white.svg')}} height="23px" alt="secure">
                    <span>CHF 895.– BEZAHLT</span>
                </div>
            </div>
        </div>
    </div>

    <div id="payment-step-3" class="bg__green">
        @include ('layouts.payment_complete')
    </div>

    {{--grünes Logo unten--}}
    <div class="logo__StreifenBottom">
        <img src={{asset('icons/music_indie.svg')}} height="40px"/>
    </div>


    <script>
        $(function () {
            // Footer wird beim Laden der Seite automatisch ausgeblendet
            $('#footer-lg').addClass('hidden');
            $('#footer-sm').addClass('hidden');
            // weiter Schritt im Zahlungsvorgang wird beim Laden der Seite automatisch ausgeblendet
            $('#payment-step-2').addClass('hidden');
            $('#payment-step-3').addClass('hidden');
        });

        // Schritte beim Bezahlen werden in- ausgeblendet
        $("#bezahlen").click(function () {
            $("#payment-step-1").hide();
            $("#payment-step-2").show();
        });

        // Schritte beim Bezahlen werden in- ausgeblendet
        $("#bezahlt").click(function () {
            $("#payment-step-2").hide();
            $("#payment-step-3").show();
        });

    </script>

@endsection