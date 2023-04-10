<div class="navbar bg-base-100 drop-shadow-sm p-4">
    <div class="max-w-7xl w-full m-auto">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">JadiUMKM</a>
        </div>
        <div class="flex gap-16">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li tabindex="0">
                    <a>
                        Edukasi
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24">
                            <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                        </svg>
                    </a>
                    <ul class="p-2 bg-base-100">
                        <li><a href="{{ route('video') }}">Video Gratis</a></li>
                        <li><a href="https://t.me/+BielMi-IEV5mOGQ1">Video Berbayar</a></li>
                        <li><a>Pembelajaran</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('creator') }}">Content Creator</a></li>
            </ul>
            @if (Auth::user())
                <div class="dropdown dropdown-hover dropdown-end">
                    <label tabindex="0" class="btn btn-ghost text-primary m-1">{{ Auth::user()->name }}</label>
                    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                        <li> <a href="{{ route('dashboard') }}">Dashboard</a></li>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li>
                                <a
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </li>
                        </form>

                    </ul>
                </div>
            @else
                <div class="flex gap-4 items-center">
                    <a href={{ route('login') }} class="btn btn-primary">
                        Masuk
                    </a>
                    <a href={{ route('register') }} class="btn btn-outline btn-primary">
                        Register
                    </a>
                </div>
            @endif

        </div>
    </div>
</div>
