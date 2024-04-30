<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Manajemen Rekayasa | IT Del</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{URL::asset('aset/assets/favicon.ico')}}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{URL::asset('/aset/css/styles.css')}}" rel="stylesheet" />
</head>
<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#!">
                <img src="{{ asset('aset/img/logo.png') }}" alt="Logo" style="height: 30px; width: auto; margin-right: 5px;">MANAJEMEN REKAYASA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="/strukturdosen">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="/kurikulum">Kurikulum</a></li>
                            <li><a class="dropdown-item" href="/dosen">Dosen & Staff</a></li>
                            <li><a class="dropdown-item" href="/visimisi">Visi & Misi Prodi</a></li>
                            <li><a class="dropdown-item" href="/profillulusan">Profil Lulusan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kegiatan Mahasiswa
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <li><a class="dropdown-item" href="/himamera">Struktur Himpunan Mahasiswa</a></li>
                            <li><a class="dropdown-item" href="/mrclub">Club MR</a></li>
                            <li><a class="dropdown-item" href="/asrama">Asrama</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/prestasimahasiswa">Prestasi Mahasiswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="/virtualtour">Virtual Tour</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Fasilitas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <li><a class="dropdown-item" href="/olahraga">Olahraga</a></li>
                            <li><a class="dropdown-item" href="/ruangkelas">Ruang kelas</a></li>
                            <li><a class="dropdown-item" href="/smartclass">Smartclass</a></li>
                            <li><a class="dropdown-item" href="/ruangbaca">Ruang Baca</a></li>
                            <li><a class="dropdown-item" href="/laboratorium">Laboratorium</a></li>
                            <li><a class="dropdown-item" href="/ruangseminar">Ruang Seminar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header - set the background image for the header in the line below-->
    <header class="py-5 bg-image-full" style="background-image: url({{URL::asset('aset/img/header.png')}}">
        <div class="text-center my-5">
            <img class="img-fluid mb-2" src="{{ asset('aset/img/logo.png') }}" alt="..." width="100" />
            <p class="text-white fs-10 fw-bolder">SELAMAT DATANG DI</p>
            <h1 class="text-white fs-3 fw-bolder">MANAJEMEN REKAYASA </h1>
            <p class="text-white fs-10 fw-bolder">INSTITUT TEKNOLOGI DEL</p>
        </div>
    </header>
    <!-- News Section -->
    <div class="container">
        <h1 class="my-4 text-center">Berita Terkini</h1>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="{{URL::asset('aset/img/berita1.png')}}" alt=""></a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a>Program Studi Manajemen Rekayasa melakukan Studi Banding ke Program Studi Teknik Industri Universitas Gadjah Mada</a>
                        </h5>
                        <p class="card-text">Pada Jumat 15 Maret 2024, Program Studi Manajemen Rekayasa melakukan Studi Banding ke Program</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="{{URL::asset('aset/img/berita2.png')}}" alt=""></a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a>Program Studi Manajemen Rekayasa melakukan kunjungan Industri ke Danliris Group</a>
                        </h5>
                        <p class="card-text">Pada hari Rabu 13 Maret 2024, Program Studi Manajemen Rekayasa melakukan kunjungan Industri Ke Danliris Group yang berlokasi di Sukoharjo, Jawa Tengah</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="{{URL::asset('aset/img/berita3.png')}}" alt=""></a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a>Tiga orang mahasiswa Manajemen Rekayasa mendapatkan penghargaan dalam Lomba Inovasi Kewirausahaan Mahasiswa Indonesia (LIKMI) #3</a>
                        </h5>
                        <p class="card-text">Lomba Inovasi Kewirausahaan Mahasiswa (LIKMI) merupakan wadah dan ajang lomba bagi mahasiswa yang</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="{{URL::asset('aset/img/berita4.png')}}" alt=""></a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a>Pembekalan dan Pemberangkatan Mahasiswa MBKM PMM Batch 4, dan MSIB Batch 6, serta Magang PT. Dan Liris, Prodi Manajemen Rekayasa</a>
                        </h5>
                        <p class="card-text">Dari hasil pengumuman MBKM program flagship, tercatat 39 mahasiswa yang lolos program MBKM</p>
                    </div>
                </div>
            </div>
        </div>
        <section class="py-5 bg-image-full">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-4 text-center">
                        <h2>Semua Berita</h2>
                    </div>
                </div>
            </div>
        </section>
    </div>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Testimoni</h2>
                        <p class="lead">The background images used in this template are sourced from Unsplash and are open source and free to use.</p>
                        <p class="mb-0">I can't tell you how many people say they were turned off from science because of a science teacher that completely sucked out all the inspiration and enthusiasm they had for the course.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="probootstrap-footer-widget text-white">
                            <img src="{{ asset('aset/img/logofooter1.png') }}" alt="Logo" style="width: 200px; height: auto;">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="probootstrap-footer-widget text-white">
                            <h3 style="color: #fff; font-size: 24px; font-weight: bold;">About Us</h3>
                            <p style="color: #fff; font-size: 17px;" href="/sejarah">Sejarah</p>
                            <p style="color: #fff; font-size: 17px;">Visi Misi Keilmuan dan Tujuan</p>
                            <p style="color: #fff; font-size: 17px;">Struktur Organisasi</p>
                            <p style="color: #fff; font-size: 17px;">Lokasi Kampus</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget">
                            <h3 style="color: #fff; font-size: 24px; font-weight: bold;">Contact Us</h3>
                            <ul class="list-unstyled links mb-4" style="list-style: none; padding-left: 0;">
                                <li><a href="" style="color: #fff; font-size: 15px; text-decoration: none;">+62 82161040669</a></li>
                                <li><a href="" style="color: #fff; font-size: 15px; text-decoration: none;">@mr.itdel</a></li>
                                <li><a href="" style="color: #fff; font-size: 15px; text-decoration: none;">Institut Teknologi Del</a></li>
                            </ul>
                            <address style="color: #fff; font-size: 14px;">Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba Samosir</address>
                            <ul class="list-inline social">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f" style="color: #fff;"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter" style="color: #fff;"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram" style="color: #fff;"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- DropDown List -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.dropdown-toggle').dropdown();
                $('.navbar-toggler').click(function() {
                    $('.collapse').toggleClass('show');
                });
            });
        </script>
</body>
</html>
