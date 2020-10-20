<ul class="sidebar-menu" style='margin-top:20px;'>
    <li><a class="nav-link btnDashboard" href="#!" @click='dashboardAtc'><i class="fas fa-home"></i><span>Dashboard</span></a></li>
    <li><a class="nav-link btnKartuLaundry" href="#!" @click=''><i class="far fa-newspaper"></i><span>Monitoring Sekolah</span></a></li>
    <li class="dropdown">
        <a href="#!" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-newspaper"></i> <span>Data Master</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="#!" @click=''>Sekolah</a></li>
            <li><a class="nav-link" href="#!" @click=''>Siswa</a></li>
            <li><a class="nav-link" href="#!" @click=''>Guru & Pegawai</a></li>
            <li><a class="nav-link" href="#!" @click=''>Rombel</a></li>
            <li><a class="nav-link" href="#!" @click=''>Semester / Tahun Ajaran</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#!" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-chart-line"></i> <span>Manajemen Aktivitas</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="#!" @click=''>Jadwal Pelajaran</a></li>
            <li><a class="nav-link" href="#!" @click=''>Agenda Sekolah</a></li>
            <li><a class="nav-link" href="#!" @click=''>Absensi</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#!" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cogs"></i> <span>Setting Resto</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="#!" @click=''>Pengaturan Umum</a></li>
            <li><a class="nav-link" href="#!" @click=''>Manajemen User</a></li>
            <li><a class="nav-link" href="#!" @click=''>Backup & Restore Data</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#!" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-chalkboard"></i> <span>Setting Front End</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="#!" @click=''>Slider Utama</a></li>
        </ul>
    </li>
    <li><a class="nav-link" id='btnBantuan' href='#!' @click=''><i class="fas fa-info-circle"></i> <span>Bantuan</span></a></li>
    <li><a class="nav-link" id='btnTentang' href='#!' @click=''><i class="fas fa-heart"></i> <span>Tentang Aplikasi</span></a></li>
    <li><a class="nav-link" id='btnLogOut' href="#!" @click='logoutAtc'><i class="fas fa-sign-out-alt"></i> <span>LogOut</span></a></li>
</ul>