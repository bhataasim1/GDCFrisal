<footer class="bg-gray-900 text-white py-8 mt-2">
    <div class="container mx-auto flex flex-wrap justify-between px-3">
        <!-- Links Section -->
        <div class="w-full md:w-1/4 mb-4 md:mb-0">
            <h3 class="text-xl font-semibold mb-4" style="color: #f48000;">Links</h3>
            <ul>
                <li class="hover:text-orange-500"><a href="https://scholarships.gov.in/"><i class="fa-solid fa-caret-right px-1 mr-2"></i>Scholarship (NSP)</a></li>
                <li class="hover:text-orange-500"><a href="{{route('aboutUs')}}"><i class="fa-solid fa-caret-right px-1 mr-2"></i>About</a></li>
                <li class="hover:text-orange-500"><a href="{{route('gallery')}}"><i class="fa-solid fa-caret-right px-1 mr-2"></i>Gallery</a></li>
                <li class="hover:text-orange-500"><a href="#"><i class="fa-solid fa-caret-right px-1 mr-2"></i>Teachers</a></li>
                <!-- Add more links as needed -->
            </ul>
        </div>

        <!-- Social Section -->
        <div class="w-full md:w-1/4 mb-4 md:mb-0">
            <h3 class="text-xl font-semibold mb-4" style="color: #f48000;">Social</h3>
            <ul class="flex space-x-4 text-xl">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <!-- Add more social icons as needed -->
            </ul>
        </div>

        <!-- Contact Section -->
        <div class="w-full md:w-1/4">
            <h3 class="text-xl font-semibold mb-4" style="color: #f48000;">Contact Us</h3>
            <address>
                <p class="hover:text-orange-500"><i class="fa-solid fa-envelope px-1 mr-2"></i>Email: <a
                        href="mailto:gdcfrisal@gmail.com">gdcfrisal@gmail.com</a></p>
                <p class="hover:text-orange-500"><i class="fa-solid fa-phone px-1 mr-2"></i>Phone: <a href="tel:+123456789">+123 456 789</a></p>
                <p class="hover:text-orange-500"><i class="fa-solid fa-location-dot px-1 mr-2"></i>Address: Frisal Kulgam Kashmir</p>
            </address>
        </div>
    </div>
</footer>
<h1 class="flex justify-center py-1 text-white font-bold text-base bg-gray-800 hover:text-yellow-400">
    <a href="{{ route('ourTeam') }}">
        Designed and Maintained by <span class="text-red-500">{{ config('app.name') }}</span>. <i
            class="fa-regular fa-copyright"></i> {{ date('Y') }}
    </a>
</h1>
