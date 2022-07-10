<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin BlackSweet</title>

    @include('admin.adminlayout.css')
      <!-- jquery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <!-- SweetAlert2 -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body>
    <div id="app">
        
    @include('sweetalert::alert')
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
    <script>
    $('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure Deleted Data?',
            text: 'This record and it`s details will be permanantly deleted!',
            icon: 'warning',
            buttons: ["Cancel?", "Delete!"],
            }).then(function(value) {
            if (value) {
            window.location.href = url;
            }
        });
        });
    </script>
</body>

</html>
