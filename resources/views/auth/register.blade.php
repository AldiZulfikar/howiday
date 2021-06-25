@extends('layouts.auth')

@section('content')
    <div class="container mx-auto px-5 md:px-0">
        <div class="flex flex-col w-full sm:w-2/3 md:w-2/3 lg:w-1/2 xl:w-1/2 bg-white rounded-2xl p-12 my-36 mx-auto">
            <a href="/" class="text-center mb-14">
                <h1 class="text-accentCyan font-semibold font-poppins" style="font-size: 27px">How<span
                        class="text-accentOrange">iday.</span>
                </h1>
            </a>

            <h1 class="text-left text-accentDarkGray font-poppins text-base sm:text-2xl font-medium mb-4 sm:mb-7 ">
                Create an Account Now!</h1>

            <form action="{{ route('register') }}" method="POST">
                @csrf

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="text" placeholder="Name"
                    class="rounded-2xl border border-gray-200 text-accentBlack form-input px-4 sm:px-6 py-3 sm:py-5 bg-white focus:outline-none font-poppins font-normal w-full focus:ring-2 focus:ring-accentCyan sm:mb-11 mb-5 @error('name') is-invalid @enderror"
                    id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="text" placeholder="Username"
                    class="rounded-2xl border border-gray-200 text-accentBlack form-input px-4 sm:px-6 py-3 sm:py-5 bg-white focus:outline-none font-poppins font-normal w-full focus:ring-2 focus:ring-accentCyan sm:mb-11 mb-5 @error('username') is-invalid @enderror"
                    id="username" type="text" name="username" value="{{ old('username') }}" required
                    autocomplete="username" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="email" placeholder="Email Address"
                    class="rounded-2xl border border-gray-200 text-accentBlack form-input px-4 sm:px-6 py-3 sm:py-5 bg-white focus:outline-none font-poppins font-normal w-full focus:ring-2 focus:ring-accentCyan sm:mb-11 mb-5 @error('email') is-invalid @enderror"
                    id="email" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" placeholder="Password (8-20 Characters)"
                    class="rounded-2xl border border-gray-200 text-accentBlack form-input px-4 sm:px-6 py-3 sm:py-5 bg-white focus:outline-none font-poppins font-normal w-full focus:ring-2 focus:ring-accentCyan sm:mb-11 mb-5 @error('password') is-invalid @enderror"
                    id="password" name="password" required autocomplete="new-password">

                <input type="password" placeholder="Confirm Password"
                    class="rounded-2xl border border-gray-200 text-accentBlack form-input px-4 sm:px-6 py-3 sm:py-5 bg-white focus:outline-none font-poppins font-normal w-full focus:ring-2 focus:ring-accentCyan sm:mb-4 mb-3"
                    id="password-confirm" name="password_confirmation" required autocomplete="new-password">

                <div class="flex flex-row items-center mb-11">
                    <input type="checkbox" required class="form-checkbox mr-2 rounded-full">
                    <p class="font-poppins font-medium text-base text-left text-accentDarkGray">By signing up, i agree to
                        Howiday Terms of Services</p>
                </div>

                <div class="text-center mb-11">
                    <button type="submit"
                        class="text-white bg-accentCyan hover:bg-accentCyanHover py-3 px-20 rounded-md text-center lg:text-left transition duration-300 font-medium inline-block cursor-pointer focus:outline-none focus:ring-1 focus:ring-blue-500"
                        style="box-shadow: 0px 8px 15px 0px #3BBABE;
                                                                                                        ">Continue
                    </button>
                </div>
            </form>

            <p class="text-sm sm:text-base font-poppins font-medium text-accentDarkGray text-center">Already have an
                account?
                <a href="{{ route('login') }}">
                    <span class="text-accentOrange hover:underline">Sign In
                    </span>
                </a>
            </p>

        </div>
    </div>
@endsection
