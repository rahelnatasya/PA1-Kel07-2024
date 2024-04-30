@extends('layout.main')

@section('content')
<nav class="navbar bg-primary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">HIMAMERA (HIMPUNAN MAHASISWA MANAJEMEN REKAYASA)</span>
    </div>
</nav>
<!-- Header - set the background image for the header in the line below-->
<header class="py-5 bg-image-full" style="background-image: url('{{URL::asset('aset/img/header4.png')}}'); height: 400px;">
    <div class="text-center my-5">
        <div class="navbar">
            <!-- Navbar content -->
        </div>
    </div>
</header>

<!-- Text -->
<section class="py-2">
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-lg-15">
                <p class="text-lg-start mt-10 text-justify">HIMAMERA (Himpunan Mahasiswa Manajemen Rekayasa) adalah organisasi mahasiswa di Institut 
                    Teknologi Del Fakultas Teknologi Industri yang mewakili mahasiswa dalam program studi atau jurusan tertentu. 
                    Fungsi utamanya adalah mewakili mahasiswa, membangun komunitas, mengembangkan keterampilan, mengadakan kegiatan, 
                    dan memfasilitasi pembangunan jaringan. Memiliki karakteristik yang sama dengan himpunan mahasiswa di program studi lainnya, 
                    HIMAMERA membantu memperkaya pengalaman akademik, sosial, dan profesional mahasiswa di kampus.</p>
            </div>
        </div>
    </div>
</section>

<nav class="navbar bg-dark mt-3 mb-4"> <!-- Menambahkan kelas mt-3 dan mb-4 untuk memberikan margin top dan bottom pada navbar -->
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h6 text-center mx-auto text-white">KEGIATAN BESAR HIMAMERA</span> <!-- Menambahkan kelas mb-3 untuk memberikan margin bottom -->
    </div>
</nav>

<!-- List Kegiatan Himamera -->
<div class="container mb-4">
  <?php foreach ($himamera as $project): ?>
  <div class="row mt-4">
      <div class="col-md-5">
          <a href="#">
              <img class="img-fluid rounded mb-3 mb-md-0" src="{{ URL::asset('aset/img/' . $project->gambar) }}" alt="{{ $project->gambar }}">
          </a>
      </div>
      <div class="col-md-7">
          <h4><?php echo $project->judul; ?></h4>
          <p><?php echo $project->deskripsi; ?></p>
          <a class="btn btn-danger" href="<?php echo $project->link; ?>">Dokumentasi Kegiatan</a>
      </div>
  </div>
  <?php endforeach; ?>
</div>

@endsection
