<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sekolah Kita') }}</title>

    <!-- Bootstrap 5.3 -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-gold: #FFD700;
            --light-gold: #FFF4CC;
            --dark-gold: #B8860B;
            --golden-orange: #FFAA00;
            --white: #ffffff;
            --light-bg: #FFFEF7;
            --text-dark: #2C2416;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-dark);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            background: linear-gradient(135deg, var(--dark-gold), var(--golden-orange));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-gold) 0%, var(--golden-orange) 100%);
            color: var(--text-dark);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="40" fill="rgba(255,255,255,0.1)"/></svg>');
            opacity: 0.3;
        }
        
        .feature-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 2px solid var(--light-gold);
            border-radius: 15px;
            background: white;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(184, 134, 11, 0.2);
            border-color: var(--primary-gold);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-gold) 0%, var(--golden-orange) 100%);
            border: none;
            border-radius: 25px;
            padding: 12px 30px;
            font-weight: 600;
            color: var(--text-dark);
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.4);
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, var(--dark-gold) 0%, var(--primary-gold) 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(184, 134, 11, 0.5);
            color: white;
        }
        
        .card {
            border-radius: 15px;
            border: 1px solid var(--light-gold);
            box-shadow: 0 5px 15px rgba(255, 215, 0, 0.1);
            background: white;
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--primary-gold) 0%, var(--golden-orange) 100%);
            color: var(--text-dark);
            border: none;
            font-weight: 600;
        }
        
        .navbar {
            box-shadow: 0 2px 10px rgba(255, 215, 0, 0.2);
            background: white !important;
            border-bottom: 3px solid var(--primary-gold);
        }
        
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--dark-gold) !important;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-gold), var(--golden-orange));
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 80%;
        }
        
        .dropdown-menu {
            border: 2px solid var(--light-gold);
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(255, 215, 0, 0.2);
        }
        
        .dropdown-item:hover {
            background-color: var(--light-gold);
            color: var(--text-dark);
        }
        
        .footer {
            background: linear-gradient(135deg, var(--text-dark) 0%, #3d3420 100%);
            position: relative;
        }
        
        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-gold), var(--golden-orange), var(--primary-gold));
        }
        
        .footer a:hover {
            color: var(--primary-gold) !important;
            transition: color 0.3s ease;
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, var(--light-gold), var(--primary-gold));
            color: var(--text-dark);
            font-size: 2rem;
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 215, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background: var(--primary-gold);
            color: var(--text-dark) !important;
            transform: translateY(-3px);
        }
        
        .alert-success {
            background: linear-gradient(135deg, var(--light-gold), #FFF9E6);
            border: 2px solid var(--primary-gold);
            color: var(--text-dark);
        }
        
        .alert-danger {
            background: #FFE6E6;
            border: 2px solid #FF6B6B;
            color: #8B0000;
        }
        
        .form-control:focus {
            border-color: var(--primary-gold);
            box-shadow: 0 0 0 0.2rem rgba(255, 215, 0, 0.25);
        }
        
        .btn-secondary {
            background: #6c757d;
            border: none;
            border-radius: 25px;
            padding: 12px 30px;
            font-weight: 600;
        }
        
        .btn-secondary:hover {
            background: #5a6268;
            transform: translateY(-2px);
        }
        
        .rounded-circle {
            border: 3px solid var(--primary-gold);
        }
        
        /* Animasi shimmer untuk elemen gold */
        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }
            100% {
                background-position: 1000px 0;
            }
        }
        
        .shimmer {
            background: linear-gradient(90deg, var(--primary-gold) 0%, var(--light-gold) 50%, var(--primary-gold) 100%);
            background-size: 1000px 100%;
            animation: shimmer 3s infinite;
        }
    </style>
    
    @stack('styles')
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-light">
        <!-- Navigation Header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <i class="fas fa-graduation-cap me-2"></i>Sekolah Kita
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-medium" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-medium" href="#tentang">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-medium" href="#program">Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-medium" href="#fasilitas">Fasilitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-medium" href="#kontak">Kontak</a>
                        </li>
                    </ul>
                    
                    <ul class="navbar-nav ms-auto">
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark fw-medium" href="#" role="button" data-bs-toggle="dropdown">
                                    <img src="{{ Auth::user()->foto_profil_url }}" alt="Profile" class="rounded-circle me-2" width="32" height="32" style="object-fit: cover;">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a></li>
                                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="fas fa-user-edit me-2"></i>Edit Profil</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt me-2"></i>Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-dark fw-medium" href="{{ route('login') }}"><i class="fas fa-sign-in-alt me-1"></i>Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary ms-2" href="{{ route('register') }}"><i class="fas fa-user-plus me-1"></i>Register</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="footer text-white pt-5 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <h5 class="fw-bold mb-3" style="color: var(--primary-gold);"><i class="fas fa-graduation-cap me-2"></i>Sekolah Kita</h5>
                        <p class="text-light">Membangun generasi penerus bangsa yang berkarakter, cerdas, dan berakhlak mulia melalui pendidikan berkualitas.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="text-light me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-light me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-light me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-light"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-4">
                        <h5 class="fw-bold mb-3" style="color: var(--primary-gold);">Menu</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="{{ route('home') }}" class="text-light text-decoration-none">Home</a></li>
                            <li class="mb-2"><a href="#tentang" class="text-light text-decoration-none">Tentang</a></li>
                            <li class="mb-2"><a href="#program" class="text-light text-decoration-none">Program</a></li>
                            <li class="mb-2"><a href="#fasilitas" class="text-light text-decoration-none">Fasilitas</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="fw-bold mb-3" style="color: var(--primary-gold);">Program</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none">SD</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none">SMP</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none">SMA</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none">Ekstrakurikuler</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="fw-bold mb-3" style="color: var(--primary-gold);">Kontak</h5>
                        <ul class="list-unstyled text-light">
                            <li class="mb-2"><i class="fas fa-map-marker-alt me-2" style="color: var(--primary-gold);"></i> Jl. Pendidikan No. 123</li>
                            <li class="mb-2"><i class="fas fa-phone me-2" style="color: var(--primary-gold);"></i> (021) 1234-5678</li>
                            <li class="mb-2"><i class="fas fa-envelope me-2" style="color: var(--primary-gold);"></i> info@sekolahkita.sch.id</li>
                        </ul>
                    </div>
                </div>
                <hr class="bg-light opacity-25 my-4">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start">
                        <p class="mb-0 text-light">&copy; 2024 Sekolah Kita. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="#" class="text-light text-decoration-none me-3">Privacy Policy</a>
                        <a href="#" class="text-light text-decoration-none">Terms of Service</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')
</body>
</html>