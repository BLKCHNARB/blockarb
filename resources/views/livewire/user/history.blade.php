<div class="bg-white p-4 text-black_800 pt-8 lg:px-8 lg:py-3 h-full">

    <div class=" mb-5 flex justify-between items-center">
        <h3 class=" base:text-lg text-[1.35rem] font-semibold"> Activities </h3>
    </div>

    <div x-data="{ openTab: 1 }" class=" mb-10">
        <ul class=" flex flex-wrap justify-start items-center base:gap-4 gap-3 mt-10" role="tablist">
            <li @click="openTab = 1" class=" base-text cursor-pointer base:p-3 p-2 base:px-7 px-4 rounded-[10px] hover:scale-105 hover:bg-blue_600  transition-all duration-300"
                :class=" openTab === 1 ? 'bg-blue_600 rounded-[10px] text-white pointer-events-none' : 'text-blue_600 bg-blue_100 hover:text-white font-medium'">
                <a href="#">Deposit</a>
            </li>
            <li @click="openTab = 2" class=" base-text cursor-pointer base:p-3 p-2 base:px-7 px-4 rounded-[10px] hover:scale-105 hover:bg-blue_600  transition-all duration-300"
                :class=" openTab === 2 ? 'bg-blue_600 rounded-[10px] text-white pointer-events-none' : 'text-blue_600 bg-blue_100 hover:text-white font-medium'">
                <a href="#">Withdrawal</a>
            </li>
            <li @click="openTab = 3" class=" base-text cursor-pointer base:p-3 p-2 base:px-7 px-4 rounded-[10px] hover:scale-105 hover:bg-blue_600  transition-all duration-300"
                :class=" openTab === 3 ? 'bg-blue_600 rounded-[10px] text-white pointer-events-none' : 'text-blue_600 bg-blue_100 hover:text-white font-medium'">
                <a href="#">Snowball</a>
            </li>
            <li @click="openTab = 4" class=" base-text cursor-pointer base:p-3 p-2 base:px-7 px-4 rounded-[10px] hover:scale-105 hover:bg-blue_600  transition-all duration-300"
                :class=" openTab === 4 ? 'bg-blue_600 rounded-[10px] text-white pointer-events-none' : 'text-blue_600 bg-blue_100 hover:text-white font-medium'">
                <a href="#">Transfer</a>
            </li>
            <li @click="openTab = 5" class=" base-text cursor-pointer base:p-3 p-2 base:px-7 px-4 rounded-[10px] hover:scale-105 hover:bg-blue_600  transition-all duration-300"
                :class=" openTab === 5 ? 'bg-blue_600 rounded-[10px] text-white pointer-events-none' : 'text-blue_600 bg-blue_100 hover:text-white font-medium'">
                <a href="#">Top Up</a>
            </li>
        </ul>

        <div class=" base:mt-10 mt-7 w-full h-fit base:p-14 p-4 rounded-[18px] border ">
            <div class="" x-show="openTab === 1"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">

                    <div class="">
                        @forelse ($deposits as $deposit)
                            <div class="flex md:gap-5 gap-4 w-full">
                                <img src="{{ asset('svg/topup.svg') }}" alt="topup icon" class="md:w-[3.5rem] w-[2.5rem] sm:block hidden">
                                <div class="w-full border-b md:py-5 py-3 flex justify-between items-center">
                                    <div class="flex flex-col">
                                        <span class="md:text-lg text-base font-medium">Deposit <span class="uppercase">{{ $deposit->token }}</span></span>
                                        <span class="text-success md:text-base text-sm capitalize mt-2">confirmed <span class="text-black_200"> | {{ $deposit->created_at->format('jS M, Y') }}</span></span>
                                    </div>
                                    <span class="w-fit text-right text-black_600 font-semibold base-text">+{{ formatNumber($deposit->amount, 2) }}  {{ $deposit->token }}</span>
                                </div>
                            </div>                   
                        @empty
                            <div>
                                <h5 class=" py-7 font-semibold text-center md:text-md sm:text-base text-sm ">No records found. <a class="text-blue_600" href="{{ (route('invest')) }}">Make your first deposit</a> </h5>
                            </div>           
                        @endforelse
                    </div>

                </div>
            </div>

            <div class="" x-show="openTab === 2"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">

                    <div class="">
                        @forelse ($withdrawals as $withdrawal)
                            <div class="flex md:gap-5 gap-4 w-full">
                                <img src="{{ asset('svg/remove.svg') }}" alt="topup icon" class="md:w-[3.5rem] w-[2.5rem] sm:block hidden">
                                <div class="w-full border-b md:py-5 py-3 flex justify-between items-center">
                                    <div class="flex flex-col">
                                        <span class="md:text-md text-base font-medium"> <span class="uppercase">{{ $withdrawal->token->name }} </span>withdrawal from <span class=" capitalize ">{{ $withdrawal->purse }}</span></span>
                                        <span class="{{$withdrawal->processed == 1 ? 'text-success' : 'text-warning'}} md:text-base text-sm capitalize mt-2">{{$withdrawal->processed == 1 ? 'successful' : 'processing...'}} <span class="text-black_200"> | {{ $withdrawal->created_at->format('jS M, Y') }}</span></span>
                                    </div>
                                    <span class="w-fit text-right text-black_600 font-semibold base-text">-{{ formatNumber($withdrawal->amount, 2) }}  {{ $withdrawal->token->name }} </span>
                                </div>
                            </div>                   
                        @empty
                            <div>
                                <h5 class=" py-7 font-semibold text-center md:text-md sm:text-base text-sm ">No records found. </h5>
                            </div>           
                        @endforelse
                    </div>

                </div>
            </div>

            <div class="" x-show="openTab === 3"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">

                    <div class="">
                        @forelse ($compounds as $compound)
                            <div class="flex md:gap-5 gap-4 w-full">
                                <img src="{{ asset('svg/compound.svg') }}" alt="topup icon" class="md:w-[3.5rem] w-[2.5rem] sm:block hidden">
                                <div class="w-full border-b md:py-5 py-3 flex justify-between items-center">
                                    <div class="flex flex-col">
                                        <span class="md:text-md text-base font-medium">Compound <span class="uppercase">{{ $compound->token->name }} </span> profit into capital</span></span>
                                        <span class="{{$compound->status == 1 ? 'text-success' : 'text-warning'}} md:text-base text-sm capitalize mt-2">{{$compound->status == 1 ? 'successful' : 'processing...'}} <span class="text-black_200"> | {{ $compound->created_at->format('jS M, Y') }}</span></span>
                                    </div>
                                    <span class="w-fit text-right text-black_600 font-semibold base-text">+{{ formatNumber($compound->amount, 2) }}  {{ $compound->token->name }} </span>
                                </div>
                            </div>                   
                        @empty
                            <div>
                                <h5 class=" py-7 font-semibold text-center md:text-md sm:text-base text-sm ">No records found. </h5>
                            </div>           
                        @endforelse
                    </div>

                </div>
            </div>

            <div class="" x-show="openTab === 4"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">

                    <div class="">
                        @forelse ($transfers as $transfer)
                            <div class="flex md:gap-5 gap-4 w-full">
                                <img src="{{ asset('svg/remove.svg') }}" alt="topup icon" class="md:w-[3.5rem] w-[2.5rem] sm:block hidden">
                                <div class="w-full border-b md:py-5 py-3 flex justify-between items-center">
                                    <div class="flex flex-col w-[75%]">
                                        <span class="md:text-md text-base font-medium">Transfer <span class="uppercase">{{ $transfer->token->name }} </span> from {{$transfer->purse}} to {{$transfer->receiver}} </span></span>
                                        <span class="text-success md:text-base text-sm capitalize mt-2"> Confirmed <span class="text-black_200"> | {{ $transfer->created_at->format('jS M, Y') }}</span></span>
                                    </div>
                                    <span class="w-[25%] text-right text-black_600 font-semibold base-text">-{{ formatNumber($transfer->amount, 2) }}  {{ $transfer->token->name }} </span>
                                </div>
                            </div>                   
                        @empty
                            <div>
                                <h5 class=" py-7 font-semibold text-center md:text-md sm:text-base text-sm ">No records found. </h5>
                            </div>           
                        @endforelse
                    </div>

                </div>
            </div>

            <div class="" x-show="openTab === 5"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">

                    <div class="">
                        @forelse ($topups as $topup)
                            <div class="flex md:gap-5 gap-4 w-full">
                                <img src="{{ asset('svg/topup.svg') }}" alt="topup icon" class="md:w-[3.5rem] w-[2.5rem] sm:block hidden">
                                <div class="w-full border-b md:py-5 py-3 flex justify-between items-center">
                                    <div class="flex flex-col">
                                        <span class="md:text-md text-base font-medium"> Top Up <span class="uppercase">{{ $topup->token->name }} </span> profit into capital</span></span>
                                        <span class="{{$topup->status == 1 ? 'text-success' : 'text-warning'}} md:text-base text-sm capitalize mt-2">{{$topup->status == 1 ? 'confirmed' : 'processing...'}} <span class="text-black_200"> | {{ $topup->created_at->format('jS M, Y') }}</span></span>
                                    </div>
                                    <span class="w-fit text-right text-black_600 font-semibold base-text">+{{ formatNumber($topup->amount, 2) }}  {{ $topup->token->name }} </span>
                                </div>
                            </div>                   
                        @empty
                            <div>
                                <h5 class=" py-7 font-semibold text-center md:text-md sm:text-base text-sm ">No records found. </h5>
                            </div>           
                        @endforelse
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
