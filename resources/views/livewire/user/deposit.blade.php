<div class=" bg-white p-4 pt-8 lg:px-8 lg:py-3 h-full rounded-lg">

    <div class=" w-full mx-auto {{ $step === 1 ? 'flex flex-col justify-center items-center' : '' }}">
        @if ($step === 0)
        <div>
            <div class="text-black_800">
                <h2 class=" font-extrabold text-xl text-black_800 flex w-full"> <a href="{{route('invest')}}" class="flex cursor-pointer text-black_400 mr-10 hover:text-black_800 hover:scale-105">Deposit <img src="{{ asset('svg/right-arrow.svg') }}" alt="navigation" class="lg:pl-10"> </a> Deposit to plan</h2>
                <div class=" mt-3">
                    {{-- <h5 class=" text-base">Crypto Deposit</h5> --}}
                    <p class=" text-lg mt-10"> Choose a currency you want to make depoist to </p>
                </div>
            </div>

            <div class=" mt-5">
                <div>
                  {{-- Select tokens --}}
                        <div class="p-5">
                            <div class="flex flex-col gap-8">
                                @forelse ($tokens as $token)
                                    <label for="token_{{ $token->id }}" class="px-2 py-1 rounded cursor-pointer hover:scale-x-105 duration-300 transition-all" onclick="navigateToNextSection()">
                                        <input type="radio" id="token_{{ $token->id }}" wire:model="selectedToken" value="{{ $token->id }}" class="hidden">
                                        <div class="flex items-center w-full gap-6">
                                            <div class="">
                                                <img src="{{ $token->name === "USDT" ? asset('svg/usdt.svg') : ($token->name === "Bitcoin" ? asset('svg/btc.svg') : asset('svg/eth.svg')) }}" alt="coin logo" >
                                            </div>
                                            <div class="w-[70%]">
                                                <p class="font-semibold text-lg mb-1">{{ $token->name }}</p>
                                                <p>{{ $token->name === "USDT" ? "Deposit USDT from external wallets supported by TRC20 network" : ($token->name === "Bitcoin" ? "Deposit BTC from external wallets supported by Bitcoin network" : "Deposit ETH from external wallets supported by Ethereum network") }}</p>
                                            </div>
                                            <div class="">
                                                <img src="{{ asset('svg/coin-active.svg') }}" alt="" class="{{ $selectedToken == $token->id ? 'block' : 'hidden' }}">
                                                <img src="{{ asset('svg/radio.svg') }}" alt="" class="{{ $selectedToken == $token->id ? 'hidden' : 'block' }}">
                                            </div>
                                        </div>
                                    </label>
                                @empty
                                    <p>No tokens available</p>
                                @endforelse
                            </div>
                            @error('selectedToken')
                                <span class="error mt-2 text-sm text-red-500 font-roboto">{{ $message }}</span>
                            @enderror
                        </div>
                        
{{-- @dump($selectedPlan) --}}
                        {{-- Choosee a plan --}}
                        @if ($plans)
                        <div class="w-full " id="choose_plan" >
                            <p class=" text-lg mt-10"> Choose a plan </p>
                            <div class="mt-6 w-full flex gap-6" >
                                @forelse ($plans as $index => $plan)
                                    <label for="plan_{{ $index }}" class="w-[33%] cursor-pointer mt-3 hover:scale-y-105 rounded-[20px] border-2 transition-all {{ $selectedPlan == $plan->id ? 'border-blue_600' : 'border-transparent' }}" onclick="navigateToAmount()">
                                        <input type="radio" id="plan_{{ $index }}" wire:model="selectedPlan" value="{{ $plan->id }}" class="hidden" name="plan">
                                        <div class="p-6 pb-5 relative box-shadow rounded-[20px] bg-white text-neutral_800">
                                            <div class="absolute top-5 right-5 w-[1.5rem] ">
                                                <img src="{{ asset('svg/green_check.svg') }}" alt="" class="{{ $selectedPlan == $plan->id ? 'block' : 'hidden' }}">
                                                <img src="{{ asset('svg/unselected.svg') }}" alt="" class="{{ $selectedPlan == $plan->id ? 'hidden' : 'block' }}">
                                            </div>
                                            <div class="relative flex items-center mb-3">
                                                <img src="{{ $index === 0 ? asset('svg/retail.svg') : ($index === 1 ? asset('svg/business2.svg') : asset('svg/enterprise.svg')) }}" alt="icons" class="w-[3.8rem] mr-3">
                                                <h3 class="text-xl font-bold">{{ $plan->name }}</h3>
                                            </div>
                                            <div class="my-4">
                                                <h3 class="font-bold text-[1.9rem] tracking-tighter"> {{ $plan->pivot?->token_id === 1 ? '$' : '' }} {{ $plan->pivot?->token_id === 1 ? number_format($plan->pivot?->minimum) : number_format($plan->pivot?->minimum, 2) }} <span class="text-base">{{ $plan->pivot?->token_id === 1 ? '' : ( $plan->pivot?->token_id === 2 ? 'BTC' : 'ETH') }}</span> </h3>
                                                <small class="tracking-normal font-normal text-[#6F6C90] text-base relative -top-1"> / minimum capital</small>
                                                <p class="font-bold my-[10px]">What it offers</p>
                                                <div class="flex items-center flex-wrap">
                                                    <img class="w-5 mr-2" src="{{ asset('svg/filled-check.svg') }}" alt="check">
                                                    <span class="text-neutral_800">ROI: &nbsp</span>
                                                    <span class="flex text-success font-semibold">
                                                        <span class="mr-1">
                                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M18.2397 5.87183L11.5731 12.5385L8.23975 9.20516L3.23975 14.2052M11.5731 5.87183H18.2397H11.5731ZM18.2397 5.87183V12.5385V5.87183Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </span> 
                                                        {{ $plan->pivot?->percentage }}%
                                                    </span>
                                                </div>
                                                <div class="flex items-center mt-4 flex-wrap">
                                                    <img class="w-5 mr-2" src="{{ asset('svg/filled-check.svg') }}" alt="check">
                                                    <h4 class="text-neutral_800">Duration: &nbsp</h4>
                                                    <span class="font-semibold">{{ number_format($plan->pivot?->duration) }} days</span>
                                                </div>
                                                <div class="flex items-center mt-4 flex-wrap">
                                                    <img class="w-5 mr-2" src="{{ asset('svg/filled-check.svg') }}" alt="check">
                                                    <h4 class=" text-neutral_800">Performance fee: &nbsp</h4>
                                                    <span class="font-semibold">{{ $plan->pivot?->performance_fee }}%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                @empty
                                @endforelse
                            </div> 
                            @error('selectedPlan')
                            <span class="error mt-5 text-sm text-red-500 font-roboto">{{ $message }}</span>
                        @enderror
                        </div>
                        @endif

                        {{-- input amount --}}
                        @if ($selectedPlan)
                        <div class=" p-5 pt-16 " id="amount_area" >
                            <div class=" text-black_800 flex flex-col justify-center items-center" >
                                <label for="amount" class="text-lg text-center w-full">Please specify the precise amount you wish to deposit into your plan.</label>
                                <div class="flex input w-full rounded-md mt-4 border-2 border-gray_100 hover:border-blue_600">
                                    <label class="p-3" for="amount">{{ $plan->pivot?->token_id === 1 ? 'USDT' : ( $plan->pivot?->token_id === 2 ? 'BTC' : 'ETH') }}</label>
                                    <input wire:model="amount" placeholder="0.00" value="{{ $amount }}"
                                    class=" text-lg placeholder-gray-300 block bg-transparent w-full border-none focus:outline-none focus:border-none active:border-transparent border-l border-transparent "
                                    type="number" name="amount" id="amount">
                                </div>
                                @error('amount')
                                    <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                                @enderror
                            </div>  
    
                            {{-- Button --}}
                            <div class=" mt-6 w-full flex justify-center items-center">
                                <x-button wire:click="confirm" class="w-[50%] ">Continue to Deposit</x-button>
                            </div>
                        </div>
                        @endif   
                        
                        {{-- Confirm deposit options --}}
                        <div>
                            <x-confirmation-modal wire:model='confirm'>
                                <x-slot name="close" >
                                    <span wire:click="cancel">
                                        x
                                    </span>
                                </x-slot>
                        
                                <x-slot name="title">
                                    Confirm Your Deposit
                                </x-slot>
                        
                                <x-slot name="content">
                        
                                    <div class=" mt-3 text-center">
                                        <h5 class=" text-base text-gray-500">You are about to deposit <span class="text-blue_600 font-medium">{{ formatNumber($amount, 2) }}
                                            {{ $selectedToken == 1 ? 'USDT' : ($selectedToken == 2 ? 'Bitcoin' : 'Ethereum') }}</span> into your account.</h5>
                                        <p class=" text-neutral_800 font-medium text-[.9rem] mt-3">Please review the information below and confirm.</p>
                                    </div>
                        
                                    <ul class=" mt-8 divide-y border border-gray-300 rounded-sm bg-primary-50">
                                        <li>
                                            <div class="flex justify-between items-center p-4">
                                                <h5 class=" text-gray-500">Payment Method</h5>
                                                <div class=" flex items-center text-black_800 font-medium">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        aria-hidden="true" role="img" width="20" height="20"
                                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                                        <path fill="currentColor"
                                                            d="M16 6H3.5v-.5l11-.88v.88H16V4c0-1.1-.891-1.872-1.979-1.717L3.98 3.717C2.891 3.873 2 4.9 2 6v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2zm-1.5 7.006a1.5 1.5 0 1 1 .001-3.001a1.5 1.5 0 0 1-.001 3.001z" />
                                                    </svg>
                                                    <h5 class=" ml-2 ">Crypto Deposit</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex justify-between items-center p-4">
                                                <h5 class=" text-gray-500">Amount To Deposit</h5>
                                                <div class=" flex items-center text-black_800 font-medium">
                                                    <h5 class="">{{ formatNumber($amount, 2) }}
                                                        {{ $selectedToken == 1 ? 'USDT' : ($selectedToken == 2 ? 'Bitcoin' : 'Ethereum') }}</h5>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                    
                                    <ul class=" divide-y border border-gray-300 rounded-sm mt-2 bg-primary-50">
                                        <li>
                                            <div class="flex justify-between items-center p-4">
                                                <h5 class=" text-gray-500">You will send (Total)</h5>
                                                <div class=" flex items-center text-black_800 font-medium">
                                                    <h5 class="">{{ formatNumber($amount, 2) }}
                                                        {{ $selectedToken == 1 ? 'USDT' : ($selectedToken == 2 ? 'Bitcoin' : 'Ethereum') }}</h5>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </x-slot>
                        
                                <x-slot name="footer">
    
                                    <div class=" mt-0 w-full" wire:click="next">
                                        <x-button>{{ 'Generate Deposit Address' }}</x-button>
                                    </div>
                        
                                   <div class=" mt-5 w-full" wire:click="cancel">
                                        <x-button type='secondary'>{{ 'Update Order' }}</x-button>
                                   </div>
    
                                </x-slot>
                            </x-confirmation-modal>
                        </div>
                </div>
            </div>    
        </div>
        
        {{-- make payment --}}
        @elseif ($step === 1)
        <a href="{{route('deposit')}}" class="flex font-xl cursor-pointer text-black_400 mr-10 hover:text-black_800 hover:scale-105 "> <img src="{{ asset('svg/right-arrow.svg') }}" alt="navigation" class="lg:pr-10 transform rotate-45 "> Back to plans </a>
            <div class="flex flex-col justify-center items-center md:w-[80%] box-shadow rounded-[20px] p-10 w-full">
                <div class=" text-center w-full">
                    <h5 class=" text-failed font-bold">Do not refresh this page</h5>
                    <h2 class=" mt-2 font-extrabold text-lg">Deposit to a plan</h2>
                    <div class=" mt-3 w-full m-auto">
                        <h5 class=" text-base text-black_800"> Kindly make a precise deposit of 
                            <span class="text-blue_600 font-medium">{{ formatNumber($amount, 2) }} {{ $selectedToken == 1 ? 'USDT' : ($selectedToken == 2 ? 'Bitcoin' : 'Ethereum') }}</span>
                            to the provided address on the 
                            <span class="text-blue_600 font-medium">{{ $selectedToken == 1 ? 'TRC20' : ($selectedToken == 2 ? 'Bitcoin' : 'Ethereum') }} </span> network. Your attentention to accuracy is appreciated. Thank you!</h5>
                    </div>
                </div>
    
                {{-- copy address --}}
                <div class=" flex justify-center items-center gap-8 mt-8 w-full">
                    <div class="rounded-[10px] border border-blue_600 px-8 py-4 w-full text-lg ">
                        <h4 id="copy-target" class=" overflow break-all font-bold text-black_900 text-center ">{{ $address }}</h4>
                    </div>
                    <div data-clipboard-target="#copy-target"
                        class="btn-clip text-blue_600 text-sm font-medium flex-col gap-2 cursor-pointer w-full lg:w-auto flex justify-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 20H0V3C0 2.20435 0.31607 1.44129 0.87868 0.87868C1.44129 0.31607 2.20435 0 3 0L17 0C17.7956 0 18.5587 0.31607 19.1213 0.87868C19.6839 1.44129 20 2.20435 20 3V20ZM2 18H18V3C18 2.73478 17.8946 2.48043 17.7071 2.29289C17.5196 2.10536 17.2652 2 17 2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V18ZM22 4.184V22H4V24H24V7C23.9974 6.38174 23.8039 5.77937 23.4459 5.2753C23.0879 4.77123 22.5829 4.39008 22 4.184Z" fill="currentColor"/>
                        </svg> 
                        <span>Copy</span>                               
                    </div>
                </div>

                <div class="flex justify-center items-center gap-8 w-[80%] my-4 py-4">
                    <div class="border w-[35%]"></div> <span>or</span> <div class="border w-[35%]"></div>
                </div>

                <div class=" mt-0 flex flex-col justify-start items-center w-full">
                    <h5 class="">
                        Use your device's camera to scan the barcode to automatically input the address.
                    </h5>
                    
                    <div class=" mx-auto w-[20rem]">
                        <img class=" w-[15rem] mx-auto  "
                            src="https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl={{ $address }}"
                            height="300" width="300" />
                    </div>
                </div>

                <div class="bg-[#FFF1C6] text-[#987B31] text-center border border-[#987B31] p-[24px] rounded-[20px] w-[90%] ">
                    <span class=" "><img src="{{ asset('svg/info.svg') }}" alt="" class="w-[18px] relative right-2 -top-1 inline">Once payment is received, your account will be credited, and the investment begins automatically.</span>
                </div>
            </div>
        
        @endif
        <div class="text-center w-full relative top-4 bottom-5">
            <span class="text-black_600">Need any help? <a href="#contact" class="text-blue_300"> Let us know</a></span>
        </div> 
    </div>
</div>

@push('scripts')
    <script>
        function navigateToNextSection() {
           setTimeout(() => {
            window.location.href = '#choose_plan';
           }, 750); 
        }

        function navigateToAmount() {
           setTimeout(() => {
            window.location.href = '#amount_area';
           }, 750); 
        }
    </script>

    <script wire:poll>
        document.addEventListener('DOMContentLoaded', function() {

            function toggleModal() {
                document.getElementById('modalconfirm').classList.remove("hidden")
                document.getElementById('modalconfirm').classList.add("fixed")
            }

            function toggleIncompleteModal() {
                document.getElementById('modalincomplete').classList.remove("hidden")
                document.getElementById('modalincomplete').classList.add("fixed")
            }

            // let myRedirectInterval = setInterval(() => {
            //     window.location.href = '/user';
            // }, 300000);

            let address = {!! json_encode($address) !!}
            console.log(address)
            // setInterval(() => {

            //     $.ajax({
            //         url: "{{ route('user.updatepaymentstatus') }}",
            //         type: "POST",
            //         dataType: 'json',
            //         data: {
            //             code: code
            //         },
            //         success: function(data) {
            //             let res = JSON.parse(JSON.stringify(data));
            //             if (res.status == -2) {
            //                 $(".pmtstatus").text("Payment Expired")
            //             } else if (res.status == -1) {
            //                 $(".pmtstatus").text("Waiting for payment")
            //                 toggleModal()
            //                 clearInterval(myRedirectInterval)
            //             } else if (res.status == 0) {
            //                 $(".pmtstatus").text("Unpaid")

            //             } else if (res.status == 1) {
            //                 $(".pmtstatus").text("Processing Payment...")
            //                 clearInterval(myRedirectInterval)
            //                 toggleModal()
            //             } else if (res.status == 2) {
            //                 $(".pmtstatus").text("Payment Successful")
            //                 clearInterval(myRedirectInterval)
            //                 toggleModal()
            //             } else if (res.status == 10) {
            //                 $(".pmtstatus").text("Incomplete Payment received")
            //                 clearInterval(myRedirectInterval)
            //                 toggleIncompleteModal()
            //             }



            //         }
            //     })

            // }, 3000);

        })
    </script>
@endpush
