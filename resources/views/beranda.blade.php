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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Fasilitas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            @foreach ($category as $item)
                                <a href="/?category={{ $item->id }}" class="dropdown-item">{{ $item->category }}</a>
                            @endforeach
                        </ul>
                        <li class="nav-item"><a class="nav-link" href="/prestasi">Prestasi Mahasiswa</a></li>
                        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
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
        <h3 class="my-4 text-center">Berita Terkini</h3>
        <div class="row">
<!-- Tambahkan kode HTML untuk tombol View More dan modal -->
@foreach ($berita as $data)
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card h-100 bg-light">
        <a href="#"><img class="card-img-top" src="{{ asset('aset/img/'.$data->images) }}" alt="" style="height: 200px; object-fit: cover;"></a>
        <div class="card-body">
            <h5 class="card-title">
                <a href="#" style="color:black; text-decoration:none;">{{ $data->title }}</a>
            </h5>
            <p class="card-text">{{ $data->date }}</p>
            <button type="button" class="btn btn-primary view-more" data-toggle="modal" data-target="#beritaModal{{ $data->id }}">
                View More
            </button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="beritaModal{{ $data->id }}" tabindex="-1" aria-labelledby="beritaModalLabel{{ $data->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="beritaModalLabel{{ $data->id }}">{{ $data->title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>{{ $data->description }}</p>
                <p>Tanggal: {{ $data->date }}</p>
                <p>Ditulis oleh: {{ $data->created_by }}</p>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Tambahkan script JavaScript -->
<script>
    // Menggunakan event delegation untuk menangani tombol View More
    document.addEventListener('click', function(event) {
        // Periksa apakah tombol yang ditekan memiliki kelas 'view-more'
        if (event.target.classList.contains('view-more')) {
            // Ambil target modal berdasarkan atribut data-target pada tombol
            var targetModalId = event.target.getAttribute('data-target');
            // Cari modal dengan ID yang sesuai dan panggil metode modal Bootstrap 'show()'
            var modal = document.querySelector(targetModalId);
            if (modal) {
                var bsModal = new bootstrap.Modal(modal);
                bsModal.show();
            }
        }
    });
</script>

        </div>           
    </div>
        <!-- Content section-->
<!-- Content section-->
<section class="py-5">
    <div class="container my-3">
        <h3 class="text-center">Testimoni</h3>
        <div class="row justify-content-center">
            @foreach($testimoni as $item)
            <div class="col-lg-3 mb-4">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="{{ asset('aset/img/'.$item->images) }}" class="img-fluid mb-3" style="width: 250px; height: auto;">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text text-justify">{{ $item->content }}</p>
                        <p class="card-text"><small class="text-muted">{{ $item->jobdescription }}</small></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

        <section class="py-5 bg-image-full">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-4 text-center">
                        <h3>Video Terkait</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 bg-image-full">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-4 text-center">
                        <h3>Kerja Sama</h3>
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
