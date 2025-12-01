@extends('web-layout')

@section('title', 'Home Page')

@section('content')
<style>
@keyframes marquee {
  0% { transform: translateX(0%); }
  100% { transform: translateX(-100%); }
}
.animate-marquee {
  animation: marquee 25s linear infinite;
}
</style>
    <div class="container-fluid ticker p-0">
        <div class="w-full bg-gray-100">
    <div class="flex items-center overflow-hidden">
        <div class="bg-blue-600 text-white px-4 py-2 font-semibold">
            What's New
        </div>

        <div class="flex-1 overflow-hidden">
            <ul class="flex animate-marquee whitespace-nowrap">
                <li class="mx-8 flex items-center">
                    <span class="text-3xl leading-none mr-2">.</span>
                    <span class="text-sm">asdf</span>
                </li>

                <li class="mx-8 flex items-center">
                    <span class="text-3xl leading-none mr-2">.</span>
                    <span class="text-sm">
                        Buy Mantra & Morpho L1 Biometric devices at best price. To order, call
                    </span>
                </li>

                <li class="mx-8 flex items-center">
                    <span class="text-3xl leading-none mr-2">.</span>
                    <span class="text-sm">
                        Support available on Sundays & Holidays too.
                    </span>
                </li>
            </ul>
        </div>

        <button class="px-3 py-2 bg-gray-200 hover:bg-gray-300">⏸</button>
    </div>
</div>

    </div>
    <strong >
        {{-- <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="download-app-qr">
                    <div class="image-content">
                        <h3>Download DigiPay Mobile App</h3>
                        <div class="image">
                            <picture>
                                <a class="qrcode" href="#" target="_blank"><img
                                        src="{{ asset('public/theme/web-new') }}/wp-content/uploads/2024/07/DigiPay-Android-App-QR.png"
                                        alt="upstox-qr-code" width="78" height="78" /></a>
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- ======= Hero Section ======= -->
        <section class="p-0" id="hero" style="margin-top: 0">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    @foreach ($sliders as $index => $slider)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}" style="max-height:400px !important;">
                            <a href="/signup" target="_blank">
                                <img src="{{ asset('public/uploads/sliders/' . $slider->image) }}" alt="Banner-1"
                                    class="d-block" style="width: 100%;max-height:400px !important;" />
                            </a>
                        </div>
                    @endforeach



                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </section>

        <main id="main" style="margin-top: 20px">
            <!-- ======= Products Section 2 ======= -->
            @include('partials.products')
            <!-- End Products Section 2 -->

            <!-- ======= BecomeAgent Section 3======= -->
            <section id="skills" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">

        <!-- ============================
             Become an Agent
        ============================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center mb-20">

            <!-- Image -->
            <div data-aos="fade-right">
                <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/pic1.webp') }}"
                     alt="Become an Agent"
                     class="rounded-lg shadow-md w-full object-cover">
            </div>

            <!-- Content -->
            <div data-aos="fade-left" class="space-y-4">
                <h3 class="text-3xl font-bold text-gray-800">Become an Agent</h3>

                <p class="text-gray-600 leading-relaxed">
                    Boost your monthly income by registering as Religare Digital Agent.
                    Open a one-stop digital shop and earn commissions for Cash Withdrawal,
                    Cash Deposit, Money Transfer, PAN Services, AePS transactions, Loans,
                    Insurance, Ticket Booking, and more in your local area.
                </p>

                <p class="text-gray-700">
                    We promise you <strong class="font-semibold text-gray-900">more products,
                    more transactions, and more revenue!</strong>
                </p>

                <!-- Buttons -->
                <div class="flex gap-4 pt-4">
                    <a href="{{ route('sign_up.form') }}"
                       class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
                       Join Now
                    </a>

                    <a href="{{ route('contact') }}"
                       class="px-6 py-3 bg-gray-100 text-gray-800 rounded-lg shadow hover:bg-gray-200 transition">
                       Income Calculator
                    </a>
                </div>
            </div>

        </div>


        <!-- ============================
             Become a Franchisee Partner
        ============================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

            <!-- Image (mobile first) -->
            <div class="lg:order-1 order-2" data-aos="fade-right">
                <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/pic2.webp') }}"
                     alt="Franchisee Partner"
                     class="rounded-lg shadow-md w-full object-cover">
            </div>

            <!-- Content -->
            <div class="lg:order-2 order-1" data-aos="fade-left">
                <div class="space-y-4 max-w-xl">
                    <h3 class="text-3xl font-bold text-gray-800">Become a Franchisee Partner</h3>

                    <p class="text-gray-600 leading-relaxed">
                        Join the family of 53,000+ business partners and launch your
                        zero-investment digital shop. Earn a strong monthly income and
                        represent a brand serving India for over 30 years.
                    </p>

                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="text-blue-600 text-lg">•</span>
                            <p>Served over <strong>5 Crore Customers</strong></p>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-blue-600 text-lg">•</span>
                            <p>Facilitating <strong>10,000+ Pincodes</strong></p>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-blue-600 text-lg">•</span>
                            <p>Presence in <strong>35 States & UTs</strong></p>
                        </li>
                    </ul>

                    <!-- Buttons -->
                    <div class="flex gap-4 pt-4">
                        <a href="{{ route('sign_up.form') }}"
                           class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
                           Join Now
                        </a>

                        <a href="{{ route('contact') }}"
                           class="px-6 py-3 bg-gray-100 text-gray-800 rounded-lg shadow hover:bg-gray-200 transition">
                           Income Calculator
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

            <!-- End BecomeAgent Section 3 -->

            <!-- ======= Team Section (NEW INSERTION) ======= -->
            @include('partials.team-section')
            <!-- End Team Section (NEW INSERTION) -->

            <!-- ======= About us Section 4======= -->
            <section id="about" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4 relative inline-block">
                <span class="relative z-10">About Us</span>
                <span class="absolute -bottom-2 left-0 w-1/3 h-1 bg-blue-600 transform -skew-x-12"></span>
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Learn More! Discover our story and mission. Let's embark on this journey together! 🌟</p>
        </div>

        <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="lg:w-1/2 order-2 lg:order-1">
                <div class="space-y-6">
                    <div class="p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                        <p class="text-gray-700 leading-relaxed">
                            ADARSH DIGITAL offers a one-stop solution for all types of online recharges and bill payments, including prepaid mobile, postpaid bills, DTH, data cards, landline, and broadband services. We have established ourselves as one of India's fastest-growing and most reliable online recharge and bill payment platforms.
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="p-5 bg-white rounded-lg shadow-md flex items-center space-x-3">
                            <div class="p-2 bg-blue-100 rounded-full text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-gray-800">Instant Recharge</span>
                        </div>
                        <div class="p-5 bg-white rounded-lg shadow-md flex items-center space-x-3">
                            <div class="p-2 bg-green-100 rounded-full text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <span class="text-gray-800">Secure Payments</span>
                        </div>
                        <div class="p-5 bg-white rounded-lg shadow-md flex items-center space-x-3">
                            <div class="p-2 bg-purple-100 rounded-full text-purple-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                </svg>
                            </div>
                            <span class="text-gray-800">24/7 Support</span>
                        </div>
                        <div class="p-5 bg-white rounded-lg shadow-md flex items-center space-x-3">
                            <div class="p-2 bg-yellow-100 rounded-full text-yellow-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <span class="text-gray-800">Trusted Service</span>
                        </div>
                    </div>

                    <div class="p-6 bg-gradient-to-r from-blue-600 to-blue-800 rounded-xl text-white">
                        <p class="leading-relaxed">
                            We are continuously enhancing our systems by adopting the latest technologies, including support for emerging 5G networks and satellite broadband services. With a strong emphasis on reliability, data privacy, and customer satisfaction, ADARSH DIGITAL provides a trusted digital environment where customers can recharge and pay bills with complete confidence.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="lg:w-1/2 order-1 lg:order-2" data-aos="zoom-in" data-aos-delay="150">
                <div class="relative">
                    <div class="bg-blue-100 rounded-2xl p-1 shadow-xl">
                        <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/about.png"
                            alt="ADARSH DIGITAL Services" class="rounded-2xl w-full h-auto" />
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-white p-4 rounded-xl shadow-lg hidden md:block">
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-3 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-gray-500">Fast & Secure</p>
                                <p class="font-semibold">24/7 Support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            <!-- End About us Section 4 -->

            <!-- ======= Advantage Section 5======= -->
            <section id="why-us" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4" data-aos="fade-up">

        <!-- Title -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                Our Advantages
            </h2>
        </div>

        <!-- Advantages Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">

            <!-- Box 1 -->
            <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-xl transition"
                 data-aos="zoom-in" data-aos-delay="150">
                <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/Vector.png') }}"
                     alt="Brand Trust"
                     class="w-14 h-14 mb-4">
                <p class="font-semibold text-gray-800 leading-tight">
                    Brand Trust of <br> 30 years
                </p>
            </div>

            <!-- Box 2 -->
            <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-xl transition"
                 data-aos="zoom-in" data-aos-delay="150">
                <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/Vector1.png') }}"
                     alt="High Growth"
                     class="w-14 h-14 mb-4">
                <p class="font-semibold text-gray-800 leading-tight">
                    High Growth <br> Business Opportunity
                </p>
            </div>

            <!-- Box 3 -->
            <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-xl transition"
                 data-aos="zoom-in" data-aos-delay="150">
                <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/Vector2.png') }}"
                     alt="Zero Investment"
                     class="w-14 h-14 mb-4">
                <p class="font-semibold text-gray-800 leading-tight">
                    Zero Investment & <br> Unlimited Potential
                </p>
            </div>

            <!-- Box 4 -->
            <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-xl transition"
                 data-aos="zoom-in" data-aos-delay="150">
                <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/Vector3.png') }}"
                     alt="Easy Onboarding"
                     class="w-14 h-14 mb-4">
                <p class="font-semibold text-gray-800 leading-tight">
                    Easy Onboarding for <br> 30+ Services
                </p>
            </div>

            <!-- Box 5 -->
            <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-xl transition"
                 data-aos="zoom-in" data-aos-delay="150">
                <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/Vector4.png') }}"
                     alt="Secure Platform"
                     class="w-14 h-14 mb-4">
                <p class="font-semibold text-gray-800 leading-tight">
                    Safe & Secure <br> Digital Platform
                </p>
            </div>

        </div>
    </div>
</section>

            <!-- End Advantage Section 5-->

            <!-- ======= GreenBelt Section 8======= -->
            <!-- CTA Section -->
<section id="cta" class="bg-green-700 py-12">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center lg:items-start justify-between gap-6">
            
            <!-- Text -->
            <div class="text-white lg:w-3/4">
                <h1 class="text-3xl font-bold">Adarsh Digital</h1>
                <p class="mt-2 text-lg leading-relaxed">
                    India's Most Trusted Digital Platform. <br>
                    Become an Agent, Distributor, or Super Distributor today! <br>
                    🧾 Verified Services | 🎯 Free Promotion | 📊 Training & Support
                </p>
            </div>

            <!-- Button -->
            <div class="lg:w-1/4 text-center">
                <a href="{{ url('sign_up.form') }}"
                   class="inline-block bg-white text-green-700 font-semibold px-6 py-3 rounded-lg shadow-md hover:bg-gray-200 transition">
                    Get Started
                </a>
            </div>

        </div>
    </div>
</section>

            <!-- End GreenBelt Section 8 -->

            <br /><br />
            <!-- ======= Partners Section 7======= -->
            <!-- Partners Section -->
<section id="clients" class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        
        <!-- Title -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Our Partners</h2>
        </div>

        <!-- Carousel -->
        <div class="owl-carousel owl-carousel1 owl-theme">

            <!-- Item -->
            <div class="p-4">
                <div class="bg-white shadow-md rounded-lg p-4 flex justify-center">
                    <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/client1.png') }}"
                         alt="Protean"
                         class="h-16 object-contain" />
                </div>
            </div>

            <div class="p-4">
                <div class="bg-white shadow-md rounded-lg p-4 flex justify-center">
                    <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/client2.png') }}"
                         alt="Emudhra"
                         class="h-16 object-contain" />
                </div>
            </div>

            <div class="p-4">
                <div class="bg-white shadow-md rounded-lg p-4 flex justify-center">
                    <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/client3.png') }}"
                         alt="Capricorn"
                         class="h-16 object-contain" />
                </div>
            </div>

            <div class="p-4">
                <div class="bg-white shadow-md rounded-lg p-4 flex justify-center">
                    <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/client4.png') }}"
                         alt="NSDL"
                         class="h-16 object-contain" />
                </div>
            </div>

            <div class="p-4">
                <div class="bg-white shadow-md rounded-lg p-4 flex justify-center">
                    <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/client5.png') }}"
                         alt="Fino Payments Bank"
                         class="h-16 object-contain" />
                </div>
            </div>

            <div class="p-4">
                <div class="bg-white shadow-md rounded-lg p-4 flex justify-center">
                    <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/client6.png') }}"
                         alt="NPCI"
                         class="h-16 object-contain" />
                </div>
            </div>

            <div class="p-4">
                <div class="bg-white shadow-md rounded-lg p-4 flex justify-center">
                    <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/client7.png') }}"
                         alt="IRCTC"
                         class="h-16 object-contain" />
                </div>
            </div>

            <div class="p-4">
                <div class="bg-white shadow-md rounded-lg p-4 flex justify-center">
                    <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/client9.png') }}"
                         alt="ICICI Lombard General Insurance"
                         class="h-16 object-contain" />
                </div>
            </div>

            <div class="p-4">
                <div class="bg-white shadow-md rounded-lg p-4 flex justify-center">
                    <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/client11.png') }}"
                         alt="Care Health Insurance"
                         class="h-16 object-contain" />
                </div>
            </div>

        </div>
    </div>
</section>

            <!-- End Partners Section 7 -->

            @if(isset($feedbacks) && $feedbacks->count() > 0)
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        
        <!-- Heading -->
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-800">Partner Reviews</h2>
        </div>

        <!-- Swiper Slider -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                @foreach ($feedbacks as $feedback)
                <div class="swiper-slide">
                    <div class="bg-white shadow-lg rounded-xl p-8 text-center max-w-xl mx-auto">

                        <!-- User Image -->
                        <div class="mb-4 flex justify-center">
                            @if ($feedback->photo)
                                <img src="{{ url('public/'.$feedback->photo) }}"
                                    class="w-24 h-24 rounded-full object-cover shadow-md" 
                                    alt="{{ $feedback->name }}">
                            @else
                                <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/placeholder.png') }}"
                                    class="w-24 h-24 rounded-full object-cover shadow-md" 
                                    alt="User Placeholder">
                            @endif
                        </div>

                        <!-- Name & Address -->
                        <h3 class="text-xl font-semibold text-gray-800">{{ $feedback->name }}</h3>
                        <p class="text-sm text-gray-500">{{ $feedback->office_address }}</p>

                        <!-- Stars -->
                        <div class="flex justify-center mt-2 mb-4 text-yellow-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>

                        <!-- Feedback -->
                        <p class="text-gray-600 italic leading-relaxed">
                            "{{ $feedback->feedback }}"
                        </p>

                    </div>
                </div>
                @endforeach

            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-between mt-6 px-4">
                <div class="swiper-button-prev bg-white shadow-md p-3 rounded-full hover:bg-gray-100"></div>
                <div class="swiper-button-next bg-white shadow-md p-3 rounded-full hover:bg-gray-100"></div>
            </div>

        </div>

    </div>
</section>
@endif


            <section id="awards" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">

        <!-- Section Heading -->
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-800 tracking-wide">Awards</h2>
            <p class="mt-4 text-gray-600 max-w-3xl mx-auto leading-relaxed text-base">
                We have earned recognition from distinguished organisations for our services and initiatives. 
                Here are some of the awards we proudly received.
            </p>
        </div>

        <!-- Awards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Award 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/award3.jpg') }}"
                    alt="Award Image 1"
                    class="w-full h-64 object-cover">
            </div>

            <!-- Award 2 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/award4.jpg') }}"
                    alt="Award Image 2"
                    class="w-full h-64 object-cover">
            </div>

            <!-- Award 3 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/award2.jpg') }}"
                    alt="Award Image 3"
                    class="w-full h-64 object-cover">
            </div>

            <!-- Award 4 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/award1.jpg') }}"
                    alt="Award Image 4"
                    class="w-full h-64 object-cover">
            </div>

            <!-- Award 5 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/award5.jpg') }}"
                    alt="Award Image 5"
                    class="w-full h-64 object-cover">
            </div>

            <!-- Award 6 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="{{ asset('public/theme/web-new/wp-content/themes/egov/assets/images/award6.jpg') }}"
                    alt="Award Image 6"
                    class="w-full h-64 object-cover">
            </div>

        </div>

    </div>
</section>

        </main>

    @endsection
