<!DOCTYPE html>

<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Reader | @yield('title')</title>

    @include('client.layouts.partials.css')
</head>

<body>
    <!-- header -->
    <header class="navigation fixed-top">
        @include('client.layouts.partials.header')
    </header>

    @yield('content')

    <!-- footer -->
    <footer class="footer">
        @include('client.layouts.partials.footer')
    </footer>

    @include('client.layouts.partials.js')
</body>

</html>
