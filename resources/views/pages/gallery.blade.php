<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <script src="https://kit.fontawesome.com/394052289f.js"></script>

    <!-- Add these lines FencyBox Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    @vite('resources/css/app.css')
    <title>{{ config('app.name') }}: Gallery</title>
    <style>
        /* Add this style for fixed dimensions */
        .gallery-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border: 2px solid #f48000;
            border-radius: 8px;
        }

        .gallery-image-container {
            position: relative;
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(255, 255, 255, 0.8);
            border: 2px solid #00f;
            border-radius: 8px;
            font-weight: bold;
            color: #007bff;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .gallery-image-container:hover .gallery-overlay {
            opacity: 1;
        }
    </style>
</head>

<body>
    @include('layout.toparea')
    @include('layout.header')
    @include('layout.navbar')

    <h1 class="flex justify-center py-3 rounded-xl text-white font-bold text-lg ml-10 mr-10 mt-2 mb-2"
        style="background-color: #f48000">Our Gallery</h1>

    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">

            <!-- Modify the image containers in the loop -->
            @foreach ($galleryImages as $image)
                <div class="gallery-image-container relative group">
                    <a data-fancybox="gallery" href="{{ asset($image->image_file) }}">
                        <img src="{{ asset($image->image_file) }}" alt="{{ $image->image_title }}"
                            class="gallery-image">
                        <div class="gallery-overlay">
                            {{ $image->image_title }}
                        </div>
                    </a>
                </div>
            @endforeach


        </div>
    </div>

    <div class="flex justify-center">
        {{ $galleryImages->links() }}
    </div>

    @include('layout.footer')

    <script src="{{ asset('js/main.js') }}"></script>
    @vite('resources/js/app.js')

</body>

</html>
