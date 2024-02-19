@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="relative py-7 px-10">
            <div class=" mt-7">
                <span class="absolute top-5 right-8 text-black_600 text-lg cursor-pointer hover:scale-110"> {{ $close }} </span>
                <h3 class="text-xl text-center font-bold text-black_900">
                    {{ $title }}
                </h3>

                <div class="mt-2 w-full">
                    {{ $content }}
                </div>
            </div>
    </div>

    <div class="flex flex-col pt-6 pb-10 px-10 ">
        {{ $footer }}
    </div>
</x-modal>