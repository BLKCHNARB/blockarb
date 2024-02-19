<main class=" bg-white p-2 lg:pb-4 lg:pt-3 ">

    <x-confirmation-modal wire:model='confirm'>
        <x-slot name="close" >
            <span wire:click="cancel">
                x
            </span>
        </x-slot>

        <x-slot name="title">
            Select deposit method
        </x-slot>

        <x-slot name="content">

            <div class="text-center mb-5 font-medium">
                Select your preferred method to make your deposit: Use cryptocurrency from an external wallet, or purchase cryptocurrency using your local currency
            </div>

            <div class=" mt-5">
                <a href="{{ (route('deposit')) }}" class="mt-6" >
                    <x-button>{{ 'Deposit with cryptocurrency' }}</x-button>
                </a>
            </div>

           <div class=" mt-8 ">
            <a href="{{ (route('otc')) }}" class="" >
                <x-button type='secondary'>{{ 'Deposit using local currency' }}</x-button>
            </a>
           </div>
        </x-slot>

        <x-slot name="footer">
        </x-slot>
    </x-confirmation-modal>

    {{-- heading --}}
    <h1 class=" font-extrabold text-[1.8rem]"> Deposit</h1>

    {{-- deposit options --}}
        <div class="px-5 py-12 mt-10 border rounded-[18px] flex justify-between items-start w-full gap-8">
            {{-- deposit --}}
            <a href="#plans" class=" w-[33%] flex flex-col justify-center items-center text-center hover:scale-105 transition-all">
                <img src="{{ asset('svg/big-deposit.svg') }}" alt="icon">
                <h2 class=" font-medium text-xl underline mt-4 mb-1">Deposit</h2>
                <span class=" text-black_400 text-base w-[80%]">Deposit capital into a plan to begin earning daily profits</span>
            </a>

            {{-- topup --}}
            <a href="{{ (route('topup')) }}" class=" w-[33%] flex flex-col justify-center items-center text-center hover:scale-105 transition-all">
                <img src="{{ asset('svg/big-topup.svg') }}" alt="icon">
                <h2 class=" font-medium text-xl underline mt-4 mb-1 ">Top up</h2>
                <span class=" text-black_400 text-base w-[80%]">Top up more capital into an existing plan</span>
            </a>

            {{-- snowball --}}
            <a href="{{ (route('snowball')) }}" class=" w-[33%] flex flex-col justify-center items-center text-center hover:scale-105 transition-all">
                <img src="{{ asset('svg/big-snowball.svg') }}" alt="icon">
                <h2 class=" font-medium text-xl underline mt-4 mb-1 ">Snowball</h2>
                <span class=" text-black_400 text-base w-[80%]">Reinvest more capital from an existing plan balance</span>
            </a>
        </div>

        {{-- plans navigation button --}}
            <div x-data="{ openTab: 1 }" class=" pt-8 mt-8 " id="plans">
                <h2 class="text-2xl font-extrabold text-xl">Our Plans</h2>
                <ul class=" flex items-center mt-6 " role="tablist">
                    <li @click="openTab = 1" class=" cursor-pointer p-2 px-6 text-base font-semibold "
                        :class=" openTab === 1 ? 'bg-blue_100 text-blue_600 rounded-full ' : 'hover:text-black_800 text-black_200'">
                        <span>USD</span>
                    </li>
                    <li @click="openTab = 2" class=" cursor-pointer p-2 px-6 text-base font-semibold "
                        :class=" openTab === 2 ? 'bg-blue_100 text-blue_600 rounded-full ' : 'hover:text-black_800 text-black_200'">
                        <span>BTC</span>
                    </li>
                    <li @click="openTab = 3" class=" cursor-pointer p-2 px-6 text-base font-semibold "
                        :class=" openTab === 3 ? 'bg-blue_100 text-blue_600 rounded-full ' : 'hover:text-black_800 text-black_200'">
                        <span>ETH</span>
                    </li>
                </ul>

                {{-- plans and details --}}
            <div class=" mt-7 ">

                {{-- USDT plans --}}
                <div class="" x-show="openTab === 1"
                    x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                    x-transition:enter-start="transform translate-y-2 opacity-0"
                    x-transition:enter-end="transform translate-y-0 opacity-100">
                    <div class="transition duration-700 ease-out">

                        <div class=" flex w-full gap-5 justify-between items-center">
                            @foreach($usdts->plans as $index => $usdt)
                            <div class="w-[33%] mt-3 hover:scale-y-105">
                                <div class="p-6 box-shadow rounded-[20px] {{ $index === 1 ? 'bg-blue_800 text-white' : 'bg-white text-neutral_800' }}">
                                    <div class=" relative flex items-center mb-3">
                                        <img src="{{ $index === 0 ? asset('svg/retail.svg') : ($index === 1 ? asset('svg/business.svg') : asset('svg/enterprise.svg')) }}" alt="icons" class=" w-[3.8rem] mr-3">
                                        <h3 class=" text-xl font-bold">{{$usdt->name}}</h3>
                                        @if ( $index === 1 )
                                            <span class=" absolute right-0 text-white bg-[#6586fc98] text-s rounded-[8.5px] px-5 py-2">Popular</span>
                                        @endif
                                    </div>
                                    <p class=" text-base {{ $index === 1 ? 'text-[#D9DBE9]' : 'text-[#6F6C90]' }}">{{ $index === 0 ? 'This plan is perfect for investors looking for high frequency, low volume profit strategies.' : ($index === 1 ? 'This plan is perfect for spot and cross-exchange arbitrage with moderate volume.' : 'Maximize ROI for your business with our advanced, competitively priced Business Plan.') }}</p>
                                    <div class=" mt-3">
                                        <h3 class=" font-bold text-[1.8rem] tracking-tighter "> ${{number_format($usdt->pivot->minimum)}} <small class=" tracking-normal font-normal {{ $index === 1 ? 'text-[#D9DBE9]' : 'text-[#6F6C90]' }} text-base" >/minimum capital</small> </h3>
                                      
                                        <p class=" font-bold my-[10px] ">What it offers</p>
                                        <div class="flex items-center flex-wrap">
                                            <img class="w-5 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <span class=" {{ $index === 1 ? 'text-white' : 'text-neutral_800' }}">ROI: &nbsp</span>
                                            <span class=" font-semibold flex {{ $index === 1 ? 'text-white' : 'text-success' }} font-semibold"> 
                                                <span class="mr-1">
                                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18.2397 5.87183L11.5731 12.5385L8.23975 9.20516L3.23975 14.2052M11.5731 5.87183H18.2397H11.5731ZM18.2397 5.87183V12.5385V5.87183Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </span> 
                                                {{$usdt->pivot->percentage}}%
                                            </span>
                                        </div>

                                        <div class="flex items-center mt-3 flex-wrap">
                                            <img class="w-5 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <h4 class=" {{ $index === 1 ? 'text-white' : 'text-neutral_800' }}">Duration: &nbsp</h4>
                                            <span class=" font-semibold"> {{number_format($usdt->pivot->duration)}} days</span>
                                        </div>

                                        <div class="flex items-center mt-3 flex-wrap">
                                            <img class="w-5 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <h4 class="  {{ $index === 1 ? 'text-white' : 'text-neutral_800' }}">Performance fee: &nbsp</h4>
                                            <span class=" font-semibold"> {{ $usdt->pivot->performance_fee}}%</span>
                                        </div>
                                        
                                        @if ( $index === 2 )
                                        <span wire:click="confirm" class=" cursor-pointer mt-4 px-[20px] py-[10px] font-medium text-sm focus:outline-none transition-all hover:scale-105 duration-150 w-full rounded-[10px] flex justify-center items-center {{ $index === 1 ? 'text-blue_800 bg-white' : 'bg-blue_600 text-white' }}">Invest</span>
                                        @else
                                        <a href="{{ route('deposit') }}" class=" mt-4 px-[20px] py-[10px] font-medium text-sm focus:outline-none transition-all hover:scale-105 duration-150 w-full rounded-[10px] flex justify-center items-center {{ $index === 1 ? 'text-blue_800 bg-white' : 'bg-blue_600 text-white' }}">Invest</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- BTC plans --}}
                <div class="" x-show="openTab === 2"
                    x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                    x-transition:enter-start="transform translate-y-2 opacity-0"
                    x-transition:enter-end="transform translate-y-0 opacity-100">
                    <div class="transition duration-700 ease-out">

                        <div class=" flex w-full gap-5 justify-between items-center">
                            @foreach($btcs->plans as $index => $btc)
                            <div class="w-[33%] mt-3 hover:scale-y-105">
                                <div class="p-6 box-shadow rounded-[20px] {{ $index === 1 ? 'bg-blue_800 text-white' : 'bg-white text-neutral_800' }}">
                                    <div class=" relative flex items-center mb-3">
                                        <img src="{{ $index === 0 ? asset('svg/retail.svg') : ($index === 1 ? asset('svg/business.svg') : asset('svg/enterprise.svg')) }}" alt="icons" class="w-[3.8rem] mr-3">
                                        <h3 class=" text-xl font-bold">{{$btc->name}}</h3>
                                        @if ( $index === 1 )
                                            <span class=" absolute right-0 text-white bg-[#6586fc98] text-s rounded-[8.5px] px-5 py-2">Popular</span>
                                        @endif
                                    </div>
                                    <p class=" text-base {{ $index === 1 ? 'text-[#D9DBE9]' : 'text-[#6F6C90]' }}">{{ $index === 0 ? 'This plan is perfect for investors looking for high frequency, low volume profit strategies.' : ($index === 1 ? 'This plan is perfect for spot and cross-exchange arbitrage with moderate volume.' : 'Maximize ROI for your business with our advanced, competitively priced Business Plan.') }}</p>
                                    <div class=" mt-3">
                                        <h3 class=" font-bold text-[1.8rem] tracking-tight "> {{number_format($btc->pivot->minimum, 2)}} <span class='text-base' >BTC </span> <small class=" tracking-normal font-normal {{ $index === 1 ? 'text-[#D9DBE9]' : 'text-[#6F6C90]' }} text-base" >/minimum capital</small> </h3>
                                      
                                        <p class=" font-bold my-[10px] ">What it offers</p>

                                        <div class="flex items-center flex-wrap">
                                            <img class="w-5 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <span class=" {{ $index === 1 ? 'text-white' : 'text-neutral_800' }}">ROI: &nbsp</span>
                                            <span class=" font-semibold flex {{ $index === 1 ? 'text-white' : 'text-success' }} font-semibold"> 
                                                <span class="mr-1">
                                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18.2397 5.87183L11.5731 12.5385L8.23975 9.20516L3.23975 14.2052M11.5731 5.87183H18.2397H11.5731ZM18.2397 5.87183V12.5385V5.87183Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </span> 
                                                {{$btc->pivot->percentage}}%
                                            </span>
                                        </div>

                                        <div class="flex items-center mt-3 flex-wrap">
                                            <img class="w-5 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <h4 class=" {{ $index === 1 ? 'text-white' : 'text-neutral_800' }}">Duration: &nbsp</h4>
                                            <span class=" font-semibold"> {{number_format($btc->pivot->duration)}} days</span>
                                        </div>

                                        <div class="flex items-center mt-3 flex-wrap">
                                            <img class="w-5 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <h4 class="  {{ $index === 1 ? 'text-white' : 'text-neutral_800' }}">Performance fee: &nbsp</h4>
                                            <span class=" font-semibold"> {{ $btc->pivot->performance_fee}}%</span>
                                        </div>
                                        
                                        <a href="{{route("deposit")}}" class=" mt-4 px-[20px] py-[10px] font-medium text-sm focus:outline-none transition-all hover:scale-105 duration-150 w-full rounded-[10px] flex justify-center items-center {{ $index === 1 ? 'text-blue_800 bg-white' : 'bg-blue_600 text-white' }}">Invest</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- ETH plans --}}
                <div class="" x-show="openTab === 3"
                    x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                    x-transition:enter-start="transform translate-y-2 opacity-0"
                    x-transition:enter-end="transform translate-y-0 opacity-100">
                    <div class="transition duration-700 ease-out">

                        <div class=" flex w-full gap-5 justify-between items-center">
                            @foreach($eths->plans as $index => $eth)
                            <div class="w-[33%] mt-3 hover:scale-y-105">
                                <div class="p-6 box-shadow rounded-[20px] {{ $index === 1 ? 'bg-blue_800 text-white' : 'bg-white text-neutral_800' }}">
                                    <div class=" relative flex items-center mb-3">
                                        <img src="{{ $index === 0 ? asset('svg/retail.svg') : ($index === 1 ? asset('svg/business.svg') : asset('svg/enterprise.svg')) }}" alt="icons" class="w-[3.8rem] mr-3">
                                        <h3 class=" text-xl font-bold">{{$eth->name}}</h3>
                                        @if ( $index === 1 )
                                            <span class=" absolute right-0 text-white bg-[#6586fc98] text-s rounded-[8.5px] px-5 py-2">Popular</span>
                                        @endif
                                    </div>
                                    <p class=" text-base {{ $index === 1 ? 'text-[#D9DBE9]' : 'text-white' }}">{{ $index === 0 ? 'This plan is perfect for investors looking for high frequency, low volume profit strategies.' : ($index === 1 ? 'This plan is perfect for spot and cross-exchange arbitrage with moderate volume.' : 'Maximize ROI for your business with our advanced, competitively priced Business Plan.') }}</p>
                                    <div class=" mt-3">
                                        <h3 class=" font-bold text-[1.8rem] tracking-tight "> {{number_format($eth->pivot->minimum, 2)}} <span class='text-base' >ETH </span> <small class=" tracking-normal font-normal {{ $index === 1 ? 'text-[#D9DBE9]' : 'text-[#6F6C90]' }} text-base" >/minimum capital</small> </h3>
                                      
                                        <p class=" font-bold my-[10px] ">What it offers</p>
                                        <div class="flex items-center flex-wrap">
                                            <img class="w-5 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <span class=" {{ $index === 1 ? 'text-white' : 'text-neutral_800' }}">ROI: &nbsp</span>
                                            <span class=" font-semibold flex {{ $index === 1 ? 'text-white' : 'text-success' }} font-semibold"> 
                                                <span class="mr-1">
                                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18.2397 5.87183L11.5731 12.5385L8.23975 9.20516L3.23975 14.2052M11.5731 5.87183H18.2397H11.5731ZM18.2397 5.87183V12.5385V5.87183Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </span> 
                                                {{$eth->pivot->percentage}}%
                                            </span>
                                        </div>

                                        <div class="flex items-center mt-3 flex-wrap">
                                            <img class="w-5 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <h4 class=" {{ $index === 1 ? 'text-white' : 'text-neutral_800' }}">Duration: &nbsp</h4>
                                            <span class=" font-semibold"> {{number_format($eth->pivot->duration)}} days</span>
                                        </div>

                                        <div class="flex items-center mt-3 flex-wrap">
                                            <img class="w-5 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <h4 class="  {{ $index === 1 ? 'text-white' : 'text-neutral_800' }}">Performance fee: &nbsp</h4>
                                            <span class=" font-semibold"> {{ $eth->pivot->performance_fee}}%</span>
                                        </div>
                                        
                                        <a href="{{route("deposit")}}" class=" mt-4 px-[20px] py-[10px] font-medium text-sm focus:outline-none transition-all hover:scale-105 duration-150 w-full rounded-[10px] flex justify-center items-center {{ $index === 1 ? 'text-blue_800 bg-white' : 'bg-blue_600 text-white' }}">Invest</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
