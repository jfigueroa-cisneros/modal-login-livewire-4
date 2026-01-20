<div>
    <nav class="navbar nav-pills flex-column flex-sm-row fixed-top bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href={{ route('home') }}>
                <img src={{ asset("media/logo-square_1200x1200.png") }} alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
                Modal Login Livewire 4
            </a>
            <ul class="nav justify-content-end">
                @auth
                    <li class="nav-item">
                        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                            data-bs-target="#logoutModal">Log out</button>
                    </li>
                @else
                    <li class="nav-item">
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                            data-bs-target="#loginModal">Login</button>
                    </li>
                    <li class="nav-item ms-1">
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#registerModal">Register</button>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>

    <livewire:register />
    <livewire:login />
    <livewire:logout />
    <livewire:forgot-password />
    <livewire:password-reset />

    @if(session('openLoginModal') || session('openResetPasswordModal'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                if (@json(session('openLoginModal'))) {
                    const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
                    loginModal.show();
                    return;
                }

                if (@json(session('openResetPasswordModal'))) {
                    const resetPasswordModal = new bootstrap.Modal(document.getElementById('resetPasswordModal'));
                    resetPasswordModal.show();
                    return;
                }
            });
        </script>
    @endif
</div>