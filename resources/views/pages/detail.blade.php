@extends('layouts.detail')
@section('title', 'Howiday - Detail Travel')

@section('content')
    <section class="breadcrumb container mx-auto mb-20 px-5 lg:px-0">
        <ul class="inline dark:text-white">
            <li class="inline"><a href="/" class="font-poppins text-base hover:underline font-light">Destinasi</a> /
            </li>
            <li class="inline">
                <p class="inline font-poppins text-base font-semibold cursor-default">Details {{ $item->title }}</p>
            </li>
        </ul>
    </section>

    <section class="travel-details container mx-auto px-5 lg:px-0 mb-12">
        <div class="flex flex-col lg:flex-row items-start">
            <div class="left w-full lg:w-2/3 lg:mb-0 mb-7 border border-gray-300 dark:border-gray-700 rounded-2xl mr-7 p-7">
                <div class="flex flex-col lg:flex-row mb-12">
                    <div class="w-full lg:w-1/2 lg:mr-7 mb-8 lg:mb-0 xzoom-container mx-auto">
                        <img src="{{ asset('upload/' . $item->galleries->first()->image) }}" class="w-full xzoom" alt=""
                            id="xzoom-default" xoriginal="{{ asset('upload/' . $item->galleries->first()->image) }}">
                    </div>
                    <div class="w-full lg:w-1/2">
                        <h1
                            class="font-playfair font-bold text-accentBlack text-4xl mb-2 text-center lg:text-left dark:text-white">
                            {{ $item->title }}
                        </h1>
                        <h3 class="text-accentOrange text-lg font-poppins font-medium mb-7 text-center lg:text-left">
                            {{ $item->location }}</h3>
                        <p class="text-accentDarkGray font-poppins font-medium text-base text-justify dark:text-gray-300">
                            {!! $item->about !!}
                        </p>
                    </div>
                </div>

                <div class="gallery mb-12">
                    <h1 class="font-poppins text-center font-medium text-2xl tracking-widest mb-7 dark:text-white">Galeri
                    </h1>
                    <div class="grid lg:grid-cols-5 grid-cols-3 gap-4 xzoom-thumbs">
                        @foreach ($item->galleries as $gallery)
                            <a href="{{ asset('upload/' . $gallery->image) }}" class="w-full h-20 sm:h-32">
                                <img src="{{ asset('upload/' . $gallery->image) }}" class="xzoom-gallery h-full w-full"
                                    width="80" height="80" style="object-fit: cover"
                                    xpreview="{{ asset('upload/' . $gallery->image) }}" alt="" />
                            </a>
                        @endforeach
                    </div>

                </div>

                <div class="service">
                    <h1 class="font-poppins text-center font-medium text-2xl tracking-widest mb-7 dark:text-white">Pelayanan
                    </h1>
                    <div class="flex flex-row items-center justify-center">
                        <div class="flex flex-col md:flex-row items-center lg:mr-8 mr-5">
                            <img src="{{ url('./images/ic_fe.svg') }}" alt="" class="h-6 w-h-6 lg:w-10 lg:h-10 md:mr-2">
                            <div class="flex flex-col">
                                <h1
                                    class="font-poppins font-semibold text-accentDarkGray  text-sm md:text-base text-center md:text-left dark:text-white">
                                    Acara Unggulan
                                </h1>
                                <h4
                                    class="font-light font-poppins text-gray-400 text-sm md:text-base text-center md:text-left">
                                    {{ $item->featured_event }}</h4>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-center lg:mr-8 mr-5">
                            <img src="{{ url('./images/ic_language.svg') }}" alt=""
                                class="h-6 w-6 lg:w-10 lg:h-10 md:mr-2">
                            <div class="flex flex-col">
                                <h1
                                    class="font-poppins font-semibold text-accentDarkGray text-sm md:text-base text-center md:text-left dark:text-white">
                                    Bahasa
                                </h1>
                                <h4
                                    class="font-light font-poppins text-gray-400   text-sm md:text-base text-center md:text-left">
                                    {{ $item->language }}</h4>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-center">
                            <img src="{{ url('./images/ic_food.svg') }}" alt="" class="h-6 w-6 lg:w-10 lg:h-10 md:mr-2">
                            <div class="flex flex-col">
                                <h1
                                    class="font-poppins font-semibold text-accentDarkGray   text-sm md:text-base text-center md:text-left dark:text-white">
                                    Makanan
                                </h1>
                                <h4
                                    class="font-light font-poppins text-gray-400  text-sm md:text-base text-center md:text-left">
                                    {{ $item->foods }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="right w-full lg:w-1/3 border border-gray-300 dark:border-gray-700 rounded-t-2xl rounded-b-2xl lg:rounded-b-none">
                <div class="pt-12 pb-9 px-8">
                    <h1 class="mb-4 text-accentBlack font-poppins font-medium text-2xl dark:text-white">Members are Going
                    </h1>
                    <div class="flex flex-row mb-6">

                        <img class="w-12 h-12 rounded-full  mr-1 md:mr-2" src="{{ url('./images/pic-member-1.png') }}" />
                        <img class="w-12 h-12 rounded-full  mr-1 md:mr-2" src="{{ url('./images/pic-member-2.png') }}" />
                        <img class="w-12 h-12 rounded-full  mr-1 md:mr-2" src="{{ url('./images/pic-member-3.png') }}" />
                        <img class="w-12 h-12 rounded-full  mr-1 md:mr-2" src="{{ url('./images/pic-member-4.png') }}" />
                        <img class="w-12 h-12 rounded-full  mr-1 md:mr-2" src="{{ url('./images/pic-member-5.png') }}" />

                    </div>
                    <hr class="mb-6 dark:border-gray-700" />
                    <h1 class="mb-4 text-accentBlack font-poppins font-medium text-2xl dark:text-white">Detail Trip</h1>
                    <div class="flex flex-row justify-between mb-1">
                        <h2 class="text-gray-500 font-poppins font-semibold text-lg text-left dark:text-gray-400">
                            Keberangkatan
                        </h2>
                        <h3 class="font-normal font-poppins text-lg text-gray-400 text-right">
                            {{ \Carbon\Carbon::create($item->departure_date)->format('F n, Y') }}
                        </h3>
                    </div>
                    <div class="flex flex-row justify-between mb-1">
                        <h2 class="text-gray-500 font-poppins font-semibold text-lg text-left dark:text-gray-400">Durasi
                        </h2>
                        <h3 class="font-normal font-poppins text-lg text-gray-400 text-right">
                            {{ $item->duration }}
                        </h3>
                    </div>
                    <div class="flex flex-row justify-between mb-1">
                        <h2 class="text-gray-500 font-poppins font-semibold text-lg text-left dark:text-gray-400">Tipe</h2>
                        <h3 class="font-normal font-poppins text-lg text-gray-400 text-right">
                            {{ $item->type }}
                        </h3>
                    </div>
                    <div class="flex flex-row justify-between mb-1">
                        <h2 class="text-gray-500 font-poppins font-semibold text-lg text-left dark:text-gray-400">Harga
                        </h2>
                        <h3 class="font-normal font-poppins text-lg text-gray-400 text-right">
                            <span class="font-semibold text-accentCyan">IDR {{ $item->price }}.000</span>/Orang
                        </h3>
                    </div>


                </div>
                <div class="text-center">
                    @auth
                        <form action="{{ route('checkout-process', $item->id) }}" method="POST">
                            @csrf
                            <button href="#" type="submit"
                                class="inline-block w-full bg-accentCyan hover:bg-accentCyanHover font-poppins font-medium text-lg text-white  py-4 transition duration-300 rounded-b-2xl lg:rounded-b-none focus:outline-none">Gabung
                                Sekarang</button>
                        </form>
                    @endauth
                    @guest
                        <a href="{{ route('login') }}"
                            class="block bg-red-400 hover:bg-red-500 font-poppins font-medium text-lg text-white  py-4 transition duration-300 rounded-b-2xl lg:rounded-b-none focus:outline-none">Login
                            or Sign up to Join</a>
                    @endguest
                </div>
            </div>
        </div>
    </section>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('./js/xzoom/xzoom.css') }}" />

    <style>
        .gallery .xactive {
            border: 4px solid #f59828;
            box-shadow: none;
        }

    </style>

@endpush

@push('addon-script')
    <script src="{{ url('./js/xzoom/xzoom.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".xzoom, .xzoom-gallery").xzoom({
                zoomWidth: 500,
                title: false,
                tint: "#333",
                Xoffset: 15,
            });
        });
    </script>
@endpush
