@extends('layout.main')

@section('content')
<nav class="navbar bg-primary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">RUANG KELAS</span>
    </div>
</nav>
<!-- Text -->
<section class="py-2">
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-lg-15">
                <p class="text-lg-start mt-10 text-justify">Ruang kelas di Fakultas Teknologi Industri Institut Teknologi Del merupakan fondasi dari pengalaman belajar-mengajar. Meskipun tampak sederhana, ruang kelas memiliki peran yang sangat penting dalam membentuk lingkungan pembelajaran yang efektif dan nyaman bagi mahasiswa.
                    Setiap ruang kelas didesain dengan memperhatikan kebutuhan pembelajaran, termasuk pencahayaan yang cukup, ventilasi udara yang baik, serta tata letak yang memungkinkan interaksi antara dosen dan mahasiswa. Furnitur yang ergonomis memastikan kenyamanan selama proses belajar, sehingga mahasiswa dapat fokus pada materi yang diajarkan.
                    Selain itu, ruang kelas juga dilengkapi dengan papan tulis atau whiteboard sebagai media untuk menyajikan materi pembelajaran secara visual. Dosen dapat dengan mudah menuliskan konsep-konsep kunci, rumus, atau ilustrasi yang mendukung pemahaman materi yang diajarkan.
                    Ketersediaan proyektor atau layar juga memungkinkan dosen untuk menampilkan presentasi atau materi tambahan dalam format digital, yang dapat memperkaya pengalaman pembelajaran mahasiswa. Selain itu, akses internet yang cepat juga menjadi salah satu fasilitas penting dalam ruang kelas modern, memungkinkan akses langsung ke sumber-sumber informasi yang relevan.</p>
            </div>
        </div>
    </div>
</section>
<!-- Galeri Content -->
<div class="container">
  <div class="row text-center text-lg-start">
      @foreach ($ruangkelas as $gambar)
          <div class="col-lg-3 col-md-4 col-6">
              <a href="#" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="{{ asset('aset/img/'. $gambar->gambar) }}" alt="{{ $gambar->gambar }}">
              </a>
          </div>
      @endforeach
  </div>
</div>
@endsection