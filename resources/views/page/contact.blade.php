@extends('web-layout')
@section('title', 'Contact')
@section('content')
    <main id="main">
        
        <div class="container py-3 aos-init aos-animate" data-aos="fade-up">
            <ul class="breadcrumb list-unstyled d-flex">
                <li class="me-2"><a href="/" class="text-success text-decoration-none fw-bold">Home</a> :: </li>
                <li class="text-muted">Contact US</li>
            </ul>
        </div>
        
        <section id="contact-us" class="py-5">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row g-4 Box1">
                    
                    <div class="col-lg-5 col-md-12 order-lg-1 contactInfoCol p-4 rounded-3 shadow-lg bg-success text-white">
                        <h2 class="mb-4 fw-bold border-bottom pb-2 border-warning">Get in Touch</h2>

                        <div class="d-flex align-items-start mb-4 contact-row">
                            <i class="fa-solid fa-location-dot fa-2x text-warning me-3 mt-1"></i>
                            <div>
                                <p class="fw-bold mb-0">Our Office Address</p>
                                <span>
                                    WARD NO 1, H NO. 306, KACHARI SAWANGA, , KATOL, Kachari Savanga Nagpur, MH 441103 IN
                                </span>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start mb-4 contact-row">
                            <i class="fa-solid fa-phone fa-2x text-warning me-3 mt-1"></i>
                            <div>
                                <p class="fw-bold mb-0">Call Us</p>
                                <span><a href="tel:+91 8805826526" class="text-white text-decoration-none">+91 8805826526</a></span>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start mb-4 contact-row">
                            <i class="fa-solid fa-envelope fa-2x text-warning me-3 mt-1"></i>
                            <div>
                                <p class="fw-bold mb-0">Email Support</p>
                                <span><a href="mailto:support@eadarsh.in"
                                        target="_blank" class="text-white text-decoration-none">support@eadarsh.in</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12 order-lg-2 contactFormCol p-4 bg-white rounded-3 shadow-lg">
                        <h2 class="mb-4 fw-bold text-success border-bottom pb-2 border-warning">Send Us a Message</h2>
                        
                        <form id="contact_form_id" onsubmit="return false;" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="fname" class="form-label">First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="fname" name="fname" required>
                                    <div class="invalid-feedback">
                                        Please enter your first name.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="lname" class="form-label">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="lname" name="lname" required>
                                    <div class="invalid-feedback">
                                        Please enter your last name.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email ID <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="contact_c" class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="contact_c" name="contact_c" required>
                                    <div class="invalid-feedback">
                                        Please enter your mobile number.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="description" class="form-label">Your Message <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                    <div class="invalid-feedback">
                                        Please enter your message.
                                    </div>
                                </div>

                                {{-- Hidden Fields --}}
                                <input type="hidden" id="utm_source" name="utm_source" value="">
                                <input type="hidden" id="utm_medium" name="utm_medium" value="">
                                <input type="hidden" id="utm_campaign" name="utm_campaign" value="">
                                <input type="hidden" id="utm_term" name="utm_term" value="">
                                <input type="hidden" id="utm_placement" name="utm_placement" value="">
                                <input type="hidden" id="utm_site" name="utm_site" value="">
                                <input type="hidden" id="utm_adgroup" name="utm_adgroup" value="">
                                <input type="hidden" id="utm_content" name="utm_content" value="">
                                <input type="hidden" id="utm_creative" name="utm_creative" value="">
                                <input type="hidden" id="lead_locater_c" name="lead_locater_c" value="portal">
                                <input type="hidden" id="campaign_id" name="campaign_id" value="a06TZ00000B15m1YAB">

                                <div class="col-md-12 field-group">
                                    <small class="text-muted">By signing up, you agree to receive updates on Whatsapp</small>
                                </div>
                                
                                <div class="col-md-12">
                                    {{-- Green button with yellow hover/highlight --}}
                                    <button type="submit" onclick="submit_form(event)"
                                        class="btn btn-success fw-bold py-2 px-4 shadow-sm">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="map-section pb-5">
            <div class="container">
                 <div class="ratio ratio-21x9 rounded-3 shadow-lg">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.665977531737!2d77.3697920752538!3d28.54929217571348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4m5!3e0!4m2!1s0x390cf6131c0e86b9%3A0x89e87d465d6c8e3a!2sPrius%20Height%2C%202nd%20Floor%2C%20Plot%20No%2010%2F11%2C%20Sector%20125%2C%20Noida%20-%20201301%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1699967735345!5m2!1sen!2sin" 
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        
    </main>

    {{-- Script for form validation (Bootstrap 5 standard) --}}
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'
            const form = document.getElementById('contact_form_id');
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated');
            }, false);
        })();

        // Assuming your original submit_form(event) function handles the AJAX submission
        // You should ensure that submit_form(event) checks form.checkValidity() before submitting.
    </script>
@endsection