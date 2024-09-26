<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container text-center">
    <ul>
        @forelse($allUsers as $item)
        <li>{{ $item->name }}</li>
        @empty
        <p>No items found.</p>
        @endforelse
    </ul>

    <!-- Button linking to the homepage -->
    <a href="/" class="btn btn-light">Go to Home</a>
</div>
</body>
</html>
