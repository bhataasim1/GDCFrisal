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
    <title>Student Login</title>
</head>

<body class="bg-gray-200">
    <div class="flex flex-col justify-center items-center h-screen">
        <!-- Logo at the top -->
        <img src="{{ asset('images/logoMain.png') }}" alt="Logo" class="logowidth mb-8">

        <div class="bg-white p-16 rounded-lg shadow-lg text-center w-96">
            <h3 class="text-3xl text-gray-800 mb-8 font-semibold">Student Login</h3>
            <form action="#" method="POST">
                @csrf

                <x-Inputs type="text" name="username" label="username" placeholder="Reg No, Username, Email" />
                <x-Inputs type="password" name="password" label="password" placeholder="Password" />

                <div class="font-semibold flex text-red-600 justify-center py-1">
                    {{ session('status') }}
                </div>

                <button type="submit"
                    class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-300 w-full">Sign
                    In</button>
            </form>
            <p class="mt-8"><a href="#" class="text-blue-500 hover:underline">
                    <i class="fa-solid fa-key px-1"></i> Forgot Password</a></p>
        </div>
    </div>
</body>

</html>
