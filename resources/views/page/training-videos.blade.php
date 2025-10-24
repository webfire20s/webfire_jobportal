@extends('web-layout')
@section('title', 'Training')
@section('content')

    <?php
    
    $videos = [
        [
            'url_id' => 'f4s1JIcrhEQ?si=I6-aDFiQUfJPV1iM',
            'title' => 'How to Resume Your Pan Application | Restart PAN Form on Portal',
            'description' => 'Know how you can complete your ePAN application from where you left. You do not need to make payment again.',
            'height' => '180',
            'extra_class' => 'mt-4',
            'extra_iframe_class' => '',
        ],
        [
            'url_id' => 'sG7NUDpiOOQ?si=Ea4E204PjxiZ4-XO',
            'title' => 'How to Do Domestic Money Transfer | DMT Demo Video',
            'description' => 'Watch this step-by-step demo to see how Religare Digital simplifies Domestic Money Transfers for your transactions.',
            'height' => '180',
            'extra_class' => 'mt-4',
            'extra_iframe_class' => '',
        ],
        [
            'url_id' => '6Rgc-bxb8CE?si=gftVZPu55pPQoM6Z',
            'title' => 'How to Add Money Instantly to Your DIGIPAY Wallet',
            'description' => 'Watch the video to know in detail to add money to your Digipay Wallet full Process:',
            'height' => '180',
            'extra_class' => 'mt-4',
            'extra_iframe_class' => '',
        ],
        [
            'url_id' => 'iQhiQq3hc8k',
            'title' => 'PAN Digitisation',
            'description' => 'PAN digitisation through web application',
            'paragraph' => 'Know the process of PAN digitisation through web application',
            'height' => '300',
            'extra_class' => '',
            'extra_iframe_class' => 'fit-content',
        ],
        [
            'url_id' => 'iQhiQq3hc8k', // Note: This uses the same URL as the one above, which may be an error in the source HTML
            'title' => 'Wallet Recharge',
            'description' => 'Process of Wallet recharge &amp; know the reports in back office',
            'paragraph' => 'Know the process of wallet recharge &amp; how to check the available reports in the back office.',
            'height' => '300',
            'extra_class' => '',
            'extra_iframe_class' => 'fit-content',
        ],
        [
            'url_id' => '8MFXU45FIU0?si=ueswI9pMJ6kFmKwF',
            'title' => 'Religare DigiPay Update 2024| Change in NPCI AePS Cash Withdrawal Guidelines for Agents',
            'description' => 'Watch the video to know in detail the NPCI AePS Cash withdrawal process:',
            'height' => '180',
            'extra_class' => 'mt-4',
            'extra_iframe_class' => '',
        ],
        [
            'url_id' => '6CTHsaufb6M',
            'title' => 'Complete DMT Wallet Recharge',
            'description' => 'Learn how to do DMT, Recharges, Money Transfer, Bill Payment, Bus, e-PAN, e-collections, AEPS and MATM',
            'height' => '300',
            'extra_class' => 'd-none', // Hidden video
            'extra_iframe_class' => 'fit-content',
        ],
        [
            'url_id' => 'ChNPZY6m6yE?si=PDHTrIhcXVuhxcdE',
            'title' => 'Apply for ePAN with Photo &amp; Signature',
            'description' => 'Learn how to apply for ePAN with photo &amp; signature',
            'height' => '180',
            'extra_class' => 'mt-4',
            'extra_iframe_class' => '',
        ],
        [
            'url_id' => 'Y2f-s6BYVJQ',
            'title' => 'How to do Recharge | Bill Payments and AEPS | Religare Digital | eGovernance',
            'description' => 'How to do Recharge, Bill Payments and AEPS using Religare Digipay',
            'height' => '180',
            'extra_class' => 'mt-4',
            'extra_iframe_class' => '',
        ],
        [
            'url_id' => '4ReZrsNP88k',
            'title' => 'Train Ticket Booking | DC Based | Religare Digital Solutions',
            'description' => 'How to do train ticket booking via dc based login',
            'height' => '180',
            'extra_class' => 'mt-4',
            'extra_iframe_class' => '',
        ],
        [
            'url_id' => '4ReZrsNP88k', // Note: This uses the same URL as the one above
            'title' => 'Train Ticket Booking | OTP Based | Religare Digital Solutions',
            'description' => 'How to do train ticket booking via otp based login',
            'height' => '180',
            'extra_class' => 'mt-4',
            'extra_iframe_class' => '',
        ],
    ];
    ?>

    <main id="main" style="margin-top:50px;">
        <div class="container breadcrumb aos-init aos-animate" data-aos="fade-up" style="margin-bottom:1rem;">
            <ul class="breadcrumb">
                <li><a href="/">Home</a> :: </li>
                <li>Training Videos</li>
            </ul>
        </div>

        <!-- ======= eGovernance-Service Section 1======= -->
        <section id="why-us" class="video" style="padding:0px;">
            <div class="section-title">
                <div class="container aos-init aos-animate" data-aos="fade-up">
                    <h1>Knowledge and Training Video</h1>
                </div>
            </div>

            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row Box1">

                    @foreach ($videos as $video)
                        {{-- Use $video['extra_class'] to include 'mt-4' or 'd-none' as needed --}}
                        <div class="col-lg-4 {{ $video['extra_class'] }}">
                            <div class="col-lg-12 col-md-8 col-sm-12 order-1 order-lg-1 p-lg-0">
                                {{-- Conditionally include the 'br' tag if no mt-4 class is present, to match the original structure --}}
                                @if ($video['extra_class'] == '')
                                    <br>
                                @endif
                                <iframe width="100%" height="{{ $video['height'] }}"
                                    src="https://www.youtube.com/embed/{{ $video['url_id'] }}" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen=""
                                    @if ($video['extra_iframe_class']) class="{{ $video['extra_iframe_class'] }}" @endif></iframe>
                            </div>
                            <div class="col-lg-12 Boxcontent order-2 order-lg-2">
                                <div class="section-title pt-4">
                                    <div class="container aos-init aos-animate p-0" data-aos="fade-up">
                                        <h2>{{ $video['title'] }}</h2>
                                    </div>
                                    <h4>{{ $video['description'] }}</h4>
                                    {{-- Include the optional <p> tag if 'paragraph' is set (used in the older format videos) --}}
                                    @if (isset($video['paragraph']))
                                        <p>{{ $video['paragraph'] }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    </main>
@endsection
