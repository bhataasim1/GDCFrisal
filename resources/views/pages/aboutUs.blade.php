<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <script src="https://kit.fontawesome.com/394052289f.js"></script>
    @vite('resources/css/app.css')
    <title>{{config('app.name')}}: About US</title>
</head>

<body>
    @include('layout.toparea')
    @include('layout.header')
    @include('layout.navbar')

    <h1 class="flex justify-center py-3 rounded-xl text-white font-bold text-lg ml-10 mr-10 mt-2 mb-2"
        style="background-color: #f48000">Govt Degree College Frisal</h1>

    <div class="container mx-auto py-8 px-4 flex flex-wrap">
        <!-- Left Section: Details about School -->
        <div class="w-full md:w-1/2 p-4">
            <h1 class="text-3xl font-semibold mb-4">About Our School</h1>
            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec varius arcu.
                Sed in massa vel libero consectetur fringilla. Nulla facilisi.</p>
            <p class="text-gray-700 mt-2">Our school is dedicated to providing high-quality education to students. We
                believe in fostering creativity, critical thinking, and lifelong learning.</p>
        </div>

        <!-- Right Section: More Details about School -->
        <div class="w-full md:w-1/2 p-4">
            <h2 class="text-3xl font-semibold mb-4">Our Mission</h2>
            <p class="text-gray-700">The mission of this institute of higher learning has been to play a key role in
                imparting higher education in keeping with the most desirable standards in this era obtaining at
                National and International levels. The Institution aims at being a powerful agency for human resource
                development through fostering the potentialities and talents of its students so that they are desirably
                equipped for playing socially and economically useful role in the future society.</p>

            <h2 class="text-3xl font-semibold mt-6 mb-4">Our Vision</h2>
            <p class="text-gray-700">To educate and train the student to be efficient, empathetic and socially
                responsible individuals, to inculcate values of discipline, hard-work, team-spirit, scientific tempers
                and to develop critical thinkers.</p>
        </div>
    </div>

    @include('layout.footer')

    <script src="{{ asset('js/main.js') }}"></script>
    @vite('resources/js/app.js')
</body>

</html>
