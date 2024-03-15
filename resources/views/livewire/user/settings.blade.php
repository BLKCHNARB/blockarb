<div class=" bg-white p-4 text-black_800 pt-8 lg:px-8 lg:py-3 h-full">

    <div x-data="{ openTab: 0 }">

        <div class=" ">
            <div class=" mb-5">
                <h3 class=" base:text-lg text-[1.35rem] font-bold">Account Settings</h3>
            </div>
    
            <ul class=" flex flex-wrap justify-center base:justify-start items-center base:gap-4 gap-3 mt-10" role="tablist">
                <li @click="openTab = 1" onclick="addNavProfileQuery()" class=" base-text cursor-pointer base:p-3 p-2 base:px-7 px-4 rounded-[10px] hover:scale-105 hover:bg-blue_600  transition-all duration-300"
                    :class=" openTab === 1 || ('{{request()->query('profile')}}' && openTab === 0 && !(openTab === 2 || openTab === 3 || openTab === 4 )) ? 'bg-blue_600 rounded-[10px] text-white pointer-events-none' : 'text-blue_600 bg-blue_100 hover:text-white font-medium'">
                    Profile
                </li>
                <li @click="openTab = 2" onclick="addNavWalletsQuery()" class=" base-text cursor-pointer base:p-3 p-2 base:px-7 px-4 rounded-[10px] hover:scale-105 hover:bg-blue_600  transition-all duration-300"
                    :class=" openTab === 2  || ('{{request()->query('wallets')}}' && openTab === 0 && !(openTab === 1 || openTab === 3 || openTab === 4 )) ? 'bg-blue_600 rounded-[10px] text-white pointer-events-none' : 'text-blue_600 bg-blue_100 hover:text-white font-medium'">
                    Wallets
                </li>
                <li @click="openTab = 3" onclick="addNavKycQuery()" class=" base-text cursor-pointer base:p-3 p-2 base:px-7 px-4 rounded-[10px] hover:scale-105 hover:bg-blue_600  transition-all duration-300"
                    :class=" openTab === 3 || ('{{request()->query('kyc')}}' && openTab === 0 && !(openTab === 2 || openTab === 1 || openTab === 4 )) ? 'bg-blue_600 rounded-[10px] text-white pointer-events-none' : 'text-blue_600 bg-blue_100 hover:text-white font-medium'">
                    KYC
                </li>
                <li @click="openTab = 4" onclick="addNavPasswordQuery()" class=" base-text cursor-pointer base:p-3 p-2 base:px-7 px-4 rounded-[10px] hover:scale-105 hover:bg-blue_600  transition-all duration-300"
                    :class=" openTab === 4 || ('{{request()->query('password')}}' && openTab === 0 && !(openTab === 2 || openTab === 3 || openTab === 1 )) ? 'bg-blue_600 rounded-[10px] text-white pointer-events-none' : 'text-blue_600 bg-blue_100 hover:text-white font-medium'">
                    Password
                </li>
            </ul>
    
        </div>

        <div class=" mt-10 base:p-14 py-7 px-5 rounded-[15px] border ">
            <div class="" x-show="openTab === 1 || ('{{request()->query('profile')}}' && !(openTab === 2 || openTab === 3 || openTab === 4)) " id="profile"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" >
                <div class="transition duration-700 ease-out">
                    <h5 class=" base:text-lg text:md font-bold mb-5">Profile Information</h5>
                    
                    <main>
                        <div class="flex w-full base:gap-5 gap-3 base:mt-7 mt-4">
                            <div class="w-1/2 ">
                                <label >
                                    <span class="text-black_200 font-medium base-text">First name</span>
                                    <input wire:model = "firstName" placeholder="Enter first name" value="{{$firstName}}" class=" input"
                                    type="text" name="firstname" id="firstname">
                                </label>
                                @error('firstName')
                                    <span class="error text-sm text-failed ">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="w-1/2 ">
                                <label >
                                    <span class="text-black_200 font-medium base-text">Last name</span>
                                    <input wire:model = "lastName" placeholder="Enter last name" value="{{$lastName}}"
                                        class=" input" type="text" name="lastname" id="lastname">
                                </label>
                                @error('lastName')
                                    <span class="error text-sm text-failed ">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- email address --}}
                        <div class="w-full base:mt-7 mt-4">
                            <label class="w-full">
                                <span class="text-black_200 font-medium base-text">Email</span>
                                <input wire:model="email" placeholder="Enter email address" value="{{$email}}"
                                    class="input" type="text"
                                    name="email" id="email">
                            </label>
                            @error('email')
                                <span class="error text-sm text-failed ">{{$message}}</span>
                            @enderror
                        </div>

                        {{-- Phone number --}}
                        <div class="w-full base:mt-7 mt-4">
                            <label class="w-full">
                                <span class="text-black_200 font-medium base-text">Phone number</span>
                                <input wire:model = "phone" placeholder="Enter Phone number" value="{{$phone}}"
                                        class="input" type="text"
                                        name="phone" id="phone">
                            </label>
                            @error('phone')
                                <span class="error text-sm text-failed ">{{$message}}</span>
                            @enderror
                        </div>

                        {{-- Home address --}}
                        <div class="w-full base:mt-7 mt-4">
                            <label class="w-full">
                                <span class="text-black_200 font-medium base-text">Home Address</span>
                                <input wire:model="address" placeholder="Enter home address" value="{{$address}}"
                                        class="input" type="text"
                                        name="address" id="address">
                            </label>
                            @error('address')
                                <span class="error text-sm text-failed ">{{$message}}</span>
                            @enderror
                        </div>

                        {{-- country --}}
                        <div class="w-full base:mt-7 mt-4">
                            <label for='country' class="text-black_200 font-medium base-text">Country</label>
                            <select wire:model="country"
                                class=" div-input "
                                name="country" id="country">
                                <option value="">Select Country</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antartica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo">Congo, the Democratic Republic of the</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                <option value="Croatia">Croatia (Hrvatska)</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="France Metropolitan">France, Metropolitan</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                <option value="Holy See">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran (Islamic Republic of)</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic
                                    of
                                </option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon" selected>Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia, Federated States of</option>
                                <option value="Moldova">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint LUCIA">Saint LUCIA</option>
                                <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                <option value="Span">Spain</option>
                                <option value="SriLanka">Sri Lanka</option>
                                <option value="St. Helena">St. Helena</option>
                                <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands
                                </option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Viet Nam</option>
                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                            @error('country')
                                <span class="error text-sm text-failed ">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class=" mt-10 w-full flex justify-center items-center">
                            <x-button wire:click="updateProfile" class="w-[50%] ">Update Profile</x-button>
                        </div>
                    </main>
                </div>
            </div>
            {{-- wallet --}}
            <div class="" x-show="openTab === 2 || ('{{request()->query('wallets')}}' && !(openTab === 1 || openTab === 3 || openTab === 4))" id="wallets"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100">
                <div class="transition duration-700 ease-out">
                    <h5 class=" base:text-lg text:md font-bold">Wallet Address</h5>
                    <p class="base-text mt-2 ">Update your wallet address for crypto asset
                        withdrawal</p>
                    <main>

                        {{-- usdt address --}}
                        <div class="w-full base:mt-10 mt-7">
                            <label class="w-full">
                                <span class="text-black_200 font-medium base-text">USDT wallet address</span>
                                <input wire:model = "wallet.usdt" placeholder="Enter your USDT wallet address" value="{{$wallet['usdt']}}"
                                        class="input" type="text"
                                        name="usdt" id="usdt">
                            </label>
                        </div>

                        {{-- Bitcoin address --}}
                        <div class="w-full base:mt-7 mt-4">
                            <label class="w-full">
                                <span class="text-black_200 font-medium base-text">Bitcoin wallet address</span>
                                <input wire:model = "wallet.bitcoin" placeholder="Enter your bitcoin wallet address" value="{{$wallet['bitcoin']}}"
                                        class="input" type="text"
                                        name="bitcoin" id="bitcoin">
                            </label>
                        </div>

                        {{-- Eth --}}
                        <div class="w-full base:mt-7 mt-4">
                            <label class="w-full">
                                <span class="text-black_200 font-medium base-text">Ethereum wallet address</span>
                                <input wire:model = "wallet.ethereum" placeholder="Enter your ethereum wallet address" value="{{$wallet['ethereum']}}"
                                        class="input" type="text"
                                        name="ethereum" id="ethereum">
                            </label>
                        </div>

                        <div class=" mt-10 w-full flex justify-center items-center">
                            <x-button wire:click="updateWallet" class="w-[50%] ">Update Wallet</x-button>
                        </div>
                    </main>
                </div>
            </div>

            {{-- Kyc verification --}}
            <div class="" x-show="openTab === 3 || ('{{request()->query('kyc')}}' && !(openTab === 2 || openTab === 1 || openTab === 4))" id="kyc"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100" >
                <div class="transition duration-700 ease-out">
                    <div class=" w-full m-auto">

                        <div class="">
                            @livewire('multi-step')
                        </div>

                    </div>
                </div>
            </div>

            <div class="" x-show="openTab === 4 || ('{{request()->query('password')}}' && !(openTab === 2 || openTab === 3 || openTab === 1))" id="password"
                x-transition:enter="transition origin-bottom ease-out duration-500 delay-200"
                x-transition:enter-start="transform translate-y-2 opacity-0"
                x-transition:enter-end="transform translate-y-0 opacity-100">
                <div class="transition duration-700 ease-out">
                    <div class=" m-auto bg-primary-5 rounded-md" x-data="{show: false}">
                        <h4 class=" base:text-lg text:md font-bold">Change Password</h4>
                         <!-- Current Password Field -->
                        <div class="base:mt-7 mt-4" x-data="{ showCurrentPassword: false }">
                            <label class="block base-text text-black_200 font-medium" for="oldpassword">Current Password</label>
                            <div class="div-input input flex justify-between items-center">
                                <input wire:model="password.current" placeholder="Enter Current Password" value=""
                                    class="focus:border-none focus:outline-none w-[90%]"
                                    :type="showCurrentPassword ? 'text' : 'password'" name="oldpass" id="oldpass">
                                <div class="cursor-pointer relative top-[1px]">
                                    <img src="{{ asset('svg/Show.svg') }}" alt="show icon"
                                        :class="{ 'block': showCurrentPassword, 'hidden': !showCurrentPassword }"
                                        @click="showCurrentPassword = !showCurrentPassword">
                                    <img src="{{ asset('svg/Hide.svg') }}" alt="hide icon"
                                        :class="{ 'block': !showCurrentPassword, 'hidden': showCurrentPassword }"
                                        @click="showCurrentPassword = !showCurrentPassword">
                                </div>
                            </div>
                            @error('password.current')
                                <span class="error text-sm text-failed">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <!-- New Password Field -->
                        <div class="base:mt-7 mt-4" x-data="{ showNewPassword: false }">
                            <label class="block base-text text-black_200 font-medium" for="newpass">New Password</label>
                            <div class="div-input input flex justify-between items-center">
                                <input wire:model="password.new" placeholder="Enter New Password" value=""
                                    class="focus:border-none focus:outline-none w-[90%]"
                                    :type="showNewPassword ? 'text' : 'password'" name="newpass" id="newpass">
                                <div class="cursor-pointer relative top-[1px]">
                                    <img src="{{ asset('svg/Show.svg') }}" alt="show icon"
                                        :class="{ 'block': showNewPassword, 'hidden': !showNewPassword }"
                                        @click="showNewPassword = !showNewPassword">
                                    <img src="{{ asset('svg/Hide.svg') }}" alt="hide icon"
                                        :class="{ 'block': !showNewPassword, 'hidden': showNewPassword }"
                                        @click="showNewPassword = !showNewPassword">
                                </div>
                            </div>
                            @error('password.new')
                                <span class="error text-sm text-failed">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <!-- Confirm New Password Field -->
                        <div class="base:mt-7 mt-4" x-data="{ showConfirmPassword: false }">
                            <label class="block base-text text-black_200 font-medium" for="newpassconfirm">Retype New Password</label>
                            <div class="div-input input flex justify-between items-center">
                                <input wire:model="password.confirm" placeholder="Confirm New Password" value=""
                                    class="focus:border-none focus:outline-none w-[90%]"
                                    :type="showConfirmPassword ? 'text' : 'password'" name="newpassconfirm" id="newpassconfirm">
                                <div class="cursor-pointer relative top-[1px]">
                                    <img src="{{ asset('svg/Show.svg') }}" alt="show icon"
                                        :class="{ 'block': showConfirmPassword, 'hidden': !showConfirmPassword }"
                                        @click="showConfirmPassword = !showConfirmPassword">
                                    <img src="{{ asset('svg/Hide.svg') }}" alt="hide icon"
                                        :class="{ 'block': !showConfirmPassword, 'hidden': showConfirmPassword }"
                                        @click="showConfirmPassword = !showConfirmPassword">
                                </div>
                            </div>
                            @error('password.confirm')
                                <span class="error text-sm text-failed">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class=" mt-10 w-full flex justify-center items-center">
                            <x-button wire:click="updatePassword" class="w-[50%] ">Update Password</x-button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="" x-show="openTab === 5" id=""
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

        {{-- failed modal --}}
        <x-alert-modal wire:model='fail'>

            <x-slot name="close" >
                <img src="{{ asset('svg/close.svg') }}" alt="close" wire:click="$set('fail', false)" class="base:w-[6rem] w-[5rem]">
            </x-slot>
           
            <x-slot name="content">
                <img src="{{ asset('svg/wrong.svg') }}" alt="wrong" class="base:w-[4.5rem] w-[3.5rem]">
              <h3 class="base:my-6 my-3 font-bold font-['Poppins'] base:text-xl text-md tracking-tight"> Oops! </h3>
              <p class="base-text font-lg" > {{ $failure_message }}</p>
            </x-slot>
    
        </x-alert-modal>

        {{-- success modal --}}
        <x-alert-modal wire:model='updated'>

            <x-slot name="close" >
                <img src="{{ asset('svg/close.svg') }}" alt="close" wire:click="$set('updated', false)" class="base:w-[6rem] w-[5rem]">
            </x-slot>
               
            <x-slot name="content">
                <img src="{{ asset('svg/filled-check.svg') }}" alt="tick" class="base:w-[4.5rem] w-[3.5rem]">
                <h3 class="base:my-6 my-3 font-bold font-['Poppins'] base:text-xl text-md tracking-tight"> Updated Successfully! </h3>
                <p class="base-text font-lg" > {{ $updated_message }}</p>
            </x-slot>
        
        </x-alert-modal>

    </div>
</div>
