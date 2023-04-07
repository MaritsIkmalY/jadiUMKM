<div class="navbar bg-base-100 drop-shadow-sm p-4">
    <div class="max-w-7xl w-full m-auto">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">JadiUMKM</a>
        </div>
        <div class="flex gap-4">
            @if (Auth::user())
                <div class="dropdown dropdown-hover">
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
                <a href={{ route('login') }} class="btn btn-primary">
                    Login
                </a>
                <a href={{ route('register') }} class="btn btn-outline btn-primary">
                    Register
                </a>
            @endif

        </div>
    </div>
</div>
