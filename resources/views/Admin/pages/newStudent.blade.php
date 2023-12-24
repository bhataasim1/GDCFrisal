<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <script src="https://kit.fontawesome.com/394052289f.js"></script>
    @vite('resources/css/app.css')
    <title>{{config('app.name')}}:Admit New Student</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-8">

        <h1 class="text-2xl font-semibold mb-4 flex justify-center">Admit New Student</h1>

        <div class="font-semibold flex text-red-600 justify-center py-1">
            {{ session('status') }}
        </div>

        <!-- Student Form -->
        <form class="bg-white p-6 rounded-lg shadow-md" action="{{ route('admin.admitNewStudent') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Student Name -->
            <div class="mb-4">
                <label for="student_name" class="block text-gray-600 font-semibold mb-2">Full Name</label>
                <input type="text" id="student_name" name="student_name"
                    class="w-full px-3 py-2 border rounded-md border-gray-400 focus:outline-none focus:border-blue-500"
                    placeholder="Enter Students Full Name" required>
                @error('student_name')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>

            <!-- Student Reg-No Name -->
            <div class="mb-4">
                <label for="student_reg_no" class="block text-gray-600 font-semibold mb-2">Student's Registration Number</label>
                <input type="text" id="student_reg_no" name="student_reg_no"
                    class="w-full px-3 py-2 border rounded-md border-gray-400 focus:outline-none focus:border-blue-500"
                    placeholder="Enter Students Registration Number" required>
                @error('student_reg_no')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>

            <!-- Student Father's Name -->
            <div class="mb-4">
                <label for="student_father_name" class="block text-gray-600 font-semibold mb-2">Father Name</label>
                <input type="text" id="student_father_name" name="student_father_name"
                    class="w-full px-3 py-2 border rounded-md border-gray-400 focus:outline-none focus:border-blue-500"
                    placeholder="Enter Father Name" required>
                @error('student_father_name')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>

            <!-- Student Mothers's Name -->
            <div class="mb-4">
                <label for="student_mother_name" class="block text-gray-600 font-semibold mb-2">Mother Name</label>
                <input type="text" id="student_mother_name" name="student_mother_name"
                    class="w-full px-3 py-2 border rounded-md border-gray-400 focus:outline-none focus:border-blue-500"
                    placeholder="Enter Mother Name" required>
                @error('student_mother_name')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>

            <!-- Date of Birth -->
            <div class="mb-4">
                <label for="student_dob" class="block text-gray-600 font-semibold mb-2">Date of Birth</label>
                <input type="date" id="student_dob" name="student_dob"
                    class="w-full px-3 py-2 border rounded-md border-gray-400 focus:outline-none focus:border-blue-500"
                    required>
                @error('student_dob')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>

            <!-- Mobile Number -->
            <div class="mb-4">
                <label for="student_mobile" class="block text-gray-600 font-semibold mb-2">Mobile Number</label>
                <input type="tel" id="student_mobile" name="student_mobile"
                    class="w-full px-3 py-2 border rounded-md border-gray-400 focus:outline-none focus:border-blue-500"
                    placeholder="Enter Mobile Number" required>
                @error('student_mobile')
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

    <script src="{{ asset('js/main.js') }}"></script>
    @vite('resources/js/app.js')
</body>

</html>
