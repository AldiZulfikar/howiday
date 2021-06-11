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

            <h1 class="text-center text-accentDarkGray font-poppins text-base sm:text-2xl font-medium mb-4 sm:mb-7 ">Verify
                your Email Address</h1>

            <p class="text-gray-400 font-light font-poppins text-sm md:text-base mb-7 text-center">Before proceeding, please
                check your
                email for a
                verification link. If you did not receive the email.</p>

            @if (session('resent'))
                <div class="alert text-center bg-accentCyan font-poppins font-light text-sm md:text-lg text-white px-3 py-2 rounded-lg mb-3"
                    role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif
            <form class="d-inline text-center mb-3 " method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit"
                    class="btn btn-link p-0 m-0 align-baseline text-center font-poppins font-light md:text-lg hover:underline bg-accentOrange hover:bg-accentOrangeHover px-3 py-2 rounded-xl text-white focus:outline-none text-sm">{{ __('click here to request another') }}</button>.
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
