<div class="bg-white p-4 pt-8 lg:p-12 h-ful rounded-lg">

    <div class=" mb-5 fle justify-between items-center">
        @if (session()->has('success'))
            <div x-transition x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" class=" p-5 text-center bg-green-300">
                <h5 class="">{{ session('success') }}</h5>
            </div>
        @endif
        <div class="py-2 -my-2 overflow-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="inline-bloc min-w-full overflow-x-auto align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Name</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Email</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Status</th>
                            {{-- <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Edit</th> --}}
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Delete</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">

                        @forelse ($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        {{-- <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-10 h-10 rounded-full"
                                                src="https://source.unsplash.com/user/erondu" alt="admin dashboard ui">
                                        </div> --}}

                                        <div class="ml-4">
                                            <div class="text-sm font-medium leading-5 text-gray-900">
                                                {{ $user->first_name . ' ' . $user->last_name }}
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-500">{{ $user->email }}</div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <span
                                        class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                                </td>

                                {{-- <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </td> --}}
                                <td
                                    class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                    <button wire:click='deletemodal({{ $user->id }})' type="button"
                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <h5>You have no users yet</h5>
                        @endforelse

                    </tbody>
                </table>

                <div class="mt-4 p-4">
                    {{ $users->links() }}
                </div>

                <x-confirmation-modal wire:model='deletingmodal'>
                    <x-slot name="title">
                        Delete Deposit
                    </x-slot>

                    <x-slot name="content">
                        {{ __('Are you sure you want to delete this category?') }}
                    </x-slot>

                    <x-slot name="footer">
                        <x-button wire:click="$set('deletingmodal', false)" class="ml-2" wire:loading.attr="disabled">
                            {{ __('Close') }}
                        </x-button>

                        <x-button wire:click="delete" class="ml-2" wire:loading.attr="disabled">
                            {{ __('Proceed') }}
                        </x-button>
                    </x-slot>
                </x-confirmation-modal>

            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script></script>
@endpush
