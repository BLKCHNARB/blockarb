<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    {{-- href="mailto:support@blockarb.com" --}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BlockArb') }}</title>
    <link rel="icon" type="image/x-icon" href={{asset('favicon.png')}}>

    <!-- Scripts -->
    @vite(['resources/css/dash.css', 'resources/js/dash.js'])

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @livewireStyles
</head>

<body class="">
    <div class="min-h-screen bg-white">
        <!-- Page Content -->
        <main>
            <div class=" h-full flex justify-between " x-data="{ open: false }">
                {{-- Desktop view sidebar --}}
                <div class="overflow-auto lg:w-fit overflow h-screen sticky top-0">
                    <div class="hidden justify-between items-center pb-8 lg:w-[17.5rem] h-fit bg-gray_50 lg:flex flex-col">
                       <div class="w-full">
                        <div class="py-[38px] flex justify-center">
                            <img class="" src="{{ asset('svg/Logo.svg') }}" alt="blockarb logo">    
                        </div>

                        <div class=" px-[32px] flex flex-col justify-between">
                        <div class="flex flex-col space-y-2 font-medium text-black_400">

                            {{-- <a class="{{ request()->is('user/invest') ? ' bg-primary-700 text-primary-200 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('invest') }}">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14 13.9633H16V7.96331H10V9.96331H12.5858L7.25623 15.2929L8.67044 16.7071L14 11.3775V13.9633Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M23 19C23 21.2091 21.2091 23 19 23H5C2.79086 23 1 21.2091 1 19V5C1 2.79086 2.79086 1 5 1H19C21.2091 1 23 2.79086 23 5V19ZM19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21Z"
                                        fill="currentColor" />
                                </svg>
                                <span class=" ml-2 text-sm">Invest</span>
                            </a> --}}
                            {{-- Home/overview nav link --}}
                            <a class="{{ request()->is('user') ? ' bg-blue_600 text-white pointer-events-none ' : ' ' }} flex px-[18px] py-[16px] rounded-[10px] items-center hover:scale-105 hover:text-black_800 hover:font-semibold transition-all"
                                href="{{ route('home') }}">                                  
                                <img class="{{ request()->is('user') ? ' hidden ' : ' block ' }}" src="{{ asset('svg/Home.svg') }}" alt="overview">
                                <img class="{{ request()->is('user') ? ' flex ' : ' hidden ' }}" src="{{ asset('svg/Home-2.svg') }}" alt="overview">
                                <span class=" ml-3 text-base relative top-[1px]">Overview</span>
                            </a>

                            {{-- Depost navlink --}}
                            <div x-data="{ open: {{ request()->is('user/invest') || request()->is('user/snowball') || request()->is('user/deposit') || request()->is('user/topup') ? 'true' : 'false' }} }" >
                                <a class="{{ request()->is('user/invest') || request()->is('user/snowball') || request()->is('user/deposit') || request()->is('user/topup') ? ' bg-blue_600 text-white pointer-events-none ' : ' ' }} relative px-[18px] py-[16px] rounded-[10px] items-center hover:scale-105 hover:text-black_800 hover:font-semibold transition-all flex justify-between"
                                    href="{{ route('invest') }}">
                                    <span class="w-full flex">
                                    <img class="{{ request()->is('user/invest') || request()->is('user/snowball') || request()->is('user/deposit') || request()->is('user/topup') ? ' hidden ' : ' block ' }}" src="{{ asset('svg/Deposit.svg') }}" alt="deposit">
                                    <img class="{{ request()->is('user/invest') || request()->is('user/snowball') || request()->is('user/deposit') || request()->is('user/topup') ? ' flex ' : ' hidden ' }}" src="{{ asset('svg/Deposit-2.svg') }}" alt="deposit">
                                    <span class=" ml-3 text-base">Deposit</span>
                                    </span>
                                    <span :class=" { 'transition-transform rotate-180 duration-500': open }">
                                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> 
                                </span>                                   
                                </a>
                                <ul x-show="open"
                                    class=" ul -mt-3 z-10 p-2 pt-5 bg-white rounded-md">
                                    <li><a class="{{ request()->is('user/deposit') ? ' bg-blue_100 text-blue_600 pointer-events-none ' : ' ' }} flex px-[16px] py-[12px] rounded-[6px] items-center font-medium hover:text-blue_600 transition-all"
                                        href="{{ route('deposit') }}">
                                        <div class="{{ request()->is('user/deposit') ? ' opacity-100 ' : ' opacity-0 ' }} w-[6px] h-[6px] rounded-full bg-blue_600" ></div>
                                        <span class="ml-5">
                                            Deposit to plan
                                        </span>
                                    </a></li>
                                    <li><a class="{{ request()->is('user/topup') ? ' bg-blue_100 text-blue_600 pointer-events-none ' : ' ' }} flex px-[16px] py-[12px] rounded-[6px] items-center font-medium hover:text-blue_600 transition-all"
                                        href="{{ route('topup') }}">
                                        <div class="{{ request()->is('user/topup') ? ' opacity-100 ' : ' opacity-0 ' }} w-[6px] h-[6px] rounded-full bg-blue_600" ></div>
                                        <span class="ml-5">
                                            Top up plan
                                        </span>
                                    </a></li>
                                    <li><a class="{{ request()->is('user/snowball') ? ' bg-blue_100 text-blue_600 pointer-events-none ' : ' ' }} flex px-[16px] py-[12px] rounded-[6px] items-center font-medium hover:text-blue_600 transition-all"
                                        href="{{ route('snowball') }}">
                                        <div class="{{ request()->is('user/snowball') ? ' opacity-100 ' : ' opacity-0 ' }} w-[6px] h-[6px] rounded-full bg-blue_600" ></div>
                                        <span class="ml-5">
                                            Snowball
                                        </span>
                                    </a></li>
                                </ul>
                            </div>

                            {{-- withdrawal navlink --}}
                            <a class="{{ request()->is('user/transfer') ? ' bg-blue_600 text-white pointer-events-none ' : ' ' }} flex px-[18px] py-[16px] rounded-[10px] items-center hover:scale-105 hover:text-black_800 hover:font-semibold transition-all"
                                href="{{ route('transfer') }}">
                                <img class="{{ request()->is('user/transfer') ? ' hidden ' : ' block ' }}" src="{{ asset('svg/Withdraw.svg') }}" alt="withdraw">
                                <img class="{{ request()->is('user/transfer') ? ' flex ' : ' hidden ' }} " src="{{ asset('svg/Withdraw-2.svg') }}" alt="withdraw">
                                <span class=" ml-3 text-base">Withdraw</span>
                            </a>

                            {{-- portfolio navlink --}}
                            <a class="{{ request()->is('user/portfolio') ? ' bg-blue_600 text-white pointer-events-none' : ' ' }} flex px-[18px] py-[16px] rounded-[10px] items-center hover:scale-105 hover:text-black_800 hover:font-semibold transition-all"
                                href="{{ route('portfolio') }}">
                                <img class="{{ request()->is('user/portfolio') ? ' hidden ' : ' block ' }}" src="{{ asset('svg/Portfolio.svg') }}" alt="Portfolio">
                                <img class="{{ request()->is('user/portfolio') ? ' flex ' : ' hidden ' }} " src="{{ asset('svg/Portfolio-2.svg') }}" alt="Portfolio">
                                <span class=" ml-3 text-base">Portfolio</span>
                            </a>

                            {{-- <a class="{{ request()->is('user/profile') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('profile') }}">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z"
                                        fill="currentColor" />
                                </svg>
                                <span class=" ml-2 text-sm">Profile</span>
                            </a> --}}

                            {{-- <a class="{{ request()->is('user/history') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('history') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M4 19V8v11Zm0 2q-.825 0-1.412-.587Q2 19.825 2 19V8q0-.825.588-1.412Q3.175 6 4 6h4V4q0-.825.588-1.413Q9.175 2 10 2h4q.825 0 1.413.587Q16 3.175 16 4v2h4q.825 0 1.413.588Q22 7.175 22 8v4.275q-.45-.325-.95-.563q-.5-.237-1.05-.412V8H4v11h7.075q.075.525.225 1.025q.15.5.375.975Zm6-15h4V4h-4Zm8 17q-2.075 0-3.537-1.462Q13 20.075 13 18q0-2.075 1.463-3.538Q15.925 13 18 13t3.538 1.462Q23 15.925 23 18q0 2.075-1.462 3.538Q20.075 23 18 23Zm1.65-2.65l.7-.7l-1.85-1.85V15h-1v3.2Z" />
                                </svg>
                                <span class=" ml-2 text-sm">History</span>
                            </a> --}}

                            <div class="border-t border-gray_200 pt-4 relative top-3">
                                <a class="{{ request()->is('user/settings') ? ' bg-blue_600 text-white pointer-events-none' : ' ' }} flex px-[18px] py-[16px] rounded-[10px] items-center hover:scale-105 hover:text-black_800 hover:font-semibold transition-all"
                                    href="{{ route('settings') }}">
                                    <img class="{{ request()->is('user/settings') ? ' hidden ' : ' block ' }}" src="{{ asset('svg/Settings.svg') }}" alt="deposit">
                                    <img class="{{ request()->is('user/settings') ? ' flex ' : ' hidden ' }}" src="{{ asset('svg/Settings-2.svg') }}" alt="deposit">
                                    <span class=" ml-3 text-base relative top-[1px]">Settings</span>
                                </a>
                            </div>
                            
                            {{-- <a class="{{ request()->is('user/downlines') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('downlines') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="4">
                                        <circle cx="14" cy="29" r="5" />
                                        <circle cx="34" cy="29" r="5" />
                                        <circle cx="24" cy="9" r="5" />
                                        <path
                                            d="M24 44c0-5.523-4.477-10-10-10S4 38.477 4 44m40 0c0-5.523-4.477-10-10-10s-10 4.477-10 10m10-20c0-5.523-4.477-10-10-10s-10 4.477-10 10" />
                                    </g>
                                </svg>
                                <span class=" ml-2 text-sm">Affiliates</span>
                            </a> --}}

                            {{-- <a class="{{ request()->is('user/otc') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('otc') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M18 23v-3h-3v-2h3v-3h2v3h3v2h-3v3ZM2 20v-6H1v-2l1-5h15l1 5v2h-1v3h-2v-3h-4v6Zm2-2h5v-4H4Zm-.95-6h12.9ZM2 6V4h15v2Zm1.05 6h12.9l-.6-3H3.65Z" />
                                </svg>
                                <span class=" ml-2 text-sm">OTC Trading</span>
                            </a> --}}
                        </div>
                    </div>
                    
                    </div>
                      <div class="px-[32px] w-full flex flex-col items-center">
                        <img class="relative top-9" src="{{ asset('svg/Livechat.svg') }}" alt="question mark">
                        <div class="w-full bg-white p-5 h-[15.82rem] rounded-[20px] flex items-center justify-end flex-col gap-2">
                            <span class="font-semibold">Live Chat</span>
                            <span class="font-medium text-black_200 text-center">Need assistance with using Blockarb?
                               <br> Kindly message us for instant support.</span>
                            <x-button type='primary' class="mt-2">Message</x-button>
                        </div>
                      </div>
                    </div>
                </div>
                {{-- desktop sidebar ends --}}

                {{-- Mobile View sidebar --}}
                {{-- <div x-show="open == true"
                    class=" w-full h-screen fixed bg-gray-900 z-20 opacity-60  top-0 left-0 right-0 bottom-0 transition-all">
                </div> --}}
                <div x-data="{ show: false }"
                    class=" duration-500 -translate-x-full w-5/6 h-screen z-30 bg-white flex flex-col lg:hidden fixed "
                    :class="{ 'translate-x-0 ease-in-out': open == true, '-translate-x-full ease-in-out': open == false }">
                    <div class="flex justify-between p-5 px-8">
                        <img class=" w-20" src="{{ asset('logo-b1.svg') }}" alt="">
                        <div class="" @click="open = false">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>

                        </div>
                    </div>

                    <div class=" p-5 flex flex-col justify-between flex-1 overflow-auto border--2 border-gray-300">
                        <div class="flex flex-col space-y-4 text-gray-500">

                            <a class="{{ request()->is('user/invest') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('invest') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="3"
                                        d="M29 17v11H3V17M2 8h28v8s-6 4-14 4s-14-4-14-4V8Zm14 14v-4m4-10s0-4-4-4s-4 4-4 4" />
                                </svg>
                                <span class=" ml-2 text-sm">Invest</span>
                            </a>

                            <a class="{{ request()->is('user') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('home') }}">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11 9V13.1707C9.83481 13.5825 9 14.6938 9 16C9 17.6569 10.3431 19 12 19C13.6569 19 15 17.6569 15 16C15 14.6938 14.1652 13.5825 13 13.1707V9H11ZM11 16C11 15.4477 11.4477 15 12 15C12.5523 15 13 15.4477 13 16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16Z"
                                        fill="currentColor" />
                                    <path
                                        d="M12 5C15.866 5 19 8.13401 19 12V13H17V12C17 9.23858 14.7614 7 12 7C9.23858 7 7 9.23858 7 12V13H5V12C5 8.13401 8.13401 5 12 5Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23ZM12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                        fill="currentColor" />
                                </svg>
                                <span class=" ml-2 text-sm">Performance</span>
                            </a>

                            <a class="{{ request()->is('user/funds') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('funds') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                                <span class=" ml-2 text-sm">Funds</span>
                            </a>

                            <a class="{{ request()->is('user/portfolio') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('portfolio') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="3"
                                        d="M29 17v11H3V17M2 8h28v8s-6 4-14 4s-14-4-14-4V8Zm14 14v-4m4-10s0-4-4-4s-4 4-4 4" />
                                </svg>
                                <span class=" ml-2 text-sm">Portfolio</span>
                            </a>

                            <a class="{{ request()->is('user/history') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('history') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M4 19V8v11Zm0 2q-.825 0-1.412-.587Q2 19.825 2 19V8q0-.825.588-1.412Q3.175 6 4 6h4V4q0-.825.588-1.413Q9.175 2 10 2h4q.825 0 1.413.587Q16 3.175 16 4v2h4q.825 0 1.413.588Q22 7.175 22 8v4.275q-.45-.325-.95-.563q-.5-.237-1.05-.412V8H4v11h7.075q.075.525.225 1.025q.15.5.375.975Zm6-15h4V4h-4Zm8 17q-2.075 0-3.537-1.462Q13 20.075 13 18q0-2.075 1.463-3.538Q15.925 13 18 13t3.538 1.462Q23 15.925 23 18q0 2.075-1.462 3.538Q20.075 23 18 23Zm1.65-2.65l.7-.7l-1.85-1.85V15h-1v3.2Z" />
                                </svg>
                                <span class=" ml-2 text-sm">History</span>
                            </a>

                            <a class="{{ request()->is('user/transfer') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('transfer') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M19.924 10.383a1 1 0 0 0-.217-1.09l-5-5l-1.414 1.414L16.586 9H4v2h15a1 1 0 0 0 .924-.617zM4.076 13.617a1 1 0 0 0 .217 1.09l5 5l1.414-1.414L7.414 15H20v-2H5a.999.999 0 0 0-.924.617z" />
                                </svg>
                                <span class=" ml-2 text-sm">Funds Transfer</span>
                            </a>

                            <a class="{{ request()->is('user/downlines') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('downlines') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="4">
                                        <circle cx="14" cy="29" r="5" />
                                        <circle cx="34" cy="29" r="5" />
                                        <circle cx="24" cy="9" r="5" />
                                        <path
                                            d="M24 44c0-5.523-4.477-10-10-10S4 38.477 4 44m40 0c0-5.523-4.477-10-10-10s-10 4.477-10 10m10-20c0-5.523-4.477-10-10-10s-10 4.477-10 10" />
                                    </g>
                                </svg>
                                <span class=" ml-2 text-sm">Affiliates</span>
                            </a>

                            <a class="{{ request()->is('user/otc') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('otc') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M18 23v-3h-3v-2h3v-3h2v3h3v2h-3v3ZM2 20v-6H1v-2l1-5h15l1 5v2h-1v3h-2v-3h-4v6Zm2-2h5v-4H4Zm-.95-6h12.9ZM2 6V4h15v2Zm1.05 6h12.9l-.6-3H3.65Z" />
                                </svg>
                                <span class=" ml-2 text-sm">OTC Trading</span>
                            </a>
                        </div>
                    </div>
                </div>
                 {{-- Mobile sidebar ends here --}}


                {{-- Main contents begins --}}
                <div class=" nav-width flex flex-col h-fit">
                    
                    {{-- Navbar --}}
                    <div class=" w-full py-3 px-[2rem] md:p-[1.5rem] bg-white sticky z-10 lg:left-[17.5rem] top-0 right-0 border-b border-gray_200">
                        
                        {{-- Mobile navbar begins here --}}
                        <div class="flex border justify-between lg:hidden">
                            <div class="" @click="open = true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 9h16.5m-16.5 6.75h16.5" />
                                </svg>
                            </div>
                            <div class="">
                                <img class=" w-20" src="{{ asset('logo-b1.svg') }}" alt="">
                            </div>
                            <div x-data="{ display: false }" class="rounded-full relative">
                                <div @click="display = !display"
                                    class="  rounded-full bg-green-200 p-5 w-3 h-3 flex items-center justify-center">
                                    <h4 class=" text-green-500 font-bold">
                                        {{ strtoupper(mb_substr(Auth()->user()->first_name, 0, 1)) . '' . strtoupper(mb_substr(Auth()->user()->last_name, 0, 1)) }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                        {{-- Mobile navbar ends here --}}

                        {{--Desktop Navbar/header begins --}}
                        <div class="hidden lg:flex items-center justify-end">
                           <div class=" flex space-x-4 items-center">
                                <span class="text-black_400 text-[1rem] mr-[3rem]">Affiliate Programme</span>

                                <div class=" relative" x-data="{ show: false }">
                                    <div class=" bg-gray_40 rounded-full p-2 w-[10.2rem] flex items-center justify-between ">
                                        <img src="{{ asset('svg/ProfileIcon.svg')}}" alt="user placeholder">
                                        <h3 class=" text-sm font-extrabold -ml-3">
                                            {{ Auth()->user()->first_name . ' ' . strtoupper(mb_substr(Auth()->user()->last_name, 0, 1)) . '.' }}
                                        </h3>
                                        <span class="cursor-pointer p-2 hover:scale-110 transition-all">
                                            <img src="{{ asset('svg/arrow.svg')}}" alt="user placeholder"  x-on:click="show = true" :class=" { 'transition-transform rotate-180 duration-300': show == true, 'transition-transform rotate-0 duration-300': show == false }">
                                        </span>    
                                    </div>
                                    <div class=" duration-300 absolute top-[3rem] right-0 w-[15rem] bg-white rounded-[10px]" x-show="show" x-cloak
                                        x-transition @click.away="show = false"  :class="{
                                            '  opacity-100  ': show == true,
                                            '  opacity-0 ': show == false
                                        }" >
                                        <div class=" ">
                                            <div class=" py-5 px-5 bg-gray-100 rounded-t-[10px]">
                                                <h5 class=" font-semibold">
                                                    {{ Auth()->user()->first_name . ' ' . Auth()->user()->last_name }}
                                                </h5>
                                                <h5 class=" text-sm text-gray-400">{{ Auth()->user()->email }}</h5>
                                            </div>

                                            <div class=" py-5 px-8 ">
                                                <a href="{{ route('settings') }}"
                                                    class=" flex text-gray-500 mb-3 items-center">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7ZM14 7C14 8.10457 13.1046 9 12 9C10.8954 9 10 8.10457 10 7C10 5.89543 10.8954 5 12 5C13.1046 5 14 5.89543 14 7Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16 15C16 14.4477 15.5523 14 15 14H9C8.44772 14 8 14.4477 8 15V21H6V15C6 13.3431 7.34315 12 9 12H15C16.6569 12 18 13.3431 18 15V21H16V15Z"
                                                            fill="currentColor" />
                                                    </svg>

                                                    <h5 class=" ml-2 text-sm">View Profile</h5>
                                                </a>

                                                <a href="{{ route('settings') }}"
                                                    class=" flex text-gray-500 items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                        role="img" width="20" height="20"
                                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="m15.71 6.29l-5.3 5.3l-2.12-2.12a1 1 0 1 0-1.41 1.41l2.83 2.83a1 1 0 0 0 .7.29a1 1 0 0 0 .71-.29l6-6a1 1 0 0 0 0-1.42a1 1 0 0 0-1.41 0ZM19 2H5a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h11.59l3.7 3.71A1 1 0 0 0 21 22a.84.84 0 0 0 .38-.08A1 1 0 0 0 22 21V5a3 3 0 0 0-3-3Zm1 16.59l-2.29-2.3A1 1 0 0 0 17 16H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1Z" />
                                                    </svg>

                                                    <h5 class=" ml-2 text-sm">KYC Verification</h5>
                                                </a>
                                            </div>

                                            <div class=" py-5 px-8 bg-gray-100 rounded-b-[10px]">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a class=" flex items-center text-gray-500"
                                                        href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                            stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                                        </svg>
                                                        <span class=" ml-2 text-sm">Log Out</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Desktop Navbar ends here --}}    
                    </div>

                    {{-- pages --}}
                    <div class=" w-full slot-h p-2 md:p-6">
                        {{ $slot }}
                    </div>

                    {{-- footer --}}
                    <div class=" p-5 lg:px-10 bg-white shadow-sm border-t border-gray-300 mt-auto">
                            <div class=" text-center text-sm">
                                <h5>Copyright © Blockchain Arbitrage {{ now()->year }}. All Rights Reserved.</h5>
                            </div>
                    </div>
                </div>  
                
                {{-- green ends --}}
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- <script>
        const labels = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
        ];

        const data = {
            labels: labels,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, 10, 5, 2, 20, 30, 45],
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {}
        };
    </script>

    <script>
        const myChart = new Chart(
            document.getElementById('chart-usd'),
            config
        );
    </script> --}}

    <script>
        // Dropzone.options.dropzone = {
        //     acceptedFiles: ".jpeg,.jpg,.png,.gif",
        //     maxFilesize: "",
        //     addRemoveLinks: true,
        // };


        let clipboard = new ClipboardJS('.btn-clip');
        clipboard.on('success', function(e) {
            // console.log(e)
            // setTimeout(() => {
            //     $(e.trigger).text("Copied!");
            // }, 2000);
        })

        window.addEventListener('alert', event => {
            event.detail.type === 'success' ? iziToast.success({
                title: event.detail.title,
                message: event.detail.message
            }) : iziToast.error({
                title: event.detail.title,
                message: event.detail.message
            });
        });
    </script>

    <!--StartofTawk.toScript-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var
                s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6395f279b0d6371309d3dc5c/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    @livewireScripts
    @stack('scripts')



</body>

</html>
