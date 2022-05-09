<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="{{ url('assets/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
</head>
<body>
    @include('navbar')
    <main class="container">
        @yield('content')
    </main>

    <script src="{{ url('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
