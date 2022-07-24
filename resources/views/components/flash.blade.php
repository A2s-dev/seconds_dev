@if (session('message'))
    <span class="global-flash">
        {{ session('message') }}
    </span>
@endif