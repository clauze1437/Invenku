<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ url('/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Profile</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('/user') }}">
                        <i class="bi bi-circle"></i><span>User</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->


        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/pegawai') }}">
                <i class="bi bi-table"></i>
                <span>Pegawai</span>
            </a>
        </li><!-- End Pegawai Page Nav -->

       
            
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/jabatan') }}">
                <i class="bi bi-table"></i>
                <span>Jabatan</span>
            </a>
        </li><!-- End Jabatan Page Nav -->
        

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/transaksi') }}">
                <i class="bi bi-table"></i>
                <span>Transaksi</span>
            </a>
        </li><!-- End Transaksi Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/barang') }}">
                <i class="bi bi-table"></i>
                <span>Barang</span>
            </a>
        </li><!-- End Barang Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/jenis_barang') }}">
                <i class="bi bi-table"></i>
                <span>Jenis Barang</span>
            </a>
        </li><!-- End Jenis Barang Page Nav -->
    </ul>

</aside>
<!-- End Sidebar-->