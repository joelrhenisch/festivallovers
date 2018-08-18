<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>

    <title>Festival Lovers</title>
</head>

<!-- Farbe dem Body zuweisen. Wird pro Seite definiert -->
<body class="@yield('bodyClass')">

<!-- schwarzes Menu welches eingeblendet werden kann -->
@include ('layouts.nav-negative-sm')

@include ('layouts.nav')

@yield('content')

@include ('layouts.footer')


</body>
</html>

