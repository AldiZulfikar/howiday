@extends('layouts.success')

@section('title', 'Sukses Checkout')
@section('content')
    <section class="container mx-auto mt-10">
        <div class="flex flex-col px-10 items-center">
            <img src="{{ url('./images/illustration_success.png') }}" class="h-auto lg:w-1/4 w-2/4 mb-12" alt="">
            <p class="text-lg text-accentDarkGray font-poppins font-light sm:w-1/2 xl:w-1/3 text-center mb-12">Kami akan
                menginformasikan melalui email nanti setelah transaksi diterima</p>
            <div class="text-center">
                <a href="{{ url('/') }}"
                    class="text-white bg-accentCyan hover:bg-accentCyanHover py-3 px-12 rounded-md text-center lg:text-left mb-14 transition duration-300 font-medium inline-block cursor-pointer"
                    style="box-shadow: 0px 8px 15px 0px #3BBABE;
                            ">Kembali ke Beranda
                </a>
            </div>
        </div>
    </section>
@endsection
