<div class="bg-white p-4 pt-8 lg:p-12 h-ful rounded-lg">

    <div class=" mb-10 flex justify-between items-center">
        <h3 class=" text-xl font-semibold"> Active Investments</h3>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full">
            <thead>
                <tr>
                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        S/N</th>
                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Package</th>
                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Capital</th>

                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        ROI</th>
                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Investment Date</th>
                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                    </th>

                    {{-- <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Elapses</th> --}}

                    {{-- <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Days Spent</th>

                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Status</th> --}}
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-darker ">

                @forelse ($investments as $investment)
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="text-sm leading-5 ">{{ $loop->iteration }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                            {{ $investment->plan->name }} ({{ $investment->token->name }})</td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                            {{ number_format($investment->amount, 2) }}
                            {{ $investment->token->name }}</td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                            {{ $investment->percentage }}%</td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                            {{ $investment->updated_at?->format('Y-m-d') }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                            <button wire:click="topup({{ $investment->id }})" type="button"
                                class=" text text-green-600">top up</button>
                        </td>
                        {{-- <td class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                            27</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                <span class="relative text-xs">Active</span>
                            </span>
                        </td> --}}
                    </tr>

                @empty

                    <tr class="text-center py-5 mx-auto">
                        <td align="center" colspan="5">
                            <div class="text-center py-5 mx-auto">
                                <h5 class=" text-x">You have no active Investment</h5>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <x-confirmation-modal wire:model='topup'>

            <x-slot name="close">
                <span wire:click="cancel">
                    x
                </span>
            </x-slot>

            <x-slot name="title">
                Top Up - {{ $token ? $token->name : ""}}
            </x-slot>

            <x-slot name="content">
                <form action="" wire:submit.prevent=createPlan>
                    <div class="">
                        <div class="mt-5 ">
                            <label class=" block" for="amount">Amount</label>
                            <input placeholder="Enter Top Up Amount" value="{{ $amount }}" wire:model="amount"
                                class=" pl-0 text-sm text-gray-400 placeholder-gray-300 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                                type="text" id="amount" />
                            @error('amount')
                                <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </form>
            </x-slot>

            <x-slot name="footer">
                <x-button wire:click="$set('topup', false)" class="ml-2" wire:loading.attr="disabled">
                    {{ __('Close') }}
                </x-button>

                <x-button wire:click="confirm" class="ml-2" wire:loading.attr="disabled">
                    {{ __('Proceed') }}
                </x-button>
            </x-slot>
        </x-confirmation-modal>

        <x-confirmation-modal wire:model='confirm'>

            <x-slot name="close">
                <span wire:click="cancel">
                    x
                </span>
            </x-slot>

            <x-slot name="title">
                Top Up - {{ $investment ? $investment->token->name : ""}}
            </x-slot>

            <x-slot name="content">
                <form action="" wire:submit.prevent=createPlan>
                    <div class="">
                        <div class=" border- border-gray-300">
                            <div class="p-4">
                                <h5 class=" text-green-500 text-center">Your deposit will be processed after confirmation </h5>
                                <div class=" mx-auto max-w-[100px]">
                                    <img class="img-thumbnail mx-auto d-block"
                                        src="https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl={{ $address }}"
                                        height="200" width="200" border="0" />
        
                                    {{-- <img class=" inline-block" width="100" src="{{ asset('images/qrcode.png') }}"
                                        alt=""> --}}
                                </div>
        
                                <div>
                                    <h5 class=" mt-3 text-center">{{ number_format($amount, 2) }}
                                        {{ $token ? $token->name : ""}}
                                        </h5>
                                    <div class="">
                                        <h5 class=" font-semibold text-center">Your BlockArb
                                            {{ $token ? $token->name : ""}}
                                            Address</h5>
                                        <div class="border border-gray-300 rounded p-3 text-center text-gray-400 mt-3">
                                            <div class="flex flex-wrap lg:flex-auto justify-between">
                                                <h5 id="copy-target" class=" overflow-auto">{{ $address }}</h5>
                                                <div data-clipboard-target="#copy-target"
                                                    class="btn-clip cursor-pointer w-full lg:w-auto border border-gray-400 flex justify-center p-1 rounded-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </x-slot>

            <x-slot name="footer">
                <x-button wire:click="$set('confirm', false)" class="ml-2" wire:loading.attr="disabled">
                    {{ __('Close') }}
                </x-button>

                {{-- <x-button wire:click="confirm" class="ml-2" wire:loading.attr="disabled">
                    {{ __('Proceed') }}
                </x-button> --}}
            </x-slot>
        </x-confirmation-modal>

    </div>

</div>
