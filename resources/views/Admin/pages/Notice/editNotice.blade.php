<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <script src="https://kit.fontawesome.com/394052289f.js"></script>
    @vite('resources/css/app.css')
    <title>{{ config('app.name') }}: Edit Notice</title>
</head>

<body class="bg-gray-100">

    <div class="container mx-auto mt-8">

        <h1 class="text-2xl font-semibold mb-4 flex justify-center">Edit Notice "{{ $notice->notice_title }}"</h1>

        <div class="font-semibold flex text-red-600 justify-center py-1">
            {{ session('status') }}
        </div>

        <!-- Notice Form -->
        <form class="bg-white p-6 rounded-lg shadow-md" action="{{ route('admin.updateNotice', $notice->notice_id) }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Use the correct method for update -->

            <!-- Notice Title -->
            <div class="mb-4">
                <label for="notice_title" class="block text-gray-600 font-semibold mb-2">Notice Title</label>
                <input type="text" id="notice_title" name="notice_title"
                    value="{{ old('notice_title', $notice->notice_title) }}"
                    class="w-full px-3 py-2 border rounded-md border-gray-400 focus:outline-none focus:border-blue-500"
                    placeholder="Enter Notice Title" required>
                @error('notice_title')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>

            <!-- Notice Date -->
            <div class="mb-4">
                <label for="notice_date" class="block text-gray-600 font-semibold mb-2">Date</label>
                <input type="date" id="notice_date" name="notice_date"
                    value="{{ old('notice_date', $notice->notice_date->format('Y-m-d')) }}"
                    class="w-full px-3 py-2 border rounded-md border-gray-400 focus:outline-none focus:border-blue-500"
                    required>
                @error('notice_date')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>

            <!-- Notice Link (File Upload) -->
            <div class="mb-4">
                <label for="notice_file" class="block text-gray-600 font-semibold mb-2">Notice Link (PDF or Image)</label>
                <input type="file" id="notice_file" name="notice_file" accept=".pdf,.jpg,.jpeg,.png"
                    class="w-full border rounded-md border-gray-400 focus:outline-none focus:border-blue-500">
                @error('notice_file')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
                <p class="text-sm text-gray-500 mt-2">Current File: {{ $notice->notice_file }}</p>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit"
                    class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    Update
                </button>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/admin.js') }}"></script>
    @vite('resources/js/app.js')

</body>

</html>
