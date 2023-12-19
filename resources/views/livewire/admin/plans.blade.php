<div class="bg-white p-4 pt-8 lg:p-12 h-ful rounded-lg">

    <div class=" mb-5 fle justify-between items-center">

        @if (session()->has('success'))
            <div x-transition x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" class=" p-5 text-center bg-green-300 mb-5">
                <h5 class="">{{ session('success') }}</h5>
            </div>
        @endif

        <div class=" flex justify-end mb-3">
            <button wire:click = "createmodal" class=" bg-green-400 px-4 py-2 rounded-md text-sm text-white">Create</button>
        </div>

        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="inline-bloc min-w-full overflow-auto align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                S/N</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Name</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Edit</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Delete</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">

                        @forelse ($plans as $plan)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-500">{{ $loop->iteration }}</div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-500">{{ $plan->name }}</div>
                                </td>

                                <td
                                    class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                    <button type="button" wire:click="editmodal({{$plan->id}})">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    </button>
                                </td>
                                <td
                                    class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                    <button type="button" wire:click="deletemodal({{$plan->id}})">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <h5>You have created no plans yet</h5>
                        @endforelse

                    </tbody>
                </table>

                <div class="mt-4 p-4">
                    {{ $plans->links() }}
                </div>

                <x-confirmation-modal wire:model='deletingmodal'>
                    <x-slot name="title">
                        Delete Plan
                    </x-slot>

                    <x-slot name="content">
                        {{ __('Are you sure you want to delete this plan?') }}
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

                <x-confirmation-modal wire:model='editingmodal'>
                    <x-slot name="title">
                        Edit Plan
                    </x-slot>

                    <x-slot name="content">
                        <form action="" wire:submit.prevent = updatePlan>
                            <div class="">
                                <div class="mt-5 ">
                                    <label class=" block" for="name">Name</label>
                                    <input placeholder="Enter Plan Name" value="{{$name}}" wire:model="name"
                                        class=" pl-0 text-sm text-gray-400 placeholder-gray-300 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                                        type="text" name="name" id="name" wire:model.debounce.lazy="name" />
                                </div>
            
                            </div>
                        </form>
                    </x-slot>

                    <x-slot name="footer">
                        <x-button wire:click="$set('editingmodal', false)" class="ml-2" wire:loading.attr="disabled">
                            {{ __('Close') }}
                        </x-button>

                        <x-button wire:click="edit" class="ml-2" wire:loading.attr="disabled">
                            {{ __('Proceed') }}
                        </x-button>
                    </x-slot>
                </x-confirmation-modal>

                <x-confirmation-modal wire:model='creatingmodal'>
                    <x-slot name="title">
                        Create Plan
                    </x-slot>

                    <x-slot name="content">
                        <form action="" wire:submit.prevent = createPlan>
                            <div class="">
                                <div class="mt-5 ">
                                    <label class=" block" for="cname">Name</label>
                                    <input placeholder="Enter Plan Name" value="{{$cname}}" wire:model="cname"
                                        class=" pl-0 text-sm text-gray-400 placeholder-gray-300 mt-2 block bg-transparent w-full border-t-0 focus:ring-0 focus:outline-none focus:border-non border-l-0 border-r-0 border-b border-gray-300"
                                        type="text" cname="cname" id="cname" wire:model.debounce.lazy="cname" />
                                </div>
            
                            </div>
                        </form>
                    </x-slot>

                    <x-slot name="footer">
                        <x-button wire:click="$set('creatingmodal', false)" class="ml-2" wire:loading.attr="disabled">
                            {{ __('Close') }}
                        </x-button>

                        <x-button wire:click="create" class="ml-2" wire:loading.attr="disabled">
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
