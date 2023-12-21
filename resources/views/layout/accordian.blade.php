<h1 class="flex justify-center py-3 rounded-xl text-white font-bold text-lg ml-10 mr-10 mt-2 mb-2"
    style="background-color: #f48000">About US</h1>
<div class="container mx-auto p-4 rounded-xl border-t-4 border-b-4 border-blue-700 mt-2">
    <div class="flex flex-wrap">
        <!-- Image half -->
        <div class="w-full md:w-1/2 p-4">
            <img src="{{ asset('images/Carousel/carouselPic3.jpg') }}" alt="Image"
                class="w-full h-auto rounded-md shadow-md cursor-pointer shadow-slate-600">
        </div>

        <!-- Accordion half -->
        <div class="w-full md:w-1/2 p-4">
            <div class="bg-white rounded-md shadow-md p-4">
                <!-- Accordion Title -->
                <h2 class="text-lg font-semibold mb-4 text-center py-2 px-2 rounded-xl text-white"
                    style="background-color: #f48000">Govt Degree College Frisal</h2>

                <!-- Accordion Items -->
                <div class="space-y-2">
                    <!-- Accordion Item 1 -->
                    <div class="border-b border-gray-300">
                        <button
                            class="w-full flex items-center justify-between p-3 focus:outline-none accordion-button bg-yellow-300 rounded-lg">
                            <span class="text-left">About</span>
                            <i class="fa-solid fa-arrow-down w-5 h-5 text-gray-600 transform transition-transform"></i>
                        </button>
                        <div class="hidden p-4 accordion-content">
                            Content goes here.
                        </div>
                    </div>

                    <!-- Accordion Item 2 -->
                    <div class="border-b border-gray-300">
                        <button
                            class="w-full flex items-center justify-between p-3 focus:outline-none accordion-button bg-yellow-300 rounded-lg">
                            <span class="text-left">Vision</span>
                            <i class="fa-solid fa-arrow-down w-5 h-5 text-gray-600 transform transition-transform"></i>
                        </button>
                        <div class="hidden p-4 accordion-content text-justify">
                            To educate and train the student to be efficient, empathetic and socially responsible
                            individuals, to inculcate values of discipline, hard-work, team-spirit, scientific tempers
                            and to develop critical thinkers.
                        </div>
                    </div>

                    <!-- Accordion Item 3 -->
                    <div class="border-b border-gray-300">
                        <button
                            class="w-full flex items-center justify-between p-3 focus:outline-none accordion-button bg-yellow-300 rounded-lg">
                            <span class="text-left">Mission</span>
                            <i class="fa-solid fa-arrow-down w-5 h-5 text-gray-600 transform transition-transform"></i>
                        </button>
                        <div class="hidden p-4 accordion-content text-justify">
                            The mission of this institute of higher learning has been to play a key role in imparting
                            higher education in keeping with the most desirable standards in this era obtaining at
                            National and International levels. The Institution aims at being a powerful agency for human
                            resource development through fostering the potentialities ....
                            <button>
                                <a href="{{ route('aboutUs') }}" class="text-blue-700"><i
                                        class="fa-solid fa-arrow-right px-1"></i>Read More</a>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
