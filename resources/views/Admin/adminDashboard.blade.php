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
    <title>{{config('app.name')}}:Admin Dashboard</title>
</head>

<body>
    <div class="py-1 toparea">
        <div
            class="container mx-auto flex flex-col md:flex-row justify-between items-center md:items-center space-y-3 md:space-y-0 md:space-x-4">
            <div class="flex space-x-1">
                <i class="fa-solid fa-user text-2xl text-white"></i>
                <h1 class="text-lg mx-auto mt-1 text-white">welcome <span
                        class="text-blue-700 font-bold">{{ $admin->name }}</span></h1>
            </div>
            <div class="flex space-x-1 mt-4 md:mt-0">
                <a href="{{ route('admin.logout') }}" class="button_top font-small py-1 px-4"><i
                        class="fa-solid fa-right-from-bracket px-1"></i>Logout</a>
            </div>
        </div>
    </div>

    <div class="container mx-auto mt-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 border-t-2 border-red-500 rounded-lg">
            <!-- Box 1 -->
            <div class="bg-white p-4 rounded-lg shadow-lg flex flex-col justify-between">
                <i class="fa-solid fa-pen-nib text-4xl text-blue-500 mb-4 flex justify-center"></i>
                <a href="{{ route('admin.noticePage') }}"
                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full flex justify-center">Post
                    Notice</a>
            </div>

            <!-- Box 2 -->
            <div class="bg-white p-4 rounded-lg shadow-lg flex flex-col justify-between">
                <i class="fa-regular fa-image text-4xl text-green-500 mb-4 flex justify-center"></i>
                <a href="{{ route('admin.galleryPage') }}"
                    class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-full flex justify-center">Post
                    Gallery Images</a>
            </div>

            <!-- Box 3 -->
            <div class="bg-white p-4 rounded-lg shadow-lg flex flex-col justify-between">
                <i class="fa-solid fa-user-plus text-4xl text-orange-500 mb-4 flex justify-center"></i>
                <a href="#"
                    class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-full flex justify-center">
                    Admit New Student</a>
            </div>

            <!-- Box 4 -->
            <div class="bg-white p-4 rounded-lg shadow-lg flex flex-col justify-between">
                <i class="fa-solid fa-comments text-4xl text-red-500 mb-4 flex justify-center"></i>
                <a href="{{ route('admin.grievancePage') }}"
                    class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-full flex justify-center">
                    View Grievances</a>
            </div>
        </div>
    </div>

</body>

</html>
