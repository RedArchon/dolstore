<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/04fe5eeb23.js" crossorigin="anonymous"></script>
    <title>@yield('title', 'DOL Logo Store')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        .parallax {
            /* The image used */
            background-image: linear-gradient(rgba(43, 81, 98, 0.5),
            rgba(16, 33, 40, 0.5)),
            url("{{ asset('img/thomas-somme-8HGHPUdRo24-unsplash.jpg') }}");

            /* Set a specific height */
            height: 500px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>