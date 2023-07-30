@props(['variant' => 'primary'])

@php
    $variantClass = [
        'primary' => 'bg-blue-500 hover:bg-blue-600 text-base-100',
        'secondary' => 'bg-white border-[1px] border-blue-500 hover:bg-blue-500 hover:text-white text-blue-500',
    ];
    $baseVariantClass = 'focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0';
@endphp

<a href="{{ $attributes->get('href') }}">
    <button {{ $attributes->merge(['type' => 'submit', 'class' => $variantClass[$variant] . ' ' . $baseVariantClass]) }}>
        {{ $slot }}
    </button>
</a>
