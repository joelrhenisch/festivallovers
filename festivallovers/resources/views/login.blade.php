@extends('master')

@section('bodyClass', 'background-mint')

@section('content')

    <div class="bg__green">
        <h1 class="text-center text-white">Login</h1>
        <div class="loginSite__box">
            <div class="loginSite__boxTop">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="E-Mail Adresse" aria-label="E-Mail Adresse" aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Passwort" aria-label="Passwort" aria-describedby="basic-addon2">
                </div>
                <button class="action__box--black mx-auto mt-4 mb-3 width-fill-lg width-fill-sm">
                    ANMELDEN
                </button>
            </div>
            <div class="login__boxBottom">
                <div class="login__registerBox">
                    <p class="mx-auto my-auto mb-0 font-breadcrumb">Neu bei FestivalLovers?<br>Jetzt <span class="boldUnderline cursor-pointer">registrieren</span>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{--grünes Logo unten--}}
    <div class="logo__StreifenBottom">
        <img src={{asset('icons/music_indie.svg')}} height="40px"/>
    </div>


    <script>
        // Footer Mobile & Desktop ausblenden
        $(function () {
            $('#footer-lg').addClass('hidden');
            $('#footer-sm').addClass('hidden');
        });
    </script>

@endsection