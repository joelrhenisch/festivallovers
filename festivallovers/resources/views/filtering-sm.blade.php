@extends('master')

@section('content')

@include ('layouts.filter')






    <script>
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
        });

    </script>

@endsection