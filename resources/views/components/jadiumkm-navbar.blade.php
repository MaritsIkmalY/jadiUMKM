<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <x-application-logo />
        <div class="flex lg:order-2">
            <div class="lg:flex gap-2 hidden items-center">
                @if (Auth::user())
                    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                        class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white"
                        type="button">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 mr-2 rounded-full"
                            src="{{ Str::contains(Auth::user()->photo, 'default') ? '/assets/images/webinar.jpg' : '/storage/' . Auth::user()->photo }}"
                            alt="user photo">
                        {{ Auth::user()->name }}
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <div id="dropdownAvatarName"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">

                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                            <li>
                                <a href="{{ route('dashboard') }}"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>

                        </ul>
                        <div class="py-2">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <a type="submit"
                                    onclick="event.preventDefault();
                                this.closest('form').submit();"
                                    class="cursor-pointer block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                    out</a>
                            </form>

                        </div>
                    </div>
                @else
                    <x-jadiumkm-btn variant="primary" href="{{ route('login') }}">Masuk</x-jadiumkm-btn>
                    <x-jadiumkm-btn variant="secondary" href="{{ route('register') }}">Daftar</x-jadiumkm-btn>
                @endif
            </div>

            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 lg:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 lg:flex-row lg:space-x-8 lg:mt-0 lg:border-0 lg:bg-white dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700">
                <x-jadiumkm-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">Home</x-jadiumkm-nav-link>

                <x-jadiumkm-nav-link href="{{ route('edukasi') }}" :active="request()->routeIs('edukasi') || Str::contains(request()->url(), '/edukasi')">Edukasi</x-jadiumkm-nav-link>

                <x-jadiumkm-nav-link href="{{ route('creator') }}" :active="request()->routeIs('creator') || Str::contains(request()->url(), '/creator')">Freelancer</x-jadiumkm-nav-link>

                <x-jadiumkm-nav-link href="{{ route('katalog') }}" :active="request()->routeIs('katalog') || Str::contains(request()->url(), '/katalog')">Katalog UMKM</x-jadiumkm-nav-link>

                <x-jadiumkm-nav-link href="{{ route('airecommender') }}" :active="request()->routeIs('airecommender')">AI
                    Recommender</x-jadiumkm-nav-link>

                <div class="flex gap-2 lg:hidden my-2 items-center">
                    @if (Auth::user())
                        <button id="dropdownAvatarNameButton" data-dropdown-toggle="tes"
                            class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white"
                            type="button">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 mr-2 rounded-full"
                                src="{{ Str::contains(Auth::user()->photo, 'default') ? '/assets/images/webinar.jpg' : '/storage/' . Auth::user()->photo }}"
                                alt="user photo">
                            {{ Auth::user()->name }}
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <div id="tes"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">

                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                                <li>
                                    <a href="{{ route('dashboard') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>

                            </ul>
                            <div class="py-2">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <a type="submit"
                                        onclick="event.preventDefault();
                            this.closest('form').submit();"
                                        class="cursor-pointer block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                        out</a>
                                </form>

                            </div>
                        </div>
                    @else
                        <x-jadiumkm-btn variant="primary" href="{{ route('login') }}">Masuk</x-jadiumkm-btn>
                        <x-jadiumkm-btn variant="secondary" href="{{ route('register') }}">Daftar</x-jadiumkm-btn>
                    @endif
                </div>
            </ul>
        </div>
    </div>
</nav>
