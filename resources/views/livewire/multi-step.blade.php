<div class=" ">
    @if ($step === 0)
        <div class="">
            <div class=" ">
                <h3 class=" base:text-lg text:md font-bold"> Identity Verification</h3>
                @if ($basic == false || $identity == false)
                <h5 class="base-text mt-3">To comply with regulation you will have to go through identity
                    verification.
                </h5>
                @else
                <h5 class="mt-3 mb-10 base:text-lg text:md text-neutral_800">
                    Verification process completed successfully! You now have access to all our features.
                </h5>
                @endif
            </div>
            <h5 class=" base-text text-center mb-5 base:mt-10 mt-7  text-gray-500 {{ $basic == false || $identity == false ? 'block' : 'hidden' }}"> Complete the verification steps below.</h5>

            <div class=" ">
                <div class="base:p-5 p-4 border mb-5 rounded-[15px]">
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class=" base:text-lg text:md font-semibold">Basic Information</h4>
                            <h5 class=" base:text-sm text-s text-black_200 mt-2">Your personal Information for identity</h5>
                        </div>

                        <img src="{{ asset('svg/Check-circle.svg') }}" alt="check" class="{{ $basic == false ? 'block' : 'hidden' }} base:w-[1.5rem] w-[1.15rem]">
                        <img src="{{ asset('svg/green_check.svg') }}" alt="check" class="{{ $basic == true ? 'block' : 'hidden' }} base:w-[1.5rem] w-[1.15rem]">
                    </div>
                </div>

                <div class="base:p-5 p-4 border rounded-[15px]">
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class=" base:text-lg text:md font-semibold">Identity Documents</h4>
                            <h5 class=" base:text-sm text-s text-black_200 mt-2">Submit proof of identity document</h5>
                        </div>

                        <img src="{{ asset('svg/Check-circle.svg') }}" alt="check" class="{{ $identity == false ? 'block' : 'hidden'}} base:w-[1.5rem] w-[1.15rem]">
                        <img src="{{ asset('svg/green_check.svg') }}" alt="check" class="{{ $identity == true ? 'block' : 'hidden'}} base:w-[1.5rem] w-[1.15rem]">
                    </div>
                </div>

                <div class=" mt-10 w-full flex justify-center items-center">
                    <x-button type="{{ $basic == false || $identity == false ? 'primary' : 'deactivated' }}"  wire:click="next" class="w-[50%] ">Proceed</x-button>
                </div>

            </div>
        </div>

    @elseif ($step === 1)
        <div class="">
            <div class=" ">
                <h3 class=" font-bold base:text-lg sm:text:md text-base text-black_800 flex w-full mb-3"> <span wire:click='previous' class="flex cursor-pointer text-black_400 base:mr-10 mr-5 hover:text-black_800 hover:scale-105">Identity Verificatiion <img src="{{ asset('svg/right-arrow.svg') }}" alt="navigation" class="base:pl-10 pl-5"> </span>  Basic Information </h3>
                <span class=" base-text text-black_400 mt-5 mb-7">Your personal information required for identification.</span>
            </div>
        
            <main>
                {{-- Name --}}
                    <div class="flex w-full gap-5 base:mt-7 mt-5">
                        <label class="w-1/2 ">
                            <span class="text-black_200 font-medium base-text">First name</span>
                            <input wire:model = "firstName" placeholder="Enter first name" value="{{$firstName}}" class=" input"
                            type="text" name="firstname" id="firstname">
                            @error('firstName')
                                <span class="error text-sm text-failed ">{{ $message }}</span>
                            @enderror
                        </label>
                        <label class="w-1/2 ">
                            <span class="text-black_200 font-medium base-text">Last name</span>
                            <input wire:model = "lastName" placeholder="Enter last name" value="{{$lastName}}"
                                class=" input" type="text" name="lastname" id="lastname">
                            @error('lastName')
                                <span class="error text-sm text-failed ">{{ $message }}</span>
                            @enderror
                        </label>
                    </div>

                    {{-- Date of birth --}}
                    <div class="w-full base:mt-7 mt-5">
                        <label class="w-full">
                            <span class="text-black_200 font-medium base-text">Date of birth</span>
                            <input wire:model="dob" placeholder="Enter date of birth" value="{{$dob}}"
                                    class="input" type="date"
                                    name="dob" id="dob">
                        </label>
                        @error('dob')
                            <span class="error text-sm text-failed ">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Gender --}}
                    <div class="w-full base:mt-7 mt-5">
                        <lebel for='gender' class="text-black_200 font-medium base-text">Gender</lebel>
                        <select wire:model="gender"
                            class=" div-input "
                            name="gender" id="gender">
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        @error('gender')
                            <span class="error text-sm text-failed ">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Nationality --}}
                    <div class="w-full base:mt-7 mt-5">
                        <lebel for='nationality' class="text-black_200 font-medium base-text">Nationality</lebel>
                        <select wire:model="nationality"
                            class=" div-input "
                            name="nationality" id="nationality">
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
                        @error('nationality')
                            <span class="error text-sm text-failed ">{{ $message }}</span>
                        @enderror
                    </div>

                     {{-- Phone number --}}
                     <div class="w-full base:mt-7 mt-5">
                        <label class="w-full">
                            <span class="text-black_200 font-medium base-text">Phone number</span>
                            <input wire:model = "phone" placeholder="Enter Phone number" value="{{$phone}}" class="input" type="tel" name="phone" id="phone">
                        </label>
                        @error('phone')
                            <span class="error text-sm text-failed ">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Home address --}}
                    <div class="w-full base:mt-7 mt-5">
                        <label class="w-full">
                            <span class="text-black_200 font-medium base-text">Home Address</span>
                            <input wire:model="address" placeholder="Enter home address" value="{{$address}}" class="input" type="text" name="address" id="address">
                        </label>
                        @error('address')
                            <span class="error text-sm text-failed ">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Country of residence --}}
                    <div class="w-full base:mt-7 mt-5">
                        <label for='residence' class="text-black_200 font-medium base-text">Country of residence</label>
                        <select wire:model="residence"
                            class=" div-input "
                            name="residence" id="residence">
                            <option value="">Select Country of residence</option>
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
                        @error('residence')
                            <span class="error text-sm text-failed ">{{ $message }}</span>
                        @enderror
                    </div>

            </main>

            <div class=" flex items-center text-gray-400 mt-5">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 6C12.5523 6 13 6.44772 13 7V13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13V7C11 6.44772 11.4477 6 12 6Z"
                        fill="currentColor" />
                    <path
                        d="M12 16C11.4477 16 11 16.4477 11 17C11 17.5523 11.4477 18 12 18C12.5523 18 13 17.5523 13 17C13 16.4477 12.5523 16 12 16Z"
                        fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12Z"
                        fill="currentColor" />
                </svg>
                <h5 class=" base:text-sm text-s text-gray-400 ml-3">Please carefully fill out the form with your personal details.
                </h5>
            </div>

            <div class=" mt-10 w-full flex justify-center items-center">
                <x-button wire:click="next" class="w-[50%] ">Proceed</x-button>
            </div>

            <div class=" base:mt-10 mt-5 w-full flex justify-center items-center">
                <x-button type='secondary' wire:click="previous" class="w-[50%] ">Back to previous</x-button>
            </div>
        </div>
    @elseif ($step === 2)
        <div class="">

            <div class=" ">
                <h3 class=" font-bold base:text-lg sm:text:md text-base text-black_800 flex w-full mb-3"> <span wire:click="$set('step', 0)" class="flex cursor-pointer text-black_400 base:mr-10 mr-5 hover:text-black_800 hover:scale-105">Identity Verification <img src="{{ asset('svg/right-arrow.svg') }}" alt="navigation" class="base:pl-10 pl-5"> </span>  Identity Documents </h3>
                <span class=" base-text text-black_800 my-5">Verify your identity using any of your following document.</span>
            </div>
           
            <div class=" mt-10">
                <h4 class="mb-5">Select Document Type</h4>
                <div class=" grid gap-8 mb-3">

                    <label for="passport" class="px-2 py-1 rounded cursor-pointer hover:scale-x-105 duration-300 transition-all" onclick="navigateToNextSection()" wire:click="clear">
                        <input type="radio" id="passport" wire:model="document" value="passport" class="hidden">
                        <div class="flex items-center w-full base:gap-6 gap-4">
                            <div class="">
                                <img src="{{ asset('svg/passport.svg') }}" alt="passport icon" >
                            </div>
                            <div class="base:w-[65%] w-[80%]">
                                <p class="font-semibold base:text-lg text-md mb-1">Passport</p>
                                <p class="base-text">Upload a government-issued passport for verification.</p>
                            </div>
                            <div class="base:w-[1.5rem] w-[1.3rem]">
                                <img src="{{ asset('svg/coin-active.svg') }}" alt="" class="{{ $document === 'passport' ? 'block' : 'hidden' }}">
                                <img src="{{ asset('svg/radio.svg') }}" alt="" class="{{ $document === 'passport' ? 'hidden' : 'block' }}">
                            </div>
                        </div>
                    </label>

                    <label for="national" class=" px-2 py-1 rounded cursor-pointer hover:scale-x-105 duration-300 transition-all" onclick="navigateToNextSection()" wire:click="clear">
                        <input type="radio" id="national" wire:model="document" value="national" class="hidden">
                        <div class="flex items-center w-full base:gap-6 gap-4">
                            <div class="">
                                <img src="{{ asset('svg/national-id.svg') }}" alt="national-id icon" >
                            </div>
                            <div class="base:w-[65%] w-[80%]">
                                <p class="font-semibold base:text-lg text-md mb-1">National ID</p>
                                <p class="base-text">Upload a government-issued ID for verification.</p>
                            </div>
                            <div class="base:w-[1.5rem] w-[1.3rem]">
                                <img src="{{ asset('svg/coin-active.svg') }}" alt="" class="{{ $document === 'national' ? 'block' : 'hidden' }}">
                                <img src="{{ asset('svg/radio.svg') }}" alt="" class="{{ $document === 'national' ? 'hidden' : 'block' }}">
                            </div>
                        </div>
                    </label>

                    <label for="driver" class=" px-2 py-1 rounded cursor-pointer hover:scale-x-105 duration-300 transition-all" onclick="navigateToNextSection()" wire:click="clear">
                        <input type="radio" id="driver" wire:model="document" value="driver" class="hidden">
                        <div class="flex items-center w-full base:gap-6 gap-4">
                            <div class="">
                                <img src="{{ asset('svg/license.svg') }}" alt="driver icon" >
                            </div>
                            <div class="base:w-[65%] w-[80%]">
                                <p class="font-semibold base:text-lg text-md mb-1">Driver's License</p>
                                <p class="base-text">Upload a government-issued driver's license for verification.</p>
                            </div>
                            <div class="base:w-[1.5rem] w-[1.3rem]">
                                <img src="{{ asset('svg/coin-active.svg') }}" alt="" class="{{ $document === 'driver' ? 'block' : 'hidden' }}">
                                <img src="{{ asset('svg/radio.svg') }}" alt="" class="{{ $document === 'driver' ? 'hidden' : 'block' }}">
                            </div>
                        </div>
                    </label>
                    
                    @error('document')
                        <span class="error text-sm text-failed ">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            @if ($document)
            <div class="w-full pt-5 mt-8" id="issued_by">
                <label for='issuedBy' class="text-black_200 font-medium base-text">Country Issued by</label>
                <select wire:model="issuedBy"
                    class=" div-input "
                    name="issuedBy" id="issuedBy">
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
                @error('issuedBy')
                    <span class="error base:text-sm text-s text-failed ">{{ $message }}</span>
                @enderror
            </div>

            <div class="w-full mt-7">
                <label class="w-full">
                    <span class="text-black_200 font-medium base-text">Document Number</span>
                    <input wire:model="documentNumber" placeholder="Enter Your Document Number" value=""
                        class="input" type="text" name="documentNumber" id="documentNumber">
                </label>
                @error('documentNumber')
                    <span class="error base:text-sm text-s text-failed ">{{ $message }}</span>
                @enderror
            </div>
            @endif

            <div class=" mt-10 w-full flex justify-center items-center">
                <x-button wire:click="next" class="w-[50%] ">Proceed</x-button>
            </div>

            <div class=" base:mt-10 mt-5 w-full flex justify-center items-center">
                <x-button type='secondary' wire:click="previous" class="w-[50%] ">Back to previous</x-button>
            </div>
        </div>
    @elseif ($step === 3)
        <div class="">
            <div class=" ">
                <h3 class=" font-bold base:text-lg text-base text-black_800 flex w-full mb-3"> <span wire:click="$set('step', 0)" class=" cursor-pointer text-black_400 base:mr-10 mr-5 base:flex hidden hover:text-black_800 hover:scale-105">Identity Verification <img src="{{ asset('svg/right-arrow.svg') }}" alt="navigation" class="base:pl-10 pl-5"> </span> <span wire:click='previous' class="flex cursor-pointer text-black_400 base:mr-10 mr-5 hover:text-black_800 hover:scale-105"> Identity Documents <img src="{{ asset('svg/right-arrow.svg') }}" alt="navigation" class="base:pl-10 pl-5"> </span> Upload Document </h3>
                <span class=" base-text text-black_400 my-6">To verify, please upload a copy of your {{ $document == "national" ? 'National Id' : ($document == 'passport' ? 'Passport' : "Driver's License") }}.</span>
            </div>
            <div class=" mt-8">
                <h5 class=" mb-3">To avoid delays when verifying account, please make sure of the below</h5>
                <ul class="">
                    <li>
                        <div class=" flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-check-circle">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <h5 class=" ml-3 base-text">Document should be good condition and clearly visible.</h5>
                        </div>
                    </li>

                    <li class=" mt-2">
                        <div class=" flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-check-circle">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <h5 class=" ml-3 base-text">Make sure that there is no light glare on the image.</h5>
                        </div>
                    </li>
                </ul>

                <div class=" mt-5">
                    {{-- <h5 class=" font-semibold text-lg">{{ $document == "national" ? 'National Id' : ($document == 'passport' ? 'Passport' : "Driver's License") }}</h5> --}}
                    <form wire:submit.prevent="save" enctype="multipart/form-data">
                        <div class="">
                            <div class="">
                                <div class="w-full flex justify-center items-center flex-col">
                                    @if ($front)
                                        <span class="font-semibold base:text-lg text-base mt-5 mb-3">Front Preview:</span>
                                        <img class="mb-4 w-fit h-[13rem] rounded-2xl object-contain border-[3px] border-blue_600" src="{{ $front->temporaryUrl() }}">
                                        <label for="front" class=""><span class=" text-neutral_800 underline font-bold cursor-pointer base-text">Upload a different file</span></label>
                                        <input type="file" name="front" id="front" wire:model="front" class="hidden">
                                        <div class=" mt-2 base-text" wire:loading wire:target="front">Uploading...</div>
                                    @else
                                    <h4 class=" font-semibold base:text-lg text-base my-5">{{ $document == "national" ? 'National Id' : ($document == 'passport' ? 'Passport' : "Driver's License") }} (Document Front)</h4>
                                    <label for="front" class="rounded-[8px] border-2 border-dashed border-black bg-[#F5F5F5] w-full h-[12.5rem] flex justify-center items-center "><span class=" text-neutral_800 underline font-bold cursor-pointer base-text">Upload file</span></label>
                                    <input type="file" name="front" id="front" wire:model="front" class="hidden">
                                    <div class=" mt-2 base-text" wire:loading wire:target="front">Uploading...</div>
                                    @endif
                                    @error('front')
                                        <span class=" base:text-sm text-s w-full text-failed">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            @if ( $document == "national" ||  $document == 'driver')
                            <div class="">
                                <div class="w-full flex justify-center items-center flex-col mt-3">
                                    @if ($back)
                                        <span class="font-semibold base:text-lg text-base my-5">Back Preview:</span>
                                        <img class="mb-4 w-fit h-[13rem] rounded-2xl object-contain border-[3px] border-blue_600" src="{{ $back->temporaryUrl() }}">
                                        <label for="back" class=""><span class=" text-neutral_800 underline font-bold cursor-pointer base-text">Upload a different file</span></label>
                                        <input type="file" name="back" id="back" wire:model="back" class="hidden">
                                        <div class=" mt-2 base-text" wire:loading wire:target="back">Uploading...</div>
                                    @else
                                    <h4 class=" font-semibold base:text-lg text-base mt-5 mb-3">{{ $document == "national" ? 'National Id' : ($document == 'passport' ? 'Passport' : "Driver's License") }} (Document back)</h4>
                                    <label for="back" class="rounded-[8px] border-2 border-dotted border-black bg-[#F5F5F5] w-full h-[12.5rem] flex justify-center items-center "><span class=" text-neutral_800 underline font-bold cursor-pointer base-text">Upload file</span></label>
                                    <input type="file" name="back" id="back" wire:model="back" class="hidden">
                                    <div class=" mt-2 base-text" wire:loading wire:target="back">Uploading...</div>
                                    @endif
                                    @error('back')
                                        <span class=" base:text-sm text-s w-full text-failed">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            @endif
                        </div>
                    </form>

                </div>
            </div>
            <div class=" mt-10 w-full flex justify-center items-center">
                <x-button wire:click="next" class="w-[50%] ">Proceed</x-button>
            </div>

            <div class=" base:mt-10 mt-5 w-full flex justify-center items-center">
                <x-button type='secondary' wire:click="previous" class="w-[50%] ">Back to previous</x-button>
            </div>
        </div>
    @elseif ($step === 4)
        <div class="">
            <h5 class=" base:text-lg text-md text-gray-600 font-semibold"> Basic Information</h5>
            <div class=" mt-3">
                <div class="">
                    <div class=" flex items-center py-4 whitespace-nowrap border-b border-gray-300 justify-between">
                        <h5 class="base-text">Fullname</h5>
                        <h5 class="base-text font-semibold">{{ $firstName . ' ' . $lastName }}</h5>
                    </div>

                    <div class=" flex items-center py-4 whitespace-nowrap border-b border-gray-300 justify-between">
                        <h5 class="base-text">Phone</h5>
                        <h5 class="base-text font-semibold">{{ $phone }}</h5>
                    </div>

                    <div class=" flex items-center py-4 whitespace-nowrap border-b border-gray-300 justify-between">
                        <h5 class="base-text">Date of Birth</h5>
                        <h5 class="base-text font-semibold">{{ $dob }}</h5>
                    </div>

                    <div class=" flex items-center py-4 whitespace-nowrap border-b border-gray-300 justify-between">
                        <h5 class="base-text">Gender</h5>
                        <h5 class="base-text font-semibold">{{ $gender }}</h5>
                    </div>

                    <div class=" flex items-center py-4 whitespace-nowrap border-b border-gray-300 justify-between">
                        <h5 class="base-text">Nationality</h5>
                        <h5 class="base-text font-semibold">{{ $nationality }}</h5>
                    </div>

                    <div class=" flex items-center py-4 whitespace-nowrap border-b border-gray-300 justify-between">
                        <h5 class="base-text">Country of
                            Residence
                        </h5>
                        <h5 class="base-text font-semibold">{{ $residence }}</h5>
                    </div>
                </div>
            </div>

            <div class=" mt-8">
                <h5 class="  base:text-lg text-md mt-3 text-gray-600 font-semibold">Uploaded Documents</h5>
                <div class="">
                    <div class="">
                        <div class="mt-6">
                            <img class="mb-2 w-fit h-[13rem] rounded-2xl object-contain border-[3px] border-blue_600" src="{{ $front?->temporaryUrl() }}" alt="">
                        </div>
                        <h5 class=" text-sm capitalize">{{ $document == "national" ? 'National Id' : ($document == 'passport' ? 'Passport' : "Driver's License") }} / Front</h5>
                    </div>

                   @if ( $document == "national" ||  $document == 'driver')
                        <div class="">
                            <div class="mt-6">
                                <img class="mb-2 w-fit h-[13rem] rounded-2xl object-contain border-[3px] border-blue_600" src="{{ $back?->temporaryUrl() }}" alt="">
                            </div>
                            <h5 class=" text-sm capitalize">{{ $document == "national" ? 'National Id' : ($document == 'passport' ? 'Passport' : "Driver's License") }} / Back</h5>
                        </div>
                   @endif
                </div>
            </div>

            <div class=" mt-10 w-full flex justify-center items-center">
                <x-button wire:click="next" class="w-[50%] ">Proceed</x-button>
            </div>

            <div class=" base:mt-10 mt-5 w-full flex justify-center items-center">
                <x-button type='secondary' wire:click="previous" class="w-[50%] ">Back to previous</x-button>
            </div>
        </div>
    @endif
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            Dropzone.options.myDropzone = {
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                // Configuration options go here
            };
        })

        function navigateToNextSection() {
           setTimeout(() => {
            window.location.href = '#issued_by';
           }, 750); 
        }
    </script>
@endpush
