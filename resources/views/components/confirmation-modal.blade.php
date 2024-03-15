@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="bg-white w-full rounded-[20px]">
        <div class="relative base:py-7 py-4 base:px-10 px-7">
            <div class=" mt-7">
                <span class="absolute top-5 right-8 text-black_600 base:text-xl text-md font-medium shadow-xl cursor-pointer hover:scale-110"> {{ $close }} </span>
                <h3 class=" base:text-xl text-md text-center font-bold text-black_900">
                    {{ $title }}
                </h3>

                <div class="mt-2 w-full">
                    {{ $content }}
                </div>
            </div>
    </div>

    <div class="flex flex-col pt-3 pb-10 px-10 w-full justify-center items-center  ">
       <div class="w-[80%]">
        {{ $footer }}
       </div>
    </div>
    </div>
</x-modal>