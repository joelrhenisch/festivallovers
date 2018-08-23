@extends('master')

@section('content')

@include ('layouts.filter')



    <script>
        $("#result-show").click(function(){
            window.location = $(this).find("a:first").attr("href");
            return false;
        });

        $("#nav__btn-back").click(function(){
            window.location = $(this).find("a:first").attr("href");
            return false;
        });

        $(function () {
            // Footer wird beim Laden der Seite automatisch ausgeblendet
            $('#footer-lg').addClass('hidden');
            $('#footer-sm').addClass('hidden');
            $('#filter__btn-result-container').removeClass('d-none');

        });

        $( document ).ready(function() {
            // In der Navi links den "zurück"-Button einblenden
            $("#nav__btn-menu").show();
            $("#menu").hide();
            $("#nav__btn-back").removeClass('d-none');

            // dieses Element wird nur in Desktop verwendet
            $("#mehr-genres").hide();
        });

    </script>

@endsection