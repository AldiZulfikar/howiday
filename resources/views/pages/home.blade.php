@extends('layouts.app')

@section('title', 'Howiday - Make your Amazing Holiday')

@section('content')

    {{-- START: HEADER --}}
    <header class="container mx-auto mb-20">
        <div class="flex flex-col lg:flex-row items-center px-4 md:px-0">
            <div class="left lg:w-1/2 lg:mb-0 mb-16">
                <h1 class="font-playfair font-bold text-accentBlack mb-9 text-center lg:text-left text-4xl xl:text-5xl">
                    Explore wondrous <span class="text-accentOrange">places,</span> gain
                    new <span class="text-accentCyan">experiences.</span>
                </h1>
                <p class="font-light text-accentDarkGray mb-7 font-poppins lg:pr-16 text-center lg:text-left lg:text-base text-sm"
                    style="line-height: 170%">
                    From north to the south, we’re providing what you need
                    to enjoy your vacation all around the world, maximizing
                    service, carving memorable moments to remember.
                </p>
                <p class="font-poppins font-semibold text-accentDarkGray text-lg mb-7 text-center lg:text-left">Where do
                    you want to go?</p>
                <div class="text-center lg:text-left">
                    <a href="#destination"
                        class="text-white bg-accentCyan hover:bg-accentCyanHover py-3 px-12 rounded-md text-center lg:text-left mb-14 transition duration-300 font-medium inline-block cursor-pointer"
                        style="box-shadow: 0px 8px 15px 0px #3BBABE;
                                                                                                                                                                                                                                                                                                                                                                                                                ">Discover
                        Now
                    </a>
                </div>

                <div class="grid grid-cols-3 gap-x-12 justify-center lg:justify-start lg:pr-48">
                    <div class="items-center lg:items-start justify-center">
                        <img src="{{ url('./images/ic_treasure.svg') }}" alt="" class="h-8 w-8 mb-2 mx-auto lg:mx-0">
                        <h2 class="font-poppins text-base text-gray-400 font-light text-center lg:text-left"><span
                                class="text-accentDarkBlue font-semibold">80K</span> Travelers</h2>
                    </div>

                    <div class="items-center lg:items-start">
                        <img src="{{ url('./images/ic_cities.svg') }}" alt="" class="h-8 w-8 mb-2 mx-auto lg:mx-0">
                        <h2 class="font-poppins text-base text-gray-400 font-light text-center lg:text-left"><span
                                class="text-accentDarkBlue font-semibold">854</span> Treasure</h2>
                    </div>

                    <div class="items-center lg:items-start">
                        <img src="{{ url('./images/ic_traveler.svg') }}" alt="" class="h-8 w-8 mb-2 mx-auto lg:mx-0">
                        <h2 class="font-poppins text-base text-gray-400 font-light text-center lg:text-left"><span
                                class="text-accentDarkBlue font-semibold">1,492</span> Cities</h2>
                    </div>
                </div>
            </div>

            <div class="right xl:ml-auto mx-auto relative px-10 sm:px-0">
                <div class="relative">
                    <img src="{{ url('images/banner.jpg') }}" alt=""
                        class="banner-img z-20 relative xl:transform xl:-translate-x-6 xl:-translate-y-4">
                </div>
                <div class="absolute border border-gray-300 rounded-2xl top-0 transform translate-x-14 translate-y-6 hidden xl:block"
                    style="width: 548px; height: 440px">
                </div>
            </div>
        </div>
    </header>
    {{-- END: HEADER --}}

    {{-- START:DESTINATION --}}
    <section class="destination container mx-auto mb-20 px-7 md:px-0">
        <h1 class="text-center font-playfair font-bold text-accentBlack text-4xl mb-2" id="destination">Choose Your
            Perfect Destination
        </h1>
        <p class="text-accentDarkGray text-base font-light font-poppins text-center mb-12">Discover Your Favorite Place
            With
            Us Now</p>

        <div
            class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 items-center gap-x-12 xl:gap-x-10 gap-y-11 md:px-7 lg:px-0">

            @foreach ($items as $item)
                <div class="flex flex-col card-d p-5 hover:shadow-2xl  rounded-2xl transition duration-300 ">
                    <a href="{{ url('/detail', $item->slug) }}" class="inline-block">
                        <div class="img-destiny h-full w-full bg-cover"
                            style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}')">
                        </div>
                        <h1 class="text-accentBlack font-medium font-poppins mb-2" style="font-size: 25px">
                            {{ $item->title }}</h1>
                        <p class="font-poppins font-medium text-gray-400 text-base mb-3">{{ $item->location }}</p>
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex flex-row left">
                                @for ($i = 0; $i < $item->star; $i++)
                                    <img src="{{ url('./images/star.svg') }}" alt="" class="w-6 h-6 mr-1" />
                                @endfor

                                @for ($i = 0; $i < 5 - $item->star; $i++)
                                    <img src="{{ url('./images/starb.svg') }}" alt="" class="w-6 h-6 mr-1" />
                                @endfor

                            </div>
                            <div class="right">
                                <h2 class="text-xl text-accentOrange font-poppins font-medium text-right">IDR
                                    {{ $item->price }}.000</h2>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </section>
    {{-- END:DESTINATION --}}

    {{-- START:TESTIMONIALS --}}
    <section class="testimonial container mx-auto mb-28 md:px-0" id="about">
        <h1 class="font-playfair font-bold text-accentBlack text-center mb-2 text-3xl lg:text-4xl ">Testimonials
            Center
        </h1>
        <p class="text-accentDarkGray font-light font-poppins text-base text-center mb-12">What They Said About Our
            Service
        </p>

        <div class="grid grid-cols-1 lg:grid-cols-2 items-center justify-center">
            <div class="left relative mx-auto px-20 lg:px-0">
                <div class="relative mb-10 lg:mb-0">
                    <img src="{{ url('./images/testimoni-1.png') }}" class="testi-img z-50 relative rounded-2xl" alt="">
                </div>
                <div
                    class="testi-border border-gray-400 absolute -left-10 top-10 testi-banner border-2 lg:block hidden rounded-2xl">
                </div>
            </div>
            <div class="right w-full px-7 lg:px-0">
                <h1
                    class="font-poppins font-medium text-2xl text-accentBlack tracking-widest mb-4 text-center lg:text-left">
                    TN Bromo Tengger,
                    Malang
                </h1>
                <div class="flex flex-row items-center lg:justify-start mb-4 justify-center">
                    <img src="./images/star.svg" class="h-5 w-5 lg:h-9 lg:w-9 mr-2" alt="">
                    <img src="./images/star.svg" class="h-5 w-5 lg:h-9 lg:w-9 mr-2" alt="">
                    <img src="./images/star.svg" class="h-5 w-5 lg:h-9 lg:w-9 mr-2" alt="">
                    <img src="./images/star.svg" class="h-5 w-5 lg:h-9 lg:w-9 mr-2" alt="">
                    <img src="./images/star.svg" class="h-5 w-5 lg:h-9 lg:w-9 " alt="">
                </div>
                <p
                    class="font-poppins font-normal text-lg lg:text-3xl text-accentDarkGray leading-normal mb-8 text-center lg:text-left">
                    Itu adalah ledakan dan saya telah belajar banyak di sepanjang jalan, perjalanan yang luar biasa dengan
                    pemandangan alam yang cantik, terima kasih!</p>
                <div class="text-center lg:text-left">
                    <a href="#"
                        class="text-white bg-accentBlack hover:bg-gray-600 py-3 px-12 rounded-md text-center lg:text-left transition duration-300 font-medium inline-block cursor-pointer text-base"
                        style="box-shadow: 0px 8px 15px rgba(43, 43, 40, 0.3);
                                                                                                                                                                                                                                                                                                                                                                                                                    ">Baca
                        Cerita Mereka
                    </a>
                </div>
            </div>
        </div>

    </section>
    {{-- END:TESTIMONIALS --}}

    {{-- START:GET STARTED --}}
    <section class="get-started container mx-auto mb-28">
        <h1 class="font-playfair font-bold text-accentBlack mb-6 text-center text-3xl lg:text-4xl ">Get Started Now!
        </h1>
        <div class="text-center">
            @auth
                <a href="#destination"
                    class="text-white bg-accentOrange hover:bg-accentOrangeHover py-3 px-12 rounded-md text-center lg:text-left transition duration-300 font-medium inline-block cursor-pointer text-base text-hover-orange">Let's
                    Go Explore the World
                </a>
            @endauth
            @guest
                <a href="{{ route('register') }}"
                    class="text-white bg-accentCyan hover:bg-accentCyanHover py-3 px-12 rounded-md text-center lg:text-left transition duration-300 font-medium inline-block cursor-pointer text-base text-hover-cyan">See
                    More
                </a>
            @endguest
        </div>
    </section>
    {{-- END:GET STARTED --}}

@endsection
