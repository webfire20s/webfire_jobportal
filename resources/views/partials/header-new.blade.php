<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <span class="logo me-auto"><a href="{{ url('/') }}"><img src="{{ asset('public/logo1.png') }}"
                    class="img-fluid animated" alt="Religare Digital" /></a></span>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ url('/') }}">Home</a></li>

                <li>
                    <a class="nav-link scrollto" href="{{ url('products-services') }}">Products & Services</a>
                </li>

                {{-- <li>
                    <a class="nav-link scrollto" href="{{ url('training-videos') }}"><span>Training Videos </span></a>
                </li> --}}
                <li>
                    <a class="nav-link scrollto" href="{{ url('/#about') }}">About us</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ url('blog') }}">Blog</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ url('contact') }}">Contact</a>
                </li>
                @foreach ($pages as $page)
                    <li>
                        <a class="nav-link scrollto"
                            href="{{ route('page.show', $page->slug) }}">{{ ucwords($page->title) }}</a>
                    </li>
                @endforeach

                @guest
                    <li>
                        <a class="nav-link scrollto" href="{{ url('login') }}">Login</a>
                    </li>

                    {{-- <li class="dropdown">
                    <a href="#" class="active_4"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="https://aRregqpH93uL.in/login/" target="_blank" rel="noopener noreferrer">PAN</a>
                        </li>
                        <li>
                            <a href="https://digipay.religareonline.com/auth/login/" target="_blank"
                                rel="noopener noreferrer">Digipay</a>
                        </li>
                    </ul>
                </li> --}}

                    <li><a class="getstarted scrollto" href="{{ url('sign_up') }}">Join Now</a></li>
                @endguest
                @auth
                    <!-- Show user-related menu items if the user is logged in -->
                    @if (auth()->user()->role === 'user')
                        <li>
                            <a class="nav-link scrollto" href="{{ url('user') }}">Dashboard</a>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="{{ url('user/plans') }}">Plans & Transaction</a>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="{{ url('user/forms') }}">Forms</a>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="{{ url('user/profile') }}">Profile</a>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="{{ url('user/change-password') }}">Settings</a>
                        </li>
                        <div class="dropdown">
                            <a href="#"
                                class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ url('storage/app/public/') . '/' . (auth()->user()->photo ?? 'https://github.com/mdo.png') }}"
                                    alt="" width="32" height="32" class="rounded-circle me-2">
                                <strong>{{ auth()->user()->name }}</strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="{{ url('user') }}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{ url('user/plans') }}">Plans & Transaction</a></li>
                                <li><a class="dropdown-item" href="{{ url('user/profile') }}">Profile</a></li>
                                <li><a class="dropdown-item" href="{{ url('user/change-password') }}">Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ url('logout') }}">Sign out</a></li>
                            </ul>
                        </div>
                    @else
                        <li>
                            <a class="getstarted scrollto" href="{{ url('admin') }}">Dashboard</a>
                        </li>
                    @endif
                @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->
