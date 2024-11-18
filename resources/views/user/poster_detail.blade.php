@extends('web')

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
                        <img class="card-img-top"
                            src="https://img.freepik.com/free-vector/gradient-background-vasant-panchami-festival_23-2149906730.jpg"
                            alt="Card image cap">

                    </div>
                    <div class="card" style="width:30%;">
                        <img class="card-img-top"
                            src="https://img.freepik.com/free-vector/gradient-background-vasant-panchami-festival_23-2149906730.jpg"
                            alt="Card image cap">

                    </div>
                    <div class="card" style="width:30%;">
                        <img class="card-img-top"
                            src="https://img.freepik.com/free-vector/gradient-background-vasant-panchami-festival_23-2149906730.jpg"
                            alt="Card image cap">

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
                            <a href="{{ $poster->poster_url }}" class="btn btn-primary">Job Link</a>
                            <a href="{{ route('user.home') }}" class="btn btn-primary">Back to Home</a>
                            <a download href="{{ asset('storage/app/public/' . $poster->image) }}" class="btn btn-primary">Download Poster</a>
                            <a href="{{ asset('storage/app/public/' . $poster->pdf)}}" class="btn btn-primary">Download PDF </a>
                            
                            
                            
                            <p class="mt-3">{!! $poster->description !!}</p> <!-- Display the description -->
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

@endsection