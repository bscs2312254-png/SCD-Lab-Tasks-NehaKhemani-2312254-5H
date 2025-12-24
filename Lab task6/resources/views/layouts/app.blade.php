<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Planner System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    @stack('styles')
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('events.index') }}">Event Planner</a>
        <a class="nav-link text-white" href="{{ route('events.create') }}">Add Event</a>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<footer class="text-center mt-4 py-3 bg-dark text-white">
    <p>&copy; {{ date('Y') }} Event Planner System</p>
</footer>

</body>
</html>
