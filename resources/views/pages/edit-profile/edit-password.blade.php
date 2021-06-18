@extends('layouts.edit-profile')

@section('content')
    <div class="right w-full lg:w-2/3 border border-gray-300 rounded-2xl lg:p-12 p-6 ">
        <h1 class="text-accentBlackt font-playfair font-bold text-4xl mb-1">Ubah Password</h1>
        <p class="font-poppins font-medium text-base md:text-lg text-accentOrange mb-12">Mohon untuk tidak menyebarkan
            password Anda ke
            orang lain.
        </p>
        <form action="">
            @csrf
            <div class="flex flex-col md:flex-row mb-1 md:items-center  justify-between md:w-4/5 w-full">
                <label for="password"
                    class="text-left font-poppins font-medium text-base text-accentDarkGray w-full md:w-2/5">Password
                    Saat ini</label>
                <input type="password" placeholder="Password"
                    class=" px-4 py-2 rounded-md font-poppins font-light w-full md:w-3/5">
            </div>
            <div class="flex flex-col md:flex-row mb-5 md:items-center w-4/5">
                <div class="w-2/5"></div>
                <p class="font-poppins font-light text-sm text-accentDarkGray">Lupa Password? <a href="#"
                        class="text-accentCyan no-underline hover:underline ">Klik Disini</a></p>
            </div>
            <div class="flex flex-col md:flex-row mb-5 md:items-center  justify-between md:w-4/5 w-full">
                <label for="new_password"
                    class="text-left font-poppins font-medium text-base text-accentDarkGray w-full md:w-2/5">Password
                    Baru</label>
                <input type="password" placeholder="New Password (8-20 Characters)"
                    class=" px-4 py-2 rounded-md font-poppins font-light w-full md:w-3/5">
            </div>
            <div class="flex flex-col md:flex-row mb-5 md:items-center  justify-between md:w-4/5 w-full">
                <label for="confirm_new_password"
                    class="text-left font-poppins font-medium text-base text-accentDarkGray w-full md:w-2/5">Konfirmasi
                    Password</label>
                <input type="password" placeholder="Konfirmasi Password"
                    class=" px-4 py-2 rounded-md font-poppins font-light w-full md:w-3/5">
            </div>
            <div class="flex flex-col md:flex-row mb-5 md:items-center md:w-4/5 w-full">
                <div class="w-full md:w-2/5 hidden md:block"></div>
                <button type="submit"
                    class="bg-accentCyan hover:bg-accentCyanHover px-8 py-3 font-poppins text-white font-normal rounded-md  transition duration-300 focus:outline-none ">Simpan</button>
            </div>
        </form>
    </div>
@endsection
