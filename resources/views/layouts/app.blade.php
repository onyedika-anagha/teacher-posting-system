<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="/assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="/assets/plugins/icons/flags/flags.css">

    <link rel="stylesheet" href="/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/plugins/fontawesome/css/all.min.css">

    @yield('css')
    <link rel="stylesheet" href="/assets/plugins/alertify/alertify.min.css">

    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    @guest
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
                @yield('content')
            </div>
        </div>
    @else
        <div class="main-wrapper">
            @include('inc.header')
            @include('inc.sidebar')

            @yield('content')
        </div>
    @endguest


    <script src="/assets/js/jquery-3.6.0.min.js"></script>

    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/js/feather.min.js"></script>
    <script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    @yield('scripts')
    <script src="/assets/plugins/alertify/alertify.min.js"></script>

    <script src="/assets/js/script.js"></script>

    @if ($message = Session::get('error'))
        <script>
            alertify.error("{{ $message }}")
        </script>
    @endif
    @if ($message = Session::get('info'))
        <script>
            alertify.info("{{ $message }}")
        </script>
    @endif
    @if ($message = Session::get('warning'))
        <script>
            alertify.warning("{{ $message }}")
        </script>
    @endif
    @if ($message = Session::get('success'))
        <script>
            alertify.success("{{ $message }}")
        </script>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                alertify.error("{{ $error }}")
            </script>
        @endforeach
    @endif

</body>

</html>
