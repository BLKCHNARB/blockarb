<div class=" bg-white p-4 pt-8 lg:p-12 h-full rounded-lg">

    <div class=" max-w-xl mx-auto">
        <div class=" text-center">
            <h4 class=" font-semibold text-2xl">Transfer Funds</h4>
            <div class=" mt-3">
                <h5 class=" text-base text-gray-500">Compound & Transfer</h5>
                <p class=" text-gray-400 text-sm mt-2"> Compound your investments & transfer to friends and family</p>
            </div>
        </div>

        <div class=" mt-5" x-data="{ openTab: 1 }">
            <ul class=" flex items-center space-x- pb-3 border-b border-gray-300" role="tablist">
                <li @click="openTab = 1" class=" font-bold cursor-pointer p-2 px-4"
                    :class=" openTab === 1 ? 'bg-secondary-400 rounded-md' : ''">
                    <a href="#compound">Compound</a>
                </li>
                <li @click="openTab = 2" class=" font-bold cursor-pointer p-2 px-4"
                    :class=" openTab === 2 ? 'bg-secondary rounded-md' : ''">
                    <a href="#transfer">Transfer</a>
                </li>
            </ul>

            <div class=" mt-10">
                <div class="" x-show="openTab === 1"
                    x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                    x-transition:enter-start="transform translate-y-2 opacity-0"
                    x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                        x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                    <div class="transition duration-700 ease-out">

                        <div>
                            <div class="flex items-start">
                                <div class="p-5 basis-1/2">
                                    <label for="token" class=" text-gray-500">Select Token</label>
                                    <select wire:model="selectedToken"
                                        class=" font-roboto pl- rounded-none text-sm text-gray-400 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                                        name="token" id="token">
                                        <option value="">Choose A Token</option>
                                        @forelse ($investments as $investment)
                                            <option value="{{ $investment->token->id }}">{{ $investment->token->name }}
                                            </option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @error('selectedToken')
                                        <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="p-5 basis-1/2">
                                    <label for="amount" class=" text-gray-500">Amount</label>
                                    <input wire:model="amount" placeholder="0.00" value=""
                                        class=" pl-0 text-sm text-gray-400 placeholder-gray-300 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                                        type="number" name="amount" id="amount">
                                    @error('amount')
                                        <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class=" mt-3">
                            <button wire:click="compound" href=""
                                class=" bg-secondary text-gray-800 block rounded-sb py-2 text-center font-semibold w-full">Compound</button>
                        </div>

                    </div>
                </div>
                <div class="" x-show="openTab === 2"
                    x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                    x-transition:enter-start="transform translate-y-2 opacity-0"
                    x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                        x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                    <div class="transition duration-700 ease-out">
                        <div>
                            <div class="flex items-start">
                                <div class="p-5 basis-1/2">
                                    <label for="token" class=" text-gray-500">Select Token</label>
                                    <select wire:model="selectedTransferToken"
                                        class=" font-roboto pl- rounded-none text-sm text-gray-400 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                                        name="token" id="token">
                                        <option value="">Choose A Token</option>
                                        @forelse ($investments as $investment)
                                            <option value="{{ $investment->token->id }}">{{ $investment->token->name }}
                                            </option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @error('selectedTransferToken')
                                        <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="p-5 basis-1/2">
                                    <label for="selectedTransferAmount" class=" text-gray-500">Amount</label>
                                    <input wire:model="selectedTransferAmount" placeholder="0.00" value=""
                                        class=" pl-0 text-sm text-gray-400 placeholder-gray-300 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                                        type="number" name="selectedTransferAmount" id="selectedTransferAmount">
                                    @error('selectedTransferAmount')
                                        <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-5 p-5">
                                <label for="email" class=" text-gray-500">Receiver Email</label>
                                <input wire:model="email" placeholder="@" value=""
                                    class=" pl-0 text-sm text-gray-400 placeholder-gray-300 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                                    type="email" name="email" id="email">
                                @error('email')
                                    <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class=" mt-3">
                            <button wire:click="transfer" href=""
                                class=" bg-secondary text-gray-800 block rounded-sb py-2 text-center font-semibold w-full">Transfer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script></script>
@endpush
