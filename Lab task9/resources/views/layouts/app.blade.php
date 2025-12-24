<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Movie Hub') - Lab Task 9</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #6a11cb;
            --secondary-color: #2575fc;
            --accent-color: #ff4e50;
            --dark-bg: #0f0f1e;
            --card-bg: #1a1a2e;
            --text-light: #e6e6e6;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--dark-bg) 0%, #16213e 100%);
            color: var(--text-light);
            min-height: 100vh;
        }
        
        .navbar-brand {
            font-family: 'Cinzel', serif;
            font-weight: 700;
            font-size: 1.8rem;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }
        
        .movie-card {
            background: var(--card-bg);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid rgba(106, 17, 203, 0.2);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        
        .movie-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(106, 17, 203, 0.4);
            border-color: var(--primary-color);
        }
        
        .movie-poster {
            height: 300px;
            width: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .movie-card:hover .movie-poster {
            transform: scale(1.05);
        }
        
        .rating-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(45deg, var(--accent-color), #ff8c00);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 600;
            box-shadow: 0 3px 10px rgba(255, 78, 80, 0.4);
        }
        
        .btn-primary {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border: none;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(106, 17, 203, 0.4);
        }
        
        .btn-danger {
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
            border: none;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 500;
        }
        
        .search-box {
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(106, 17, 203, 0.3);
            border-radius: 25px;
            padding: 10px 20px;
            color: white;
            backdrop-filter: blur(10px);
        }
        
        .search-box:focus {
            box-shadow: 0 0 15px rgba(106, 17, 203, 0.5);
            border-color: var(--primary-color);
        }
        
        .form-control, .form-select {
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            color: white;
            border-radius: 10px;
            padding: 12px 15px;
        }
        
        .form-control:focus, .form-select:focus {
            background: rgba(255,255,255,0.15);
            border-color: var(--primary-color);
            box-shadow: 0 0 15px rgba(106, 17, 203, 0.3);
            color: white;
        }
        
        .hero-section {
            background: linear-gradient(rgba(15, 15, 30, 0.8), rgba(22, 33, 62, 0.9)),
                        url('https://images.unsplash.com/photo-1536440136628-849c177e76a1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1925&q=80');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            border-radius: 0 0 30px 30px;
            margin-bottom: 50px;
        }
        
        .hero-title {
            font-family: 'Cinzel', serif;
            font-size: 3.5rem;
            background: linear-gradient(45deg, #fff, var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 10px rgba(0,0,0,0.5);
        }
        
        .movie-detail-card {
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
        
        .genre-tag {
            display: inline-block;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            margin-right: 10px;
            margin-bottom: 10px;
            font-size: 0.9rem;
        }
        
        .footer {
            background: rgba(10, 10, 20, 0.9);
            padding: 30px 0;
            margin-top: 50px;
            border-top: 1px solid rgba(106, 17, 203, 0.3);
        }
        
        .empty-state {
            text-align: center;
            padding: 60px 20px;
        }
        
        .empty-state i {
            font-size: 4rem;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('movies.index') }}">
                <i class="fas fa-film me-2"></i>MovieHub
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('movies.index') }}">
                            <i class="fas fa-home me-1"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('movies.create') }}">
                            <i class="fas fa-plus-circle me-1"></i> Add Movie
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <h5 class="mb-3">Movie Management System</h5>
            <p class="mb-0 text-muted">Lab Task 9 - Complete CRUD with Search & File Upload</p>
            <p class="text-muted">Built with Laravel & Bootstrap</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Confirm delete
        function confirmDelete(id) {
            if (confirm('Are you sure you want to delete this movie? This action cannot be undone.')) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
        
        // Preview image before upload
        function previewImage(input, previewId) {
            const preview = document.getElementById(previewId);
            const file = input.files[0];
            
            if (file) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                
                reader.readAsDataURL(file);
            }
        }
    </script>
    
    @yield('scripts')
</body>
</html>