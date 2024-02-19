@props(['type' => 'primary', 'icon' => null])

@php
    $classes = 'px-[24px] py-[12px] border border-transparent font-medium text-sm focus:outline-none transition-all hover:scale-105 duration-150 w-full flex justify-center items-center rounded-[10px]';
    
    if ($type === 'primary') {
        $classes .= ' bg-blue_600 text-white hover:text-blue_600 hover:border-blue_600 hover:bg-white ';
    } elseif ($type === 'secondary') {
        $classes .= ' bg-gray_50 font-semibold text-black_800 hover:border-black_800 ';
    } elseif ($type === 'primaryDM') {
        $classes .= ' font-semibold text-black_800 bg-white';
    } elseif ($type === 'deactivated') {
        $classes .= ' bg-gray_100 text-white';
    }
@endphp

<button {{ $attributes->merge(['type' => 'button', 'class' => $classes]) }}>
    {{ $slot }}
    @if($icon)
    <img class="ml-3" src="{{ asset($icon) }}" alt="">
    @endif
</button>
