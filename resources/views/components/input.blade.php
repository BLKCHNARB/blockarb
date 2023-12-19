@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-l-0 border-r-0 border-t-0 rounded-sm shadow-sm border-b-[0.5px] border-gray-400 focus:border-primary-300 focus:border-l-0 focus:border-r-0 focus:border-t-0 focus:ring focus:ring-0 focus:ring-opacity-50']) !!}>
