<div class=" bg-white p-4 pt-8 lg:p-12 h-ful rounded-lg">

    <div class=" max-w-xl mx-auto">
        @if ($step === 0)
            <div class=" text-center">
                <h4 class=" font-semibold text-2xl">Deposit Funds</h4>
                <div class=" mt-3">
                    <h5 class=" text-base text-gray-500">Crypto Deposit</h5>
                    <p class=" text-gray-400 text-sm mt-2"> Send your payments direct to our wallet</p>
                </div>
            </div>

            <div class=" mt-5">
                <div>
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
                            </select>
                            @error('selectedToken')
                                <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="p-5 basis-1/2">
                            <label for="amount" class=" text-gray-500">Plan</label>
                            <select wire:model="selectedPlan"
                                class=" font-roboto pl- rounded-none text-sm text-gray-400 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                                name="token" id="token">
                                <option value="">Choose A Plan</option>
                                @forelse ($plans as $plan)
                                    <option value="{{ $plan->id }}">{{ $plan->name }}</option>
                                @empty
                                @endforelse
                            </select>
                            @error('plan')
                                <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="p-5">
                        <label for="amount" class=" text-gray-500">Amount</label>
                        <input wire:model="amount" placeholder="0.00" value=""
                            class=" pl-0 text-lg text-gray-400 placeholder-gray-300 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                            type="number" name="amount" id="amount">
                        @error('amount')
                            <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class=" mt-3">
                    <button wire:click="next" href=""
                        class=" bg-secondary text-gray-800 block rounded-sb py-2 text-center font-semibold w-full">Continue
                        to
                        Deposit</button>
                </div>
            </div>
        @elseif ($step === 1)
            <div class=" text-center">
                <h5 class=" text-red-500 font-bold">Do not refresh this page</h5>
                <h4 class=" font-semibold text-2xl">Confirm Your Deposit</h4>
                <div class=" mt-3">
                    <h5 class=" text-base text-gray-500">You are about to deposit {{ formatNumber($amount, 2) }}
                        {{ $selectedToken == 1 ? 'USDT' : ($selectedToken == 2 ? 'Bitcoin' : 'Ethereum') }} in your account.</h5>
                    <p class=" text-gray-400 text-sm mt-2">Please review the information and confirm.</p>
                </div>
            </div>

            <div class=" mt-5">
                <ul class=" divide-y border border-gray-300 rounded-sm bg-primary-50">
                    <li>
                        <div class="flex justify-between items-center p-4">
                            <h5 class=" text-gray-500">Payment Method</h5>
                            <div class=" flex items-center text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" width="20" height="20"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M16 6H3.5v-.5l11-.88v.88H16V4c0-1.1-.891-1.872-1.979-1.717L3.98 3.717C2.891 3.873 2 4.9 2 6v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2zm-1.5 7.006a1.5 1.5 0 1 1 .001-3.001a1.5 1.5 0 0 1-.001 3.001z" />
                                </svg>
                                <h5 class=" ml-3">Crypto Deposit</h5>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between items-center p-4">
                            <h5 class=" text-gray-500">Amount To Deposit</h5>
                            <div class=" flex items-center text-gray-400">
                                <h5 class=" ml-3">{{ formatNumber($amount, 2) }}
                                    {{ $selectedToken == 1 ? 'USDT' : ($selectedToken == 2 ? 'Bitcoin' : 'Ethereum') }}</h5>
                            </div>
                        </div>
                    </li>
                </ul>

                <ul class=" divide-y border border-gray-300 rounded-sm mt-2 bg-primary-50">
                    <li>
                        <div class="flex justify-between items-center p-4">
                            <h5 class=" text-gray-500">You will send (Total)</h5>
                            <div class=" flex items-center text-gray-400">
                                <h5 class=" ml-3">{{ formatNumber($amount, 2) }}
                                    {{ $selectedToken == 1 ? 'USDT' : ($selectedToken == 2 ? 'Bitcoin' : 'Ethereum') }}</h5>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class=" mt-5">
                    <button wire:click="next"
                        class=" w-full font-roboto font-semibold bg-secondary text-gray-800 block rounded-sb py-2 text-center">Confirm
                        &
                        Pay</button>
                    {{-- <a href="" class=" block rounded-sb py-2 text-center text-red-500">Cancel Order</a> --}}
                </div>
            </div>
        @elseif ($step === 2)
            <div class=" text-center">
                <h5 class=" text-red-500 font-bold">Do not refresh this page</h5>
                <h4 class=" font-semibold text-2xl">Make Your Payment</h4>
                <div class=" mt-3">
                    <h5 class=" text-base text-gray-500">Your order has been placed successfully. To
                        complete, please send the exact amount of {{ formatNumber($amount, 2) }}
                        {{ $selectedToken == 1 ? 'USDT' : ($selectedToken == 2 ? 'Bitcoin' : 'Ethereum') }} to the address
                        below.</h5>
                </div>
            </div>

            <div class=" mt-5 border border-gray-300 rounded-md bg-primary-50">
                <div class=" border-b border-gray-300">
                    <div class=" p-4">
                        <div class="flex justify-between items-center">
                            <h5 class="font-semibold">Pay
                                {{ $selectedToken == 1 ? 'USDT' : ($selectedToken == 2 ? 'Bitcoin' : 'Ethereum') }}
                            </h5>
                            {{-- <h5 class=" text-sm"> Expires in 05:00 </h5> --}}
                        </div>
                    </div>
                </div>

                <div class=" border-b border-gray-300">
                    <div class="p-4">
                        <div class=" mx-auto max-w-[100px]">
                            <img class="img-thumbnail mx-auto d-block"
                                src="https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl={{ $address }}"
                                height="200" width="200" border="0" />

                            {{-- <img class=" inline-block" width="100" src="{{ asset('images/qrcode.png') }}"
                                alt=""> --}}
                        </div>

                        <div>
                            <h5 class=" mt-3 text-center">{{ formatNumber($amount, 2) }}
                                {{ $selectedToken == 1 ? 'USDT' : ($selectedToken == 2 ? 'Bitcoin' : 'Ethereum') }}</h5>
                            <div class="">
                                <h5 class=" font-semibold text-center">Your BlockArb
                                    {{ $selectedToken == 1 ? 'USDT' : ($selectedToken == 2 ? 'Bitcoin' : 'Ethereum') }}
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

                <div class="p-4">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <h5 class=" text-sm ml-3">Account will be credited once we received your payment.</h5>
                    </div>
                </div>
            </div>
            {{-- <div class=" mt-5">
                <a href="" class=" block rounded-sb py-2 text-center text-red-500">Cancel Order</a>
            </div> --}}
        @endif

        {{-- modal --}}

        
        {{-- modal end --}}

    </div>
</div>

@push('scripts')
    <script wire:poll>
        document.addEventListener('DOMContentLoaded', function() {

            function toggleModal() {
                document.getElementById('modalconfirm').classList.remove("hidden")
                document.getElementById('modalconfirm').classList.add("fixed")
            }

            function toggleIncompleteModal() {
                document.getElementById('modalincomplete').classList.remove("hidden")
                document.getElementById('modalincomplete').classList.add("fixed")
            }

            // let myRedirectInterval = setInterval(() => {
            //     window.location.href = '/user';
            // }, 300000);

            let address = {!! json_encode($address) !!}
            console.log(address)
            // setInterval(() => {

            //     $.ajax({
            //         url: "{{ route('user.updatepaymentstatus') }}",
            //         type: "POST",
            //         dataType: 'json',
            //         data: {
            //             code: code
            //         },
            //         success: function(data) {
            //             let res = JSON.parse(JSON.stringify(data));
            //             if (res.status == -2) {
            //                 $(".pmtstatus").text("Payment Expired")
            //             } else if (res.status == -1) {
            //                 $(".pmtstatus").text("Waiting for payment")
            //                 toggleModal()
            //                 clearInterval(myRedirectInterval)
            //             } else if (res.status == 0) {
            //                 $(".pmtstatus").text("Unpaid")

            //             } else if (res.status == 1) {
            //                 $(".pmtstatus").text("Processing Payment...")
            //                 clearInterval(myRedirectInterval)
            //                 toggleModal()
            //             } else if (res.status == 2) {
            //                 $(".pmtstatus").text("Payment Successful")
            //                 clearInterval(myRedirectInterval)
            //                 toggleModal()
            //             } else if (res.status == 10) {
            //                 $(".pmtstatus").text("Incomplete Payment received")
            //                 clearInterval(myRedirectInterval)
            //                 toggleIncompleteModal()
            //             }



            //         }
            //     })

            // }, 3000);

        })
    </script>
@endpush
