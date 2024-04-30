@extends('layout.main')

@section('content')
<nav class="navbar bg-primary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">RUANG BACA</span>
    </div>
</nav>
<!-- Text -->
<section class="py-2">
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-lg-15">
                <p class="text-lg-start mt-10 text-justify">Ruang baca di Fakultas Teknologi Industri Institut Teknologi Del adalah tempat yang khusus dirancang untuk memfasilitasi akses terhadap beragam sumber pengetahuan dan inspirasi bagi mahasiswa. Dalam ruang ini, mahasiswa dapat menemukan berbagai koleksi buku, termasuk skripsi atau tugas akhir tingkat akhir, buku capstone (desain proyek rekayasa), dan buku kerja praktek yang tersusun rapi dalam lemari.
                  Suasana ruang baca didesain untuk menciptakan lingkungan yang tenang dan kondusif untuk membaca dan belajar. Meja dan kursi yang tersedia memungkinkan mahasiswa untuk duduk dengan nyaman sambil mengeksplorasi berbagai bahan bacaan. Dengan suasana yang terjaga, ruang baca menjadi tempat yang ideal untuk refleksi, studi mandiri, dan penelusuran informasi yang mendalam.
                  Selain sebagai tempat untuk membaca, ruang baca juga menjadi tempat pameran hasil dari mata kuliah capstone. Mahasiswa dapat memamerkan proyek-proyek rekayasa terbaru mereka didalam ruangan ini.</p>
            </div>
        </div>
    </div>
</section>
<!-- Galeri Section -->
<div class="container">
    <div class="row text-center text-lg-start">
        @foreach ($ruangbaca as $gambar)
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="{{ asset('aset/img/'. $gambar->gambar) }}" alt="{{ $gambar->gambar }}">
                </a>
            </div>
        @endforeach
    </div>
  </div>
  @endsection
  
