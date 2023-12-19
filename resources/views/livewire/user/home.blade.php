<div class=" bg-white p-4 pt-8 lg:p-12 h-full rounded-lg">
    <div class=" mb-5 lg:flex justify-between items-center">
        <h5 class=" text-sm font-bold"> Here's an overview of the performance of your BlockArb digital assets </h5>
        {{-- <div class=" flex items-center space-x-4 mt-5 lg:mt-0">
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
        </div> --}}
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

    <div x-data="{ openTab: 1 }" class=" mb-10">
        <ul class=" flex items-center space-x-" role="tablist">
            <li @click="openTab = 1" class=" font-bold cursor-pointer p-2 px-4"
                :class=" openTab === 1 ? 'bg-secondary rounded-md' : ''">
                <a href="#">USD</a>
            </li>
            <li @click="openTab = 2" class=" font-bold cursor-pointer p-2 px-4"
                :class=" openTab === 2 ? 'bg-secondary rounded-md' : ''">
                <a href="#">BTC</a>
            </li>
            <li @click="openTab = 3" class=" font-bold cursor-pointer p-2 px-4"
                :class=" openTab === 3 ? 'bg-secondary rounded-md' : ''">
                <a href="#">ETH</a>
            </li>
        </ul>

        <div class=" mt-10">
            <div class="" x-show="openTab === 1"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">
                    <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-12">

                        <div
                            class="  borde border-gray-300 shadow-m rounded-m col-span-5 fle flex-col justify-between space-y- divide-">


                            <div class=" p-5 rounded-md border shadow-s border-gray-300 mt-3">
                                <div class="flex items-center">
                                    <div class=" rounded-md bg-primary-600 p-5">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.5 0.5V10.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M3.5 0.5V10.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M6.5 0.5V10.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M11 0.5V10.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M13.5 0.5V10.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M0.5 13.5H13.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>

                                    <div class=" ml-3">
                                        <h5 class=" text-sm text-gray-500">Capital</h5>
                                        <h5 class=" text-xl font-bold">${{ formatNumber($usdtCapitalTotal, 4) }}</h5>
                                    </div>

                                </div>
                            </div>

                            <div class=" p-5 rounded-md border shadow-s border-gray-300 mt-3">
                                <div class="flex items-center">
                                    <div class=" rounded-md bg-primary-600 text-gray-100 p-5">
                                        <svg class=" text-white" width="20" height="20" viewBox="0 0 14 8"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.5 7.5H13.5V3.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13.5 7.5L7.85 1.85C7.75654 1.75839 7.63088 1.70707 7.5 1.70707C7.36912 1.70707 7.24346 1.75839 7.15 1.85L4.85 4.15C4.75654 4.24161 4.63088 4.29293 4.5 4.29293C4.36912 4.29293 4.24346 4.24161 4.15 4.15L0.5 0.5"
                                                stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                    </div>

                                    <div class=" ml-3">
                                        <h5 class=" text-sm text-gray-500">Profit</h5>
                                        <h5 class=" text-xl font-bold">${{ formatNumber($usdtProfitTotal, 4) }}</h5>
                                    </div>

                                </div>
                            </div>

                            <div class=" p-5 rounded-md border shadow-s border-gray-300 mt-3">
                                <div class="flex items-center">
                                    <div class=" rounded-md bg-primary-600 p-5">
                                        <svg width="20" height="20" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_6_5759)">
                                                <path
                                                    d="M9 7.5C11.4853 7.5 13.5 6.60457 13.5 5.5C13.5 4.39543 11.4853 3.5 9 3.5C6.51472 3.5 4.5 4.39543 4.5 5.5C4.5 6.60457 6.51472 7.5 9 7.5Z"
                                                    stroke="#ffffff" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M4.5 5.5V11.5C4.5 12.6 6.5 13.5 9 13.5C11.5 13.5 13.5 12.6 13.5 11.5V5.5"
                                                    stroke="#ffffff" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M13.5 8.5C13.5 9.6 11.5 10.5 9 10.5C6.5 10.5 4.5 9.6 4.5 8.5"
                                                    stroke="#ffffff" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M8.9 1.5C7.73149 0.778878 6.37133 0.430119 5 0.500003C2.51 0.500003 0.5 1.4 0.5 2.5C0.5 3.09 1.08 3.62 2 4"
                                                    stroke="#ffffff" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M2 10C1.08 9.62 0.5 9.09 0.5 8.5V2.5" stroke="#ffffff"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2 7C1.08 6.62 0.5 6.09 0.5 5.5" stroke="#ffffff"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_6_5759">
                                                    <rect width="14" height="14" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>

                                    <div class=" ml-3">
                                        <h5 class=" text-sm text-gray-500">Available Balance</h5>
                                        <h5 class=" text-xl font-bold">
                                            ${{ formatNumber($usdtProfitTotal + $usdtCapitalTotal, 4) }}</h5>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div
                            class="chart-usd text-center border border-gray-300 mt-5 lg:mt-0 shadow-m p-5 rounded-md col-span-7">
                            <canvas id="chart-usd"></canvas>
                            {{-- <a href="" class=" text-blue-700 text-center font-bold">Compound</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="" x-show="openTab === 2"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">
                    <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-12">
                        {{--  --}}
                        <div
                            class="  borde border-gray-300 shadow-m rounded-m col-span-5 fle flex-col justify-between space-y- divide-">


                            <div class=" p-5 rounded-md border shadow-s border-gray-300 mt-3">
                                <div class="flex items-center">
                                    <div class=" rounded-md bg-primary-600 p-5">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.5 0.5V10.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M3.5 0.5V10.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M6.5 0.5V10.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M11 0.5V10.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M13.5 0.5V10.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M0.5 13.5H13.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>

                                    <div class=" ml-3">
                                        <h5 class=" text-sm text-gray-500">Capital</h5>
                                        <h5 class=" text-xl font-bold">{{ formatNumber($btcCapitalTotal, 4) }} BTC</h5>
                                    </div>

                                </div>
                            </div>

                            <div class=" p-5 rounded-md border shadow-s border-gray-300 mt-3">
                                <div class="flex items-center">
                                    <div class=" rounded-md bg-primary-600 text-gray-100 p-5">
                                        <svg class=" text-white" width="20" height="20" viewBox="0 0 14 8"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.5 7.5H13.5V3.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13.5 7.5L7.85 1.85C7.75654 1.75839 7.63088 1.70707 7.5 1.70707C7.36912 1.70707 7.24346 1.75839 7.15 1.85L4.85 4.15C4.75654 4.24161 4.63088 4.29293 4.5 4.29293C4.36912 4.29293 4.24346 4.24161 4.15 4.15L0.5 0.5"
                                                stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                    </div>

                                    <div class=" ml-3">
                                        <h5 class=" text-sm text-gray-500">Profit</h5>
                                        <h5 class=" text-xl font-bold">{{ formatNumber($btcProfitTotal, 4) }} BTC</h5>
                                    </div>

                                </div>
                            </div>

                            <div class=" p-5 rounded-md border shadow-s border-gray-300 mt-3">
                                <div class="flex items-center">
                                    <div class=" rounded-md bg-primary-600 p-5">
                                        <svg width="20" height="20" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_6_5759)">
                                                <path
                                                    d="M9 7.5C11.4853 7.5 13.5 6.60457 13.5 5.5C13.5 4.39543 11.4853 3.5 9 3.5C6.51472 3.5 4.5 4.39543 4.5 5.5C4.5 6.60457 6.51472 7.5 9 7.5Z"
                                                    stroke="#ffffff" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M4.5 5.5V11.5C4.5 12.6 6.5 13.5 9 13.5C11.5 13.5 13.5 12.6 13.5 11.5V5.5"
                                                    stroke="#ffffff" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M13.5 8.5C13.5 9.6 11.5 10.5 9 10.5C6.5 10.5 4.5 9.6 4.5 8.5"
                                                    stroke="#ffffff" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M8.9 1.5C7.73149 0.778878 6.37133 0.430119 5 0.500003C2.51 0.500003 0.5 1.4 0.5 2.5C0.5 3.09 1.08 3.62 2 4"
                                                    stroke="#ffffff" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M2 10C1.08 9.62 0.5 9.09 0.5 8.5V2.5" stroke="#ffffff"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2 7C1.08 6.62 0.5 6.09 0.5 5.5" stroke="#ffffff"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_6_5759">
                                                    <rect width="14" height="14" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>

                                    <div class=" ml-3">
                                        <h5 class=" text-sm text-gray-500">Available Balance</h5>
                                        <h5 class=" text-xl font-bold">
                                            {{ formatNumber($btcProfitTotal + $btcCapitalTotal, 4) }} BTC</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="chart-usd text-center border border-gray-300 mt-5 lg:mt-0 shadow-m p-5 rounded-md col-span-7">
                            <canvas id="chart-btc"></canvas>
                            {{-- <a href="" class=" text-blue-700 text-center font-bold">Compound</a> --}}
                        </div>
                        {{--  --}}
                    </div>
                </div>
            </div>
            <div class="" x-show="openTab === 3"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">
                    <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-12">
                        <div
                            class="  borde border-gray-300 shadow-m rounded-m col-span-5 fle flex-col justify-between space-y- divide-">


                            <div class=" p-5 rounded-md border shadow-s border-gray-300 mt-3">
                                <div class="flex items-center">
                                    <div class=" rounded-md bg-primary-600 p-5">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.5 0.5V10.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M3.5 0.5V10.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M6.5 0.5V10.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M11 0.5V10.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M13.5 0.5V10.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M0.5 13.5H13.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>

                                    <div class=" ml-3">
                                        <h5 class=" text-sm text-gray-500">Capital</h5>
                                        <h5 class=" text-xl font-bold">{{ formatNumber($ethCapitalTotal, 4) }} ETH</h5>
                                    </div>

                                </div>
                            </div>

                            <div class=" p-5 rounded-md border shadow-s border-gray-300 mt-3">
                                <div class="flex items-center">
                                    <div class=" rounded-md bg-primary-600 text-gray-100 p-5">
                                        <svg class=" text-white" width="20" height="20" viewBox="0 0 14 8"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.5 7.5H13.5V3.5" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13.5 7.5L7.85 1.85C7.75654 1.75839 7.63088 1.70707 7.5 1.70707C7.36912 1.70707 7.24346 1.75839 7.15 1.85L4.85 4.15C4.75654 4.24161 4.63088 4.29293 4.5 4.29293C4.36912 4.29293 4.24346 4.24161 4.15 4.15L0.5 0.5"
                                                stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                    </div>

                                    <div class=" ml-3">
                                        <h5 class=" text-sm text-gray-500">Profit</h5>
                                        <h5 class=" text-xl font-bold">{{ formatNumber($ethProfitTotal, 4) }} ETH</h5>
                                    </div>

                                </div>
                            </div>

                            <div class=" p-5 rounded-md border shadow-s border-gray-300 mt-3">
                                <div class="flex items-center">
                                    <div class=" rounded-md bg-primary-600 p-5">
                                        <svg width="20" height="20" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_6_5759)">
                                                <path
                                                    d="M9 7.5C11.4853 7.5 13.5 6.60457 13.5 5.5C13.5 4.39543 11.4853 3.5 9 3.5C6.51472 3.5 4.5 4.39543 4.5 5.5C4.5 6.60457 6.51472 7.5 9 7.5Z"
                                                    stroke="#ffffff" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M4.5 5.5V11.5C4.5 12.6 6.5 13.5 9 13.5C11.5 13.5 13.5 12.6 13.5 11.5V5.5"
                                                    stroke="#ffffff" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M13.5 8.5C13.5 9.6 11.5 10.5 9 10.5C6.5 10.5 4.5 9.6 4.5 8.5"
                                                    stroke="#ffffff" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M8.9 1.5C7.73149 0.778878 6.37133 0.430119 5 0.500003C2.51 0.500003 0.5 1.4 0.5 2.5C0.5 3.09 1.08 3.62 2 4"
                                                    stroke="#ffffff" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M2 10C1.08 9.62 0.5 9.09 0.5 8.5V2.5" stroke="#ffffff"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2 7C1.08 6.62 0.5 6.09 0.5 5.5" stroke="#ffffff"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_6_5759">
                                                    <rect width="14" height="14" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>

                                    <div class=" ml-3">
                                        <h5 class=" text-sm text-gray-500">Available Balance</h5>
                                        <h5 class=" text-xl font-bold">
                                            {{ formatNumber($ethProfitTotal + $ethCapitalTotal, 4) }} ETH</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="chart-usd text-center border border-gray-300 mt-5 lg:mt-0 shadow-m p-5 rounded-md col-span-7">
                            <canvas id="chart-eth"></canvas>
                            {{-- <a href="" class=" text-blue-700 text-center font-bold">Compound</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-10">
        <div class=" rounded-sb border border-gray-300 bg-gray-50 p-3">
            <h3 class=" font-semibold text-xl">Refer friends and family to BlockArb and earn more</h3>
            <p class=" mt-2">Use the below link to invite your friends & earn 2% of their every deposit.</p>
            <div
                class=" mt-6 rounded-sb flex lg:flex-nowrap flex-wrap p-1 justify-between items-center border border-gray-300 bg-white">

                <div class=" flex">
                    <svg class="text-red-500 inline mr-3 flex-none" width="20" height="20"
                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <h5 class=" text-sm inline text-ellipsis" id="copy-target">{{ $referral_link }}</h5>
                </div>

                <button
                    class=" border border-gray-700 btn-clip flex items-center text-gray-500 rounded-sb py-1 w-full lg:w-auto mt-3 lg:mt-0 justify-center px-4 font-roboto"
                    data-clipboard-target="#copy-target">
                    <span class=" mr-2 font-semibold">Copy</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class=" text-secondary" width="20" height="20"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy">
                        <rect x="9" y="9" width="13" height="13" rx="2"
                            ry="2"></rect>
                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        let btcChartData = @js($btcChartData);
        let ethChartData = @js($ethChartData);
        let usdtChartData = @js($usdtChartData);

        console.log(ethChartData)

        const btcLabels = [0, ...btcChartData.date];
        const ethLabels = [0, ...ethChartData.date];
        const usdtLabels = [0, ...usdtChartData.date];

        // console.log(ethLabels)

        // usdt

        const usdtData = {
            labels: usdtLabels,
            datasets: [{
                label: '',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, ...usdtChartData.amount],
                tension: 0.4,
                // fill: true
            }]
        };

        const usdtConfig = {
            type: 'line',
            data: usdtData,
            options: {
                responsive: true,
                legend: {
                    display: false
                },
                plugins: {
                    legend: {
                        position: "top",
                        labels: {
                            boxWidth: 0
                            // font: {
                            //     size: 15,
                            //     family: "roboto"
                            // }
                        }
                    },

                    title: {
                        display: true,
                        text: "Capital Movement",
                        font: {
                            size: 20,
                            family: "poppins"
                        }
                    }
                },

                scales: {
                    x: {
                        title: {
                            display: true,
                            text: "Date",
                            font: {
                                weight: 'bold'
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: "Capital",
                            font: {
                                weight: 'bold'
                            }
                        }
                    },
                    xAxes: [{
                        gridLines: {
                            display: false
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display: false
                        }
                    }]
                },
            }
        };

        // usdt

        const btcData = {
            labels: btcLabels,
            datasets: [{
                label: '',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, ...btcChartData.amount],
                tension: 0.4,
                // fill: true
            }]
        };

        const btcConfig = {
            type: 'line',
            data: btcData,
            options: {
                legend: {
                    display: false
                },
                plugins: {
                    legend: {
                        position: "top",
                        labels: {
                            boxWidth: 0
                            // font: {
                            //     size: 15,
                            //     family: "roboto"
                            // }
                        }
                    },

                    title: {
                        display: true,
                        text: "Capital Movement",
                        font: {
                            size: 20,
                            family: "poppins"
                        }
                    }
                },

                scales: {
                    x: {
                        title: {
                            display: true,
                            text: "Date",
                            font: {
                                weight: 'bold'
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: "Capital in USD",
                            font: {
                                weight: 'bold'
                            }
                        }
                    },
                    xAxes: [{
                        gridLines: {
                            display: false
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display: false
                        }
                    }]
                },
            }
        };


        // ethereum

        const ethData = {
            labels: ethLabels,
            datasets: [{
                label: '',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, ...ethChartData.amount],
                tension: 0.4,
                // fill: true
            }]
        };

        const ethConfig = {
            type: 'line',
            data: ethData,
            options: {
                legend: {
                    display: false
                },
                plugins: {
                    legend: {
                        position: "top",
                        labels: {
                            boxWidth: 0
                            // font: {
                            //     size: 15,
                            //     family: "roboto"
                            // }
                        }
                    },

                    title: {
                        display: true,
                        text: "Capital Movement",
                        font: {
                            size: 20,
                            family: "poppins"
                        }
                    }
                },

                scales: {
                    x: {
                        title: {
                            display: true,
                            text: "Date",
                            font: {
                                weight: 'bold'
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: "Capital in USD",
                            font: {
                                weight: 'bold'
                            }
                        }
                    },
                    xAxes: [{
                        gridLines: {
                            display: false
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display: false
                        }
                    }]
                },
            }
        };

        // ethereum end



        Chart.defaults.font.family = "Poppins"

        new Chart(
            document.getElementById('chart-usd').getContext("2d"),
            usdtConfig
        );

        const myChart = new Chart(
            document.getElementById('chart-btc').getContext("2d"),
            btcConfig
        );

        new Chart(
            document.getElementById('chart-eth').getContext("2d"),
            ethConfig
        );
    </script>
@endpush
