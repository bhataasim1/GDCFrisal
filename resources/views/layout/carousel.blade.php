<link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
<div class="container mx-auto p-4 flex flex-col md:flex-row md:space-x-4">
    <!-- Carousel Section -->
    <div class="w-full md:w-1/2">
        <div id="default-carousel" class="relative cursor-pointer" data-carousel="static">
            <div class="overflow-hidden relative rounded-lg carousel__mobile" style="max-height: 300px;">
                <div class="carousel-item" data-carousel-item>
                    <img src="{{ asset('images/Carousel/carouselPic1.jpg') }}" class="block w-full rounded-lg"
                        alt="...">
                </div>

                <div class="carousel-item" data-carousel-item>
                    <img src="{{ asset('images/Carousel/carouselPic2.jpg') }}" class="block w-full rounded-lg"
                        alt="...">
                </div>

                <div class="carousel-item" data-carousel-item>
                    <img src="{{ asset('images/Carousel/carouselPic3.jpg') }}" class="block w-full rounded-lg"
                        alt="...">
                </div>
            </div>
        </div>
    </div>

    <!-- Latest News Section -->
    <div class="w-full md:w-1/2 mt-4 md:mt-0">
        <h2 class="text-2xl font-semibold mb-4 p-2 rounded-lg text-white" style="background-color: #f48000">
            <i class="fa-solid fa-rss px-3"></i>
            <a href="{{route('allNotices')}}">Latest Notifications<i class="fa fa-external-link px-3"></i></a>
        </h2>
        <!-- Notification list container with fixed height and scrollable content (overflow-y: scroll;) -->
        <div class="notification-list-container" style="max-height: 250px; overflow-y: hidden;">
            <!-- Latest notifications list goes here -->
            <div class="notification-list">
                @foreach ($notices as $notice)
                    <!-- Notification Item -->
                    <div class="notification-item">
                        <a href="{{ url('/') . '/' . $notice->notice_file }}">
                            <div class="block bg-white rounded-lg shadow-lg p-4 mb-4">
                                <div class="w-full flex">
                                    <h3 class="mb-2 text-base font-medium">{{ $notice->notice_title }}</h3>
                                    <span class="flex px-1 text-green-700 font-medium text-sm">
                                        {{ $notice->notice_date->format('d- M- Y') }}
                                    </span>
                                    @if ($notice->isNew)
                                        <img src="{{ asset('images/new.gif') }}" alt="new" class="w-6 h-3 ml-2">
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
