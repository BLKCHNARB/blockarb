<div class="bg-white p-4 pt-8 lg:p-12 lg:pt-8 h-ful rounded-lg overflow-auto">

    <div class=" mb-10 flex justify-between items-center">
        <h3 class=" text-2xl font-semibold"> History</h3>
    </div>

    <div x-data="{ openTab: 1 }" class=" mb-10">
        <ul class=" flex items-center space-x-" role="tablist">
            <li @click="openTab = 1" class=" cursor-pointer p-3 px-6 hover:bg-blue_100 rounded-[10px] mr-2 transition-all duration-200"
                :class=" openTab === 1 ? 'bg-blue_600 rounded-[10px] text-white pointer-events-none' : 'text-black_800 hover:text-blue_600'">
                <a href="#">Deposit</a>
            </li>
            <li @click="openTab = 2" class=" cursor-pointer p-3 px-6 hover:bg-blue_100 rounded-[10px] mr-2 transition-all duration-200"
                :class=" openTab === 2 ? 'bg-blue_600 rounded-[10px] text-white pointer-events-none' : 'text-black_800 hover:text-blue_600'">
                <a href="#">Withdrawal</a>
            </li>
            <li @click="openTab = 3" class=" cursor-pointer p-3 px-6 hover:bg-blue_100 rounded-[10px] mr-2 transition-all duration-200"
                :class=" openTab === 3 ? 'bg-blue_600 rounded-[10px] text-white pointer-events-none' : 'text-black_800 hover:text-blue_600'">
                <a href="#">Snowball</a>
            </li>
            <li @click="openTab = 4" class=" cursor-pointer p-3 px-6 hover:bg-blue_100 rounded-[10px] mr-2 transition-all duration-200"
                :class=" openTab === 4 ? 'bg-blue_600 rounded-[10px] text-white pointer-events-none' : 'text-black_800 hover:text-blue_600'">
                <a href="#">Transfer</a>
            </li>
            <li @click="openTab = 5" class=" cursor-pointer p-3 px-6 hover:bg-blue_100 rounded-[10px] mr-2 transition-all duration-200"
                :class=" openTab === 5 ? 'bg-blue_600 rounded-[10px] text-white pointer-events-none' : 'text-black_800 hover:text-blue_600'">
                <a href="#">Top Up</a>
            </li>
        </ul>

        <div class=" mt-10">
            <div class="" x-show="openTab === 1"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">

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
                                        Deposit Date</th>

                                    {{-- <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Elapses</th>
                
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Days Spent</th>
                
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Status</th> --}}
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-darker ">
                                @forelse ($deposits as $deposit)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 ">{{ $loop->iteration }}</div>
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            {{ $deposit->token }}</td>
                                        </td>

                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            {{ formatNumber($deposit->amount, 2) }}
                                            {{ $deposit->token}}
                                            {{-- {{ $deposit->token_id == 1 ? 'USDT' : ($deposit->token_id == 2 ? 'BTC' : 'ETH') }} --}}
                                        </td>

                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            {{ $deposit->created_at->format('Y/m/d') }}</td>
                                        {{-- <td class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            2023-08-10</td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
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
                                                <h5 class=" text-x">No records found. <a class="text-blue_600" href="{{ (route('invest')) }}">Make your first deposit</a> </h5>
                                            </div>
                                        </td>
                                    </tr>

                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="" x-show="openTab === 2"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">

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
                                        Amount</th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Purse</th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Processed</th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Created</th>

                                    {{-- <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Elapses</th>
                
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Days Spent</th>
                
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Status</th> --}}
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-darker ">
                                @forelse ($withdrawals as $withdrawal)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 ">{{ $loop->iteration }}</div>
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            {{ $withdrawal->token->name }}</td>
                                        </td>

                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            {{ formatNumber($withdrawal->amount, 2) }}
                                            {{ $withdrawal->token_id == 1 ? 'USD' : ($withdrawal->token_id == 2 ? 'BTC' : 'ETH') }}
                                        </td>

                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            {{ $withdrawal->purse }}</td>

                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            @php
                                                if ($withdrawal->processed) {
                                                    @endphp
                                                    <svg class=" text-green-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                    @php
                                                } else {
                                                    @endphp
                                                    <svg class=" text-red-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                @php
                                                }
                                            @endphp
                                            {{-- {{ $withdrawal->processed ? '' : '' }} --}}
                                        </td>

                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            {{ $withdrawal->created_at->format('Y/m/d') }}</td>
                                        {{-- <td class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            2023-08-10</td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
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
                                                <h5 class=" text-x">No records found </h5>
                                            </div>
                                        </td>
                                    </tr>

                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="" x-show="openTab === 3"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">

                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        S/N</th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Token</th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Amount</th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Created</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-darker ">
                                @forelse ($compounds as $compound)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 ">{{ $loop->iteration }}</div>
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            {{ $compound->token->name }}</td>
                                        </td>

                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            {{ formatNumber($compound->amount, 2) }}
                                            {{ $compound->token->name }}
                                            {{-- {{ $compound->token_id == 1 ? 'USD' : ($compound->token_id == 2 ? 'BTC' : 'ETH') }} --}}
                                        </td>

                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            {{ $compound->created_at->format('Y/m/d') }}</td>
                                    </tr>

                                    @empty

                                    <tr class="text-center py-5 mx-auto">
                                        <td align="center" colspan="5">
                                            <div class="text-center py-5 mx-auto">
                                                <h5 class=" text-x">No records found </h5>
                                            </div>
                                        </td>
                                    </tr>

                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="" x-show="openTab === 4"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">

                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        S/N</th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Token</th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Amount</th>
                                        <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Receiver</th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Created</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-darker ">
                                @forelse ($transfers as $transfer)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 ">{{ $loop->iteration }}</div>
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            {{ $transfer->token->name }}</td>
                                        </td>

                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            {{ formatNumber($transfer->amount, 2) }}
                                            {{ $transfer->token->name }}
                                            {{-- {{ $transfer->token_id == 1 ? 'USD' : ($transfer->token_id == 2 ? 'BTC' : 'ETH') }} --}}
                                        </td>

                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            {{ $transfer->receiver }}</td>
                                        </td>

                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            {{ $transfer->created_at->format('Y/m/d') }}</td>
                                    </tr>

                                    @empty

                                    <tr class="text-center py-5 mx-auto">
                                        <td align="center" colspan="5">
                                            <div class="text-center py-5 mx-auto">
                                                <h5 class=" text-x">No records found </h5>
                                            </div>
                                        </td>
                                    </tr>

                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="" x-show="openTab === 5"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">

                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        S/N</th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Token</th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Amount</th>
                                    <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                        Created</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-darker ">
                                @forelse ($topups as $topup)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 ">{{ $loop->iteration }}</div>
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            {{ $topup->token->name }}</td>
                                        </td>

                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            {{ formatNumber($topup->amount, 2) }}
                                            {{ $topup->token->name }}
                                        </td>

                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                                            {{ $topup->created_at->format('Y/m/d') }}</td>
                                    </tr>

                                    @empty

                                    <tr class="text-center py-5 mx-auto">
                                        <td align="center" colspan="5">
                                            <div class="text-center py-5 mx-auto">
                                                <h5 class=" text-x">No records found </h5>
                                            </div>
                                        </td>
                                    </tr>

                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
