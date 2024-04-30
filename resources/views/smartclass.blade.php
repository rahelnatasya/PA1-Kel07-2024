@extends('layout.main')

@section('content')
<nav class="navbar bg-primary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">SMART CLASS</span>
    </div>
</nav>
<!-- Text -->
<section class="py-2">
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-lg-15">
                <p class="text-lg-start mt-10 text-justify">Smart class di Fakultas Teknologi Industri Institut Teknologi Del merupakan terobosan yang mendukung pembelajaran yang interaktif dan efisien, terutama dalam konteks pembelajaran jarak jauh. Berbeda dengan ruang kelas konvensional, smart class dilengkapi dengan teknologi canggih yang memungkinkan interaksi langsung antara dosen dan mahasiswa, meskipun mereka berada di lokasi yang berjauhan.
                  Salah satu fitur utama dari smart class adalah board canggih yang memungkinkan dosen untuk menyajikan materi pembelajaran secara dinamis. Dengan menggunakan board ini, dosen dapat menampilkan presentasi, grafik, video, dan berbagai materi pendukung lainnya secara langsung kepada mahasiswa, sehingga memudahkan pemahaman dan pemrosesan informasi.
                   Smart class juga dilengkapi dengan beberapa mikrofon yang memungkinkan interaksi suara antara dosen dan mahasiswa. Dosen dapat dengan mudah mendengarkan pertanyaan atau tanggapan dari mahasiswa, bahkan jika mereka berada di tempat yang berbeda. Hal ini menciptakan lingkungan pembelajaran yang kolaboratif dan interaktif, di mana diskusi dan tanya jawab dapat berlangsung dengan lancar.
                  </p>
            </div>
        </div>
    </div>
</section>
<!-- Galeri Content -->
<div class="container">
  <div class="row text-center text-lg-start">
      @foreach ($smartclass as $gambar)
          <div class="col-lg-3 col-md-4 col-6">
              <a href="#" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="{{ asset('aset/img/'. $gambar->gambar) }}" alt="{{ $gambar->gambar }}">
              </a>
          </div>
      @endforeach
  </div>
</div>
@endsection