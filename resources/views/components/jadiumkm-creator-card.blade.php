@props(['name' => 'Name', 'src' => '', 'desc' => 'desc', 'detail' => 'home', 'id' => '0', 'whatsapp' => '', 'email' => 'email'])

<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-end px-4 pt-4">

        <div data-popover id="popover-{{ $id }}" role="tooltip"
            class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">


            <ul class="py-2" aria-labelledby="dropdownButton">
                <li>
                    <a target="_blank" href="https://wa.me/{{ $whatsapp }}"
                        class="flex gap-2 items-center px-4 py-2 text-sm text-blue-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><svg
                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                            height="24" viewBox="0,0,255.99431,255.99431" style="fill:#000000;">
                            <g fill="#1c64f2" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(10.66667,10.66667)">
                                    <path
                                        d="M12,2c-5.5,0 -10,4.5 -10,10c0,1.8 0.50078,3.5 1.30078,5l-1.30078,5l5.19922,-1.19922c1.5,0.8 3.10078,1.19922 4.80078,1.19922c5.5,0 10,-4.5 10,-10c0,-2.7 -1.00039,-5.19961 -2.90039,-7.09961c-1.9,-1.9 -4.39961,-2.90039 -7.09961,-2.90039zM12,4c2.1,0 4.09922,0.80078 5.69922,2.30078c1.5,1.6 2.30078,3.59922 2.30078,5.69922c0,4.4 -3.6,8 -8,8c-1.3,0 -2.70078,-0.3 -3.80078,-1l-0.69922,-0.40039l-0.69922,0.20117l-2,0.5l0.5,-1.80078l0.19922,-0.80078l-0.40039,-0.69922c-0.7,-1.2 -1.09961,-2.6 -1.09961,-4c0,-4.4 3.6,-8 8,-8zM8.5,7.40039c-0.2,0 -0.49922,-0.00117 -0.69922,0.29883c-0.3,0.3 -0.90039,0.90156 -0.90039,2.10156c0,1.2 0.9,2.39961 1,2.59961c0.2,0.2 1.79883,2.79883 4.29883,3.79883c2.1,0.8 2.5,0.60156 3,0.60156c0.5,-0.1 1.50117,-0.60117 1.70117,-1.20117c0.2,-0.6 0.19883,-1.10039 0.29883,-1.40039c-0.1,-0.1 -0.2,-0.19883 -0.5,-0.29883c-0.2,-0.1 -1.39922,-0.70078 -1.69922,-0.80078c-0.3,-0.1 -0.39961,-0.20039 -0.59961,0.09961c-0.2,0.3 -0.70078,0.8 -0.80078,1c-0.1,0.2 -0.2,0.20156 -0.5,0.10156c-0.2,-0.1 -1,-0.30117 -2,-1.20117c-0.8,-0.6 -1.30039,-1.39922 -1.40039,-1.69922c-0.2,-0.2 0.00156,-0.4 0.10156,-0.5l0.39844,-0.40039c0.1,-0.1 0.10117,-0.30039 0.20117,-0.40039c0.1,-0.1 0.1,-0.20039 0,-0.40039c-0.1,-0.2 -0.60078,-1.39844 -0.80078,-1.89844c-0.2,-0.4 -0.39961,-0.40039 -0.59961,-0.40039z">
                                    </path>
                                </g>
                            </g>
                        </svg> Whatsapp</a>
                </li>

                <li>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $email }}&su=Halo {{ $name }}&body=Halo" target="_blank"
                        class="flex gap-2 items-center px-4 py-2 text-sm text-blue-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><svg
                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                            height="24" viewBox="0,0,255.99431,255.99431" style="fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none"
                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                text-anchor="none" style="mix-blend-mode: normal">
                                <g transform="scale(10.66667,10.66667)">
                                    <path
                                        d="M7,5.463v14.537h-3c-1.105,0 -2,-0.895 -2,-2v-11.5c0,-1.381 1.119,-2.5 2.5,-2.5v0"
                                        fill="none" stroke="#1c64f2" stroke-width="2"></path>
                                    <path
                                        d="M17,5.463v14.537h3c1.105,0 2,-0.895 2,-2v-11.5c0,-1.381 -1.119,-2.5 -2.5,-2.5v0"
                                        fill="none" stroke="#1c64f2" stroke-width="2"></path>
                                    <path d="M2.14,7.83l9.86,7.7l9.86,-7.7" fill="none" stroke="#1c64f2"
                                        stroke-width="2"></path>
                                    <path
                                        d="M4.5,4c0.54,0 1.08,0.17 1.54,0.53l5.96,4.65l5.96,-4.65c0.46,-0.36 1,-0.53 1.54,-0.53"
                                        fill="none" stroke="#1c64f2" stroke-width="2"></path>
                                    <path
                                        d="M22,8l-5,4v-7c0,0 2.436,-2.148 4.162,-0.46c1.127,1.101 0.838,3.46 0.838,3.46z"
                                        fill="#1c64f2" stroke="none" stroke-width="1" opacity="0.3"></path>
                                    <path
                                        d="M2,8l5,4v-7c0,0 -2.436,-2.148 -4.162,-0.46c-1.127,1.101 -0.838,3.46 -0.838,3.46z"
                                        fill="#1c64f2" stroke="none" stroke-width="1" opacity="0.3"></path>
                                </g>
                            </g>
                        </svg> Gmail</a>
                </li>
            </ul>

            <div data-popper-arrow></div>
        </div>

    </div>
    <div class="flex flex-col items-center pb-10">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ $src }}" alt="Bonnie image" />
        @php
            $displayedName = strlen($name) > 20 ? substr($name, 0, 20) . '...' : $name;
        @endphp

        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white" data-popover-target="{{ $id }}">
            {{ $displayedName }}</h5>

        <x-jadiumkm-tooltip id="{{ $id }}">{{ $name }}</x-jadiumkm-tooltip>

        {{ $slot }}
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $desc }}</span>
        <div class="flex mt-4 space-x-3 md:mt-6">
            <x-jadiumkm-btn href="{{ route($detail, $id) }}">Detail</x-jadiumkm-btn>
            <x-jadiumkm-btn variant="secondary" id="dropdownButton" href="#"
                data-popover-target="popover-{{ $id }}"
                data-popover-placement="bottom">Kontak</x-jadiumkm-btn>
        </div>
    </div>
</div>
