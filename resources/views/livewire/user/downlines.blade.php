<div class=" bg-white p-4 text-black_800 pt-8 lg:px-8 lg:py-3 h-full">

    <div class=" mb-10 text-black_800">
        <h1 class=" text-2xl font-extrabold"> Affiliate Program</h1>
        <p class="text-lg mt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi nihil iure perferendis, amet nisi dignissimos accusamus, quis similique expedita recusandae nobis autem, illo reprehenderit architecto voluptatum veritatis! Quasi, sunt expedita!</p>
    </div>

    <main class="mt-10">

        {{-- Hero section --}}
        <div class="bg-blue_600 flex items-center justify-between w-full h-[19rem] text-white p-10 rounded-[18px]">
            <div class="flex flex-col justify-center gap-[0.938rem] w-[60%]">
                <p class="text-sm font-medium leading-[1.416rem] opacity-70"> Total reward earned </p>
                <div class="w-[75%] mt-3 flex justify-between items-center p-4 rounded-[10px] bg-white" >
                    <div class=" flex flex-col w-[70%]">
                        <span class="text-sm text-black_600">Your refferal link</span>
                        <h4 id="copy-target" class=" break-all font-semibold mt-2 text-sm text-blue_300 ">{{ $referral_link }}</h4>
                    </div>
                    <div data-clipboard-target="#copy-target"
                        class="btn-clip text-blue_300 text-sm font-medium flex-col gap-2 cursor-pointer w-full lg:w-auto flex justify-center items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 20H0V3C0 2.20435 0.31607 1.44129 0.87868 0.87868C1.44129 0.31607 2.20435 0 3 0L17 0C17.7956 0 18.5587 0.31607 19.1213 0.87868C19.6839 1.44129 20 2.20435 20 3V20ZM2 18H18V3C18 2.73478 17.8946 2.48043 17.7071 2.29289C17.5196 2.10536 17.2652 2 17 2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V18ZM22 4.184V22H4V24H24V7C23.9974 6.38174 23.8039 5.77937 23.4459 5.2753C23.0879 4.77123 22.5829 4.39008 22 4.184Z" fill="currentColor"/>
                        </svg> 
                        <span>Copy link</span>                               
                    </div>
                </div>
            </div>
            <div class="w-[35%]">
                <img src="{{ asset('images/award.png') }}" alt="">
            </div>
        </div>

        <div class=" base:mt-10 mt-7 w-full h-fit ">

            @forelse ($referrals as $referral)
                @if ($referral->rewards)
                    @forelse ($referral->rewards as $reward)
                    <div class="flex md:gap-5 gap-4 w-full h-fit base:p-14 p-4 rounded-[18px] border">
                        <img src="{{ asset('svg/topup.svg') }}" alt="topup icon" class="md:w-[3.5rem] w-[2.5rem] sm:block hidden">
                        <div class="w-full md:py-5 py-3 flex justify-between items-center">
                            <div class="flex flex-col">
                                <span class="md:text-lg text-base font-medium">Refferral <span class="text-blue_600">{{ $referral->first_name . ' ' . $referral->last_name }}</span></span>
                                {{-- <span class="text-success md:text-base text-sm capitalize mt-2">confirmed <span class="text-black_200"> | {{ $reward->created_at->format('jS M, Y') }}</span></span> --}}
                            </div>
                            <span class="w-fit text-right text-black_600 font-semibold base-text">+{{ formatNumber($reward->amount, 2) }} </span>
                        </div>
                    </div> 
                    @empty
                        
                    @endforelse
                @endif
                    {{ $referral->rewards }}
                <span class="text-md font-semibold">Pending referrals</span>
                <div class="mt-7 flex md:gap-5 gap-4 w-full h-fit base:px-10 base:py-4 p-4 rounded-[18px] border">
                    <img src="{{ asset('svg/topup.svg') }}" alt="topup icon" class="md:w-[3.5rem] w-[2.5rem] sm:block hidden">
                    <div class="w-full md:py-5 py-3 flex justify-between items-center">
                        <div class="flex flex-col">
                            <span class="md:text-lg text-base font-medium">Refferral <span class="text-blue_600">{{ $referral->first_name . ' ' . $referral->last_name }}</span></span>
                            <span class="text-success md:text-base text-sm capitalize mt-2"> Joined <span class="text-black_200"> {{ $referral->created_at->format('jS M, Y') }}</span></span>
                        </div>
                        <span class="w-fit text-right text-black_600 font-semibold text-lg">+0</span>
                    </div>
                </div>                   
            @empty
                <div>
                    <h5 class=" py-7 font-semibold text-center md:text-md sm:text-base text-sm ">No records found. <a class="text-blue_600" href="{{ (route('invest')) }}">Make your first deposit</a> </h5>
                </div>           
            @endforelse

        </div>

        {{-- <table class="min-w-full">
            
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
                            
                            {{-- <div class=" absolute right-20 lg:right-[90%] top-10 border border-gray-00 bg-white shadow-lg p-5 z-10"
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
        </table> --}} 
    </main>
</div>
