<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <script src="https://kit.fontawesome.com/394052289f.js"></script>
    @vite('resources/css/app.css')
    <title>{{ config('app.name') }}</title>
</head>

<body>
    {{-- ---------------- TOP Area -------------------  --}}
    @include('layout.toparea')

    {{-- ---------------------------- Header ----------------------  --}}
    @include('layout.header')

    {{-- --------------------- nav bar ------------------------ --}}
    @include('layout.navbar')

    {{-- ---------------- Carousel + notification section -------------- --}}
    @include('layout.carousel')

    {{-- ------------------------ Service ----------------  --}}
    @include('layout.service')

    {{-- ------------------------ Messaage from principle --------------------  --}}
    @include('layout.message')

    {{-- ------------------------- accordian --------------------  --}}
    @include('layout.accordian')

    {{-- ------------------------ Events ------------------------ --}}
    @include('layout.events')

    {{-- --------------------- Faculty ------------------------  --}}
    @include('layout.faculty')

    {{-- ------------------------ Footer ------------------------ --}}
    @include('layout.footer')

    {{-- ------------------------ Scripts ------------------------ --}}
    <script src="{{ asset('js/main.js') }}"></script>
    @vite('resources/js/app.js')
</body>

</html>
