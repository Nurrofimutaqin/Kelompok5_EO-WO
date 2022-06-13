<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    @include('admin.adminlayout.css')
</head>

<body>
    <div id="app">
        <div id="main">
            @include('admin.sidebar')

            <div class="page-content">
                @yield('content')
            </div>

            <footer>
                @include('admin.footer')
            </footer>
        </div>
    </div>
    @include('admin.adminlayout.js')
</body>

</html>
