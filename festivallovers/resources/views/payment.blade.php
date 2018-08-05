@extends('master')

@section('content')

    <div id="payment-step-1" class="bg__green">
        <h1 class="text-center text-white mb-5">Zahlung</h1>
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
                    <input type="text" class="form-control text-greydark bg-greylighter" placeholder="1111-1111-1111-1111" aria-label="Cardnumber"
                           aria-describedby="basic-addon2">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control text-greydark bg-greylighter" placeholder="MM / JJ" aria-label="Date">
                    <input type="text" class="form-control text-greydark bg-greylighter" placeholder="CVC" aria-label="CVC">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control text-greydark bg-greylighter" placeholder="Karteninhaber"
                           aria-describedby="basic-addon2">
                </div>
                <div id="bezahlen" class="action__boxblack mx-auto mt-5 d-flex justify-content-center align-items-center">
                    <img class="mr-2" src={{asset('icons/tickets_securtiy_white.svg')}} height="18px" alt="secure">
                    <span>CHF 895.– BEZAHLEN</span>
                </div>
            </div>
        </div>
    </div>
    <div id="payment-step-3">
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
            $('#payment-step-3').addClass('hidden');
        });

        $("#bezahlen").click(function () {
            $("#payment-step-1").hide();
            $("#payment-step-3").show();
        });

    </script>

@endsection