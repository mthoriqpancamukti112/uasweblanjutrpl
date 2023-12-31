<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard-index') }}">
                <i class="fa-solid fa-gauge"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('guru.index') }}">
                <i class="fa-solid fa-chalkboard-user"></i>
                <span>Guru</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="{{ route('siswa.index') }}">
                <i class="fa-solid fa-users"></i>
                <span>Siswa</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="{{ route('galeri.index') }}">
                <i class="fa-regular fa-image"></i>
                <span>Gallery</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="{{ route('jurusan.index') }}">
                <i class="fa-solid fa-bars"></i>
                <span>Jurusan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="{{ route('mapel.index') }}">
                <i class="fa-regular fa-file"></i>
                <span>Mata Pelajaran</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="{{ route('class.index') }}">
                <i class="fa-solid fa-list"></i>
                <span>kelas</span>
            </a>
        </li>
    </ul>

</aside><!-- End Sidebar-->
