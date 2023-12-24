<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <script src="https://kit.fontawesome.com/394052289f.js"></script>
    @vite('resources/css/app.css')
    <title>{{ config('app.name') }}: Upload New Images</title>
</head>

<body class="bg-gray-100">

    <div class="font-semibold flex text-red-600 justify-center py-1">
        {{ session('status') }}
    </div>

    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-semibold mb-8">{{ config('app.name') }}: Gallery</h1>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($allGalleryImages as $image)
                <div class="relative group">
                    <img src="{{ asset($image->image_file) }}" alt="Image" class="w-full h-auto">
                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-75 transition duration-300">
                        <div class="flex items-center justify-center h-full">
                            <a href="{{ route('admin.editGalleryImage', $image->id)}}" class="text-white mx-2">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.deleteGalleryImage', $image->id) }}" method="POST"
                                class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white mx-2">
                                    <i class="fa fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center">
        {{ $allGalleryImages->links() }}
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
    @vite('resources/js/app.js')

</body>

</html>
