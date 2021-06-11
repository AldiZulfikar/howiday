@extends('layouts.auth')

@section('content')
    <div class="container mx-auto px-5 md:px-0">
        <div
            class="flex flex-col w-full sm:w-2/3 md:w-2/3 lg:w-1/2 xl:w-1/2 bg-gray-100 shadow-2xl rounded-2xl p-12 my-36 mx-auto">
            <a href="#" class="text-center mb-14">
                <h1 class="text-accentCyan font-semibold font-poppins" style="font-size: 27px">How<span
                        class="text-accentOrange">iday.</span>
                </h1>
            </a>

            <h1 class="text-left text-accentDarkGray font-poppins text-base sm:text-2xl font-medium mb-4 sm:mb-7 ">Reset
                Your Password</h1>

            <p class="text-gray-400 font-light font-poppins text-base mb-7">Just enter your email address, and we will
                send
                you a link to reset your password.</p>

            @if (session('status'))
                <div class="alert text-accentCyan font-poppins font-light text-sm md:text-base" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                    autofocus
                    class="rounded-2xl border border-gray-400 text-accentBlack form-input px-4 sm:px-6 py-3 sm:py-5 bg-white focus:outline-none font-poppins font-normal w-full focus:ring-2 focus:ring-accentCyan sm:mb-11 mb-5 @error('email') is-invalid @enderror">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="text-center mb-11">
                    <button href="#destination" type="submit"
                        class="text-white bg-accentCyan hover:bg-accentCyanHover py-3 px-20 rounded-md text-center lg:text-left transition duration-300 font-medium inline-block cursor-pointer focus:outline-none"
                        style="box-shadow: 0px 8px 15px 0px #3BBABE;
                                                                                                                                                    ">Continue
                    </button>
                </div>
            </form>

            <p class="text-sm sm:text-base font-poppins font-light text-accentDarkGray text-center">Back to Sign In?
                <a href="{{ route('login') }}">
                    <span class="text-accentOrange hover:underline">Click here
                    </span>
                </a>
            </p>

        </div>
    </div>
@endsection
