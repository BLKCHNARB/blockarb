<div class="bg-white p-4 pt-8 lg:p-12 h-ful rounded-lg">

    <div class=" max-w-xl mx-auto">
        <div class=" text-center">
            <h4 class=" font-semibold text-2xl">OTC</h4>
            <div class=" mt-3">
                <h5 class=" text-base text-gray-500">Purchase Crypocurrency</h5>
                <p class=" text-gray-400 text-sm mt-2">Purchase available cryptocurrency directly from us</p>
            </div>
        </div>

        <div class=" mt-5">
            <div>
                <div class=" p-5">
                        <label for="token" class=" text-gray-500">Select Token</label>
                        <select wire:model="token"
                            class=" font-roboto pl- rounded-none text-sm text-gray-400 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                            name="token" id="token">
                            <option value="">Choose A Token</option>
                            <option value="bitcoin">Bitcoin</option>
                            <option value="ethereum">Ethereum</option>
                            <option value="usdt">USDT</option>
                        </select>
                        @error('token')
                            <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                        @enderror

                </div>

                <div class="p-5">
                    <label for="wallet" class=" text-gray-500">Wallet Address</label>
                    <input wire:model="wallet" placeholder="" value=""
                        class=" pl-0 text-sm text-gray-400 placeholder-gray-300 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                        type="text" name="wallet" id="wallet">
                    @error('wallet')
                        <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                    @enderror
                </div>

                <div class="p-5">
                    <label for="amount" class=" text-gray-500">Amount</label>
                    <input wire:model="amount" placeholder="0.00" value=""
                        class=" pl-0 text-sm text-gray-400 placeholder-gray-300 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                        type="number" name="amount" id="amount">
                    @error('amount')
                        <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class=" mt-3">
                <button wire:click="purchase" href=""
                    class=" bg-secondary text-gray-800 block rounded-sb py-2 text-center font-semibold w-full">Purchase</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script></script>
@endpush
