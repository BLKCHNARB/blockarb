<div class=" bg-white p-4 pt-8 lg:p-12 h-ful rounded-lg">

    <div class=" mb-5 fle justify-between items-center">

        @if (session()->has('success'))
            <div x-transition x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
                class=" p-5 text-center bg-green-300 mb-5">
                <h5 class="">{{ session('success') }}</h5>
            </div>
        @endif

        <div class=" flex justify-end mb-3">
            <button wire:click="createmodal"
                class=" bg-green-400 px-4 py-2 rounded-md text-sm text-white">Create</button>
        </div>

        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class=" text-sm inline-bloc min-w-full overflow-auto align-middle border-b border-gray-200 shadow sm:rounded-lg">
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
                                Plan</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                Percentage</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                Minimum</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                Maximum</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                Duration</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                Date</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">

                        @foreach ($tokenPlans as $plan)
                            @foreach ($plan->tokens as $token)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 ">{{ $loop->iteration }}</div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 ">{{ $token->name }}</div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 ">{{ $plan->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 ">{{ $token->pivot->percentage }}%</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 ">${{ number_format($token->pivot->minimum) }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 ">${{ number_format($token->pivot->maximum) }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 ">{{ $token->pivot->duration }} Months</div>
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap border-b border-gray-500  text-sm leading-5">
                                        {{ $token->pivot->created_at->format('Y/m/d') }}</td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                        <div class="flex">
                                            <button
                                                wire:click='deletemodal({{ $token->pivot->plan_id }}, {{ $token->pivot->token_id }})'
                                                class="px-5 mr-2 py-2 border-red-500 border text-red-500 rounded transition duration-300 hover:bg-red-700 hover:text-white focus:outline-none">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach

                    </tbody>
                </table>

                <div class="mt-4 p-4">
                    {{ $tokenPlans->links() }}
                </div>

            </div>
        </div>

        <x-confirmation-modal wire:model="creatingmodal">
            <x-slot name="title">
                {{ __('Add Item') }}
            </x-slot>

            <x-slot name="content">
                <div class="col-span-6 sm:col-span-4 mb-5">
                    <x-label for="plan" value="{{ __('Plan') }}" />
                    {{-- <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="item.name" /> --}}
                    <select name="plan" id="plan" wire:model="item.plan"
                        class="w-full mt-3 px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker">
                        <option value="">Select Plan...</option>
                        @foreach ($plans as $plan)
                            <option value="{{ $plan->id }}">{{ $plan->name }}</option>
                        @endforeach
                    </select>
                    {{-- <x-input-error for="item.plan" class="mt-2" /> --}}
                </div>

                <div class="col-span-6 sm:col-span-4 mb-5">
                    <x-label for="token" value="{{ __('Token') }}" />
                    <select name="token" id="token" wire:model="item.token"
                        class="w-full mt-3 px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker">
                        <option value="">Select Category...</option>
                        @foreach ($tokens as $token)
                            <option value="{{ $token->id }}">{{ $token->name }}</option>
                        @endforeach
                    </select>
                    {{-- <x-input-error for="item.category" class="mt-2" /> --}}
                </div>

                <div class="col-span-6 sm:col-span-4 mb-5">
                    <x-label for="minimum" value="{{ __('Minimum Capital') }}" class="mt-3" />
                    <x-input id="minimum" type="number" class="mt-1 block w-full"
                        wire:model.defer="item.minimum" />
                    {{-- <x-input-error for="item.minimum" class="mt-2" /> --}}
                </div>

                <div class="col-span-6 sm:col-span-4 mb-5">
                    <x-label for="maximum" value="{{ __('Maximum Price') }}" class="mt-3" />
                    <x-input id="maximum" type="number" class="mt-1 block w-full"
                        wire:model.defer="item.maximum" />
                    {{-- <x-input-error for="item.maximum" class="mt-2" /> --}}
                </div>

                <div class="col-span-6 sm:col-span-4 mb-5">
                    <x-label for="percentage" value="{{ __('Percentage') }}" class="mt-3" />
                    <x-input id="percentage" type="number" class="mt-1 block w-full"
                        wire:model.defer="item.percentage" />
                    {{-- <x-input-error for="item.percentage" class="mt-2" /> --}}
                </div>

                <div class="col-span-6 sm:col-span-4 mb-5">
                    <x-label for="duration" value="{{ __('Duration') }}" class="mt-3" />
                    <x-input id="duration" type="text" class="mt-1 block w-full"
                        wire:model.defer="item.duration" />
                    {{-- <x-input-error for="item.duration" class="mt-2" /> --}}
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-button wire:click="$set('creatingmodal', false)" wire:loading.attr="disabled">
                    {{ __('Nevermind') }}
                </x-button>

                <x-button class="ml-2" wire:click="savePlan" wire:loading.attr="disabled">
                    {{ __('Save') }}
                </x-button>
            </x-slot>
        </x-confirmation-modal>


        <x-confirmation-modal wire:model='deletingmodal'>
            <x-slot name="title">
                Delete plan
            </x-slot>

            <x-slot name="content">
                {{ __('Are you sure you want to delete this plan?') }}
            </x-slot>

            <x-slot name="footer">
                <x-button wire:click="$set('deletingmodal', false)" class="ml-2"
                    wire:loading.attr="disabled">
                    {{ __('Close') }}
                </x-button>

                <x-button wire:click="delete" class="ml-2" wire:loading.attr="disabled">
                    {{ __('Proceed') }}
                </x-button>
            </x-slot>
        </x-confirmation-modal>


    </div>
</div>

@push('scripts')
    <script></script>
@endpush
