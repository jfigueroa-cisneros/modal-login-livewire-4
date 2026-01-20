<div>
    <div class="mt-5 pt-4 text-center">
        @auth
            <h1 class="mt-5">Welcome, {{ auth()->user()->name }}!</h1>
        @else
            <h1 class="mt-5">Welcome to Modal Login Livewire 4</h1>
            <p class="lead">Please login or register to continue.</p>
        @endauth
    </div>
    <div class="row">
        <div class="card col-md-3">
            <div class="card-body">
                <h5 class="card-title">Cars Available</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Available cars in store</h6>
                @island(lazy: true)
                @placeholder
                <p class="card-text placeholder-glow">
                    <span class="placeholder col-7"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-6"></span>
                    <span class="placeholder col-8"></span>
                </p>
                @endplaceholder
                <p wire:poll.10s class="card-text">{{ $this->carsOnSale() }}</p>
                @endisland
            </div>
        </div>
        <div class="card col-md-4 offset-md-1">
            <div class="card-body">
                <h5 class="card-title">Cars Sold</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Cars sold in store</h6>
                @island(lazy: true)
                @placeholder
                <p class="card-text placeholder-glow">
                    <span class="placeholder col-7"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-6"></span>
                    <span class="placeholder col-8"></span>
                </p>
                @endplaceholder
                <p wire:poll.10s class="card-text">{{ $this->carsSold() }}</p>
                @endisland
            </div>
        </div>
        <div class="card col-md-3 offset-md-1">
            <div class="card-body">
                <h5 class="card-title">Cars Prices</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Average car prices in store</h6>
                @island(lazy: true)
                @placeholder
                <p class="card-text placeholder-glow">
                    <span class="placeholder col-7"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-6"></span>
                    <span class="placeholder col-8"></span>
                </p>
                @endplaceholder
                <p wire:poll.10s class="card-text">{{ $this->avgCarPrice() }}</p>
                @endisland
            </div>
        </div>
    </div>
    <div id="carouselExampleRide" class="carousel carousel-dark slide" data-bs-ride="true">
        <div class="carousel-inner" style="height: 400px;">
            <div class="carousel-item active">
                <img src={{ asset('media/boletin_01012018_224147.jpg') }} class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src={{ asset('media/boletin_01022018_131319.jpg') }} class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src={{ asset('media/boletin_01062018_212426.jpg') }} class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>