@extends('layouts.checkout')

@section('content')
    <section class="travel-details container mx-auto px-5 lg:px-0 mb-28">
        <div class="flex flex-col xl:flex-row items-start">
            <div class="left w-full xl:w-2/3 xl:mb-0 mb-7 border border-gray-300 rounded-2xl mr-7 px-2 py-7 md:p-7">
                <h1 class="text-accentBlack font-poppins font-medium text-2xl mb-1">What is Going?</h1>
                <h2 class="text-accentOrange text-lg font-poppins font-normal mb-7">Trip to
                    {{ $item->travel_package->title }}, {{ $item->travel_package->location }}</h2>

                <table class="table-fixed w-full mb-7">
                    <thead class=" border-t border-b border-gray-400">
                        <tr>
                            <th class="w-2/12 py-4 font-semibold font-poppins text-xs md:text-lg">Picture</th>
                            <th class="w-2/12 py-4 font-semibold font-poppins text-xs md:text-lg">Name</th>
                            <th class="w-2/12 py-4 font-semibold font-poppins text-xs md:text-lg">Nat</th>
                            <th class="w-2/12 py-4 font-semibold font-poppins text-xs md:text-lg">Visa</th>
                            <th class="w-2/12 py-4 font-semibold font-poppins text-xs md:text-lg">Passport</th>
                            <th class="w-2/12 py-4 font-semibold font-poppins text-xs md:text-lg"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($item->details as $detail)
                            <tr class="border-b border-gray-400">
                                <td class="text-center text-gray-400 py-5 font-poppins font-normal"><img
                                        src="{{ $item->user->picuser ? Storage::url(Auth::user()->picuser) : url('./images/pic_user.svg') }}" class="w-6 h-6 md:w-10 rounded-full md:h-10 mx-auto"
                                        alt=""></td>
                                <td class="text-center text-gray-400 py-5 font-poppins font-normal text-xs md:text-lg">
                                    {{ $item->user->name }}</td>
                                <td class="text-center text-gray-400 py-5 font-poppins font-normal text-xs md:text-lg">
                                    {{ $detail->nationality }}
                                </td>
                                <td class="text-center text-gray-400 py-5 font-poppins font-normal text-xs md:text-lg">
                                    {{ $detail->is_visa ? '30 Days' : 'N/A' }}
                                </td>
                                <td class="text-center text-gray-400 py-5 font-poppins font-normal text-xs md:text-lg">
                                    {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                                </td>
                                <td class="text-center text-gray-400 py-5 font-poppins font-normal text-xs md:text-lg">
                                    <a href="{{ route('checkout-remove', $detail->id) }}"><img
                                            src="{{ url('./images/del.svg') }}" class="w-3 h-3 md:h-5 md:w-5 mx-auto"
                                            alt=""></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center font-poppins font-light text-2xl text-gray-300 pt-8">
                                    No visitor
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>

                <h1 class="font-poppins font-medium text-2xl text-accentDarkGray mb-7">Add Member</h1>
                <div class="flex flex-col lg:flex-row items-center">

                    <form method="post" action="{{ route('checkout-create', $item->id) }}" class="lg:flex">
                        @csrf
                        <input type="text" name="username" id="username" required placeholder="Username"
                            class="text-accentBlack font-poppins font-light text-lg form-input username rounded-lg bg-gray-100 py-3 px-3 border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-accentCyan lg:mr-3 mb-3 lg:mb-0 w-full lg:w-2/5" />

                        <input type="text" name="nationality" id="nationality" required placeholder="Nat"
                            class="text-accentBlack font-poppins font-light text-lg form-input username rounded-lg bg-gray-100 py-3 px-3 border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-accentCyan lg:mr-3 mb-3 lg:mb-0 w-full lg:w-1/6" />

                        <select name="is_visa" id="is_visa" required
                            class="form-select text-accentBlack font-poppins font-light text-lg form-input username rounded-lg bg-gray-100 py-3 px-3 border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-accentCyan lg:mr-3 mb-3 lg:mb-0 w-full lg:w-44">
                            <option value="0" class="text-sm md:text-lg">VISA</option>
                            <option value="1" class="text-sm md:text-lg">30 Days</option>
                            <option value="0" class="text-sm md:text-lg">N/A</option>
                        </select>

                        <!-- component -->
                        <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak class="w-full lg:w-auto">
                            <div class="lg:mr-4">
                                <div class="relative">
                                    <input type="hidden" name="date" x-ref="date" :value="datepickerValue" />
                                    <input type="text" id="doe_passport" name="doe_passport"
                                        x-on:click="initDate(datepickerValue), showDatepicker = !showDatepicker"
                                        x-model="datepickerValue" x-on:keydown.escape="showDatepicker = false"
                                        class="w-full pl-3 pr-10 py-3 bg-gray-100

                                                                                                                                                                                                                                                                                            form-select text-accentBlack font-poppins font-light text-lg form-input username rounded-lg px-3 border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-accentCyan lg:mr-3 mb-3 lg:mb-0  "
                                        placeholder="Select date" />

                                    <div class="absolute top-2 right-0 px-3 py-2">
                                        <svg class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>

                                    <div class="absolute top-0 left-0 p-4 mt-12 bg-white rounded-lg shadow"
                                        style="width: 17rem" x-show.transition="showDatepicker"
                                        @click.away="showDatepicker = false">
                                        <div class="flex items-center justify-between mb-2">
                                            <div>
                                                <span x-text="MONTH_NAMES[month]"
                                                    class="text-lg font-bold text-gray-800"></span>
                                                <span x-text="year" class="ml-1 text-lg font-normal text-gray-600"></span>
                                            </div>
                                            <div>
                                                <button type="button"
                                                    class="inline-flex p-1 transition duration-100 ease-in-out rounded-full cursor-pointer focus:outline-none focus:shadow-outline hover:bg-gray-100"
                                                    @click="if (month == 0) {
                                                                                                                                                                                                                                                                                                          year--;
                                                                                                                                                                                                                                                                                                          month = 12;
                                                                                                                                                                                                                                                                                                      } month--; getNoOfDays()">
                                                    <svg class="inline-flex w-6 h-6 text-gray-400" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 19l-7-7 7-7" />
                                                    </svg>
                                                </button>
                                                <button type="button"
                                                    class="inline-flex p-1 transition duration-100 ease-in-out rounded-full cursor-pointer focus:outline-none focus:shadow-outline hover:bg-gray-100"
                                                    @click="if (month == 11) {
                                                                                                                                                                                                                                                                                                          month = 0;
                                                                                                                                                                                                                                                                                                          year++;
                                                                                                                                                                                                                                                                                                      } else {
                                                                                                                                                                                                                                                                                                          month++;
                                                                                                                                                                                                                                                                                                      } getNoOfDays()">
                                                    <svg class="inline-flex w-6 h-6 text-gray-400" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M9 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="flex flex-wrap mb-3 -mx-1">
                                            <template x-for="(day, index) in DAYS" :key="index">
                                                <div style="width: 14.26%" class="px-0.5">
                                                    <div x-text="day" class="text-xs font-medium text-center text-gray-800">
                                                    </div>
                                                </div>
                                            </template>
                                        </div>

                                        <div class="flex flex-wrap -mx-1">
                                            <template x-for="blankday in blankdays">
                                                <div style="width: 14.28%"
                                                    class="p-1 text-sm text-center border border-transparent"></div>
                                            </template>
                                            <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                                <div style="width: 14.28%" class="px-1 mb-1">
                                                    <div @click="getDateValue(date)" x-text="date"
                                                        class="text-sm leading-none text-center transition duration-100 ease-in-out rounded-full cursor-pointer"
                                                        :class="{
                                                                                                                                                                                                                                                                                                            'bg-indigo-200': isToday(date) == true,
                                                                                                                                                                                                                                                                                                            'text-gray-600 hover:bg-indigo-200': isToday(date) == false && isSelectedDate(date) == false,
                                                                                                                                                                                                                                                                                                            'bg-indigo-500 text-white hover:bg-opacity-75': isSelectedDate(date) == true
                                                                                                                                                                                                                                                                                                        }">
                                                    </div>
                                                </div>
                                            </template>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit"
                            class="bg-accentCyan hover:bg-accentCyanHover py-4 px-14 rounded-lg text-white font-poppins font-medium transition duration-300 w-full lg:w-52 focus:outline-none">Add
                        </button>
                    </form>

                </div>
            </div>

            <div class="right w-full xl:w-1/3 ">
                <div class="pt-12 pb-9 px-8 border border-gray-300 rounded-t-2xl">
                    <div class="checkout">
                        <h1 class="mb-4 text-accentBlack font-poppins font-medium text-2xl">Checkout Information
                        </h1>
                        <div class="flex flex-row justify-between mb-1">
                            <h2 class="text-gray-500 font-poppins font-semibold text-sm md:text-lg text-left">Members</h2>
                            <h3 class="font-normal font-poppins text-sm md:text-lg text-gray-400 text-right">
                                {{ $item->details->count() }} Person
                            </h3>
                        </div>
                        <div class="flex flex-row justify-between mb-1">
                            <h2 class="text-gray-500 font-poppins font-semibold text-sm md:text-lg text-left">Additional
                                VISA
                            </h2>
                            <h3 class="font-normal font-poppins text-sm md:text-lg text-gray-400 text-right">
                                IDR {{ $item->additional_visa }}.000
                            </h3>
                        </div>
                        <div class="flex flex-row justify-between mb-1">
                            <h2 class="text-gray-500 font-poppins font-semibold text-sm md:text-lg text-left">Trip Price
                            </h2>
                            <h3 class="font-normal font-poppins text-sm md:text-lg text-gray-400 text-right">
                                IDR {{ $item->travel_package->price }}.000/Person
                            </h3>
                        </div>
                        <div class="flex flex-row justify-between mb-1">
                            <h2 class="text-gray-500 font-poppins font-semibold text-sm md:text-lg text-left">Sub Total
                            </h2>
                            <h3 class="font-normal font-poppins text-sm md:text-lg text-gray-400 text-right">
                                IDR {{ $item->transaction_total }}.000
                            </h3>
                        </div>
                        <div class="flex flex-row justify-between mb-6">
                            <h2 class="text-gray-500 font-poppins font-semibold text-sm md:text-lg text-left">
                                Total(+UniqueCode)
                            </h2>
                            <h3 class="font-normal font-poppins text-sm md:text-lg text-gray-400 text-right">
                                <span class="font-semibold text-accentCyan">IDR
                                    {{ $item->transaction_total }}.0{{ mt_rand(10, 99) }}</span>
                            </h3>
                        </div>
                    </div>
                    <hr class="mb-6" />
                    <div class="payment-instruction">
                        <h1 class="mb-4 text-accentBlack font-poppins font-medium text-2xl">Payment Instruction</h1>
                        <p class="mb-5 text-gray-400 text-sm font-poppins font-light">Please complete payment before
                            you
                            continue the wonderful trip</p>
                        <div class="flex flex-col sm:flex-row xl:flex-col">
                            <div class="flex flex-row mb-6 items-start justify-start mr-0 sm:mr-14 xl:mr-0">
                                <div class="ic-bank mr-6">
                                    <img src="{{ url('./images/ic_bank.svg') }}" class="w-14 h-14" alt="">
                                </div>
                                <div class="flex flex-col">
                                    <h2 class="text-gray-400 text-base font-poppins font-normal mb-1">PT Howiday</h2>
                                    <h2 class="text-gray-400 text-base font-poppins font-normal mb-1"> 081623545</h2>
                                    <h2 class="text-gray-400 text-base font-poppins font-normal"> Bank Negara Indonesia
                                    </h2>
                                </div>
                            </div>
                            <div class="flex flex-row mb-6 items-start justify-start">
                                <div class="ic-bank mr-6">
                                    <img src="{{ url('./images/ic_bank.svg') }}" class="w-14 h-14" alt="">
                                </div>
                                <div class="flex flex-col">
                                    <h2 class="text-gray-400 text-base font-poppins font-normal mb-1">PT Howiday</h2>
                                    <h2 class="text-gray-400 text-base font-poppins font-normal mb-1">53710123</h2>
                                    <h2 class="text-gray-400    text-base font-poppins font-normal"> Bank Mandiri
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="text-center">
                    <a href="{{ route('checkout-success', $item->id) }}"
                        class="block bg-accentCyan hover:bg-accentCyanHover font-poppins font-medium text-lg text-white  py-4 transition duration-300 rounded-b-2xl lg:rounded-b-none mb-5">I
                        Have made a payment</a>
                </div>
                <div>
                    <a href="{{ route('detail', $item->travel_package->slug) }}"
                        class="text-gray-400 hover:underline text-lg font-poppins font-light text-center block">Cancel
                        Booking</a>
                </div>
            </div>
        </div>
    </section>
@endsection
