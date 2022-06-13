<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src=" {{ asset('assets_admin/images/logo/logo.png') }} " alt="Logo"
                            srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item ">
                    <a href=" {{ url('/admin') }} " class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item ">
                    <a href="" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Petugas</span>
                    </a>
                </li>

                <li class="sidebar-item ">
                    <a href="" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Customer</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href=" {{ url('/tabel-paket') }} " class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Paket</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Transaksi</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Log Out</span>
                    </a>
                </li>



            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
