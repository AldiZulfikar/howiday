<div class="left w-full lg:w-1/3 lg:mb-0 mb-7 border border-gray-300 rounded-2xl  lg:mr-12 px-8 py-12 flex flex-col">
    <div class="flex flex-row items-center mb-7">
        <div class="image w-20 h-20 rounded-full  mr-6 overflow-hidden">
            <img src="{{ Auth::user()->picuser ? Storage::url(Auth::user()->picuser) : url('./images/pic_user.svg') }}"  class="h-full w-full mr-6 " alt="">
        </div>
        <div class="flex flex-col">
            <h1 class="font-poppins font-medium text-2xl  text-accentDarkGray">{{ $item->name }}</h1>
            <div class="flex items-center">
                <img src="{{ url('./images/ic_pencil.svg') }}" class="w-5 h-5 mr-3" alt="">
                <p class="text-lg font-light font-poppins text-gray-400">Edit Profile</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="flex flex-row items-start mt-7">
        <div class="icon w-7 h-7 mr-6">
            <img src="{{ url('./images/ic_setaccount.svg') }}" class="w-full h-full" alt="">
        </div>
        <div>
            <h1 class="text-accentDarkGray font-semibold font-poppins text-lg mb-2">Akun Saya</h1>
            <ul>
                <li class="list-none mb-2">
                    <a href="{{ route('edit-profile.edit', $item->id) }}"
                        class="font-poppins font-normal text-base no-underline hover:underline text-accentDarkGray">Biodata
                        Diri
                    </a>
                </li>
                <li class="list-none mb-2">
                    {{-- <a href="{{ route('password') }}"
                        class="font-poppins font-normal text-base no-underline hover:underline text-accentDarkGray">Ubah Password
                    </a> --}}
                    {{-- <form action="{{ route('edit-password.index', Auth::user()->id) }}">
                        <button type="submit"
                            class="font-poppins font-normal text-base no-underline hover:underline text-accentDarkGray focus:outline-none">Ubah
                            Password
                        </button>
                    </form> --}}
                </li>

            </ul>

        </div>
    </div>
    <div class="flex flex-row items-center mt-7">
        <div class="icon w-7 h-7 mr-6">
            <img src="{{ url('./images/ic_ticket.svg') }}" class="w-full h-full" alt="">
        </div>
        <div>
            <h1 class="text-accentDarkGray font-semibold font-poppins text-lg mb-2">Tiket Saya</h1>
        </div>
    </div>
    <div class="flex flex-row items-center mt-7">
        <div class="icon w-7 h-7 mr-6">
            <img src="{{ url('./images/ic_voucher.svg') }}" class="w-full h-full" alt="">
        </div>
        <div>
            <h1 class="text-accentDarkGray font-semibold font-poppins text-lg mb-2">Voucher Saya</h1>
        </div>
    </div>
</div>
