@props(['active'])

@php
    $classes = $active ?? false ? 'block py-2 rounded-lg pl-3 pr-4 text-white lg:text-blue-600 bg-blue-600 lg:rounded lg:bg-transparent lg:p-0 font-semibold' : 'block py-2 pl-3 pr-4 rounded lg:bg-transparent lg:p-0';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
