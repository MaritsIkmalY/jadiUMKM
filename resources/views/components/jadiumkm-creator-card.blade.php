@props(['name' => 'Name', 'src' => '', 'desc' => 'desc', 'detail' => 'home', 'id' => '0'])

<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-end px-4 pt-4">

        <!-- Dropdown menu -->
        <div id="dropdown"
            class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2" aria-labelledby="dropdownButton">
                <li>
                    <a href="#"
                        class="flex gap-2 items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><img
                            width="24" height="24" src="https://img.icons8.com/material-sharp/24/whatsapp--v4.png"
                            alt="whatsapp--v4" /> Whatsapp</a>
                </li>

                <li>
                    <a href="#"
                        class="flex gap-2 items-center px-4 py-2 text-sm text-grey-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><img
                            width="32" height="32" src="https://img.icons8.com/windows/32/gmail.png"
                            alt="gmail" /> Email</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="flex flex-col items-center pb-10">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ $src }}" alt="Bonnie image" />
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $name }}</h5>
        {{ $slot }}
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $desc }}</span>
        <div class="flex mt-4 space-x-3 md:mt-6">
            <x-jadiumkm-btn href="{{ route($detail, $id) }}">Detail</x-jadiumkm-btn>
            <x-jadiumkm-btn variant="secondary" id="dropdownButton" href="#"
                data-dropdown-toggle="dropdown">Kontak</x-jadiumkm-btn>
        </div>
    </div>
</div>
