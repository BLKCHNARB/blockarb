<div class="bg-white p-4 text-black_800 pt-8 lg:px-8 lg:py-3 h-full">

    @if ($step === 0)

    {{-- info modal --}}
    @if (request()->query('snowball'))
    <x-alert-modal wire:model='compound_info'>

        <x-slot name="close" >
            <img src="{{ asset('svg/close.svg') }}" alt="close" wire:click="$set('compound_info', false)" class="base:w-[6rem] w-[5rem]">
        </x-slot>
       
        <x-slot name="content">
          <h3 class="base:my-6 my-3 font-bold font-['Poppins'] base:text-xl text-md">  Snowball a Plan </h3>
          <p class="base:text-lg text-base"> Select an active plan you wish to reinvest its profit into capital.</p>
        </x-slot>

    </x-alert-modal>
    @endif
    
    {{-- top up info modal --}}
    @if (request()->query('topup'))
    <x-alert-modal wire:model='topup_info'>

        <x-slot name="close" >
            <img src="{{ asset('svg/close.svg') }}" alt="close" wire:click="$set('topup_info', false)" class="base:w-[6rem] w-[5rem]">
        </x-slot>
       
        <x-slot name="content">
          <h3 class="base:my-6 my-3 font-bold font-['Poppins'] base:text-xl text:md">  Top up an active Plan </h3>
          <p class="base:text-lg text-base"> Select an active plan you wish to topup.</p>
        </x-slot>

    </x-alert-modal>
    @endif
    

    <div class=" mb-10 flex justify-between items-center">
        <h1 class=" font-extrabold base:text-lg text-[1.35rem] text-black_800 flex w-full"> Portfolio </h1>
    </div>

    @if ($retailPlans->isEmpty() && $businessPlans->isEmpty() && $enterprisePlans->isEmpty())
        <div class="text-center base-text font-medium my-10">
            You have no active Plan, <a href="{{ route('invest') }}" class=" text-neutral_800 underline">Deposit now to get started</a>
        </div>
    @else

    <main class=" gap-8 grid">
        
        {{-- Retail plan --}}
        <div class="border sm:p-8 p-6 {{ $retailPlans->isEmpty() ? "bg-transparent" : "bg-blue_800"}} rounded-[20px] " >
            <h2 class=" font-extrabold base:text-lg text-md {{ $retailPlans->isEmpty() ? "text-black_800" : "text-white"}}" >Your Retail Plan</h2>
            @forelse ($retailPlans as $retail)
            <div class=" border sm:p-8 p-5 rounded-[20px] bg-white mt-8 mb-3 border-b-2 border-transparent hover:scale-y-105 transition-all " >

                <div class="flex justify-between items-center w-full">
                    <h3 class="font-bold base:text-lg text-md relative sm:top-0 top-12 text-black_800" >{{ $retail->token_id === 1 ? "USDT" : ($retail->token_id === 2 ? "Bitcoin" : "Ethereum") }}</h3>

                    {{-- action buttoons --}}
                    <div class=" flex ">
                        <span class="base:w-[9rem] w-[7rem] mr-3" wire:click="topup({{ $retail->id }})">
                            <x-button> Topup </x-button>
                        </span>
                        <span class="base:w-[9rem] w-[7rem]" wire:click="compound({{ $retail->id }})">
                            <x-button type='secondary' > Snowball </x-button>
                        </span>
                    </div>
                </div>
                
                {{-- investment details --}}
                <div class="transition duration-700 ease-out sm:mt-6 mt-16 flex base:flex-nowrap flex-wrap base:justify-between justify-center gap-6">
                    <div class=" border base:w-[50%] w-full flex flex-col rounded-[18px] base:py-[2rem] base:px-[1.5rem] p-[1rem] ">
                         <span class=" font-medium text-black_600 base-text ">Capital invested</span>
                         <div class=" mt-3 text-black_800 font-semibold base:text-xxl text-xl "><span >{{ formatNumber($retail->amount, 2) }}</span> <span class=" base-text text-black_200 ">{{ $retail->token_id === 1 ? "USDT" : ($retail->token_id === 2 ? "BTC" : "ETH") }}</span> </div>
                         <span class=" mt-3 base:text-sm text-s leading-loose text-black_400 inline font-medium" ><img src="{{ asset('svg/arrow-down.svg') }}" alt="profit" class="inline relative -top-[2px] mr-2 base:w-[1rem] w-[.8rem]"> Start Date: &nbsp{{ $retail->created_at->format('jS M, Y') }}. </span>
                    </div>  
                    <div class=" border base:w-[50%] w-full flex flex-col rounded-[18px] base:py-[2rem] base:px-[1.5rem] p-[1rem] ">
                         <span class=" font-medium text-black_600 base-text">Profit gathered</span>
                         <div class=" mt-3 text-black_800 font-semibold base:text-xxl text-xl "><span >{{ formatNumber($retail->profit, 2) }}</span> <span class=" base-text text-black_200 ">{{ $retail->token_id === 1 ? "USDT" : ($retail->token_id === 2 ? "BTC" : "ETH") }}</span> </div>
                         <span class=" mt-3 base:text-sm text-s leading-loose text-black_400 inline font-medium" ><img src="{{ asset('svg/earnings.svg') }}" alt="profit" class="inline relative -top-[2px] mr-2 base:w-[1rem] w-[.8rem]"> Last Profit: &nbsp{{ $retail->updated_at->format('jS M, Y') }}, &nbsp  <span class="text-success inline sm:p-2 p-1 bg-green-50 rounded-full " > <img src="{{ asset('svg/trending-up.svg') }}" alt="earning" class="inline base:w-[1rem] w-[.8rem]"> +{{ $retail->percentage ? formatNumber(( $retail->percentage / 100 ) * $retail->amount /  $retail->duration, 4) : '' }} </span> </span>
                    </div>  
                </div>
            </div>
            @empty
                <div class="text-center font-medium my-10">
                    No Active Plan
                </div>
            @endforelse
        </div>

        {{-- Business plan --}}
        <div class="border sm:p-8 p-6 {{ $businessPlans->isEmpty() ? "bg-transparent" : "bg-blue_800"}} rounded-[20px] " >
            <h2 class=" font-extrabold base:text-lg text-md {{ $businessPlans->isEmpty() ? "text-black_800" : "text-white"}}" >Your business Plan</h2>
            @forelse ($businessPlans as $business)
            <div class=" box-shadow sm:p-8 p-5 rounded-[20px] mt-8 mb-3 bg-white border-b-2 border-transparent hover:scale-y-105 transition-all" >

                <div class="flex justify-between items-center w-full">
                    <h3 class="font-bold base:text-lg text-md relative sm:top-0 top-12 text-black_800" >{{ $business->token_id === 1 ? "USDT" : ($business->token_id === 2 ? "Bitcoin" : "Ethereum") }}</h3>

                    {{-- action buttoons --}}
                    <div class=" flex ">
                        <span class="base:w-[9rem] w-[7rem] mr-3" wire:click="topup({{ $business->id }})">
                            <x-button> Topup </x-button>
                        </span>
                        <span class="base:w-[9rem] w-[7rem]" wire:click="compound({{ $business->id }})">
                            <x-button type='secondary' > Snowball </x-button>
                        </span>
                    </div>
                </div>
                
                {{-- investment details --}}
                <div class="transition duration-700 ease-out sm:mt-6 mt-16 flex base:flex-nowrap flex-wrap base:justify-between justify-center gap-6">
                    <div class=" border base:w-[50%] w-full flex flex-col rounded-[18px] base:py-[2rem] base:px-[1.5rem] p-[1rem] ">
                         <span class=" font-medium text-black_600 base-text ">Capital invested</span>
                         <div class=" mt-3 text-black_800 font-semibold base:text-xxl text-xl "><span >{{ formatNumber($business->amount, 2) }}</span> <span class=" base-text text-black_200 ">{{ $business->token_id === 1 ? "USDT" : ($business->token_id === 2 ? "BTC" : "ETH") }}</span> </div>
                         <span class=" mt-3 base:text-sm text-s leading-loose text-black_400 inline font-medium" ><img src="{{ asset('svg/arrow-down.svg') }}" alt="profit" class="inline relative -top-[2px] md:w-[1rem] w-[.8rem] mr-2"> Start Date: &nbsp{{ $business->created_at->format('jS M, Y') }}. </span>
                    </div>  
                    <div class=" border base:w-[50%] w-full flex flex-col rounded-[18px] base:py-[2rem] base:px-[1.5rem] p-[1rem] ">
                         <span class=" font-medium text-black_600 base-text">Profit gathered</span>
                         <div class=" mt-3 text-black_800 font-semibold base:text-xxl text-xl "><span >{{ formatNumber($business->profit, 2) }}</span> <span class=" base-text text-black_200 ">{{ $business->token_id === 1 ? "USDT" : ($business->token_id === 2 ? "BTC" : "ETH") }}</span> </div>
                         <span class=" mt-3 base:text-sm text-s leading-loose text-black_400 inline font-medium" ><img src="{{ asset('svg/earnings.svg') }}" alt="profit" class="inline relative -top-[2px] base:w-[1rem] w-[.8rem] mr-2"> Last Profit: &nbsp{{ $business->updated_at->format('jS M, Y') }}, &nbsp  <span class="text-success inline sm:p-2 p-1 bg-green-50 rounded-full" > <img src="{{ asset('svg/trending-up.svg') }}" alt="earning" class="inline md:w-[1rem] w-[.9rem]"> +{{ $business->percentage ? formatNumber(( $retail->percentage / 100 ) * $business->amount /  $business->duration, 4) : '' }} </span> </span>
                    </div>  
                </div>
            </div>
            @empty
                <div class="text-center font-medium my-10">
                    No Active Plan
                </div>
            @endforelse
        </div>

        {{-- Enterprise plan --}}
        <div class="border sm:p-8 p-6 {{ $enterprisePlans->isEmpty() ? "bg-transparent" : "bg-blue_800"}} rounded-[20px] " >
            <h2 class=" font-extrabold base:text-lg text-md {{ $enterprisePlans->isEmpty() ? "text-black_800" : "text-white"}}" > Your Enterprise Plan</h2>
            @forelse ($enterprisePlans as $enterprise)
            <div class=" box-shadow sm:p-8 p-5 rounded-[20px] mt-8 mb-3 border-b-2 border-transparent hover:scale-y-105 transition-all bg-white " >

                <div class="flex justify-between items-center w-full">
                    <h3 class="font-bold relative sm:top-0 top-12 base:text-lg text-md text-black_800" >{{ $enterprise->token_id === 1 ? "USDT" : ($enterprise->token_id === 2 ? "Bitcoin" : "Ethereum") }}</h3>

                    {{-- action buttoons --}}
                    <div class=" flex ">
                        <span class="base:w-[9rem] w-[7rem] mr-3" wire:click="topup({{ $enterprise->id }})">
                            <x-button> Topup </x-button>
                        </span>
                        <span class="base:w-[9rem] w-[7rem]" wire:click="compound({{ $enterprise->id }})">
                            <x-button type='secondary' > Snowball </x-button>
                        </span>
                    </div>
                </div>
                
                {{-- investment details --}}
                <div class="transition duration-700 ease-out sm:mt-6 mt-16 flex base:flex-nowrap flex-wrap base:justify-between justify-center gap-6">
                    <div class=" border base:w-[50%] w-full flex flex-col rounded-[18px] base:py-[2rem] base:px-[1.5rem] p-[1rem] ">
                         <span class=" font-medium text-black_600 base-text ">Capital invested</span>
                         <div class=" mt-3 text-black_800 font-semibold base:text-xxl text-xl "><span >{{ formatNumber($enterprise->amount, 2) }}</span> <span class=" base-text text-black_200 ">{{ $enterprise->token_id === 1 ? "USDT" : ($enterprise->token_id === 2 ? "BTC" : "ETH") }}</span> </div>
                         <span class=" mt-3 base:text-sm text-s leading-loose text-black_400 inline font-medium" ><img src="{{ asset('svg/arrow-down.svg') }}" alt="profit" class="inline relative -top-[2px] mr-2 base:w-[1rem] w-[.8rem]"> Start Date: &nbsp{{ $enterprise->created_at->format('jS M, Y') }}. </span>
                    </div>  
                    <div class=" border base:w-[50%] w-full flex flex-col rounded-[18px] base:py-[2rem] base:px-[1.5rem] p-[1rem] ">
                         <span class=" font-medium text-black_600 base-text">Profit gathered</span>
                         <div class=" mt-3 text-black_800 font-semibold base:text-xxl text-xl "><span >{{ formatNumber($enterprise->profit, 2) }}</span> <span class=" base-text text-black_200 ">{{ $enterprise->token_id === 1 ? "USDT" : ($enterprise->token_id === 2 ? "BTC" : "ETH") }}</span> </div>
                         <span class=" mt-3 base:text-sm text-s leading-loose text-black_400 inline font-medium" ><img src="{{ asset('svg/earnings.svg') }}" alt="profit" class="inline relative -top-[2px] mr-2 base:w-[1rem] w-[.8rem]"> Last Profit: &nbsp{{ $enterprise->updated_at->format('jS M, Y') }}, &nbsp  <span class="text-success inline sm:p-2 p-1 bg-green-50 rounded-full " > <img src="{{ asset('svg/trending-up.svg') }}" alt="earning" class="inline"> +{{ $enterprise->percentage ? formatNumber(( $enterprise->percentage / 100 ) * $enterprise->amount /  $enterprise->duration, 4) : '' }} </span> </span>
                    </div>  
                </div>
            </div>
            @empty
                <div class="text-center font-medium my-10">
                    No Active Plan
                </div>
            @endforelse
        </div>
        
        {{-- Topup --}}
        <x-confirmation-modal wire:model='topup'>

            <x-slot name="close">
                <span wire:click="$set('topup', false)">
                    x
                </span>
            </x-slot>

            <x-slot name="title">
                Top Up - {{ $token ? $token->name : ""}}
            </x-slot>

            <x-slot name="content">
                <p class=" text-center mt-5 mb-7 base-text text-black_600">Add to your capital with no minimum amount restrictions.</p>
                <form action="" wire:submit.prevent=createPlan>
                    <div class="">
                        <div class="mt-5 ">
                            <label for="amount" class="base:text-lg text-base text-black_800">Amount to Topup</label>
                            <div class="flex input w-full rounded-[15px] mt-4 border-2 border-gray_100 hover:border-blue_600">
                                <label class="py-3 px-4 font-medium base:text-lg text-base" for="amount">{{ $token ? $token->name : "" }}</label>
                                <input wire:model="amount" placeholder="0.00" value="" autofocus
                                class=" base:text-lg text-base placeholder-gray-400 bg-transparent w-full border-l-2 px-4 border-transparent focus:outline-none focus:border-blue_600 active:border-blue_600 "
                                type="number" name="amount" id="amount">
                            </div>
                        </div>

                    </div>
                </form>
            </x-slot>

            <x-slot name="footer">

                <x-button wire:click="confirm" class="" wire:loading.attr="disabled">
                    {{ __('Proceed') }}
                </x-button>

                <x-button type="secondary" wire:click="$set('topup', false)" class="mt-5" wire:loading.attr="disabled">
                    {{ __('Close') }}
                </x-button>

            </x-slot>
        </x-confirmation-modal>

        {{-- snowball --}}
        <x-confirmation-modal wire:model='compound'>

            <x-slot name="close">
                <span wire:click="$set('compound', false)">
                    x
                </span>
            </x-slot>

            <x-slot name="title">
                Snowball Plan - {{ $token ? $token->name : ""}}
            </x-slot>

            <x-slot name="content">
                <p class=" text-center mt-5 base:mb-7 mb-4 base-text text-black_600">What is Snowball? It's a method that boosts your earnings by effortlessly reinvesting profits into your capital. Watch your returns grow as you strategically compound your investments on our trading platform.</p>
                <form action="" wire:submit.prevent=createPlan>
                    <div class="">
                        <div class="mt-5 ">
                            <label for="amount" class="base:text-lg text-base text-black_800">Amount to Snowball into your plan</label>
                            <div class="flex input w-full rounded-[15px] mt-4 border-2 border-gray_100 hover:border-blue_600">
                                <label class="py-3 px-4 font-medium base:text-lg text-base" for="amount">{{ $token ? $token->name : "" }}</label>
                                <input wire:model="amount" placeholder="0.00" value="" autofocus
                                class=" base:text-lg text-base placeholder-gray-400 bg-transparent w-full border-l-2 px-4 border-transparent focus:outline-none focus:border-blue_600 active:border-blue_600 "
                                type="number" name="amount" id="amount">
                            </div>
                            @error('amount')
                                <span class="error base:text-sm text-s text-failed ">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </form>

                <div class="bg-[#FFF1C6] text-[#987B31] text-center border border-[#987B31] px-[20px] py-[16px] mt-6 rounded-[15px] w-full base:text-sm text-s ">
                    <span class=" "><img src="{{ asset('svg/info.svg') }}" alt="" class="base:w-[18px] w-[13px] relative right-2 -top-[3px] inline"> You can only withdraw from your profits to create snowball plan.</span>
                </div>
            </x-slot>

            <x-slot name="footer">

                <x-button wire:click="confirmSnowball" class="" wire:loading.attr="disabled">
                    {{ __('Proceed') }}
                </x-button>

                <x-button type="secondary" wire:click="$set('compound', false)" class="mt-5" wire:loading.attr="disabled">
                    {{ __('Close') }}
                </x-button>

            </x-slot>
        </x-confirmation-modal>

        {{-- confirm snowball --}}
        <x-confirmation-modal wire:model='confirm'>

            <x-slot name="close">
                <span wire:click="$set('confirm', false)">
                    x
                </span>
            </x-slot>

            <x-slot name="title">
                Confirm Snowball
            </x-slot>

            <x-slot name="content">
                <div class="text-center base-text">
                    You are about to snowball your {{ $token ? $token->name : "" }} plan with <span class=" text-blue_600 font-medium">{{ $amount }} {{ $token ? $token->name : "" }}</span> from your profit back into your capital
                </div>
            </x-slot>

            <x-slot name="footer">

                <x-button wire:click="initializeSnowball" class="" wire:loading.attr="disabled">
                    {{ __('Activate Snowball') }}
                </x-button>

                <x-button type="cancel" wire:click="$set('confirm', false)" class="mt-5" wire:loading.attr="disabled">
                    {{ __('Cancel Snowball') }}
                </x-button>

            </x-slot>
        </x-confirmation-modal>

        {{-- success modal --}}
        <x-alert-modal wire:model='successful'>

            <x-slot name="close" >
                <img src="{{ asset('svg/close.svg') }}" alt="close" wire:click="$set('successful', false)" class="base:w-[6rem] w-[5rem]">
            </x-slot>
           
            <x-slot name="content">
                <img src="{{ asset('svg/filled-check.svg') }}" alt="tick" class="base:w-[4.5rem] w-[3.5rem]">
              <h3 class="base:my-6 my-3 font-bold font-['Poppins'] base:text-xl text:md tracking-tight"> Snowball successful! </h3>
              <p class="base-text"> Your snowball request has been successfully activated, and will reflect on your account shortly. Thank you for using our platform.</p>
            </x-slot>
    
        </x-alert-modal>
    </main>
    @endif

    @elseif($step === 1)
        <h2 class=" mb-8 font-extrabold base:text-xl sm:text-lg text-md text-black_800 flex w-full"> <a href="{{route('portfolio')}}" class="flex cursor-pointer text-black_400 mr-10 hover:text-black_800 hover:scale-105"> <img src="{{ asset('svg/right-arrow.svg') }}" alt="navigation" class="base:pl-10 pl-5 transform rotate-180"> Portfolio </a></h2>
            <div class="md:block flex flex-col justify-center items-center ">
                <div id="address" class="flex flex-col justify-center md:ml-[3rem] items-center base:w-[80%] box-shadow rounded-[20px] base:p-10 p-6 w-full">
                    <div class=" text-center w-full">
                        <p class=" text-failed base:text-base text-sm font-bold">Do not refresh this page</p>
                        <h3 class=" my-2 font-bold base:text-xxl text-lg">Top Up a plan</h3>
                        <div class=" mt-3 w-full m-auto">
                            <h5 class=" base-text text-black_800"> Kindly make a precise deposit of 
                                <span class="text-blue_600 font-medium">{{ formatNumber($amount, 2) }} {{ $token ? $token->name : ""}}</span>
                                to your BlockArb {{ $token ? $token->name : ""}} address provided below on the 
                                <span class="text-blue_600 font-medium">{{ $token->name == 'USDT' ? 'TRC20' : ($token->name == 'Bitcoin' ? 'Bitcoin' : 'Ethereum') }} </span> 
                                network. Your attentention to accuracy is appreciated. Thank you!
                            </h5>
                        </div>
                    </div>
        
                    {{-- copy address --}}
                    <div class=" flex justify-center items-center gap-8 mt-8 base:w-[90%] w-full">
                        <div class="rounded-[10px] border border-blue_600 px-9 py-4 w-full">
                            <h4 id="copy-target" class=" break-all font-medium leading-[30px] base:text-lg text-md text-black_900 ">{{ $address }}</h4>
                        </div>
                        <div data-clipboard-target="#copy-target"
                            class=" text-blue_600 text-sm font-medium flex-col gap-2 cursor-pointer flex justify-center items-center">
                            <svg width="21" height="21" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 20H0V3C0 2.20435 0.31607 1.44129 0.87868 0.87868C1.44129 0.31607 2.20435 0 3 0L17 0C17.7956 0 18.5587 0.31607 19.1213 0.87868C19.6839 1.44129 20 2.20435 20 3V20ZM2 18H18V3C18 2.73478 17.8946 2.48043 17.7071 2.29289C17.5196 2.10536 17.2652 2 17 2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V18ZM22 4.184V22H4V24H24V7C23.9974 6.38174 23.8039 5.77937 23.4459 5.2753C23.0879 4.77123 22.5829 4.39008 22 4.184Z" fill="currentColor"/>
                            </svg> 
                            <span class="base:text-base text-sm">Copy</span>                               
                        </div>
                    </div>
    
                    <div class="flex justify-center items-center gap-8 w-[80%] my-4 py-4">
                        <div class="border md:w-[35%] w-[60%]"></div> <span>or</span> <div class="border md:w-[35%] w-[60%]"></div>
                    </div>
    
                    <div class=" mt-0 flex flex-col justify-start items-center w-full">
                        <h5 class="text-center base-text">
                            Use your device's camera to scan the barcode to automatically input the address.
                        </h5>
                        
                        <div class=" flex justify-center items-center w-full">
                            <img class=" base:w-[15rem] w-[13rem] "
                                src="https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl={{ $address }}"
                                height="300" width="300" />
                        </div>
                    </div>
    
                    <div class="bg-[#FFF1C6] text-[#987B31] text-center border border-[#987B31] px-[24px] py-[18px] rounded-[20px] base:w-[90%] w-full ">
                        <span class=" base-text "><img src="{{ asset('svg/info.svg') }}" alt="" class="base:w-[18px] w-[15px] relative right-2 -top-[3px] inline">Once topup is confirmed, your account will be credited, and investment begins automatically.</span>
                    </div>
                </div>    
            </div>
        @endif
</div>
