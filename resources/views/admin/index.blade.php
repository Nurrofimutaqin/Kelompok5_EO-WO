<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('admin.adminlayout.css')
</head>

<body>
    @include('admin.sidebar')

    <main id="main">
        @include('admin.header')
        @yield('content')
    </main>
    @include('admin.rightbar')

    @include('admin.footer')
    @include('admin.adminlayout.js')
</body>

</html>
