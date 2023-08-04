@props(['variant' => 'primary'])

@php
    $variantClass = [
        'primary' => 'text-white font-medium bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-blue-800',
        'secondary' => 'py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-blue-600 focus:outline-none bg-white rounded-lg border border-blue-600 hover:bg-blue-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-700 dark:bg-blue-800 dark:text-blue-400 dark:border-blue-600 dark:hover:text-white dark:hover:bg-blue-700',
    ];
@endphp

<a href="{{ $attributes->get('href') }}" target="{{ $attributes->get('target') }}">
    <button {{ $attributes->merge(['type' => 'submit', 'class' => $variantClass[$variant] . ' ']) }}>
        {{ $slot }}
    </button>
</a>
