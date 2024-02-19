<x-confirmation-modal wire:model='confirm'>

    <x-slot name="close" >
        <span wire:click="cancel">
            x
        </span>
    </x-slot>

    <x-slot name="title">
        Select deposit method
    </x-slot>

    <x-slot name="content">

        <div class="text-center mb-5 font-medium">
            Select your preferred method to make your deposit: Use cryptocurrency from an external wallet, or purchase cryptocurrency using your local currency
        </div>

        <div class=" mt-5">
            <a href="{{ (route('deposit')) }}" class="mt-6" >
                <x-button>{{ 'Deposit with cryptocurrency' }}</x-button>
            </a>
        </div>

       <div class=" mt-8 ">
        <a href="{{ (route('otc')) }}" class="" >
            <x-button type='secondary'>{{ 'Deposit using local currency' }}</x-button>
        </a>
       </div>
    </x-slot>

    <x-slot name="footer">
    </x-slot>
</x-confirmation-modal>