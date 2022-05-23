@if (session()->has('alert.message'))
    <div class="alert alert-{{ session('alert.status') }}" data-uk-alert>
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <p>{{ session('alert.message') }}</p>
    </div>
@endif
