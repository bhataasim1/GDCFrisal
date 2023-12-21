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
    <title>{{config('app.name')}}:Grievances</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-8 px-4">
        <h1 class="text-3xl font-semibold mb-4">All Grievances</h1>
        <!-- Search Bar -->
        <form method="GET" class="mb-4 relative">
            <input id="search" type="search" name="search" value="{{ request('search') }}"
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300 pl-10"
                placeholder="Search Grievances">
            <button type="submit"
                class="absolute inset-y-0 right-0 flex items-center justify-center border-l-2 border-yellow-300 text-gray-500 px-4 py-2">
                <i class="fa-solid fa-magnifying-glass text-lg"></i>
            </button>
        </form>
        
        
        <!-- Grievances List -->
        <div class="bg-white shadow overflow-x-auto sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 sm:w-full md:w-2/3 lg:w-3/4 xl:w-4/5">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Subject
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Phone Number
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Message
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($grievances as $grievance)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $grievance->subject }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $grievance->name }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $grievance->email }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $grievance->phone }}
                            </td>
                            <td class="px-6 py-4 whitespace-normal">
                                {{ $grievance->message }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
