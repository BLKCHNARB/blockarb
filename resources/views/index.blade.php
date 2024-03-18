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
</head>

<body class=" text-black_800">
    {{-- preloader --}}

    <div id="preloader" style="transition: all 2s ease-out"
        class=" bg-gradient-to-r from-blue_100 to-white fixed left-0 top-0 right-0 bottom-0 w-full z-50">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <svg id="mainSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600">
                <defs>
                        <radialGradient id="mainGrad" cx="400" cy="300" fx="400" fy="300" r="100" gradientUnits="userSpaceOnUse">
                    <stop offset=".68" stop-color="#6334fb"/>
                      <stop offset=".72" stop-color="#6639fb"/>
                      <stop offset=".77" stop-color="#7248fb"/>
                      <stop offset=".82" stop-color="#8561fb"/>
                      <stop offset=".88" stop-color="#9f83fb"/>
                      <stop offset=".93" stop-color="#c2b0fb"/>
                      <stop offset=".99" stop-color="#ebe6fb"/>
                      <stop offset="1" stop-color="#f1eefb"/>
                    </radialGradient>
                    </defs>
                <circle id="fillDot" cx="400" cy="300" fill="#6334fb" r="100" />
                <circle id="gradDot" cx="400" cy="300" fill="url(#mainGrad)" r="100" />
                </svg>
        </div>
    </div>

    {{-- preloader --}}
    <main class=" antialiased relative">
              
            <nav class="sticky top-0 z-30 bg-white padding-y base:px-10 px-5 flex gap-6 justify-between w-full items-center" x-data="{ open: false }">
                <a href="{{ route('landing') }}"><img class=" base:w-36 w-28 md:w-44" src="{{ asset('svg/logo.svg') }}" alt=""></a>

                <div @click="open = true" class=" md:hidden cursor-pointer hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.8" stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 9h16.5m-16.5 6.75h16.5" />
                    </svg>
                </div>
                    
                <ul class=" hidden md:flex items-center gap-5">
                    <li class="cursor-pointer relative" x-data="{ open: false }" @mouseleave="open=false">
                        <div class="flex items-center border border-transparent bg-transparent rounded-[10px] p-2 hover:border-blue_300 hover:text-blue_600" @mouseover="open=true">
                            <span class=" mr-2 ">About</span>
                            <span :class=" { 'transition-transform rotate-180 duration-300': open == true, 'transition-transform rotate-0 duration-300': open == false }">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>

                        <div class=" bg-white p-4 rounded-[20px] absolute left-0 top-full shadow"
                            x-show="open" x-cloak x-transition @click.away="open = false">
                            <ul class="divide-y text-base ">
                                <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all w-full">
                                    <a href="{{ route('company') }}" >Company</a>
                                </li>
                                <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all">
                                    <a href="{{ route('team') }}">Team</a>
                                </li>
                                <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all whitespace-nowrap">
                                    <a href="{{ route('investment-approach') }}">Investment Approach</a>
                                </li>
                                <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all">
                                    <a href="{{ route('risk-management') }}">Risk Management</a>
                                </li>
                                <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all">
                                    <a href="{{ route('technology') }}">Technology</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="cursor-pointer relative" x-data="{ open: false }" @mouseleave="open=false">
                        <div class="flex items-center border border-transparent bg-transparent rounded-[10px] p-2 hover:border-blue_300 hover:text-blue_600" @mouseover="open=true">
                            <span class=" mr-2 ">Products</span>
                            <span :class=" { 'transition-transform rotate-180 duration-300': open == true, 'transition-transform rotate-0 duration-300': open == false }">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>
                        <div class=" bg-white p-4 rounded-[20px] absolute left-0 top-full shadow"
                            x-show="open" x-cloak x-transition>
                            <ul class=" divide-y text-base">
                                <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all">
                                    <a href="{{ route('auto-arbitrage') }}">Auto Arbitrage</a>
                                </li>
                                <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all">
                                    <a href="{{ route('market-making') }}">Market making</a>
                                </li>
                                <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all whitespace-nowrap">
                                    <a href="{{ route('liquidity-enhancement') }}">Liquidity Enhancement</a>
                                </li>
                                <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] tranistion-all">
                                    <a href="{{ route('otc-trading') }}">OTC trading</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="cursor-pointer relative" x-data="{ open: false }" @mouseleave="open=false">
                        <div class="flex items-center border border-transparent bg-transparent rounded-[10px] p-2 hover:border-blue_300 hover:text-blue_600" @mouseover="open=true">
                            <span class=" mr-2 ">Careers</span>
                            <span :class=" { 'transition-transform rotate-180 duration-300': open == true, 'transition-transform rotate-0 duration-300': open == false }">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>
                        <div class=" bg-white p-5 rounded-[20px] absolute left-0 top-full shadow whitespace-nowrap"
                            x-show="open" x-cloak x-transition>
                            <ul class=" divide-y text-sm">
                                <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all">
                                    <a href="{{ route('careers') }}">Overview</a>
                                </li>
                                <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all">
                                    <a href="{{ route('open-positions') }}">Open Positions</a>
                            </ul>
                        </div>
                    </li>

                    <li><a href="#contact-us" class= "border border-transparent bg-transparent rounded-[10px] p-2 hover:border-blue_300 hover:text-blue_600 leading-none whitespace-nowrap">Contact us</a></li>
                </ul>

                {{-- mobile view --}}

                <div x-show="open" x-transition.duration.600ms.origin.top.right
                    class="absolute bg-gray_50 p-7 h-screen z-50 md:hidden w-[70%] top-0 right-0" @click.away="open = false">

                    <div class="flex mb-5 justify-end cursor-pointer">
                        <svg @click="open = false" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>

                    @if (Auth::user())

                    <div class=" border-b mb-7 pb-3">
                        <span class="text-base font-semibold capitalize">
                            {{ Auth()->user()?->first_name . ' ' . Auth()->user()?->last_name }}
                        </span>
                        <h5 class=" text-sm text-gray-400">{{ Auth()->user()?->email }}</h5>
                    </div>

                    @endif

                    <ul class=" flex flex-col gap-10" >
                        @if (Auth::user())
                        <li class=" font-semibold cursor-pointer hover:text-blue_600">
                            <a href="{{ route('home') }}" >
                                Dashboard
                            </a>
                        </li>
                        @endif
                        <li class="cursor-pointer relative" x-data="{ open: false }" @click.away="open=false">
                            <div class="flex items-center hover:text-blue_600" @click="open=!open">
                                <span class=" font-semibold mr-2 ">About</span>
                                <span :class=" { 'transition-transform rotate-180 duration-300': open == true, 'transition-transform rotate-0 duration-300': open == false }">
                                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </div>
    
                            <div class="z-20 bg-white p-3 rounded-[20px] absolute left-0 top-full mt-2 shadow"
                                x-show="open" x-cloak x-transition.duration.300ms @click.away="open = false">
                                <ul class="divide-y text-base ">
                                    <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all w-full">
                                        <a href="{{ route('company') }}" >Company</a>
                                    </li>
                                    <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all">
                                        <a href="{{ route('team') }}">Team</a>
                                    </li>
                                    <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all whitespace-nowrap">
                                        <a href="{{ route('investment-approach') }}">Investment Approach</a>
                                    </li>
                                    <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all">
                                        <a href="{{ route('risk-management') }}">Risk Management</a>
                                    </li>
                                    <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all">
                                        <a href="{{ route('technology') }}">Technology</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
    
                        <li class="cursor-pointer relative" x-data="{ open: false }" @click.away="open=false">
                            <div class="flex items-center hover:text-blue_600" @click="open=!open">
                                <span class=" font-semibold mr-2 ">Products</span>
                                <span :class=" { 'transition-transform rotate-180 duration-300': open == true, 'transition-transform rotate-0 duration-300': open == false }">
                                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="z-20 bg-white p-3 rounded-[20px] absolute left-0 top-full mt-2 shadow"
                                x-show="open" x-cloak x-transition.duration.300ms @click.away="open = false">
                                <ul class=" divide-y text-base">
                                    <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all">
                                        <a href="{{ route('auto-arbitrage') }}">Auto Arbitrage</a>
                                    </li>
                                    <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all">
                                        <a href="{{ route('market-making') }}">Market making</a>
                                    </li>
                                    <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all whitespace-nowrap">
                                        <a href="{{ route('liquidity-enhancement') }}">Liquidity Enhancement</a>
                                    </li>
                                    <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] tranistion-all">
                                        <a href="{{ route('otc-trading') }}">OTC trading</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
    
                        <li class="cursor-pointer relative" x-data="{ open: false }" @click.away="open=false">
                            <div class="flex items-center hover:text-blue_600" @click="open=!open">
                                <span class=" font-semibold mr-2 ">Careers</span>
                                <span :class=" { 'transition-transform rotate-180 duration-300': open == true, 'transition-transform rotate-0 duration-300': open == false }">
                                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="z-20 bg-white p-3 rounded-[20px] absolute left-0 top-full mt-2 shadow"
                                x-show="open" x-cloak x-transition.duration.300ms @click.away="open = false">
                                <ul class=" divide-y text-sm">
                                    <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all">
                                        <a href="{{ route('careers') }}">Overview</a>
                                    </li>
                                    <li class=" py-3 px-5 hover:bg-blue_100 hover:text-blue_600 rounded-[10px] transition-all">
                                        <a href="{{ route('open-positions') }}">Open Positions</a>
                                </ul>
                            </div>
                        </li>
    
                        <li @click='open=false'><a href="#contact-us" class="whitespace-nowrap font-semibold hover:text-blue_600">Contact us</a></li>
                    </ul>

                    <div class="mt-16">
                    @if (Auth::user())

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                <x-button type="cancel" >Log Out</x-button>
                            </a>
                        </form>

                    @else
                    
                        <ul class="gap-4 flex items-center">
                            <li class=" cursor-pointer font-semibold hover:scale-105 border border-transparent bg-transparent rounded-[10px] p-3 hover:border-blue_300 hover:text-blue_600 transition-all ">
                                <a href="{{ route('login') }}"
                                    class=" ">
                                    <span >Login</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="{{ route('register') }}">
                                    <x-button class="">Get Started</x-button>
                                </a>
                            </li>
                        </ul>
                    @endif
                    </div> 
                </div>   

                {{-- Desktop user nav --}}
                <div class=" md:block hidden ">
                    @if (Auth::user())

                    <div class=" relative cursor-pointer" x-data="{ show: false }">
                        <div  x-on:click="show = true" class=" border hover:bg-blue_600 hover:text-white rounded-full md:p-[0.6rem] p-1 md:w-[10.2rem] w-fit flex items-center justify-between " :class=" { 'bg-blue_600 text-white': show == true, 'bg-gray_50 text-black_800': show == false }">
                            <img src="{{ asset('svg/ProfileIcon.svg')}}" alt="user placeholder" class="base:w-[2rem] w-[1.4rem]" >
                            <p class=" base-text font-bold -ml-3 md:block hidden capitalize">
                                {{ Auth()->user()?->first_name . ' ' . strtoupper(mb_substr(Auth()->user()?->last_name, 0, 1)) . '.' }}
                            </p>
                            <span class="cursor-pointer base:p-2 p-1 hover:scale-110 transition-all"
                                 :class=" { 'transition-transform rotate-180 duration-300': show == true, 'transition-transform rotate-0 duration-300': show == false }">
                                 <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>    
                        </div>
                        <div class=" duration-300 absolute top-[3rem] right-0 w-[15rem] bg-white rounded-[10px] box-shadow" x-show="show" x-cloak
                        x-transition.duration.600ms @click.away="show = false"  :class="{
                                '  opacity-100  ': show == true,
                                '  opacity-0 ': show == false
                            }" >
                            <div class=" ">
                                <div class=" py-5 px-6 rounded-t-[10px] border-b">
                                    <span class=" font-semibold capitalize">
                                        {{ Auth()->user()?->first_name . ' ' . Auth()->user()?->last_name }}
                                    </span>
                                    <h5 class=" text-sm text-gray-400">{{ Auth()->user()?->email }}</h5>
                                </div>

                                <div class=" py-5 px-2 rounded-b-[10px] grid gap-2">

                                    <span onclick="{{ route('home') }}" class=" dot-container">
                                        <div class=" opacity-0  w-[6px] h-[6px] rounded-full bg-blue_600" ></div>
                                        <span class="ml-5">
                                            <a href="{{ route('home') }}" >
                                                Dashboard
                                            </a>
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
                    @else
                    <ul class="gap-4 hidden md:flex items-center">
                        <li class=" cursor-pointer font-semibold hover:scale-105 border border-transparent bg-transparent rounded-[10px] p-3 hover:border-blue_300 hover:text-blue_600 transition-all ">
                            <a href="{{ route('login') }}"
                                class=" ">
                                <span >Login</span>
                            </a>
                        </li>
                        
                        <li class=" font-semibold">
                            <a href="{{ route('register') }}">
                                <x-button class="">Get Started</x-button>
                            </a>
                        </li>
                    </ul>
                    @endif

                </div>
            </nav> 

           {{-- Hero section --}}
            <section class="">
                <div class="relative h-fit w-full bg-[#476efc7a] ">
                        
                    <video autoplay muted loop class="absolute w-full h-full object-cover bg-no-repeat">
                        <source src="{{ asset('hero-vid.mp4') }}" type="video/mp4">
                    </video>
                    
                    <div class=" bg-[#476efc7a] md:px-20 px-10 lg:py-48 base:py-36 py-24 z-10 relative flex flex-col justify-center ">    
                        <div class=" text-white xl:w-[55%] md:w-[70%] w-full flex flex-col base:items-start items-center">
                            <h1 class=" text-shadow font-extrabold lg:text-xxxxl md:text-xxxl base:text-xxl text-xl">Earn while you Hodl</h1>
                            <p class=" text-shadow base:text-start text-center md:text-lg base:text-base sm:text-sm text-s base:my-4 my-2 text-extrabold">Leveraging advancements in research and development to deliver sustainable investment results in the blockchain space through all market conditions.</p>
                            <div class="base:w-[30%] w-[40%] base:mt-10 mt-5">
                                <a href="{{ route('register') }}" >
                                    <x-button >Get Started</x-button>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section> 
            
            {{-- mission section --}}
            <section class="padding-y padding-x">
                <div class=" md:gap-10 gap-14 py-20 flex justify-center md:flex-nowrap flex-wrap">
                    
                    <div class=" mission-cards ">
                           
                        <div class="heading">
                            <h3>Mission</h3>
                        </div>

                        <div class="mt-5">
                            <p class=" base-text leading-7">
                                Delivering a steady yield of uncorrelated returns within a disciplined risk
                                management framework through the application of the scientific method to the field
                                of digital investment management.
                            </p>
                        </div>

                    </div>

                    <div class=" mission-cards">
                        
                        <div class="heading">
                            <h3>Philosophy</h3>
                        </div>

                        <div class="mt-5">
                            <p class=" base-text leading-7">
                                With the rapid flux in global economic reality, a risk aware and dynamic investment
                                approach rooted in advanced research and technology is needed to stay ahead.
                            </p>
                        </div>

                    </div>

                    <div class="mission-cards">
                            
                        <div class="heading">
                            <h3>Offering</h3>
                        </div>

                        <div class="mt-5">
                            <p class=" base-text leading-7">
                                An active risk managed service that outperforms in both bull and bear markets by
                                exploiting a range of arbitrage opportunities that exist across digital markets.
                            </p>
                        </div>

                    </div>
                </div>
            </section>

            {{-- services section --}}
            <section class=" base:pt-20 md:pb-20 pb-16 py-10 padding-x bg-blue_100 ">
                <div class="base:-mb-7 -mb-10">
                    <h2 class="font-extrabold base:text-[1.7rem] text-[1.2rem] base:text-start text-center "><span class="text-blue_600">Services</span> We Provide</h2>
                </div>

                <div class=" gap-10 py-20 flex justify-center md:flex-nowrap flex-wrap">
                    <div class=" service-cards btc">
                        <div class=" w-fit base:p-2 p-[6px] inline-block rounded-full border-2 border-[#98afffa7] border-dashed">
                            <img src="{{ asset('svg/btc-home.svg') }}" alt="" class="base:w-[2.5rem] w-[1.7rem]">
                        </div>

                        <h3 class="heading">BTC Yield</h3>

                        <p class=" base-text leading-7">
                            An innovative way of earning a sustainable stream of bitcoin profits monthly.
                            Designed for bitcoin “HODLERS”, investors who hold bitcoin through all market
                            conditions as a store of wealth. A straightforward means of growing your Bitcoin
                            portfolio.
                        </p>
                    </div>

                    <div class=" service-cards eth">
                        <div class=" w-fit base:p-2 p-1 inline-block rounded-full border-2 border-[#98afffa7] border-dashed">
                            <img src="{{ asset('svg/eth-home.svg') }}" alt="" class="base:w-[2.5rem] w-[1.9rem]">
                        </div>

                        <h3 class="heading">ETH Yield</h3>

                        <p class=" base-text leading-7">
                            A risk managed service designed to earn ethereum as profit through a range of market
                            arbitrage strategies. A sustainable way for long term ethereum investors to grow
                            their portfolios using short term profits that compound over time.
                        </p>

                    </div>

                    <div class=" service-cards usdt">
                        <div class=" w-fit base:p-2 p-[6px] inline-block rounded-full border-2 border-[#98afffa7] border-dashed">
                            <img src="{{ asset('svg/usdt-home.svg') }}" alt="" class="base:w-[2.5rem] w-[1.8rem]">
                        </div>

                        <h3 class="heading">Stable-USD Yield</h3>

                        <p class=" base-text leading-7">
                            A service that provides a robust hedge to the volatility of the digital asset
                            market. Designed to provide near consistent profits denominated in dollars
                            irrespective of market conditions. Suitable for all investors including investors
                            who do already have exposure to BTC or ETH.
                        </p>

                    </div>
                </div>

                <div class=" flex justify-center md:mt-5 mt-0 w-full">
                    <a href="{{ route('register') }}">
                        <x-button class="">Get Started</x-button>
                    </a>
                </div>
            </section> 

            {{-- about section --}}
            <section class="md:py-20 py-10 padding-x base:text-start text-center">
                <div class="mb-5 md:block hidden">
                    <h3 class=" font-extrabold base:text-[1.7rem] text-[1.2rem]">About <span class="text-blue_600">Us</span></h3>
                </div>
                <div class=" flex gap-10 items-center base:justify-between justify-center md:flex-row flex-col-reverse">
                    <div class=" md:w-[58%] w-full ">
                        <div class="mb-5 md:hidden block">
                            <h4 class=" font-extrabold base:text-[1.7rem] text-[1.1rem]">About Us</h4>
                        </div>
                        
                        <p class=" base-text leading-7">
                            At blockarb , we employ state-of-the-art technology to execute a straightforward yet
                                potent
                                strategy. We capitalize on price variations across exchanges through arbitrage trading,
                                consistently delivering returns while safeguarding portfolios from market oscillations.
                                Blockarb distinguishes itself by offering investors unrestricted access to their
                                capital, free
                                from any encumbrances such as penalties or restrictions. This empowers our clients to
                                make
                                agile decisions in response to emerging market opportunities.
                        </p> <br>

                        <p class=" base-text leading-7">
                            Blockarb is committed to delivering an exceptional investment service, catering to
                                individual,
                                family office, and institutional investors seeking exposure in the digital assets
                                market. Our
                                core mission revolves around the prudent deployment of capital in digital asset markets,
                                all
                                while prioritizing the protection of investor capital from the inherent volatility of
                                the space.
                        </p>

                       <div class="w-full mt-10 flex base:justify-end justify-center">
                        <a href="{{ route('company') }}" class="base:w-[20%] w-[30%]"><x-button>Read More</x-button></a>
                       </div>
                    </div>

                    <div class=" md:w-[45%] w-full base:mt-0 mt-10 ">
                        <img src="{{ asset('images/cubes.svg') }}" class=" h-full w-full" alt="">
                    </div>
                </div>
            </section>

            {{-- <section
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
            </section> --}}

            {{-- <section class=" py- mx-auto xl:max-w-screen-x lg:max-w-screen-l bg-gray-100">
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
            </section> --}}

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

            {{-- Records --}}
            <section class=" bg-blue_800 text-white padding-x base:py-16 py-10">

                <div class=" text-center flex justify-center md:flex-nowrap flex-wrap gap-10 ">
                    <div class=" flex flex-col items-center justify-center base:w-fit sm:w-[40%] w-full lg:mx-4 mx-0">
                        <p class=" md:text-[2.5rem] base:[2rem] text-[1.7rem] font-semibold base:pb-1 pb-0">3.5%</p>
                        <p class=" sm-text font-medium text-center text-gray_100">Average monthly ROI</p>
                    </div>
    
                    <div class=" flex flex-col items-center justify-center base:w-fit sm:w-[40%] w-full lg:mx-4 mx-0">
                        <p class=" md:text-[2.5rem] base:[2rem] text-[1.7rem] font-semibold base:pb-1 pb-0 whitespace-nowrap">350 million+</p>
                        <p class=" sm-text font-medium text-center text-gray_100 whitespace-normal">UDST Asset under management</p>
                    </div>
    
                    <div class=" flex flex-col items-center justify-center base:w-fit sm:w-[40%] w-full lg:mx-4 mx-0">
                        <p class=" md:text-[2.5rem] base:[2rem] text-[1.7rem] font-semibold base:pb-1 pb-0">10,500+</p>
                        <p class=" sm-text font-medium text-center text-gray_100">BTC Asset under management</p>
                    </div>
    
                    <div class=" flex flex-col items-center justify-center base:w-fit sm:w-[40%] w-full lg:mx-4 mx-0">
                        <p class=" md:text-[2.5rem] base:[2rem] text-[1.7rem] font-semibold base:pb-1 pb-0">250,000+</p>
                        <p class=" sm-text font-medium text-center text-gray_100">ETH Asset under management</p>
                    </div>
                </div>
               
            </section>

            {{-- we good --}}
            <section class=" padding-y padding-x text-black ">
                <div class=" pt-10 sm:pb-28 flex base:flex-row flex-col base:gap-20 gap-10 base:justify-between justify-center items-center">
                    <div class="base:w-[35%] w-full base:mt-20 base:text-start text-center">
                        <h3 class=" font-extrabold base:text-[1.7rem] text-[1.2rem] "><span class="text-blue_600">We are good</span> at what we do</h3>
                        <p class="base-text text-black_400 mt-5">With a relentless investment into research, we are always equipped with the right data to develop tailor made solutions and products best suited to an ever changing financial landscape.</p>
                    </div>
                    <div class=" lg:w-[60%] base:[70%] sm:w-full w-[90%] sm:flex-row flex-col flex gap-7 justify-center items-center">
                        <div class="good-card-parent">
                            <div class=" good-card good-card-up">
                                <img src="{{ asset('svg/research.svg') }}" alt="" class="w-[3rem]">
    
                                <h4 class=" heading ">Quantitative Research</h4>
                                <p class=" base-text">
                                    With a relentless investment into research, we are always equipped with the right
                                    data
                                    to develop tailor made solutions and products best suited to an ever changing
                                    financial
                                    landscape.
                                </p>
                            </div>
    
                            <div class=" good-card good-card-down">
                                <img src="{{ asset('svg/technology.svg') }}" alt="" class="w-[3rem]">
    
                                <h4 class=" heading ">Technology</h4>
                                <p class=" base-text">
                                    Advancement in technology plays a great role in staying ahead of the times.
                                    Innovation plays a huge role in the funds ability to deliver the time tested profit
                                    it has come to be known with
                                </p>
                            </div>
                        </div>

                        <div class="relative sm:top-32 good-card-parent">
                            <div class=" good-card good-card-up">
                                <img src="{{ asset('svg/risk.svg') }}" alt="" class="w-[3rem]">
    
                                <h4 class=" heading ">Risk Management</h4>
                                <p class=" base-text">
                                    A strict adherence to risk management not only guarantees that one does not give
                                    back profits to the market but also creates the perfect environment for asymmetric
                                    capital deployment and management.
                                </p>
                            </div>
    
                            <div class=" good-card good-card-down">
                                <img src="{{ asset('svg/talent.svg') }}" alt="" class="w-[3rem]">
    
                                <h4 class=" heading ">Talent</h4>
                                <p class=" base-text">
                                    We believe that diverse teams with complementary strengths are critical to
                                    sustainable success hence our dedicated investment into seeking, developing and
                                    managing talent from across the globe to manage our services.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>

            {{-- investment process --}}
            <section class=" py-20 padding-x mx-auto text-center">
                <div class=" w-full flex flex-col items-center">
                    <h4 class=" font-extrabold base:text-[1.7rem] text-[1.2rem] ">Our <span class="text-blue_600">Investment</span> Process</h4>
                    <p class=" base-text text-black_400 mt-5 base:w-[60%] w-[80%]">BlockArb has a thorough and detailed investment process. The investment process is divided into 6 phases</p>
                </div>

                <div class="flex flex-wrap w-full sm:gap-8 gap-10 sm:mt-14 mt-7 justify-center ">
                    <div class=" process-card ">
                        <img src="{{ asset('svg/data-collection.svg') }}" alt="">
                        <h4 class=" heading ">Data Collection</h4>
                        <p class=" text-sm">In the first phase of our investment process we collect data from a variety of traditional and alternative sources.</p>
                    </div>
                    
                    <div class=" process-card ">
                        <img src="{{ asset('svg/1.svg') }}" alt="">
                        <h4 class=" heading ">Data Cleaning</h4>
                        <p class=" text-sm">We use proprietary automated algorithms to clean the vast amounts of data at our disposal.</p>
                    </div>

                    <div class=" process-card ">
                        <img src="{{ asset('svg/2.svg') }}" alt="">
                        <h2 class=" heading ">Data Analysis</h2>
                        <p class=" text-sm">Our quantitative researchers analyze the data sets processed in the previous step using sophisticated and advanced statistical methods</p>
                    </div>   

                    <div class=" process-card ">
                        <img src="{{ asset('svg/6.svg') }}" alt="">
                        <h2 class=" heading ">Backtesting</h2>
                        <p class=" text-sm">After the data has been thoroughly analyzed, our quants apply the scientific method to the financial data</p>
                    </div>

                    <div class=" process-card ">
                        <img src="{{ asset('svg/4.svg') }}" alt="">
                        <h4 class=" heading ">Pilot Test</h4>
                        <p class=" text-sm">After backtesting, we test them in a pilot live production environment with proprietary capital for a suitable period of time before offering them to our clients.</p>
                    </div>
                              
                    <div class=" process-card ">
                        <img src="{{ asset('svg/3.svg') }}" alt="">
                        <h4 class=" heading ">Deployment</h4>
                        <p class=" text-sm">Having confirmed that pilot trading returns are consistent with the backtest and what we expected, our investment team allows our clients to invest in the new investment product.</p>
                    </div>
                </div>
            </section>

           {{-- our client --}}
            <section class=" bg-blue_100 padding-x base:py-20 py-10 ">
                <div class=" bg-white base:p-16 p-10 rounded-[20px] text-center ">
                    <h3 class="font-extrabold base:text-[1.7rem] text-[1.2rem]">Our <span class=" text-blue_600">Clients</span></h3>
                    <p class="mt-3 base-text text-neutral_800 leading-7">
                        We work with entrepreneurs, corporate executives, angel investors, private wealth
                        managers, and other high-net worth individuals who need to outsource the investment
                        management process. When managing investments on behalf of high networth
                        individual(HNWI) investors, we work closely with them to understand their investment
                        goals, current financial situation and present to them our products that suit their
                        taste as they choose.
                    </p>
                </div>
            </section>

            {{-- centralized section --}}
            <section class=" padding-y padding-x md:mt-0 base:mt-10 mt-16 flex base:flex-row flex-col justify-center items-center md:gap-10 gap-5">
                <div class="base:w-[30%] base:mb-0 mb-5 text-center w-full">
                    <h3 class=" lg:whitespace-nowrap font-extrabold base:text-[1.5rem] text-[1.2rem] ">Centralized <span class="text-blue_600">Exchanges</span></h3>
                    <p class="mt-2 text-black_200 sm-text mx-auto w-[80%]">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit veniam, laudantium qui quae iu</p>
                </div>
                <div class=" flex justify-center flex-wrap base:w-[70%] w-full ">
                    <span class="lg:px-10 md:px-8 base:py-16 base:p-6 px-3 py-[3.2rem] w-[33%] flex items-center justify-center border-black_200"><img  src="{{ asset('svg/binance.svg') }}" alt="" class="md:w-[11rem] sm:w-[7rem] w-[10rem]"></span>
                    <span class="lg:px-10 md:px-8 base:py-16 base:p-6 px-3 py-[3.2rem] w-[33%] flex items-center justify-center border-black_200 border-l"><img  src="{{ asset('images/coinbase.svg') }}" alt="" class="md:w-[11rem] sm:w-[7rem] w-[10rem]"></span>
                    <span class="lg:px-10 md:px-8 base:py-16 base:p-6 px-3 py-[3.2rem] w-[33%] flex items-center justify-center border-black_200 border-l"><img src="{{ asset('svg/bybit.svg') }}" alt="" class="base:w-[6rem] w-[4.5rem]"></span>
                    <span class="lg:px-10 md:px-8 base:py-16 base:p-6 px-3 py-[3.2rem] w-[33%] flex items-center justify-center border-black_200 border-t"><img src="{{ asset('svg/okx.svg') }}" alt="" class="base:w-[6rem] w-[4.5rem]"></span>
                    <span class="lg:px-10 md:px-8 base:py-16 base:p-6 px-3 py-[3.2rem] w-[33%] flex items-center justify-center border-black_200 border-t border-l"><img src="{{ asset('svg/upbit.svg') }}" alt="" class="base:w-[2.2rem] w-[1.7rem]"><span class=" text-blue-900 base:text-[1.8rem] text-[1.2rem] font-bold ml-1">upbit</span></span>
                    <span class="lg:px-10 md:px-8 base:py-16 base:p-6 px-3 py-[3.2rem] w-[33%] flex items-center justify-center border-black_200 border-l border-t"><img src="{{ asset('svg/kraken.svg') }}" alt="" class="md:w-[10rem] sm:w-[6rem] w-[8rem]"></span>
                </div>
            </section>

            {{-- decentralized section --}}
            <section class=" padding-y md:mt-0 base:mt-10 mt-16 padding-x flex base:flex-row-reverse flex-col justify-center items-center md:gap-10 gap-5">
                <div class="base:w-[30%] base:mb-0 mb-5 text-center w-full">
                    <h3 class=" lg:whitespace-nowrap font-extrabold base:text-[1.5rem] text-[1.2rem] ">Decentralized <span class="text-blue_600">Exchanges</span></h3>
                    <p class="mt-2 text-black_200 sm-text mx-auto w-[80%]">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit veniam, laudantium qui quae iu</p>
                </div>
                <div class=" flex justify-center flex-wrap base:w-[70%] w-full ">
                    <span class="lg:p-10 md:p-8 base:py-12 base:p-6 px-3 py-9 w-[33%] flex items-center justify-center border-black_200"><img src="{{ asset('svg/jupiter.svg') }}" alt="" class="base:w-[2.9rem] w-[2.3rem]"><span class=" font-[Manrope] text-blue-900 base:text-[1.9rem] text-[1.1rem] font-bold ml-0">Jupiter</span></span>
                    <span class="lg:p-10 md:p-8 base:py-12 base:p-6 px-3 py-9 w-[33%] flex items-center justify-center border-black_200 border-l"><img  src="{{ asset('svg/uniswap.svg') }}" alt="" class="md:w-[14rem] sm:w-[7rem] w-[10rem]"></span>
                    <span class="lg:p-10 md:p-8 base:py-12 base:p-6 px-3 py-9 w-[33%] flex items-center justify-center border-black_200 border-l"><img  src="{{ asset('svg/dydx.svg') }}" alt="" class="base:w-[7rem] w-[5.5rem]"></span>
                    <span class="lg:p-10 md:p-8 base:py-12 base:p-6 px-3 py-9 w-[33%] flex items-center justify-center border-black_200 border-t"><img src="{{ asset('svg/raydium.svg') }}" alt="" class="md:w-[16rem] sm:w-[9rem] w-[12rem]"></span>
                    <span class="lg:p-10 md:p-8 base:py-12 base:p-6 px-3 py-9 w-[33%] flex items-center justify-center border-black_200 border-t border-l"><img src="{{ asset('svg/pancake.svg') }}" alt="" class="base:w-[2.1rem] w-[1.7rem]"><span class=" font-[Outfit] text-teal-500 base:text-[1.8rem] text-[1.1rem] font-semibold base:ml-2 ml-1">Pancake</span></span>
                    <span class="lg:p-10 md:p-8 base:py-12 base:p-6 px-3 py-9 w-[33%] flex items-center justify-center border-black_200 border-t border-l"><img src="{{ asset('svg/curve.svg') }}" alt="" class="base:w-[5rem] w-[3.4rem]"><span class=" font-[Manrope] text-red-500 base:text-[1.8rem] text-[1.1rem] font-bold -ml-3">curve</span></span>
                </div>
            </section>

            {{-- call to action --}}
            <section class=" bg-blue_100 padding-x base:py-20 py-10 ">
                <div class=" relative bg-white base:p-10 py-10 px-6 rounded-[20px] text-center ">
                    <div class="flex sm:flex-row flex-col sm:justify-between justify-center items-center">
                        <h3 class="start">Start Earning</h3>
                        <p class=" base:w-[60%] w-[70%] base:text-md text-base text-neutral_800 leading-7 sm:text-start text-center">
                            Automate your digital assets portfolio to begin earning consistently today.
                        </p>
                        <a href="{{ route('register') }}" class="base:w-[20%] sm:w-[25%] w-[50%] sm:mt-0 mt-5">
                            <x-button class="">Get Started</x-button>
                        </a>
                    </div>
                </div>
            </section>
    </main>

    <footer class="  padding-x text-sm ">
        <div class=" py-10 md:gap-6 gap-10 md:flex-nowrap flex-wrap flex justify-between w-full"> 
            {{-- <div class=" "> --}}
                <div class="md:w-[30%] base:w-[45%] w-full sm:items-start items-center flex flex-col mr-5">
                    <img class=" w-40 lg:w-52" src="{{ asset('svg/logo.svg') }}" alt="">
                    <p class=" mt-5 text-sm sm:text-start text-center">Prospective Investors should read the entire website terms and
                        conditions
                        and
                        consult with any other investment advisors and tax advisors before making any decision
                        concerning an investment.
                    </p>
                    
                    <h3 class="base:text-lg text-md font-extrabold mt-5 sm:text-start text-center ">Follow Us</h3>    
                    <div class="flex flex-wrap w-full sm:justify-start justify-center gap-4 base:mt-5 mt-4 ">
                        <a target="_blank" href="https://www.linkedin.com/company/blockarb">
                            <div class="border w-9 h-9 p-1 flex flex-center rounded-full border-neutral_800 hover:scale-105  ">
                                <img src="{{ asset('svg/linkedin.svg') }}" alt="linkedin icon" class='w-5'>   
                            </div>
                        </a>

                        <a target="_blank" href="https://medium.com/@blockarb">
                            <div class="border w-9 h-9 p-1 flex flex-center rounded-full border-neutral_800 hover:scale-105  " >
                                <img src="{{ asset('svg/medium.svg') }}" alt="medium icon" class='w-5'>
                            </div>
                        </a>

                        <a target="_blank" href="https://m.facebook.com/BlockArb/">
                            <div class="border w-9 h-9 p-1 flex flex-center rounded-full border-neutral_800 hover:scale-105  " >
                                <img src="{{ asset('svg/facebook.svg') }}" alt="facebook icon" class='w-[.6rem]'>
                            </div>
                        </a>
                        
                        <a target="_blank" href="https://m.me/BlockArb/">
                            <div class="border w-9 h-9 p-1 flex flex-center rounded-full border-neutral_800 hover:scale-105  " >
                                <img src="{{ asset('svg/messanger.svg') }}" alt="messanger icon" class='w-5'>
                            </div>
                        </a>
                        
                        <a target="_blank" href="https://m.facebook.com/BlockArb/">
                            <div class="border w-9 h-9 p-1 flex flex-center rounded-full border-neutral_800 hover:scale-105  " >
                                <img src="{{ asset('svg/letter.svg') }}" alt="letter icon" class='w-5'>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-[20%] base:w-[45%] sm:items-start items-center flex flex-col w-full">
                    <h3 class=" base:text-lg text-md font-extrabold">Products</h3>
                    <ul class="base:mt-5 mt-4 sm:text-start text-center">
                        <li class=" text-sm hover:text-blue_800">
                            <a href="{{ route('auto-arbitrage') }}">Auto Arbitrage</a>
                        </li>
                        <li class=" mt-3 text-sm hover:text-blue_800">
                            <a href="{{ route('market-making') }}">Market making</a>
                        </li>
                        <li class=" mt-3 text-sm hover:text-blue_800 whitespace-nowrap">
                            <a href="{{ route('liquidity-enhancement') }}">Liquidity Enhancement</a>
                        </li>
                        <li class=" mt-3 text-sm hover:text-blue_800">
                            <a href="{{ route('risk-management') }}">Risk Management</a>
                        </li>
                        <li class=" mt-3 text-sm hover:text-blue_800">
                            <a href="{{ route('otc-trading') }}">OTC trading</a>
                        </li>
                    </ul>
                </div>

                <div class="md:w-[20%] base:w-[45%] w-full sm:items-start items-center flex flex-col">
                    <h3 class=" base:text-lg text-md font-extrabold ">About</h3>
                    <ul class="bae:mt-5 mt-4 sm:text-start text-center">
                        <li class=" mt-3 text-sm hover:text-blue_800">
                            <a href="{{ route('company') }}">Company</a>
                        </li>

                        <li class=" mt-3 text-sm hover:text-blue_800">
                            <a href="{{ route('team') }}">Team</a>
                        </li>

                        <li class=" mt-3 text-sm hover:text-blue_800">
                            <a href="{{ route('investment-approach') }}">Investment Approach</a>
                        </li>

                        <li class=" mt-3 text-sm hover:text-blue_800">
                            <a href="{{ route('technology') }}">Technology</a>
                        </li>
                    </ul>
                </div>

                <div class="md:w-[30%] base:w-[45%] w-full sm:items-start items-center flex flex-col " id="contact-us">
                    <h3 class=" base:text-lg text-md font-extrabold">Contact</h3>
                    <ul class="base:mt-5 mt-4">

                        <li class="text-sm">
                            <div class="flex items-center">
                                <svg width="24" height="24" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.3333 4.66699H4.66668C3.38334 4.66699 2.34501 5.71699 2.34501 7.00033L2.33334 21.0003C2.33334 22.2837 3.38334 23.3337 4.66668 23.3337H23.3333C24.6167 23.3337 25.6667 22.2837 25.6667 21.0003V7.00033C25.6667 5.71699 24.6167 4.66699 23.3333 4.66699ZM22.8667 9.62533L14.6183 14.782C14.245 15.0153 13.755 15.0153 13.3817 14.782L5.13334 9.62533C5.01636 9.55965 4.91392 9.47093 4.83221 9.36452C4.75051 9.25811 4.69125 9.13623 4.65801 9.00626C4.62478 8.87628 4.61826 8.74092 4.63886 8.60835C4.65946 8.47578 4.70674 8.34877 4.77784 8.23501C4.84894 8.12125 4.94239 8.02309 5.05252 7.94649C5.16266 7.86988 5.28719 7.81642 5.41859 7.78934C5.54998 7.76226 5.68551 7.76212 5.81696 7.78893C5.94841 7.81574 6.07305 7.86895 6.18334 7.94533L14 12.8337L21.8167 7.94533C21.927 7.86895 22.0516 7.81574 22.1831 7.78893C22.3145 7.76212 22.45 7.76226 22.5814 7.78934C22.7128 7.81642 22.8374 7.86988 22.9475 7.94649C23.0576 8.02309 23.1511 8.12125 23.2222 8.23501C23.2933 8.34877 23.3406 8.47578 23.3612 8.60835C23.3818 8.74092 23.3752 8.87628 23.342 9.00626C23.3088 9.13623 23.2495 9.25811 23.1678 9.36452C23.0861 9.47093 22.9837 9.55965 22.8667 9.62533V9.62533Z"
                                        fill="#1744E4" />
                                </svg>


                                <div>
                                    <p class="text-sm ml-3"> <a href="mailto:support@blockarb.com" class="underline hover:text-blue_800">support@blockarb.com</a> </p>
                                </div>
                            </div>
                        </li>

                        <li class="mt-4 text-sm">
                            <div class="flex items-center">
                                <svg width="24" height="24" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.3333 4.66699H4.66668C3.38334 4.66699 2.34501 5.71699 2.34501 7.00033L2.33334 21.0003C2.33334 22.2837 3.38334 23.3337 4.66668 23.3337H23.3333C24.6167 23.3337 25.6667 22.2837 25.6667 21.0003V7.00033C25.6667 5.71699 24.6167 4.66699 23.3333 4.66699ZM22.8667 9.62533L14.6183 14.782C14.245 15.0153 13.755 15.0153 13.3817 14.782L5.13334 9.62533C5.01636 9.55965 4.91392 9.47093 4.83221 9.36452C4.75051 9.25811 4.69125 9.13623 4.65801 9.00626C4.62478 8.87628 4.61826 8.74092 4.63886 8.60835C4.65946 8.47578 4.70674 8.34877 4.77784 8.23501C4.84894 8.12125 4.94239 8.02309 5.05252 7.94649C5.16266 7.86988 5.28719 7.81642 5.41859 7.78934C5.54998 7.76226 5.68551 7.76212 5.81696 7.78893C5.94841 7.81574 6.07305 7.86895 6.18334 7.94533L14 12.8337L21.8167 7.94533C21.927 7.86895 22.0516 7.81574 22.1831 7.78893C22.3145 7.76212 22.45 7.76226 22.5814 7.78934C22.7128 7.81642 22.8374 7.86988 22.9475 7.94649C23.0576 8.02309 23.1511 8.12125 23.2222 8.23501C23.2933 8.34877 23.3406 8.47578 23.3612 8.60835C23.3818 8.74092 23.3752 8.87628 23.342 9.00626C23.3088 9.13623 23.2495 9.25811 23.1678 9.36452C23.0861 9.47093 22.9837 9.55965 22.8667 9.62533V9.62533Z"
                                        fill="#1744E4" />
                                </svg>

                                <div>
                                    <p class="text-sm ml-3"> <a href="mailto:info@blockarb.com" class="underline hover:text-blue_800">info@blockarb.com</a></p>
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
                                            fill="#1744E4" />
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
                            <div class="flex ">
                                <svg class=" flex-shrink-0" width="17" height="24" viewBox="0 0 21 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_82_987)">
                                        <path
                                            d="M9.09028 27.3C6.27083 23.7891 0 15.2797 0 10.5C0 4.70094 4.6429 0 10.3704 0C16.0957 0 20.7407 4.70094 20.7407 10.5C20.7407 15.2797 14.4213 23.7891 11.6505 27.3C10.9861 28.1367 9.75463 28.1367 9.09028 27.3ZM10.3704 14C12.277 14 13.8272 12.4305 13.8272 10.5C13.8272 8.56953 12.277 7 10.3704 7C8.46373 7 6.91358 8.56953 6.91358 10.5C6.91358 12.4305 8.46373 14 10.3704 14Z"
                                            fill="#1744E4" />
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
                                            fill="#1744E4" />
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
                    </ul>
                </div>
            </div>
        {{-- </div> --}}

        <div class=" py-3 border-t border-neutral_800 text-neutral_800">
            <p class="text-center text-s font-semibold">Copyright 2022, All Right Reserved, Blockchain Arbitrage</p> 
        </div>
    </footer>

</body>

</html>
