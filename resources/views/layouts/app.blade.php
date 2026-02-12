<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | My Project</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .nav-link.active {
            font-weight: bold;
            color: #fff !important;
        }
        .card {
            transition: 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        footer {
            margin-top: 80px;
            padding: 15px 0;
            background: #212529;
            color: #fff;
            text-align: center;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">My Project</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ms-auto">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                <a class="nav-link {{ request()->is('biodata*') ? 'active' : '' }}" href="/biodata">Biodata</a>
                <a class="nav-link {{ request()->is('pendidikan') ? 'active' : '' }}" href="/pendidikan">Pendidikan</a>
                <a class="nav-link {{ request()->is('prestasi') ? 'active' : '' }}" href="/prestasi">Prestasi</a>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-5">
    @yield('content')
</div>

<footer>
    <small>© {{ date('Y') }} My Project | Laravel 12</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
