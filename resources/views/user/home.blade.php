@extends('web')

@section('title', 'Home Page')

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

<section id="billboard">
    <div class="container">
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
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark mt-4" style="width: 280px;">
                    <ul class="nav nav-pills flex-column mb-auto">
                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <a href="{{ route('user.home', ['category_id' => $category->id]) }}" class="nav-link {{ request('category_id') == $category->id ? 'active' : '' }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <hr>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                            <strong>mdo</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
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
