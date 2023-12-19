<x-auth-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" id="register">
            @csrf

            <fieldset class="">
                <div class="mt-4">
                    <x-label for="first_name" value="{{ __('First Name') }}" />
                    <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                        :value="old('first_name')" required autofocus autocomplete="first_name" />
                </div>

                <div class="mt-4">
                    <x-label for="last_name" value="{{ __('Last Name') }}" />
                    <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"
                        required autocomplete="last_name" />
                </div>

                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    {{-- <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button> --}}
                    <x-button class="ml-4 next">
                        {{ __('Next') }}
                    </x-button>
                </div>
            </fieldset>

            <fieldset class="">
                <div class="mt-4">

                    <label for="age" class="block font-medium text-sm text-gray-700 dark:text-gray-500">Age
                        Range</label>
                    <select name="age" id="age"
                        class="w-full px-4 py-2 border border-l-0 border-t-0 border-r-0 dark:border-gray-700 focus:outline-none dark:focus:ring-0  border-gray-300 focus:border-indigo-300 dark:bg-dark dark:text-gray-500 focus:ring focus:0 focus:ring-opacity-50 rounded-sm shadow-sm">
                        <option value="18 - 25">18 - 25</option>
                        <option value="26 - 45">26 - 45</option>
                        <option value="45+">45+</option>
                    </select>
                </div>

                <div class="mt-4">

                    <label for="usinvestor" class="block font-medium text-sm text-gray-700 dark:text-gray-500">Are you a
                        US Investor?</label>
                    <select name="usinvestor" id="usinvestor"
                        class="w-full px-4 py-2 border border-l-0 border-t-0 border-r-0 dark:border-gray-700 focus:outline-none dark:focus:ring-0  border-gray-300 focus:border-indigo-300 dark:bg-dark dark:text-gray-500 focus:ring focus:0 focus:ring-opacity-50 rounded-sm shadow-sm">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="mt-4">

                    <label for="investortype"
                        class="block font-medium text-sm text-gray-700 dark:text-gray-500">Investor
                        Type</label>
                    <select name="investortype" id="investortype"
                        class="w-full px-4 py-2 border border-l-0 border-t-0 border-r-0 dark:border-gray-700 focus:outline-none dark:focus:ring-0  border-gray-300 focus:border-indigo-300 dark:bg-dark dark:text-gray-500 focus:ring focus:0 focus:ring-opacity-50 rounded-sm shadow-sm">
                        <option value="Private">Private Individual </option>
                        <option value="Family Office">Family Office</option>
                        <option value="High Net-Worth Individual">High Net Worth Individual</option>
                        <option value="Registered Investment Advisor">Registered Investment Advisor
                        </option>
                        <option value="Hedge/Venture Fund">Hedge/Venture Fund</option>
                        <option value="Pension Fund">Pension Fund</option>
                        <option value="Other Institutional Investors">Other Institutional Investors
                        </option>
                    </select>
                </div>


                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-4 previous">
                        {{ __('Previous') }}
                    </x-button>

                    <x-button class="ml-4 next">
                        {{ __('Next') }}
                    </x-button>
                </div>
            </fieldset>

            <fieldset class="">

                <div class="mt-4">

                    <x-label for="accredited" class="block font-medium text-sm text-gray-700 dark:text-gray-500" value="{{__('Accredited Investor Status')}}" />
                    
                    <select name="accredited" id="accredited"
                        class="w-full px-4 py-2 border border-l-0 border-t-0 border-r-0 dark:border-gray-700 focus:outline-none dark:focus:ring-0  border-gray-300 focus:border-indigo-300 dark:bg-dark dark:text-gray-500 focus:ring focus:0 focus:ring-opacity-50 rounded-sm shadow-sm">
                        <option value="Non-Accredited">Non-Accredited</option>
                        <option value="Accredited Investor($1m + networth)">Accredited Investor($1m
                            + networth)</option>
                        <option value="Qualified Client($2.1m + networth)">Qualified Client($2.1m +
                            networth)</option>
                        <option value="Qualified Purchaser(5m + networth)">Qualified Purchaser(5m +
                            networth)</option>
                    </select>
                </div>

                <div class="mt-4">

                    <x-label for="hearabout" class="block font-medium text-sm text-gray-700 dark:text-gray-500" value="{{__('How did you hear about us?')}}" />
                    <select name="hearabout" id="hearabout"
                        class="w-full px-4 py-2 border border-l-0 border-t-0 border-r-0 dark:border-gray-700 focus:outline-none dark:focus:ring-0  border-gray-300 focus:border-indigo-300 dark:bg-dark dark:text-gray-500 focus:ring focus:0 focus:ring-opacity-50 rounded-sm shadow-sm">
                        <option value="Online Research">Online Research</option>
                        <option value="Elite Wealth Management Partner">Elite Wealth Management
                            Partner</option>
                        <option value="External Referral">External Referral</option>
                        <option value="Conference/Event">Conference/Event</option>
                        <option value="Press">Press</option>
                    </select>
                </div>

                <div class="mt-4">

                    <x-label for="capital" class="block font-medium text-sm text-gray-700 dark:text-gray-500" value="{{__('How much capital are you willing to invest')}}" />
                    <select name="capital" id="capital"
                        class="w-full px-4 py-2 border border-l-0 border-t-0 border-r-0 dark:border-gray-700 focus:outline-none dark:focus:ring-0  border-gray-300 focus:border-indigo-300 dark:bg-dark dark:text-gray-500 focus:ring focus:0 focus:ring-opacity-50 rounded-sm shadow-sm">
                        <option value="$10,000 - $99,000">$10,000 - $99,000</option>
                        <option value="$100,000 - $199,000">$100,000 - $199,000</option>
                        <option value="$200,000 - $499,000">$200,000 - $499,000</option>
                        <option value="$500,000 & above">$500,000 & Above</option>
                    </select>
                </div>

                <div class="mt-4">
                    <x-label for="lovetoknow" value="{{ __('Tell us what you would love to know') }}" />
                    <x-input id="lovetoknow" class="block mt-1 w-full" type="text" name="lovetoknow"
                        :value="old('lovetoknow')" required autocomplete="lovetoknow" />

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-4 previous">
                        {{ __('Previous') }}
                    </x-button>

                    <x-submit class="ml-4">
                        {{ __('Submit') }}
                    </x-submit>
                </div>

                
                </div>
            </fieldset>

            {{-- <fieldset class="">

                <div class="mt-4">

                    <label for="funds" class="block font-medium text-sm text-gray-700 dark:text-gray-500">Which
                        Funds are you interested in?</label>
                    <select name="funds" id="funds"
                        class="w-full px-4 py-2 border border-l-0 border-t-0 border-r-0 dark:border-gray-700 focus:outline-none dark:focus:ring-0  border-gray-300 focus:border-indigo-300 dark:bg-dark dark:text-gray-500 focus:ring focus:0 focus:ring-opacity-50 rounded-sm shadow-sm">
                        <option value="Family Office">Family Office</option>
                        <option value="High Net-Worth Individual">High Net-Worth Individual</option>
                        <option value="Registered Investment Advisor">Registered Investment Advisor
                        </option>
                        <option value="Hedge/Venture Fund">Hedge/Venture Fund</option>
                        <option value="Hedge/Venture Fund">Pension Fund</option>
                        <option value="Hedge/Venture Fund">Other Institutional Investor</option>
                    </select>
                </div>

                <div class="mt-4">
                    <x-label for="lovetoknow" value="{{ __('Tell us what you would love to know') }}" />
                    <x-input id="lovetoknow" class="block mt-1 w-full" type="text" name="lovetoknow"
                        :value="old('lovetoknow')" required autocomplete="lovetoknow" />
                </div>

                <div class="mt-4">
                    <x-label for="bitcoin" value="{{ __('Enter your Bitcoin Address') }}" />
                    <x-input id="bitcoin" class="block mt-1 w-full" type="text" name="bitcoin"
                        :value="old('bitcoin')" required autocomplete="bitcoin" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-4 previous">
                        {{ __('Previous') }}
                    </x-button>

                    <x-submit class="ml-4">
                        {{ __('Submit') }}
                    </x-submit>
                </div>
            </fieldset> --}}


        </form>

        {{-- <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form> --}}
    </x-auth-card>
</x-auth-layout>
