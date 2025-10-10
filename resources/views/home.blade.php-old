@extends('web')

@section('title', 'Home Page')

@section('content')


    <!--Slider Start-->
    <div id="carouselExampleCaptions" class="carousel slide" style="margin-top:9rem!important" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
@foreach ($sliders as $index => $slider)
    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
        <img src="{{ asset('public/uploads/sliders/' . $slider->image) }}" height="400" width="100%" class="d-block" alt="{{ $slider->title }}">
        <div class="carousel-caption d-none d-md-block">
            <h5>{{ $slider->title }}</h5>
            <p>{{ $slider->description }}</p>
        </div>
    </div>
@endforeach

        <!--<div class="carousel-item">-->
        <!--  <img src="https://img.freepik.com/free-vector/online-job-interview_23-2148612474.jpg?ga=GA1.1.3878707.1729821176&semt=ais_hybrid" height="400" width="100" class="d-block w-100" alt="...">-->
        <!--  <div class="carousel-caption d-none d-md-block">-->
        <!--    <h5>Second slide label</h5>-->
        <!--    <p>Some representative placeholder content for the second slide.</p>-->
        <!--  </div>-->
        <!--</div>-->
        <!--<div class="carousel-item">-->
        <!--  <img src="https://img.freepik.com/free-vector/online-job-interview_23-2148612474.jpg?ga=GA1.1.3878707.1729821176&semt=ais_hybrid" height="400" width="100" class="d-block w-100" alt="...">-->
        <!--  <div class="carousel-caption d-none d-md-block">-->
        <!--    <h5>Third slide label</h5>-->
        <!--    <p>Some representative placeholder content for the third slide.</p>-->
        <!--  </div>-->
        <!--</div>-->
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
    <!--Slider End-->
    <!-- billboard start  -->
    <section id="billboard">
        <div class="container ">
            <div class="row flex-lg-row-reverse align-items-center ">

                <div class="col-lg-6">
                    <img src="{{ asset('public/theme/web') }}/images/home.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                        width="700" height="500" loading="lazy">
                </div>

                <div class="col-lg-6">
                    <h1 class=" text-capitalize  lh-1 my-3">ADARSH MAHITI KENDRA</h1>
                    <p class="lead">Boost your monthly income by registering as ADARSH MAHITI KENDRA. You can open a one-stop digital shop and earn commission by providing services such as cash withdrawal, cash deposit, money transfer, pan correction and updation, AePS linked transactions, loans, insurance, ticket booking and much more in your local area.</p>
                   <div >
                   <button type="submit"
                    class="btn btn-primary btn-lg billboard-search" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
                                
                   </div>
                </div>
            </div>
        </div>
    </section>
<?/*
    <!-- Feature start  -->
    <section id="feature">
        <div class="container py-5">
            <div class="row">
                <div class="section-header align-center mb-5">
                    <h2 class=" text-capitalize m-0">Featured In</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-between">
                <div class="col-md-2 ">
                    <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
                            alt="image" src="{{ asset('public/theme/web') }}/images/logo1.png"></div>
                </div>
                <div class="col-md-2">
                    <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
                            alt="image" src="{{ asset('public/theme/web') }}/images/logo2.png"></div>
                </div>
                <div class="col-md-2">
                    <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
                            alt="image" src="{{ asset('public/theme/web') }}/images/logo3.png"></div>
                </div>
                <div class="col-md-2">
                    <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
                            alt="image" src="{{ asset('public/theme/web') }}/images/logo4.png"></div>
                </div>
                <div class="col-md-2">
                    <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
                            alt="image" src="{{ asset('public/theme/web') }}/images/logo6.png"></div>
                </div>


            </div>
        </div>
    </section>

    

    <!--About us start  -->
    <section id="about-us">
        <div class="container">
            <div class="row py-lg-5">

                <h2 class="text-capitalize text-center m-0 py-lg-5">Why to choose us</h2>

                <div class="text-center col-lg-4">
                    <img src="{{ asset('public/theme/web') }}/images/search.png" class="bd-placeholder-img rounded-circle" alt="Bootstrap Themes"
                        width="140" height="140" loading="lazy">
                    <h4 class="fw-normal mt-5 ">Easy to find</h4>
                    <p>Urna, massa aliqua dui pellentesque. Ac, gravida in. Diam vitae, nec mattis lectus quam pretium
                        amet
                        facilisis.</p>
                </div>

                <div class="text-center col-lg-4">
                    <img src="{{ asset('public/theme/web') }}/images/price.png" class="bd-placeholder-img rounded-circle" alt="Bootstrap Themes"
                        width="140" height="140" loading="lazy">
                    <h4 class="fw-normal mt-5">Affordable Prices</h4>
                    <p>Urna, massa aliqua dui pellentesque. Ac, gravida in. Diam vitae, nec mattis lectus quam pretium
                        amet
                        facilisis.</p>
                </div>

                <div class="text-center col-lg-4">
                    <img src="{{ asset('public/theme/web') }}/images/time.png" class="bd-placeholder-img rounded-circle" alt="Bootstrap Themes"
                        width="140" height="140" loading="lazy">
                    <h4 class="fw-normal mt-5 ">Quickly Process</h4>
                    <p>Ac, gravida in diam vitae, nec mattis lectus quam pretium amet facilisis. Urna, massa aliqua dui
                        pellentesque. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial start  -->
    <section id="testimonial">
        <div class="container my-5">



            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="row my-5 py-lg-5">
                            <div class="col-md-8 mx-auto">
                                <img src="{{ asset('public/theme/web') }}/images/quote.png" class="rounded mx-auto d-inline" alt="...">
                                <p class="testimonial-p mt-4">Massa semper non rutrum orci facilisi sit. Lectus porta
                                    quam a fringilla
                                    eget viverra sem. Vulputate massa hendrerit turpis gravida tempor, porttitor.</p>

                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="pt-5 mb-1">Elena Pravo</p>
                                        <p class="">Ceo, Upstate</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="row my-5 py-lg-5">
                            <div class="col-md-8 mx-auto">
                                <img src="{{ asset('public/theme/web') }}/images/quote.png" class="rounded mx-auto d-inline" alt="...">
                                <p class="testimonial-p mt-4">Massa semper non rutrum orci facilisi sit. Lectus porta
                                    quam a fringilla
                                    eget viverra sem. Vulputate massa hendrerit turpis gravida tempor, porttitor.</p>

                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="pt-5 mb-1">Elena Pravo</p>
                                        <p class="">Ceo, Upstate</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="row my-5 py-lg-5">
                            <div class="col-md-8 mx-auto">
                                <img src="{{ asset('public/theme/web') }}/images/quote.png" class="rounded mx-auto d-inline" alt="...">
                                <p class="testimonial-p mt-4">Massa semper non rutrum orci facilisi sit. Lectus porta
                                    quam a fringilla
                                    eget viverra sem. Vulputate massa hendrerit turpis gravida tempor, porttitor.</p>

                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="pt-5 mb-1">Elena Pravo</p>
                                        <p class="">Ceo, Upstate</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>

                <div class=" testimonial-swiper-button col-md-3 position-absolute">
                    <div class="swiper-button-prev testimonial-arrow"></div>
                    <div class="arrow-divider"> | </div>
                    <div class="swiper-button-next testimonial-arrow"></div>
                </div>

            </div>
        </div>
    </section>

    <!-- Help start  -->
    <section id="help" class="py-5"
        style="background: linear-gradient(270deg, #1A242F 0.01%, rgba(26, 36, 47, 0.00) 100%);">
        <div class="container-lg my-5">

            <div class="row d-flex justify-content-between align-items-center">

                <div class="col-md-6">
                    <div class="image-holder d-flex">
                        <img src="{{ asset('public/theme/web') }}/images/group.png" class="img-fluid" alt="Bootstrap Themes" loading="lazy">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="text-content ps-md-5 mt-4 mt-md-0">
                        <h2 class="text-capitalize">We help people to find homes</h2>
                        <p>Mauris orci donec blandit maecenas. Orci lorem purus porttitor massa consectetur. Neque,
                            vestibulum sed
                            varius magna et at. Eu, adipiscing morbi augue justo. Nibh laoreet volutpat quis velit.
                            Blandit aliquam
                            donec sed morbi congue eget lorem viverra porta id lobortis.</p>
                        <a href="index.html" class="btn btn-primary btn-lg">Get In Touch</a>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Lets start  -->
    <section id="start">
        <div class="container my-5 py-5">
            <div class="row featurette py-lg-5 ">
                <div class="col-md-5 order-md-1 d-flex">
                    <h1 class="text-capitalize  lh-1 mb-3">Let’s simply begin with rentiz.</h1>
                </div>
                <div class="col-md-7 order-md-2">
                    <div class="text-content ps-md-5 mt-4 mt-md-0">
                        <p class="py-lg-2">Neque, vestibulum sed varius magna et at. Eu, adipiscing morbi augue justo.
                            Nibh
                            laoreet volutpat quis velit. Blandit aliquam donec sed morbi congue eget lorem viverra porta
                            id
                            lobortis.</p>
                        <a href="index.html" class="btn btn-primary btn-lg px-4 me-md-2">Get
                            Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
*/?>
@endsection
