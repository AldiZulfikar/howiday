    <section class="navbar container mx-auto mb-11 z-20">
        <div class="lg:px-4 md:px-0 py-7 flex flex-wrap mx-10 items-center justify-between">
            <div class="logo pl-0 lg:pl-0">
                <a href="{{ url('/') }}">
                    <h1 class="text-accentCyan font-semibold font-poppins" style="font-size: 27px">How<span
                            class="text-accentOrange">iday.</span>
                    </h1>
                </a>
            </div>
            <button
                class="text-accentBlack dark:text-white dark:hover:bg-gray-400 inline-flex p-3 lg:hidden ml-auto hover:bg-gray-300 focus:outline-none nav-toggler"
                data-target="#navigation">
                <i class="material-icons">menu</i>
            </button>
            <div id="navigation"
                class="hidden top-navbar w-full lg:inline-flex lg:flex-grow pr-10 lg:w-auto lg:mt-0 mt-5 dark:bg-gray-800 bg-white lg:bg-transparent shadow-lg lg:shadow-none ">
                <div
                    class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto">
                    <a href="/"
                        class="lg:inline-flex lg:w-auto w-full px-4 py-2 font-normal dark:text-white dark:hover:text-gray-400 text-accentDarkGray items-center justify-center hover:text-accentBlack font-poppins hover:underline  ">
                        <span>Home</span>
                    </a>

                    <a href="#footer"
                        class="lg:inline-flex lg:w-auto w-full px-4 py-2 font-normal dark:text-white dark:hover:text-gray-400 text-accentDarkGray items-center justify-center hover:text-accentBlack font-poppins hover:underline ">
                        <span>About</span>
                    </a>

                    <a href="#destination"
                        class="lg:inline-flex lg:w-auto w-full px-4 py-2 font-normal dark:text-white dark:hover:text-gray-400 text-accentDarkGray items-center justify-center hover:text-accentBlack font-poppins hover:underline ">
                        <span>Destination</span>
                    </a>

                    <a href="#footer"
                        class="lg:inline-flex lg:w-auto w-full px-4 py-2 font-normal dark:text-white dark:hover:text-gray-400 text-accentDarkGray items-center justify-center hover:text-accentBlack font-poppins hover:underline ">
                        <span>Contact</span>
                    </a>

                    @auth
                        <a href="{{ route('edit-profile.edit', Auth::user()->id) }}"
                            class="lg:w-auto w-full px-4 py-2 font-normal dark:text-white dark:hover:text-gray-400 text-accentDarkGray hover:text-accentBlack font-poppins hover:underline focus:outline-none flex flex-row cursor-pointer items-center justify-start">
                            <span>{{Auth::user()->name}}</span>
                            <div class="w-8 h-8 rounded-full ml-2 overflow-hidden">
                                <img src="{{ Auth::user()->image ? asset('upload/' . Auth::user()->image) : url('./images/pic_user.svg') }}"
                                    alt="" class="w-full h-full object-cover rounded-full">
                            </div>
                        </a>
                    @endauth

                    @guest
                        <form class="focus:outline-none">
                            <button type="button" onclick="event.preventDefault();location.href='{{ url('login') }}';"
                                class="lg:inline-flex lg:w-auto w-full px-4 py-2 font-normal text-accentCyan items-center justify-center hover:text-accentCyanHover font-poppins hover:underline focus:outline-none ">
                                <span>Sign In</span>
                            </button>
                        </form>
                    @endguest

                    @auth
                        <form action="{{ url('logout') }}" method="POST" class="focus:outline-none">
                            @csrf
                            <button type="submit"
                                class="lg:inline-flex lg:w-auto w-full px-4 py-2 font-normal text-accentOrange items-center justify-center hover:text-red-500 font-poppins hover:underline focus:outline-none">
                                <span>Keluar</span>
                            </button>
                        </form>
                    @endauth


                </div>
            </div>
        </div>
    </section>
