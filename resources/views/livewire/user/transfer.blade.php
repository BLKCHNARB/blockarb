<main class=" bg-white p-4 text-black_800 pt-8 lg:px-8 lg:py-3 h-full">

    <div class=" w-full mx-auto">
        <div class="text-black_800">
            <h2 class=" font-extrabold base:text-lg text-[1.25rem] text-black_800 flex w-full"> Transfer to Friend</h2>
            <div class=" mt-3">
                <p class=" text-lg mt-8"> Select a token </p>
            </div>
        </div>

        <div class=" base:mt-5 mt-3">
            {{-- transfer --}}
            <div class="base:p-5 p-2">
                <div class="flex flex-col base:gap-8 gap-4">
                    @forelse ($investments as $token)
                        <label for="token_{{ $token->token_id }}" class="px-2 py-1 rounded cursor-pointer hover:scale-x-105 duration-300 transition-all" onclick="navigateToNextSection()">
                            <input type="radio" id="token_{{ $token->token_id }}" wire:model="selectedTransferToken" value="{{ $token->token_id }}" class="hidden">
                            <div class="flex items-center w-full gap-6">
                                <div class="">
                                    <img src="{{ $token->token_id === 1 ? asset('svg/usdt.svg') : ($token->token_id === 2 ? asset('svg/btc.svg') : asset('svg/eth.svg')) }}" alt="coin logo" class='base:w-[3rem] w-[2.2rem]' >
                                </div>
                                <div class="base:w-[70%] w-[80%]">
                                    <p class="font-semibold text-lg mb-1">{{ $token->token_id === 1 ? "USDT" : ($token->token_id === 2 ? "Bitcoin" : "Ethereum") }}</p>
                                    <p>{{ $token->token_id === 1 ? "Withdraw from your USDT capital or profit to your external wallet" : ($token->token_id === 2 ? "Withdraw from your BTC capital or profit to your external wallet" : "Withdraw from your ETH capital or profit to your external wallet") }}</p>
                                </div>
                                <div class="base:w-[1.5rem] w-[1.3rem]">
                                    <img src="{{ asset('svg/coin-active.svg') }}" alt="" class="{{ $selectedTransferToken == $token->token_id ? 'block' : 'hidden' }}">
                                    <img src="{{ asset('svg/radio.svg') }}" alt="" class="{{ $selectedTransferToken == $token->token_id ? 'hidden' : 'block' }}">
                                </div>
                            </div>
                        </label>
                    @empty
                        <p>No tokens available</p>
                    @endforelse
                </div>
                @error('selectedTransferToken')
                    <span class="error base:text-sm text-s text-failed ">{{ $message }}</span>
                @enderror
            </div>

            {{-- select purse section --}}
            @if ($selectedTransferToken)
            <div class="" id="choose_purse">
                <p class=" base:text-lg text-md base:pt-5 pt-2 mt-5 mb-5">  Please specify whether you'd like to withdraw from your Profit or Capital </p>
                    <div class=" w-full flex base:flex-nowrap flex-wrap md:gap-10 base:gap-6 gap-3 justify-center">
                        @if ($selectedInvestment)
                        
                        <label for="capital" class=" md:w-[45%] sm:w-[48%] w-[90%] cursor-pointer mt-3 hover:scale-105 rounded-[20px] border-2 transition-all {{ $selectedPurse == 'capital' ? 'border-blue_600' : 'border-gray-100' }}" onclick="navigateToAmount()">
                            <input type="radio" id="capital" wire:model="selectedPurse" value="capital" class="hidden" name="purse">
                            <div class="base:p-5 p-4 relative rounded-[20px] bg-white text-neutral_800">
                                <div class="absolute base:top-5 top-3 base:right-5 right-3 base:w-[1.4rem] w-[1.3rem] ">
                                    <img src="{{ asset('svg/green_check.svg') }}" alt="" class="{{ $selectedPurse == 'capital'  ? 'block' : 'hidden' }}">
                                    <img src="{{ asset('svg/unselected.svg') }}" alt="" class="{{ $selectedPurse == '' || $selectedPurse == 'profit' ? 'block' : 'hidden' }}">
                                </div>
                                <div class="relative flex items-center mt-3 mb-3">
                                    <img src="{{ $selectedInvestment->plan_id === 1 ? asset('svg/retail.svg') : ( $selectedInvestment->plan_id === 1 ? asset('svg/business2.svg') : asset('svg/enterprise.svg')) }}" alt="icons" class="base:w-[3rem] w-[2.5rem] mr-3">
                                    <h3 class="base:text-[1.4rem] text-[1.2rem] text-black_800 font-medium">{{ $selectedInvestment->plan_id === 1 ? "Retail" : ( $selectedInvestment->plan_id === 1 ? "Business" : "Enterprise") }} plan</h3>
                                </div>
                                <div class="mt-6 base:p-4 p-3 rounded-[10px] box-shadow">
                                    <h3 class="tracking-normal font-bold text-neutral_800 base:text-xl text-md mb-2"> Total capital balance</h3>
                                    <p class="font-medium base:text-xxl text-[1.7rem]"> {{ $selectedInvestment->token_id === 1 ? number_format($selectedInvestment->amount, 2) : number_format($selectedInvestment->amount, 2) }} <span class="base-text">{{ $selectedInvestment->token_id === 1 ? 'USDT' : ( $selectedInvestment->token_id === 2 ? 'BTC' : 'ETH') }}</span> </p>
                                    <div class="flex items-center mt-3 w-full justify-end flex-wrap text-black_400">
                                        <h4 class="base-text">Performance fee: &nbsp</h4>
                                        <span class="font-semibold base-text">0%</span>
                                    </div>
                                </div>
                            </div>
                        </label>

                        <label for="profit" class="md:w-[45%] sm:w-[48%] w-[90%] cursor-pointer mt-3 hover:scale-105 rounded-[20px] border-2 transition-all {{ $selectedPurse == 'profit' ? 'border-blue_600' : 'border-gray-100' }}" onclick="navigateToAmount()">
                            <input type="radio" id="profit" wire:model="selectedPurse" value="profit" class="hidden" name="purse">
                            <div class="base:p-5 p-4 relative rounded-[20px] bg-white text-neutral_800">
                                <div class="absolute base:top-5 top-3 base:right-5 right-3 base:w-[1.4rem] w-[1.3rem] ">
                                    <img src="{{ asset('svg/green_check.svg') }}" alt="" class="{{ $selectedPurse == 'profit'  ? 'block' : 'hidden' }}">
                                    <img src="{{ asset('svg/unselected.svg') }}" alt="" class="{{ $selectedPurse == '' || $selectedPurse == 'capital' ? 'block' : 'hidden' }}">
                                </div>
                                <div class="relative flex items-center mt-3 mb-3">
                                    <img src="{{ $selectedInvestment->plan_id === 1 ? asset('svg/retail.svg') : ( $selectedInvestment->plan_id === 1 ? asset('svg/business2.svg') : asset('svg/enterprise.svg')) }}" alt="icons" class="base:w-[3rem] w-[2.5rem] mr-3">
                                    <h3 class="base:text-[1.4rem] text-[1.2rem] text-black_800 font-medium">{{ $selectedInvestment->plan_id === 1 ? "Retail" : ( $selectedInvestment->plan_id === 1 ? "Business" : "Enterprise") }} plan</h3>
                                </div>
                                <div class="mt-6 base:p-4 p-3 rounded-[10px] box-shadow">
                                    <h3 class="tracking-normal font-bold text-neutral_800 base:text-xl text-md mb-2"> Total profit balance</h3>
                                    <p class="font-medium base:text-xxl text-[1.7rem]"> {{ $selectedInvestment->token_id === 1 ? number_format($selectedInvestment->profit, 2) : number_format($selectedInvestment->profit, 2) }} <span class="base-text">{{ $selectedInvestment->token_id === 1 ? 'USDT' : ( $selectedInvestment->token_id === 2 ? 'BTC' : 'ETH') }}</span> </p>
                                    <div class="flex items-center mt-3 w-full justify-end flex-wrap text-black_400">
                                        <h4 class="base-text ">Performance fee: &nbsp</h4>
                                        <span class="font-semibold base-text">{{ $selectedInvestment->performance_fee }}%</span>
                                    </div>
                                </div>
                            </div>
                        </label>
                        @else
                            <p class=" text-failed base:text-sm text-s text-center" >Oops, we must have encountered error while trying to retrive your details, please try again</p>
                        @endif
                    </div>
                    @error('selectedPurse')
                        <span class="error base:text-sm text-s text-failed ">{{ $message }}</span>
                    @enderror
            </div>
            @endif

                @if ($selectedPurse)
                
                <div class=" base:pt-16 pt-10 " id="amount_area" >
                    <div class=" text-black_800 flex flex-col justify-center items-center" >
                        <label for="selectedTransferAmount" class="base:text-lg text:md w-full text-center">Specify the precise amount you wish to transfer to friend.</label>
                        <div class="flex input w-[90%] rounded-[15px] mt-4 border-2 border-gray_100 hover:border-blue_600">
                            <label class="py-3 px-4 font-medium base:text-lg text:md" for="selectedTransferAmount">{{ $selectedInvestment->token_id === 1 ? 'USDT' : ( $selectedInvestment->token_id === 2 ? 'BTC' : 'ETH') }}</label>
                            <input wire:model="selectedTransferAmount" placeholder="0.00" value="" autofocus
                            class=" base:text-lg text:md placeholder-gray-400 bg-transparent w-full border-l-2 px-4 border-transparent focus:outline-none focus:border-blue_600 active:border-blue_600 "
                            type="number" name="selectedTransferAmount" id="selectedTransferAmount">
                        </div>
                        @error('selectedTransferAmount')
                            <span class="error base:text-sm text-s mt-1 text-failed ">{{ $message }}</span>
                        @enderror
                    </div> 
                </div>    

                <div class="w-full flex justify-end base:p-3 p-2">
                    <small  class=" base:text-sm text-s text-black_400 font-medium " >Performance Fee: &nbsp<span class=" font-semibold text-blue_300 base-text"> {{ $selectedPurse == 'capital' ? 0 : ($selectedInvestment->performance_fee / 100) * $selectedTransferAmount }} </span> <span class=" text-base text-black_200">{{ $selectedInvestment->token_id === 1 ? 'USDT' : ( $selectedInvestment->token_id === 2 ? 'BTC' : 'ETH') }}</span> </small>
                </div>

                <div class="flex w-full justify-center">
                    <div class="bg-[#FFF1C6] text-[#987B31] text-center border border-[#987B31] px-[28px] py-[20px] base:my-8 my-5 rounded-[20px] base:w-[90%] w-full ">
                        <span class=" base-text "><img src="{{ asset('svg/info.svg') }}" alt="" class="base:w-[18px] w-[14px] relative right-2 -top-[3px] inline">Performance fees apply only to profits upon withdrawing to an address, with no impact on the capital.</span>
                    </div>
                </div>

                {{-- Email --}}
                <div class=" pt-4 " >
                    <div class=" text-black_800 flex flex-col justify-center items-center" >
                        <label for="email" class="base:text-lg text:md w-full text-center">Provide the recipient's email address.</label>
                        <div class="flex w-[90%] rounded-[15px] px-5 mt-4 border-2 border-gray_100 hover:border-blue_600">
                            <input wire:model="email" placeholder="Recipient's email" value="" autofocus
                            class=" base:text-lg text:md py-3 placeholder-gray-400 block bg-transparent w-full border-none focus:outline-none focus:border-none active:border-none "
                            type="email" name="email" id="email">
                        </div>
                        @error('email')
                            <span class="error base:text-sm text-s mt-1 text-failed ">{{ $message }}</span>
                        @enderror
                    </div> 
                </div>  
                
                {{-- button --}}
                <div class=" mt-10 w-full flex justify-center items-center">
                    <x-button wire:click="confirmTransfer" class="w-[50%]">Transfer</x-button>
                </div>
                @endif
        
        </div>
             
            {{-- failed modal --}}
            <x-alert-modal wire:model='fail'>

                <x-slot name="close" >
                    <img src="{{ asset('svg/close.svg') }}" alt="close" wire:click="$set('fail', false)" class="base:w-[6rem] w-[5rem]">
                </x-slot>
               
                <x-slot name="content">
                    <img src="{{ asset('svg/wrong.svg') }}" alt="wrong" class="base:w-[4.5rem] w-[3.5rem]">
                  <h3 class="base:my-6 my-3 font-bold font-['Poppins'] base:text-xl text-md"> Oops! </h3>
                  <p class="base-text" > {{ $failure_message }}</p>
                </x-slot>
        
            </x-alert-modal>

            {{-- confirmation transfer modal --}}
            <x-confirmation-modal wire:model='confirm'>

                <x-slot name="close">
                    <span wire:click="$set('confirm', false)">
                        x
                    </span>
                </x-slot>
    
                <x-slot name="title">
                    Confirm Transfer
                </x-slot>
    
                <x-slot name="content">
                    <div class="text-center md:text-lg text-base">
                        You are about to transfer <span class=" text-blue_600 font-medium">{{ $selectedTransferAmount }} {{ $selectedInvestment?->token_id === 1 ? 'USDT' : ( $selectedInvestment?->token_id === 2 ? 'BTC' : 'ETH') }}</span>  from your {{$selectedPurse}} to <span class="text-blue_600 font-medium">{{ $receiver?->first_name }} {{ $receiver?->last_name }}</span> with the email address: <span class="text-blue_600 font-medium">{{ $receiver?->email }}.</span> 
                    </div>
                </x-slot>
    
                <x-slot name="footer">
    
                    <x-button wire:click="transfer" class="" wire:loading.attr="disabled">
                        {{ __('Confirm Transfer') }}
                    </x-button>
    
                    <x-button type="cancel" wire:click="$set('confirm', false)" class="mt-5" wire:loading.attr="disabled">
                        {{ __('Cancel Transfer') }}
                    </x-button>
    
                </x-slot>
            </x-confirmation-modal>

            {{-- success modal --}}
            <x-alert-modal wire:model='successful'>

                <x-slot name="close" >
                    <img src="{{ asset('svg/close.svg') }}" alt="tick" wire:click="$set('successful', false)" class="base:w-[6rem] w-[5rem]">
                </x-slot>
            
                <x-slot name="content">
                    <img src="{{ asset('svg/filled-check.svg') }}" alt="tick" class="base:w-[4.5rem] w-[3.5rem]">
                <h3 class="base:my-6 my-3 font-bold font-['Poppins'] base:text-xl text-md"> Transfer Successful! </h3>
                    <p class="base-text" > Your funds transfer has been processed and are on their way to <span class="text-blue_600 font-medium">{{ $receiver?->first_name }} {{ $receiver?->last_name }}</span>. Thank you for using our platform.</p>
                </x-slot>
        
            </x-alert-modal>
        
    </div>
</main>

@push('scripts')
    <script>
        function navigateToNextSection() {
           setTimeout(() => {
            window.location.href = '#choose_purse';
           }, 750); 
        }

        function navigateToAmount() {
           setTimeout(() => {
            window.location.href = '#amount_area';
           }, 750); 
        }
        
        function navigateToEmail() {
           setTimeout(() => {
            window.location.href = '#email_area';
           }, 750); 
        }
    </script>
@endpush
