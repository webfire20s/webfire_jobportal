<!-- Footer start  -->
<section id="footer">
    <div class="container footer-container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5  ">

            <div class=" col-md-4">
                <h3><img src="{{ asset('public/logo.png') }}" alt="image" height="150px"></h3>
                <p>प्रतिभेला संधीशी जोडणे. नोकरीच्या सूची एक्सप्लोर करा, नियोक्त्यांसोबत कनेक्ट करा आणि JobLinker सह तुमचे करिअर तयार करा - तुमचे व्यावसायिक यशाचे प्रवेशद्वार.</p>
                <i class="bi-facebook pe-4"></i>
                <i class="bi-instagram pe-4"></i>
                <i class="bi-twitter pe-4"></i>
                <i class="bi-youtube pe-4"></i>
            </div>

            <div class="col-md-2 ">
                <h5>Project</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Houses</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Rooms</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Flats</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Appartments</a></li>
                </ul>
            </div>

            <div class="col-md-2 ">
                <h5>Company</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">How we work ?</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Capital </a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Security </a></li>
                </ul>
            </div>

            <div class="col-md-2 ">
                <h5>Movement</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Movement</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Support us</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Pricing</a></li>
                </ul>
            </div>

            <div class="col-md-2 ">
                <h5>Help</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Privacy </a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Condition</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Blog</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">FAQs</a></li>
                </ul>
            </div>
        </footer>
    </div>



    <footer class="d-flex flex-wrap justify-content-between align-items-center border-top"></footer>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-2 ">
            <div class="col-md-8 d-flex align-items-center">
                <p>© 2024 JobPortal, Inc. All rights reserved.</p>

            </div>
            <div class="col-md-4 d-flex align-items-center">
                <p>Designed by: <a href="https://webfire.in" class="link-primary"
                        target="_blank">Webfire</a></p>

            </div>

        </footer>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
   loop:true,
   margin:10,
   responsiveClass:true,
   responsive:{
    0:{
        items:1,
        nav:true
    },
    600:{
        items:3,
        nav:false
    },
    1000:{
        items:4,
          loop:true,
    }
   },
   autoplay:true,
        autoplayTimeout:3000, // Adjust the time in milliseconds
        autoplayHoverPause:true
   })
   });
</script>