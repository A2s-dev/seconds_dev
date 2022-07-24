<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <!-- No scaling -->
    <meta name="viewport"
        content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Seconds') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/all.js') }}" defer></script>
    <script src="{{ asset('js/EditerLock.js') }}" defer></script>
    <script src="{{ asset('js/DisableEnter.js') }}" defer></script>
    <script src="{{ asset('js/NavClose.js') }}" defer></script>
    <script src="{{ asset('js/NavOpen.js') }}" defer></script>
    <script src="{{ asset('js/NavStyle.js') }}" defer></script>
    <script src="{{ asset('js/Tooltips.js') }}" defer></script>
    <script src="{{ asset('js/StrCount.js') }}" defer></script>
    <script src="{{ asset('js/Loader.js') }}" defer></script>
    <script src="{{ asset('js/Geometry.js') }}" defer></script>
    <script src="{{ asset('js/Direction.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="js-loader" class="loader"></div>
    @yield('content')

    <!-- Javascript -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <!-- Modal -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.5/remodal.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.5/remodal-default-theme.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.5/remodal.min.js"></script>

    <!-- Tippy.js -->
    <script src="https://unpkg.com/popper.js@1"></script>
    <script src="https://unpkg.com/tippy.js@5"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tippy.js@5.1.2/themes/light.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tippy.js@5.1.2/themes/light-border.css">

    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</body>

</html>
