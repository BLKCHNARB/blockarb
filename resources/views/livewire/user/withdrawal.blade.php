<div class="bg-white p-4 pt-8 lg:p-12 h-ful rounded-lg">

    <div class=" max-w-xl mx-auto">
        <div class=" text-center">
            <h4 class=" font-semibold text-2xl">Withdraw Funds</h4>
            <div class=" mt-3">
                {{-- <h5 class=" text-base text-gray-500">Crypto Deposit</h5> --}}
                <p class=" text-gray-400 text-sm mt-2"> Withdraw your profits here</p>
            </div>
        </div>

        <div class=" mt-5">
            <div class="flex items-start">
                <div class="p-5 basis-1/2">
                    <label for="token" class=" text-gray-500">Select Token</label>
                    <select wire:model="selectedToken"
                        class=" font-roboto pl- rounded-none text-sm text-gray-400 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                        name="token" id="token">
                        <option value="">Choose A Token</option>
                        @forelse ($tokens as $token)
                            <option value="{{ $token->id }}">{{ $token->name }}</option>
                        @empty
                        @endforelse
                        {{-- <option value="usdt">USDT</option>
                            <option value="btc">BTC</option>
                            <option value="eth">ETH</option> --}}
                    </select>
                    @error('selectedToken')
                        <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                    @enderror
                </div>
                <div class="p-5 basis-1/2">
                    <label for="purse" class=" text-gray-500">Select Purse</label>
                    <select wire:model="selectedPurse"
                        class=" font-roboto pl- rounded-none text-sm text-gray-400 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                        name="purse" id="purse">
                        <option value="">Choose A Purse</option>
                        <option value="profit">Profit</option>
                        <option value="capital">Capital</option>
                    </select>
                    @error('selectedPurse')
                        <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="p-5 basis-1/2">
                <label for="amount" class=" text-gray-500">Amount</label>
                <input wire:model="amount" placeholder="0.00" value=""
                    class=" pl-0 text-sm text-gray-400 placeholder-gray-300 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                    type="number" name="amount" id="amount">
                @error('amount')
                    <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                @enderror
                {{-- <h5 class=" text-sm text-gray-400"> Minimum: {{$min}} </h5> --}}
            </div>

            {{-- {{$token}} --}}
            <div class=" mt-3">
                <button wire:click="withdraw" href=""
                    class=" bg-secondary text-gray-800 block rounded-sb py-2 text-center font-semibold w-full">Withdraw</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script></script>
@endpush
