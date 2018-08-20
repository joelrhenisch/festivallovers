@extends('master')

@section('content')

@include ('layouts.filter')



    <script>
        $("#result-show").click(function(){
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
            $("#nav__btn-menu").hide();
            $("#mehr-genres").hide();
            $("#nav__btn-back").removeClass('d-none');

            // Spezielle Höhe zum für Filtering Mobile
            $("#filter").addClass('filter__extra-height')
        });

    </script>

@endsection