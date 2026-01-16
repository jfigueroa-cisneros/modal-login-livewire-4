<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="messageToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body">
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>
<script>
    function showToast(type, message) {
        const messageToast = document.getElementById('messageToast')
        const toastBody = messageToast.querySelector('.toast-body')
        toastBody.innerHTML = message + toastBody.innerHTML
        messageToast.classList.remove('bg-success', 'bg-danger', 'bg-warning', 'bg-info', 'text-white')
        messageToast.classList.add(`bg-${type}`, 'text-white')

        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(messageToast)
        toastBootstrap.show()
    }

    document.addEventListener('DOMContentLoaded', function () {
        @if(session('success'))
            showToast('success', @json(session('success')));
        @elseif(session('error'))
            showToast('danger', @json(session('error')));
        @elseif(session('warning'))
            showToast('warning', @json(session('warning')));
        @elseif(session('info'))
            showToast('info', @json(session('info')));
        @endif
        });
</script>