<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BlockArb') }}</title>

    <!-- Fonts -->
    <link rel="icon" type="image/x-icon" href={{asset('favicon.png')}}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
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

<body>
    <div class=" text-gray-700 antialiased">

        {{-- preloader --}}

        {{-- <div id="preloader" style="transition: all 2s ease-out"
            class=" bg-gradient-to-r from-primary to-primary-700 fixed left-0 top-0 right-0 bottom-0 w-full z-50">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                <div class=" animate-pulse w-4 h-4 rounded-full border-4 mx-2 my-0 float-left border-secondary"></div>
                <div
                    class=" animate-pulse w-4 h-4 delay-150 rounded-full border-4 mx-2 my-0 float-left border-secondary">
                </div>
                <div
                    class=" animate-pulse w-4 h-4 delay-300 rounded-full border-4 mx-2 my-0 float-left border-secondary">
                </div>
            </div>
        </div> --}}

        {{-- preloader --}}

        {{-- navigation --}}

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

        {{-- navigation --}}
        {{ $slot }}
        {{--  --}}

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
    </div>
</body>

</html>
