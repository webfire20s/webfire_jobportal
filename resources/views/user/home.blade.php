@extends('web')

@section('title', 'User Dashboard')

@section('content')
<style>
    /* Ensure the carousel items are displayed correctly in horizontal scrolling */
    .carousel-vertical .carousel-inner {
        display: flex;
        flex-direction: row;
        /* Ensure horizontal layout */
    }

    /* For carousel items, ensure they take full width */
    .carousel-vertical .carousel-item {
        flex: 0 0 100%;
        /* Each item takes full width */
        transition: transform 1s ease-in-out;
    }

    /* Marquee container */
.marquee {
    padding: 0;
    margin: 0;
    height: 100px; /* Adjust height as needed */
    box-sizing: border-box;
}

/* Each list item */
.marquee li {
    font-size: 16px;
    line-height: 2; /* Controls the spacing between items */
    color: white; /* Text color */
    padding: 5px 0;
}

/* Add animation to scroll the list vertically */
.marquee {
    animation: marquee-up 10s linear infinite;
}

/* Keyframe animation for vertical scrolling */
@keyframes marquee-up {
    0% {
        transform: translateY(100%); /* Start from the bottom */
    }
    100% {
        transform: translateY(-100%); /* End at the top */
    }
}

</style>

<section id="billboard">
    <div class="container">
        <marquee direction="left">
            <p> <strong class="text-danger h3">*</strong> {{ $notice->notice }}</p>
        </marquee>

        <div class="row flex-lg-row-reverse align-items-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="card" style="width: 30%;">
                        <a href="{{ url('user?category_id=1') }}">
                            <img class="card-img-top"
                                src="https://img.freepik.com/free-vector/gradient-background-vasant-panchami-festival_23-2149906730.jpg"
                                alt="Card image cap">
                        </a>
                    </div>
                    <div class="card" style="width:30%;">
                        <a href="{{ url('user?category_id=1') }}">

                            <img class="card-img-top"
                                src="https://img.freepik.com/free-vector/gradient-background-vasant-panchami-festival_23-2149906730.jpg"
                                alt="Card image cap">
                        </a>
                    </div>
                    <div class="card" style="width:30%;">
                        <a href="{{ url('user?category_id=1') }}">

                            <img class="card-img-top"
                                src="https://img.freepik.com/free-vector/gradient-background-vasant-panchami-festival_23-2149906730.jpg"
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
                    @foreach ($posters as $poster)
                        <div class="col-md-3">
                            <div class="panel panel-primary" style="width:80%;background-color:white">
                                <a href="{{ url('user/poster_detail', $poster->id) }}" target="_blank">
                                    <div class="panel-body">
                                        <img class="card-img-top" src="{{ asset('storage/app/public/' . $poster->image) }}"
                                            alt="{{ $poster->title }}">
                                    </div>
                                    <div class="panel-footer">
                                        <p class="panel-text text-center" style="color:black">{{ $poster->title }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-3">
                <div class="row">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6>Latest News</h6>
                        </div>
                        <div class="card-body">
                            <ul class="marquee">
                                @foreach($latestNews as $news)
                                    <li><a href="{{ route('latest_news.show', $news->id) }}">{{ $news->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h6>Latest News</h6>
                            </div>
                            <div class="card-body">
                                <div id="verticalNewsCarousel" class="carousel slide carousel-vertical"
                                    data-bs-ride="carousel" data-bs-interval="3000">
                                    <div class="carousel-inner">
                                        @foreach($latestNews as $index => $news)
                                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                @if($news->banner_image)
                                                    <img src="{{ asset('storage/app/public/latest_news/' . $news->banner_image) }}"
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
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#verticalNewsCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#verticalNewsCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection