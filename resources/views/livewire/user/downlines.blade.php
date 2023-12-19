<div class=" bg-white p-4 pt-8 lg:p-12 h-ful rounded-lg">

    <div class=" mb-10 flex justify-between items-center">
        <h3 class=" text-2xl font-semibold"> Referrals & Rewards</h3>
    </div>

    <div class="overflow-x-aut">
        <table class="min-w-full">
            <thead>
                <tr>
                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        S/N</th>
                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Name</th>
                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Registered Date</th>
                    <th
                        class="px- py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Rewards</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-darker ">
                @forelse ($referrals as $referral)
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="text-sm leading-5 ">{{ $loop->iteration }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                            {{ $referral->first_name . ' ' . $referral->last_name }}</td>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                            {{ $referral->created_at->format('Y-m-d') }}
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5 relative"
                            x-data="{ open: false }">
                            <div class=" cursor-pointer" @click="open = !open" @click.away="open = false">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>

                            {{-- <div class="" x-show="open===true">
                                @if ($referral->rewards)
                                    @foreach ($referral->rewards as $reward)
                                        <div class="flex items-center justify-between min-w-[10rem] py-1 text-sm">
                                            <h5 class="">${{ number_format($reward->amount) }}</h5>
                                            <button wire:click="claim({{ $reward->id }})"
                                                class=" py-1 px-3 bg-primary-500 rounded-sm text-white">
                                                <span>claim</span>
                                            </button>
                                        </div>
                                    @endforeach
                                @endif
                            </div> --}}
                            
                            <div class=" absolute right-20 lg:right-[90%] top-10 border border-gray-00 bg-white shadow-lg p-5 z-10"
                                x-show="open === true" x-transition>
                                @if ($referral->rewards)
                                    @forelse ($referral->rewards as $reward)
                                        <div class="flex items-center justify-between min-w-[13rem] py-1 text-sm">
                                            <h5 class="">${{ number_format($reward->amount) }}</h5>
                                            <div class="flex space-x-2">
                                                <button wire:click="claim({{ $reward->id }})"
                                                    class=" py-1 px-3 bg-primary-500 rounded-sm text-white">
                                                    <span>claim</span>
                                                </button>
                                                <button wire:click="reinvest({{$reward->id}})" class=" text-green-500">reinvest</button>
                                            </div>
                                        </div>
                                        @empty
                                        <h5 class=" whitespace-nowrap">No rewards</h5>
                                    @endforelse
                                @endif

                            </div>
                        </td>
                    </tr>
                @empty
                    <tr class="text-center py-5 mx-auto">
                        <td align="center" colspan="4">
                            <div class="text-center py-5 mx-auto">
                                <h5 class="">You have no referrals</h5>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class=" text-left">
        {{-- <ul class=" flex justify-around border-b-2 border-gray-300 py-5 text-sm font-semibold text-primary-500">
            <li>S/N</li>
            <li>Name</li>
            <li>Registered Date</li>
            <li>Rewards</li>
        </ul>

        @forelse ($referrals as $referral)
            <div x-data="{ open: false }" class="border-b border-gray-300 text-gray-500 py-4 text-sm">
                <ul class=" flex justify-between ">
                    <li>{{ $loop->iteration }}</li>
                    <li>{{ $referral->first_name . ' ' . $referral->last_name }}</li>
                    <li>{{ $referral->created_at->format('Y-m-d') }}</li>
                    <li class=" relative">
                        <div class=" cursor-pointer" @click="open = !open">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>

                        </div>

                        <div class=" absolute top-5 right-5 border border-gray-00 bg-white shadow-lg p-5"
                            x-show="open === true" x-transition>
                            @if ($referral->rewards)
                                @forelse ($referral->rewards as $reward)
                                    <div class="flex items-center justify-between min-w-[10rem] py-1">
                                        <h5 class=" text-base">${{ number_format($reward->amount) }}</h5>
                                        <button class=" py-1 px-3 bg-primary-500 rounded-sm text-white">
                                            <span>claim</span>
                                        </button>
                                    </div>
                                @empty
                                    <div class="flex items-center justify-between min-w-[10rem] py-1">
                                        <h5 class="">You have no rewards</h5>
                                    </div>
                                @endforelse
                            @endif

                        </div>

                    </li>
                </ul>
            </div>
        @empty
            <p class="p-5 text-center">You have no downline yet. Please Copy and share your referral
                link to earn more</p>
        @endforelse --}}

        {{-- <table class="min-w-full">
            <thead>
                <tr>
                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        S/N</th>
                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Name</th>
                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Registered Date</th>
                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Rewards</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-darker dark:text-whit">
                @forelse ($referrals as $referral)
                    <tr>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="text-sm leading-5 ">{{ $loop->iteration }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b  border-gray-500 text-sm leading-5">
                            {{ $referral->first_name . ' ' . $referral->last_name }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500  text-sm leading-5">
                            {{ $referral->created_at->format('Y-m-d') }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                            <div class=" cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>

                            </div>
                        </td>
                    </tr>

                    <div class=" max-w-md">
                        <div class="flex">
                            <h5>$50</h5>
                            <button class=" py-3 px-5">
                                <span>Claim</span>
                            </button>
                        </div>
                    </div>

                @empty

                    <tr>
                        <td colspan="5">
                            <p class="p-5 text-center">You have no downline yet. Please Copy and share your referral
                                link to earn more</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table> --}}
    </div>

</div>
