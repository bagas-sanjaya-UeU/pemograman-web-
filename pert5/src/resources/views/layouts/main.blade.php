<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', $title)</title>

    @include('partials.styles')
</head>

<body>
    @include('partials.header')
    <h1 class="text-center">@yield('title', $title)</h1>
    <main class="container mt-5">
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.scripts')

</body>

</html>