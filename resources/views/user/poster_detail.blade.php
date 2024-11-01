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
    <!-- billboard start  -->
    <section id="billboard">
        <div class="container ">
            <div class="row flex-lg-row-reverse align-items-center ">

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
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Sidebar</span>
              </a>
              <hr>
              <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                  <a href="#" class="nav-link active" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    Admit Card 
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Update News
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                    Adarsh Store 
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                    Sarkari Pariksha 
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                    Customers
                  </a>
                </li>
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
                <div class="card card-primary">
                    <div class="card-header">
                        <h2>{{ $poster->title }}</h2> <!-- Display the title of the poster -->
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('storage/app/public/' . $poster->image) }}" alt="{{ $poster->title }}" class="img-fluid mb-3" style="height:40%;width:100%">
                        <p>{{ $poster->description }}</p> <!-- Display the description -->
                        <a href="{{ asset('storage/app/public/' . $poster->pdf)}}" class="btn btn-primary">Download JOB PDF </a>
                        <a href="{{ $poster->poster_url }}" class="btn btn-primary">Job Link</a>
                        <a href="{{ route('user.home') }}" class="btn btn-primary">Back to Home</a>
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
                      <div id="verticalNewsCarousel" class="carousel slide carousel-vertical" data-bs-ride="carousel" data-bs-interval="3000">
                          <div class="carousel-inner">
                              <!-- News Slide 1 -->
                              <div class="carousel-item active">
                                  <img src="{{ asset('public/theme/user/1.jpeg') }}" class="d-block w-100" alt="News Image 1" style="width: 60%; margin: auto;">
                              </div>
                              <!-- News Slide 2 -->
                              <div class="carousel-item">
                                  <img src="{{ asset('public/theme/user/2.jpeg') }}" class="d-block w-100" alt="News Image 2" style="width: 60%; margin: auto;">
                              </div>
                              <!-- News Slide 3 -->
                              <div class="carousel-item">
                                  <img src="{{ asset('public/theme/user/3.jpeg') }}" class="d-block w-100" alt="News Image 3" style="width: 60%; margin: auto;">
                              </div>
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
