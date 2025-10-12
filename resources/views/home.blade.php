@extends('web-layout')

@section('title', 'Home Page')

@section('content')
    <div class="container-fluid ticker p-0">
        <div class="acme-news-ticker">
            <div class="acme-news-ticker-label">What's New</div>
            <div class="acme-news-ticker-box">
                <ul class="my-news-ticker">
                    <li>
                        <a href="#"><strong style="font-size: 30px; line-height: 20px">.</strong>
                            <strong style="font-size: 14px; line-height: 14px">asdf
                            </strong></a>
                    </li>

                    <li>
                        <a href="#"><strong style="font-size: 30px; line-height: 20px">.</strong>
                            <strong style="font-size: 14px; line-height: 14px">Buy Mantra & Morpho L1 Biometric devices at
                                best price. To
                                order, call</strong></a>
                    </li>

                    <li>
                        <a href="#"><strong style="font-size: 30px; line-height: 20px">.</strong>
                            <strong style="font-size: 14px; line-height: 14px">Support available on Sundays & Holidays too.
                            </strong></a>
                    </li>
                    <li>
                        <a href="#"><strong style="font-size: 30px; line-height: 20px"></strong></a>
                    </li>
                    <strong style="font-size: 30px; line-height: 20px"> </strong>
                </ul>
                <strong style="font-size: 30px; line-height: 20px"> </strong>
            </div>
            <strong style="font-size: 30px; line-height: 20px">
                <div class="acme-news-ticker-controls acme-news-ticker-horizontal-controls">
                    <button class="acme-news-ticker-pause"></button>
                </div>
            </strong>
        </div>
        <strong style="font-size: 30px; line-height: 20px"> </strong>
    </div>
    <strong style="font-size: 30px; line-height: 20px">
        <div id="myModal" class="modal">
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
        </div>

        <!-- ======= Hero Section ======= -->
        <section class="p-0" id="hero" style="margin-top: 0">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    @foreach ($sliders as $index => $slider)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <a href="/signup" target="_blank">
                                <img src="{{ asset('public/uploads/sliders/' . $slider->image) }}" alt="Banner-1"
                                    class="d-block" style="width: 100%" />
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
            <section id="skills" class="skills BecomeAgent pt-0 pb-0" style="padding-top: 40px">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 d-flex align-items-center img1" data-aos="fade-right"
                            data-aos-delay="100">
                            <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/pic1.webp"
                                class="img-fluid" alt="Become an Agent" />
                        </div>
                        <div class="col-lg-8 col-sm-12 content content1" data-aos="fade-left" data-aos-delay="100">
                            <div class="col-lg-8 col-sm-12">
                                <h3>Become an Agent</h3>
                                <p>
                                    Boost your monthly income by registering as Religare Digital
                                    Agent. You can open a one-stop digital shop and earn
                                    commission by providing services such as cash withdrawal,
                                    cash deposit, money transfer, pan correction and updation,
                                    AePS linked transactions, loans, insurance, ticket booking
                                    and much more in your local area.<br /><br />
                                </p>

                                <p style="text-align: left">
                                    We promise you
                                    <strong>more products, more transactions and more
                                        revenue!!</strong>
                                </p>

                                <div class="" id="products">
                                    <div class="d-flex justify-content-center callToActions">
                                        <button class="btn joinBtn">
                                            <a href="/Signup" class="btn-learn-more">Join Now</a>
                                        </button>
                                        <button class="btn joinBtn calc">
                                            <a href="/income-calculator" class="btn-learn-more hover-btn">Income
                                                Calculator</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row franchisee">
                        <div class="col-lg-4 col-md-6 d-flex align-items-center img1 mobview" data-aos="fade-right"
                            data-aos-delay="100">
                            <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/pic2.webp"
                                class="img-fluid" alt="Franchisee Partner" />
                        </div>

                        <div class="col-lg-8 col-sm-12 pt-4 content content2" data-aos="fade-left" data-aos-delay="100">
                            <div class="col-lg-9 col-sm-12">
                                <h3>Become a Franchisee Partner</h3>
                                <p>
                                    Join the family of 53,000+ business partners and launch your
                                    digital shop with zero investment. As a partner, you will
                                    earn a good monthly income and represent a brand that has
                                    been serving India for 30 years.
                                </p>

                                <ul>
                                    <li>
                                        <p>• Served over 5 Crore Customers</p>
                                    </li>
                                    <li>
                                        <p>• Facilitating 10,000+ Pincodes</p>
                                    </li>
                                    <li>
                                        <p>• 35 States & Union Territories</p>
                                    </li>
                                </ul>

                                <div class="" id="products">
                                    <div class="d-flex justify-content-center callToActions">
                                        <button class="btn joinBtn">
                                            <a href="/Signup" class="btn-learn-more">Join Now</a>
                                        </button>
                                        <button class="btn joinBtn calc">
                                            <a href="/income-calculator" class="btn-learn-more hover-btn">Income
                                                Calculator</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 d-flex align-items-center img1 desktopView" data-aos="fade-right"
                            data-aos-delay="100">
                            <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/pic2.webp"
                                class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </section>
            <!-- End BecomeAgent Section 3 -->

            <!-- ======= About us Section 4======= -->
            <section id="about" class="why-us aboutus">
                <div class="container-fluid" data-aos="fade-up">
                    <div class="section-title">
                        <h2>About Us</h2>
                    </div>

                    <div class="row">
                        <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
                            <div class="content">
                                <p>
                                    Religare Broking Ltd. (RBL) is a wholly owned subsidiary of
                                    Religare Enterprises Limited (REL), a leading diversified
                                    financial services group in India. RBL is one of the leading
                                    stock broking firms in India offering over 10 lakh clients
                                    across both Offline and Online platforms. RBL also offers
                                    TIN facilitation & PAN facility at select branches - a
                                    unique service to help an customer with PAN, TAN and TDS/TCS
                                    returns related requirements.
                                </p>

                                <p>
                                    Religare Digital is an E-Governance vertical of RBL. The
                                    business supports more than 53,000+ agents who facilitate
                                    e-gov services to Indian citizens in rural and semi urban
                                    setting. The motto of the business is to empower India by
                                    simplifying and assisting financial inclusion services. Our
                                    agent program is an easy to join digital business program
                                    that assures a stable monthly business income in a
                                    convenient, efficient and transparent manner.<br /><br />

                                    <strong>Sky is the limit for the agents who aspire &
                                        perform!</strong>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-8 col-sm-12 align-items-stretch order-1 order-lg-2 img">
                            <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/about.png"
                                class="img-fluid" alt="eGovernance" data-aos="zoom-in" data-aos-delay="150" />
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About us Section 4 -->

            <!-- ======= Advantage Section 5======= -->
            <section id="why-us" class="why-us advantage pb-0">
                <div class="container-fluid desktopView" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Our Advantages</h2>
                    </div>
                    <div class="content">
                        <div class="box">
                            <span><img
                                    src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/Vector.png"
                                    class="img-fluid" alt="Business Growth" data-aos="zoom-in"
                                    data-aos-delay="150" /></span>Brand Trust of <br />30 years
                        </div>
                        <div class="box">
                            <span><img
                                    src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/Vector1.png"
                                    class="img-fluid" alt="Easy Onboarding" data-aos="zoom-in"
                                    data-aos-delay="150" /></span>
                            High Growth <br />
                            Business Opportunity
                        </div>
                        <div class="box">
                            <span><img
                                    src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/Vector2.png"
                                    class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="150" /></span>
                            Zero Investment & <br />
                            Unlimited Potential
                        </div>
                        <div class="box">
                            <span><img
                                    src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/Vector3.png"
                                    class="img-fluid" alt="Rupee - Currency" data-aos="zoom-in"
                                    data-aos-delay="150" /></span>
                            Easy Onboarding for <br />
                            30+ Services
                        </div>
                        <div class="box last">
                            <span><img
                                    src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/Vector4.png"
                                    class="img-fluid" alt="Secure Technology Platform" data-aos="zoom-in"
                                    data-aos-delay="150" /></span>
                            Safe & Secure <br />Digital Platform
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Advantage Section 5-->

            <!-- ======= GreenBelt Section 8======= -->
            <section id="cta" class="cta">
                <div class="container" data-aos="zoom-in">
                    <div class="row">
                        <div class="col-lg-9 text-lg-start greenBeltText">
                            <h1 class="text-white m-0">
                                Adarsh Digital
                            </h1>
                            <p>
                                India's Most Trusted Digital Platform.
Become an Agent, Distributor, or Super Distributor today!
🧾 Verified Services | 🎯 Free Promotion | 📊 Training & Support
                            </p>
                        </div>

                        <div class="col-lg-3 cta-btn-container text-center">
                            <a class="cta-btn align-middle" href="{{ url('sign_up') }}">Get Started</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End GreenBelt Section 8 -->

            <br /><br />
            <!-- ======= Partners Section 7======= -->
            <section id="clients" class="clients">
                <div class="container-fluid">
                    <div class="section-title">
                        <h2>Our Partners</h2>
                    </div>
                    <div class="row" data-aos="zoom-in">
                        <div class="owl-carousel owl-carousel1 owl-theme">
                            <div class="owl-item">
                                <div class="card row d-flex flex-row">
                                    <div class="profile">
                                        <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/client1.png"
                                            class="img-fluid" alt="Protean" />
                                    </div>
                                </div>
                            </div>

                            <div class="owl-item">
                                <div class="card row d-flex flex-row">
                                    <div class="profile">
                                        <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/client2.png"
                                            class="img-fluid" alt="Emudhra" />
                                    </div>
                                </div>
                            </div>

                            <div class="owl-item">
                                <div class="card row d-flex flex-row">
                                    <div class="profile">
                                        <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/client3.png"
                                            class="img-fluid" alt="Capricorn" />
                                    </div>
                                </div>
                            </div>

                            <div class="owl-item">
                                <div class="card row d-flex flex-row">
                                    <div class="profile">
                                        <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/client4.png"
                                            class="img-fluid" alt="NSDL" />
                                    </div>
                                </div>
                            </div>

                            <div class="owl-item">
                                <div class="card row d-flex flex-row">
                                    <div class="profile">
                                        <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/client5.png"
                                            class="img-fluid" alt="Fino Payments Bank" />
                                    </div>
                                </div>
                            </div>

                            <div class="owl-item">
                                <div class="card row d-flex flex-row">
                                    <div class="profile">
                                        <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/client6.png"
                                            class="img-fluid" alt="NPCI" />
                                    </div>
                                </div>
                            </div>

                            <div class="owl-item">
                                <div class="card row d-flex flex-row">
                                    <div class="profile">
                                        <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/client7.png"
                                            class="img-fluid" alt="IRCTC" />
                                    </div>
                                </div>
                            </div>

                            <div class="owl-item">
                                <div class="card row d-flex flex-row">
                                    <div class="profile">
                                        <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/client9.png"
                                            class="img-fluid" alt="ICICI Lombard General Insurance" />
                                    </div>
                                </div>
                            </div>

                            <div class="owl-item">
                                <div class="card row d-flex flex-row">
                                    <div class="profile">
                                        <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/client11.png"
                                            class="img-fluid" alt="Care Health Insurance" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Partners Section 7 -->

            @if(isset($feedbacks) && $feedbacks->count() > 0)
    <section class="testimonialSec">
        <div class="container rounded">
            <div class="section-title">
                <h2 style="text-transform: capitalize">Partner Reviews</h2>
            </div>
            <div id="demo1" class="carousel slide" data-bs-ride="carousel">
                
                <div class="carousel-indicators" style="display: none">
                    @foreach ($feedbacks as $index => $feedback)
                        <button type="button" data-bs-target="#demo1" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></button>
                    @endforeach
                </div>

                <div class="carousel-inner">
                    @foreach ($feedbacks as $index => $feedback)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="testi_img text-center">
                                {{-- Use the feedback photo, or a default image if photo is null --}}
                                @if ($feedback->photo)
                                    <img src="{{ url('public/').$feedback->photo }}" alt="{{ $feedback->name }}" style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;" />
                                @else
                                    {{-- Placeholder image if no photo is uploaded (Adjust path as needed) --}}
                                    <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/placeholder.png" alt="User Placeholder" style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;" />
                                @endif
                                
                                <h3 class="name">{{ $feedback->name }}</h3>
                                <p class="address text-muted">{{ $feedback->office_address }}</p>
                                
                                {{-- Star Rating (Static as per previous discussion) --}}
                                <div class="mb-2">
                                    <span class="fas fa-star active-star" aria-hidden="true"></span>
                                    <span class="fas fa-star active-star" aria-hidden="true"></span>
                                    <span class="fas fa-star active-star" aria-hidden="true"></span>
                                    <span class="fas fa-star active-star" aria-hidden="true"></span>
                                    <span class="fas fa-star-half-alt active-star" aria-hidden="true"></span>
                                </div>
                            </div>
                            <p class="">
                                {{ $feedback->feedback }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#demo1"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo1"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>
@endif

            <section class="section-header grey-blue" id="awards" style="padding-bottom: 0px">
                <div class="container-fluid awards text-center" style="background: #fff; padding: 30px 20px">
                    <div class="section-title" style="padding: 0px 20px">
                        <h2>Awards</h2>
                    </div>
                    <p
                        style="
        padding: 0px 100px;
        font-weight: 400;
        line-height: 22px;
        font-size: 16px;
      ">
                        We have earned our recognition and it feels great every time when
                        we are praised and recognised by distinguished organisations. Some
                        of the awards we have received for our services and initiatives
                    </p>
                    <div class="row gx-0 mt-5 text-center">
                        <div class="col-lg-4 mb-3 awardBox">
                            <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/award3.jpg"
                                alt="Religare Broking" class="img-fluid" />
                        </div>
                        <div class="col-lg-4 mb-3 awardBox">
                            <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/award4.jpg"
                                alt="Religare Broking" class="img-fluid" />
                        </div>
                        <div class="col-lg-4 mb-3 awardBox">
                            <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/award2.jpg"
                                alt="Religare Broking" class="img-fluid" />
                        </div>
                        <div class="col-lg-4 mb-3 awardBox">
                            <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/award1.jpg"
                                alt="Religare Broking" class="img-fluid" />
                        </div>
                        <div class="col-lg-4 mb-3 awardBox">
                            <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/award5.jpg"
                                alt="Religare Broking" class="img-fluid" />
                        </div>
                        <div class="col-lg-4 mb-3 awardBox">
                            <img src="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/images/award6.jpg"
                                alt="Religare Broking" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </section>
        </main>

    @endsection
