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
                <a href="{{ Route('admin.berita.index') }}" class="nav-link">
                    <i class="fas fa-newspaper"></i>
                    <span>Berita</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.testimoni.index') }}" class="nav-link">
                    <i class="fas fa-comment"></i>
                    <span>Testimoni</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.kurikulum.index') }}" class="nav-link">
                    <i class="fas fa-book"></i>
                    <span>Kurikulum</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.dosen.index') }}" class="nav-link">
                    <i class="fas fa-user-tie"></i>
                    <span>Dosen Staff</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.ruang.index') }}" class="nav-link">
                    <i class="fas fa-images"></i>
                    <span>Galeri Kategori Fasilitas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('admin.category.index') }}" class="nav-link">
                    <i class="fas fa-info-circle"></i>
                    <span>Deskripsi Kategori Fasilitas</span>
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
                    <i class="fas fa-users"></i>
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
<script>
        // Get sidebar element
    const sidebar = document.querySelector('.sidebar');

    // Toggle sidebar visibility
    function toggleSidebar() {
        sidebar.classList.toggle('active');
    }

    // Add event listener to sidebar toggle button
    document.querySelector('.sidebar-toggle').addEventListener('click', toggleSidebar);

</script>
