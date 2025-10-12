@extends('web-layout')
@section('title', 'Product Services')
@section('content')
    <main id="products">

        <div class="container breadcrumb aos-init aos-animate" data-aos="fade-up">
            <ul class="breadcrumb">
                <li><a href="/">Home</a> :: </li>
                <li> Products &amp; Services</li>
            </ul>
            <p>We are a technology driven company, focusing on creating India’s largest network of last-mile retail outlets to potentially enable every Indian to seamless benefit from financial inclusion, social inclusion, Digital India, Skill Development, Employment, Government programmes and a wider access to basic goods and services.</p>
        </div>
        <section id="eGovService" class="">
            <div class="section-title">
                <div class="container aos-init aos-animate" data-aos="fade-up">
                    <h1>E-Governance Services</h1>
                    <p class="pt-3">The use of information technology and communication for administrative purposes is known as e-governance. Its main objective is to deliver government services to citizens in a fast, secure, and transparent manner. Through e-governance, people can easily access various government schemes and services from their homes. This system helps reduce corruption, save time, and increase accountability in administration.Ultimately, the goal of e-governance is to establish a smart, digital, and citizen-centric governance system.</p>
                </div>
            </div>


            <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="row Box1">
                    <div class="col-lg-5 col-md-8 col-sm-12 order-1 order-lg-1 p-lg-0">
                        <img src="{{ asset('public/theme/web-new/') }}/images/products1.png"
                            class="img-fluid aos-init aos-animate" alt="E-Governance Services" data-aos="zoom-in"
                            data-aos-delay="150">

                        <div class="d-flex justify-content-center callToActions">

                            <button class="btn joinBtn"><a href="/Signup" class="btn-learn-more">Join Now</a></button>

                            <button class="btn joinBtn calc"><a href="/income-calculator" class="btn-learn-more">Income
                                    Calculator</a></button>

                        </div>

                    </div>

                    <div class="col-lg-7 Boxcontent order-2 order-lg-2">
                        <div class="content">


                            <section class="nobg p-0" id="pan">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/pan-s.png"
                                            class="img-fluid aos-init aos-animate" alt="PAN" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont">
                                        <h3>PAN</h3>
                                        <p>Become an Pan Card agent for providing basic services like making a new Pan Card to updating an old one for your customers across the country. Our strong Adarsh network ensures a seamless experience for you and your customers. With our prompt, hassle-free & technology-driven service, you will be able to track your application status online within 24 hrs.</p>
                                        <button class="btn joinBtn"><a href="/pan-card-center/?utm_source=Organic-PAN"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>


                            <section class="nobg p-0" id="tds">
                                <div class="row Boxrow" id="tds">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/tds-s.png"
                                            class="img-fluid aos-init" alt="TDS/eTDS" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont ">
                                        <h3>ITR Filing</h3>
                                        <p>Income Tax Return (ITR) filing helps individuals and businesses report their annual income to the government. It ensures tax compliance, allows claiming refunds, and avoids penalties. Adarsh Digital Services provides easy and secure ITR filing with expert assistance and fast processing.</p>
                                    </div>
                                </div>
                            </section>


                            <section class="nobg p-0" id="dsc">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/dsc-s.png"
                                            class="img-fluid aos-init" alt="DSC" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont ">
                                        <h3>DSC</h3>
                                        <p>A Digital Signature Certificate (DSC) is an electronic form of a signature used to sign documents online securely. It ensures authenticity, integrity, and legal validity for e-filing, GST, ITR, and government tenders. Adarsh Digital provides fast and hassle-free DSC issuance for individuals and organizations.</p>

                                        <button class="btn joinBtn"><a href="/dsc-token/?utm_source=Organic-DSC"
                                                class="btn-learn-more">Explore More</a></button>
                                        <button class="btn joinBtn" style="background:#246fad;"><a
                                                href="https://religaredigital.in/buy-digital-signature-online/"
                                                class="btn-learn-more" style="color:#fff;">Apply DSC</a></button>
                                    </div>
                                </div>
                            </section>



                            <section class="nobg p-0" id="udyam">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/swanidhi.png"
                                            class="img-fluid aos-init" alt="Udyam Registration" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont ">
                                        <h3>Udyam Registration</h3>
                                        <p>Udyam Registration is a government initiative for MSMEs (Micro, Small, and Medium Enterprises) to get official recognition and business benefits. It helps businesses access loans, subsidies, and various government schemes. Adarsh Digital offers quick and reliable Udyam registration with full documentation support.</p>
                                        <button class="btn joinBtn"><a href="/pmsvanidhi/?utm_source=Organic-pmsvanidhi"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>



                        </div>
                    </div>



                </div>
            </div>
        </section>
        <section id="bankingFinance" class="">
            <div class="section-title">
                <div class="container aos-init" data-aos="fade-up">
                    <h2>Banking &amp; Finance</h2>

                    <p>We aim to provide basic banking AEPS and finance services to the last rural citizen in order to bridge the gap between urban and rural India.</p>
                </div>
            </div>


            <div class="container aos-init" data-aos="fade-up">

                <div class="row Box1">
                    <div class="col-lg-5 col-md-8 col-sm-12 order-1 order-lg-2 p-lg-0"><img
                            src="{{ asset('public/theme/web-new/') }}/images/products1.png"
                            class="img-fluid aos-init" alt="Banking &amp; Finance" data-aos="zoom-in" data-aos-delay="150">

                        <div class="d-flex justify-content-center callToActions">

                            <button class="btn joinBtn"><a href="/Signup" class="btn-learn-more">Join Now</a></button>

                            <button class="btn joinBtn calc"><a href="/income-calculator" class="btn-learn-more">Income
                                    Calculator</a></button>

                        </div>

                    </div>

                    <div class="col-lg-7 Boxcontent order-2 order-lg-1">
                        <div class="content">


                            <section class="nobg p-0" id="aeps">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/aeps-s.png"
                                            class="img-fluid aos-init" alt="AePS" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont ">
                                        <h3>AePS</h3>
                                        <p>AEPS is a secure banking service that allows customers to perform basic financial transactions using their Aadhaar number and fingerprint authentication. It enables cash withdrawal, balance inquiry, and fund transfer without using debit cards. Adarsh Digital Services provides fast and reliable AEPS services to retailers and customers across India.</p>
                                        <button class="btn joinBtn"><a
                                                href="/aadhaar-enabled-payment-system/?utm_source=Organic-AePS"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>


                            <section class="nobg p-0" id="dmt">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/dmt-s.png"
                                            class="img-fluid aos-init" alt="DMT" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont ">
                                        <h3>DMT</h3>
                                        <p>DMT is a fast and secure service that allows users to transfer money instantly to any bank account across India. It supports IMPS and NEFT transactions for quick fund transfers.</p>
                                        <button class="btn joinBtn"><a href="/dmt/?utm_source=Organic-DMT"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>


                            <section class="nobg p-0" id="matm">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/micro-atm-s.png"
                                            class="img-fluid aos-init" alt="Micro ATM" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont">
                                        <h3>Micro ATM</h3>
                                        <p>Micro ATM is a mini banking device that enables cash withdrawal, balance inquiry, and fund transfer using a debit card or Aadhaar. It brings essential banking services to rural and remote areas where traditional ATMs are unavailable. Adarsh Digital provides secure and easy-to-use Micro ATM solutions for retailers and businesses.</p>
                                        <button class="btn joinBtn"><a href="/micro-atm/?utm_source=Organic-micro-atm"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>


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
        <section id="RechargeBillPayments" class="">
            <div class="section-title">
                <div class="container aos-init" data-aos="fade-up">
                    <h2>Recharge &amp; Bill Payments</h2>

                    <p>Recharge and Bill Payment services allow users to instantly recharge mobile, DTH, and data cards, as well as pay electricity, water, gas, and other utility bills. It provides a fast, secure, and convenient way to handle all digital payments in one place. Adarsh Digital Services offers a seamless recharge and bill payment platform with high success rates and instant confirmations.</p>
                </div>
            </div>


            <div class="container aos-init" data-aos="fade-up">

                <div class="row Box1">
                    <div class="col-lg-5 col-md-8 col-sm-12 order-1 order-lg-1 p-lg-0"><img
                            src="{{ asset('public/theme/web-new/') }}/images/products1.png"
                            class="img-fluid aos-init" alt="Recharge &amp; Bill Payments" data-aos="zoom-in"
                            data-aos-delay="150">

                        <div class="d-flex justify-content-center callToActions p_button">

                            <button class="btn joinBtn"><a href="/Signup" class="btn-learn-more">Join Now</a></button>

                            <button class="btn joinBtn calc"><a href="/income-calculator" class="btn-learn-more">Income
                                    Calculator</a></button>

                        </div>


                    </div>

                    <div class="col-lg-7 Boxcontent order-2 order-lg-2">
                        <div class="content">

                            <section class="nobg p-0" id="bbps">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/bbps-s.png"
                                            class="img-fluid aos-init" alt="BBPS" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont ">
                                        <h3>BBPS</h3>
                                        <p>Payments for all utility bills such as water, electricity, Gas, and Broadband through the Bharat Bill Payment System (BBPS). The BBPS service also facilitates other payments for services like FasTag, Municipal Corporation Tax, LIC Premiums and much more.</p>
                                        <button class="btn joinBtn"><a
                                                href="/bharat-bill-payment-system-bbps/?utm_source=Organic-BBPS"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>


                            <section class="nobg p-0" id="recharges">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/recharge-s.png"
                                            class="img-fluid aos-init" alt="Recharges" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont ">
                                        <h3>Recharges</h3>
                                        <p>Recharge service allows users to instantly recharge prepaid mobile numbers, DTH, and data cards anytime, anywhere. It provides a quick, secure, and reliable way to stay connected without interruption. Adarsh Digital Services offers a fast and easy recharge platform with instant updates and high success rates.</p>
                                        <button class="btn joinBtn"><a
                                                href="/bharat-bill-payment-system-bbps/?utm_source=Organic-BBPS"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>

                            <section class="nobg p-0" id="utilities">
                                <div class="row Boxrow">
                                    </div>
                            </section>
                        </div> <br><br><br><br><br>
                    </div>
                </div>
            </div>
        </section>
        <section id="Travels" class="">
            <div class="section-title">
                <div class="container aos-init" data-aos="fade-up">
                    <h2>Travels</h2>

                    <p>Travel service allows users to book flight, train, bus, and hotel tickets quickly and conveniently from a single platform. It helps save time, offers competitive prices, and ensures a smooth booking experience. Adarsh Digital Services provides trusted and hassle-free travel booking solutions for retailers and customers across India.</p>
                </div>
            </div>


            <div class="container aos-init" data-aos="fade-up">

                <div class="row Box1">
                    <div class="col-lg-5 col-md-8 col-sm-12 order-1 order-lg-2 p-lg-0"><img
                            src="{{ asset('public/theme/web-new/') }}/images/products1.png"
                            class="img-fluid aos-init" alt="Travels" data-aos="zoom-in" data-aos-delay="150">

                        <div class="d-flex justify-content-center callToActions">

                            <button class="btn joinBtn"><a href="/become-a-ticketing-agent" class="btn-learn-more">Join
                                    Now</a></button>

                            <button class="btn joinBtn calc"><a href="/income-calculator" class="btn-learn-more">Income
                                    Calculator</a></button>

                        </div>

                    </div>

                    <div class="col-lg-7 Boxcontent order-2 order-lg-1">
                        <div class="content">

                            <section class="nobg p-0" id="traintickets">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/irctc-s.png"
                                            class="img-fluid aos-init" alt="Train Tickets" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont ">
                                        <h3>Train Tickets</h3>
                                        <p>You can get a chance to be an IRCTC agent and help customers with their train ticket bookings for any destination across India. Our user-friendly interface enables our agents to book tickets quickly & makes the whole process hassle-free for customers.</p>

                                        <button class="btn joinBtn"><a
                                                href="/rail-e-ticketing/?utm_source=Organic-Rail-Ticket"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>

                            <section class="nobg p-0" id="bustickets">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/buslogo.png"
                                            class="img-fluid aos-init" alt="Bus Tickets" data-aos="zoom-in"
                                            data-aos-delay="150" style="width:55px"></div>
                                    <div class="col-md-10 BoxCont ">
                                        <h3>Bus Tickets</h3>
                                        <p>Bus Booking service allows customers to book bus tickets easily and securely across all major routes in India. It provides real-time seat availability, multiple payment options, and instant booking confirmation. Adarsh Digital Services offers a reliable and fast bus booking platform for both retailers and travelers.</p>

                                        <button class="btn joinBtn"><a
                                                href="/bus-ticketing/?utm_source=Organic-Bus-Ticket"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>


                            <section class="nobg p-0" id="airickets">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="https://religaredigital.in/wp-content/uploads/2022/12/ticket.png"
                                            class="img-fluid aos-init" alt="Air Tickets" data-aos="zoom-in"
                                            data-aos-delay="150" style="width:55px"></div>
                                    <div class="col-md-10 BoxCont ">
                                        <h3>Air Tickets</h3>
                                        <p>Air Ticket service enables users to book domestic and international flight tickets quickly and conveniently. It offers real-time flight schedules, competitive fares, and instant e-ticket confirmation. Adarsh Digital Services provides a trusted and easy-to-use air ticket booking platform for retailers and travelers across India.</p>

                                        <button class="btn joinBtn"><a
                                                href="/air-ticketing/?utm_source=Organic-Air-Ticket"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>

                        </div><br><br><br><br><br>
                    </div>



                </div>
            </div>
        </section>
        <section id="Investments" class="">
            <div class="section-title">
                <div class="container aos-init" data-aos="fade-up">
                    <h2>Investments</h2>

                    <p>With a wide basket of investment options under one roof, we have got you covered! Our well-trained
                        agents will help you invest in a basket of investment products in a transparent and hassle-free
                        manner.</p>
                </div>
            </div>


            <div class="container aos-init" data-aos="fade-up">

                <div class="row Box1">
                    <div class="col-lg-5 col-md-8 col-sm-12 order-1 order-lg-1 p-lg-0"><img
                            src="{{ asset('public/theme/web-new/') }}/images/products1.png"
                            class="img-fluid aos-init" alt="Investments" data-aos="zoom-in" data-aos-delay="150">

                        <div class="d-flex justify-content-center callToActions">

                            <button class="btn joinBtn"><a href="/Signup" class="btn-learn-more">Join Now</a></button>

                            <button class="btn joinBtn calc"><a href="/income-calculator" class="btn-learn-more">Income
                                    Calculator</a></button>

                        </div>

                    </div>

                    <div class="col-lg-7 Boxcontent order-2 order-lg-2">
                        <div class="content">

                            <section class="nobg p-0" id="nps">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/nps-s.png"
                                            class="img-fluid aos-init" alt="National Pension System (NPS)"
                                            data-aos="zoom-in" data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont ">
                                        <h3>National Pension System (NPS)</h3>
                                        <p>The National Pension System (NPS) is a government-backed savings scheme that helps individuals build a secure retirement fund. It allows users to invest regularly and earn market-linked returns with tax benefits. Adarsh Digital Services offers easy NPS registration and contribution services for individuals and business partners.</p>
                                        <button class="btn joinBtn"><a
                                                href="https://www.religaredigital.in/become-nps-agent/?utm_source=Organic-NPS"
                                                class="btn-learn-more" target="_blank" rel="noopener noreferrer">Explore
                                                More</a></button>

                                    </div>
                                </div>
                            </section>

                            <section class="nobg p-0" id="mf">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/mf-s.png"
                                            class="img-fluid aos-init" alt="Mutual Fund" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont ">
                                        <h3>Mutual Fund</h3>
                                        <p>Mutual Funds are investment schemes that pool money from multiple investors to invest in stocks, bonds, or other securities. They help individuals grow their wealth with professional fund management and flexible investment options. Adarsh Digital Services provides secure and easy mutual fund investment solutions with expert guidance and quick online processing.</p>
                                        <button class="btn joinBtn"><a
                                                href="https://www.religaredigital.in/become-mutual-fund-agent/?utm_source=Organic-Mutual-fund"
                                                class="btn-learn-more" target="_blank" rel="noopener noreferrer">Explore
                                                More</a></button>
                                    </div>
                                </div>
                            </section>

                            <section class="nobg p-0" id="fd">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/fd-s.png"
                                            class="img-fluid aos-init" alt="Fixed Deposit (FD)" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont ">
                                        <h3>Fixed Deposit (FD)</h3>
                                        <p>A Fixed Deposit is a type of an account opened with a bank where an assured rate of interest is paid for keeping the funds for a particular period. Fixed Deposits are an easy way to earn returns from funds that are lying idle.</p>
                                        <button class="btn joinBtn"><a href="/fixed-deposit-fd/?utm_source=Organic-FD"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>

                            <section class="nobg p-0" id="dmat">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/ipo-s.png"
                                            class="img-fluid aos-init" alt="Demat Account" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont ">
                                        <h3>Demat Account</h3>
                                        <p>A Demat account is used to hold shares, bonds, mutual funds, and other securities in electronic form. It makes buying, selling, and managing investments easy and paperless. Adarsh Digital Services offers secure Demat account opening and support for individuals and distributors to start digital investment services with ease.</p>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Insurances" class="">
            <div class="section-title">
                <div class="container aos-init" data-aos="fade-up">
                    <h2>Insurance</h2>

                    <p>We understand that even a minor accident can create a big hole in your savings. From motor insurance,
                        health insurance, life insurance to general insurance – we have got you and your loved ones covered
                        for everything! </p>
                </div>
            </div>


            <div class="container aos-init" data-aos="fade-up">

                <div class="row Box1">
                    <div class="col-lg-5 col-md-8 col-sm-12 order-1 order-lg-2 p-lg-0"><img
                            src="{{ asset('public/theme/web-new/') }}/images/products1.png"
                            class="img-fluid aos-init" alt="Insurances" data-aos="zoom-in" data-aos-delay="150">

                        <div class="d-flex justify-content-center callToActions">

                            <button class="btn joinBtn"><a href="/become-an-insurance-agent" class="btn-learn-more">Join
                                    Now</a></button>

                            <button class="btn joinBtn calc"><a href="/income-calculator" class="btn-learn-more">Income
                                    Calculator</a></button>

                        </div>

                    </div>

                    <div class="col-lg-7 Boxcontent order-2 order-lg-1">
                        <div class="content">

                            <section class="nobg p-0" id="healthInsurance">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/two-wheeler-ins-s.png"
                                            class="img-fluid aos-init" alt="Two Wheeler Insurance" data-aos="zoom-in"
                                            data-aos-delay="150" width="56"></div>
                                    <div class="col-md-10 BoxCont">
                                        <h3>Two Wheeler Insurance</h3>
                                        <p>A two-wheeler insurance policy is an insurance cover for protection of two wheelers, i.e. scooters &amp; bikes. The policy covers accidental repair costs and provides financial security against third party damages or losses incurred due to thefts, natural disasters, vandalism etc.</p>
                                    </div>
                                </div>
                            </section>

                            <section class="nobg p-0" id="fourWheelerInsurance">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/four-wheeler-insurance-s.png"
                                            class="img-fluid aos-init" alt="Four Wheeler Insurance" data-aos="zoom-in"
                                            data-aos-delay="150" width="56"></div>
                                    <div class="col-md-10 BoxCont">
                                        <h3>Four Wheeler Insurance</h3>
                                        <p>Four Wheeler Insurance provides financial protection against damages, theft, or third-party liabilities for your car. It ensures peace of mind by covering repair costs, accident losses, and legal liabilities. Adarsh Digital Services offers quick and reliable four-wheeler insurance policy issuance with instant quotes and paperless renewal support.</p>
                                    </div>
                                </div>
                            </section>


                            <section class="nobg p-0" id="healthInsurance">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/healthcare-s.png"
                                            class="img-fluid aos-init" alt="Health Insurance" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont">
                                        <h3>Health Insurance</h3>
                                        <p>Health Insurance provides financial coverage for medical expenses arising from illness, accidents, or hospitalization. It helps individuals and families manage healthcare costs and ensures access to quality medical treatment without financial stress. Adarsh Digital Services offers quick and reliable health insurance plans with easy policy issuance and renewal support.</p>
                                    </div>
                                </div>
                            </section>

                            <section class="nobg p-0" id="lifeInsurance">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/shield-s.png"
                                            class="img-fluid aos-init" alt="Life Insurance" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont ">
                                        <h3>Life Insurance</h3>
                                        <p>Life Insurance provides financial protection to your family in case of unforeseen events such as death or disability. It ensures long-term security by offering lump-sum or periodic payouts to the insured’s dependents. Adarsh Digital Services offers trusted and easy-to-purchase life insurance plans with complete support for policy issuance and renewal.</p>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>



                </div>
            </div>
        </section>
        <section id="ECommerce" class="eCommerce d-none">
            <div class="section-title">
                <div class="container aos-init aos-animate" data-aos="fade-up">
                    <h2>E-Commerce</h2>

                    <p>Who doesn't love shopping? We intend to provide online shopping solutions to the people of rural and
                        semi-urban India. Our well-trained agents will help customers place orders from Amazon in a
                        hassle-free manner. The products will be directly delivered at the customer’s doorstep.</p>
                </div>
            </div>


            <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="row Box1">
                    <div class="col-lg-5 col-md-8 col-sm-12 order-1 order-lg-1 p-lg-0"><img
                            src="{{ asset('public/theme/web-new/') }}/images/products1.png"
                            class="img-fluid aos-init aos-animate" alt="E-Commerce" data-aos="zoom-in"
                            data-aos-delay="150">


                        <div class="d-flex justify-content-center callToActions">

                            <button class="btn joinBtn"><a href="/Signup" class="btn-learn-more">Join Now</a></button>

                            <button class="btn joinBtn calc"><a href="/income-calculator" class="btn-learn-more">Income
                                    Calculator</a></button>

                        </div>

                    </div>

                    <div class="col-lg-7 Boxcontent order-2 order-lg-2">
                        <div class="content">

                            <section class="nobg p-0" id="amazon">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/amazon-s.png"
                                            class="img-fluid aos-init aos-animate" alt="Amazon" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont">
                                        <h3>Amazon</h3>
                                        <p>Our well-trained agents will help customers place orders from Amazon in a
                                            hassle-free manner.</p>
                                    </div>
                                </div>
                            </section>
                        </div>


                    </div>

                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>

            </div>
        </section>




        <section id="Loan" class="eCommerce">
            <div class="section-title">
                <div class="container aos-init" data-aos="fade-up">
                    <h2>Loan Services</h2>

                    <p>Our loan services include both secured and unsecured loans at low interest rates. We have partnered
                        with top banks and bring along safe and secure credit services for all ticket sizes. The service is
                        aimed to offer hassle free credit access to customers at affordable EMIs.</p>
                </div>
            </div>


            <div class="container aos-init" data-aos="fade-up">

                <div class="row Box1">
                    <div class="col-lg-5 col-md-8 col-sm-12 order-1 order-lg-1 p-lg-0"><img
                            src="{{ asset('public/theme/web-new/') }}/images/products1.png"
                            class="img-fluid aos-init" alt="E-Commerce" data-aos="zoom-in" data-aos-delay="150">


                        <div class="d-flex justify-content-center callToActions">

                            <button class="btn joinBtn"><a href="/Signup" class="btn-learn-more">Join Now</a></button>

                            <button class="btn joinBtn calc"><a href="/income-calculator" class="btn-learn-more">Income
                                    Calculator</a></button>

                        </div>

                    </div>

                    <div class="col-lg-7 Boxcontent order-2 order-lg-2">
                        <div class="content">

                            <section class="nobg p-0" id="two-wheeler-loan">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/vespa-scooter.png"
                                            width="70" class="img-fluid aos-init" alt="Two-Wheeler-Loan"
                                            data-aos="zoom-in" data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont">
                                        <h3>Two Wheeler Loan</h3>
                                        <p>A Two Wheeler Loan helps customers purchase a bike or scooter with easy EMIs and minimal documentation. It offers quick approval, low interest rates, and flexible repayment options. Adarsh Digital provides fast and hassle-free two-wheeler loan assistance for individuals and retailers through a trusted digital platform.</p>
                                        <button class="btn joinBtn"><a
                                                href="/two-wheeler-loan/?utm_source=Organic-two-wheeler-loan"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>


                            <section class="nobg p-0" id="Home-loan">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/real-estate.png"
                                            width="70" class="img-fluid aos-init" alt="Home-Loan" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont">
                                        <h3>Home Loan</h3>
                                        <p>A home loan can be applied to buy, construct or renovate a house. Any Indian
                                            national who is 21 years of age and is salaried or have a consistent income
                                            source can apply for home loan through our network of top banks. We assure you
                                            affordable EMIs, low interest rates and tenure of up to 30 years.</p>
                                        <button class="btn joinBtn"><a href="/home-loan/?utm_source=Organic-HomeLoan"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>



                            <section class="nobg p-0" id="Personal-loan">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/personal.png"
                                            width="70" class="img-fluid aos-init" alt="Personal-Loan"
                                            data-aos="zoom-in" data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont">
                                        <h3>Personal Loan</h3>
                                        <p>Personal loans are all-purpose unsecured loans which can be availed for various
                                            needs such as education, home renovation, travel, medical expenses or business.
                                            We offer hassle free, no guarantor and no security personal loans at affordable
                                            EMIs.</p>
                                        <button class="btn joinBtn"><a
                                                href="/personal-loan/?utm_source=Organic-PersonalLoan"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>


                            <section class="nobg p-0" id="Tractor-loan">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/tractor.png"
                                            width="70" class="img-fluid aos-init" alt="Tractor-Loan"
                                            data-aos="zoom-in" data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont">
                                        <h3>Tractor Loan</h3>
                                        <p>A tractor loan can be applied for purchase of a new tractor, used tractor,
                                            harvester, rotavator, trolley, blower, loader and dozer/bailer etc to
                                            individuals/ proprietor firm/ partnership firm/ pvt ltd co/ ltd co etc.</p>
                                        <button class="btn joinBtn"><a
                                                href="/tractor-loan/?utm_source=Organic-TractorLoan"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>


                            <section class="nobg p-0" id="Gold-loan">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/gold.png"
                                            width="70" class="img-fluid aos-init" alt="Gold-Loan" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont">
                                        <h3>Gold Loan</h3>
                                        <p>A Gold Loan allows customers to get instant cash by pledging their gold ornaments as security. It offers quick processing, low interest rates, and flexible repayment options without affecting gold ownership. Adarsh Digital Services provides safe and reliable gold loan assistance through trusted banking and NBFC partners.</p>
                                        <button class="btn joinBtn"><a href="/gold-loan/?utm_source=Organic-GoldLoan"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>


                            <section class="nobg p-0" id="msme-loan">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/msme-icon.png"
                                            width="70" class="img-fluid aos-init" alt="MSME Loan" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont">
                                        <h3>MSME Loan</h3>
                                        <p>An MSME Loan is a financial service designed to help Micro, Small, and Medium Enterprises (MSMEs) grow their business. It provides quick funding for working capital, machinery purchase, business expansion, or inventory management. Adarsh Digital offers easy MSME loan application support with minimal documentation and fast approval through trusted lending partners.</p>
                                        <button class="btn joinBtn"><a href="/msme-loan/?utm_source=Organic-MSMELoan"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>


                            <section class="nobg p-0" id="Agri-Rural-loan">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/AGRI.png"
                                            width="70" class="img-fluid aos-init" alt="Agri & Rural Loan" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont">
                                        <h3>Agri &amp; Rural Loan</h3>
                                        <p>Agri &amp; rural loans are lending schemes for farmers and rural applicants. The
                                            purpose of the loan is to support agriculture as well as non-agriculture
                                            activities. The loan can be availed as gold loan, tractor loan, crop loan etc.
                                        </p>
                                        <button class="btn joinBtn"><a
                                                href="/agri-and-rural/?utm_source=Organic-AgriRuralLoan"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>


                            <section class="nobg p-0" id="LAP">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/Loan-against-property-icon.png"
                                            width="70" class="img-fluid aos-init" alt="Loan Against Property" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont">
                                        <h3>Loan Against Property</h3>
                                        <p>Loan against property (LAP) is a secured loan that is offered against residential
                                            or commercial property for purposes such as business expansion, higher
                                            education, home renovation, medical emergencies etc.</p>
                                        <button class="btn joinBtn"><a
                                                href="/loan-against-property/?utm_source=Organic-LonaAgainstPropertyLoan"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>


                            <section class="nobg p-0" id="Auto-Loan">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/auto-loan-icon.png"
                                            width="70" class="img-fluid aos-init" alt="Auto Loan" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont">
                                        <h3>Auto Loan</h3>
                                        <p>Auto loan is a secured loan offered for purchasing a new car, pre-owned or used
                                            car, two wheeler or commercial vehicle. The loan is offered as a term loan for 3
                                            to 5 years at an affordable interest rate. Our agents act as one stop hubs to
                                            apply for all types of auto loans.</p>
                                        <button class="btn joinBtn"><a href="/auto-loan/?utm_source=Organic-AutoLoan"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>


                        </div>


                    </div>

                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>

            </div>
        </section>






        <section id="devices" class="eCommerce">
            <div class="section-title">
                <div class="container aos-init" data-aos="fade-up">
                    <h2>Devices</h2>

                    <p>ADARSH Digital brings high quality biometric devices and printers for digital partners at
                        affordable price. We are running special discounts and offers for egov partners and agents. </p>
                </div>
            </div>


            <div class="container aos-init" data-aos="fade-up">

                <div class="row Box1">
                    <div class="col-lg-5 col-md-8 col-sm-12 order-1 order-lg-1 p-lg-0"><img
                            src="{{ asset('public/theme/web-new/') }}/images/products1.png"
                            class="img-fluid aos-init" alt="E-Commerce" data-aos="zoom-in" data-aos-delay="150">


                        <div class="d-flex justify-content-center callToActions">

                            <button class="btn joinBtn"><a href="/Signup" class="btn-learn-more">Join Now</a></button>

                            <button class="btn joinBtn calc"><a href="/income-calculator" class="btn-learn-more">Income
                                    Calculator</a></button>

                        </div>

                    </div>

                    <div class="col-lg-7 Boxcontent order-2 order-lg-2">
                        <div class="content">

                            <section class="nobg p-0" id="biometric-devices">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/biometric-identification1.png"
                                            width="70" class="img-fluid aos-init" alt="Biometric Devices"
                                            data-aos="zoom-in" data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont">
                                        <h3>Biometric Devices</h3>
                                        <p>Biometric Devices help agents to capture biometric details of the user
                                            conveniently and verify the identity online as per Aadhaar. We offer best
                                            biometric devices and ensure safe &amp; secure transactions, no/minimum false
                                            positives and affordable pricing. </p>
                                        <button class="btn joinBtn"><a
                                                href="/biometric-device/?utm_source=Organic-BiometricDevice"
                                                class="btn-learn-more">Explore More</a></button>
                                    </div>
                                </div>
                            </section>


                            <section class="nobg p-0" id="printers">
                                <div class="row Boxrow">
                                    <div class="col-lg-2 col-md-12 p-lg-0 text-center"><img
                                            src="{{ asset('public/theme/web-new/') }}/images/printer.png"
                                            width="70" class="img-fluid aos-init" alt="Printers" data-aos="zoom-in"
                                            data-aos-delay="150"></div>
                                    <div class="col-md-10 BoxCont">
                                        <h3>Printers</h3>
                                        <p>A printer is an essential device used to produce hard copies of digital documents and images quickly and efficiently. It is widely used in offices, shops, and digital centers for receipts, reports, and ID printing. Adarsh Digital provides high-quality printers and setup support for AEPS, recharge, and bill payment businesses.</p>
                                    </div>
                                </div>
                            </section>




                        </div>


                    </div>

                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>

            </div>
        </section>
        </main>

@endsection