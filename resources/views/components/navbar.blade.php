{{-- <div class="navbar bg-base-100 drop-shadow-sm p-4">
    <div class="max-w-7xl w-full m-auto">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">JadiUMKM</a>
        </div>
        <div class="flex gap-4">
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
                <a href={{ route('login') }} class="btn btn-primary">
                    Masuk
                </a>
                <a href={{ route('register') }} class="btn btn-outline btn-primary">
                    Register
                </a>
            @endif

        </div>
    </div>
</div> --}}

<!-- Header Start  -->
<div class="header-area header-sticky d-none d-lg-block">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <!-- Header Logo Start -->
                <div class="header-logo">
                    <a href="index.html"><img src="assets/images/logo-jadiUMKM.png" alt="Logo"></a>
                </div>
                <!-- Header Logo End -->
            </div>
            <div class="col-lg-6">
                <div class="header-menu">
                    <ul class="nav-menu">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li><a href="#About">About</a></li>
                        <li><a href="#Contact">Contact</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-3">
                <!-- Header Meta Start -->
                <div class="header-meta">

                    <div class="dropdown">
                        <a class="action" href="#" role="button" data-bs-toggle="dropdown"> <i
                                class="pe-7s-search"></i> </a>

                        <div class="dropdown-menu dropdown-search">
                            <!-- Header Search Start -->
                            <div class="header-search">
                                <form action="#">
                                    <input type="text" placeholder="Enter your search key ... ">
                                    <button><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                            <!-- Header Search End -->
                        </div>
                    </div>

                    <div class="dropdown">
                        <a class="action" href="#" role="button" data-bs-toggle="dropdown"><i
                                class="pe-7s-user"></i></a>

                        <ul class="dropdown-menu dropdown-profile">
                            <li><a href="login.html">Sign In</a></li>
                            <li><a href="login.html">Sign Up</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- Header Meta End -->
        </div>
    </div>
</div>
</div>
<!-- Header End -->

<!-- Header Mobile Start -->
<div class="header-mobile section d-lg-none">

    <!-- Header Mobile top Start -->
    <div class="header-mobile-top header-sticky">
        <div class="container">
            <div class="row row-cols-3 gx-2 align-items-center">
                <div class="col">

                    <!-- Header Toggle Start -->
                    <div class="header-toggle">
                        <button class="mobile-menu-open">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <!-- Header Toggle End -->

                </div>
                <div class="col">

                    <!-- Header Logo Start -->
                    <div class="header-logo text-center">
                        <a href="index.html"><img src="assets/images/logo-jadiUMKM.png" alt="Logo"></a>
                    </div>
                    <!-- Header Logo End -->

                </div>
                <div class="col">

                    <!-- Header Action Start -->
                    <div class="header-meta">
                        <div class="dropdown">
                            <a class="action" href="#" role="button" data-bs-toggle="dropdown"><i
                                    class="pe-7s-user"></i></a>

                            <ul class="dropdown-menu dropdown-profile">
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="login.html">Sign In</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Action End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Header Mobile top End -->

    <!-- Header Mobile Bottom End -->
    <div class="header-mobile-bottom">
        <div class="container">

            <!-- Header Search Start -->
            <div class="header-search">
                <form action="#">
                    <input type="text" placeholder="Enter your search key ... ">
                    <button><i class="pe-7s-search"></i></button>
                </form>
            </div>
            <!-- Header Search End -->

        </div>
    </div>
    <!-- Header Mobile Bottom End -->

</div>
<!-- Header Mobile End -->

<!-- off Canvas Start -->
<div class="off-canvas-box">

    <!-- Canvas Close bar Start -->
    <div class="canvas-close-bar">
        <span>Menu</span>
        <a class="menu-close" href="javascript:;"><i class="pe-7s-angle-left"></i></a>
    </div>
    <!-- Canvas Close bar End -->

    <!-- Canvas Menu Start -->
    <div class="canvas-menu">
        <nav>
            <ul class="nav-menu">
                <li>
                    <a href="#">Home</a>
                </li>
                <li><a href="#About">About</a></li>
                <li><a href="#Contact">Contact</a></li>
            </ul>

        </nav>
    </div>
    <!-- Canvas Menu End -->

</div>
<!-- off Canvas End -->
