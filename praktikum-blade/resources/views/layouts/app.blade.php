<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Aplikasi Mahasiswa')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        nav { background: #f8f9fa; padding: 10px; margin-bottom: 20px; border-bottom: 1px solid #ddd; }
        nav a { margin-right: 15px; text-decoration: none; color: #007bff; }
        .alert { padding: 10px 15px; margin-bottom: 15px; border-radius: 4px; }
        .alert-info { background-color: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; }
        .alert-bahaya, .alert-danger { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .alert-sukses { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <!-- Menyisipkan potongan navbar -->
    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

    <footer>
        <hr style="margin-top: 30px;">
        <p>&copy; {{ date('Y') }} - Praktikum Laravel</p>
    </footer>
</body>
</html>