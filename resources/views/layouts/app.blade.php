<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('description', 'Sistem e-Filing untuk mengelola dokumen secara praktis dan aman.')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional: custom CSS -->
    @vite('resources/css/app.css')
</head>

<body class="bg-light d-flex flex-column min-vh-100">


    <!-- Content -->
    <main class="flex-grow-1 py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3 mt-auto">
        <small>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</small>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Optional: your custom JS -->
    @vite('resources/js/app.js')
</body>

</html>
