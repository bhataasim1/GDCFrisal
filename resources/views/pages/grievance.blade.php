<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <script src="https://kit.fontawesome.com/394052289f.js"></script>
    @vite('resources/css/app.css')
    <title>{{config('app.name')}}: Grievance</title>
</head>

<body>
    @include('layout.toparea')
    @include('layout.header')
    @include('layout.navbar')

    <div
        class="container bg-gray-100 mx-auto py-8 px-4 shadow-lg flex flex-wrap border-t-2 border-yellow-400 mt-2 mb-2 rounded-xl">
        <!-- Left Section: Grievance Form -->
        <div class="w-full md:w-2/3 p-4">

            <div class="font-semibold flex text-red-600 justify-center py-1">
                {{ session('status') }}
            </div>

            <h1 class="text-3xl font-semibold mb-4">Submit Your Grievance</h1>
            <form class="w-full" method="POST" action="{{route('grievance')}}">
                @csrf
                <div class="flex flex-wrap -mx-2">
                    <!-- Grievance Subject -->
                    <div class="w-1/2 px-2 mb-4">
                        <label for="subject" class="block text-gray-700 font-bold mb-2">Grievance
                            Subject:</label>
                        <input type="text" id="subject" name="subject"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300"
                            placeholder="Enter grievance Subject" required>
                        @error('subject')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Name -->
                    <div class="w-1/2 px-2 mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                        <input type="text" id="name" name="name"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300"
                            placeholder="Enter your name" required>
                        @error('name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="w-1/2 px-2 mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300"
                            placeholder="Enter your email" required>
                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Phone Number -->
                    <div class="w-1/2 px-2 mb-4">
                        <label for="phone" class="block text-gray-700 font-bold mb-2">Phone Number:</label>
                        <input type="tel" id="phone" name="phone"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300"
                            placeholder="Enter your phone number" required>
                        @error('phone')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Message Text Box -->
                    <div class="w-full px-2 mb-6">
                        <label for="message" class="block text-gray-700 font-bold mb-2">Message:</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300"
                            placeholder="Enter your grievance message" required></textarea>
                        @error('message')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="w-full px-2 mb-4">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-700">
                            Submit Grievance
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Right Section: Image and Total Grievances -->
        <div class="w-full md:w-1/3 p-4 shadow-lg rounded-lg border-t-2 border-blue-600">
            <img src="{{ asset('images/logoMain.png') }}" alt="School Image" class="w-full h-auto">

            <!-- Total Grievances Sent -->
            <div class="mt-4 text-center">
                <h2 class="font-semibold mb-2 bg-blue-300 rounded-lg text-blue-900 mt-2 py-3 px-3"><i
                        class="fa-solid fa-file-invoice px-2 text-lg"></i>Grievances Received : <span
                        class="text-green-700">{{$totalGrievances}}</span></h2>
            </div>
        </div>
    </div>
    @include('layout.footer')

    <script src="{{ asset('js/main.js') }}"></script>
    @vite('resources/js/app.js')
</body>

</html>
