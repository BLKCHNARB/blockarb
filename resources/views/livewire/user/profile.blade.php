<div class=" bg-white p-8 h-full rounded-lg text-gray-600">

    <div class=" mb-5">
        <h3 class=" text-2xl font-bold">Settings</h3>
    </div>

    <div x-data="{ openTab: 1 }">
        <ul class=" flex items-center space-x- pb-3 border-b border-gray-300" role="tablist">
            <li @click="openTab = 1" class=" font-bold cursor-pointer p-2 px-4"
                :class=" openTab === 1 ? 'bg-secondary-400 rounded-md' : ''">
                <a href="#tab-usd">Profile</a>
            </li>
            <li @click="openTab = 2" class=" font-bold cursor-pointer p-2 px-4"
                :class=" openTab === 2 ? 'bg-secondary rounded-md' : ''">
                <a href="#tab-btc">Wallets</a>
            </li>
            <li @click="openTab = 3" class=" font-bold cursor-pointer p-2 px-4"
                :class=" openTab === 3 ? 'bg-secondary rounded-md' : ''">
                <a href="#tab-eth">KYC</a>
            </li>
            <li @click="openTab = 4" class=" font-bold cursor-pointer p-2 px-4"
                :class=" openTab === 4 ? 'bg-secondary rounded-md' : ''">
                <a href="#tab-eth">Password</a>
            </li>
            {{-- <li @click="openTab = 5" class=" font-bold cursor-pointer p-2 px-4"
                :class=" openTab === 5 ? 'bg-secondary rounded-md' : ''">
                <a href="#tab-eth">2FA</a>
            </li> --}}
        </ul>

        <div class=" mt-10">
            <div class="" x-show="openTab === 1"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">
                    <h5 class=" text-xl font-bold">Profile</h5>
                    <p class=" mt-2 pb-2 border-b border-gray-200">Update your photos and personal details here</p>

                    <div class="grid grid-cols-12">
                        <div class=" col-span-9">
                            <div class="grid grid-cols-2 py-5 border-b border-gray-200">
                                <div class=""><label class="" for="name">Name</label></div>
                                <div class="flex space-x-4">
                                    <input placeholder="" value="Doyin" class=" rounded-md border-gray-300 bg-gray-100"
                                        type="text" name="firstname" id="firstname">
                                    <input placeholder="" value="Cholokpo"
                                        class=" rounded-md border-gray-300 bg-gray-100" type="text" name="firstname"
                                        id="firstname">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 py-5 border-b border-gray-200">
                                <div class=""><label class="" for="email">Email Address</label></div>
                                <div class="">
                                    <input placeholder="" value="doyincholukpo@gmail.com"
                                        class="w-full rounded-md border-gray-300 bg-gray-100" type="text"
                                        name="email" id="email">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 py-5 border-b border-gray-200">
                                <div class=""><label class="" for="email">Country</label></div>
                                <div class="">
                                    <input placeholder="" value="Belgium"
                                        class="w-full rounded-md border-gray-300 bg-gray-100" type="text"
                                        name="country" id="country">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 py-5 border-b border-gray-200">
                                <div class=""><label class="" for="email">State</label></div>
                                <div class="">
                                    <input placeholder="" value="Arizona"
                                        class="w-full rounded-md border-gray-300 bg-gray-100" type="text"
                                        name="state" id="state">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 py-5 border-b border-gray-200">
                                <div class=""><label class="" for="email">Home Address</label></div>
                                <div class="">
                                    <input placeholder="" value="No 2 francisco mern drive"
                                        class="w-full rounded-md border-gray-300 bg-gray-100" type="text"
                                        name="address" id="address">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 py-5 border-b border-gray-200">
                                <div class=""><label class="" for="email">Phone</label></div>
                                <div class="">
                                    <input placeholder="" value="+1882776339"
                                        class="w-full rounded-md border-gray-300 bg-gray-100" type="text"
                                        name="phone" id="phone">
                                </div>
                            </div>

                            <div class=" flex flex-row">
                                <a class=" py-2 px-3 bg-secondary text-gray-800 mt-5 rounded-sb inline-block"
                                    href="">Update Profile</a>
                            </div>
                        </div>
                        <div class=" col-span-3"></div>
                    </div>
                </div>
            </div>
            <div class="" x-show="openTab === 2"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">
                    <h5 class=" text-xl font-bold">Wallets</h5>
                    <p class=" mt-2 pb-2 border-b border-gray-200">Update your wallet addresses for crypto asset
                        withdrawal</p>

                    <div class="grid grid-cols-12">
                        <div class=" col-span-9">

                            <div class="grid grid-cols-2 py-5 border-b border-gray-200">
                                <div class=""><label class="" for="bitcoin">Bitcoin</label></div>
                                <div class="">
                                    <input placeholder="" value="bc1v6f1j566sd24j533d5"
                                        class="w-full rounded-md border-gray-300 bg-gray-100" type="text"
                                        name="bitcoin" id="bitcoin">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 py-5 border-b border-gray-200">
                                <div class=""><label class="" for="ethereum">Ethereum</label></div>
                                <div class="">
                                    <input placeholder="" value="sf6g465sf1g61srv6116ssfdfhsh"
                                        class="w-full rounded-md border-gray-300 bg-gray-100" type="text"
                                        name="ethereum" id="ethereum">
                                </div>
                            </div>

                            <div class=" flex flex-row">
                                <a class=" py-2 px-3 bg-secondary text-gray-800 mt-5 rounded-sb inline-block"
                                    href="">Update Wallet</a>
                            </div>
                        </div>
                        <div class=" col-span-3"></div>
                    </div>
                </div>
            </div>
            <div class="" x-show="openTab === 3"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">
                    <div class=" max-w-xl m-auto bg-primary-5 p-5 rounded-md">
                        <div class=" text-center">
                            <h2 class=" text-3xl font-semibold"> Identity Verification</h2>
                            <h5 class=" mt-5">To comply with regulation you will have to go through identity
                                verification.</h5>
                        </div>

                        <div class="p-5 bg-primary-50 mt-10 rounded-md border border-gray-200">
                            @livewire('multi-step')
                        </div>

                    </div>

                    {{-- <div class="grid grid-cols-12">
                        <div class=" col-span-9">
                            <div class="grid grid-cols-2 py-5 border-b border-gray-200">
                                <div class=""><label class="" for="name">Name</label></div>
                                <div class="flex space-x-4">
                                    <input placeholder="" value="Doyin"
                                        class=" rounded-md border-gray-300 bg-gray-100" type="text"
                                        name="firstname" id="firstname">
                                    <input placeholder="" value="Cholokpo"
                                        class=" rounded-md border-gray-300 bg-gray-100" type="text"
                                        name="firstname" id="firstname">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 py-5 border-b border-gray-200">
                                <div class=""><label class="" for="email">Email Address</label></div>
                                <div class="">
                                    <input placeholder="" value="doyincholukpo@gmail.com"
                                        class="w-full rounded-md border-gray-300 bg-gray-100" type="text"
                                        name="email" id="email">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 py-5 border-b border-gray-200">
                                <div class=""><label class="" for="email">Country</label></div>
                                <div class="">
                                    <input placeholder="" value="Belgium"
                                        class="w-full rounded-md border-gray-300 bg-gray-100" type="text"
                                        name="country" id="country">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 py-5 border-b border-gray-200">
                                <div class=""><label class="" for="email">State</label></div>
                                <div class="">
                                    <input placeholder="" value="Arizona"
                                        class="w-full rounded-md border-gray-300 bg-gray-100" type="text"
                                        name="state" id="state">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 py-5 border-b border-gray-200">
                                <div class=""><label class="" for="email">Home Address</label></div>
                                <div class="">
                                    <input placeholder="" value="No 2 francisco mern drive"
                                        class="w-full rounded-md border-gray-300 bg-gray-100" type="text"
                                        name="address" id="address">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 py-5 border-b border-gray-200">
                                <div class=""><label class="" for="email">Phone</label></div>
                                <div class="">
                                    <input placeholder="" value="+1882776339"
                                        class="w-full rounded-md border-gray-300 bg-gray-100" type="text"
                                        name="phone" id="phone">
                                </div>
                            </div>

                            <div class=" flex flex-row">
                                <a class=" py-2 px-3 bg-secondary text-gray-800 mt-5 rounded-sb inline-block"
                                    href="">Update Profile</a>
                            </div>
                        </div>
                        <div class=" col-span-3"></div>
                    </div> --}}
                </div>
            </div>

            <div class="" x-show="openTab === 4"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">
                    <div class=" max-w-xl m-auto bg-primary-5 p-5 rounded-md">
                        <h4 class=" text-xl font-bold">Change Password</h4>
                        <div class=" mt-10">
                            <label class=" block" for="oldpassword">Current Password</label>
                            <input placeholder="Enter Current Password" value=""
                                class=" pl-0 text-sm text-gray-400 placeholder-gray-400 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-400"
                                type="text" name="oldpass" id="oldpass">
                        </div>

                        <div class=" mt-3">
                            <label class=" block" for="newpass">New Password</label>
                            <input placeholder="Enter New Password" value=""
                                class=" pl-0 text-sm text-gray-400 placeholder-gray-400 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-400"
                                type="text" name="newpass" id="newpass">
                        </div>

                        <div class=" mt-3">
                            <label class=" block" for="newpassconfirm">Retype New Password</label>
                            <input placeholder="Confirm New Password" value=""
                                class=" pl-0 text-sm text-gray-400 placeholder-gray-400 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-400"
                                type="text" name="newpassconfirm" id="newpassconfirm">
                        </div>

                        <a href="" class=" py-2 px-3 inline-block font-semibold mt-3 bg-secondary text-gray-600 rounded-sb"> Update Password </a>

                    </div>
                </div>
            </div>

            <div class="" x-show="openTab === 5"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" {{-- x-transition:leave="transition origin-top ease-out duration-200"
                x-transition:leave-start=" opacity-100 transform translate-y-0" x-transition:leave-end=" opacity-0 transform -translate-y-2" --}}>
                <div class="transition duration-700 ease-out">
                    <div class="grid grid-cols-2 gap-24">
                        <div class="chart-usd bg-primary-100 p-5 rounded-md col-span-1">
                            <canvas id="charedd"></canvas>
                        </div>

                        <div class="chart-eth bg-primary-100 p-5 rounded-md col-span-1">
                            <canvas id="chart-rtd"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
