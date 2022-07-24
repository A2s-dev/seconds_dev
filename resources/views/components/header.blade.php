<header class="global-header">
    <div class="header-title">
        <a href="{{ route('home') }}">{{ config('app.name') }}</a>
    </div>
    <span>A community site to improve the quality of your novel.</span>

    {{ $slot }}
</header>
