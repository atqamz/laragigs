@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="absolute top-0 z-50 px-48 py-3 text-white transform -translate-x-1/2 left-1/2 bg-laravel">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
