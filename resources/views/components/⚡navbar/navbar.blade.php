<div>
    <nav class="navbar nav-pills flex-column flex-sm-row fixed-top bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href={{ route('home') }}>
                <img src={{ asset("media/logo-square_1200x1200.png") }} alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
                Modal Login Livewire 4
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <button wire:click="login" type="button" class="btn btn-outline-success">Login</button>
                </li>
                <li class="nav-item ms-1">
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#registerModal">Register</button>
                </li>
            </ul>
        </div>
    </nav>

    <livewire:register />
</div>