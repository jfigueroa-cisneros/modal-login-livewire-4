<div class="modal fade" id="forgotPasswordModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="forgotPasswordModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="forgotPasswordModalLabel">Forgot Password</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="sendMailForgotPassword" id="forgotPasswordForm">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input wire:model="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" name="email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="forgotPasswordForm">Send</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                    data-bs-target="#loginModal">Close</button>
            </div>
        </div>
    </div>
</div>