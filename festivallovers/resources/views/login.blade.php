@extends('master')

@section('content')

<div class="bg__green">
    <h1 class="text-center text-white mb-5">Login</h1>
    <div class="loginSite__box">
        <div class="loginSite__boxTop">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="E-Mail Adresse" aria-label="E-Mail Adresse"
                       aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Passwort" aria-label="Passwort"
                       aria-describedby="basic-addon2">
            </div>
            <div class="action__boxblack w-50 mx-auto mt-4 mb-3">
                ANMELDEN
            </div>
        </div>
        <div class="login__boxBottom">
            <div class="login__registerBox">
                <p class="mx-auto mb-0">Neu bei FestivalLovers?<br>Jetzt <span class="boldUnderline">registrieren</span>.
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
    $(function () {
        $('#footer').addClass('hidden');
    });
</script>

@endsection