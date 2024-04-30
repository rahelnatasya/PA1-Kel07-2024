<div class="sidebar">
    <div class="sidebar-header">
        <h3>Admin Website</h3>
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
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-newspaper"></i>
                    <span>Berita</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="berita">Lihat Berita</a>
                    <a class="dropdown-item" href="tambahberita">Tambah Berita</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.kurikulum.index') }}" class="nav-link">
                    <i class="fas fa-book"></i>
                    <span>Kurikulum</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.ruang.index') }}" class="nav-link">
                    <i class="fas fa-images"></i>
                    <span>Galeri Ruang</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.profillulusan.index') }}" class="nav-link">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Profil Lulusan</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.visimisi.index') }}" class="nav-link">
                    <i class="fas fa-trophy"></i>
                    <span>Visi Misi dan Tujuan</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.himamera.index') }}" class="nav-link">
                    <i class="fas fa-users"></i>
                    <span>Himamera</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.mrclub.index') }}" class="nav-link">
                    <i class="fas fa-users"></i>
                    <span>MR CLUB</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.asrama.index') }}" class="nav-link">
                    <i class="fas fa-home"></i>
                    <span>Asrama</span>
                </a>
            </li>
        </ul>
    </div>
</div>
