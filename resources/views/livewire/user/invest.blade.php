<main class=" bg-white p-4 md:px-2 md:py-1 lg:px-5 lg:py-3 h-full ">

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

            <div class=" mt-8">
                <a href="{{ (route('deposit')) }}" class="mt-6" >
                    <x-button>{{ 'Deposit with cryptocurrency' }}</x-button>
                </a>
            </div>

           <div class=" mt-5 ">
            <a href="{{ (route('otc')) }}" class="" >
                <x-button type='secondary'>{{ 'Deposit using local currency' }}</x-button>
            </a>
           </div>
        </x-slot>

        <x-slot name="footer">
        </x-slot>
    </x-confirmation-modal>

    {{-- heading --}}
    <h1 class=" font-extrabold base:text-lg text-[1.35rem]"> Deposit</h1>

    {{-- deposit options --}}
        <div class="base:px-5 px-2 base:py-12 py-8 base:mt-10 mt-5 border rounded-[18px] flex justify-between items-start w-full base:gap-8 gap-2">
            {{-- deposit --}}
            <a href="#plans" class=" w-[33%] flex flex-col justify-center items-center text-center hover:scale-105 transition-all">
                <img src="{{ asset('svg/big-deposit.svg') }}" alt="icon" class="base:w-[7rem] w-[4.5rem]">
                <h2 class=" font-medium base:text-xl text-md underline mt-4 mb-1">Deposit</h2>
                <span class=" text-black_400 base:text-base text-s md:w-[80%] w-full">Deposit capital into a plan to begin earning daily profits</span>
            </a>

            {{-- topup --}}
            <span onclick="addTopupQuery()" class=" cursor-pointer w-[33%] flex flex-col justify-center items-center text-center hover:scale-105 transition-all">
                <img src="{{ asset('svg/big-topup.svg') }}" alt="icon" class="base:w-[7rem] w-[4.5rem]">
                <h2 class=" font-medium base:text-xl text-md underline mt-4 mb-1 ">Top up</h2>
                <span class=" text-black_400 base:text-base text-s md:w-[80%] w-full">Top up more capital into an existing plan</span>
            </span>

            {{-- snowball --}}
            <span onclick="addSnowballQuery()" class=" w-[33%] cursor-pointer flex flex-col justify-center items-center text-center hover:scale-105 transition-all">
                <img src="{{ asset('svg/big-snowball.svg') }}" alt="icon" class="base:w-[7rem] w-[4.5rem]">
                <h2 class=" font-medium base:text-xl text-md underline mt-4 mb-1 ">Snowball</h2>
                <span class=" text-black_400 base:text-base text-s md:w-[80%] w-full">Reinvest more capital from an existing plan balance</span>
            </span>
        </div>

        {{-- plans navigation button --}}
            <div x-data="{ openTab: 1 }" class=" base:pt-8 base:mt-8 pt-4 mt-4 " id="plans">
                <h2 class=" font-extrabold text-base sm:text-md base:text-xl">Our Plans</h2>
                <ul class=" flex items-center mt-6 " role="tablist">
                    <li @click="openTab = 1" class=" cursor-pointer p-2 base:px-6 px-4 base:text-base text-sm font-semibold "
                        :class=" openTab === 1 ? 'bg-blue_100 text-blue_600 rounded-full ' : 'hover:text-black_800 text-black_200'">
                        <span>USD</span>
                    </li>
                    <li @click="openTab = 2" class=" cursor-pointer p-2 base:px-6 px-4 base:text-base text-sm font-semibold "
                        :class=" openTab === 2 ? 'bg-blue_100 text-blue_600 rounded-full ' : 'hover:text-black_800 text-black_200'">
                        <span>BTC</span>
                    </li>
                    <li @click="openTab = 3" class=" cursor-pointer p-2 base:px-6 px-4 base:text-base text-sm font-semibold "
                        :class=" openTab === 3 ? 'bg-blue_100 text-blue_600 rounded-full ' : 'hover:text-black_800 text-black_200'">
                        <span>ETH</span>
                    </li>
                </ul>

                {{-- plans and details --}}
            <div class=" base:mt-7 mt-5 ">

                {{-- USDT plans --}}
                <div class="" x-show="openTab === 1"
                    x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                    x-transition:enter-start="transform translate-y-2 opacity-0"
                    x-transition:enter-end="transform translate-y-0 opacity-100">
                    <div class="transition duration-700 ease-out">

                        <div class=" flex lg:flex-nowrap md:flex-wrap base:flex-nowrap flex-wrap w-full lg:gap-5 md:gap-10 gap-5 justify-center mb-5">
                            @foreach($usdts->plans as $index => $usdt)
                            <div class="lg:w-[33%] md:w-[45%] base:w-[33%] sm:w-[45%] w-[85%] mt-3 hover:scale-y-105">
                                <div class="relative p-6 box-shadow rounded-[20px] {{ $index === 1 ? 'bg-blue_800 text-white' : 'bg-white text-neutral_800' }}">
                                    @if ( $index === 1 )
                                        <span class=" absolute block right-3 top-3 text-white bg-[#6586fc98] text-s rounded-[8.5px] base:px-5 px-3 py-2">Popular</span>
                                    @endif
                                    <div class="flex items-center mb-3">
                                        <img src="{{ $index === 0 ? asset('svg/retail.svg') : ($index === 1 ? asset('svg/business.svg') : asset('svg/enterprise.svg')) }}" alt="icons" class=" md:w-[3.8rem] base:w-[3rem] w-[2.8rem] mr-3">
                                        <h3 class=" base:text-xl text-lg font-bold">{{$usdt->name}}</h3>
                                    </div>
                                    <p class=" base:text-base text-sm {{ $index === 1 ? 'text-[#D9DBE9]' : 'text-[#6F6C90]' }}">{{ $index === 0 ? 'This plan is perfect for investors looking for high frequency, low volume profit strategies.' : ($index === 1 ? 'This plan is perfect for spot and cross-exchange arbitrage with moderate volume.' : 'Maximize ROI for your business with our advanced, competitively priced Business Plan.') }}</p>
                                    <div class=" mt-3">
                                        <h3 class=" font-bold base:text-[1.8rem] text-xl tracking-tighter "> ${{number_format($usdt->pivot->minimum)}} <small class=" tracking-normal block font-normal {{ $index === 1 ? 'text-[#D9DBE9]' : 'text-[#6F6C90]' }} base:text-base text-sm" >/minimum capital</small> </h3>
                                      
                                        <p class=" font-bold my-[10px] ">What it offers</p>
                                        <div class="flex items-center flex-wrap">
                                            <img class="base:w-5 w-4 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <span class="base:text-base text-sm {{ $index === 1 ? 'text-white' : 'text-neutral_800' }}">ROI: &nbsp</span>
                                            <span class="base:text-base text-sm font-semibold flex {{ $index === 1 ? 'text-white' : 'text-success' }} font-semibold"> 
                                                <span class="mr-1">
                                                    <svg width="18" height="18" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18.2397 5.87183L11.5731 12.5385L8.23975 9.20516L3.23975 14.2052M11.5731 5.87183H18.2397H11.5731ZM18.2397 5.87183V12.5385V5.87183Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </span> 
                                                {{$usdt->pivot->percentage}}%
                                            </span>
                                        </div>

                                        <div class="flex items-center mt-3 flex-wrap">
                                            <img class="base:w-5 w-4 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <h4 class="base:text-base text-sm {{ $index === 1 ? 'text-white' : 'text-neutral_800' }}">Duration: &nbsp</h4>
                                            <span class="base:text-base text-sm font-semibold"> {{number_format($usdt->pivot->duration)}} days</span>
                                        </div>

                                        <div class="flex items-center mt-3 flex-wrap">
                                            <img class="base:w-5 w-4 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <h4 class="base:text-base text-sm  {{ $index === 1 ? 'text-white' : 'text-neutral_800' }}">Performance fee: &nbsp</h4>
                                            <span class="base:text-base text-sm font-semibold"> {{ $usdt->pivot->performance_fee}}%</span>
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

                        <div class=" flex lg:flex-nowrap md:flex-wrap base:flex-nowrap flex-wrap w-full lg:gap-5 md:gap-10 gap-5 justify-center mb-5">
                            @foreach($btcs->plans as $index => $btc)
                            <div class="lg:w-[33%] md:w-[45%] base:w-[33%] sm:w-[45%] w-[80%] mt-3 hover:scale-y-105">
                                <div class=" relative p-6 box-shadow rounded-[20px] {{ $index === 1 ? 'bg-blue_800 text-white' : 'bg-white text-neutral_800' }}">
                                    @if ( $index === 1 )
                                        <span class=" absolute block right-3 top-3 text-white bg-[#6586fc98] text-s rounded-[8.5px] base:px-5 px-3 py-2">Popular</span>
                                    @endif
                                    <div class=" relative flex items-center mb-3">
                                        <img src="{{ $index === 0 ? asset('svg/retail.svg') : ($index === 1 ? asset('svg/business.svg') : asset('svg/enterprise.svg')) }}" alt="icons" class="md:w-[3.8rem] base:w-[3rem] w-[2.8rem] mr-3">
                                        <h3 class=" base:text-xl text-lg font-bold">{{$btc->name}}</h3>
                                    </div>
                                    <p class=" base:text-base text-sm {{ $index === 1 ? 'text-[#D9DBE9]' : 'text-[#6F6C90]' }}">{{ $index === 0 ? 'This plan is perfect for investors looking for high frequency, low volume profit strategies.' : ($index === 1 ? 'This plan is perfect for spot and cross-exchange arbitrage with moderate volume.' : 'Maximize ROI for your business with our advanced, competitively priced Business Plan.') }}</p>
                                    <div class=" mt-3">
                                        <h3 class=" font-bold base:text-[1.8rem] text-xl tracking-tight "> {{number_format($btc->pivot->minimum, 2)}} <span class='base:text-base text-sm' >BTC </span>  </h3>
                                        <small class=" tracking-normal font-normal {{ $index === 1 ? 'text-[#D9DBE9]' : 'text-[#6F6C90]' }} base:text-base text-sm" >/minimum capital</small>
                                      
                                        <p class=" font-bold my-[10px] ">What it offers</p>

                                        <div class="flex items-center flex-wrap">
                                            <img class="base:w-5 w-4 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <span class=" base:text-base text-sm {{ $index === 1 ? 'text-white' : 'text-neutral_800' }}">ROI: &nbsp</span>
                                            <span class=" base:text-base text-sm font-semibold flex {{ $index === 1 ? 'text-white' : 'text-success' }} font-semibold"> 
                                                <span class="mr-1">
                                                    <svg width="18" height="18" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18.2397 5.87183L11.5731 12.5385L8.23975 9.20516L3.23975 14.2052M11.5731 5.87183H18.2397H11.5731ZM18.2397 5.87183V12.5385V5.87183Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </span> 
                                                {{$btc->pivot->percentage}}%
                                            </span>
                                        </div>

                                        <div class="flex items-center mt-3 flex-wrap">
                                            <img class="base:w-5 w-4 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <h4 class="base:text-base text-sm {{ $index === 1 ? 'text-white' : 'text-neutral_800' }}">Duration: &nbsp</h4>
                                            <span class="base:text-base text-sm font-semibold"> {{number_format($btc->pivot->duration)}} days</span>
                                        </div>

                                        <div class="flex items-center mt-3 flex-wrap">
                                            <img class="base:w-5 w-4 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <h4 class=" base:text-base text-sm {{ $index === 1 ? 'text-white' : 'text-neutral_800' }}">Performance fee: &nbsp</h4>
                                            <span class=" base:text-base text-sm font-semibold"> {{ $btc->pivot->performance_fee}}%</span>
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

                        <div class=" flex lg:flex-nowrap md:flex-wrap base:flex-nowrap flex-wrap w-full lg:gap-5 md:gap-10 gap-5 justify-center mb-5">
                            @foreach($eths->plans as $index => $eth)
                            <div class="lg:w-[33%] md:w-[45%] base:w-[33%] sm:w-[45%] w-[80%] mt-3 hover:scale-y-105">
                                <div class=" relative p-6 box-shadow rounded-[20px] {{ $index === 1 ? 'bg-blue_800 text-white' : 'bg-white text-neutral_800' }}">
                                    @if ( $index === 1 )
                                        <span class=" absolute block right-3 top-3 text-white bg-[#6586fc98] text-s rounded-[8.5px] base:px-5 px-3 py-2">Popular</span>
                                    @endif
                                    <div class=" relative flex items-center mb-3">
                                        <img src="{{ $index === 0 ? asset('svg/retail.svg') : ($index === 1 ? asset('svg/business.svg') : asset('svg/enterprise.svg')) }}" alt="icons" class="md:w-[3.8rem] base:w-[3rem] w-[2.8rem] mr-3">
                                        <h3 class=" base:text-xl text-lg font-bold">{{$eth->name}}</h3>
                                    </div>
                                    <p class=" base:text-base text-sm {{ $index === 1 ? 'text-[#D9DBE9]' : ' text-neutral_800' }}">{{ $index === 0 ? 'This plan is perfect for investors looking for high frequency, low volume profit strategies.' : ($index === 1 ? 'This plan is perfect for spot and cross-exchange arbitrage with moderate volume.' : 'Maximize ROI for your business with our advanced, competitively priced Business Plan.') }}</p>
                                    <div class=" mt-3">
                                        <h3 class=" font-bold base:text-[1.8rem] text-xl tracking-tight "> {{number_format($eth->pivot->minimum, 2)}} <span class='base:text-base text-sm' >ETH </span> <small class=" tracking-normal font-normal {{ $index === 1 ? 'text-[#D9DBE9]' : 'text-[#6F6C90]' }} base:text-base text-sm block" >/minimum capital</small> </h3>
                                      
                                        <p class=" font-bold my-[10px] ">What it offers</p>
                                        <div class="flex items-center flex-wrap">
                                            <img class="base:w-5 w-4 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <span class=" {{ $index === 1 ? 'text-white' : 'text-neutral_800' }} base:text-base text-sm">ROI: &nbsp</span>
                                            <span class=" base:text-base text-sm flex {{ $index === 1 ? 'text-white' : 'text-success' }} font-semibold"> 
                                                <span class="mr-1 relative top-[2px]">
                                                    <svg width="18" height="18" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18.2397 5.87183L11.5731 12.5385L8.23975 9.20516L3.23975 14.2052M11.5731 5.87183H18.2397H11.5731ZM18.2397 5.87183V12.5385V5.87183Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </span> 
                                                {{$eth->pivot->percentage}}%
                                            </span>
                                        </div>

                                        <div class="flex items-center mt-3 flex-wrap">
                                            <img class="base:w-5 w-4 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <h4 class=" base:text-base text-sm {{ $index === 1 ? 'text-white' : 'text-neutral_800' }}">Duration: &nbsp</h4>
                                            <span class=" base:text-base text-sm font-semibold"> {{number_format($eth->pivot->duration)}} days</span>
                                        </div>

                                        <div class="flex items-center mt-3 flex-wrap">
                                            <img class="base:w-5 w-4 mr-2" src="{{ $index === 1 ? asset('svg/unfilled-check.svg') : asset('svg/filled-check.svg') }}" alt="check">
                                            <h4 class=" base:text-base text-sm  {{ $index === 1 ? 'text-white' : 'text-neutral_800' }}">Performance fee: &nbsp</h4>
                                            <span class=" base:text-base text-sm font-semibold"> {{ $eth->pivot->performance_fee}}%</span>
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

<script>
    
</script>