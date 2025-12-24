<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Gaming Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background: rgba(0, 0, 0, 0.8) !important;
            padding: 1rem 0;
        }
        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #fff !important;
            text-shadow: 0 0 10px rgba(102, 126, 234, 0.8);
        }
        .nav-link {
            color: #fff !important;
            margin: 0 10px;
            font-size: 1.1rem;
            transition: all 0.3s;
        }
        .nav-link:hover {
            color: #667eea !important;
            transform: translateY(-2px);
        }
        .nav-link.active {
            color: #667eea !important;
            border-bottom: 2px solid #667eea;
        }
        .content-wrapper {
            padding: 60px 0;
        }
        .card {
            background: rgba(255, 255, 255, 0.95);
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        footer {
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 20px 0;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">🎮 Gaming Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content-wrapper">
        @yield('content')
    </div>

    <footer class="text-center">
        <div class="container">
            <p class="mb-0">&copy; 2025 Gaming Hub. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
