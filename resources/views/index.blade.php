<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BlockArb') }}</title>
    <link rel="icon" type="image/x-icon" href={{ asset('favicon.png') }}>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" font-amiri">
    {{-- preloader --}}

    <div id="preloader" style="transition: all 2s ease-out"
        class=" bg-gradient-to-r from-primary to-primary-700 fixed left-0 top-0 right-0 bottom-0 w-full z-50">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <div class=" animate-pulse w-4 h-4 rounded-full border-4 mx-2 my-0 float-left border-secondary"></div>
            <div class=" animate-pulse w-4 h-4 delay-150 rounded-full border-4 mx-2 my-0 float-left border-secondary">
            </div>
            <div class=" animate-pulse w-4 h-4 delay-300 rounded-full border-4 mx-2 my-0 float-left border-secondary">
            </div>
        </div>
    </div>

    {{-- preloader --}}
    <div class=" text-gray-700 antialiased">
        <main>
            <div class=" lg:h-screen bg-primary pb-10 bg-about bg-cover relative">
                <div
                    class="absolute top-0 bg-gradient-to-r from-primary opacity-[96%] to-primary-700 left-0 w-full h-full -z-0">
                </div>

                <div class=" top-0 left-0 w-full right-0 z-30 text-gray-100 relative" x-data="{ open: false }">

                    <div x-show="open" x-transition.duration.600ms.origin.top.right
                        class=" fixed bg-white text-gray-700 p-8 h-screen z-50 md:hidden w-4/5 top-0 right-0">

                        <div class="flex mb-14 justify-between">
                            <img class=" w-36 md:w-44 h-" src="{{ asset('logo-b1.svg') }}" alt="">
                            <svg @click="open = false" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>

                        </div>
                        <ul class=" flex flex-col gap-12 ">
                            <li class=" font-bold"><a class=" font-poppins" href="{{ route('landing') }}">Home</a></li>
                            <li class="cursor-pointer relative font-bold" x-data="{ open: false }" @click="open=!open"
                                @click.away="open=false">
                                <div class="flex items-center ">
                                    <span class=" mr-2 font-poppins">About</span>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.68 8.98665L12 16.9333L4.32 8.98665C4.11136 8.77006 3.99731 8.47946 4.00294 8.17877C4.00856 7.87809 4.13341 7.59196 4.35 7.38332C4.56659 7.17468 4.8572 7.06063 5.15788 7.06626C5.45856 7.07189 5.7447 7.19673 5.95333 7.41332L12 13.6733L18.0533 7.41332C18.262 7.19673 18.5481 7.07189 18.8488 7.06626C19.1495 7.06063 19.4401 7.17468 19.6567 7.38332C19.8733 7.59196 19.9981 7.87809 20.0037 8.17877C20.0094 8.47946 19.8953 8.77006 19.6867 8.98665H19.68Z"
                                            fill="currentColor" fill-opacity="0.9" />
                                    </svg>
                                </div>
                                <div class=" z-20 bg-white text-gray-600 absolute left-0 top-full shadow-lg"
                                    x-show="open" x-cloak x-transition @click.away="open = false">
                                    <ul class=" divide-y text-sm">
                                        <li class=" p-5 hover:text-gray-400">
                                            <a href="{{ route('company') }}">Company</a>
                                        </li>
                                        <li class=" p-5 hover:text-gray-400">
                                            <a href="{{ route('team') }}">Team</a>
                                        </li>
                                        <li class=" p-5 hover:text-gray-400 whitespace-nowrap">
                                            <a href="{{ route('investment-approach') }}">Investment Approach</a>
                                        </li>
                                        <li class=" p-5 hover:text-gray-400">
                                            <a href="{{ route('risk-management') }}">Risk Management</a>
                                        </li>
                                        <li class=" p-5 hover:text-gray-400">
                                            <a href="{{ route('technology') }}">Technology</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="cursor-pointer relative font-bold" x-data="{ open: false }" @click="open=!open"
                                @click.away="open=false">
                                <div class="flex items-center ">
                                    <span class=" mr-2 font-poppins">Products</span>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.68 8.98665L12 16.9333L4.32 8.98665C4.11136 8.77006 3.99731 8.47946 4.00294 8.17877C4.00856 7.87809 4.13341 7.59196 4.35 7.38332C4.56659 7.17468 4.8572 7.06063 5.15788 7.06626C5.45856 7.07189 5.7447 7.19673 5.95333 7.41332L12 13.6733L18.0533 7.41332C18.262 7.19673 18.5481 7.07189 18.8488 7.06626C19.1495 7.06063 19.4401 7.17468 19.6567 7.38332C19.8733 7.59196 19.9981 7.87809 20.0037 8.17877C20.0094 8.47946 19.8953 8.77006 19.6867 8.98665H19.68Z"
                                            fill="currentColor" fill-opacity="0.9" />
                                    </svg>
                                </div>
                                <div class=" z-20 bg-white text-gray-600 absolute left-0 top-full shadow-lg"
                                    x-show="open" x-cloak x-transition>
                                    <ul class="divide-y text-sm">
                                        <li class=" p-5 hover:text-gray-400">
                                            <a href="{{ route('auto-arbitrage') }}">Auto Arbitrage</a>
                                        </li>
                                        <li class=" p-5 hover:text-gray-400">
                                            <a href="{{ route('market-making') }}">Market making</a>
                                        </li>
                                        <li class=" p-5 hover:text-gray-400 whitespace-nowrap">
                                            <a href="{{ route('liquidity-enhancement') }}">Liquidity Enhancement</a>
                                        </li>
                                        <li class=" p-5 hover:text-gray-400">
                                            <a href="{{ route('otc-trading') }}">OTC trading</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- <li class=" font-bold">
                                <a class="font-poppins" href="{{ route('insights') }}">Insights</a>
                            </li> --}}

                            <li class="cursor-pointer relative font-bold" x-data="{ open: false }" @click="open=!open"
                                @click.away="open=false">
                                <div class="flex items-center ">
                                    <span class=" mr-2 font-poppins">Careers</span>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.68 8.98665L12 16.9333L4.32 8.98665C4.11136 8.77006 3.99731 8.47946 4.00294 8.17877C4.00856 7.87809 4.13341 7.59196 4.35 7.38332C4.56659 7.17468 4.8572 7.06063 5.15788 7.06626C5.45856 7.07189 5.7447 7.19673 5.95333 7.41332L12 13.6733L18.0533 7.41332C18.262 7.19673 18.5481 7.07189 18.8488 7.06626C19.1495 7.06063 19.4401 7.17468 19.6567 7.38332C19.8733 7.59196 19.9981 7.87809 20.0037 8.17877C20.0094 8.47946 19.8953 8.77006 19.6867 8.98665H19.68Z"
                                            fill="currentColor" fill-opacity="0.9" />
                                    </svg>
                                </div>
                                <div class=" z-20 bg-white text-gray-600 absolute left-0 top-full shadow-lg shadow-gray-90 whitespace-nowrap"
                                    x-show="open" x-cloak x-transition>
                                    <ul class=" divide-y text-sm">
                                        <li class=" p-5 hover:text-gray-400">
                                            <a href="{{ route('careers') }}">Overview</a>
                                        </li>
                                        <li class=" p-5 hover:text-gray-400">
                                            <a href="{{ route('open-positions') }}">Open Positions</a>
                                    </ul>
                                </div>
                            </li>

                            <li class="flex justify-between font-bold font-poppins">
                                <a href="{{ route('register') }}"
                                    class=" rounded-sm px-5 py-2 bg-secondary-500 whitespace-nowrap">Create Account</a>
                                <a href="{{ route('login') }}"
                                    class=" rounded-sm px-5 py-2 border-2 border-gray-500">Login</a>
                            </li>
                        </ul>
                    </div>

                    <nav
                        class="fixe border- justify-between border-primary-800 max-w-screen-2xl lg:px-8 flex gap-6 justify-betwen w-full px-4 items-center sm:px-6 xl:px-10 py-4 md:py-">
                        <img class=" w-36 md:w-44 h-" src="{{ asset('logo-1.svg') }}" alt="">

                        <div @click="open = true" class=" md:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 9h16.5m-16.5 6.75h16.5" />
                            </svg>
                        </div>

                        <ul class=" hidden md:flex items-center gap-8 ml-auto">
                            <li><a href="{{ route('landing') }}">Home</a></li>
                            <li class="cursor-pointer relative" x-data="{ open: false }" @mouseleave="open=false">
                                <div class="flex items-center " @mouseover="open=true">
                                    <span class=" mr-2 font-roboto">About</span>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.68 8.98665L12 16.9333L4.32 8.98665C4.11136 8.77006 3.99731 8.47946 4.00294 8.17877C4.00856 7.87809 4.13341 7.59196 4.35 7.38332C4.56659 7.17468 4.8572 7.06063 5.15788 7.06626C5.45856 7.07189 5.7447 7.19673 5.95333 7.41332L12 13.6733L18.0533 7.41332C18.262 7.19673 18.5481 7.07189 18.8488 7.06626C19.1495 7.06063 19.4401 7.17468 19.6567 7.38332C19.8733 7.59196 19.9981 7.87809 20.0037 8.17877C20.0094 8.47946 19.8953 8.77006 19.6867 8.98665H19.68Z"
                                            fill="#D6DCEA" fill-opacity="0.9" />
                                    </svg>
                                </div>
                                <div class=" bg-white text-gray-600 absolute left-0 top-full shadow-lg shadow-gray-900"
                                    x-show="open" x-cloak x-transition @click.away="open = false">
                                    <ul class=" divide-y text-sm">
                                        <li class=" py-3 px-5 hover:text-gray-400">
                                            <a href="{{ route('company') }}">Company</a>
                                        </li>
                                        <li class=" py-3 px-5 hover:text-gray-400">
                                            <a href="{{ route('team') }}">Team</a>
                                        </li>
                                        <li class=" py-3 px-5 hover:text-gray-400 whitespace-nowrap">
                                            <a href="{{ route('investment-approach') }}">Investment Approach</a>
                                        </li>
                                        <li class=" py-3 px-5 hover:text-gray-400">
                                            <a href="{{ route('risk-management') }}">Risk Management</a>
                                        </li>
                                        <li class=" py-3 px-5 hover:text-gray-400">
                                            <a href="{{ route('technology') }}">Technology</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="cursor-pointer relative" x-data="{ open: false }" @mouseleave="open=false">
                                <div class="flex items-center " @mouseover="open=true">
                                    <span class=" mr-2 font-roboto">Products</span>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.68 8.98665L12 16.9333L4.32 8.98665C4.11136 8.77006 3.99731 8.47946 4.00294 8.17877C4.00856 7.87809 4.13341 7.59196 4.35 7.38332C4.56659 7.17468 4.8572 7.06063 5.15788 7.06626C5.45856 7.07189 5.7447 7.19673 5.95333 7.41332L12 13.6733L18.0533 7.41332C18.262 7.19673 18.5481 7.07189 18.8488 7.06626C19.1495 7.06063 19.4401 7.17468 19.6567 7.38332C19.8733 7.59196 19.9981 7.87809 20.0037 8.17877C20.0094 8.47946 19.8953 8.77006 19.6867 8.98665H19.68Z"
                                            fill="#D6DCEA" fill-opacity="0.9" />
                                    </svg>
                                </div>
                                <div class=" bg-white text-gray-600 absolute left-0 top-full shadow-lg shadow-gray-900"
                                    x-show="open" x-cloak x-transition>
                                    <ul class=" divide-y text-sm">
                                        <li class=" py-3 px-5 hover:text-gray-400">
                                            <a href="{{ route('auto-arbitrage') }}">Auto Arbitrage</a>
                                        </li>
                                        <li class=" py-3 px-5 hover:text-gray-400">
                                            <a href="{{ route('market-making') }}">Market making</a>
                                        </li>
                                        <li class=" py-3 px-5 hover:text-gray-400 whitespace-nowrap">
                                            <a href="{{ route('liquidity-enhancement') }}">Liquidity Enhancement</a>
                                        </li>
                                        <li class=" py-3 px-5 hover:text-gray-400">
                                            <a href="{{ route('risk-management') }}">Risk Management</a>
                                        </li>
                                        <li class=" py-3 px-5 hover:text-gray-400">
                                            <a href="{{ route('otc-trading') }}">OTC trading</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- <li>
                                <a href="{{ route('insights') }}">Insights</a>
                            </li> --}}

                            <li class="cursor-pointer relative" x-data="{ open: false }" @mouseleave="open=false">
                                <div class="flex items-center " @mouseover="open=true">
                                    <span class=" mr-2 font-roboto">Careers</span>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.68 8.98665L12 16.9333L4.32 8.98665C4.11136 8.77006 3.99731 8.47946 4.00294 8.17877C4.00856 7.87809 4.13341 7.59196 4.35 7.38332C4.56659 7.17468 4.8572 7.06063 5.15788 7.06626C5.45856 7.07189 5.7447 7.19673 5.95333 7.41332L12 13.6733L18.0533 7.41332C18.262 7.19673 18.5481 7.07189 18.8488 7.06626C19.1495 7.06063 19.4401 7.17468 19.6567 7.38332C19.8733 7.59196 19.9981 7.87809 20.0037 8.17877C20.0094 8.47946 19.8953 8.77006 19.6867 8.98665H19.68Z"
                                            fill="currentColor" fill-opacity="0.9" />
                                    </svg>
                                </div>
                                <div class=" bg-white text-gray-600 absolute left-0 top-full shadow-lg shadow-gray-900 whitespace-nowrap"
                                    x-show="open" x-cloak x-transition>
                                    <ul class=" divide-y text-sm">
                                        <li class=" py-3 px-5 hover:text-gray-400">
                                            <a href="{{ route('careers') }}">Overview</a>
                                        </li>
                                        <li class=" py-3 px-5 hover:text-gray-400">
                                            <a href="{{ route('open-positions') }}">Open Positions</a>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                        <ul class=" ml-auto  hidden md:flex items-center">
                            <li class=" font-semibold">
                                <a href="{{ route('register') }}"
                                    class=" py-1 rounded-sm bg-secondary border-2 border-transparent px-7 text-gray-900 flex">
                                    <span class=" mr-2">Get Started</span>
                                    <svg width="20" height="20" viewBox="0 0 25 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_6_70)">
                                            <path
                                                d="M9.93024 11.75C9.59872 11.75 9.28077 11.8817 9.04635 12.1161C8.81193 12.3505 8.68024 12.6685 8.68024 13C8.68024 13.3315 8.81193 13.6495 9.04635 13.8839C9.28077 14.1183 9.59872 14.25 9.93024 14.25C10.0944 14.25 10.2569 14.2177 10.4086 14.1548C10.5602 14.092 10.698 14 10.8141 13.8839C10.9302 13.7678 11.0223 13.63 11.0851 13.4784C11.1479 13.3267 11.1802 13.1642 11.1802 13C11.1802 12.8358 11.1479 12.6733 11.0851 12.5216C11.0223 12.37 10.9302 12.2322 10.8141 12.1161C10.698 12 10.5602 11.908 10.4086 11.8452C10.2569 11.7823 10.0944 11.75 9.93024 11.75ZM15.9302 11.75C15.5987 11.75 15.2808 11.8817 15.0464 12.1161C14.8119 12.3505 14.6802 12.6685 14.6802 13C14.6802 13.3315 14.8119 13.6495 15.0464 13.8839C15.2808 14.1183 15.5987 14.25 15.9302 14.25C16.2618 14.25 16.5797 14.1183 16.8141 13.8839C17.0485 13.6495 17.1802 13.3315 17.1802 13C17.1802 12.6685 17.0485 12.3505 16.8141 12.1161C16.5797 11.8817 16.2618 11.75 15.9302 11.75ZM12.9302 2C11.617 2 10.3167 2.25866 9.1034 2.7612C7.89015 3.26375 6.78776 4.00035 5.85917 4.92893C3.98381 6.8043 2.93024 9.34784 2.93024 12C2.93024 14.6522 3.98381 17.1957 5.85917 19.0711C6.78776 19.9997 7.89015 20.7362 9.1034 21.2388C10.3167 21.7413 11.617 22 12.9302 22C15.5824 22 18.1259 20.9464 20.0013 19.0711C21.8767 17.1957 22.9302 14.6522 22.9302 12C22.9302 10.6868 22.6716 9.38642 22.169 8.17317C21.6665 6.95991 20.9299 5.85752 20.0013 4.92893C19.0727 4.00035 17.9703 3.26375 16.7571 2.7612C15.5438 2.25866 14.2435 2 12.9302 2ZM12.9302 20C10.8085 20 8.77367 19.1571 7.27338 17.6569C5.77309 16.1566 4.93024 14.1217 4.93024 12C4.90024 11.7141 4.90024 11.4259 4.93024 11.14C7.31218 10.0978 9.19753 8.173 10.1902 5.77C11.1121 7.0771 12.3345 8.1436 13.7546 8.87972C15.1746 9.61585 16.7507 10.0001 18.3502 10C19.1102 10 19.8602 9.91 20.6002 9.74C21.8502 14 19.4302 18.43 15.1902 19.67C14.4302 19.89 13.6902 20 12.9302 20ZM0.930237 2C0.930237 1.46957 1.14095 0.960859 1.51602 0.585786C1.8911 0.210714 2.3998 0 2.93024 0L6.93024 0V2H2.93024V6H0.930237V2ZM24.9302 22C24.9302 22.5304 24.7195 23.0391 24.3444 23.4142C23.9694 23.7893 23.4607 24 22.9302 24H18.9302V22H22.9302V18H24.9302V22ZM2.93024 24C2.3998 24 1.8911 23.7893 1.51602 23.4142C1.14095 23.0391 0.930237 22.5304 0.930237 22V18H2.93024V22H6.93024V24H2.93024ZM22.9302 0C23.4607 0 23.9694 0.210714 24.3444 0.585786C24.7195 0.960859 24.9302 1.46957 24.9302 2V6H22.9302V2H18.9302V0H22.9302Z"
                                                fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_6_70">
                                                <rect width="24" height="24" fill="white"
                                                    transform="translate(0.930237)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>

                            <li class=" font-semibold">
                                <a href="{{ route('login') }}"
                                    class=" py-1 rounded-sm border-2 border-gray-100 px-7 ml-5 flex">
                                    <span class=" mr-2">Login</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <div
                        class=" pt-14 md:pt-24 container mx-auto xl:max-w-screen-xl lg:max-w-screen-lg px-4 sm:px-8 lg:px-10">
                        <div class=" grid-cols-1 md:grid-cols-12 lg:grid items-start gap-8 mb-20">
                            <div class=" lg:col-span-8 col-span-12">
                                <div class=" rounded-sm py-2 px-7 bg-gray-400 inline text-center mb-10 text-gray-800">
                                    #bitcoin #ethereum #tether</div>
                                <h1 class=" text-6xl md:text-8xl font-semibold text-gray-10 mt-[28px]">Earn while you
                                    <span class=" text-secondary">Hodl</span>
                                </h1>
                                <div class="gri grid-cols-1">
                                    <div class="col-span-">
                                        <div class="flex items-center gap-6">
                                            <div class="w-1/2">
                                                <div class=" h-[0.1px] bg-gray-400"></div>
                                            </div>

                                            <div class="">
                                                <h4
                                                    class=" text-lg text-gray-200 pt-[38px] leading-relaxed font-semibol">
                                                    Leveraging advancements in research and development to deliver
                                                    sustainable investment results in the blockchain space through all
                                                    market conditions.</h4>
                                                <a href="{{ route('register') }}"
                                                    class=" z-10 relative mt-8 inline-flex py-1 rounded-sm bg-secondary border-2 border-transparent px-4 text-gray-900">
                                                    <span class=" mr-2 font-bold">Get Started</span>
                                                    <div class="w-6 h-6 rounded-ful bg-whit p-1 flex items-center">
                                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M1 7.99999C1 7.86738 1.05268 7.74021 1.14645 7.64644C1.24021 7.55267 1.36739 7.49999 1.5 7.49999H13.293L10.146 4.35399C10.0521 4.2601 9.99937 4.13277 9.99937 3.99999C9.99937 3.86721 10.0521 3.73988 10.146 3.64599C10.2399 3.5521 10.3672 3.49936 10.5 3.49936C10.6328 3.49936 10.7601 3.5521 10.854 3.64599L14.854 7.64599C14.9006 7.69244 14.9375 7.74761 14.9627 7.80836C14.9879 7.8691 15.0009 7.93422 15.0009 7.99999C15.0009 8.06576 14.9879 8.13088 14.9627 8.19162C14.9375 8.25237 14.9006 8.30754 14.854 8.35399L10.854 12.354C10.7601 12.4479 10.6328 12.5006 10.5 12.5006C10.3672 12.5006 10.2399 12.4479 10.146 12.354C10.0521 12.2601 9.99937 12.1328 9.99937 12C9.99937 11.8672 10.0521 11.7399 10.146 11.646L13.293 8.49999H1.5C1.36739 8.49999 1.24021 8.44731 1.14645 8.35354C1.05268 8.25978 1 8.1326 1 7.99999Z"
                                                                fill="black" />
                                                        </svg>

                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                {{-- <div class=" absolute bottom-0 z-0 left-0 h-72 w-72 bg-yellow-500 opacity-75 backdrop-blurxl roundd-md"
                                    style="filter: blur(150px)"></div> --}}

                            </div>
                            <div class=" xl:col-span-6 hidden lg:block md:col-span-6 relative">
                                {{-- <img class=" z-10" src="{{ asset('images/arbfi.svg') }}" alt=""> --}}
                                {{-- <div class=" absolute top-0 left-0 h-full w-full bg-seconary opacity-75 backdrop-blurxl rounded-md border-2 border-gray-500"
                                        style="background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(8px)"></div> --}}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <p class="text-lg">Hey</p> --}}
            </div>

            <section class=" py-20 mx-auto xl:max-w-screen-xl lg:max-w-screen-lg px-4 sm:px-8 lg:px-10">
                <div class=" grid grid-cols-2 md:grid-cols-4 gap-6 items-end">
                    <div class=" col-span-">
                        <div class=" px-5 min-h-[7rem] flex border border-gray-300 rounded-md bg-gray-100">
                            <img class=" w-full" src="{{ asset('images/bitfinex.svg') }}" alt="">
                        </div>
                    </div>

                    <div class=" col-span-">
                        <div class=" px-5 min-h-[7rem] flex border border-gray-300 rounded-md bg-gray-100">
                            <img class=" w-full" src="{{ asset('images/bitstamp.svg') }}" alt="">
                        </div>
                    </div>

                    <div class=" col-span-">
                        <div class=" px-5 min-h-[7rem] flex border border-gray-300 rounded-md bg-gray-100">
                            <img class=" w-full" src="{{ asset('images/coinbase.svg') }}" alt="">
                        </div>
                    </div>

                    <div class=" col-span-">
                        <div class=" px-5 min-h-[7rem] flex border border-gray-300 rounded-md bg-gray-100">
                            <img class=" w-full" src="{{ asset('images/huobi-global.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class=" py-20 mx-auto xl:max-w-screen-xl lg:max-w-screen-lg px-4 sm:px-8 lg:px-10">
                <div class=" md:grid grid-cols-12 gap-6 xl:gap-16">
                    <div class=" col-span-4">
                        <div class=" p-5 lg:p-8 border-2 border-gray-300 rounded-sm min-h-full">
                            <div class=" p-2 bg-primary inline-block rounded-md">
                                <svg width="38" height="38" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14 18C14.9193 18 15.8295 17.8189 16.6788 17.4672C17.5281 17.1154 18.2997 16.5998 18.9497 15.9497C19.5998 15.2997 20.1154 14.5281 20.4672 13.6788C20.8189 12.8295 21 11.9193 21 11C21 10.0807 20.8189 9.17049 20.4672 8.32122C20.1154 7.47194 19.5998 6.70026 18.9497 6.05025C18.2997 5.40024 17.5281 4.88463 16.6788 4.53284C15.8295 4.18106 14.9193 4 14 4C12.1435 4 10.363 4.7375 9.05025 6.05025C7.7375 7.36301 7 9.14348 7 11C7 12.8565 7.7375 14.637 9.05025 15.9497C10.363 17.2625 12.1435 18 14 18V18ZM34 18C34.9193 18 35.8295 17.8189 36.6788 17.4672C37.5281 17.1154 38.2997 16.5998 38.9497 15.9497C39.5998 15.2997 40.1154 14.5281 40.4672 13.6788C40.8189 12.8295 41 11.9193 41 11C41 10.0807 40.8189 9.17049 40.4672 8.32122C40.1154 7.47194 39.5998 6.70026 38.9497 6.05025C38.2997 5.40024 37.5281 4.88463 36.6788 4.53284C35.8295 4.18106 34.9193 4 34 4C32.1435 4 30.363 4.7375 29.0503 6.05025C27.7375 7.36301 27 9.14348 27 11C27 12.8565 27.7375 14.637 29.0503 15.9497C30.363 17.2625 32.1435 18 34 18V18Z"
                                        stroke="#F1F1F1" stroke-width="4" stroke-linejoin="round" />
                                    <path d="M4 44V35C4 29.477 7.77 25 12.421 25H17.474C21.559 25 24 29.027 24 29.027"
                                        stroke="#F1F1F1" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M44 44V35C44 29.477 40.185 25 35.478 25H30.366C26.405 25 23.992 29.027 24 29.027M11 40H38"
                                        stroke="#F1F1F1" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M34.295 36.2581L35.535 37.5051L38.015 40.0001L35.535 42.5611L34.295 43.8421M14.33 36.2321L13.07 37.4861L10.552 39.9931L13.07 42.5411L14.33 43.8161"
                                        stroke="#F1F1F1" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>

                            <div class="mt-2 text-2xl text-primary font-black">
                                <h3>Mission</h3>
                            </div>

                            <div class="mt-8">
                                <p class=" text-sm leading-7">
                                    Delivering a steady yield of uncorrelated returns within a disciplined risk
                                    management framework through the application of the scientific method to the field
                                    of digital investment management.
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class=" col-span-4">
                        <div class=" p-5 lg:p-8 rounded-sm bg-primar text-gray-20 min-h-full">
                            <div class=" p-2 bg-white inline-block rounded-md">
                                <svg width="38" height="38" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22 12C24.76 12 27.26 13.12 29.08 14.92L24 20H36V8.00002L31.9 12.1C30.6015 10.7979 29.0583 9.76533 27.3593 9.0617C25.6603 8.35807 23.8389 7.99726 22 8.00002C14.94 8.00002 9.14 13.22 8.16 20H12.2C12.6611 17.7413 13.8884 15.7112 15.6742 14.2534C17.46 12.7956 19.6947 11.9995 22 12ZM33.28 30.28C34.6432 28.4326 35.5231 26.2739 35.84 24H31.8C31.3389 26.2587 30.1116 28.2888 28.3258 29.7466C26.54 31.2044 24.3053 32.0005 22 32C19.24 32 16.74 30.88 14.92 29.08L20 24H8V36L12.1 31.9C13.3985 33.2021 14.9417 34.2347 16.6407 34.9383C18.3397 35.642 20.1611 36.0028 22 36C25.1 36 27.96 34.98 30.28 33.28L40 42.98L42.98 40L33.28 30.28Z"
                                        fill="#0E2A62" />
                                </svg>

                            </div>

                            <div class="mt-2 text-2xl font-black">
                                <h3>Investment Philosophy</h3>
                            </div>

                            <div class="mt-8">
                                <p class=" text-sm leading-7">
                                    With the rapid flux in global economic reality, a risk aware and dynamic investment
                                    approach rooted in advanced research and technology is needed to stay ahead.
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class=" col-span-4">
                        <div class=" p-5 lg:p-8 border-2 border-gray-300 rounded-sm min-h-full">
                            <div class=" p-2 bg-primary inline-block rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="white"
                                        d="m21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58s1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41s-.23-1.06-.59-1.42zM13 20.01L4 11V4h7v-.01l9 9l-7 7.02z" />
                                    <circle cx="6.5" cy="6.5" r="1.5" fill="white" />
                                </svg>

                            </div>

                            <div class="mt-2 text-2xl text-primary font-black">
                                <h3>Offering</h3>
                            </div>

                            <div class="mt-8">
                                <p class=" text-sm leading-7">
                                    An active risk managed service that outperforms in both bull and bear markets by
                                    exploiting a range of arbitrage opportunities that exist across digital markets.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class=" py-20 mx-auto xl:max-w-screen-xl lg:max-w-screen-lg px-4 sm:px-8 lg:px-10">
                <div class="mb-20">
                    <h5 class=" uppercase text-sm mb-5 font-bold text-secondary">COVERED IN THESE AREAS</h5>
                    <h2 class=" text-5xl font-extrabold text-primary">Services We Provide</h2>
                </div>
                <div class=" grid grid-cols-1 md:grid-cols-12 gap-6 xl:gap-16">
                    <div class=" col-span-4 shadow-lg">
                        <div class=" p-5 lg:p-8 border-b-4 border-secondary rounded-x min-h-full">
                            <div class=" p-2 inline-block rounded-full border-2 border-secondary border-dashed">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_55_89)">
                                        <path
                                            d="M22.77 30.5499C24.992 30.5419 29.85 30.5239 29.794 27.4339C29.74 24.2739 25.074 24.4639 22.8 24.5579C22.546 24.5679 22.32 24.5779 22.136 24.5799L22.24 30.5539C22.39 30.5499 22.57 30.5499 22.77 30.5499ZM22.534 21.8439C24.388 21.8419 28.434 21.8379 28.386 19.0279C28.334 16.1539 24.448 16.3239 22.55 16.4079C22.336 16.4179 22.15 16.4259 21.994 16.4279L22.088 21.8459L22.534 21.8439Z"
                                            fill="black" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M18.192 47.282C31.052 50.488 44.076 42.662 47.282 29.806C50.488 16.948 42.66 3.92399 29.8 0.719987C16.948 -2.48801 3.92402 5.33999 0.720025 18.2C-2.48598 31.056 5.34002 44.08 18.194 47.284L18.192 47.282ZM26.756 13.242C30.264 13.49 33.056 14.518 33.422 17.726C33.694 20.074 32.734 21.504 31.176 22.332C33.776 22.908 35.426 24.418 35.166 27.874C34.844 32.164 31.67 33.37 27.114 33.71L27.19 38.21L24.478 38.26L24.4 33.82C23.698 33.832 22.978 33.84 22.232 33.836L22.312 38.296L19.6 38.344L19.52 33.836L18.754 33.842C18.366 33.844 17.974 33.846 17.582 33.854L14.05 33.914L14.532 30.666C14.532 30.666 16.54 30.662 16.504 30.632C17.272 30.616 17.466 30.062 17.508 29.714L17.386 22.6L17.58 22.596H17.672C17.5764 22.585 17.4802 22.5804 17.384 22.582L17.296 17.502C17.182 16.954 16.814 16.322 15.716 16.342C15.746 16.302 13.744 16.376 13.744 16.376L13.692 13.48L17.436 13.416V13.43C17.998 13.42 18.576 13.4 19.162 13.378L19.086 8.91999L21.798 8.87399L21.874 13.242C22.598 13.216 23.326 13.188 24.04 13.176L23.964 8.83599L26.678 8.78799L26.756 13.246V13.242Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_55_89">
                                            <rect width="48" height="48" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </div>

                            <div class="mt-10 text-2xl text-primary font-black">
                                <h3>BTC Yield</h3>
                            </div>

                            <div class="mt-3">
                                <p class=" text-sm leading-7">
                                    An innovative way of earning a sustainable stream of bitcoin profits monthly.
                                    Designed for bitcoin “HODLERS”, investors who hold bitcoin through all market
                                    conditions as a store of wealth. A straightforward means of growing your Bitcoin
                                    portfolio.
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class=" col-span-4">
                        <div class=" p-5 lg:p-8 rounded-x min-h-full">
                            <div class=" p-2 inline-block rounded-full border-2 border-secondary border-dashed">
                                <svg width="48" height="48" viewBox="0 0 30 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_55_94)">
                                        <path
                                            d="M14.8408 48L14.5167 46.9065V15.1749L14.8408 14.8538L29.6818 23.5603L14.8408 48Z"
                                            fill="#343434" />
                                        <path d="M14.841 48L0 23.5603L14.841 14.8536V30.2552V48Z" fill="#8C8C8C" />
                                        <path
                                            d="M14.8408 12.0648L14.6582 11.8438V0.540321L14.8408 0.0107079L29.6906 20.767L14.8408 12.0648Z"
                                            fill="#3C3C3B" />
                                        <path d="M14.841 0.0109539V12.0651L0 20.7672L14.841 0.0109539Z"
                                            fill="#8C8C8C" />
                                        <path d="M14.8408 14.8538L29.6816 23.5602L14.8408 30.2551V14.8538Z"
                                            fill="#141414" />
                                        <path d="M0.00012207 23.5602L14.8408 14.8538V30.2551L0.00012207 23.5602Z"
                                            fill="#393939" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_55_94">
                                            <rect width="29.6907" height="48" fill="white"
                                                transform="matrix(1 0 0 -1 0 48)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>

                            <div class="mt-10 text-2xl text-primary font-black">
                                <h3>ETH Yield</h3>
                            </div>

                            <div class="mt-3">
                                <p class=" text-sm leading-7">
                                    A risk managed service designed to earn ethereum as profit through a range of market
                                    arbitrage strategies. A sustainable way for long term ethereum investors to grow
                                    their portfolios using short term profits that compound over time.
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class=" col-span-4">
                        <div class=" p-5 lg:p-8 rounded-x min-h-full">
                            <div class=" p-2 inline-block rounded-full border-2 border-secondary border-dashed">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24 48C10.7445 48 0 37.2555 0 24C0 10.7445 10.7445 0 24 0C37.2555 0 48 10.7445 48 24C48 37.2555 37.2555 48 24 48ZM26.883 20.6895V17.1405H35.004V11.7285H12.8925V17.1405H21.0135V20.688C14.4135 20.991 9.45 22.299 9.45 23.865C9.45 25.431 14.4135 26.7375 21.0135 27.042V38.415H26.883V27.039C33.4725 26.736 38.424 25.4295 38.424 23.865C38.424 22.3005 33.4725 20.994 26.883 20.6895ZM26.883 26.0745V26.0715C26.718 26.0835 25.8675 26.1345 23.97 26.1345C22.455 26.1345 21.3885 26.0895 21.0135 26.0715V26.076C15.1815 25.8195 10.8285 24.804 10.8285 23.589C10.8285 22.3755 15.1815 21.36 21.0135 21.099V25.065C21.3945 25.092 22.4865 25.1565 23.9955 25.1565C25.806 25.1565 26.7135 25.0815 26.883 25.0665V21.102C32.703 21.3615 37.0455 22.377 37.0455 23.589C37.0455 24.804 32.703 25.8165 26.883 26.0745Z"
                                        fill="black" />
                                </svg>

                            </div>

                            <div class="mt-10 text-2xl text-primary font-black">
                                <h3>Stable-USD Yield</h3>
                            </div>

                            <div class="mt-3">
                                <p class=" text-sm leading-7">
                                    A service that provides a robust hedge to the volatility of the digital asset
                                    market. Designed to provide near consistent profits denominated in dollars
                                    irrespective of market conditions. Suitable for all investors including investors
                                    who do already have exposure to BTC or ETH.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            {{-- <section class=" py-20 mx-auto xl:max-w-screen-xl lg:max-w-screen-lg px-4 sm:px-8 lg:px-10">
                <div class="mb-14">
                    <h5 class=" uppercase text-sm mb-5 font-bold">ABOUT US</h5>
                </div>
                <div class=" md:grid grid-cols-12 gap-12 xl:gap-24">
                    <div class=" col-span-6">
                        <p class=" text-sm leading-7">
                            Arbitrage Finance is a dedicated digital asset investment manager. Our mission is to create
                            a
                            top notch investment service that helps high-net worth individuals, family offices, and
                            institutional investors achieve exposure in the crypto market by deploying capital in
                            digital
                            financial products on all accredited cryptocurrency exchanges globally.
                        </p> <br>

                        <p class=" text-sm leading-7">
                            We create services that help our investors earn exposure to quantitative arbitrage
                            investment
                            strategies , including a dedicated and systematic market neutral investment program covering
                            all
                            major digital asset classes including, Spot, Futures, Options , NFTs, and Defi Tokens.
                        </p>
                    </div>

                    <div class=" col-span-6">
                        <img src="{{ asset('images/cubes.svg') }}" class=" h-full w-full" alt="">
                    </div>
                </div>
            </section> --}}

            <section
                class=" py- mx-auto xl:max-w-screen-x lg:max-w-screen-l bg-gradient-to-r from-primary to-primary-700">
                <div class="grid grid-cols-1 lg:grid-cols-12">
                    <div class="col-span-6">
                        <div class=" px-4 sm:px-8 py-20 lg:p-32 text-gray-100">
                            <div class="mb-10">
                                <h4 class=" capitalize text-3xl mb-5 font-bold text-secondary">About Us</h4>
                            </div>
                            <p class=" text-s leading-7">
                                Blockarb is committed to delivering an exceptional investment service, catering to
                                individual,
                                family office, and institutional investors seeking exposure in the digital assets
                                market. Our
                                core mission revolves around the prudent deployment of capital in digital asset markets,
                                all
                                while prioritizing the protection of investor capital from the inherent volatility of
                                the space.
                            </p> <br>

                            <p class=" text-s leading-7">
                                At blockarb , we employ state-of-the-art technology to execute a straightforward yet
                                potent
                                strategy. We capitalize on price variations across exchanges through arbitrage trading,
                                consistently delivering returns while safeguarding portfolios from market oscillations.
                                Blockarb distinguishes itself by offering investors unrestricted access to their
                                capital, free
                                from any encumbrances such as penalties or restrictions. This empowers our clients to
                                make
                                agile decisions in response to emerging market opportunities.
                            </p>
                        </div>
                    </div>
                    <div class="col-span-6 hidden lg:block">
                        <img class=" h-full object-cover" src="{{ asset('images/about.jpg') }}" alt="">
                    </div>
                </div>
            </section>

            <section class=" py- mx-auto xl:max-w-screen-x lg:max-w-screen-l bg-gray-100">
                <div class="grid grid-cols-1 lg:grid-cols-12">
                    <div class="col-span-6 hidden lg:block">
                        <img class=" h-full object-cover" src="{{ asset('images/what.jpg') }}" alt="">
                    </div>

                    <div class="col-span-6">
                        <div class=" px-4 sm:px-8 py-20 lg:px-40 text-gray-10 m-auto">
                            <div class="mb-10">
                                <h4 class="text-3xl mb-5 font-bold text-primary capitalize">Do you know that</h4>
                            </div>

                            <p class=" text-s leading-7">
                                Harnessing the power of compounding returns over time offers the potential to build a
                                significant portfolio while simultaneously mitigating the risk to your initial
                                investment capital.
                                Blockarb not only facilitates direct compounding of returns but also provides investors
                                with
                                unrestricted access to their capital, empowering them to effectively manage and mitigate
                                risks.

                            </p>

                            <a href="{{ route('company') }}"
                                class=" bg-secondary text-gray-900 py-2 px-7 font-bold inline-block mt-7">Read
                                Our Story</a>

                        </div>
                    </div>
                </div>
            </section>

            {{-- <section class=" py-20 mx-auto xl:max-w-screen-xl lg:max-w-screen-lg px-4 sm:px-8 lg:px-10">
                <div class=" md:grid grid-cols-12 gap-12 xl:gap-24">

                    <div class=" col-span-6">
                        <img src="{{ asset('images/abstract.svg') }}" class=" h-full w-full" alt="">
                    </div>

                    <div class=" col-span-6">
                        <div class="mb-10">
                            <h5 class=" uppercase text-sm mb-5 font-bold">DO YOU KNOW THAT</h5>
                        </div>

                        <p class=" text-sm leading-7">
                            We work with entrepreneurs, corporate executives, angel investors, private wealth managers,
                            and
                            other high-net worth individuals who need to outsource the investment management process.
                            When
                            managing investments on behalf of high networth individual(HNWI) investors, we work closely
                            with
                            them to understand their investment goals, current financial situation and present to them
                            our
                            products that suit their taste as they choose.
                        </p>

                        <a href=""
                            class=" bg-secondary py-2 px-7 rounded-full font-bold inline-block mt-7">Read
                            Our Story</a>
                    </div>
                </div>
            </section> --}}

            <section
                class=" py-20 mx-auto xl:max-w-screen-xl lg:max-w-screen-lg px-4 sm:px-8 lg:px-10 bg-primar rounded-lg">
                <div class=" md:grid grid-cols-12 gap-12 xl:gap-24">

                    <div class=" col-span-5">
                        <div class="mb-10">
                            <h5 class=" uppercase text-sm mb-5 font-bold text-secondary ">WHAT HAVE WE DONE</h5>
                            <h2 class=" text-5xl text-primary font-extrabold ">Our Success Story</h2>
                        </div>

                        <div class=" grid grid-cols-1 md:grid-cols-12 gap-2">
                            <div class=" col-span-6">
                                <div class=" bg-secondary p-5 inline-block min-w-full min-h-full">
                                    <p class=" text-3xl font-bold text-primary pb-3">3,000+</p>
                                    <p class=" text-base font-bold">All time Clients</p>
                                </div>
                            </div>

                            <div class=" col-span-6">
                                <div class=" bg-secondary p-5 inline-block min-w-full min-h-full">
                                    <p class=" text-3xl font-bold text-primary pb-3">500</p>
                                    <p class=" text-base font-bold">Clients this year</p>
                                </div>
                            </div>

                            <div class=" col-span-6">
                                <div class=" bg-secondary p-5 inline-block min-w-full min-h-full">
                                    <p class=" text-3xl font-bold text-primary pb-3">300</p>
                                    <p class=" text-base font-bold">New Projects</p>
                                </div>
                            </div>

                            <div class=" col-span-6">
                                <div class=" bg-secondary p-5 inline-block min-w-full min-h-full">
                                    <p class=" text-3xl font-bold text-primary pb-3">86.841%</p>
                                    <p class=" text-base font-bold">Average Profits Increased</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class=" col-span-7">
                        <img src="{{ asset('images/world.svg') }}" class=" h-full w-full hidden lg:block"
                            alt="">
                    </div>
                </div>
            </section>

            <section class="  bg-gradient-to-r from-primary to-primary-700">
                <div class="lg:max-w-screen-lg xl:max-w-screen-xl px-4 sm:px-8 lg:px-10 mx-auto">
                    <div class=" py-28 text-white">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 lg:col-span-9">
                                <div class="flex items-center gap-6">
                                    <div class=" bg-gray-400 h-[1px] w-44 "></div>
                                    <h3 class=" capitalize text-secondary-500 text-4xl lg:text-6xl font-bold">We are
                                        good at what
                                        we do
                                    </h3>
                                </div>
                                <h5 class=" text-gray-200 mt-5 text-lg">With a relentless investment into research, we
                                    are
                                    always equipped with the
                                    right data to develop tailor made solutions and products best suited to an ever
                                    changing
                                    financial landscape.</h5>
                            </div>
                        </div>
                        <div class=" grid grid-cols-1 md:grid-cols-2 gap-24 mt-20 text-gray-700">
                            <div class=" bg-white py-8 px-14 rounded-sm">
                                <svg width="38" height="38" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22 12C24.76 12 27.26 13.12 29.08 14.92L24 20H36V8.00002L31.9 12.1C30.6015 10.7979 29.0583 9.76533 27.3593 9.0617C25.6603 8.35807 23.8389 7.99726 22 8.00002C14.94 8.00002 9.14 13.22 8.16 20H12.2C12.6611 17.7413 13.8884 15.7112 15.6742 14.2534C17.46 12.7956 19.6947 11.9995 22 12ZM33.28 30.28C34.6432 28.4326 35.5231 26.2739 35.84 24H31.8C31.3389 26.2587 30.1116 28.2888 28.3258 29.7466C26.54 31.2044 24.3053 32.0005 22 32C19.24 32 16.74 30.88 14.92 29.08L20 24H8V36L12.1 31.9C13.3985 33.2021 14.9417 34.2347 16.6407 34.9383C18.3397 35.642 20.1611 36.0028 22 36C25.1 36 27.96 34.98 30.28 33.28L40 42.98L42.98 40L33.28 30.28Z"
                                        fill="#0E2A62" />
                                </svg>

                                <h5 class=" text-xl mt-8 font-semibold uppercase">Quantitative Research</h5>
                                <p class=" mt-3">
                                    With a relentless investment into research, we are always equipped with the right
                                    data
                                    to develop tailor made solutions and products best suited to an ever changing
                                    financial
                                    landscape.
                                </p>
                            </div>

                            <div class=" bg-white py-8 px-14 rounded-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 2048 2048">
                                    <path fill="#0e2a62"
                                        d="M960 131q-128 9-245 53T498 300T320 470T194 687L73 648q54-138 144-252t205-199T675 63T960 3v128zm894 556q-48-118-126-216t-178-171t-217-116t-245-53V3q148 9 285 59t252 135t206 198t145 253l-122 39zM128 1024q0 99 21 194t63 183t100 166t135 142l-75 104q-88-73-157-162T98 1460t-73-211t-25-225q0-65 8-128t25-127l122 40q-13 53-20 107t-7 108zm1887-255q16 63 24 126t9 129q0 115-25 225t-73 211t-117 190t-157 163l-75-104q76-64 135-142t100-165t62-183t22-195q0-54-7-108t-20-107l122-40zm-991 1151q127 0 246-34t227-102l75 103q-123 79-262 120t-286 41q-146 0-285-41t-263-120l75-103q107 67 226 101t247 35z" />
                                </svg>

                                <h5 class=" text-xl mt-8 font-semibold uppercase">Technology</h5>
                                <p class=" mt-3">
                                    Advancement in technology plays a great role in staying ahead of the times.
                                    Innovation plays a huge role in the funds ability to deliver the time tested profit
                                    it has come to be known with
                                </p>
                            </div>

                            <div class=" bg-white py-8 px-14 rounded-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                    <g fill="none">
                                        <rect width="36" height="14" x="6" y="28"
                                            stroke="#0e2a62" stroke-width="4" rx="4" />
                                        <path stroke="#0e2a62" stroke-linecap="round" stroke-width="4"
                                            d="M20 7H10a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h10" />
                                        <circle cx="34" cy="14" r="8" stroke="#0e2a62"
                                            stroke-width="4" />
                                        <circle cx="34" cy="14" r="3" fill="#0e2a62" />
                                    </g>
                                </svg>

                                <h5 class=" text-xl mt-8 font-semibold uppercase">Risk Management</h5>
                                <p class=" mt-3">
                                    A strict adherence to risk management not only guarantees that one does not give
                                    back profits to the market but also creates the perfect environment for asymmetric
                                    capital deployment and management.
                                </p>
                            </div>

                            <div class=" bg-white py-8 px-14 rounded-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="#0e2a62"
                                        d="M4 19v-2h16v2Zm0-4v-2h16v2Zm0-4V8.65L10 5l5 3.55L20 5v2.45L15 11L9.925 7.4Z" />
                                </svg>

                                <h5 class=" text-xl mt-8 font-semibold uppercase">Talent</h5>
                                <p class=" mt-3">
                                    We believe that diverse teams with complementary strengths are critical to
                                    sustainable success hence our dedicated investment into seeking, developing and
                                    managing talent from across the globe to manage our services.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="grid grid-cols-12">
                    <div class="col-span-6">
                        <div class=" px-4 sm:px-8 py-10 lg:px-40 text-gray-100">
                            <div class="mb-14">
                                <h5 class=" uppercase text-sm mb-5 font-bold">ABOUT US</h5>
                            </div>
                            <p class=" text-s leading-7">
                                Arbitrage Finance is a dedicated digital asset investment manager. Our mission is to
                                create
                                a
                                top notch investment service that helps high-net worth individuals, family offices, and
                                institutional investors achieve exposure in the crypto market by deploying capital in
                                digital
                                financial products on all accredited cryptocurrency exchanges globally.
                            </p> <br>

                            <p class=" text-s leading-7">
                                We create services that help our investors earn exposure to quantitative arbitrage
                                investment
                                strategies , including a dedicated and systematic market neutral investment program
                                covering
                                all
                                major digital asset classes including, Spot, Futures, Options , NFTs, and Defi Tokens.
                            </p>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <img src="{{ asset('images/about.jpg') }}" alt="">
                    </div>
                </div> --}}
            </section>

            <section class=" py-20 mx-auto xl:max-w-screen-xl lg:max-w-screen-lg px-4 sm:px-8 lg:px-10">
                <div class="mb-20">
                    <div class="">
                        <h4 class=" text-5xl mb-5 font-bold text-primary">Our Investment Process</h4>
                        <div class="grid grid-cols-1 lg:grid-cols-12">
                            <div class=" lg:col-span-6">
                                <p class=" text-s">BlockArb has a thorough and detailed investment process. The
                                    investment process is divided into 6 phases</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" lg:max-w-3xl xl:max-w-4xl mx-auto">
                    <div class=" grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-12">
                        <div class=" p-10">
                            <div>
                                <img class=" w-1/3" src="{{ asset('images/processing.svg') }}" alt="">
                            </div>
                            <div class="mt-10">
                                <h2 class=" font-bold text-2xl mb-3">Data Collection</h2>
                                <p class=" mb-5 text-sm">In the first phase of our investment process we collect data
                                    from
                                    a
                                    variety
                                    of traditional and alternative sources.</p>
                                <a href="" class=" text-sm text-blue-600">Read More</a>
                            </div>
                        </div>

                        <div class=" p-10">
                            <div>
                                <img class=" w-1/3" src="{{ asset('images/financial.svg') }}" alt="">
                            </div>
                            <div class="mt-10">
                                <h2 class=" font-bold text-2xl mb-3">Data Cleaning</h2>
                                <p class=" mb-5 text-sm">We use proprietary automated algorithms to clean the vast
                                    amounts
                                    of data at our disposal.</p>
                                <a href="" class=" text-sm text-blue-600">Read More</a>
                            </div>
                        </div>

                        <div class=" p-10">
                            <div>
                                <img class=" w-1/3" src="{{ asset('images/analysis.svg') }}" alt="">
                            </div>
                            <div class="mt-10">
                                <h2 class=" font-bold text-2xl mb-3">Data Analysis</h2>
                                <p class=" mb-5 text-sm">Our quantitative researchers analyze the data sets processed
                                    in
                                    the previous step using sophisticated and advanced statistical methods</p>
                                <a href="" class=" text-sm text-blue-600">Read More</a>
                            </div>
                        </div>

                        <div class=" p-10">
                            <div>
                                <img class=" w-1/3" src="{{ asset('images/backtesting.svg') }}" alt="">
                            </div>
                            <div class="mt-10">
                                <h2 class=" font-bold text-2xl mb-3">Backtesting</h2>
                                <p class=" mb-5 text-sm">After the data has been thoroughly analyzed, our quants apply
                                    the
                                    scientific method to the financial data</p>
                                <a href="" class=" text-sm text-blue-600">Read More</a>
                            </div>
                        </div>

                        <div class=" p-10">
                            <div>
                                <img class=" w-1/3" src="{{ asset('images/pilot.svg') }}" alt="">
                            </div>
                            <div class="mt-10">
                                <h2 class=" font-bold text-2xl mb-3">Pilot Test</h2>
                                <p class=" mb-5 text-sm">After backtesting, we test them in a pilot live production
                                    environment with proprietary capital for a suitable period of time before offering
                                    them
                                    to our clients.</p>
                                <a href="" class=" text-sm text-blue-600">Read More</a>
                            </div>
                        </div>

                        <div class=" p-10">
                            <div>
                                <img class=" w-1/3" src="{{ asset('images/production.svg') }}" alt="">
                            </div>
                            <div class="mt-10">
                                <h2 class=" font-bold text-2xl mb-3">Production</h2>
                                <p class=" mb-5 text-sm">Having confirmed that pilot trading returns are consistent
                                    with
                                    the backtest and what we expected, our investment team allows our clients to invest
                                    in
                                    the new investment product.</p>
                                <a href="" class=" text-sm text-blue-600">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class=" bg-clients bg-cover h-scree relative ">
                <div
                    class="absolute top-0 bg-gradient-to-r from-primary opacity-90 to-primary-700 left-0 w-full h-full -z-0">
                </div>
                <div class="py-20 mx-auto lg:max-w-screen-lg px-4 sm:px-8 lg:px-10 text-gray-100">
                    <div class="grid grid-cols-12 relative z-0">
                        <div class=" col-span-10">
                            <h3 class=" text-8xl">Our <span class=" text-secondary">Clients</span></h3>
                            <h5 class=" mt-14 text-lg leading-relaxed">
                                We work with entrepreneurs, corporate executives, angel investors, private wealth
                                managers, and other high-net worth individuals who need to outsource the investment
                                management process. When managing investments on behalf of high networth
                                individual(HNWI) investors, we work closely with them to understand their investment
                                goals, current financial situation and present to them our products that suit their
                                taste as they choose.
                            </h5>
                        </div>
                    </div>
                </div>
            </section>

            <section class=" py-20 bg-gray-100 ">
                <div class="mx-auto xl:max-w-screen-xl lg:max-w-screen-lg px-4 sm:px-8 lg:px-10">
                    <div class=" grid grid-cols-1 md:grid-cols-2 gap-12">
                        <div class=" text-gray-00">
                            <div class=" mb-10">
                                <h3 class=" font-bold text-5xl text-primary">Have an Inquiry?</h3>
                                <h5 class="text-base mt-5">Drop a Message</h5>
                            </div>

                            <form action="">
                                <div class=" pb-12">
                                    <label for="name" />
                                    <input type="text"
                                        class=" bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b-2"
                                        placeholder="Name">
                                </div>

                                <div class=" pb-12">
                                    <label for="email" />
                                    <input type="email"
                                        class=" bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b-2"
                                        placeholder="Email">
                                </div>

                                <div class=" pb-12">
                                    <label for="name" />
                                    <textarea
                                        class=" w-full bg-transparent border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b-2"
                                        placeholder="Write your message here..." name="message" id="message" cols="30" rows="5"></textarea>
                                    {{-- <input type="text"
                                            class=" bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b-2"
                                            placeholder="Name"> --}}
                                </div>

                                <a href=""
                                    class=" bg-secondary py-2 px-5 text-gray-800 rounded-sm mt-5 font-bold">Submit</a>
                            </form>
                        </div>

                        <div>
                            <img src="{{ asset('images/inquiry.svg') }}" alt="inquiry">
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>

    <footer class=" pt-20 bg-primar text-gray-20">
        <div class=" mx-auto xl:max-w-screen-xl lg:max-w-screen-lg px-4 sm:px-8 lg:px-10 pb-20">
            <div class=" grid grid-cols-1 md:grid-cols-3 gap-24">
                <div class="">
                    <img class=" w-40 lg:w-52" src="{{ asset('logo-b1.svg') }}" alt="">
                    <p class=" mt-5 text-sm">Prospective Investors should read the entire website terms and
                        conditions
                        and
                        consult with any other investment advisors and tax advisors before making any decision
                        concerning an investment in the fund</p>
                    <div class="flex gap-4 mt-5 text-secondary">
                        <div>
                            <a target="_blank" href="https://www.linkedin.com/company/blockarb">
                                <svg width="24" height="24" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.0005 10.4635H15.3335V12.6218C15.9576 11.3805 17.5583 10.2652 19.9628 10.2652C24.5723 10.2652 25.6666 12.7362 25.6666 17.2698V25.6663H21V18.3023C21 15.7205 20.3758 14.2645 18.7868 14.2645C16.583 14.2645 15.6671 15.8337 15.6671 18.3012V25.6663H11.0005V10.4635ZM2.99831 25.468H7.66498V10.2652H2.99831V25.468ZM8.33348 5.30801C8.33365 5.69916 8.25608 6.08645 8.10527 6.44736C7.95445 6.80827 7.73341 7.13561 7.45498 7.41034C6.89078 7.97107 6.12709 8.28494 5.33165 8.28301C4.5376 8.28248 3.77568 7.96941 3.21065 7.41151C2.93323 7.13584 2.71293 6.80814 2.56238 6.44718C2.41183 6.08622 2.33399 5.6991 2.33331 5.30801C2.33331 4.51818 2.64831 3.76217 3.21181 3.20451C3.77635 2.64586 4.53859 2.33266 5.33281 2.33301C6.12848 2.33301 6.89148 2.64684 7.45498 3.20451C8.01731 3.76217 8.33348 4.51818 8.33348 5.30801Z"
                                        fill="currentColor" />
                                </svg>
                            </a>

                        </div>

                        <div>
                            <a target="_blank" href="https://medium.com/@blockarb">
                                <svg width="21" height="24" viewBox="0 0 25 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.5675 8.47499C4.57975 8.33297 4.56334 8.18957 4.51958 8.05627C4.47582 7.92297 4.40593 7.80347 4.3155 7.70733L2.4475 5.06249V4.66699H8.2455L12.7275 16.2228L16.6675 4.66699H22.1955V5.06249L20.5985 6.86033C20.5308 6.92128 20.4786 7.00253 20.4474 7.09541C20.4163 7.18829 20.4073 7.2893 20.4215 7.38766V20.6107C20.4073 20.709 20.4163 20.81 20.4474 20.9029C20.4786 20.9958 20.5308 21.077 20.5985 21.138L22.1585 22.937V23.3337H14.3145V22.9382L15.9305 21.0948C16.0895 20.9082 16.0895 20.8533 16.0895 20.5687V9.87966L11.5975 23.2893H10.9915L5.7615 9.87966V18.8677C5.7185 19.2445 5.8255 19.626 6.0515 19.899L8.1525 22.895V23.2893H2.1955V22.895L4.2955 19.899C4.40661 19.7637 4.48907 19.6 4.5363 19.4209C4.58353 19.2419 4.59421 19.0524 4.5675 18.8677V8.47499Z"
                                        fill="currentColor" />
                                </svg>
                            </a>


                        </div>

                        <div>
                            <a target="_blank" href="https://m.facebook.com/BlockArb/">
                                <svg width="10" height="24" viewBox="0 0 14 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_82_972)">
                                        <path
                                            d="M3.86506 28V14.8616H0.390991V10.1311H3.86506V6.0907C3.86506 2.9157 5.91721 0 10.6458 0C12.5603 0 13.976 0.18354 13.976 0.18354L13.8645 4.60099C13.8645 4.60099 12.4207 4.58693 10.8452 4.58693C9.13995 4.58693 8.86676 5.37275 8.86676 6.67702V10.1311H14L13.7767 14.8616H8.86676V28H3.86506Z"
                                            fill="currentColor" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_82_972">
                                            <rect width="13.609" height="28" fill="white"
                                                transform="translate(0.390991)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>


                        </div>

                        <div>
                            <a target="_blank" href="https://m.me/BlockArb/">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="20" height="20" viewBox="0 0 256 256" xml:space="preserve">

                                    <defs>
                                    </defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                        <path d="M 45 0 C 20.147 0 0 20.147 0 45 c 0 9.144 2.735 17.645 7.42 24.746 L 0 89.474 l 19.536 -7.375 C 26.778 87.079 35.547 90 45 90 c 24.853 0 45 -20.147 45 -45 C 90 20.147 69.853 0 45 0 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: currentColor; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <polygon points="17.4,57.49 41.27,32.51 52.83,43.7 72.6,33.62 50.78,57.49 38.47,45.93 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                    </g>
                                    </svg>
                               </a>


                        </div>

                        <div>
                            <a target="_blank" href="https://m.facebook.com/BlockArb/">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 256 256" xml:space="preserve">

                                    <defs>
                                    </defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                        <path d="M 83.924 7.756 L 4.202 38.496 c -5.442 2.183 -5.409 5.219 -0.992 6.571 l 20.455 6.385 l 7.035 23.153 c 0.925 2.553 0.469 3.566 3.151 3.566 c 2.069 0 2.983 -0.946 4.138 -2.069 l 9.941 -9.666 l 20.681 15.28 c 3.806 2.1 6.553 1.012 7.501 -3.533 l 13.577 -63.978 C 91.079 8.631 87.565 6.103 83.924 7.756 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: currentColor; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 33.942 72.016 l -6.747 -22.204 L 79.13 19.002 L 40.751 56.789 L 33.942 72.016 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    </g>
                                    </svg>
                            </a>


                        </div>
                    </div>
                </div>

                <div>
                    <h3 class=" text-2xl font-extrabold">Quick Links</h3>
                    <ul class="mt-5">
                        <li>
                            <a href="">Company</a>
                        </li>

                        <li class=" mt-3 text-sm">
                            <a href="">Team</a>
                        </li>

                        <li class=" mt-3 text-sm">
                            <a href="">Investment Approach</a>
                        </li>

                        <li class=" mt-3 text-sm">
                            <a href="">Risk Management</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class=" text-2xl font-extrabold">Contanct Us</h3>
                    <ul class="mt-5">

                        <li class=" mt-4 text-sm">
                            <div class="flex items-center">
                                <svg width="24" height="24" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.3333 4.66699H4.66668C3.38334 4.66699 2.34501 5.71699 2.34501 7.00033L2.33334 21.0003C2.33334 22.2837 3.38334 23.3337 4.66668 23.3337H23.3333C24.6167 23.3337 25.6667 22.2837 25.6667 21.0003V7.00033C25.6667 5.71699 24.6167 4.66699 23.3333 4.66699ZM22.8667 9.62533L14.6183 14.782C14.245 15.0153 13.755 15.0153 13.3817 14.782L5.13334 9.62533C5.01636 9.55965 4.91392 9.47093 4.83221 9.36452C4.75051 9.25811 4.69125 9.13623 4.65801 9.00626C4.62478 8.87628 4.61826 8.74092 4.63886 8.60835C4.65946 8.47578 4.70674 8.34877 4.77784 8.23501C4.84894 8.12125 4.94239 8.02309 5.05252 7.94649C5.16266 7.86988 5.28719 7.81642 5.41859 7.78934C5.54998 7.76226 5.68551 7.76212 5.81696 7.78893C5.94841 7.81574 6.07305 7.86895 6.18334 7.94533L14 12.8337L21.8167 7.94533C21.927 7.86895 22.0516 7.81574 22.1831 7.78893C22.3145 7.76212 22.45 7.76226 22.5814 7.78934C22.7128 7.81642 22.8374 7.86988 22.9475 7.94649C23.0576 8.02309 23.1511 8.12125 23.2222 8.23501C23.2933 8.34877 23.3406 8.47578 23.3612 8.60835C23.3818 8.74092 23.3752 8.87628 23.342 9.00626C23.3088 9.13623 23.2495 9.25811 23.1678 9.36452C23.0861 9.47093 22.9837 9.55965 22.8667 9.62533V9.62533Z"
                                        fill="#F2B950" />
                                </svg>


                                <div>
                                    <p class="text-sm ml-3"> <a
                                            href="mailto:support@blockarb.com">support@blockarb.com</a> </p>
                                    <p class="text-sm ml-3"> <a href="mailto:info@blockarb.com">info@blockarb.com</a>
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class=" mt-4 text-sm">
                            <div class="flex">
                                <svg class=" flex-shrink-0" width="17" height="24" viewBox="0 0 21 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_82_987)">
                                        <path
                                            d="M9.09028 27.3C6.27083 23.7891 0 15.2797 0 10.5C0 4.70094 4.6429 0 10.3704 0C16.0957 0 20.7407 4.70094 20.7407 10.5C20.7407 15.2797 14.4213 23.7891 11.6505 27.3C10.9861 28.1367 9.75463 28.1367 9.09028 27.3ZM10.3704 14C12.277 14 13.8272 12.4305 13.8272 10.5C13.8272 8.56953 12.277 7 10.3704 7C8.46373 7 6.91358 8.56953 6.91358 10.5C6.91358 12.4305 8.46373 14 10.3704 14Z"
                                            fill="#F2B950" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_82_987">
                                            <rect width="20.7407" height="28" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <div class="ml-3">
                                    <p class="text-sm inlin">First Floor Waterside Property Eden Island, Seychelles.</p>
                                </div>
                            </div>
                        </li>

                        <li class=" mt-4 text-sm">
                            <div class="flex">
                                <svg class=" flex-shrink-0" width="17" height="24" viewBox="0 0 21 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_82_987)">
                                        <path
                                            d="M9.09028 27.3C6.27083 23.7891 0 15.2797 0 10.5C0 4.70094 4.6429 0 10.3704 0C16.0957 0 20.7407 4.70094 20.7407 10.5C20.7407 15.2797 14.4213 23.7891 11.6505 27.3C10.9861 28.1367 9.75463 28.1367 9.09028 27.3ZM10.3704 14C12.277 14 13.8272 12.4305 13.8272 10.5C13.8272 8.56953 12.277 7 10.3704 7C8.46373 7 6.91358 8.56953 6.91358 10.5C6.91358 12.4305 8.46373 14 10.3704 14Z"
                                            fill="#F2B950" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_82_987">
                                            <rect width="20.7407" height="28" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <div class="ml-3">
                                    <p class="text-sm inlin">Central Business District, Quad Central, Q3 Level 9 Triq
                                        L-Esportaturi, Zone 1, Birkirkara
                                        CBD, Malta.</p>
                                </div>
                            </div>
                        </li>

                        <li class=" mt-4 text-sm">
                            <div class="flex">
                                <svg class=" flex-shrink-0" width="17" height="24" viewBox="0 0 21 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_82_987)">
                                        <path
                                            d="M9.09028 27.3C6.27083 23.7891 0 15.2797 0 10.5C0 4.70094 4.6429 0 10.3704 0C16.0957 0 20.7407 4.70094 20.7407 10.5C20.7407 15.2797 14.4213 23.7891 11.6505 27.3C10.9861 28.1367 9.75463 28.1367 9.09028 27.3ZM10.3704 14C12.277 14 13.8272 12.4305 13.8272 10.5C13.8272 8.56953 12.277 7 10.3704 7C8.46373 7 6.91358 8.56953 6.91358 10.5C6.91358 12.4305 8.46373 14 10.3704 14Z"
                                            fill="#F2B950" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_82_987">
                                            <rect width="20.7407" height="28" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <div class="ml-3">
                                    <p class="text-sm inlin">Nexxus Building, Des Voeux Rd Central, Central, Hong Kong.
                                    </p>
                                </div>
                            </div>
                        </li>

                        {{-- <li class=" mt-4 text-sm">
                            <div class="flex">
                                <svg width="24" height="24" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.9015 19.9963L19.159 15.6843C18.9348 15.4805 18.6402 15.3719 18.3374 15.3812C18.0346 15.3906 17.7473 15.5172 17.5362 15.7345L14.7443 18.6056C14.0723 18.4773 12.7213 18.0561 11.3307 16.669C9.93999 15.2771 9.51883 13.9226 9.39399 13.2553L12.2628 10.4623C12.4803 10.2513 12.6072 9.96392 12.6165 9.66104C12.6259 9.35815 12.517 9.06351 12.313 8.83946L8.00216 4.09813C7.79804 3.87338 7.51435 3.73705 7.21134 3.7181C6.90832 3.69915 6.60986 3.79906 6.37933 3.99663L3.84766 6.16779C3.64596 6.37023 3.52557 6.63965 3.50933 6.92496C3.49183 7.21663 3.15816 14.1256 8.51549 19.4853C13.1892 24.1578 19.0435 24.4996 20.6558 24.4996C20.8915 24.4996 21.0362 24.4926 21.0747 24.4903C21.3599 24.4743 21.6292 24.3534 21.8307 24.1508L24.0007 21.618C24.199 21.3882 24.2997 21.0899 24.2811 20.7869C24.2626 20.484 24.1264 20.2002 23.9015 19.9963Z"
                                        fill="#F2B950" />
                                </svg>


                                <p class="text-sm ml-3">+1 4834 3884 834</p>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
        <div class=" py-3 bg-primary text-gray-100">
            <div class=" mx-auto xl:max-w-screen-xl lg:max-w-screen-lg px-4 sm:px-8 lg:px-10">
                <p class="text-center text-s font-bol">Copyright 2022, All Right Reserved, Blockchain Arbitrage</p>
            </div>
        </div>
    </footer>

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

</body>

</html>
