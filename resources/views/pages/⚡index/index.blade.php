<div>
    <div class="mt-5 pt-4 text-center">
        @auth
            <h1 class="mt-5">Welcome, {{ auth()->user()->name }}!</h1>
        @else
            <h1 class="mt-5">Welcome to Modal Login Livewire 4</h1>
            <p class="lead">Please login or register to continue.</p>
        @endauth
    </div>
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
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