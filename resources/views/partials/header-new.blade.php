<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <span class="logo me-auto"><a href="{{ url('/') }}"><img src="{{ asset('public/logo1.png') }}" class="img-fluid animated"
                    alt="Religare Digital" /></a></span>
       <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active_1" href="{{ url('/') }}">Home</a></li>

                <li>
                    <a class="nav-link scrollto active_2" href="{{ url('products-services') }}">Products & Services</a>
                </li>

                <li>
                    <a class="nav-link scrollto active_3" href="{{ url('training-videos') }}"><span>Training Videos </span></a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ url('about-us') }}">About us</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ url('contact') }}">Contact</a>
                </li>
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
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->
