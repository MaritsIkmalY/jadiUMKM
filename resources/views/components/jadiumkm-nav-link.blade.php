@props(['active'])

@php
    $classes = $active ?? false ? 'block py-2 rounded-lg pl-3 pr-4 text-white md:text-blue-500 bg-blue-500 md:rounded md:bg-transparent md:p-0 font-semibold' : 'block py-2 pl-3 pr-4 rounded md:bg-transparent md:p-0';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
