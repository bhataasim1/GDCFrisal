<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <script src="https://kit.fontawesome.com/394052289f.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>{{ config('app.name') }}:Post Notice</title>
</head>

<body class="bg-gray-100">

    <!-- View All Notices Button -->
    <div class="mt-4 text-center">
        <a href="{{ route('admin.allNotices') }}"
            class="inline-block bg-red-500 text-white font-semibold px-4 py-2 rounded-full hover:bg-red-600 focus:outline-none focus:bg-red-600">
            All Notices
        </a>
    </div>

    <div class="container mx-auto mt-8">

        <h1 class="text-2xl font-semibold mb-4 flex justify-center">Upload New Notice</h1>

        <div class="font-semibold flex text-red-600 justify-center py-1">
            {{ session('status') }}
        </div>

        <!-- Notice Form -->
        <form class="bg-white p-6 rounded-lg shadow-md" action="{{ route('admin.noticePost') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <!-- Notice Name -->
            <div class="mb-4">
                <label for="notice_title" class="block text-gray-600 font-semibold mb-2">Notice Title</label>
                <input type="text" id="notice_title" name="notice_title"
                    class="w-full px-3 py-2 border rounded-md border-gray-400 focus:outline-none focus:border-blue-500"
                    placeholder="Enter Notice Title" required>
                @error('notice_title')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>

            <!-- Date -->
            <div class="mb-4">
                <label for="notice_date" class="block text-gray-600 font-semibold mb-2">Date</label>
                <input type="date" id="notice_date" name="notice_date"
                    class="w-full px-3 py-2 border rounded-md border-gray-400 focus:outline-none focus:border-blue-500"
                    required>
                @error('notice_date')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>

            <!-- Notice Link (File Upload) -->
            <div class="mb-4">
                <label for="notice_file" class="block text-gray-600 font-semibold mb-2">Notice Link (PDF or
                    Image)</label>
                <input type="file" id="notice_file" name="notice_file" accept=".pdf,.jpg,.jpeg,.png"
                    class="w-full border rounded-md border-gray-400 focus:outline-none focus:border-blue-500" required>
                @error('notice_file')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit"
                    class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    Submit
                </button>
            </div>
        </form>
    </div>

</body>

</html>
