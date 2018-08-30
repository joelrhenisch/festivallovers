<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/css/app.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Festival Lovers</title>
</head>
<body>
    <!-- Farbe dem Body zuweisen. Wird pro Seite definiert -->
    <div class="@yield('bodyClass')"></div>

    <!-- schwarzes Menu & Navi welches eingeblendet werden kann -->
    @include ('layouts.nav-negative-sm')

    <!-- Navi -->
    @include ('layouts.nav')

    <!-- Inhalt der pro Seite hier eingefügt wird -->
    @yield('content')

    <!-- Footer -->
    @include ('layouts.footer')

<script type="text/javascript" src="/js/app.js"></script>


</body>
</html>
