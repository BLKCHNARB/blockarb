<style>
    .hero-overview {
        background: linear-gradient(to right, #194BFB, #194afb, #194afb, #194afb3e), url('/images/overview-img.jpeg');
        background-size: auto, calc(29rem);
        background-position: center, {{ $account && $deposits->isNotEmpty() ? 'calc(100% + 45px)' : 'calc(100% + 100px)' }};
        background-repeat: no-repeat;
    }
/* 
    @media (max-width: 1076px) {
        .hero-overview {
        background: linear-gradient(to right, #194BFB, #194afb, #194afb, #194afb3e), url('/images/overview-img.jpeg');
        background-size: auto, calc(28rem);
        background-position: center, {{ $account && $deposits->isNotEmpty() ? 'calc(100% + 45px)' : 'calc(100% + 100px)' }};
        background-repeat: no-repeat;
    }
    } */

    @media (max-width: 868px) {
        .hero-overview {
        background: linear-gradient(to right, #194BFB, #194afb, #194afb3e), url('/images/overview-img.jpeg');
        background-size: cover;
        background-position: center, {{ $account && $deposits->isNotEmpty() ? 'calc(100% + 45px)' : 'calc(100% + 100px)' }};
        background-repeat: no-repeat;
    }
    }
    
    svg.svg2 circle {
        stroke: {{ $deposits->isNotEmpty() ? '#fdfdfe' : '#B8BABE' }};
        animation: spin2 1s linear forwards;
    }

    @keyframes spin {
        100% {
            stroke-dashoffset: {{ (count($this->wallets) == 1) ? '395' : ((count($this->wallets) == 2) ? '335' : ((count($this->wallets) == 3 ) ? '250' : '449')) }};
        }
    }

    @keyframes spin2 {
        100% {
            stroke-dashoffset: {{ $deposits->isNotEmpty() ? '250' : '449' }};
        }
    }
</style>

<div class=" bg-white rounded-[20px] md:px-0 px-4">
    {{-- overview page --}}
    <main class="flex lg:flex-row md:flex-col-reverse base:flex-row flex-col-reverse justify-between items-start gap-6 relative mt-5">
       
        {{-- main content area --}}
        <div class="w-full">
        
            {{-- Hero section --}}
            <div class="hero-overview flex items-center w-full h-fit text-white p-7 rounded-[18px]">
                <div class="flex flex-col justify-center gap-[0.938rem] {{ $account && $deposits->isNotEmpty() ? 'md:w-[45%]' : 'lg:w-[70%] md:w-[60%] ' }} sm:w-[80%] w-full">
                    <h1 class="font-semibold md:text-xl text-lg md:leading-[1.875rem] leading-[1.675rem] font-['Outfit']">Supercharge Your Financial Potential with Arbitrage Trading!</h1>
                    <p class="text-sm md:font-medium font-normal md:leading-[1.416rem] leading-[1.1rem] opacity-70">Deposit into a plan now to experience the power of secure arbitrage trading and never worry about market volatility.</p>
                    <a class="w-[11rem] mt-3" href="{{ !$account ? route('settings') : route('invest') }}">
                        <x-button type='primaryDM' >Start Your Plan</x-button>
                    </a>
                </div>
            </div>

        {{-- my balance section --}}
        <div x-data="{ show: false }"
            class=" items-center w-full h-fit text-black_800 md:p-6 p-4 rounded-[18px] border mt-6">
           
            {{-- Heading --}}
            <div class="md:flex block items-center justify-between">
                
                {{-- action buttons mobile view --}}
                <div class=" md:hidden flex justify-end mb-7">
                    <a href="{{ route('invest') }}" class="w-[8rem] mr-3">
                        <x-button> Deposit </x-button>
                    </a>
                    <a href="{{ route('withdrawal') }}" >
                        <x-button type='secondary' > Withdraw </x-button>
                    </a>
                </div>

                {{-- heading title and hide/show icon --}}
                <div class="flex items-center">
                    <h3 class=" mr-4 font-extrabold md:text-lg sm:text-md text-base">
                        My Balance
                    </h3>
                    <div class=" cursor-pointer relative top-[1px] ">
                        <img src="{{asset('svg/Show.svg')}}" alt="show icon" class="md:w-[1.5rem] w-[1rem]" :class="{ 'block': show == true, 'hidden': show == false } " @click="show = false" >
                        <img src="{{asset('svg/Hide.svg')}}" alt="hide icon" class="md:w-[1.5rem] w-[1rem]" :class="{ 'block': show == false, 'hidden': show == true } " @click="show = true">    
                    </div>
                </div>

                {{-- action buttons desktop view --}}
                <div class=" md:flex hidden">
                    <a href="{{ route('invest') }}" class="w-[8rem] mr-3">
                        <x-button> Deposit </x-button>
                    </a>
                    <a href="{{ route('withdrawal') }}" >
                        <x-button type='secondary' > Withdraw </x-button>
                    </a>
                </div>
            </div>

           {{-- balance --}}
           <div x-data="{ openTab: 1 }" class=" md:mt-8 mt-5 ">
            <ul class=" flex items-center " role="tablist">
                <li @click="openTab = 1" class=" cursor-pointer p-2 md:px-5 px-4 md:text-sm text-s font-semibold "
                    :class=" openTab === 1 ? 'bg-blue_100 text-blue_600 rounded-full ' : 'hover:text-black_800 text-black_200'">
                    <span>USD</span>
                </li>
                <li @click="openTab = 2" class=" cursor-pointer p-2 md:px-5 px-4 md:text-sm text-s font-semibold "
                    :class=" openTab === 2 ? 'bg-blue_100 text-blue_600 rounded-full ' : 'hover:text-black_800 text-black_200'">
                    <span>BTC</span>
                </li>
                <li @click="openTab = 3" class=" cursor-pointer p-2 md:px-5 px-4 md:text-sm text-s font-semibold "
                    :class=" openTab === 3 ? 'bg-blue_100 text-blue_600 rounded-full ' : 'hover:text-black_800 text-black_200'">
                    <span>ETH</span>
                </li>
            </ul>
    
            <div class=" md:mt-10 mt-7">
                {{-- USDT balance container --}}
                <div class="" x-show="openTab === 1" id="tab-usdt"
                    x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                    x-transition:enter-start="transform translate-y-2 opacity-0"
                    x-transition:enter-end="transform translate-y-0 opacity-100" >

                    <div class="transition duration-700 ease-out h-fit flex justify-between md:gap-5 gap-3">
                       <div class=" border w-[50%] flex flex-col rounded-[18px] md:py-[2rem] md:px-[1.5rem] sm:p-4 p-3 hover:border-b-2 hover:border-b-blue_600 hover:scale-105 ">
                            <span class=" text-black_200 md:text-sm text-s ">Capital invested</span>
                            <div class=" mt-3 text-black_800 font-semibold md:text-xxl sm:text-xl text-lg "><span :class="{ 'inline-block': show == false, 'hidden': show == true } ">{{ formatNumber($usdtCapitalTotal, 4) }}</span><span :class="{ 'inline-block': show == true, 'hidden': show == false } " class="relative top-[5px]" >* * * *</span> <span> </span> <span class=" md:text-base sm:text-sm text-s text-black_200 ">USDT</span> </div>
                            <span class=" mt-3 md:text-sm sm:text-s text-xs md:leading-normal leading-loose text-black_400 inline font-medium" ><img src="{{ asset('svg/arrow-down.svg') }}" alt="profit" class="inline relative -top-[2px] md:mr-2 mr-1 md:w-[1rem] w-[.8rem]"> Start Date: &nbsp{{ $usdt->isNotEmpty() ? $usdt[0]->created_at->format('jS M, Y') : "-- -- --" }}. </span>
                        </div>  
                       <div class=" border w-[50%] flex flex-col rounded-[18px] md:py-[2rem] md:px-[1.5rem] sm:p-4 p-3 hover:border-b-2 hover:border-b-blue_600 hover:scale-105 ">
                            <span class=" text-black_200 md:text-sm text-s ">Profit gathered</span>
                            <div class=" mt-3 text-black_800 font-semibold md:text-xxl sm:text-xl text-lg "><span :class="{ 'inline-block': show == false, 'hidden': show == true } ">{{ formatNumber($usdtProfitTotal, 4) }}</span><span :class="{ 'inline-block': show == true, 'hidden': show == false } " class="relative top-[5px]" >* * * *</span> <span class=" md:text-base sm:text-sm text-s text-black_200 ">USDT</span> </div>
                            <span class=" mt-3 md:text-sm sm:text-s text-xs leading-loose text-black_400 inline font-medium" ><img src="{{ asset('svg/earnings.svg') }}" alt="profit" class="inline relative -top-[2px] md:mr-2 mr-1 md:w-[1rem] w-[.7rem]"> Last Profit: &nbsp{{ $usdt->isNotEmpty() ? $usdt[0]->updated_at->format('jS M, Y') : "-- -- --" }}, &nbsp  <span class="{{ $usdt->isNotEmpty() ? 'text-success bg-green-50' : 'text-black_200 bg-gray-100' }} inline md:p-2 p-1  rounded-full whitespace-nowrap" > <img src="{{ asset('svg/trending-up.svg') }}" alt="earning" class=" {{ $usdt->isNotEmpty() ? 'inline' : 'hidden' }} md:w-[1rem] w-[.8rem]"> +{{ $usdt->isNotEmpty() ? formatNumber(( $usdt[0]->percentage / 100 ) * $usdt[0]->amount /  $usdt[0]->duration, 4) : '0' }} </span> </span>
                        </div>  
                    </div>

                     <!-- TradingView Widget BEGIN -->
                     <div class="sm:h-[30rem] h-[22rem] w-full mt-7 rounded-[20px]">
                        <div class="tradingview-widget-container" style="height:100%;width:100%">
                            <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                            {
                            "autosize": true,
                            "symbol": "COINBASE:USDTUSD",
                            "interval": "D",
                            "timezone": "Etc/UTC",
                            "theme": "light",
                            "style": "2",
                            "locale": "en",
                            "enable_publishing": false,
                            "gridColor": "rgba(240, 243, 250, 0)",
                            "hide_top_toolbar": true,
                            "calendar": false,
                            "hide_volume": true,
                            "support_host": "https://www.tradingview.com"
                            }
                            </script>
                        </div>
                    </div>
                    <!-- TradingView Widget END -->
                </div>

                {{--BTC balance container --}}
                <div class="" x-show="openTab === 2" id="tab-btc"
                    x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                    x-transition:enter-start="transform translate-y-2 opacity-0"
                    x-transition:enter-end="transform translate-y-0 opacity-100" >

                    <div class="transition duration-700 ease-out h-fit flex justify-between md:gap-5 gap-3">
                       <div class=" border w-[50%] flex flex-col rounded-[18px] md:py-[2rem] md:px-[1.5rem] sm:p-4 p-3 hover:border-b-2 hover:border-b-blue_600 hover:scale-105 ">
                            <span class=" text-black_200 md:text-sm text-s ">Capital invested</span>
                            <div class=" mt-3 text-black_800 font-semibold md:text-xxl sm:text-xl text-lg "><span :class="{ 'inline-block': show == false, 'hidden': show == true } ">{{ formatNumber($btcCapitalTotal, 4) }}</span><span :class="{ 'inline-block': show == true, 'hidden': show == false } " class="relative top-[5px]" >* * * *</span> <span class=" md:text-base sm:text-sm text-s text-black_200 ">BTC</span> </div>
                            <span class=" mt-3 md:text-sm sm:text-s text-xs md:leading-normal leading-loose text-black_400 inline font-medium" ><img src="{{ asset('svg/arrow-down.svg') }}" alt="profit" class="inline relative -top-[2px] md:mr-2 mr-1 md:w-[1rem] w-[.8rem]"> Start Date: &nbsp{{ $btc->isNotEmpty() ? $btc[0]->created_at->format('jS M, Y') : "-- -- --" }}. </span>
                        </div>  
                       <div class=" border w-[50%] flex flex-col rounded-[18px] md:py-[2rem] md:px-[1.5rem] sm:p-4 p-3 hover:border-b-2 hover:border-b-blue_600 hover:scale-105 ">
                            <span class=" text-black_200 md:text-sm text-s ">Profit gathered</span>
                            <div class="mt-3 text-black_800 font-semibold md:text-xxl sm:text-xl text-lg "><span :class="{ 'inline-block': show == false, 'hidden': show == true } ">{{ formatNumber($btcProfitTotal, 4) }}</span><span :class="{ 'inline-block': show == true, 'hidden': show == false } " class="relative top-[5px]" >* * * *</span> <span class=" md:text-base sm:text-sm text-s text-black_200 ">BTC</span> </div>
                            <span class=" mt-3 md:text-sm sm:text-s text-xs leading-loose text-black_400 inline font-medium" ><img src="{{ asset('svg/earnings.svg') }}" alt="profit" class="inline relative -top-[2px] md:mr-2 mr-1 md:w-[1rem] w-[.7rem]"> Last Profit: &nbsp{{ $btc->isNotEmpty() ? $btc[0]->updated_at->format('jS M, Y') : "-- -- --" }}, &nbsp  <span class="{{ $btc->isNotEmpty() ? 'text-success bg-green-50' : 'text-black_200 bg-gray-100' }} inline md:p-2 p-1  rounded-full whitespace-nowrap " > <img src="{{ asset('svg/trending-up.svg') }}" alt="earning" class=" {{ $btc->isNotEmpty() ? 'inline' : 'hidden' }} md:w-[1rem] w-[.8rem]"> +{{ $btc->isNotEmpty()  ? formatNumber(( $btc[0]->percentage / 100 ) * $btc[0]->amount /  $btc[0]->duration, 4) : '0' }} </span> </span>
                        </div>  
                    </div>

                    <!-- TradingView Widget BEGIN -->
                    <div class="sm:h-[30rem] h-[22rem] w-full mt-7 rounded-[20px]">
                        <div class="tradingview-widget-container" style="height:100%;width:100%">
                            <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                            {
                            "autosize": true,
                            "symbol": "COINBASE:BTCUSD",
                            "interval": "D",
                            "timezone": "Etc/UTC",
                            "theme": "light",
                            "style": "2",
                            "locale": "en",
                            "enable_publishing": false,
                            "hide_top_toolbar": true,
                            "gridColor": "rgba(240, 243, 250, 0)",
                            "calendar": false,
                            "hide_volume": true,
                            "support_host": "https://www.tradingview.com"}
                            </script>
                        </div>
                    </div>
                    <!-- TradingView Widget END -->
                </div>

                {{--ETH balance container --}}
                <div class="" x-show="openTab === 3" id="tab-eth"
                    x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                    x-transition:enter-start="transform translate-y-2 opacity-0"
                    x-transition:enter-end="transform translate-y-0 opacity-100" >

                    <div class="transition duration-700 ease-out h-fit flex justify-between md:gap-5 gap-3">
                       <div class=" border w-[50%] flex flex-col rounded-[18px] md:py-[2rem] md:px-[1.5rem] sm:p-4 p-3 hover:border-b-2 hover:border-b-blue_600 hover:scale-105 ">
                            <span class=" text-black_200 md:text-sm text-s ">Capital invested</span>
                            <div class=" mt-3 text-black_800 font-semibold md:text-xxl sm:text-xl text-lg "><span :class="{ 'inline-block': show == false, 'hidden': show == true } ">{{ formatNumber($ethCapitalTotal, 4) }}</span><span :class="{ 'inline-block': show == true, 'hidden': show == false } " class="relative top-[5px]" >* * * *</span> <span class=" md:text-base sm:text-sm text-s text-black_200 ">ETH</span> </div>
                            <span class=" mt-3 md:text-sm sm:text-s text-xs md:leading-normal leading-loose text-black_400 inline font-medium" ><img src="{{ asset('svg/arrow-down.svg') }}" alt="profit" class="inline relative -top-[2px] md:mr-2 mr-1 md:w-[1rem] w-[.8rem]"> Start Date: &nbsp{{ $eth->isNotEmpty() ? $eth[0]->created_at->format('jS M, Y') : "-- -- --" }}. </span>
                        </div>  
                       <div class=" border w-[50%] flex flex-col rounded-[18px] md:py-[2rem] md:px-[1.5rem] sm:p-4 p-3 hover:border-b-2 hover:border-b-blue_600 hover:scale-105 ">
                            <span class=" text-black_200 md:text-sm text-s ">Profit gathered</span>
                            <div class=" mt-3 text-black_800 font-semibold md:text-xxl sm:text-xl text-lg "><span :class="{ 'inline-block': show == false, 'hidden': show == true } ">{{ formatNumber($ethProfitTotal, 4) }}</span><span :class="{ 'inline-block': show == true, 'hidden': show == false } " class="relative top-[5px]" >* * * *</span> <span class=" md:text-base sm:text-sm text-s text-black_200 ">ETH</span> </div>
                            <span class=" mt-3 md:text-sm sm:text-s text-xs leading-loose text-black_400 inline font-medium " ><img src="{{ asset('svg/earnings.svg') }}" alt="profit" class="inline relative -top-[2px] md:mr-2 mr-1 md:w-[1rem] w-[.7rem]"> Last Profit: &nbsp{{ $eth->isNotEmpty() ? $eth[0]->updated_at->format('jS M, Y') : "-- -- --" }}, &nbsp  <span class="{{ $eth->isNotEmpty() ? 'text-success bg-green-50' : 'text-black_200 bg-gray-100' }} inline md:p-2 p-1  rounded-full whitespace-nowrap" > <img src="{{ asset('svg/trending-up.svg') }}" alt="earning" class=" {{ $eth->isNotEmpty() ? 'inline' : 'hidden' }} md:w-[1rem] w-[.8rem]"> +{{ $eth->isNotEmpty()  ? formatNumber(( $eth[0]->percentage / 100 ) * $eth[0]->amount /  $eth[0]->duration, 4) : '0' }} </span> </span>
                        </div>  
                    </div>

                     <!-- TradingView Widget BEGIN -->
                     <div class="sm:h-[30rem] h-[22rem] w-full mt-7 rounded-[20px]">
                        <div class="tradingview-widget-container" style="height:100%;width:100%">
                            <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                            {
                            "autosize": true,
                            "symbol": "COINBASE:ETHUSD",
                            "interval": "D",
                            "timezone": "Etc/UTC",
                            "theme": "light",
                            "style": "2",
                            "locale": "en",
                            "enable_publishing": false,
                            "gridColor": "rgba(240, 243, 250, 0)",
                            "hide_top_toolbar": true,
                            "calendar": false,
                            "hide_volume": true,
                            "support_host": "https://www.tradingview.com"
                        }
                            </script>
                        </div>
                    </div>
                    <!-- TradingView Widget END -->
                </div>

                </div> 
            </div>
        </div>

        {{-- recent activity section --}}
        <div class=" items-center w-full h-fit text-black_800 md:p-6 p-4 rounded-[18px] border mt-6 ">
            
            {{-- Heading --}}
            <div class="flex items-center justify-between">
                
                {{-- heading title and hide/show icon --}}
                <h3 class=" mr-4 font-extrabold md:text-lg sm:text-md text-base">
                    Activities
                </h3>

                {{-- all activities button --}}
                <div class=" flex ">
                    <a href="{{ route('history') }}" >
                        <x-button type='secondary' icon='svg/arrow-right.svg' > View all </x-button>
                    </a>
                </div>

            </div>

            {{-- Few activites --}}

            @if($transfers->isEmpty() && $deposits->isEmpty() && $withdrawals->isEmpty() && $compounds->isEmpty() && $topups->isEmpty())
             <div class=" text-center w-full">
                No activites
             </div>
            @else 
            @if($deposits->isNotEmpty())
            @php
                $latestDeposit = $deposits->sortByDesc('created_at')->first();
            @endphp

            <div class="flex md:gap-5 gap-4 w-full">
                <img src="{{ asset('svg/topup.svg') }}" alt="deposit icon" class="md:w-[3.5rem] sm:w-[2.5rem] w-[2rem]">
                <div class="w-full border-b md:py-5 py-3 flex justify-between items-center">
                    <div class="flex flex-col">
                        <span class="md:text-base sm:text-sm text-s font-medium">Deposit <span class="uppercase">{{ $latestDeposit->token }}</span></span>
                        <span class="text-success md:text-sm sm:text-s text-xs capitalize md:mt-2 mt-1">confirmed <span class="text-black_200"> | {{ $latestDeposit->created_at->format('jS M, Y') }}</span></span>
                    </div>
                    <span class="w-fit text-black_600 font-semibold md:text-base sm:text-sm text-s">+{{ formatNumber($latestDeposit->amount, 2) }}  {{ $latestDeposit->token }}</span>
                </div>
            </div>
        @else
            <div></div>
        @endif

        {{-- Compounding --}}
        @if($compounds->isNotEmpty())
            @php
             $latestCompound = $compounds->sortByDesc('created_at')->first();
            @endphp

            <div class="flex md:gap-5 gap-4 w-full">
                <img src="{{ asset('svg/compound.svg') }}" alt="compound icon" class="md:w-[3.5rem] sm:w-[2.5rem] w-[2rem]">
                <div class="w-full border-b md:py-5 py-3 flex justify-between items-center">
                    <div class="flex flex-col">
                        <span class="md:text-base sm:text-sm text-s font-medium">Compound <span class="uppercase">{{ $latestCompound->token->name }}</span></span>
                        <span class="{{$latestCompound->status == 1 ? 'text-success' : 'text-warning'}} md:text-sm sm:text-s text-xs capitalize md:mt-2 mt-1">{{$latestCompound->status == 1 ? 'successful' : 'processing...'}} <span class="text-black_200"> | {{ $latestCompound->created_at->format('jS M, Y') }}</span></span>
                    </div>
                    <span class=" w-fit text-black_600 font-semibold md:text-base sm:text-sm text-s">+{{ formatNumber($latestCompound->amount, 2) }} {{ $latestCompound->token->name }}</span>
                </div>
            </div>
        @else
            <div></div>
        @endif

        {{-- Withdrawal --}}
        @if($withdrawals->isNotEmpty())
        @php
            $latestWithdraw = $withdrawals->sortByDesc('created_at')->first();
        @endphp

            <div class="flex md:gap-5 gap-4 w-full">
                <img src="{{ asset('svg/remove.svg') }}" alt="withdrawal icon" class="md:w-[3.5rem] sm:w-[2.5rem] w-[2rem]">
                <div class="w-full border-b md:py-5 py-3 flex justify-between items-center">
                    <div class="flex flex-col">
                        <span class="md:text-base sm:text-sm text-s font-medium"> <span class="uppercase">{{ $latestWithdraw->token->name }}</span> withdrawal from <span class=" capitalize ">{{ $latestWithdraw->purse }}</span></span>
                        <span class="{{$latestWithdraw->processed == 1 ? 'text-success' : 'text-warning'}} md:text-sm sm:text-s text-xs capitalize md:mt-2 mt-1">{{$latestWithdraw->processed == 1 ? 'successful' : 'processing...'}}<span class="text-black_200"> | {{ $latestWithdraw->created_at->format('jS M, Y') }}</span></span>
                    </div>
                    <span class="w-fit text-black_600 font-semibold md:text-base sm:text-sm text-s">-{{ formatNumber($latestWithdraw->amount, 2) }} {{ $latestWithdraw->token->name }}</span>
                </div>
            </div>
        @else
            <div></div>
        @endif

        {{-- Topup --}}
        @if($topups->isNotEmpty())
        @php
            $latestTopup = $topups->sortByDesc('created_at')->first();
        @endphp

            <div class="flex md:gap-5 gap-4 w-full">
                <img src="{{ asset('svg/topup.svg') }}" alt="topup icon" class="md:w-[3.5rem] sm:w-[2.5rem] w-[2rem]">
                <div class="w-full border-b md:py-5 py-3 flex justify-between items-center">
                    <div class="flex flex-col">
                        <span class="md:text-base sm:text-sm text-s font-medium">Top up <span class="uppercase">{{ $latestTopup->token->name }}</span></span>
                        <span class="{{ $latestTopup->status == 1 ? 'text-success' : 'text-warning'}} md:text-sm sm:text-s text-xs capitalize md:mt-2 mt-1">{{$latestTopup->status == 1 ? 'successful' : 'processing...'}} <span class="text-black_200"> | {{ $latestTopup->created_at->format('jS M, Y') }}</span></span>
                    </div>
                    <span class="w-fit text-black_600 font-semibold md:text-base sm:text-sm text-s">+{{ formatNumber($latestTopup->amount, 2) }} {{ $latestTopup->token->name }}</span>
                </div>
            </div>
        @else
            <div></div>
        @endif

        {{-- transfer --}}
        @if($transfers->isNotEmpty())
        @php
            $latestTransfer = $transfers->sortByDesc('created_at')->first();
        @endphp

            <div class="flex md:gap-5 gap-4 w-full">
                <img src="{{ asset('svg/remove.svg') }}" alt="transfer icon" class="md:w-[3.5rem] sm:w-[2.5rem] w-[2rem]">
                <div class="w-full md:py-5 py-3 flex justify-between items-center">
                    <div class="flex flex-col w-[80%]">
                        <span class="md:text-base sm:text-sm text-s font-medium">Transfer <span class="uppercase">{{ $latestTransfer->token->name }}</span> to {{$latestTransfer->receiver}} </span>
                        <span class=" text-success md:text-sm sm:text-s text-xs capitalize md:mt-2 mt-1"> Confirmed <span class="text-black_200"> | {{ $latestWithdraw->created_at->format('jS M, Y') }}</span></span>
                    </div>
                    <span class="w-fit text-black_600 font-semibold md:text-base sm:text-sm text-s">-{{ formatNumber($latestTransfer->amount, 2) }} {{ $latestTransfer->token->name }}</span>
                </div>
            </div>
        @else
            <div></div>
        @endif
        @endif
        </div>
    </div>

       {{-- aside section/ getting started --}}
        <div class="lg:w-[25rem] md:w-full base:w-[20rem] w-full {{ $account && $deposits->isNotEmpty() ? 'hidden' : 'block' }} h-fit border rounded-[18px] md:p-6 p-4 lg:sticky md:relative base:sticky relative lg:top-[7.5rem] md:top-0 base:top-[5.5rem]">
            <h3 class=" md:mr-4 text-center font-extrabold md:text-lg sm:text-md text-base">
                Get started here
            </h3>

            <div class="w-full sm:flex items-center justify-center overflow overflow-scroll">
                <div class="w-fit flex items-center justify-center lg:gap-0 md:gap-8 base:gap-0 gap-4 lg:flex-col md:flex-row base:flex-col flex-row md:mt-0 ">
                    {{-- add wallets --}}
                    <div class='relative lg:w-full md:w-[47%] base:w-full sm:w-[50%] w-[15rem]'>
                        <svg class="svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="65px" height="65px">
                            <circle cx="32.5" cy="32.5" r="28" stroke-linecap="round"/>
                        </svg>                                                  
                        <div class=' bg-blue_600 rounded-[20px] lg:w-full w-full p-5 mt-8'>
                            <div class="flex text-sm text-white font-semibold justify-between items-center md:w-full w-[12rem] mb-5">
                                <div class=" text-s rounded-full flex items-center justify-center w-[4.063rem] h-[4.063rem] bg-blue_600 border-4 border-[#6586FC]">
                                    {{ (count($this->wallets) == 1) ? '33' : ((count($this->wallets) == 2) ? '66' : ((count($this->wallets) == 3) ? '100' : '0')) }}%
                                </div>
                                <span class=" w-[60%]">Input your wallet address</span>
                            </div>
                            <span onclick="addWalletsQuery()"><x-button type='primaryDM'>{{ count($this->wallets) < 1 ? 'Begin' : (count($this->wallets) <= 2 ? 'Finish up' : 'Done') }}</x-button></a>
                        </div>
                    </div>
    
                    {{-- make deposit --}}
                    <div class="relative lg:w-full md:w-[47%] base:w-full sm:w-[50%] w-[15rem]">
                        <svg class="svg2 svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="65px" height="65px">
                            <circle cx="32.5" cy="32.5" r="28" stroke-linecap="round"/>
                        </svg> 
                        <div class='{{ $deposits->isEmpty() ? 'bg-gray_500 border' : 'bg-blue_600 border-none' }} rounded-[20px] lg:w-full w-full p-5 mt-8'>
                            <div class="flex text-sm {{ $deposits->isEmpty() ? 'text-black_800 opacity-60' : 'text-white opacity-100'}} font-semibold justify-between items-center w-full mb-5">
                                <div class=" rounded-full text-s flex items-center justify-center w-[4.063rem] h-[4.063rem] bg-transparent border-4 {{ $deposits->isNotEmpty() ? 'border-[#6586FC]' : 'border-[#F6F7F9]'}}">
                                    {{ $deposits->isNotEmpty() ? '100' : '0' }}%
                                </div>
                                <span class=" w-[60%]">Make your first deposit</span>
                            </div>
                            <a href="{{ route('invest')}}" class="{{ !$account ? 'pointer-events-none' : 'cursor-pointer' }}"><x-button type="{{ $deposits->isEmpty() ? 'deactivated' : 'primaryDM' }}" >{{ $deposits->isEmpty() ? 'Begin' : 'Done' }}</x-button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- @if (!$account)
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

     --}}

    {{-- <div class="mb-10">
        <div class=" rounded-sb border border-gray-300 bg-gray-50 p-3">
            <h3 class=" font-semibold text-xl">Refer friends and family to BlockArb and earn more</h3>
            <p class=" mt-2">Use the below link to invite your friends & earn 2% of their every deposit.</p>
            <div
                class=" mt-6 rounded-sb flex lg:flex-nowrap flex-wrap p-1 justify-between items-center border border-gray-300 bg-white"> --}}

                {{-- <div class=" flex">
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
                </div> --}}
                {{-- 
                <button
                    class=" border border-gray-700 btn-clip flex items-center text-gray-500 rounded-sb py-1 w-full lg:w-auto mt-3 lg:mt-0 justify-center px-4 "
                    data-clipboard-target="#copy-target">
                    <span class=" mr-2 font-semibold">Copy</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class=" text-secondary" width="20" height="20"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy">
                        <rect x="9" y="9" width="13" height="13" rx="2"
                            ry="2"></rect>
                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                    </svg>
                </button> --}}
            {{-- </div> --}}
        {{-- </div> --}}
    {{-- </div> --}}
</div>

@push('scripts')

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let currentNumber = 0;
        const targetNumber = 6000;
        const counterElement = document.querySelector(".number-animate");
        const updateNumber = () => {
            if (currentNumber >= targetNumber) return;
            const difference = targetNumber - currentNumber;
            const step = Math.max(1, Math.floor(difference / 25));
            currentNumber = Math.min(currentNumber + step, targetNumber);
            counterElement.textContent = currentNumber.toLocaleString();
            setTimeout(updateNumber, 50);
        };
        updateNumber();
    });
    </script>
    

   {{--}} <script>

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
    </script> --}}
@endpush 
