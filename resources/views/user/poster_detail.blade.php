@extends('web-layout')

@section('title', 'Poster Details Page | ' . $poster->title)
@section('meta_title', $poster->title)
@section('meta_description', $poster->title)
@section('meta_keywords', $poster->title)
@section('meta_image', asset('storage/app/public/' . $poster->image))

@section('content')
<style>
    .carousel-vertical .carousel-inner {
        display: flex;
        flex-direction: column;
    }

    .carousel-vertical .carousel-item {
        transition: transform 1s ease-in-out;
    }
</style>
<!-- billboard start  -->
<section id="billboard">
    <div class="container ">
        <div class="row flex-lg-row-reverse align-items-center ">

            <div class="col-lg-12">
                <div class="row">
                    <div class="card" style="width: 30%;">
                        <a href="{{ url('user?category_id=1') }}">
                            <img class="card-img-top"
                                src="{{ asset('public/theme/user/job_poster.jpg') }}"
                                alt="Card image cap">
                        </a>

                    </div>
                    <div class="card" style="width:30%;">
                        <a href="{{ url('user?category_id=2') }}">

                            <img class="card-img-top"
                                src="{{ asset('public/theme/user/education_poster.jpg') }}"
                                alt="Card image cap">
                        </a>

                    </div>
                    <div class="card" style="width:30%;">
                        <a href="{{ url('user?category_id=3') }}">

                            <img class="card-img-top"
                                src="{{ asset('public/theme/user/yojna_poster.jpg') }}"
                                alt="Card image cap">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- sidebar -->
                @include('user.partials.sidebar') 
          </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h2>{{ $poster->title }}</h2> <!-- Display the title of the poster -->
                        </div>

                        <div class="card-body">

                           <center> <img src="{{ asset('storage/app/public/' . $poster->image) }}" alt="{{ $poster->title }}"
                                class="img-fluid mb-3" style="max-width:100%;"></center>
                                
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style mb-4">
                                <a class="a2a_button_facebook"></a>
                                <a class="a2a_button_twitter"></a>
                                <a class="a2a_button_whatsapp"></a>
                                <a class="a2a_button_linkedin"></a>
                                <a class="a2a_button_email"></a>
                                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                            </div>
                            <!--@if( $poster->pdf != '')-->
                            
                            <!--@endif-->
                            <a target="_blank" href="{{ $poster->poster_url }}" class="btn btn-primary m-1">Job Link</a>
                            <!--<a download href="{{ asset('storage/app/public/' . $poster->image) }}" class="btn btn-primary m-1">Download Poster</a>-->
                            <a href="{{ asset('user/poster/customize/' . $poster->id) }}" class="btn btn-primary m-1">Download Poster</a>
                            <a href="{{ asset('storage/app/public/' . $poster->pdf)}}" class="btn btn-primary m-1">Download PDF </a>
                            <button class="btn btn-primary m-1" onclick="copyDescription()">Copy Text</button>
                            <a href="{{ route('user.home') }}" class="btn btn-primary m-1">Back to Home</a>
                              

                            <div id="description" class="mt-3">{!! $poster->description !!}</div> <!-- Display the description -->
                            
                              
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h6>Latest News</h6>
                            </div>
                            <div class="card-body">
                                <!-- Vertical Carousel Start -->
                                <div id="verticalNewsCarousel" class="carousel slide carousel-vertical"
                                    data-bs-ride="carousel" data-bs-interval="3000">
                                    <div class="carousel-inner">
                                        @foreach($latestNews as $index => $news)
                                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                @if($news->banner_image)
                                                    <img src="{{ Storage::url('app/public/latest_news/' . $news->banner_image) }}"
                                                        class="d-block w-100" alt="{{ $news->title }}"
                                                        style="width: 60%; margin: auto;">
                                                @else
                                                    <img src="{{ asset('public/theme/user/default.jpg') }}"
                                                        class="d-block w-100" alt="Default News Image"
                                                        style="width: 60%; margin: auto;">
                                                @endif
                                                <!-- <div class="carousel-caption d-none d-md-block">
                                                            <h5>{{ $news->title }}</h5>
                                                            <p>{{ Str::limit($news->content, 100) }}</p>
                                                        </div> -->
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Vertical Carousel End -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function copyDescription() {
        // Get the description text from the element with id "description"
        var description = $("#description").text();

        // Use the Clipboard API to copy the text to the clipboard
        navigator.clipboard.writeText(description)
            .then(function() {
                alert("Description copied to clipboard!");
            })
            .catch(function(err) {
                alert("Failed to copy description: " + err);
            });
    }
</script>



@endsection

<!--@extends('web')-->

<!--@section('title', 'Poster Details Page | ' . $poster->title)-->
<!--@section('meta_title', $poster->title)-->
<!--@section('meta_description', $poster->title)-->
<!--@section('meta_keywords', $poster->title)-->
<!--@section('meta_image', asset('storage/app/public/' . $poster->image))-->

<!--@section('content')-->
<!--<style>-->
<!--    .carousel-vertical .carousel-inner {-->
<!--        display: flex;-->
<!--        flex-direction: column;-->
<!--    }-->

<!--    .carousel-vertical .carousel-item {-->
<!--        transition: transform 1s ease-in-out;-->
<!--    }-->
<!--</style>-->

<!-- Billboard Section -->
<!--<section id="billboard">-->
<!--    <div class="container">-->
<!--        <div class="row flex-lg-row-reverse align-items-center">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="row">-->
<!--                    <div class="card" style="width: 30%;">-->
<!--                        <a href="{{ url('user?category_id=1') }}">-->
<!--                            <img class="card-img-top" src="{{ asset('public/theme/user/job_poster.jpg') }}" alt="Jobs">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="card" style="width:30%;">-->
<!--                        <a href="{{ url('user?category_id=2') }}">-->
<!--                            <img class="card-img-top" src="{{ asset('public/theme/user/education_poster.jpg') }}" alt="Education">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="card" style="width:30%;">-->
<!--                        <a href="{{ url('user?category_id=3') }}">-->
<!--                            <img class="card-img-top" src="{{ asset('public/theme/user/yojna_poster.jpg') }}" alt="Yojna">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!-- Poster Details Section -->
<!--<section>-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-3">-->
<!--                @ include(' user.partials.sidebar') -->
<!--            </div>-->
<!--            <div class="col-md-6">-->
<!--                <div class="card card-primary">-->
<!--                    <div class="card-header">-->
<!--                        <h2>{{ $poster->title }}</h2>-->
<!--                    </div>-->
<!--                    <div class="card-body text-center">-->
<!--                        <img src="{{ asset('storage/app/public/' . $poster->image) }}" alt="{{ $poster->title }}" class="img-fluid mb-3">-->
<!--                        <div class="mt-4">-->
<!--                            <button class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#customizeModal">Customize and Download</button>-->
<!--                            <a href="{{ route('user.home') }}" class="btn btn-primary m-1">Back to Home</a>-->
<!--                        </div>-->
<!--                        <div id="description" class="mt-3">{!! $poster->description !!}</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3">-->
<!--                @ include(' user.partials.latest_news')-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!-- Customize Modal -->
<!--<div class="modal fade" id="customizeModal" tabindex="-1" aria-labelledby="customizeModalLabel" aria-hidden="true">-->
<!--    <div class="modal-dialog">-->
<!--        <form action=" { { route(' poster.customize') }}" method="POST">-->
<!--            @csrf-->
<!--            <input type="hidden" name="poster_id" value="{{ $poster->id }}">-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-header">-->
<!--                    <h5 class="modal-title" id="customizeModalLabel">Customize Poster Details</h5>-->
<!--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--                </div>-->
<!--                <div class="modal-body">-->
<!--                    <div class="mb-3">-->
<!--                        <label for="name" class="form-label">Name</label>-->
<!--                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>-->
<!--                    </div>-->
<!--                    <div class="mb-3">-->
<!--                        <label for="email" class="form-label">Email</label>-->
<!--                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>-->
<!--                    </div>-->
<!--                    <div class="mb-3">-->
<!--                        <label for="phone" class="form-label">Phone</label>-->
<!--                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>-->
<!--                    </div>-->
<!--                    <div class="mb-3">-->
<!--                        <label for="address" class="form-label">Shop Address</label>-->
<!--                        <textarea class="form-control" id="address" name="address" placeholder="Enter your address" rows="3" required></textarea>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="modal-footer">-->
<!--                    <button type="submit" class="btn btn-primary">Download Poster</button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->

<!--<script>-->
<!--    function copyDescription() {-->
<!--        const description = $("#description").text();-->
<!--        navigator.clipboard.writeText(description)-->
<!--            .then(() => alert("Description copied to clipboard!"))-->
<!--            .catch(err => alert("Failed to copy description: " + err));-->
<!--    }-->
<!--</script>-->
<!--@endsection-->



