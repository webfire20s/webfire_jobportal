@extends('web-layout')
@section('title', 'Product Services')
@section('content')
    <main class="bg-gray-50">
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-blue-600 to-indigo-800 text-white py-12">
            <div class="container mx-auto px-4">
                <nav class="flex items-center text-sm mb-6" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="/" class="text-blue-200 hover:text-white inline-flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-blue-200 md:ml-2">Products & Services</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-4xl font-bold mb-4">Our Products & Services</h1>
                <p class="text-lg text-blue-100 max-w-3xl">
                    We are a technology driven company, focusing on creating India's largest network of last-mile retail outlets to enable financial inclusion, social inclusion, and wider access to essential services across the nation.
                </p>
            </div>
        </div>

        <!-- Recharge & Bill Payments Section -->
        <section id="RechargeBillPayments" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center max-w-4xl mx-auto mb-12" data-aos="fade-up">
                    <span class="inline-block px-4 py-1 text-sm font-semibold text-purple-600 bg-purple-100 rounded-full mb-4">Digital Payments</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Recharge & Bill Payments</h2>
                    <p class="text-lg text-gray-600">
                        Handle all your digital payments in one place with our fast, secure, and convenient recharge and bill payment services. Enjoy instant confirmations and high success rates for all your transactions.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <!-- Services List -->
                    <div class="space-y-6">
                        <!-- BBPS Service -->
                        <div id="bbps" class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-right" data-aos-delay="100">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 bg-purple-100 p-3 rounded-lg">
                                    <img src="{{ asset('public/theme/web-new/') }}/images/bbps-s.png" 
                                         class="h-12 w-12 object-contain" 
                                         alt="BBPS" 
                                         data-aos="zoom-in" 
                                         data-aos-delay="150">
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">BBPS - Bill Payments</h3>
                                    <p class="text-gray-600 mb-4">Pay all your utility bills including electricity, water, gas, broadband, FasTag, and more through the Bharat Bill Payment System. A one-stop solution for all your bill payment needs.</p>
                                    <a href="/bharat-bill-payment-system-bbps/?utm_source=Organic-BBPS" 
                                       class="inline-flex items-center text-purple-600 hover:text-purple-800 font-medium">
                                        Explore More
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Recharges Service -->
                        <div id="recharges" class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-right" data-aos-delay="150">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                                    <img src="{{ asset('public/theme/web-new/') }}/images/recharge-s.png" 
                                         class="h-12 w-12 object-contain" 
                                         alt="Mobile & DTH Recharge" 
                                         data-aos="zoom-in" 
                                         data-aos-delay="150">
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Mobile & DTH Recharge</h3>
                                    <p class="text-gray-600">Instant recharges for prepaid mobiles, DTH, and data cards. Stay connected with our fast, secure, and reliable recharge services available 24/7.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image and CTA -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl" data-aos="fade-left">
                        <img src="{{ asset('public/theme/web-new/') }}/images/products1.png" 
                             class="w-full h-auto object-cover" 
                             alt="Recharge & Bill Payments"
                             data-aos="zoom-in"
                             data-aos-delay="150">
                        
                        <div class="p-6 flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('sign_up.form') }}" 
                               class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 transition-colors duration-200">
                                Join Now
                            </a>
                            <a href="{{ route('contact') }}" 
                               class="inline-flex items-center justify-center px-6 py-3 border border-purple-600 text-base font-medium rounded-md text-purple-700 bg-white hover:bg-purple-50 transition-colors duration-200">
                                Income Calculator
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- E-Governance Services Section -->
        <section id="eGovService" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center max-w-4xl mx-auto mb-12" data-aos="fade-up">
                    <span class="inline-block px-4 py-1 text-sm font-semibold text-blue-600 bg-blue-100 rounded-full mb-4">Our Services</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">E-Governance Services</h2>
                    <p class="text-lg text-gray-600">
                        The use of information technology and communication for administrative purposes is known as e-governance. Our goal is to deliver government services to citizens in a fast, secure, and transparent manner, making governance more accessible and efficient for everyone.
                    </p>
                </div>


            <!-- Services Grid -->
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <!-- Service Image -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl" data-aos="fade-right">
                        <img src="{{ asset('public/theme/web-new/') }}/images/products1.png" 
                             class="w-full h-auto object-cover" 
                             alt="E-Governance Services"
                             data-aos="zoom-in"
                             data-aos-delay="150">
                        
                        <div class="p-6 flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('sign_up.form') }}" 
                               class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200">
                                Join Now
                            </a>
                            <a href="{{ route('contact') }}" 
                               class="inline-flex items-center justify-center px-6 py-3 border border-blue-600 text-base font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50 transition-colors duration-200">
                                Income Calculator
                            </a>
                        </div>
                    </div>

                    <!-- Services List -->
                    <div class="space-y-6">
                        <!-- PAN Service -->
                        <div id="pan" class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-left" data-aos-delay="100">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                                    <img src="{{ asset('public/theme/web-new/') }}/images/pan-s.png" 
                                         class="h-12 w-12 object-contain" 
                                         alt="PAN" 
                                         data-aos="zoom-in" 
                                         data-aos-delay="150">
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">PAN Card Services</h3>
                                    <p class="text-gray-600 mb-4">Become a PAN Card agent and provide essential services like new PAN applications and updates across the country. Our robust network ensures a seamless experience for both you and your customers.</p>
                                    <a href="/pan-card-center/?utm_source=Organic-PAN" 
                                       class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                                        Explore More
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>


                            <!-- ITR Filing Service -->
                        <div id="tds" class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-left" data-aos-delay="150">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 bg-green-100 p-3 rounded-lg">
                                    <img src="{{ asset('public/theme/web-new/') }}/images/tds-s.png" 
                                         class="h-12 w-12 object-contain" 
                                         alt="ITR Filing" 
                                         data-aos="zoom-in" 
                                         data-aos-delay="150">
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">ITR Filing</h3>
                                    <p class="text-gray-600">File your Income Tax Returns (ITR) with ease. Our expert assistance ensures accurate and timely filing, helping you claim refunds and maintain tax compliance without the hassle.</p>
                                </div>
                            </div>
                        </div>


                            <!-- DSC Service -->
                        <div id="dsc" class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-left" data-aos-delay="200">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 bg-purple-100 p-3 rounded-lg">
                                    <img src="{{ asset('public/theme/web-new/') }}/images/dsc-s.png" 
                                         class="h-12 w-12 object-contain" 
                                         alt="Digital Signature Certificate" 
                                         data-aos="zoom-in" 
                                         data-aos-delay="150">
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Digital Signature Certificate (DSC)</h3>
                                    <p class="text-gray-600 mb-4">Secure your online transactions with a Digital Signature Certificate. Essential for e-filing, GST, ITR, and government tenders, our DSCs provide authenticity and legal validity for all your digital documents.</p>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="/dsc-token/?utm_source=Organic-DSC" 
                                           class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200">
                                            Explore More
                                        </a>
                                        <a href="https://religaredigital.in/buy-digital-signature-online/" 
                                           class="inline-flex items-center px-4 py-2 border border-blue-600 text-sm font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50 transition-colors duration-200">
                                            Apply for DSC
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>



                            <!-- Udyam Registration Service -->
                        <div id="udyam" class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-left" data-aos-delay="250">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 bg-yellow-100 p-3 rounded-lg">
                                    <img src="{{ asset('public/theme/web-new/') }}/images/swanidhi.png" 
                                         class="h-12 w-12 object-contain" 
                                         alt="Udyam Registration" 
                                         data-aos="zoom-in" 
                                         data-aos-delay="150">
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Udyam Registration</h3>
                                    <p class="text-gray-600 mb-4">Register your MSME under the Udyam scheme to access government benefits, subsidies, and loans. Our streamlined process ensures quick registration with complete documentation support.</p>
                                    <a href="/pmsvanidhi/?utm_source=Organic-pmsvanidhi" 
                                       class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                                        Learn More
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>



                        </div>
                    </div>



                </div>
            </div>
        </section>
        <!-- Banking & Finance Section -->
        <section id="bankingFinance" class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center max-w-4xl mx-auto mb-12" data-aos="fade-up">
                    <span class="inline-block px-4 py-1 text-sm font-semibold text-green-600 bg-green-100 rounded-full mb-4">Financial Services</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Banking & Finance Solutions</h2>
                    <p class="text-lg text-gray-600">
                        Bridging the urban-rural divide by providing essential banking and financial services to every corner of India. Our goal is to make financial inclusion a reality for all citizens.
                    </p>
                </div>


            <!-- Banking Services Grid -->
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <!-- Services List -->
                    <div class="space-y-6">
                        <!-- AEPS Service -->
                        <div id="aeps" class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-right" data-aos-delay="100">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                                    <img src="{{ asset('public/theme/web-new/') }}/images/aeps-s.png" 
                                         class="h-12 w-12 object-contain" 
                                         alt="AEPS" 
                                         data-aos="zoom-in" 
                                         data-aos-delay="150">
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">AEPS Services</h3>
                                    <p class="text-gray-600 mb-4">Enable cashless transactions with Aadhaar Enabled Payment System. Our AEPS services allow secure banking transactions using just Aadhaar authentication, making banking accessible to everyone.</p>
                                    <a href="/aadhaar-enabled-payment-system/?utm_source=Organic-AePS" 
                                       class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                                        Learn More
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- DMT Service -->
                        <div id="dmt" class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-right" data-aos-delay="150">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 bg-green-100 p-3 rounded-lg">
                                    <img src="{{ asset('public/theme/web-new/') }}/images/dmt-s.png" 
                                         class="h-12 w-12 object-contain" 
                                         alt="DMT" 
                                         data-aos="zoom-in" 
                                         data-aos-delay="150">
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Domestic Money Transfer (DMT)</h3>
                                    <p class="text-gray-600">Transfer money instantly to any bank account in India with our reliable and secure DMT services. Fast, convenient, and available at your nearest Adarsh Digital center.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Micro ATM Service -->
                        <div id="matm" class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-right" data-aos-delay="200">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 bg-purple-100 p-3 rounded-lg">
                                    <img src="{{ asset('public/theme/web-new/') }}/images/micro-atm-s.png" 
                                         class="h-12 w-12 object-contain" 
                                         alt="Micro ATM" 
                                         data-aos="zoom-in" 
                                         data-aos-delay="150">
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Micro ATM Services</h3>
                                    <p class="text-gray-600">Bring banking to your doorstep with our Micro ATM services. Perform cash withdrawals, balance inquiries, and fund transfers even in the most remote locations.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Banking Image -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl" data-aos="fade-left">
                        <img src="{{ asset('public/theme/web-new/') }}/images/products1.png" 
                             class="w-full h-auto object-cover" 
                             alt="Banking & Finance"
                             data-aos="zoom-in"
                             data-aos-delay="150">
                        
                        <div class="p-6 flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('sign_up.form') }}" 
                               class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700 transition-colors duration-200">
                                Join Now
                            </a>
                            <a href="{{ route('contact') }}" 
                               class="inline-flex items-center justify-center px-6 py-3 border border-green-600 text-base font-medium rounded-md text-green-700 bg-white hover:bg-green-50 transition-colors duration-200">
                                Income Calculator
                            </a>
                        </div>
                    </div>

                    

                            <section class="nobg p-0" id="csp">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/csp-s.png"
                                            class="img-fluid aos-init" alt="CSP" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont ">
                                        <h3>CSP</h3>
                                        <p>Customer Service Point (CSP) will enable people to open bank accounts, withdraw and deposit money from any part of India with the help of agents.</p>
                                        <button class="btn joinBtn"><a href="/csp-agent/" class="btn-learn-more">Explore
                                                More</a></button>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>



                </div>
            </div>
        </section>
        
        <!-- Travels Section -->
        <section id="Travels" class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center max-w-4xl mx-auto mb-12" data-aos="fade-up">
                    <span class="inline-block px-4 py-1 text-sm font-semibold text-orange-600 bg-orange-100 rounded-full mb-4">Travel Solutions</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Travel & Booking Services</h2>
                    <p class="text-lg text-gray-600">
                        Book flights, trains, buses, and hotels quickly and conveniently from a single platform. Enjoy competitive prices, time-saving features, and a smooth booking experience with our trusted travel solutions.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <!-- Travel Image -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden order-2 md:order-1 transition-transform duration-300 hover:shadow-xl" data-aos="fade-right">
                        <img src="{{ asset('public/theme/web-new/') }}/images/products1.png" 
                             class="w-full h-auto object-cover" 
                             alt="Travel Services"
                             data-aos="zoom-in"
                             data-aos-delay="150">
                        
                        <div class="p-6 flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="/become-a-ticketing-agent" 
                               class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 transition-colors duration-200">
                                Become an Agent
                            </a>
                            <a href="{{ route('contact') }}" 
                               class="inline-flex items-center justify-center px-6 py-3 border border-orange-600 text-base font-medium rounded-md text-orange-700 bg-white hover:bg-orange-50 transition-colors duration-200">
                                Income Calculator
                            </a>
                        </div>
                    </div>

                    <!-- Travel Services List -->
                    <div class="space-y-6 order-1 md:order-2">
                        <!-- Train Tickets -->
                        <div id="traintickets" class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-left" data-aos-delay="100">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                                    <img src="{{ asset('public/theme/web-new/') }}/images/irctc-s.png" 
                                         class="h-12 w-12 object-contain" 
                                         alt="Train Tickets" 
                                         data-aos="zoom-in" 
                                         data-aos-delay="150">
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Train Tickets</h3>
                                    <p class="text-gray-600 mb-4">Become an IRCTC agent and help customers book train tickets to any destination across India. Our user-friendly platform makes booking quick and hassle-free for both agents and customers.</p>
                                    <a href="/rail-e-ticketing/?utm_source=Organic-Rail-Ticket" 
                                       class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                                        Explore More
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Bus Tickets -->
                        <div id="bustickets" class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-left" data-aos-delay="150">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 bg-green-100 p-3 rounded-lg">
                                    <img src="{{ asset('public/theme/web-new/') }}/images/buslogo.png" 
                                         class="h-12 w-12 object-contain" 
                                         alt="Bus Tickets" 
                                         data-aos="zoom-in" 
                                         data-aos-delay="150">
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Bus Tickets</h3>
                                    <p class="text-gray-600">Book bus tickets easily across all major Indian routes. Enjoy real-time seat availability, multiple payment options, and instant booking confirmations with our reliable platform.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Air Tickets -->
                        <div id="airtickets" class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-left" data-aos-delay="200">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 bg-purple-100 p-3 rounded-lg">
                                    <img src="https://religaredigital.in/wp-content/uploads/2022/12/ticket.png" 
                                         class="h-12 w-12 object-contain" 
                                         alt="Air Tickets" 
                                         data-aos="zoom-in" 
                                         data-aos-delay="150">
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Air Tickets</h3>
                                    <p class="text-gray-600">Book domestic and international flights with ease. Access real-time schedules, competitive fares, and instant e-ticket confirmations through our trusted platform.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Investments Section -->
<section id="Investments" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        
        <!-- Section Header -->
        <div class="text-center max-w-4xl mx-auto mb-12" data-aos="fade-up">
            <span class="inline-block px-4 py-1 text-sm font-semibold text-green-600 bg-green-100 rounded-full mb-4">
                Investment Services
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Smart & Secure Investment Options</h2>
            <p class="text-lg text-gray-600">
                Explore a wide range of investment products under one platform. Our trained agents help you invest
                easily and transparently with secure and reliable investment services.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 items-center">
            
            <!-- Investment Image + Buttons -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden order-2 md:order-1 transition-transform duration-300 hover:shadow-xl" data-aos="fade-right">
                
                <img src="{{ asset('public/theme/web-new/') }}/images/products1.png"
                     class="w-full h-auto object-cover"
                     alt="Investments"
                     data-aos="zoom-in"
                     data-aos-delay="150">

                <div class="p-6 flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('sign_up.form') }}"
                       class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700 transition-colors duration-200">
                        Join Now
                    </a>

                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center px-6 py-3 border border-green-600 text-base font-medium rounded-md text-green-700 bg-white hover:bg-green-50 transition-colors duration-200">
                        Income Calculator
                    </a>
                </div>
            </div>

            <!-- Investment Services List -->
            <div class="space-y-6 order-1 md:order-2">

                <!-- NPS -->
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300"
                     data-aos="fade-left" data-aos-delay="100">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-yellow-100 p-3 rounded-lg">
                            <img src="{{ asset('public/theme/web-new/') }}/images/nps-s.png"
                                 class="h-12 w-12 object-contain"
                                 alt="NPS"
                                 data-aos="zoom-in"
                                 data-aos-delay="150">
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">National Pension System (NPS)</h3>
                            <p class="text-gray-600 mb-4">A government-backed retirement savings scheme that offers market-linked returns and tax benefits. Start NPS registration and contributions easily with us.</p>
                            <a href="https://www.religaredigital.in/become-nps-agent/?utm_source=Organic-NPS"
                               target="_blank"
                               class="inline-flex items-center text-yellow-600 hover:text-yellow-800 font-medium">
                                Explore More
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Mutual Fund -->
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300"
                     data-aos="fade-left" data-aos-delay="150">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                            <img src="{{ asset('public/theme/web-new/') }}/images/mf-s.png"
                                 class="h-12 w-12 object-contain"
                                 alt="Mutual Fund"
                                 data-aos="zoom-in"
                                 data-aos-delay="150">
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Mutual Fund</h3>
                            <p class="text-gray-600 mb-4">Invest in professionally managed mutual funds to grow your wealth. Secure, flexible, and easy investment solutions for individuals and agents.</p>
                            <a href="https://www.religaredigital.in/become-mutual-fund-agent/?utm_source=Organic-Mutual-fund"
                               target="_blank"
                               class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                                Explore More
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Fixed Deposit -->
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300"
                     data-aos="fade-left" data-aos-delay="200">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-red-100 p-3 rounded-lg">
                            <img src="{{ asset('public/theme/web-new/') }}/images/fd-s.png"
                                 class="h-12 w-12 object-contain"
                                 alt="FD"
                                 data-aos="zoom-in"
                                 data-aos-delay="150">
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Fixed Deposit (FD)</h3>
                            <p class="text-gray-600 mb-4">Earn assured interest with fixed deposits. A safe and reliable way to grow your savings over a fixed period.</p>
                            <a href="/fixed-deposit-fd/?utm_source=Organic-FD"
                               class="inline-flex items-center text-red-600 hover:text-red-800 font-medium">
                                Explore More
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Demat Account -->
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300"
                     data-aos="fade-left" data-aos-delay="250">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-purple-100 p-3 rounded-lg">
                            <img src="{{ asset('public/theme/web-new/') }}/images/ipo-s.png"
                                 class="h-12 w-12 object-contain"
                                 alt="Demat Account"
                                 data-aos="zoom-in"
                                 data-aos-delay="150">
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Demat Account</h3>
                            <p class="text-gray-600">Open a Demat account to hold shares, bonds, and mutual funds digitally. Secure, paperless, and easy for all investors and agents.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

        <section id="Insurances" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Section Title -->
        <div class="text-center max-w-4xl mx-auto mb-12" data-aos="fade-up">
            <span class="inline-block px-4 py-1 text-sm font-semibold text-orange-600 bg-orange-100 rounded-full mb-4">
                Insurance Services
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Insurance</h2>
            <p class="text-lg text-gray-600">
                We understand that even a minor accident can create a big hole in your savings. From motor insurance,
                health insurance, life insurance to general insurance – we have got you and your loved ones covered
                for everything!
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 items-center">
            <!-- Insurance Image + Buttons -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden order-2 md:order-1 transition-transform duration-300 hover:shadow-xl" data-aos="fade-right">
                <img src="{{ asset('public/theme/web-new/') }}/images/products1.png"
                     class="w-full h-auto object-cover"
                     alt="Insurances"
                     data-aos="zoom-in"
                     data-aos-delay="150">

                <div class="p-6 flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/become-an-insurance-agent"
                       class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 transition-colors duration-200">
                        Join Now
                    </a>

                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center px-6 py-3 border border-orange-600 text-base font-medium rounded-md text-orange-700 bg-white hover:bg-orange-50 transition-colors duration-200">
                        Income Calculator
                    </a>
                </div>
            </div>

            <!-- Insurance Service List -->
            <div class="space-y-6 order-1 md:order-2">

                <!-- Two Wheeler Insurance -->
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300"
                     data-aos="fade-left" data-aos-delay="100">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                            <img src="{{ asset('public/theme/web-new/') }}/images/two-wheeler-ins-s.png"
                                 class="h-12 w-12 object-contain"
                                 alt="Two Wheeler Insurance"
                                 data-aos="zoom-in"
                                 data-aos-delay="150">
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Two Wheeler Insurance</h3>
                            <p class="text-gray-600">
                                A two-wheeler insurance policy is an insurance cover for protection of scooters & bikes.
                                It covers accidental repairs, theft, natural disaster losses, vandalism, and more.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Four Wheeler Insurance -->
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300"
                     data-aos="fade-left" data-aos-delay="150">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-green-100 p-3 rounded-lg">
                            <img src="{{ asset('public/theme/web-new/') }}/images/four-wheeler-insurance-s.png"
                                 class="h-12 w-12 object-contain"
                                 alt="Four Wheeler Insurance"
                                 data-aos="zoom-in"
                                 data-aos-delay="150">
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Four Wheeler Insurance</h3>
                            <p class="text-gray-600">
                                Provides financial protection against damages, theft, and third-party liabilities.
                                Includes instant quotes and paperless policy renewal.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Health Insurance -->
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300"
                     data-aos="fade-left" data-aos-delay="200">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-purple-100 p-3 rounded-lg">
                            <img src="{{ asset('public/theme/web-new/') }}/images/healthcare-s.png"
                                 class="h-12 w-12 object-contain"
                                 alt="Health Insurance"
                                 data-aos="zoom-in"
                                 data-aos-delay="150">
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Health Insurance</h3>
                            <p class="text-gray-600">
                                Covers medical and hospitalization expenses while ensuring access to quality healthcare.
                                Includes quick policy issuance and renewal support.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Life Insurance -->
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow duration-300"
                     data-aos="fade-left" data-aos-delay="250">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-yellow-100 p-3 rounded-lg">
                            <img src="{{ asset('public/theme/web-new/') }}/images/shield-s.png"
                                 class="h-12 w-12 object-contain"
                                 alt="Life Insurance"
                                 data-aos="zoom-in"
                                 data-aos-delay="150">
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Life Insurance</h3>
                            <p class="text-gray-600">
                                Provides financial protection for your family with long-term security through lump-sum
                                or periodic payouts. Includes easy policy issuance and renewal support.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

        <section id="ECommerce" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4" data-aos="fade-up">
        
        <!-- Section Title -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl font-bold mb-4">E-Commerce</h2>
            <p class="text-gray-600 leading-relaxed">
                Who doesn't love shopping? We provide online shopping solutions to rural and semi-urban India.
                Our trained agents help customers place Amazon orders easily, with doorstep delivery.
            </p>
        </div>

        <!-- Content Row -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

            <!-- Left Image + Buttons -->
            <div class="text-center" data-aos="zoom-in" data-aos-delay="150">
                <img src="{{ asset('public/theme/web-new/') }}/images/products1.png"
                     alt="E-Commerce"
                     class="w-full max-w-md mx-auto rounded-lg shadow-md">

                <div class="flex justify-center gap-4 mt-6">
                    <a href="{{ route('sign_up.form') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
                        Join Now
                    </a>
                    <a href="{{ route('contact') }}" class="px-6 py-3 bg-gray-800 text-white rounded-lg shadow hover:bg-gray-900 transition">
                        Income Calculator
                    </a>
                </div>
            </div>

            <!-- Right Content -->
            <div class="space-y-6" data-aos="fade-left">

                <!-- Amazon Box -->
                <div class="p-6 bg-white rounded-xl shadow">
                    <div class="flex items-center gap-5">
                        <img src="{{ asset('public/theme/web-new/') }}/images/amazon-s.png"
                             alt="Amazon"
                             class="w-20"
                             data-aos="zoom-in"
                             data-aos-delay="150">

                        <div>
                            <h3 class="text-xl font-semibold">Amazon</h3>
                            <p class="text-gray-600">
                                Our well-trained agents help customers place Amazon orders in a hassle-free manner.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

        <section id="Loan" class="py-5 bg-light">
    <div class="section-title text-center mb-5" data-aos="fade-up">
        <div class="container">
            <h2 class="fw-bold">Loan Services</h2>
            <p class="text-muted mx-auto" style="max-width: 750px;">
                Our loan services include both secured and unsecured loans with low interest rates. 
                We partner with top banks to offer safe, secure and quick credit access for all ticket sizes.
                Enjoy hassle-free credit with affordable EMIs.
            </p>
        </div>
    </div>

    <div class="container" data-aos="fade-up">

        <div class="row align-items-center">

            <!-- Left Image & Buttons -->
            <div class="col-lg-5 text-center mb-4 mb-lg-0" data-aos="zoom-in" data-aos-delay="150">
                <img src="{{ asset('public/theme/web-new/') }}/images/products1.png"
                     class="img-fluid rounded shadow" alt="Loan Services">

                <div class="d-flex justify-content-center gap-3 mt-4">
                    <a href="{{ route('sign_up.form') }}" class="btn btn-primary px-4">Join Now</a>
                    <a href="{{ route('contact') }}" class="btn btn-dark px-4">Income Calculator</a>
                </div>
            </div>

            <!-- Right Loan List -->
            <div class="col-lg-7">

                <!-- Wrapper -->
                <div class="loan-list">

                    <!-- Loan Item -->
                    <div class="loan-box d-flex gap-3 p-3 mb-3 bg-white rounded shadow-sm" data-aos="fade-left">
                        <img src="{{ asset('public/theme/web-new/') }}/images/vespa-scooter.png" width="70" alt="Two Wheeler Loan">
                        <div>
                            <h4 class="fw-bold">Two Wheeler Loan</h4>
                            <p class="text-muted">Purchase a bike or scooter with low EMIs and minimal documentation.</p>
                            <a href="/two-wheeler-loan/?utm_source=Organic-two-wheeler-loan" class="btn btn-outline-primary btn-sm">Explore More</a>
                        </div>
                    </div>

                    <div class="loan-box d-flex gap-3 p-3 mb-3 bg-white rounded shadow-sm" data-aos="fade-left">
                        <img src="{{ asset('public/theme/web-new/') }}/images/real-estate.png" width="70" alt="Home Loan">
                        <div>
                            <h4 class="fw-bold">Home Loan</h4>
                            <p class="text-muted">Buy, construct or renovate your house with flexible tenure up to 30 years.</p>
                            <a href="/home-loan/?utm_source=Organic-HomeLoan" class="btn btn-outline-primary btn-sm">Explore More</a>
                        </div>
                    </div>

                    <div class="loan-box d-flex gap-3 p-3 mb-3 bg-white rounded shadow-sm" data-aos="fade-left">
                        <img src="{{ asset('public/theme/web-new/') }}/images/personal.png" width="70" alt="Personal Loan">
                        <div>
                            <h4 class="fw-bold">Personal Loan</h4>
                            <p class="text-muted">Unsecured loans for education, medical, travel, home renovation and more.</p>
                            <a href="/personal-loan/?utm_source=Organic-PersonalLoan" class="btn btn-outline-primary btn-sm">Explore More</a>
                        </div>
                    </div>

                    <div class="loan-box d-flex gap-3 p-3 mb-3 bg-white rounded shadow-sm" data-aos="fade-left">
                        <img src="{{ asset('public/theme/web-new/') }}/images/tractor.png" width="70" alt="Tractor Loan">
                        <div>
                            <h4 class="fw-bold">Tractor Loan</h4>
                            <p class="text-muted">Easy financing for tractors, harvesters, loaders and agricultural equipment.</p>
                            <a href="/tractor-loan/?utm_source=Organic-TractorLoan" class="btn btn-outline-primary btn-sm">Explore More</a>
                        </div>
                    </div>

                    <div class="loan-box d-flex gap-3 p-3 mb-3 bg-white rounded shadow-sm" data-aos="fade-left">
                        <img src="{{ asset('public/theme/web-new/') }}/images/gold.png" width="70" alt="Gold Loan">
                        <div>
                            <h4 class="fw-bold">Gold Loan</h4>
                            <p class="text-muted">Instant cash by pledging gold with low interest and flexible repayment.</p>
                            <a href="/gold-loan/?utm_source=Organic-GoldLoan" class="btn btn-outline-primary btn-sm">Explore More</a>
                        </div>
                    </div>

                    <div class="loan-box d-flex gap-3 p-3 mb-3 bg-white rounded shadow-sm" data-aos="fade-left">
                        <img src="{{ asset('public/theme/web-new/') }}/images/msme-icon.png" width="70" alt="MSME Loan">
                        <div>
                            <h4 class="fw-bold">MSME Loan</h4>
                            <p class="text-muted">Quick funding to help MSMEs with growth, capital, machinery & expansion.</p>
                            <a href="/msme-loan/?utm_source=Organic-MSMELoan" class="btn btn-outline-primary btn-sm">Explore More</a>
                        </div>
                    </div>

                    <div class="loan-box d-flex gap-3 p-3 mb-3 bg-white rounded shadow-sm" data-aos="fade-left">
                        <img src="{{ asset('public/theme/web-new/') }}/images/AGRI.png" width="70" alt="Agri & Rural Loan">
                        <div>
                            <h4 class="fw-bold">Agri & Rural Loan</h4>
                            <p class="text-muted">Loans for farmers for agriculture and related non-agricultural activities.</p>
                            <a href="/agri-and-rural/?utm_source=Organic-AgriRuralLoan" class="btn btn-outline-primary btn-sm">Explore More</a>
                        </div>
                    </div>

                    <div class="loan-box d-flex gap-3 p-3 mb-3 bg-white rounded shadow-sm" data-aos="fade-left">
                        <img src="{{ asset('public/theme/web-new/') }}/images/Loan-against-property-icon.png" width="70" alt="Loan Against Property">
                        <div>
                            <h4 class="fw-bold">Loan Against Property</h4>
                            <p class="text-muted">Secure loan for business expansion, education, renovation, emergencies.</p>
                            <a href="/loan-against-property/?utm_source=Organic-LonaAgainstPropertyLoan" class="btn btn-outline-primary btn-sm">Explore More</a>
                        </div>
                    </div>

                    <div class="loan-box d-flex gap-3 p-3 bg-white rounded shadow-sm" data-aos="fade-left">
                        <img src="{{ asset('public/theme/web-new/') }}/images/auto-loan-icon.png" width="70" alt="Auto Loan">
                        <div>
                            <h4 class="fw-bold">Auto Loan</h4>
                            <p class="text-muted">Finance for new/used cars, commercial vehicles and two-wheelers.</p>
                            <a href="/auto-loan/?utm_source=Organic-AutoLoan" class="btn btn-outline-primary btn-sm">Explore More</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>

        <section id="devices" class="py-16 bg-gray-50">
    <div class="text-center mb-12" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-gray-800">Devices</h2>
        <p class="text-gray-600 max-w-2xl mx-auto mt-4">
            ADARSH Digital brings high quality biometric devices and printers for digital partners at
            affordable price. We are running special discounts and offers for egov partners and agents.
        </p>
    </div>

    <div class="container mx-auto px-4" data-aos="fade-up">
        <div class="flex flex-col lg:flex-row items-center gap-10 bg-white p-8 rounded-2xl shadow-lg">

            <!-- LEFT IMAGE + BUTTONS -->
            <div class="lg:w-5/12 w-full">
                <img src="{{ asset('public/theme/web-new/') }}/images/products1.png"
                     alt="Devices"
                     class="w-full rounded-xl shadow-md"
                     data-aos="zoom-in"
                     data-aos-delay="150">

                <div class="flex justify-center gap-4 mt-6">
                    <a href="{{ route('sign_up.form') }}"
                       class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700 transition">
                        Join Now
                    </a>

                    <a href="{{ route('contact') }}"
                       class="bg-green-600 text-white px-6 py-2 rounded-lg shadow hover:bg-green-700 transition">
                        Income Calculator
                    </a>
                </div>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="lg:w-7/12 w-full space-y-10">

                <!-- Biometric Devices -->
                <div class="flex gap-6">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('public/theme/web-new/') }}/images/biometric-identification1.png"
                             width="70"
                             class="mx-auto"
                             alt="Biometric Devices"
                             data-aos="zoom-in"
                             data-aos-delay="150">
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Biometric Devices</h3>
                        <p class="text-gray-600 mt-2">
                            Biometric Devices help agents to capture biometric details of the user
                            conveniently and verify the identity online as per Aadhaar. We offer best
                            biometric devices ensuring safe transactions, minimum false positives and
                            affordable pricing.
                        </p>

                        <a href="/biometric-device/?utm_source=Organic-BiometricDevice"
                           class="inline-block mt-3 bg-blue-600 text-white px-5 py-2 rounded-lg shadow hover:bg-blue-700 transition">
                            Explore More
                        </a>
                    </div>
                </div>

                <!-- Printers -->
                <div class="flex gap-6">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('public/theme/web-new/') }}/images/printer.png"
                             width="70"
                             alt="Printers"
                             class="mx-auto"
                             data-aos="zoom-in"
                             data-aos-delay="150">
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Printers</h3>
                        <p class="text-gray-600 mt-2">
                            A printer is an essential device used to produce hard copies of digital documents.
                            Adarsh Digital provides high-quality printers with setup support for AEPS, recharge,
                            and bill payment centers.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

    </main>
@endsection