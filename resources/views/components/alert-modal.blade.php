@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class=" relative sm:py-20 py-8 sm:px-10 px-6 flex bg-white rounded-[20px] w-[80%] shadow-xl">
        <span class="absolute -top-8 -right-9 cursor-pointer z-[999]"> {{ $close }} </span>
        <div class="text-center w-full flex justify-center items-center flex-col">
            {{ $content }}
        </div>
    </div>
</x-modal>