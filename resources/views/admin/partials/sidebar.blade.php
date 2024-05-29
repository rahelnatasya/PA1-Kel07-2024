

<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{ URL::asset('aset/img/logofooter1.png') }}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">Admin Website | MR</a>
    </div>
</div>
    <div class="sidebar-search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search...">
            <div class="input-group-append">
                <button class="btn btn-secondary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="mt-2">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="/admin" class="nav-link">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.berita.index') }}" class="nav-link">
                    <i class="fas fa-newspaper"></i>
                    <span>Berita Terkini</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.testimoni.index') }}" class="nav-link">
                    <i class="fas fa-comment"></i>
                    <span>Testimoni</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.kerjasama.index') }}" class="nav-link">
                    <i class="fas fa-handshake"></i>
                    <span>Kerjasama</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.kurikulum.index') }}" class="nav-link">
                    <i class="fas fa-book"></i>
                    <span>Kurikulum</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.strukturdosen.index') }}" class="nav-link">
                    <i class="fas fa-user-tie"></i>
                    <span>Struktur Dosen</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.dosen.index') }}" class="nav-link">
                    <i class="fas fa-user-tie"></i>
                    <span>Dosen Staff</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="facilitiesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-building"></i>
                    <span>Fasilitas</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="facilitiesDropdown">
                    <a class="dropdown-item" href="{{ Route('admin.ruang.index') }}">Galeri </a>
                    <a class="dropdown-item" href="{{ Route('admin.category.index') }}">Deskripsi </a>
                </div>
            </li>
            
            <li class="nav-item">
                <a href="{{ Route('admin.profillulusan.index') }}" class="nav-link">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Profil Lulusan</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.meta.index') }}" class="nav-link">
                    <i class="fas fa-trophy"></i>
                    <span>Meta Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.himamera.index') }}" class="nav-link">
                    <i class="fas fa-users"></i>
                    <span>Kegiatan Mahasiswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.prestasi.index') }}" class="nav-link">
                    <i class="fas fa-medal"></i>
                    <span>Prestasi Mahasiswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.mrclub.index') }}" class="nav-link">
                    <i class="fas fa-running"></i>
                    <span>MR CLUB</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<style>
        .sidebar .nav-link {
    transition: all 0.3s ease;
    }

    .sidebar .nav-link:hover {
    background-color: #f8f9fa;
    color: #343a40;
    }
</style>


