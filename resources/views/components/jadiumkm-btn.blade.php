@props(['variant' => 'primary'])

@php
$variantClass = [
    'primary' => 'bg-primary text-white',
    'secondary' => 'bg-white border-[1px] border-primary text-primary',
];
$baseVariantClass = 'rounded-lg px-4 py-2 hover:shadow-sm font-semibold';
@endphp

<a href="{{ $attributes->get('href') }}">
  <button class="{{ $variantClass[$variant] }} {{ $baseVariantClass }} {{ $attributes->get('class') }}">
    {{ $slot }}
  </button>
</a>
