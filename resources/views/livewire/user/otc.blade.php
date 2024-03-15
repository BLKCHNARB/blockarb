<div class="bg-white p-5 md:px-2 md:py-1 lg:px-5 lg:py-3 h-full">

    <div>
        <div class="text-black_800">
            <h2 class=" font-extrabold base:text-xl sm:text-lg text-md text-black_800 flex w-full"> <a href="{{route('invest')}}" class="flex cursor-pointer text-black_400 base:mr-10 mr-5 hover:text-black_800 hover:scale-105">Deposit <img src="{{ asset('svg/right-arrow.svg') }}" alt="navigation" class="base:pl-10 pl-5"> </a> Deposit to plan (OTC)</h2>
            <div class=" mt-3">
                <h3 class=" base:text-lg text-md base:mt-5 mt-3 font-medium text-gray-500">Purchase cryptocurrency to deposit using your local currency</h3>
                <p class=" base:text-lg text-md base:mt-10 mt-7"> Choose a currency you want to make depoist to </p>
            </div>
        </div>

        <div class=" base:mt-5 mt-2">
            <div>
                <div class="base:p-5 p-2">
                    <div class="flex flex-col base:gap-8 gap-4">
                        @forelse ($tokens as $token)
                            <label for="token_{{ $token->id }}" class="px-2 py-1 rounded cursor-pointer hover:scale-x-105 duration-300 transition-all" onclick="navigateToNextSection()">
                                <input type="radio" id="token_{{ $token->id }}" wire:model="selectedToken" value="{{ $token->id }}" class="hidden">
                                <div class="flex items-center w-full base:gap-6 gap-4">
                                    <div class="">
                                        <img src="{{ $token->name === "USDT" ? asset('svg/usdt.svg') : ($token->name === "Bitcoin" ? asset('svg/btc.svg') : asset('svg/eth.svg')) }}" alt="coin logo" class='base:w-[3rem] w-[2.2rem]' >
                                    </div>
                                    <div class="base:w-[70%] w-[80%]">
                                        <p class="font-semibold base:text-lg text-md mb-1">{{ $token->name }}</p>
                                        <p class="base:text-base text-sm">{{ $token->name === "USDT" ? "Deposit USDT from external wallets supported by TRC20 network" : ($token->name === "Bitcoin" ? "Deposit BTC from external wallets supported by Bitcoin network" : "Deposit ETH from external wallets supported by Ethereum network") }}</p>
                                    </div>
                                    <div class="base:w-[1.5rem] w-[1.3rem]">
                                        <img src="{{ asset('svg/coin-active.svg') }}" alt="" class="{{ $selectedToken == $token->id ? 'block' : 'hidden' }}" >
                                        <img src="{{ asset('svg/radio.svg') }}" alt="" class="{{ $selectedToken == $token->id ? 'hidden' : 'block' }}" >
                                    </div>
                                </div>
                            </label>
                        @empty
                            <p>No tokens available</p>
                        @endforelse
                    </div>
                    @error('selectedToken')
                        <span class="error mt-2 base:text-sm text-s text-failed ">{{ $message }}</span>
                    @enderror
                </div>

                @if ($selectedToken)
                        <div class=" pt-16 " id="amount_area" >
                            <div class=" text-black_800 flex flex-col justify-center items-center" >
                                <label for="amount" class="base:text-lg text-md text-center w-full">Please specify the precise amount you wish to deposit into your plan.</label>
                                <div class="flex input w-full rounded-[15px] mt-4 border-2 border-gray_100 hover:border-blue_600">
                                    <label class="py-3 px-4 font-medium base:text-lg text-md" for="amount">{{ $plan->token_id === 1 ? 'USDT' : ( $plan->token_id === 2 ? 'BTC' : 'ETH') }}</label>
                                    <input wire:model="amount" placeholder="0.00" value="{{ $amount }}" autofocus
                                    class=" base:text-lg text-md placeholder-gray-400 bg-transparent w-full border-l-2 px-4 border-transparent focus:outline-none focus:border-blue_600 active:border-blue_600  "
                                    type="number" name="amount" id="amount">
                                </div>
                                @error('amount')
                                    <span class="error text-sm text-failed ">{{ $message }}</span>
                                @enderror
                            </div>  
    
                            {{-- Button --}}
                            <div class=" mt-6 w-full flex justify-center items-center">
                                <x-button wire:click="purchase" class="w-[50%] ">Continue to Deposit</x-button>
                            </div>
                        </div>
                        @endif
            </div>

            {{-- success modal --}}
        <x-alert-modal wire:model='successful'>

            <x-slot name="close" >
                <img src="{{ asset('svg/close.svg') }}" alt="close" wire:click="$set('successful', false)" class="base:w-[6rem] w-[5rem]">
            </x-slot>
           
            <x-slot name="content">
                <img src="{{ asset('svg/filled-check.svg') }}" alt="tick" class="base:w-[4.5rem] w-[3.5rem]">
              <h3 class="base:my-6 my-3 font-bold font-['Poppins'] base:text-xl text-md tracking-tight"> Deposit placed successfully! </h3>
              <p class="base-text"> You will recieve an email with further instructions. Thank you for using our platform.</p>
            </x-slot>
    
        </x-alert-modal>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function navigateToNextSection() {
           setTimeout(() => {
            window.location.href = '#amount';
           }, 750); 
        }
    </script>
@endpush
