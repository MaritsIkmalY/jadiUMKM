<div data-popover {{ $attributes->merge(['id' => 'unique']) }} role="tooltip"
    class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
    <div class="px-3 py-2 font-semibold">
        <p>{{ $slot }}</p>
    </div>
    <div data-popper-arrow></div>
</div>
