<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('description', '')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-light">

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <aside class="col-12 col-md-3 col-lg-2 bg-white border-end min-vh-100 p-3">
                <h5 class="mb-3">Menu</h5>
                <nav class="nav flex-column">
                    <a href="/admin/dashboard" class="nav-link">🏠 Dashboard</a>
                    <a href="/admin/users" class="nav-link">👥 Users</a>
                    <a href="/admin/reports" class="nav-link">📊 Reports</a>
                    <hr class="my-2">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link text-danger p-0">🚪 Logout</button>
                    </form>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="col-12 col-md-9 col-lg-10 p-4">
                @yield('content')
            </main>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    @vite('resources/js/app.js')
</body>

</html>
