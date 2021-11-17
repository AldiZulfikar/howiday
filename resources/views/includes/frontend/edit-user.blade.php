<div
    class="left w-full lg:w-1/3 lg:mb-0 mb-7 border border-gray-300 dark:border-gray-700 rounded-2xl  lg:mr-12 px-8 py-12 flex flex-col">
    <div class="flex flex-row items-center mb-7">
        <div class="image w-20 h-20 mr-5 rounded-full overflow-hidden">
            <img src="{{ Auth::user()->image ? asset('upload/' . Auth::user()->image) : url('./images/pic_user.svg') }}"
                class="w-full h-full object-cover " alt="">
        </div>
        <div class="flex flex-col w-auto overflow-hidden">
            <h1 class="font-poppins font-medium text-xl  text-accentDarkGray dark:text-white">{{ Auth::user()->name }}
            </h1>
            <div class="flex items-center">
                <img src="{{ url('./images/ic_pencil.svg') }}" class="w-5 h-5 mr-3" alt="">
                <p class="text-lg font-light font-poppins text-gray-400">Edit Profile</p>
            </div>
        </div>
    </div>
    <hr class="dark:border-gray-700">
    <div class="flex flex-row items-start mt-7">
        <div class="icon w-7 h-7 mr-6">
            <img src="{{ url('./images/ic_setaccount.svg') }}" class="w-full h-full" alt="">
        </div>
        <div>
            <h1 class="text-accentDarkGray font-semibold font-poppins text-lg mb-2 dark:text-white">Akun Saya</h1>
            <ul>
                <li class="list-none mb-2">
                    <a href="{{ route('edit-profile.edit', Auth::user()->id) }}"
                        class="font-poppins font-normal text-base no-underline hover:underline text-accentDarkGray dark:text-white">Biodata
                        Diri
                    </a>
                </li>
                <li class="list-none mb-2 relative maintenance-parent">
                    {{-- <div
                        class="maintenance py-2 px-6 absolute bg-red-300 rounded-t-lg rounded-br-lg w-96 -top-11 left-8 animate-bounce">
                        <p class="font-poppins font-light text-base text-center ">Masih dalam tahap
                            pengembangan :).</p>
                    </div> --}}
                    <a href="{{ route('change-pass', Auth::user()->id) }}" {{-- href="{{ route('password.edit' , $item->id) }}" --}}
                        class="font-poppins font-normal text-base no-underline hover:underline text-accentDarkGray dark:text-white">Ubah
                        Password
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="flex flex-row items-center mt-7">

        <div class="icon w-7 h-7 mr-6">
            <img src="{{ url('./images/ic_ticket.svg') }}" class="w-full h-full" alt="">
        </div>
        <div class="">

            <h1 href="#" class="text-accentDarkGray font-semibold font-poppins text-lg mb-2 dark:text-white">Tiket
                Saya</h1>
        </div>
    </div>
    <div class="flex flex-row items-center mt-7">
        <div class="icon w-7 h-7 mr-6">
            <img src="{{ url('./images/ic_voucher.svg') }}" class="w-full h-full" alt="">
        </div>
        <div>
            <h1 class="text-accentDarkGray font-semibold font-poppins text-lg mb-2 dark:text-white">Voucher Saya</h1>
        </div>
    </div>
</div>
