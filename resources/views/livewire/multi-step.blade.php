<div class=" font-cabinet">
    @if ($step === 0)
        <div class="">
            <h5 class=" text-base text-center mt-3 text-gray-500"> Complete the verification steps below.</h5>

            <div class=" border borde-gray-300 mt-3 rounded-md bg-primary-50">
                <div class="p-3 border-b borde-gray-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class=" text-lg font-semibold">Basic Information</h4>
                            <h5 class=" text-sm text-gray-400">Your personal Information for identity</h5>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>

                <div class="p-3 bg-primary-50">
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class=" text-lg font-semibold">Identity Documents</h4>
                            <h5 class=" text-sm text-gray-400">Submit proof of identity document</h5>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    @elseif ($step === 1)
        <div class=" px-5">
            <h5 class=" text-lg mt-3 text-gray-600 font-semibold"> Basic Information</h5>
            <h5 class=" text-base text-gray-400">Your personal information required for identification.</h5>
            <div>
                <div class="md:grid grid-cols-2 gap-12">
                    <div class="mt-5 ">
                        <label class=" block" for="firstName">First Name</label>
                        <input placeholder="Enter Your First Name" value="" wire:model="firstName"
                            class=" pl-0 text-sm text-gray-400 placeholder-gray-300 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                            type="text" name="firstName" id="firstName">
                        @error('firstName')
                            <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5 ">
                        <label class=" block" for="lastName">Last Name</label>
                        <input wire:model="lastName" placeholder="Enter Your Date Of Birth" value=""
                            class=" pl-0 text-sm text-gray-400 placeholder-gray-300 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                            type="text" name="lastName" id="lastName">
                        @error('lastName')
                            <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="md:grid grid-cols-2 gap-12">
                    <div class="mt-5 ">
                        <label class=" block" for="fullname">Phone Number</label>
                        <input placeholder="Enter Your Phone Number" value="" wire:model="phone"
                            class=" pl-0 text-sm text-gray-400 placeholder-gray-300 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                            type="tel" name="phone" id="phone">
                        @error('phone')
                            <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5 ">
                        <label class=" block" for="dob">Date Of Birth</label>
                        <input wire:model="dob" placeholder="Enter Your Date Of Birth" value=""
                            class=" pl-0 text-sm text-gray-400 placeholder-gray-300 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                            type="text" name="dob" id="dob">
                        @error('dob')
                            <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="md:grid grid-cols-2 gap-12">
                    <div class="mt-5 ">
                        <label class=" block" for="gender">Gender</label>
                        <select wire:model="gender"
                            class=" font-roboto pl- rounded-none text-sm text-gray-400 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                            name="gender" id="gender">
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        @error('gender')
                            <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5 ">
                        <label class=" block" for="nationality">Nationality</label>
                        <select wire:model="nationality"
                            class=" font-roboto pl- rounded-none text-sm text-gray-400 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
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
                            <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                        @enderror

                    </div>
                </div>

                <div class="md:grid grid-cols-2 gap-12">
                    <div class="mt-5 ">
                        <label class=" block" for="address">Address</label>
                        <input wire:model="address" placeholder="Enter Your Address" value=""
                            class=" pl-0 text-sm text-gray-400 placeholder-gray-300 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                            type="text" name="address" id="address">
                        @error('address')
                            <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-5">
                        <label class=" block" for="residence">Country of Residence</label>
                        <select wire:model="residence"
                            class=" font-roboto pl- rounded-none text-sm text-gray-400 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                            name="residence" id="residence">
                            <option value="">Select Residence</option>
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
                            <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                {{-- <div class=" flex flex-wrap mt-5">
                    <div class="basis-1/2 py-3">
                        <h5 class=" text-sm text-gray-400">Full Name</h5>
                        <h5 class=" text-base">Doyin Chokupo</h5>
                    </div>

                    <div class="basis-1/2 py-3">
                        <h5 class=" text-sm text-gray-400">Phone</h5>
                        <h5 class=" text-base">+1474558744</h5>
                    </div>

                    <div class="basis-1/2 py-3">
                        <h5 class=" text-sm text-gray-400">Date of Birth</h5>
                        <h5 class=" text-base">05/23/21</h5>
                    </div>

                    <div class="basis-1/2 py-3">
                        <h5 class=" text-sm text-gray-400">Gender</h5>
                        <h5 class=" text-base">Male</h5>
                    </div>

                    <div class="basis-1/2 py-3">
                        <h5 class=" text-sm text-gray-400">Nationality</h5>
                        <h5 class=" text-base">USA</h5>
                    </div>

                    <div class="basis-1/2 py-3">
                        <h5 class=" text-sm text-gray-400">Country of Residence</h5>
                        <h5 class=" text-base">United States of America</h5>
                    </div>
                </div> --}}

            </div>

            {{-- <div class=" border borde-gray-300 mt-3 rounded-md bg-primary-50">
                <div class="p-3 border-b borde-gray-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class=" text-lg font-semibold"></h4>
                            <h5 class=" text-sm text-gray-400">Your personal Information for identity</h5>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>

                <div class="p-3 bg-primary-50">
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class=" text-lg font-semibold">Identity Documents</h4>
                            <h5 class=" text-sm text-gray-400">Submit proof of identity document</h5>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div> --}}
            <div class=" flex items-center text-gray-400 mt-5">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
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
                <h5 class=" text-sm text-gray-400 ml-3">Please carefully fill out the form with your personal details.
                </h5>
            </div>
        </div>
    @elseif ($step === 2)
        <div class="">

            <h5 class=" text-lg mt-3 text-gray-600 font-semibold">Identity Document</h5>
            <h5 class=" text-base text-gray-400">Verify your identity using any of your following document.</h5>

            <div class=" mt-5">
                <h5 class="">Select Document Type</h5>
                <div class="  mt-2">
                    <ul class="flex flex-wrap ">
                        <li class=" flex-grow p-3">
                            <input type="radio" wire:model="document" id="passport" value="passport"
                                class=" absolute h-0 w-0 opacity-0">
                            <label for="passport" class=" border border-gray-300 rounded-md p-3 block cursor-pointer">
                                <div class=" flex items-center justify-between text-gray-500">
                                    <div class=" ">
                                        <?xml version="1.0" standalone="no"?>
                                        <!DOCTYPE svg
                                            PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                                        <svg class=" inline mr-3" version="1.0" xmlns="http://www.w3.org/2000/svg"
                                            width="25" height="25" viewBox="0 0 512.000000 512.000000"
                                            preserveAspectRatio="xMidYMid meet">

                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                fill="currentColor" stroke="none">
                                                <path
                                                    d="M2525 5102 c-107 -38 -188 -117 -222 -217 -8 -25 -54 -192 -102 -373
l-88 -327 -939 -5 -939 -5 -35 -22 c-20 -12 -46 -40 -58 -62 l-22 -39 2 -1804
3 -1803 24 -34 c13 -18 42 -42 65 -52 39 -18 88 -19 1064 -19 l1023 0 617
-166 c339 -91 642 -168 673 -171 42 -4 76 0 129 16 62 19 81 31 135 84 46 45
68 77 83 117 11 30 255 932 542 2005 515 1921 522 1951 517 2025 -2 45 -13 94
-26 123 -29 67 -113 148 -181 175 -30 12 -512 144 -1070 293 -711 191 -1034
274 -1080 276 -45 2 -81 -2 -115 -15z m1159 -432 c556 -149 1023 -275 1038
-281 41 -17 96 -82 104 -125 4 -20 2 -58 -4 -83 -6 -25 -243 -912 -526 -1970
-312 -1162 -524 -1937 -537 -1958 -27 -43 -85 -73 -142 -73 -39 0 -632 152
-645 165 -3 3 4 5 15 5 37 0 142 61 179 103 46 54 69 99 83 165 7 36 11 273
11 753 0 662 1 700 18 695 66 -20 71 -19 78 11 4 15 24 90 44 166 25 94 34
140 26 143 -6 2 -42 13 -80 24 -54 15 -72 17 -78 7 -4 -6 -8 295 -8 671 0 500
3 682 11 682 7 0 46 -10 89 -21 l77 -21 103 -339 104 -338 68 -17 c38 -9 70
-15 72 -13 2 2 0 139 -3 304 -4 165 -6 303 -4 306 1 4 40 -4 85 -16 46 -13
102 -28 125 -34 40 -11 45 -17 98 -110 53 -94 58 -99 101 -111 24 -7 46 -11
48 -9 2 2 0 64 -5 137 l-9 133 70 104 c38 57 71 109 72 115 2 7 -17 18 -41 25
l-43 14 -99 -59 -98 -58 -122 33 c-67 19 -123 36 -126 38 -2 3 66 119 152 260
85 140 155 260 155 265 0 7 -110 42 -134 42 -3 0 -121 -108 -262 -240 -145
-136 -263 -239 -271 -236 -7 3 -67 20 -133 37 -118 31 -122 34 -152 75 -33 46
-95 95 -155 122 -33 15 -86 18 -389 22 l-350 5 86 320 c47 176 94 334 103 352
27 50 82 83 141 83 34 0 381 -89 1060 -270z m-699 -682 c39 -21 71 -56 84 -91
8 -20 11 -522 11 -1638 0 -1337 -2 -1615 -14 -1642 -17 -42 -66 -83 -114 -97
-25 -6 -478 -10 -1349 -10 l-1313 0 0 1750 0 1750 1333 -2 c1217 -3 1335 -4
1362 -20z" />
                                                <path
                                                    d="M3395 2828 c-14 -46 -35 -128 -35 -141 0 -10 25 -21 80 -35 l80 -20
11 42 c6 22 15 58 21 79 7 23 8 41 2 46 -8 7 -131 41 -149 41 -3 0 -7 -6 -10
-12z" />
                                                <path
                                                    d="M3725 2738 c-8 -24 -35 -136 -35 -145 0 -13 150 -47 159 -37 9 11 41
124 41 145 0 11 -22 21 -72 32 -87 20 -87 20 -93 5z" />
                                                <path
                                                    d="M4040 2588 c-12 -44 -18 -84 -13 -88 9 -9 153 -44 157 -39 8 12 42
160 37 164 -4 2 -41 12 -83 23 l-76 20 -22 -80z" />
                                                <path
                                                    d="M3730 2125 c-24 -91 -41 -167 -39 -168 11 -9 160 -43 163 -38 10 16
87 324 82 328 -6 6 -136 43 -152 43 -6 0 -30 -74 -54 -165z" />
                                                <path
                                                    d="M3437 1033 c-116 -433 -154 -589 -145 -594 18 -12 148 -42 154 -37 5
5 314 1154 314 1168 0 4 -30 15 -67 24 -38 9 -75 19 -83 21 -13 4 -45 -106
-173 -582z" />
                                                <path
                                                    d="M1590 3649 c-470 -41 -852 -396 -935 -869 -70 -398 113 -819 453
-1043 95 -62 140 -84 258 -123 260 -85 530 -66 779 56 278 135 473 374 558
684 19 70 22 106 22 256 -1 182 -8 228 -56 360 -163 444 -603 721 -1079 679z
m144 -207 c61 -97 143 -303 161 -404 l7 -38 -216 0 c-119 0 -216 2 -216 5 0 3
9 39 21 81 36 132 80 238 146 352 33 56 63 57 97 4z m-315 -44 c-30 -59 -93
-238 -114 -325 l-17 -73 -189 0 -188 0 21 38 c63 107 175 227 279 296 50 33
202 106 222 106 4 0 -2 -19 -14 -42z m662 -18 c138 -68 286 -207 354 -332 l26
-48 -189 0 -189 0 -13 63 c-15 70 -68 230 -105 313 -14 31 -25 58 -25 60 0 6
78 -25 141 -56z m-826 -770 l0 -220 -206 0 -206 0 -12 70 c-20 112 -11 317 16
363 2 4 95 7 206 7 l202 0 0 -220z m689 114 c5 -56 5 -154 1 -218 l-7 -116
-248 0 -247 0 -7 31 c-8 41 -8 337 0 378 l7 31 246 -2 246 -3 9 -101z m597 49
c17 -76 17 -253 0 -325 l-12 -58 -207 0 -207 0 0 220 0 220 207 0 207 0 12
-57z m-1241 -605 c21 -91 60 -210 97 -296 19 -46 33 -85 30 -88 -10 -10 -145
53 -219 102 -40 27 -101 76 -134 110 -62 62 -154 188 -154 211 0 10 43 13 184
13 l184 0 12 -52z m595 15 c-14 -77 -77 -250 -127 -346 -50 -94 -53 -98 -82
-95 -28 3 -36 12 -82 102 -45 86 -110 260 -130 349 l-6 27 217 0 217 0 -7 -37z
m565 33 c0 -11 -47 -85 -86 -137 -61 -80 -155 -163 -242 -214 -72 -43 -181
-90 -188 -82 -2 2 14 43 35 93 36 83 91 254 91 281 0 6 4 23 10 37 l10 26 185
0 c102 0 185 -2 185 -4z" />
                                                <path
                                                    d="M814 1027 c-3 -8 -4 -47 -2 -88 l3 -74 873 -3 872 -2 0 90 0 90 -870
0 c-720 0 -872 -2 -876 -13z" />
                                            </g>
                                        </svg>

                                        <h5 class=" text-sm inline-block">Passport</h5>
                                    </div>

                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </label>
                        </li>
                        <li class="basis-1/2 p-3">
                            <input type="radio" wire:model="document" id="national" value="national"
                                class=" absolute h-0 w-0 opacity-0">
                            <label for="national" class=" border border-gray-300 rounded-md p-3 block cursor-pointer">
                                <div class=" flex items-center justify-between text-gray-500">
                                    <div class=" ">
                                        <?xml version="1.0" standalone="no"?>
                                        <!DOCTYPE svg
                                            PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                                        <svg class=" inline mr-3" version="1.0" xmlns="http://www.w3.org/2000/svg"
                                            width="25" height="25" viewBox="0 0 512.000000 512.000000"
                                            preserveAspectRatio="xMidYMid meet">

                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                fill="currentColor" stroke="none">
                                                <path
                                                    d="M345 4396 c-84 -21 -147 -57 -211 -121 -65 -65 -105 -136 -123 -223
-16 -76 -16 -2910 0 -2984 37 -172 175 -310 347 -347 75 -16 4328 -16 4404 0
170 36 311 178 347 347 16 76 16 2910 0 2984 -37 172 -176 311 -347 347 -81
17 -4349 14 -4417 -3z m4395 -306 c26 -13 47 -34 60 -60 20 -39 20 -56 20
-1470 0 -1414 0 -1431 -20 -1470 -13 -26 -34 -47 -60 -60 -39 -20 -54 -20
-2181 -20 l-2141 0 -40 22 c-24 14 -48 38 -59 60 -18 36 -19 82 -19 1470 1
1361 2 1435 19 1467 10 18 35 44 57 57 l39 24 2143 0 c2128 0 2143 0 2182 -20z" />
                                                <path
                                                    d="M1345 3800 c-198 -44 -352 -180 -417 -368 -18 -53 -23 -89 -23 -172
0 -124 23 -202 85 -299 l39 -61 -58 -39 c-76 -52 -169 -144 -218 -217 -102
-150 -142 -279 -150 -474 -5 -125 -4 -139 16 -178 14 -28 34 -48 61 -62 38
-20 57 -20 770 -20 713 0 732 0 770 20 27 14 47 34 61 62 20 39 21 53 16 178
-7 194 -48 324 -148 471 -50 75 -143 167 -217 218 l-61 41 40 62 c59 92 84
182 84 303 0 77 -6 115 -23 167 -56 164 -183 291 -348 349 -67 23 -215 33
-279 19z m190 -307 c92 -31 165 -134 165 -233 0 -132 -118 -250 -250 -250 -60
0 -130 30 -175 75 -98 98 -98 252 0 350 69 70 164 91 260 58z m89 -812 c199
-70 321 -216 370 -443 l6 -28 -550 0 -549 0 5 33 c49 282 289 477 569 463 55
-3 113 -13 149 -25z" />
                                                <path
                                                    d="M2698 3789 c-43 -22 -78 -81 -78 -129 0 -50 35 -107 80 -130 38 -20
57 -20 870 -20 813 0 832 0 870 20 45 23 80 80 80 130 0 50 -35 107 -80 130
-38 20 -57 20 -872 20 -810 -1 -834 -1 -870 -21z" />
                                                <path
                                                    d="M2698 3189 c-43 -22 -78 -81 -78 -129 0 -50 35 -107 80 -130 38 -20
57 -20 870 -20 813 0 832 0 870 20 45 23 80 80 80 130 0 50 -35 107 -80 130
-38 20 -57 20 -872 20 -810 -1 -834 -1 -870 -21z" />
                                                <path
                                                    d="M3498 2389 c-23 -12 -46 -35 -58 -59 -19 -37 -20 -58 -20 -470 0
-412 1 -433 20 -470 13 -26 34 -47 60 -60 37 -19 58 -20 470 -20 412 0 433 1
470 20 26 13 47 34 60 60 19 37 20 58 20 470 0 412 -1 433 -20 470 -13 26 -34
47 -60 60 -38 19 -58 20 -472 20 -411 -1 -435 -2 -470 -21z m722 -529 l0 -250
-250 0 -250 0 0 250 0 250 250 0 250 0 0 -250z" />
                                                <path
                                                    d="M678 1589 c-43 -22 -78 -81 -78 -129 0 -50 35 -107 80 -130 38 -20
57 -20 770 -20 713 0 732 0 770 20 45 23 80 80 80 130 0 50 -35 107 -80 130
-38 20 -57 20 -772 20 -710 -1 -734 -2 -770 -21z" />
                                            </g>
                                        </svg>

                                        <h5 class=" text-sm inline-block">National ID</h5>
                                    </div>

                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </label>
                        </li>
                        <li class=" flex-grow p-3">
                            <input type="radio" wire:model="document" id="driver" value="driver"
                                class=" absolute h-0 w-0 opacity-0">
                            <label for="driver" class=" border border-gray-300 rounded-md p-3 block cursor-pointer">
                                <div class=" flex items-center justify-between text-gray-500">
                                    <div class=" ">
                                        <?xml version="1.0" standalone="no"?>
                                        <!DOCTYPE svg
                                            PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                                        <svg class=" inline mr-3" version="1.0" xmlns="http://www.w3.org/2000/svg"
                                            width="25" height="25" viewBox="0 0 512.000000 512.000000"
                                            preserveAspectRatio="xMidYMid meet">

                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                fill="currentColor" stroke="none">
                                                <path
                                                    d="M510 4294 c-180 -38 -357 -177 -439 -344 -74 -151 -71 -88 -71 -1390
0 -1302 -3 -1239 71 -1390 83 -169 260 -307 444 -345 105 -22 3985 -22 4090 0
240 50 450 260 500 500 22 105 22 2365 0 2470 -50 240 -260 450 -500 500 -102
21 -3995 21 -4095 -1z m4101 -315 c79 -37 133 -90 171 -167 l33 -67 0 -1185 0
-1185 -33 -67 c-38 -77 -92 -130 -171 -167 l-56 -26 -1995 0 -1995 0 -55 26
c-82 39 -135 90 -172 167 l-33 67 0 1185 0 1185 26 55 c46 99 120 164 222 196
34 10 404 12 2022 11 l1980 -2 56 -26z" />
                                                <path
                                                    d="M1101 3398 c-5 -13 -70 -153 -145 -313 -126 -270 -137 -290 -172
-308 -20 -10 -55 -37 -78 -61 -78 -77 -106 -168 -106 -341 0 -175 25 -257 102
-341 37 -40 144 -104 175 -104 10 0 13 -30 13 -140 l0 -140 150 0 150 0 0 135
0 135 445 0 445 0 0 -135 0 -135 150 0 150 0 0 138 0 137 50 18 c100 35 188
126 216 223 12 43 15 92 12 232 -3 169 -4 179 -30 227 -32 62 -94 128 -145
154 -36 18 -45 34 -182 330 l-144 311 -524 0 -523 0 -9 -22z m928 -415 c35
-75 65 -143 68 -150 4 -11 -81 -13 -461 -13 -256 0 -466 3 -466 8 0 4 30 71
67 150 l66 142 332 0 331 0 63 -137z m319 -475 c8 -8 12 -54 12 -140 0 -116
-2 -128 -19 -138 -13 -6 -253 -10 -708 -10 -579 0 -692 2 -709 14 -16 12 -19
29 -22 126 -3 89 -1 116 12 135 l16 25 703 0 c533 0 706 -3 715 -12z" />
                                                <path
                                                    d="M2984 3317 c-2 -7 -3 -76 -2 -152 l3 -140 760 0 760 0 0 150 0 150
-758 3 c-615 2 -759 0 -763 -11z" />
                                                <path
                                                    d="M2984 2697 c-2 -7 -3 -76 -2 -152 l3 -140 510 0 510 0 0 150 0 150
-508 3 c-410 2 -509 0 -513 -11z" />
                                                <path
                                                    d="M2984 2087 c-2 -7 -3 -76 -2 -152 l3 -140 760 0 760 0 0 150 0 150
-758 3 c-615 2 -759 0 -763 -11z" />
                                            </g>
                                        </svg>

                                        <h5 class=" text-sm inline-block">Driver's license</h5>
                                    </div>

                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </label>
                        </li>
                    </ul>
                    @error('document')
                        <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class=" mt-5">
                <label class=" mb-3" for="issuedBy">Issued by Country</label>
                <select wire:model="issuedBy"
                    class=" font-roboto pl- rounded-none text-sm text-gray-400 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                    name="issuedBy" id="issuedBy">
                    <option value="">Select Issuer Country</option>
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
                    <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-5">
                <label class=" block" for="fullname">Document Number</label>
                <input wire:model="documentNumber" placeholder="Enter Your Document Number" value=""
                    class=" pl-0 text-sm text-gray-400 placeholder-gray-300 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                    type="text" name="fullname" id="fullname">
                @error('documentNumber')
                    <span class="error text-sm text-red-500 font-roboto">{{ $message }}</span>
                @enderror
            </div>

        </div>
    @elseif ($step === 3)
        <div class=" px-5">
            <h5 class=" text-lg mt-3 text-gray-600 font-semibold"> Upload Document</h5>
            <h5 class=" text-base text-gray-400">To verify, please upload a copy of your National ID.</h5>
            <div class=" mt-5">
                <h5 class=" mb-3">To avoid delays when verifying account, please make sure below</h5>
                <ul class=" text-gray-500">
                    <li>
                        <div class=" flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-check-circle">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <h5 class=" ml-3 text-sm">Document should be good condition and clearly visible.</h5>
                        </div>
                    </li>

                    <li class=" mt-2">
                        <div class=" flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-check-circle">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <h5 class=" ml-3 text-sm">Make sure that there is no light glare on the image.</h5>
                        </div>
                    </li>
                </ul>

                <div class=" mt-5">
                    <h5 class=" font-semibold">National ID</h5>
                    <form wire:submit.prevent="save" enctype="multipart/form-data">
                        <div class="md:fle">
                            <div class="flex-grow p-5">
                                {{-- <div class="">
                                    <label
                                        class="fre w-full h-32 border border-gray-200 p-10 rounded-sm cursor-pointer block text-center text-gray-500"
                                        for="front">
                                        <div class="droparea">Drop File here OR Select</div>
                                        <input class="frontId opacity-0 absolute top-0 left-0 w-full " id="front" type="file"
                                            name="front">
                                    </label>
                                    <p id="filename"></p>
                                </div> --}}
                                {{-- <form action="/file-upload" class="dropzone" id="dropzone"></form> --}}
                                {{-- <form action="/file-upload" class="dropzone" id="dropzone">
                                    <div class="dz-default dz-message">
                                        <span class=" block text-gray-400 text-center text-sm">Drop file here</span>
                                        <span class=" mt-1 block text-gray-400 text-center">OR</span>
                                        <button type="button"
                                            class=" mt-1 bg-gray-200 rounded-sm text-sm p-[5px]">Select</button>
                                    </div>
                                </form> --}}
                                <div>
                                    @if ($front)
                                        Front Preview:
                                        <img class=" mb-4 w-40 h-40 rounded-2xl object-cover border-[3px] border-yellow-500"
                                            src="{{ $front->temporaryUrl() }}">
                                    @endif
                                    <input type="file" name="front" id="front" wire:model="front">
                                    <div class=" mt-2" wire:loading wire:target="front">Uploading...</div>
                                    @error('front')
                                        <span class=" text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <h5 class=" text-sm mt-3 text-gray-500 italic">Front</h5>
                            </div>
                            <div class="flex-grow p-5">
                                {{-- <div class="">
                                    <label
                                        class="fre w-full h-32 border border-gray-200 p-10 rounded-sm cursor-pointer block text-center text-gray-500"
                                        for="back">
                                        <div class="droparea">Drop File here OR Select</div>
                                        <input class="frontId opacity-0 absolute top-0 left-0 w-full " id="back" type="file"
                                            name="">
                                    </label>
                                    <p id="filename"></p>
                                </div> --}}

                                {{-- <form action="/file-upload" class="dropzone" id="dropzone2">
                                    <div class="dz-default dz-message">
                                        <span class=" block text-gray-400 text-center text-sm">Drop file here</span>
                                        <span class=" block text-gray-400 text-center mt-1">OR</span>
                                        <button type="button"
                                            class=" mt-1 bg-gray-200 rounded-sm text-sm p-[5px]">Select</button>
                                    </div>
                                </form> --}}
                                <div>
                                    @if ($back)
                                        Back Preview:
                                        <img class="mb-4 w-40 h-40 rounded-2xl object-cover border-[3px] border-yellow-500" src="{{ $back->temporaryUrl() }}">
                                    @endif
                                    <input type="file" name="back" id="back" wire:model="back">
                                    <div class=" mt-2" wire:loading wire:target="back">Uploading...</div>
                                    @error('back')
                                        <span class=" text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <h5 class=" text-sm mt-3 text-gray-500 italic">Back</h5>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    @elseif ($step === 4)
        <div class=" px-5">
            <h5 class=" text-lg mt-3 text-gray-600 font-semibold"> Basic Information</h5>
            <div class=" mt-3 min-w-full">
                <div class="">
                    <div class=" flex items-center py-4 whitespace-nowrap border-b border-gray-300 justify-between">
                        <h5 class="">Fullname</h5>
                        <h5 class="">{{ $firstName . ' ' . $lastName }}</h5>
                    </div>

                    <div class=" flex items-center py-4 whitespace-nowrap border-b border-gray-300 justify-between">
                        <h5 class="">Phone</h5>
                        <h5 class="">{{ $phone }}</h5>
                    </div>

                    <div class=" flex items-center py-4 whitespace-nowrap border-b border-gray-300 justify-between">
                        <h5 class="">Date of Birth</h5>
                        <h5 class="">{{ $dob }}</h5>
                    </div>

                    <div class=" flex items-center py-4 whitespace-nowrap border-b border-gray-300 justify-between">
                        <h5 class="">Gender</h5>
                        <h5 class="">{{ $gender }}</h5>
                    </div>

                    <div class=" flex items-center py-4 whitespace-nowrap border-b border-gray-300 justify-between">
                        <h5 class="">Nationality</h5>
                        <h5 class="">{{ $nationality }}</h5>
                    </div>

                    <div class=" flex items-center py-4 whitespace-nowrap border-b border-gray-300 justify-between">
                        <h5 class="">Country of
                            Residence
                        </h5>
                        <h5 class="">{{ $residence }}</h5>
                    </div>
                </div>
            </div>

            <div class=" mt-5">
                <h5 class=" font-semibold">Uploaded Documents</h5>
                <div class="flex">
                    <div class=" grow p-3">
                        <div class="">
                            <img class="mb-4 w-40 h-40 rounded-2xl object-cover border-[3px] border-yellow-500" src="{{ $front->temporaryUrl() }}" alt="">
                        </div>
                        <h5 class=" text-sm capitalize">{{$document}} / Front</h5>
                    </div>

                    <div class=" grow p-3">
                        <div class="">
                            <img class="mb-4 w-40 h-40 rounded-2xl object-cover border-[3px] border-yellow-500" src="{{ $back->temporaryUrl() }}" alt="">
                        </div>
                        <h5 class=" text-sm capitalize">{{$document}} / Back</h5>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="lg:p-5">
        <button wire:click="next"
            class=" py-2 w-full px-3 bg-secondary text-gray-800 mt-8 rounded-sm text-center font-semibold block">Proceed</button>
    </div>

    <div class="lg:p-5">
        <button wire:click="previous"
            class=" py-2 w-full px-3 mt-4 text-primary rounded-sm text-center block capitalize">Back to
            previous</button>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            Dropzone.options.myDropzone = {
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                // Configuration options go here
            };



            // let fileInput = document.getElementById("reek")
            // console.log(fileInput)
            // let filenameContainer = document.querySelector('.filename');
            // let dropzone = document.querySelector('.droparea');

            // if (fileInput) {
            //     fileInput.addEventListener('change', function() {
            //         console.log('first')
            //         filenameContainer.innerText = fileInput.value.split('\\').pop();
            //     });

            //     fileInput.addEventListener('dragenter', function() {
            //         dropzone.classList.add('dragover');
            //     });

            //     fileInput.addEventListener('dragleave', function() {
            //         dropzone.classList.remove('dragover');
            //     });
            // }

        })
    </script>
@endpush
