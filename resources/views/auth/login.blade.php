@extends('layouts.auth')
@section('content')
    <div class="container mx-auto px-5 md:px-0">
        <div class="flex flex-col w-full sm:w-2/3 md:w-2/3 lg:w-1/2 xl:w-1/2 bg-white rounded-2xl p-12 my-36 mx-auto">
            <a href="/" class="text-center mb-14">
                <h1 class="text-accentCyan font-semibold font-poppins" style="font-size: 27px">How<span
                        class="text-accentOrange">iday.</span>
                </h1>
            </a>

            <h1 class="text-left text-accentDarkGray font-poppins text-base sm:text-2xl font-medium mb-4 sm:mb-7 ">Sign
                in to
                Howiday</h1>

            <form action="{{ route('login') }}" method="post">
                @csrf
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="email" id="email" placeholder="Email Address"
                    class="rounded-2xl border border-gray-200 text-accentBlack form-input px-4 sm:px-6 py-3 sm:py-5 bg-white focus:outline-none font-poppins font-normal w-full focus:ring-2 focus:ring-accentCyan sm:mb-11 mb-5 @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                <input type="password" id="password" placeholder="Password"
                    class="rounded-2xl border border-gray-200 text-accentBlack form-input px-4 sm:px-6 py-3 sm:py-5 bg-white focus:outline-none font-poppins font-normal w-full focus:ring-2 focus:ring-accentCyan sm:mb-11 mb-5 @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <p class="text-sm sm:text-base font-poppins font-light text-accentDarkGray mb-11">Forgot password?
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            <span class="text-accentOrange hover:underline">Click Here
                            </span>
                        </a>
                    @endif
                </p>

                <div class="text-center mb-11">
                    <button href="#destination" type="submit"
                        class="text-white bg-accentCyan hover:bg-accentCyanHover py-3 px-20 rounded-md text-center lg:text-left transition duration-300 font-medium inline-block cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500"
                        style="box-shadow: 0px 8px 15px 0px #3BBABE;
                                                                                                                    ">Sign
                        In
                    </button>
                </div>
            </form>

            <p class="text-sm sm:text-base font-poppins font-medium text-accentDarkGray text-center">Don't have an
                account?
                <a href="{{ route('register') }}">
                    <span class="text-accentOrange hover:underline">Sign Up
                    </span>
                </a>
            </p>

        </div>
    </div>
@endsection
