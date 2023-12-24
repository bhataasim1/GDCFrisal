<div class="bg-gray-900 py-4 header__menu hidden md:block" id="mobile-menu">
    <div class="container mx-auto">

        <ul class="flex-col md:flex-row md:flex space-x-3">

            <li class="active__mobile">
                <a href="{{ route('index') }}" class="text-white active__button"><i
                        class="fa-solid fa-house px-1"></i>Home</a>
            </li>

            <li>
                <a href="{{ route('aboutUs') }}" class="text-white hover:bg-yellow-600 py-5 px-2 nav__bar">About</a>
            </li>

            <li>
                <a href="{{ route('gallery') }}" class="text-white hover:bg-yellow-600 py-5 px-2 nav__bar">Gallery</a>
            </li>

            <li>
                <a href="#" class="text-white hover:bg-yellow-600 py-5 px-2 nav__bar">Facilities</a>
            </li>

            {{-- <li class="relative group">
                <a href="#" class="text-white hover:bg-yellow-600 py-5 px-2 nav__bar" id="departments-toggle">
                    <span>Departments</span>
                    <i class="fa-solid fa-chevron-down ml-1 cursor-pointer"></i>
                </a>
                <ul class="hidden absolute left-0 mt-2 bg-white border border-gray-300 rounded-md shadow-lg z-10 group-hover:block"
                    id="departments-dropdown">
                    <!-- Dropdown content here -->
                    <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-yellow-400 nav__bar">Department
                            1</a></li>
                    <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-yellow-400 nav__bar">Department
                            2</a></li>
                    <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-yellow-400 nav__bar">Department
                            3</a></li>
                </ul>
            </li> --}}

        </ul>
    </div>
</div>
