<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles') <!-- This is where we include the additional styles -->
</head>
<body>
<header>
    <h1>@yield('header', 'Welcome to My Application')</h1>
</header>

<div class="content">
    @yield('content')
</div>

<footer>
    <p>@yield('footer', '© 2024 My Application')</p>
</footer>
</body>
</html>
