<header class="container p-4 flex justify-between items-center">
    <!-- Left side with logo/image -->
    <div class="flex items-center">
        <a href="{{url ('/')}}">
            <img src="{{ asset('/images/logoMain.png') }}" alt="Logo"
                class="mx-0 md:flex-row md:items-center md:space-y-0 md:space-x-3" style="max-height: 75px">
        </a>
    </div>

    <!-- Right side with email and call button -->
    <div class="hidden md:flex space-x-4 overflow-x-hidden">
        <li class="flex md:flex-row border-r border-gray-300 pr-4">
            <i class="fa-solid fa-phone fa-2x px-2 py-2"></i>
            <div class="flex flex-col font-mono">
                CALL US
                <span><a href="tel:+91700" class="hover:underline">+91-70067xxxx</a></span>
            </div>
        </li>
        <li class="flex md:flex-row">
            <i class="fa-solid fa-envelope fa-2x px-2 py-2"></i>
            <div class="flex flex-col font-mono">
                EMAIL US
                <span><a href="mailto:gdcfrisal@gmail.com" class="hover:underline">gdcfrisal@gmail.com</a></span>
            </div>
        </li>
    </div>


    <!-- Hamburger menu for smaller screens -->
    <div class="md:hidden hamburger__icon" id="mobile-menu-button">
        <i class="fa-solid fa-bars fa-2x"></i>
    </div>
</header>
