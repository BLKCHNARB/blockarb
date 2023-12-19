<div class=" bg-white p-4 pt-8 lg:p-12 h-ful rounded-lg">

    <div class=" mb-5 flex justify-between items-center">
        <h3 class=" text-2xl font-semibold"> Plans</h3>
    </div>

    {{-- <div class=" flex items-center justify-en space-x-4 my-10 lg:mt-0">
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
            <ul class=" flex items-center border-b border-gray-200 pb-5 mt-10" role="tablist">
                <li @click="openTab = 1" class=" font-bold cursor-pointer p-2 px-4"
                    :class=" openTab === 1 ? 'bg-yellow-500 rounded-md' : ''">
                    <a href="#tab-usd" class=" p-">
                        USD
                    </a>
                </li>

                <li @click="openTab = 2" class=" font-bold cursor-pointer p-2 px-4"
                    :class=" openTab === 2 ? 'bg-yellow-500 rounded-md' : ''">
                    <a href="#tab-usd" class=" p-">
                        BTC
                    </a>
                </li>

                <li @click="openTab = 3" class=" font-bold cursor-pointer p-2 px-4"
                    :class=" openTab === 3 ? 'bg-yellow-500 rounded-md' : ''">
                    <a href="#tab-usd" class=" p-">
                        ETH
                    </a>
                </li>
            </ul>

            <div class=" mt-10">
                <div class="" x-show="openTab === 1"
                    x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                    x-transition:enter-start="transform translate-y-2 opacity-0"
                    x-transition:enter-end="transform translate-y-0 opacity-100">
                    <div class="transition duration-700 ease-out">
                        <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-12 rounded-md divi">
                            
                            @foreach($usdts->plans as $usdt)
                            <div class="col-span-4 mt-3">
                                <div class="p-5 border rounded-md">
                                    <h4 class=" text-2xl font-bold">{{$usdt->name}}</h4>
                                    <div class=" mt-5">
                                        <div class="flex flex-wrap">
                                            <h5 class=" bold">Minimum Capital: &nbsp</h5>
                                            <h5 class=" font-semibold"> ${{number_format($usdt->pivot->minimum)}}</h5>
                                        </div>

                                        <div class="flex items-center mt-4 flex-wrap">
                                            <h5 class=" bold">ROI: &nbsp</h5>
                                            <h5 class=" font-semibold"> {{$usdt->pivot->percentage}}%</h5>
                                        </div>

                                        <div class="flex items-center mt-4 flex-wrap">
                                            <h5 class=" bold">Duration: &nbsp</h5>
                                            <h5 class=" font-semibold"> {{number_format($usdt->pivot->duration)}} days</h5>
                                        </div>
                                        
                                        <a href="{{route("deposit")}}" class=" px-5 py-3 bg-secondary block mt-7 rounded-md font-bold text-center">Invest</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                            

                            <!--<div class="col-span-4 mt-3">-->
                            <!--    <div class="p-5 border rounded-md">-->
                            <!--        <h4 class=" text-2xl font-bold">Business</h4>-->
                            <!--        <div class=" mt-5">-->
                            <!--            <div class="flex flex-wrap">-->
                            <!--                <h5 class=" bold">Minimum Capital: &nbsp</h5>-->
                            <!--                <h5 class=" font-semibold"> $100,000</h5>-->
                            <!--            </div>-->

                            <!--            <div class="flex items-center mt-4 flex-wrap">-->
                            <!--                <h5 class=" bold">ROI: &nbsp</h5>-->
                            <!--                <h5 class=" font-semibold"> 5%</h5>-->
                            <!--            </div>-->

                            <!--            <div class="flex items-center mt-4 flex-wrap">-->
                            <!--                <h5 class=" bold">Duration: &nbsp</h5>-->
                            <!--                <h5 class=" font-semibold"> 30 days</h5>-->
                            <!--            </div>-->
                                        
                            <!--            <a href="{{route("deposit")}}" class=" px-5 py-3 bg-secondary block mt-7 rounded-md font-bold text-center">Invest</a>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <!--<div class="col-span-4 mt-3">-->
                            <!--    <div class="p-5 border rounded-md">-->
                            <!--        <h4 class=" text-2xl font-bold">Professional</h4>-->
                            <!--        <div class=" mt-5">-->
                            <!--            <div class="flex flex-wrap">-->
                            <!--                <h5 class=" bold">Minimum Capital: &nbsp</h5>-->
                            <!--                <h5 class=" font-semibold"> $1,000,000</h5>-->
                            <!--            </div>-->

                            <!--            <div class="flex items-center mt-4 flex-wrap">-->
                            <!--                <h5 class=" bold">ROI: &nbsp</h5>-->
                            <!--                <h5 class=" font-semibold"> 7%</h5>-->
                            <!--            </div>-->

                            <!--            <div class="flex items-center mt-4 flex-wrap">-->
                            <!--                <h5 class=" bold">Duration: &nbsp</h5>-->
                            <!--                <h5 class=" font-semibold"> 30 days</h5>-->
                            <!--            </div>-->
                                        
                            <!--            <a href="{{route("deposit")}}" class=" px-5 py-3 bg-secondary block mt-7 rounded-md font-bold text-center">Invest</a>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
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
                            @foreach($btcs->plans as $usdt)
                            <div class="col-span-4 mt-3">
                                <div class="p-5 border rounded-md">
                                    <h4 class=" text-2xl font-bold">{{$usdt->name}}</h4>
                                    <div class=" mt-5">
                                        <div class="flex flex-wrap">
                                            <h5 class=" bold">Minimum Capital: &nbsp</h5>
                                            <h5 class=" font-semibold"> {{number_format($usdt->pivot->minimum, 2)}} BTC</h5>
                                        </div>

                                        <div class="flex items-center mt-4 flex-wrap">
                                            <h5 class=" bold">ROI: &nbsp</h5>
                                            <h5 class=" font-semibold"> {{$usdt->pivot->percentage}}%</h5>
                                        </div>

                                        <div class="flex items-center mt-4 flex-wrap">
                                            <h5 class=" bold">Duration: &nbsp</h5>
                                            <h5 class=" font-semibold"> {{number_format($usdt->pivot->duration)}} days</h5>
                                        </div>
                                        
                                        <a href="{{route("deposit")}}" class=" px-5 py-3 bg-secondary block mt-7 rounded-md font-bold text-center">Invest</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
                            @foreach($eths->plans as $usdt)
                            <div class="col-span-4 mt-3">
                                <div class="p-5 border rounded-md">
                                    <h4 class=" text-2xl font-bold">{{$usdt->name}}</h4>
                                    <div class=" mt-5">
                                        <div class="flex flex-wrap">
                                            <h5 class=" bold">Minimum Capital: &nbsp</h5>
                                            <h5 class=" font-semibold"> {{number_format($usdt->pivot->minimum, 2)}} ETH</h5>
                                        </div>

                                        <div class="flex items-center mt-4 flex-wrap">
                                            <h5 class=" bold">ROI: &nbsp</h5>
                                            <h5 class=" font-semibold"> {{$usdt->pivot->percentage}}%</h5>
                                        </div>

                                        <div class="flex items-center mt-4 flex-wrap">
                                            <h5 class=" bold">Duration: &nbsp</h5>
                                            <h5 class=" font-semibold"> {{number_format($usdt->pivot->duration)}} days</h5>
                                        </div>
                                        
                                        <a href="{{route("deposit")}}" class=" px-5 py-3 bg-secondary block mt-7 rounded-md font-bold text-center">Invest</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
