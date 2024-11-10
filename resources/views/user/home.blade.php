@extends('web')

@section('title', 'User Dashboard')

@section('content')
<style>
    .carousel-vertical .carousel-inner {
        display: flex;
        flex-direction: column;
    }
    .carousel-vertical .carousel-item {
        transition: transform 1s ease-in-out;
    }
    .marquee {
    overflow: hidden;
    white-space: nowrap;
    box-sizing: border-box;
}

.marquee p {
    display: inline-block;
    padding-left: 100%;
    animation: marquee 20s linear infinite;
}

@keyframes marquee {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

</style>

<section id="billboard">
    <div class="container">
    <div class="marquee">
    <p>Important Notice</p>
</div>

        <div class="row flex-lg-row-reverse align-items-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="card" style="width: 30%;">
                        <img class="card-img-top" src="https://img.freepik.com/free-vector/gradient-background-vasant-panchami-festival_23-2149906730.jpg" alt="Card image cap">
                    </div>
                    <div class="card" style="width:30%;">
                        <img class="card-img-top" src="https://img.freepik.com/free-vector/gradient-background-vasant-panchami-festival_23-2149906730.jpg" alt="Card image cap">
                    </div>
                    <div class="card" style="width:30%;">
                        <img class="card-img-top" src="https://img.freepik.com/free-vector/gradient-background-vasant-panchami-festival_23-2149906730.jpg" alt="Card image cap">
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
                                        <img class="card-img-top" src="{{ asset('storage/app/public/' . $poster->image) }}" alt="{{ $poster->title }}">
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
                <div class="marquee">
    <p>Updated News</p>
</div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h6>Latest News</h6>
                            </div>
                            <div class="card-body">
                                <div id="verticalNewsCarousel" class="carousel slide carousel-vertical" data-bs-ride="carousel" data-bs-interval="3000">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('public/theme/user/1.jpeg') }}" class="d-block w-100" alt="News Image 1" style="width: 60%; margin: auto;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('public/theme/user/2.jpeg') }}" class="d-block w-100" alt="News Image 2" style="width: 60%; margin: auto;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('public/theme/user/3.jpeg') }}" class="d-block w-100" alt="News Image 3" style="width: 60%; margin: auto;">
                                        </div>
                                    </div>
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
