<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('logo.ico') }}">
    <title>@yield('title', 'Calipay Portfolio')</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <style>
        :root {
            --primary-color: #FF2D20;
            --dark-bg: #1a1a1a;
            --light-gray: #f8f9fa;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        .hero {
            background: linear-gradient(135deg, var(--dark-bg) 0%, #2d2d2d 100%);
            color: white;
            padding: 100px 0;
            min-height: 60vh;
            display: flex;
            align-items: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.25rem;
            opacity: 0.9;
        }

        .laravel-badge {
            background: var(--primary-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            display: inline-block;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 2rem;
        }

        .project-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            background: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .project-card .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .project-card .card-body {
            padding: 2rem;
        }

        .project-card h5 {
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--dark-bg);
        }

        .tech-badge {
            background: #e9ecef;
            color: #495057;
            padding: 0.35rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            display: inline-block;
            margin: 0.25rem;
        }

        .tech-badge.laravel,
        .tech-badge.laravel10 {
            background: #fff5f5;
            color: var(--primary-color);
            border: 1px solid #ffdddd;
        }

        .tech-badge.bootstrap,
        .tech-badge.bootstrapv53 {
            background: #f0f3ff;
            color: #7952b3;
            border: 1px solid #dde3ff;
        }

        .tech-badge.my-sql,
        .tech-badge.mysql {
            background: #f0f3ff;
            color: #52b357;
            border: 1px solid #ddfff2;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: var(--primary-color);
            margin: 1rem auto 0;
        }

        .contact-section {
            background: var(--light-gray);
            padding: 80px 0;
        }

        .btn-primary {
            background: var(--primary-color);
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #e02616;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 45, 32, 0.3);
        }

        footer {
            background: var(--dark-bg);
            color: white;
            padding: 2rem 0;
            text-align: center;
        }

        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>

<body>
    @yield('content')
    @include('sweetalert::alert')

    <footer>
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} Calipay Portfolio. Built with Laravel 10 & Bootstrap
                5.3</p>
        </div>
    </footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
