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
                <div
                class=" duration-500 md:-translate-x-0 -translate-x-full w-full md:z-0 z-30 md:bg-transparent bg-[#0000005f] flex flex-col md:w-fit h-screen md:sticky fixed top-0 "
                :class="{ 'translate-x-0 ease-in-out': open == true, '-translate-x-full ease-in-out': open == false }">
                    <div class=" justify-between overflow-auto overflow items-center pb-8 lg:w-[18.5rem] md:w-[15.5rem] w-[60%] md:h-fit h-screen bg-gray_50 flex flex-col" @click.away="open = false">
                       <div class="w-full">
                        <div class="py-[2.1rem] md:flex justify-center hidden">
                            <img class="" src="{{ asset('svg/Logo.svg') }}" alt="blockarb logo">    
                        </div>

                        <div class=" p-[1.5rem] cursor-pointer flex justify-end md:hidden " @click="open = false">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>
                        </div>

                        <div class=" lg:px-[2rem] px-[1.5rem] flex flex-col justify-between">
                        <div class="flex flex-col space-y-2 font-medium text-black_400 pb-10">

                            {{-- Home/overview nav link --}}
                            <a class="{{ request()->is('user') ? ' bg-blue_600 text-white pointer-events-none ' : ' ' }} flex px-[18px] py-[16px] rounded-[10px] items-center hover:scale-105 hover:text-black_800 hover:font-semibold transition-all"
                                href="{{ route('home') }}">                                  
                                <img class="{{ request()->is('user') ? ' hidden ' : ' block ' }}" src="{{ asset('svg/Home.svg') }}" alt="overview">
                                <img class="{{ request()->is('user') ? ' flex ' : ' hidden ' }}" src="{{ asset('svg/Home-2.svg') }}" alt="overview">
                                <span class=" ml-3 text-base relative top-[1px]">Overview</span>
                            </a>

                            {{-- Depost navlink --}}
                            <div x-data="{ open: {{ request()->is('user/invest') || request()->query('snowball') || request()->is('user/deposit') || request()->query('topup') ? 'true' : 'false' }} }" >
                                <a class="{{ request()->is('user/invest') || request()->is('user/snowball') || request()->is('user/deposit') || request()->is('user/portfolio#topup') ? ' bg-blue_600 text-white hover:scale-100 hover:text-white' : ' ' }} relative px-[18px] py-[16px] rounded-[10px] items-center hover:scale-105 hover:text-black_800 hover:font-semibold transition-all flex justify-between"
                                    href="{{ route('invest') }}">
                                    <span class="w-full flex">
                                    <img class="{{ request()->is('user/invest') || request()->is('user/snowball') || request()->is('user/deposit') || request()->is('user/portfolio#topup') ? ' hidden ' : ' block ' }}" src="{{ asset('svg/Deposit.svg') }}" alt="deposit">
                                    <img class="{{ request()->is('user/invest') || request()->is('user/snowball') || request()->is('user/deposit') || request()->is('user/portfolio#topup') ? ' flex ' : ' hidden ' }}" src="{{ asset('svg/Deposit-2.svg') }}" alt="deposit">
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
                                    <li onclick="addTopupQuery()" class="{{ request()->query('topup')  ? ' bg-blue_100 text-blue_600 pointer-events-none ' : ' ' }} flex px-[16px] py-[12px] rounded-[6px] items-center cursor-pointer font-medium hover:text-blue_600 transition-all" >
                                        <div class="{{ request()->query('topup') ? ' opacity-100 ' : ' opacity-0 ' }} w-[6px] h-[6px] rounded-full bg-blue_600" ></div>
                                        <span class="ml-5">
                                            Top up plan
                                        </span>
                                    </li>
                                    <li onclick="addSnowballQuery()" class="{{ request()->query('snowball')  ? ' bg-blue_100 text-blue_600 pointer-events-none ' : ' ' }} flex px-[16px] py-[12px] rounded-[6px] items-center cursor-pointer font-medium hover:text-blue_600 transition-all">
                                        <div class="{{ request()->query('snowball') ? ' opacity-100 ' : ' opacity-0 ' }} w-[6px] h-[6px] rounded-full bg-blue_600" ></div>
                                        <span class="ml-5">
                                            Snowball
                                        </span>
                                    </li>
                                </ul>
                            </div>

                            {{-- withdrawal navlink --}}
                            <a class="{{ request()->is('user/withdraw') ? ' bg-blue_600 text-white pointer-events-none ' : ' ' }} flex px-[18px] py-[16px] rounded-[10px] items-center hover:scale-105 hover:text-black_800 hover:font-semibold transition-all"
                                href="{{ route('withdrawal') }}">
                                <img class="{{ request()->is('user/withdraw') ? ' hidden ' : ' block ' }}" src="{{ asset('svg/Withdraw.svg') }}" alt="withdraw">
                                <img class="{{ request()->is('user/withdraw') ? ' flex ' : ' hidden ' }} " src="{{ asset('svg/Withdraw-2.svg') }}" alt="withdraw">
                                <span class=" ml-3 text-base">Withdraw</span>
                            </a>

                            {{-- transfer navlink --}}
                            <a class="{{ request()->is('user/transfer') ? ' bg-blue_600 text-white pointer-events-none ' : ' ' }} flex px-[18px] py-[16px] rounded-[10px] items-center hover:scale-105 hover:text-black_800 hover:font-semibold transition-all"
                                href="{{ route('transfer') }}">
                                <img class="{{ request()->is('user/transfer') ? ' hidden ' : ' block ' }}" src="{{ asset('svg/Withdraw.svg') }}" alt="withdraw">
                                <img class="{{ request()->is('user/transfer') ? ' flex ' : ' hidden ' }} " src="{{ asset('svg/Withdraw-2.svg') }}" alt="withdraw">
                                <span class=" ml-3 text-base">Transfer</span>
                            </a>

                            {{-- portfolio navlink --}}
                            <a class="{{ request()->is('user/portfolio') && !request()->query('snowball') && !request()->query('topup') ? ' bg-blue_600 text-white pointer-events-none' : ' ' }} flex px-[18px] py-[16px] rounded-[10px] items-center hover:scale-105 hover:text-black_800 hover:font-semibold transition-all"
                                href="{{ route('portfolio') }}">
                                <img class="{{ request()->is('user/portfolio') && !request()->query('snowball') && !request()->query('topup') ? ' hidden ' : ' block ' }}" src="{{ asset('svg/Portfolio.svg') }}" alt="Portfolio">
                                <img class="{{ request()->is('user/portfolio') && !request()->query('snowball') && !request()->query('topup') ? ' flex ' : ' hidden ' }} " src="{{ asset('svg/Portfolio-2.svg') }}" alt="Portfolio">
                                <span class=" ml-3 text-base">Portfolio</span>
                            </a>

                            <div class="border-t border-gray_200 pt-4 relative top-3">
                                <span onclick="addProfileQuery()" class="{{ request()->is('user/settings') ? ' bg-blue_600 text-white pointer-events-none' : ' ' }} flex cursor-pointer px-[18px] py-[16px] rounded-[10px] items-center hover:scale-105 hover:text-black_800 hover:font-semibold transition-all">
                                    <img class="{{ request()->is('user/settings') ? ' hidden ' : ' block ' }}" src="{{ asset('svg/Settings.svg') }}" alt="deposit">
                                    <img class="{{ request()->is('user/settings') ? ' flex ' : ' hidden ' }}" src="{{ asset('svg/Settings-2.svg') }}" alt="deposit">
                                    <span class=" ml-3 text-base relative top-[1px]">Settings</span>
                                </span>
                            </div>
                            
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
                {{-- <div x-data="{ show: false }"
                    class=" duration-500 -translate-x-full w-full h-screen z-30 bg-[#0000004c] flex flex-col lg:hidden fixed "
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
                </div> --}}
                 {{-- Mobile sidebar ends here --}}


                {{-- Main contents begins --}}
                <div class=" nav-width flex flex-col h-fit">
                    
                    {{-- Navbar --}}
                    <div class=" md:block flex justify-between items-center w-full py-3 px-[1rem] md:p-[1.5rem] bg-white sticky z-10 lg:left-[17.5rem] top-0 right-0 border-b border-gray_200">
                       
                        {{--Desktop Navbar/header begins --}}
                        <div class=" md:hidden w-fit justify-start items-center flex">
                            <div class="mr-4 cursor-pointer" @click="open = true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.8" stroke="currentColor" class="w-7 h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 9h16.5m-16.5 6.75h16.5" />
                                </svg>
                            </div>

                            <img class="base:w-[65%] w-[52%]" src="{{ asset('svg/Logo.svg') }}" alt="blockarb logo">    
                        </div>

                        <div class="flex items-center justify-end">
                           <div class=" flex items-center">
                                <a href="{{ route('downlines') }}" class="{{ request()->is('user/affilate') ? 'text-blue_600' : 'text-black_400' }} base:text-base text-[.7rem] md:mr-[3rem] mr-[1rem] ">Affiliate Programme</a>

                                <div class=" relative cursor-pointer" x-data="{ show: false }">
                                    <div  x-on:click="show = true" class=" border hover:bg-blue_600 hover:text-white rounded-full md:p-2 p-1 md:w-[10.2rem] w-fit flex items-center justify-between " :class=" { 'bg-blue_600 text-white': show == true, 'bg-gray_50 text-black_800': show == false }">
                                        <img src="{{ asset('svg/ProfileIcon.svg')}}" alt="user placeholder" class="base:w-[2rem] w-[1.4rem]" >
                                        <h3 class=" text-sm font-extrabold -ml-3 md:block hidden capitalize">
                                            {{ Auth()->user()->first_name . ' ' . strtoupper(mb_substr(Auth()->user()->last_name, 0, 1)) . '.' }}
                                        </h3>
                                        <span class="cursor-pointer base:p-2 p-1 hover:scale-110 transition-all"
                                             :class=" { 'transition-transform rotate-180 duration-300': show == true, 'transition-transform rotate-0 duration-300': show == false }">
                                             <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>    
                                    </div>
                                    <div class=" duration-300 absolute top-[3rem] right-0 w-[15rem] bg-white rounded-[10px] box-shadow" x-show="show" x-cloak
                                        x-transition @click.away="show = false"  :class="{
                                            '  opacity-100  ': show == true,
                                            '  opacity-0 ': show == false
                                        }" >
                                        <div class=" ">
                                            <div class=" py-5 px-6 rounded-t-[10px] border-b">
                                                <h5 class=" font-semibold capitalize">
                                                    {{ Auth()->user()->first_name . ' ' . Auth()->user()->last_name }}
                                                </h5>
                                                <h5 class=" text-sm text-gray-400">{{ Auth()->user()->email }}</h5>
                                            </div>

                                            <div class=" py-5 px-2 rounded-b-[10px] grid gap-2">
                                                <span onclick="addProfileQuery()" class=" {{ request()->query('profile')  ? ' bg-blue_100 text-blue_600 pointer-events-none ' : ' ' }} dot-container">
                                                    <div class="{{ request()->query('profile') ? ' opacity-100 ' : ' opacity-0 ' }} w-[6px] h-[6px] rounded-full bg-blue_600" ></div>
                                                    <span class="ml-5">
                                                        View Profile
                                                    </span>
                                                </span>

                                                <a href="{{ route('downlines') }}" class=" {{ request()->is('user/affilate')  ? ' bg-blue_100 text-blue_600 pointer-events-none ' : ' ' }} dot-container">
                                                    <div class="{{ request()->is('user/affilate') ? ' opacity-100 ' : ' opacity-0 ' }} w-[6px] h-[6px] rounded-full bg-blue_600" ></div>
                                                    <span class="ml-5">
                                                        Affilate Programme
                                                    </span>
                                                </a>

                                                <a href="{{ route('history') }}" class=" {{ request()->is('user/activity')  ? ' bg-blue_100 text-blue_600 pointer-events-none ' : ' ' }} dot-container">
                                                    <div class="{{ request()->is('user/activity') ? ' opacity-100 ' : ' opacity-0 ' }} w-[6px] h-[6px] rounded-full bg-blue_600" ></div>
                                                    <span class="ml-5">
                                                        Activities
                                                    </span>
                                                </a>

                                                <span onclick="addKycQuery()" class=" {{ request()->query('kyc')  ? ' bg-blue_100 text-blue_600 pointer-events-none ' : ' ' }} dot-container">
                                                    <div class="{{ request()->query('kyc') ? ' opacity-100 ' : ' opacity-0 ' }} w-[6px] h-[6px] rounded-full bg-blue_600" ></div>
                                                    <span class="ml-5">
                                                        Kyc Verification
                                                    </span>
                                                </span>

                                                <span>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <a class=" flex px-[16px] py-[12px] rounded-[6px] items-center cursor-pointer font-medium text-black hover:text-failed hover:bg-red-50 transition-all dot-container"
                                                            href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                            <div class=" opacity-0 w-[6px] h-[6px] rounded-full bg-failed" ></div>
                                                            <span class=" ml-5 ">Log Out</span>
                                                        </a>
                                                    </form>
                                                </span>    
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
                    <div class=" md:p-5 p-4 lg:px-10 bg-white border-t border-gray-300 mt-auto">
                            <div class=" text-center md:text-sm text-s">
                                <h5>Copyright © Blockchain Arbitrage {{ now()->year }}. All Rights Reserved.</h5>
                            </div>
                    </div>
                </div>  
                
                {{-- green ends --}}
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>

        function addTopupQuery() {
        // 1. Immediate redirection without full reload
                window.history.pushState({}, '', '{{ route("portfolio") }}'); 

                const currentUrl = window.location.href;
                const newUrl = currentUrl + (currentUrl.includes('?') ? '&' : '?') + 'topup=true';
                window.history.pushState({}, '', newUrl); // Update URL without full reload
            setTimeout(() => {
                location.reload()
            }, 500); // Adjust delay in milliseconds as needed
        }

        function addSnowballQuery() {
        // 1. Immediate redirection without full reload
            window.history.pushState({}, '', '{{ route("portfolio") }}'); 

            const currentUrl = window.location.href;
            const newUrl = currentUrl + (currentUrl.includes('?') ? '&' : '?') + 'snowball=true';
            window.history.pushState({}, '', newUrl); // Update URL without full reload
            setTimeout(() => {
                location.reload()
            }, 500); // Adjust delay in milliseconds as needed
        }

        function addWalletsQuery() {
            window.history.pushState({}, '', '{{ route("settings") }}'); 

            const currentUrl = window.location.href;
            let newUrl;

            if (currentUrl.includes('?')) {
                const urlWithoutQuery = currentUrl.split('?')[0];
                newUrl = urlWithoutQuery + '?' + 'wallets=true';
            } else {
                newUrl = currentUrl + '?' + 'wallets=true';
            }

            window.history.pushState({}, '', newUrl);

            setTimeout(() => {
                location.reload()
            }, 500);
        }

        function addProfileQuery() {
        // 1. Immediate redirection without full reload
            window.history.pushState({}, '', '{{ route("settings") }}'); 

            const currentUrl = window.location.href;
            let newUrl;

            if (currentUrl.includes('?')) {
                const urlWithoutQuery = currentUrl.split('?')[0];
                newUrl = urlWithoutQuery + '?' + 'profile=true';
            } else {
                newUrl = currentUrl + '?' + 'profile=true';
            }
            window.history.pushState({}, '', newUrl); // Update URL without full reload
            setTimeout(() => {
                location.reload()
            }, 500); 
        }

        function addKycQuery() {

            window.history.pushState({}, '', '{{ route("settings") }}'); 

            const currentUrl = window.location.href;
            let newUrl;

            if (currentUrl.includes('?')) {
                const urlWithoutQuery = currentUrl.split('?')[0];
                newUrl = urlWithoutQuery + '?' + 'kyc=true';
            } else {
                newUrl = currentUrl + '?' + 'kyc=true';
            }

            window.history.pushState({}, '', newUrl);
            setTimeout(() => {
                location.reload()
            }, 500); 
        }

        // For settings page button navigation
        function addNavProfileQuery() {
            const currentUrl = window.location.href;
            let newUrl;

            if (currentUrl.includes('?')) {
                const urlWithoutQuery = currentUrl.split('?')[0];
                newUrl = urlWithoutQuery + '?' + 'profile=true';
            } else {
                newUrl = currentUrl + '?' + 'profile=true';
            }

            window.history.pushState({}, '', newUrl);
        }

        function addNavWalletsQuery() {
            const currentUrl = window.location.href;
            let newUrl;

            if (currentUrl.includes('?')) {
                const urlWithoutQuery = currentUrl.split('?')[0];
                newUrl = urlWithoutQuery + '?' + 'wallets=true';
            } else {
                newUrl = currentUrl + '?' + 'wallets=true';
            }

            window.history.pushState({}, '', newUrl);
        }

        function addNavKycQuery() {
            const currentUrl = window.location.href;
            let newUrl;

            if (currentUrl.includes('?')) {
                const urlWithoutQuery = currentUrl.split('?')[0];
                newUrl = urlWithoutQuery + '?' + 'kyc=true';
            } else {
                newUrl = currentUrl + '?' + 'kyc=true';
            }

            window.history.pushState({}, '', newUrl);
        }

        function addNavPasswordQuery() {
            const currentUrl = window.location.href;
            let newUrl;

            if (currentUrl.includes('?')) {
                const urlWithoutQuery = currentUrl.split('?')[0];
                newUrl = urlWithoutQuery + '?' + 'password=true';
            } else {
                newUrl = currentUrl + '?' + 'password=true';
            }

            window.history.pushState({}, '', newUrl);
        }

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

   <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '4fd1c89762a2b3405110e073657c9ea76ef86c2d';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

    @livewireScripts
    @stack('scripts')



</body>

</html>
