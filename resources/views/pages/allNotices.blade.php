<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <script src="https://kit.fontawesome.com/394052289f.js"></script>
    @vite('resources/css/app.css')
    <title>{{ config('app.name') }}: All Notifications</title>
</head>

<body class="font-sans bg-gray-100">

    @include('layout.toparea')
    @include('layout.header')
    @include('layout.navbar')

    <!-- Notifications -->
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-4">All Notifications</h2>

        @foreach ($allNotifications as $index => $notification)
            <div class="bg-white p-4 rounded shadow-md mb-4">
                <a href="{{ url('/') . '/' . $notification->notice_file }}" class="flex items-center">
                    <p class="text-sm text-gray-500 mr-2">{{ $index + 1 }}</p>
                    <h3 class="text-lg font-semibold mr-2">{{ $notification->notice_title }}</h3>
                    @if ($notification->isNew)
                        <img src="{{ asset('images/new.gif') }}" alt="new" class="w-6 h-3">
                    @endif
                    <p class="text-sm text-gray-500 ml-2">{{ $notification->notice_date->format('d-M-Y') }}</p>
                    <p class="text-sm text-gray-500 ml-2">({{ $notification->notice_date->diffForHumans() }})</p>
                </a>
            </div>
        @endforeach
    </div>

    @include('layout.footer')

    <script src="{{ asset('js/main.js') }}"></script>
    @vite('resources/js/app.js')
</body>

</html>
