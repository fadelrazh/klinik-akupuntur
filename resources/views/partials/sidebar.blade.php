<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <i class="fas fa-heartbeat"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ env("APP_NAME") }} Dewi</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-cog"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Umum
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-pen"></i>
            <span>Pendaftaran</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/pendaftaran"> Pendaftaran Pasien</a>
                <a class="collapse-item" href="/antrian-pasien-admin"> Antrian Pasien</a>
                <a class="collapse-item" href="/laporan-harian"> Laporan Harian</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="/pasien">
            <i class="fas fa-fw fa-book"></i>
            <span>Pasien</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fa fa-user-md"></i>
            <span>Dokter</span>
        </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/poli-form"> Poli/Spesialis</a>
                <a class="collapse-item" href="/jadwal"> Jadwal Praktek</a>
                <a class="collapse-item" href="/dokter"> Dokter</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/pegawai">
            <i class="fa fa-id-card"></i>
            <span>Pegawai</span>
        </a>
    </li>

    @if(auth()->check() && auth()->user()->is_superadmin === 1)
        <li class="nav-item">
            <a class="nav-link" href="/akun">
                <i class="fas fa-fw fa-user"></i>
                <span>Akun</span>
            </a>
        </li>
    @endif

    <li class="nav-item text-center">

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </li>

</ul>
