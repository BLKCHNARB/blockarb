@props(['type' => 'primary', 'icon' => null])

@php
    $classes = 'md:px-[24px] whitespace-nowrap sm:px-[20px] px-[14px] md:py-[13px] py-[10px] border border-transparent font-medium md:text-base sm:text-sm text-s focus:outline-none transition-all hover:scale-105 duration-150 w-full flex justify-center items-center rounded-[10px]';
    
    if ($type === 'primary') {
        $classes .= ' bg-blue_600 text-white hover:text-blue_600 hover:border-blue_600 hover:bg-white ';
    } elseif ($type === 'secondary') {
        $classes .= ' bg-gray_50 font-semibold text-black_800 hover:border-black_800 ';
    } elseif ($type === 'primaryDM') {
        $classes .= ' font-semibold text-black_800 bg-white';
    } elseif ($type === 'deactivated') {
        $classes .= ' bg-gray_100 text-white pointer-events-none';
    } elseif ($type === 'cancel') {
        $classes .= ' bg-white border-failed font-semibold text-failed';
    }
@endphp

<button {{ $attributes->merge(['type' => 'button', 'class' => $classes]) }}>
    {{ $slot }}
    @if($icon)
    <img class="ml-3" src="{{ asset($icon) }}" alt="">
    @endif
</button>
