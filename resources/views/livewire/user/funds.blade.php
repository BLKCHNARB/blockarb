<div class=" bg-white p-4 pt-8 lg:p-12 h-ful rounded-lg">

    <div class=" mb-5 flex justify-between items-center">
        <h3 class=" text-2xl font-semibold"> Overview</h3>
    </div>

    <div class=" flex items-center justify-en space-x-4 my-10 lg:mt-0">
        <a href="{{ route('deposit') }}" class=" flex items-center bg-primary text-gray-200 rounded-sb py-[6px] px-4">
            <span class=" mr-2">Deposit</span>
            <svg class=" inline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                aria-hidden="true" role="img" width="20" height="20" preserveAspectRatio="xMidYMid meet"
                viewBox="0 0 24 24">
                <path fill="currentColor" d="M7 11V7l-5 5l5 5v-4h10v4l5-5l-5-5v4H7Z" />
            </svg>
        </a>

        <a href="{{ route('withdrawal') }}"
            class=" flex items-center bg-secondary text-gray-900 rounded-sb py-[6px] px-4">
            <span class=" mr-2">Withdraw</span>
            <svg width="20" height="20" class=" inline" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
            </svg>
        </a>
    </div>

    @if (!$account)
        <div class="mb-10">
            <div class=" rounded-sb p-3 lg:flex justify-between items-center border border-red-500 bg-red-50">
                <div class=" flex">
                    <svg class="text-red-500 inline mr-3 flex-none" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 6C12.5523 6 13 6.44772 13 7V13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13V7C11 6.44772 11.4477 6 12 6Z"
                            fill="currentColor" />
                        <path
                            d="M12 16C11.4477 16 11 16.4477 11 17C11 17.5523 11.4477 18 12 18C12.5523 18 13 17.5523 13 17C13 16.4477 12.5523 16 12 16Z"
                            fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12Z"
                            fill="currentColor" />
                    </svg>
                    <h5 class=" text-sm inline">Please, Add an account for funds withdrawal and receiving payments</h5>
                </div>

                <a href="{{ route('settings') }}"
                    class=" flex items-center justify-between mt-4 lg:mt-0 bg-red-500 text-gray-100 rounded-sb py-[6px] px-4">
                    <span class=" mr-2 font-bold whitespace-nowrap float-left">Add Account</span>
                    <svg class=" inline h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </a>
            </div>
        </div>
    @endif

    <div>

        <div x-data="{ openTab: 1 }">
            <div class="">
                <div class=" inline-block">
                    <h3 class=" font-bold text-2xl">Wallets</h3>
                    <h5 class=" mt-3">Start Investing, earn in different digital assets.</h5>
                </div>
            </div>
            <ul class=" flex items-center border-b border-gray-200 pb-5 mt-10" role="tablist">
                <li @click="openTab = 1" class=" font-bold cursor-pointer p-2 px-4"
                    :class=" openTab === 1 ? 'bg-yellow-500 rounded-md' : ''">
                    <a href="#tab-usd" class=" p-">
                        USD
                        {{-- <div class="flex items-center">
                            <div
                                class=" p-1 mr-4 bg-gray-700 text-white h-9 w-9 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                    <path fill="currentColor"
                                        d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3c0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156c0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616c0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769c0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                </svg>
                            </div>
                            <span class=" font-bold text-xl">Dollar</span>

                        </div>
                        <h5 class=" font-medium text-base mt-3 text-gray-500">Total balance</h5>
                        <h5 class=" font-semibold text-xl mt-1 font-poppins">${{ formatNumber($usdtProfitTotal + $usdtCapitalTotal) }}</h5> --}}
                    </a>
                </li>

                <li @click="openTab = 2" class=" font-bold cursor-pointer p-2 px-4"
                    :class=" openTab === 2 ? 'bg-yellow-500 rounded-md' : ''">
                    <a href="#tab-usd" class=" p-">
                        BTC
                        {{-- <div class="flex items-center">
                            <div
                                class=" p-1 mr-4 bg-gray-700 text-white h-9 w-9 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 100 100">
                                    <path fill="currentColor"
                                        d="M66.237 47.445c3.667-1.869 5.959-5.162 5.421-10.644c-.723-7.494-7.193-10.003-15.36-10.715l-.004-9.058c.002-.029.017-.054.017-.084c0-.691-.56-1.25-1.251-1.251h-3.813a1.25 1.25 0 0 0-1.249 1.25h-.029l.005 8.872c-1.664 0-3.364.033-5.052.068l-.003-8.83c.003-.038.022-.071.022-.11c0-.691-.56-1.25-1.251-1.251h-3.813a1.25 1.25 0 0 0-1.249 1.25l.001.003h-.031l.002 9.143c-1.37.028-2.715.057-4.027.057l-.001-.033h-8.726v.013a1.25 1.25 0 0 0-1.251 1.251v4.226c0 .691.56 1.251 1.251 1.251l.005-.001v.019s4.672-.091 4.594-.008c2.562.001 3.397 1.488 3.64 2.771l.005 11.843l.001.045l.005 16.587c-.112.806-.586 2.093-2.376 2.096c.081.071-4.599-.001-4.599-.001l-.001.006c-.008 0-.014-.005-.022-.005c-.601 0-1.079.432-1.2.997l-.051-.003l-1.152 5.169l.027.005c-.005.046-.027.086-.027.134c0 .664.522 1.195 1.176 1.236l-.003.019l8.233-.003c1.532 0 3.04.025 4.52.034l.007 9.262h.003c0 .69.56 1.25 1.251 1.25h3.813a1.251 1.251 0 0 0 1.249-1.251h.002l-.004-9.149c1.735.035 3.414.048 5.054.044l.002 9.106h.003c.001.69.56 1.25 1.25 1.25h3.813a1.251 1.251 0 0 0 1.249-1.251v-.001h.008l-.002-9.247c10.635-.615 18.079-3.297 18.999-13.286c.742-8.041-3.043-11.629-9.081-13.075zM45.072 33.32c3.571-.002 14.789-1.142 14.793 6.312c.001 7.148-11.218 6.318-14.789 6.32l-.004-12.632zm.011 32.935l-.003-13.929c4.288 0 17.733-1.238 17.736 6.955c.006 7.856-13.445 6.967-17.733 6.974z" />
                                </svg>
                            </div>
                            <span class=" font-bold text-xl">Bitcoin</span>

                        </div>
                        <h5 class=" font-medium text-base mt-3 text-gray-500">Total balance</h5>
                        <h5 class=" font-semibold text-xl mt-1 font-poppins">{{ formatNumber($btcProfitTotal + $btcCapitalTotal) }} BTC</h5> --}}
                    </a>
                </li>

                <li @click="openTab = 3" class=" font-bold cursor-pointer p-2 px-4"
                    :class=" openTab === 3 ? 'bg-yellow-500 rounded-md' : ''">
                    <a href="#tab-usd" class=" p-">
                        ETH
                        {{-- <div class="flex items-center">
                            <div
                                class=" p-1 mr-4 bg-gray-700 text-white h-9 w-9 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                    <path fill="currentColor"
                                        d="m15.927 23.959l-9.823-5.797l9.817 13.839l9.828-13.839l-9.828 5.797zM16.073 0L6.254 16.297l9.819 5.807l9.823-5.801z" />
                                </svg>
                            </div>
                            <span class=" font-bold text-xl">Ethereum</span>

                        </div>
                        <h5 class=" font-medium text-base mt-3 text-gray-500">Total balance</h5>
                        <h5 class=" font-semibold text-xl mt-1 font-poppins">${{ formatNumber($ethProfitTotal + $ethCapitalTotal) }} ETH</h5> --}}
                    </a>
                </li>
            </ul>

            <div class=" mt-10">
                <div class="" x-show="openTab === 1"
                    x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                    x-transition:enter-start="transform translate-y-2 opacity-0"
                    x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                    <div class="transition duration-700 ease-out">
                        <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-12 rounded-md divi">

                            <div class="col-span-6 mt-3">
                                <div class="p-5 border rounded-md">
                                    <div class="">
                                        <div
                                            class="inline-block align-top mt-[3px] mr-4 p-3 rounded-md bg-white text-primary shadow-lg">
                                            <svg class=" " xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" width="20" height="20"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M16 13.5q.65 0 1.075-.425q.425-.425.425-1.075q0-.65-.425-1.075Q16.65 10.5 16 10.5q-.65 0-1.075.425Q14.5 11.35 14.5 12q0 .65.425 1.075q.425.425 1.075.425ZM5 19V5v14Zm0 2q-.825 0-1.413-.587Q3 19.825 3 19V5q0-.825.587-1.413Q4.175 3 5 3h14q.825 0 1.413.587Q21 4.175 21 5v2.5h-2V5H5v14h14v-2.5h2V19q0 .825-.587 1.413Q19.825 21 19 21Zm8-4q-.825 0-1.412-.587Q11 15.825 11 15V9q0-.825.588-1.413Q12.175 7 13 7h7q.825 0 1.413.587Q22 8.175 22 9v6q0 .825-.587 1.413Q20.825 17 20 17Zm7-2V9h-7v6Z" />
                                            </svg>
                                        </div>


                                        <div class=" inline-block">
                                            <h5 class=" mr-3 font-medium text-lg text-gray-500">Balance</h5>
                                            <h5 class=" mt-3 font-bold text-2xl">
                                                ${{ formatNumber($usdtProfitTotal + $usdtCapitalTotal, 2) }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-6 mt-3">
                                <div class="p-5 border rounded-md">
                                    <div class="">
                                        <div
                                            class="inline-block align-top mt-[3px] mr-4 p-3 rounded-md bg-white text-primary shadow-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                            </svg>
                                        </div>


                                        <div class=" inline-block">
                                            <h5 class=" mr-3 font-medium text-lg text-gray-500">Capital</h5>
                                            <h5 class=" mt-3 font-bold text-2xl">
                                                ${{ formatNumber($usdtCapitalTotal, 2) }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-6 mt-3">
                                <div class="p-5 border rounded-md">
                                    <div class="">
                                        <div
                                            class="inline-block align-top mt-[3px] mr-4 p-3 rounded-md bg-white text-primary shadow-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" width="20" height="20"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m6 16.5l-3 2.94V11h3m5 3.66l-1.57-1.34L8 14.64V7h3m5 6l-3 3V3h3m2.81 9.81L17 11h5v5l-1.79-1.79L13 21.36l-3.47-3.02L5.75 22H3l6.47-6.34L13 18.64" />
                                            </svg>
                                        </div>


                                        <div class=" inline-block">
                                            <h5 class=" mr-3 font-medium text-lg text-gray-500">Profit</h5>
                                            <h5 class=" mt-3 font-bold text-2xl">${{ formatNumber($usdtProfitTotal, 2) }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-6 mt-3">
                                <div class="p-5 border rounded-md">
                                    <div class="">
                                        <div
                                            class="inline-block align-top mt-[3px] mr-4 p-3 rounded-md bg-white text-primary shadow-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" width="20" height="20"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M17 20h5v-2a3 3 0 0 0-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 0 1 5.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 0 1 9.288 0M15 7a3 3 0 1 1-6 0a3 3 0 0 1 6 0Zm6 3a2 2 0 1 1-4 0a2 2 0 0 1 4 0ZM7 10a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z" />
                                            </svg>
                                        </div>


                                        <div class=" inline-block">
                                            <h5 class=" mr-3 font-medium text-lg text-gray-500">Referral Bonus</h5>
                                            <h5 class=" mt-3 font-bold text-sm"> <a class="text-blue-500" href="{{route('downlines')}}">View</a> Referral Bonus
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class=" col-span-6 mt-3 ">
                                <div class="bg-primary-10 rounded-md p-5">
                                    <div class="flex items-center">
                                        <h5 class=" mr-3 font-semibold text-lg">Balance</h5>
                                        <div class=" rounded-full border border-gray-400 p-2">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" width="20" height="20"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M16 13.5q.65 0 1.075-.425q.425-.425.425-1.075q0-.65-.425-1.075Q16.65 10.5 16 10.5q-.65 0-1.075.425Q14.5 11.35 14.5 12q0 .65.425 1.075q.425.425 1.075.425ZM5 19V5v14Zm0 2q-.825 0-1.413-.587Q3 19.825 3 19V5q0-.825.587-1.413Q4.175 3 5 3h14q.825 0 1.413.587Q21 4.175 21 5v2.5h-2V5H5v14h14v-2.5h2V19q0 .825-.587 1.413Q19.825 21 19 21Zm8-4q-.825 0-1.412-.587Q11 15.825 11 15V9q0-.825.588-1.413Q12.175 7 13 7h7q.825 0 1.413.587Q22 8.175 22 9v6q0 .825-.587 1.413Q20.825 17 20 17Zm7-2V9h-7v6Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class=" mt-3 font-bold text-2xl">$12,345.09</h5>
                                </div>
                            </div>

                            <div class=" col-span-6 mt-3 ">
                                <div class="bg-primary-10 rounded-md p-5">
                                    <div class="flex items-center">
                                        <h5 class=" mr-3 font-semibold text-lg">Capital</h5>
                                        <div class=" rounded-full border border-gray-400 p-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class=" mt-3 font-bold text-2xl">$12,345.09</h5>
                                </div>
                            </div>
                            <div class=" col-span-6 mt-3 ">
                                <div class="bg-primary-10 rounded-md p-5">
                                    <div class="flex items-center">
                                        <h5 class=" mr-3 font-semibold text-lg">Profit</h5>
                                        <div class=" rounded-full border border-gray-400 p-2">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" width="20" height="20"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m6 16.5l-3 2.94V11h3m5 3.66l-1.57-1.34L8 14.64V7h3m5 6l-3 3V3h3m2.81 9.81L17 11h5v5l-1.79-1.79L13 21.36l-3.47-3.02L5.75 22H3l6.47-6.34L13 18.64" />
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class=" mt-3 font-bold text-2xl">$12,345.09</h5>
                                </div>
                            </div>
                            <div class=" col-span-6 mt-3 ">
                                <div class="bg-primary-10 rounded-md p-5">
                                    <div class="flex items-center">
                                        <h5 class=" mr-3 font-semibold text-lg">Referral Bonus</h5>
                                        <div class=" rounded-full border border-gray-400 p-2">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" width="20" height="20"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M17 20h5v-2a3 3 0 0 0-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 0 1 5.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 0 1 9.288 0M15 7a3 3 0 1 1-6 0a3 3 0 0 1 6 0Zm6 3a2 2 0 1 1-4 0a2 2 0 0 1 4 0ZM7 10a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class=" mt-3 font-bold text-2xl">$12,345.09</h5>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="" x-show="openTab === 2"
                    x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                    x-transition:enter-start="transform translate-y-2 opacity-0"
                    x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                    <div class="transition duration-700 ease-out">
                        <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-12 rounded-md divi">
                            <div class="col-span-6 mt-3">
                                <div class="p-5 border rounded-md">
                                    <div class="">
                                        <div
                                            class="inline-block align-top mt-[3px] mr-4 p-3 rounded-md bg-white text-primary shadow-lg">
                                            <svg class=" " xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" width="20" height="20"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M16 13.5q.65 0 1.075-.425q.425-.425.425-1.075q0-.65-.425-1.075Q16.65 10.5 16 10.5q-.65 0-1.075.425Q14.5 11.35 14.5 12q0 .65.425 1.075q.425.425 1.075.425ZM5 19V5v14Zm0 2q-.825 0-1.413-.587Q3 19.825 3 19V5q0-.825.587-1.413Q4.175 3 5 3h14q.825 0 1.413.587Q21 4.175 21 5v2.5h-2V5H5v14h14v-2.5h2V19q0 .825-.587 1.413Q19.825 21 19 21Zm8-4q-.825 0-1.412-.587Q11 15.825 11 15V9q0-.825.588-1.413Q12.175 7 13 7h7q.825 0 1.413.587Q22 8.175 22 9v6q0 .825-.587 1.413Q20.825 17 20 17Zm7-2V9h-7v6Z" />
                                            </svg>
                                        </div>


                                        <div class=" inline-block">
                                            <h5 class=" mr-3 font-medium text-lg text-gray-500">Balance</h5>
                                            <h5 class=" mt-3 font-bold text-2xl">
                                                {{ formatNumber($btcProfitTotal + $btcCapitalTotal, 4) }} BTC</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-6 mt-3">
                                <div class="p-5 border rounded-md">
                                    <div class="">
                                        <div
                                            class="inline-block align-top mt-[3px] mr-4 p-3 rounded-md bg-white text-primary shadow-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                            </svg>
                                        </div>


                                        <div class=" inline-block">
                                            <h5 class=" mr-3 font-medium text-lg text-gray-500">Capital</h5>
                                            <h5 class=" mt-3 font-bold text-2xl">
                                                {{ formatNumber($btcCapitalTotal, 4) }} BTC</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-6 mt-3">
                                <div class="p-5 border rounded-md">
                                    <div class="">
                                        <div
                                            class="inline-block align-top mt-[3px] mr-4 p-3 rounded-md bg-white text-primary shadow-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" width="20" height="20"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m6 16.5l-3 2.94V11h3m5 3.66l-1.57-1.34L8 14.64V7h3m5 6l-3 3V3h3m2.81 9.81L17 11h5v5l-1.79-1.79L13 21.36l-3.47-3.02L5.75 22H3l6.47-6.34L13 18.64" />
                                            </svg>
                                        </div>


                                        <div class=" inline-block">
                                            <h5 class=" mr-3 font-medium text-lg text-gray-500">Profit</h5>
                                            <h5 class=" mt-3 font-bold text-2xl">{{ formatNumber($btcProfitTotal, 4) }} BTC
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-6 mt-3">
                                <div class="p-5 border rounded-md">
                                    <div class="">
                                        <div
                                            class="inline-block align-top mt-[3px] mr-4 p-3 rounded-md bg-white text-primary shadow-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" width="20" height="20"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M17 20h5v-2a3 3 0 0 0-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 0 1 5.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 0 1 9.288 0M15 7a3 3 0 1 1-6 0a3 3 0 0 1 6 0Zm6 3a2 2 0 1 1-4 0a2 2 0 0 1 4 0ZM7 10a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z" />
                                            </svg>
                                        </div>


                                        <div class=" inline-block">
                                            <h5 class=" mr-3 font-medium text-lg text-gray-500">Referral Bonus</h5>
                                            <h5 class=" mt-3 font-bold text-2xl">{{ formatNumber($btcProfitTotal, 4) }} BTC
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="" x-show="openTab === 3"
                    x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                    x-transition:enter-start="transform translate-y-2 opacity-0"
                    x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                    <div class="transition duration-700 ease-out">
                        <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-12 rounded-md divi">
                            <div class="col-span-6 mt-3">
                                <div class="p-5 border rounded-md">
                                    <div class="">
                                        <div
                                            class="inline-block align-top mt-[3px] mr-4 p-3 rounded-md bg-white text-primary shadow-lg">
                                            <svg class=" " xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" width="20" height="20"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M16 13.5q.65 0 1.075-.425q.425-.425.425-1.075q0-.65-.425-1.075Q16.65 10.5 16 10.5q-.65 0-1.075.425Q14.5 11.35 14.5 12q0 .65.425 1.075q.425.425 1.075.425ZM5 19V5v14Zm0 2q-.825 0-1.413-.587Q3 19.825 3 19V5q0-.825.587-1.413Q4.175 3 5 3h14q.825 0 1.413.587Q21 4.175 21 5v2.5h-2V5H5v14h14v-2.5h2V19q0 .825-.587 1.413Q19.825 21 19 21Zm8-4q-.825 0-1.412-.587Q11 15.825 11 15V9q0-.825.588-1.413Q12.175 7 13 7h7q.825 0 1.413.587Q22 8.175 22 9v6q0 .825-.587 1.413Q20.825 17 20 17Zm7-2V9h-7v6Z" />
                                            </svg>
                                        </div>


                                        <div class=" inline-block">
                                            <h5 class=" mr-3 font-medium text-lg text-gray-500">Balance</h5>
                                            <h5 class=" mt-3 font-bold text-2xl">
                                                {{ formatNumber($ethProfitTotal + $ethCapitalTotal, 4) }} ETH</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-6 mt-3">
                                <div class="p-5 border rounded-md">
                                    <div class="">
                                        <div
                                            class="inline-block align-top mt-[3px] mr-4 p-3 rounded-md bg-white text-primary shadow-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                            </svg>
                                        </div>


                                        <div class=" inline-block">
                                            <h5 class=" mr-3 font-medium text-lg text-gray-500">Capital</h5>
                                            <h5 class=" mt-3 font-bold text-2xl">
                                                {{ formatNumber($ethCapitalTotal, 4) }} ETH</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-6 mt-3">
                                <div class="p-5 border rounded-md">
                                    <div class="">
                                        <div
                                            class="inline-block align-top mt-[3px] mr-4 p-3 rounded-md bg-white text-primary shadow-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" width="20" height="20"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m6 16.5l-3 2.94V11h3m5 3.66l-1.57-1.34L8 14.64V7h3m5 6l-3 3V3h3m2.81 9.81L17 11h5v5l-1.79-1.79L13 21.36l-3.47-3.02L5.75 22H3l6.47-6.34L13 18.64" />
                                            </svg>
                                        </div>


                                        <div class=" inline-block">
                                            <h5 class=" mr-3 font-medium text-lg text-gray-500">Profit</h5>
                                            <h5 class=" mt-3 font-bold text-2xl">
                                                {{ formatNumber($ethProfitTotal, 4) }} ETH</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-6 mt-3">
                                <div class="p-5 border rounded-md">
                                    <div class="">
                                        <div
                                            class="inline-block align-top mt-[3px] mr-4 p-3 rounded-md bg-white text-primary shadow-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" width="20" height="20"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M17 20h5v-2a3 3 0 0 0-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 0 1 5.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 0 1 9.288 0M15 7a3 3 0 1 1-6 0a3 3 0 0 1 6 0Zm6 3a2 2 0 1 1-4 0a2 2 0 0 1 4 0ZM7 10a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z" />
                                            </svg>
                                        </div>


                                        <div class=" inline-block">
                                            <h5 class=" mr-3 font-medium text-lg text-gray-500">Referral Bonus</h5>
                                            <h5 class=" mt-3 font-bold text-2xl">
                                                {{ formatNumber($ethProfitTotal, 4) }} ETH</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
