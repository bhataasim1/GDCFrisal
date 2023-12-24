<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <script src="https://kit.fontawesome.com/394052289f.js"></script>
    @vite('resources/css/app.css')
    <title>{{config('app.name')}}: Edit Gallery Image</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-8">

        <h1 class="text-2xl font-semibold mb-4 flex justify-center">Edit Image " {{$galleryImage->image_title}}"</h1>

        <div class="font-semibold flex text-red-600 justify-center py-1">
            {{ session('status') }}
        </div>

        <!-- Gallery Image Edit Form -->
        <form class="bg-white p-6 rounded-lg shadow-md" action="{{ route ('admin.updateGalleryImage', $galleryImage->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Image Name -->
            <div class="mb-4">
                <label for="image_title" class="block text-gray-600 font-semibold mb-2">Image Title</label>
                <input type="text" id="image_title" name="image_title"
                    class="w-full px-3 py-2 border rounded-md border-gray-400 focus:outline-none focus:border-blue-500"
                    value="{{ old('image_title',$galleryImage->image_title) }}"
                    placeholder="Enter New Image Title" required>
                @error('image_title')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>

            <!-- New Image File -->
            <div class="mb-4">
                <label for="image_file" class="block text-gray-600 font-semibold mb-2">Upload New Image (Optional)</label>
                <input type="file" id="image_file" name="image_file" accept=".jpg,.jpeg,.png"
                    class="w-full border rounded-md border-gray-400 focus:outline-none focus:border-blue-500">
                @error('image_file')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
                <p class="text-sm text-gray-500 mt-2">Current File: {{ $galleryImage->image_file }}</p>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit"
                    class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    Update Image
                </button>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
    @vite('resources/js/app.js')

</body>

</html>
