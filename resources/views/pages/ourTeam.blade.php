<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <script src="https://kit.fontawesome.com/394052289f.js"></script>
    @vite('resources/css/app.css')
    <title>{{config('app.name')}}: Our Team</title>

</head>

<body>
    @include('layout.toparea')
    @include('layout.header')
    @include('layout.navbar')

    <section class="bg-white dark:bg-gray-900 mt-2 border-b-4 border-yellow-400">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Team</h2>
            </div> 
            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
 
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{asset('images/a2.jpeg')}}" alt="Bhat Aasim">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="https://bhataasim.github.io/portfolio/" target="_blank" class="hover:text-orange-500">Bhat Aasim</a>
                    </h3>
                    <p>Ethical Hacker | Full-Stack Developer</p>
                    <ul class="flex justify-center mt-4 space-x-4">
                        <li>
                            <a href="https://facebook.com/bhataasim700" target="_blank" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-facebook text-2xl"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/bhataasim9" target="_blank" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-square-x-twitter text-2xl"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/bhataasim1" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                                <i class="fa-brands fa-square-github text-2xl"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/bhataasim1" target="_blank" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-instagram text-2xl"></i>
                            </a> 
                        </li> 
                    </ul>
                </div>

                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{asset('images/a2.jpeg')}}" alt="Bhat Aasim">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="https://bhataasim.github.io/portfolio/" target="_blank" class="hover:text-orange-500">Bhat Aasim</a>
                    </h3>
                    <p>Ethical Hacker | Full-Stack Developer</p>
                    <ul class="flex justify-center mt-4 space-x-4">
                        <li>
                            <a href="https://facebook.com/bhataasim700" target="_blank" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-facebook text-2xl"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/bhataasim9" target="_blank" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-square-x-twitter text-2xl"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/bhataasim1" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                                <i class="fa-brands fa-square-github text-2xl"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/bhataasim1" target="_blank" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-instagram text-2xl"></i>
                            </a> 
                        </li> 
                    </ul>
                </div>

                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{asset('images/a2.jpeg')}}" alt="Bhat Aasim">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="https://bhataasim.github.io/portfolio/" target="_blank" class="hover:text-orange-500">Bhat Aasim</a>
                    </h3>
                    <p>Ethical Hacker | Full-Stack Developer</p>
                    <ul class="flex justify-center mt-4 space-x-4">
                        <li>
                            <a href="https://facebook.com/bhataasim700" target="_blank" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-facebook text-2xl"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/bhataasim9" target="_blank" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-square-x-twitter text-2xl"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/bhataasim1" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                                <i class="fa-brands fa-square-github text-2xl"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/bhataasim1" target="_blank" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-instagram text-2xl"></i>
                            </a> 
                        </li> 
                    </ul>
                </div>

                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{asset('images/a2.jpeg')}}" alt="Bhat Aasim">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="https://bhataasim.github.io/portfolio/" target="_blank" class="hover:text-orange-500">Bhat Aasim</a>
                    </h3>
                    <p>Ethical Hacker | Full-Stack Developer</p>
                    <ul class="flex justify-center mt-4 space-x-4">
                        <li>
                            <a href="https://facebook.com/bhataasim700" target="_blank" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-facebook text-2xl"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/bhataasim9" target="_blank" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-square-x-twitter text-2xl"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/bhataasim1" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                                <i class="fa-brands fa-square-github text-2xl"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/bhataasim1" target="_blank" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-instagram text-2xl"></i>
                            </a> 
                        </li> 
                    </ul>
                </div>
  
            </div>  
        </div>
      </section>

    @include('layout.footer')

    <script src="{{ asset('js/main.js') }}"></script>
    @vite('resources/js/app.js')
</body>

</html>
