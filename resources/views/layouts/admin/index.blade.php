<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"
        integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    @livewireStyles
</head>

<body class="font-poppins antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Page Content -->
        <main>
            <div class=" h-screen flex relative" x-data="{ open: false }">
                <div class=" hidden lg:w-72 bg-white lg:flex flex-col border-r border-gray-300">
                    <div class=" p-5 border-b border-gray-300">
                        <div class=" ">
                            <h4 class=" text-2xl font-bold text-left pl-2"> <span class=" text-secondary">A</span>rbfi
                            </h4>
                        </div>
                        <a class=" flex bg-seconday p-2 pt-4 rounded-sb items-center mt-2" href="mailto:support@blockarb.com">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <span class=" ml-2 text-sm">Contact Support</span>
                        </a>
                    </div>

                    <div class=" p-5 flex flex-col justify-between flex-1 overflow-auto">
                        <div class="flex flex-col space-y-4 text-gray-500">
                            <a class="{{ request()->is('admin') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('admin.home') }}">
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
                                <span class=" ml-2 text-sm">Home</span>
                            </a>
                    
                            <a class="{{ request()->is('admin/investments') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('admin.investments') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                                <span class=" ml-2 text-sm">Active Investments</span>
                            </a>
                    
                            <a class="{{ request()->is('admin/withdrawals') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('admin.withdrawals') }}">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z"
                                        fill="currentColor" />
                                </svg>
                                <span class=" ml-2 text-sm">Withdrawal Requests</span>
                            </a>

                            <a class="{{ request()->is('admin/compounds') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('admin.compounds') }}">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z"
                                        fill="currentColor" />
                                </svg>
                                <span class=" ml-2 text-sm">Compound Requests</span>
                            </a>
                    
                            <a class="{{ request()->is('admin/pending') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('admin.pending') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="3"
                                        d="M29 17v11H3V17M2 8h28v8s-6 4-14 4s-14-4-14-4V8Zm14 14v-4m4-10s0-4-4-4s-4 4-4 4" />
                                </svg>
                                <span class=" ml-2 text-sm">Pending Orders</span>
                            </a>

                            <a class="{{ request()->is('admin/claims') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('admin.claims') }}">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z"
                                        fill="currentColor" />
                                </svg>
                                <span class=" ml-2 text-sm">Claims</span>
                            </a>
                    
                            <a class="{{ request()->is('admin/tokens') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('admin.tokens') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M4 19V8v11Zm0 2q-.825 0-1.412-.587Q2 19.825 2 19V8q0-.825.588-1.412Q3.175 6 4 6h4V4q0-.825.588-1.413Q9.175 2 10 2h4q.825 0 1.413.587Q16 3.175 16 4v2h4q.825 0 1.413.588Q22 7.175 22 8v4.275q-.45-.325-.95-.563q-.5-.237-1.05-.412V8H4v11h7.075q.075.525.225 1.025q.15.5.375.975Zm6-15h4V4h-4Zm8 17q-2.075 0-3.537-1.462Q13 20.075 13 18q0-2.075 1.463-3.538Q15.925 13 18 13t3.538 1.462Q23 15.925 23 18q0 2.075-1.462 3.538Q20.075 23 18 23Zm1.65-2.65l.7-.7l-1.85-1.85V15h-1v3.2Z" />
                                </svg>
                                <span class=" ml-2 text-sm">Tokens</span>
                            </a>
                    
                            <a class="{{ request()->is('admin/plans') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('admin.plans') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M19.924 10.383a1 1 0 0 0-.217-1.09l-5-5l-1.414 1.414L16.586 9H4v2h15a1 1 0 0 0 .924-.617zM4.076 13.617a1 1 0 0 0 .217 1.09l5 5l1.414-1.414L7.414 15H20v-2H5a.999.999 0 0 0-.924.617z" />
                                </svg>
                                <span class=" ml-2 text-sm">Plans</span>
                            </a>
                    
                            <a class="{{ request()->is('admin/create') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('admin.create') }}">
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
                                <span class=" ml-2 text-sm">Create</span>
                            </a>
                        </div>
                    
                        <div class="flex space-x-2 m-auto">
                            <div class=" rounded-md border border-gray-400 p-1 text-gray-600">
                                <a href="#">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12 7C9.23858 7 7 9.23858 7 12C7 14.7614 9.23858 17 12 17C14.7614 17 17 14.7614 17 12C17 9.23858 14.7614 7 12 7ZM9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12Z"
                                            fill="currentColor" />
                                        <path
                                            d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                                            fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5 1C2.79086 1 1 2.79086 1 5V19C1 21.2091 2.79086 23 5 23H19C21.2091 23 23 21.2091 23 19V5C23 2.79086 21.2091 1 19 1H5ZM19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                    
                            <div class=" rounded-md border border-gray-400 p-1 text-gray-600">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" role="img" width="20" height="20"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M4.372 7.264a.784.784 0 0 0-.252-.658L2.252 4.339V4H8.05l4.482 9.905L16.472 4H22v.339L20.403 5.88a.472.472 0 0 0-.177.452v11.334a.472.472 0 0 0 .177.452l1.56 1.542V20h-7.844v-.339l1.616-1.58c.159-.16.159-.207.159-.451V8.468l-4.492 11.494h-.606L5.566 8.468v7.704c-.043.323.064.65.29.884l2.101 2.568v.338H2v-.338l2.1-2.568a1.03 1.03 0 0 0 .272-.884V7.264Z" />
                                    </svg>
                                </a>
                            </div>
                    
                            <div class=" rounded-md border border-gray-400 p-1 text-gray-600">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-facebook">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    
                        <div class=" bg-primary-800 rounded-lg p-3">
                            <div class="flex flex-col space-y-4 text-gray-100">
                    
                                {{-- <a class="{{ request()->is('admin/settings') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                    href="{{ route('settings') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                    <span class=" ml-2 text-sm">Account Settings</span>
                                </a> --}}
                    
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class=" flex bg-transparent text-gray-100 p-2 pl-3 rounded-sb items-center"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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
                <div x-show="open == true"
                    class=" w-full h-screen fixed bg-gray-900 z-20 opacity-60  top-0 left-0 right-0 bottom-0 transition-all">
                </div>
                <div x-data="{show:false}"
                    class=" duration-500 -translate-x-full w-5/6 h-screen z-30 bg-white flex flex-col lg:hidden fixed "
                    :class="{ 'translate-x-0 ease-in-out': open == true, '-translate-x-full ease-in-out': open == false }">
                    <div class="flex justify-between p-5 px-8">
                        <h5>BlockArb</h5>
                        <div class="" @click="open = false">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>

                        </div>
                    </div>
                    <div class="flex border-y-2 border-gray-300 p-5 px-8 items-center">
                        <div class="  rounded-full w ">
                            <img class=" rounded-full border-2 border-secondary w-8 h-8"
                                src="{{ asset('images/pers.jpg') }}" alt="">
                        </div>
                        <div class=" ml-4 flex-1">
                            <h5>{{ Auth()->user()->first_name . ' ' . Auth()->user()->last_name }}</h5>
                            <h5 class=" text-sm text-gray-500">{{ Auth()->user()->email }}</h5>
                        </div>
                        <div @click="show = !show" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>

                        </div>
                    </div>

                    <div class=" p-5 flex flex-col justify-between flex-1 overflow-auto">
                        <div class="flex flex-col space-y-4 text-gray-500">
                            <a class="{{ request()->is('admin') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('admin.home') }}">
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
                                <span class=" ml-2 text-sm">Home</span>
                            </a>
                    
                            <a class="{{ request()->is('admin/investments') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('admin.investments') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                                <span class=" ml-2 text-sm">Active Investments</span>
                            </a>
                    
                            <a class="{{ request()->is('admin/withdrawals') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('admin.withdrawals') }}">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z"
                                        fill="currentColor" />
                                </svg>
                                <span class=" ml-2 text-sm">Withdrawal Requests</span>
                            </a>

                            <a class="{{ request()->is('admin/compounds') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('admin.compounds') }}">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z"
                                        fill="currentColor" />
                                </svg>
                                <span class=" ml-2 text-sm">Compound Requests</span>
                            </a>
                    
                            <a class="{{ request()->is('admin/pending') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('admin.pending') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="3"
                                        d="M29 17v11H3V17M2 8h28v8s-6 4-14 4s-14-4-14-4V8Zm14 14v-4m4-10s0-4-4-4s-4 4-4 4" />
                                </svg>
                                <span class=" ml-2 text-sm">Pending Orders</span>
                            </a>
                    
                            <a class="{{ request()->is('admin/tokens') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('admin.tokens') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M4 19V8v11Zm0 2q-.825 0-1.412-.587Q2 19.825 2 19V8q0-.825.588-1.412Q3.175 6 4 6h4V4q0-.825.588-1.413Q9.175 2 10 2h4q.825 0 1.413.587Q16 3.175 16 4v2h4q.825 0 1.413.588Q22 7.175 22 8v4.275q-.45-.325-.95-.563q-.5-.237-1.05-.412V8H4v11h7.075q.075.525.225 1.025q.15.5.375.975Zm6-15h4V4h-4Zm8 17q-2.075 0-3.537-1.462Q13 20.075 13 18q0-2.075 1.463-3.538Q15.925 13 18 13t3.538 1.462Q23 15.925 23 18q0 2.075-1.462 3.538Q20.075 23 18 23Zm1.65-2.65l.7-.7l-1.85-1.85V15h-1v3.2Z" />
                                </svg>
                                <span class=" ml-2 text-sm">Tokens</span>
                            </a>
                    
                            <a class="{{ request()->is('admin/plans') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('admin.plans') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M19.924 10.383a1 1 0 0 0-.217-1.09l-5-5l-1.414 1.414L16.586 9H4v2h15a1 1 0 0 0 .924-.617zM4.076 13.617a1 1 0 0 0 .217 1.09l5 5l1.414-1.414L7.414 15H20v-2H5a.999.999 0 0 0-.924.617z" />
                                </svg>
                                <span class=" ml-2 text-sm">Plans</span>
                            </a>
                    
                            <a class="{{ request()->is('admin/create') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                href="{{ route('admin.create') }}">
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
                                <span class=" ml-2 text-sm">Create</span>
                            </a>
                        </div>
                    
                        <div class="flex space-x-2 m-auto">
                            <div class=" rounded-md border border-gray-400 p-1 text-gray-600">
                                <a href="#">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12 7C9.23858 7 7 9.23858 7 12C7 14.7614 9.23858 17 12 17C14.7614 17 17 14.7614 17 12C17 9.23858 14.7614 7 12 7ZM9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12Z"
                                            fill="currentColor" />
                                        <path
                                            d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                                            fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5 1C2.79086 1 1 2.79086 1 5V19C1 21.2091 2.79086 23 5 23H19C21.2091 23 23 21.2091 23 19V5C23 2.79086 21.2091 1 19 1H5ZM19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                    
                            <div class=" rounded-md border border-gray-400 p-1 text-gray-600">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" role="img" width="20" height="20"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M4.372 7.264a.784.784 0 0 0-.252-.658L2.252 4.339V4H8.05l4.482 9.905L16.472 4H22v.339L20.403 5.88a.472.472 0 0 0-.177.452v11.334a.472.472 0 0 0 .177.452l1.56 1.542V20h-7.844v-.339l1.616-1.58c.159-.16.159-.207.159-.451V8.468l-4.492 11.494h-.606L5.566 8.468v7.704c-.043.323.064.65.29.884l2.101 2.568v.338H2v-.338l2.1-2.568a1.03 1.03 0 0 0 .272-.884V7.264Z" />
                                    </svg>
                                </a>
                            </div>
                    
                            <div class=" rounded-md border border-gray-400 p-1 text-gray-600">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-facebook">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    
                        <div class=" bg-primary-800 rounded-lg p-3">
                            <div class="flex flex-col space-y-4 text-gray-100">
                    
                                {{-- <a class="{{ request()->is('admin/settings') ? ' bg-primary-200 text-primary-700 ' : ' ' }} flex p-2 pl-3 rounded-sb items-center"
                                    href="{{ route('settings') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                    <span class=" ml-2 text-sm">Account Settings</span>
                                </a> --}}
                    
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class=" flex bg-transparent text-gray-100 p-2 pl-3 rounded-sb items-center"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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
                <div class=" flex-auto flex flex-col bg-primary-10 text-gray-700 overflow-auto">
                    <div class=" w-full lg:w-auto py-3 px-4 md:px-10 bg-white fixed z-10 lg:left-72 right-0 shadow-sm">
                        <div class="flex justify-between lg:hidden">
                            <div class="" @click="open = true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 9h16.5m-16.5 6.75h16.5" />
                                </svg>
                            </div>
                            <div class="">
                                <h5>BlockArb</h5>
                            </div>
                            <div x-data = "{display:false}" class="rounded-full relative">
                                <img @click = "display = !display" class=" rounded-full border-2 border-secondary w-8 h-8"
                                    src="{{ asset('images/pers.jpg') }}" alt="">
                                <div class="absolute top-10 duration-300 right-0 bg-white shadow-lg rounded-sm whitespace-nowrap" :class="{'translate-y-0 opacity-100 visible': display == true, 'translate-y-3 opacity-0 invisible': display == false}">
                                    <div class=" py-5 px-8">
                                        <div class=" mt-">
                                            <div class=" flex text-blue-500 mt-1">
                                                <a href="{{ route('deposit') }}" class=" mr-4 text-sm">Deposit
                                                    Funds</a>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img" width="20" height="20"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                                    <path fill="currentColor" fill-rule="evenodd"
                                                        d="M8 1h-.542L3.553 4.905l1.061 1.06l2.637-2.61v6.177h1.498V3.355l2.637 2.61l1.061-1.06L8.542 1H8zm1.956 12.013a2 2 0 1 1-4 0a2 2 0 0 1 4 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>

                                            <div class=" flex text-blue-500 mt-1">
                                                <a href="{{ route('withdrawal') }}" class=" mr-4 text-sm">Withdraw
                                                    Funds</a>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img" width="20" height="20"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 12 12">
                                                    <path fill="currentColor"
                                                        d="M6 1a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 1 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L5.5 5.293V1.5A.5.5 0 0 1 6 1Zm0 10a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3Z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" py-5 px-8 ">
                                        <a href="" class=" flex text-gray-500 mb-3 items-center">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7ZM14 7C14 8.10457 13.1046 9 12 9C10.8954 9 10 8.10457 10 7C10 5.89543 10.8954 5 12 5C13.1046 5 14 5.89543 14 7Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M16 15C16 14.4477 15.5523 14 15 14H9C8.44772 14 8 14.4477 8 15V21H6V15C6 13.3431 7.34315 12 9 12H15C16.6569 12 18 13.3431 18 15V21H16V15Z"
                                                    fill="currentColor" />
                                            </svg>

                                            <h5 class=" ml-2 text-sm">View Profile</h5>
                                        </a>

                                        <a href="" class=" flex text-gray-500 items-center">
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
                                </div>
                            </div>
                        </div>
                        <div class="hidden lg:flex items-center justify-between">
                            <h3 class=" text-2xl font-semibold"> Welcome {{ Auth()->user()->first_name }}! </h3>
                            <div class=" flex space-x-4 items-center">

                                {{--  --}}
                                <div class=" relative" x-data="{ open: false }">
                                    <div class=" relative p-1 rounded-full bg-primary-100 cursor-pointer"
                                        x-on:click="open = true">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                        </svg>
                                        <span class="absolute top-0 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                    </div>
                                    <div class=" absolute right-5 top-5 shadow-md bg-white" x-show="open" x-cloak
                                        x-transition @click.away="open = false">
                                        <div class=" py-5 px-8 ">
                                            <h5 class=" font-semibold text-sm text-gray-500 whitespace-nowrap">You have
                                                no notifications</h5>
                                        </div>
                                    </div>
                                </div>
                                {{--  --}}

                                {{-- <div class=" relative p-1 rounded-full bg-primary-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                    </svg>
                                    <span class="absolute top-0 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                </div> --}}

                                <div class=" flex items-center space-x-2">
                                    <div class="  rounded-full ">
                                        <img class=" rounded-full border-2 border-secondary w-8 h-8"
                                            src="{{ asset('images/pers.jpg') }}" alt="">
                                    </div>

                                    <div>
                                        <h3 class=" text-sm font-extrabold">
                                            {{ Auth()->user()->first_name . ' ' . Auth()->user()->last_name }}</h3>
                                        <h5 class=" text-xs">{{ Auth()->user()->email }}</h5>
                                    </div>
                                </div>

                                <div class=" relative" x-data="{ open: false }">
                                    <div class="cursor-pointer" x-on:click="open = true">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                        </svg>
                                    </div>
                                    <div class=" absolute right-5 top-5 shadow-md bg-white" x-show="open" x-cloak
                                        x-transition @click.away="open = false">
                                        <div class="divide-y whitespace-nowrap ">
                                            <div class=" py-5 px-8 bg-primary-50">
                                                <h5 class=" font-semibold">
                                                    {{ Auth()->user()->first_name . ' ' . Auth()->user()->last_name }}
                                                </h5>
                                                <h5 class=" text-sm text-gray-400">{{ Auth()->user()->email }}</h5>
                                            </div>

                                            <div class=" py-5 px-8">
                                                {{-- <div>
                                                    <h5 class=" mb-3 font-semibold">Account Balance</h5>
                                                    <h5 class=" text-gray-600">20,540.00 <span
                                                            class=" font-semibold">USD</span></h5>
                                                    <h5 class=" text-gray-600">20.00 <span
                                                            class=" font-semibold">BTC</span></h5>
                                                    <h5 class=" text-gray-600">20.00 <span
                                                            class=" font-semibold">ETH</span></h5>
                                                </div> --}}

                                                <div class=" mt-">
                                                    <div class=" flex text-blue-500 mt-1">
                                                        <a href="{{ route('deposit') }}"
                                                            class=" mr-4 text-sm">Deposit Funds</a>
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            aria-hidden="true" role="img" width="20"
                                                            height="20" preserveAspectRatio="xMidYMid meet"
                                                            viewBox="0 0 16 16">
                                                            <path fill="currentColor" fill-rule="evenodd"
                                                                d="M8 1h-.542L3.553 4.905l1.061 1.06l2.637-2.61v6.177h1.498V3.355l2.637 2.61l1.061-1.06L8.542 1H8zm1.956 12.013a2 2 0 1 1-4 0a2 2 0 0 1 4 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </div>

                                                    <div class=" flex text-blue-500 mt-1">
                                                        <a href="{{ route('withdrawal') }}"
                                                            class=" mr-4 text-sm">Withdraw Funds</a>
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            aria-hidden="true" role="img" width="20"
                                                            height="20" preserveAspectRatio="xMidYMid meet"
                                                            viewBox="0 0 12 12">
                                                            <path fill="currentColor"
                                                                d="M6 1a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 1 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L5.5 5.293V1.5A.5.5 0 0 1 6 1Zm0 10a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" py-5 px-8 ">
                                                <a href="" class=" flex text-gray-500 mb-3 items-center">
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

                                                <a href="" class=" flex text-gray-500 items-center">
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

                                            <div class=" py-5 px-8 bg-primary-50">
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
                    </div>

                    {{-- <div class=" h-14 lg:h-16"></div> --}}

                    <div class=" p-2 md:p-10 h-ull mt-14">

                        {{ $slot }}

                    </div>

                    <div class=" p-5 lg:px-10 bg-white shadow-sm border-t border-gray-300 mt-auto">
                        <div class=" text-center text-sm">
                            <h5>Copyright © Blockchain Arbitrage {{ now()->year }}. All Rights Reserved.</h5>
                        </div>
                    </div>

                </div>



            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        Dropzone.options.dropzone = {
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            maxFilesize: "",
            addRemoveLinks: true,
        }

        let clipboard = new ClipboardJS('.btn-clip');
        clipboard.on('success', function(e) {
            // console.log(e)
            // setTimeout(() => {
            //     $(e.trigger).text("Copied!");
            // }, 2000);
        })

        window.addEventListener('alert', event => {
            iziToast.success({
                title: 'Withdrawal',
                message: event.detail.message
            });

            // toastr[event.detail.type](event.detail.message,
            //     event.detail.title ?? ''), toastr.options = {
            //     "closeButton": true,
            //     "progressBar": true,
            // }
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
