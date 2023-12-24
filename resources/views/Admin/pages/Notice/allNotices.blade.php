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
    <!-- Notifications -->
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-4 text-center">All Notifications</h2>

        <div class="font-semibold flex text-red-600 justify-center py-1">
            {{ session('status') }}
        </div>

        @foreach ($allNotifications as $index => $notification)
            <div class="bg-white p-4 rounded shadow-md mb-4">
                <div class="flex items-center justify-between">
                    <a href="{{ url('/') . '/' . $notification->notice_file }}" class="flex items-center">
                        <p class="text-sm text-gray-500 mr-2">{{ $index + 1 }}</p>
                        <h3 class="text-lg font-semibold mr-2">{{ $notification->notice_title }}</h3>
                        @if ($notification->isNew)
                            <img src="{{ asset('images/new.gif') }}" alt="new" class="w-6 h-3">
                        @endif
                        <p class="text-sm text-gray-500 ml-2">{{ $notification->notice_date->format('d-M-Y') }}</p>
                        <p class="text-sm text-gray-500 ml-2">({{ $notification->notice_date->diffForHumans() }})</p>
                    </a>

                    <!-- Edit and Delete Icons -->
                    <div class="flex">
                        <a href="{{route('admin.editNotice', $notification->notice_id)}}" class="text-blue-500 mr-2">
                            <i class="fa fa-edit"></i>
                        </a>
                        <form method="POST" action="{{ route('admin.deleteNotice', $notification->notice_id) }}"
                            class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">
                                <i class="fa fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="flex justify-center">
        {{ $allNotifications->links() }}
    </div>

    <script src="{{ asset('js/admin.js') }}"></script>
    @vite('resources/js/app.js')
</body>

</html>
