@extends('layout.main')

@section('content')
<nav class="navbar bg-primary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 text-center text-white mx-auto">ASRAMA</span>
    </div>
</nav>
<section class="py-2">
  <div class="container my-3">
      <div class="row justify-content-center">
          <div class="col-lg-15">
              <p class="text-lg-start mt-10 text-justify">Sejak didirikan tahun 2001, IT Del sudah mengharuskan mahasiswanya untuk tinggal diasrama tanpa terkecuali.
                 Tujuannya adalah agar menunjang keberhasilan pencapaian tujuan pendidikan mahasiswanya. Selain itu kenapa seluruh mahasiswa diharusnya berasrama adalah agar para Bapak dan 
                 Ibu Asrama dapat memberikan bimbingan kepada mereka selain yang diperoleh mereka dikampus, untuk dapat menanamkan rasa disiplin dalam diri mereka,agar mereka dapat bersosialisasi 
                 dengan semua teman-teman yang berasal dari berbagai tempat dan agar membiasakan diri mereka untuk dapat hidup mandiri. Biasanya asrama merupakan sekedar tempat untuk tidur, tapi tidak di IT Del. 
                 Dimana asrama juga merupakan tempat belajar untuk pembentukan karakter dan pendidikan rohani, karena IT Del mengharapkan lulusannya tidak hanya pintar dalam hal akademik tapi juga diharapkan memiliki karakter yang baik agar 
                 sesuai dengan moto dari Yayasan Del yakni MarTuhan, Maroha dan Marbisuk. 
                 <br>Setiap harinya mahasiswa memulai melakukan aktivitas bersama-sama. Mulai dari bangun pagi pukul 05.00 wib kemudian diawali dengan doa bersama untuk mengucap syukur dengan hari yang baru. Setelah itu melakukan kegiatan kebersihan mulai dari tempat tidur, lemari pakaian dan lain-lain. 
                 Tidak hanya pagi hari, malam sebelum tidur Bapak dan Ibu asrama akan melakukan doa bersama mahasiswa setelah sharing session. Dimana para mahasiswa diwajibkan bergantian memimpin ibadah, tujuannya adalah melatih keberanian mereka untuk dapat berbicara didepan umum 
                 <br>Asrama di IT Del juga merupakan sarana pendidikan dalam pembentukan karakter mahasiswanya. Dimana para mahasiswa akan mendapatkan nilai prilaku setiap tiga bulan sekali dari setiap Bapak dan Ibu asramanya. 
                 Nilai ini akan sangat berpengaruh kepada mahasiswa apabila mereka ingin mengikuti suatu organisasi kemahasiswaan. 
                 Begitu juga untuk mendapatkan beasiswa, baik itu beasiswa ekonomi maupun beasiswa prestasi. Karena bukan hanya nilai yang baik yang diharapkan dari mahasiswanya tapi juga mahasiswa yang mempunyai akhlak yang baik. IT Del selalu berusaha 
                 menciptakan manusia yang tidak hanya pintar tapi juga yang MarTuhan, Maroha dan Marbisuk (Berketuhanan, Berperasaan dan Bijaksana).</p>
          </div>
      </div>
  </div>
  <style>
    .galeri-content {
        text-align: center;
        background-color: black;
        color: white;
        padding: 4px; 
    }
  </style>
</section>
<!-- Galeri Content -->
<div class="container">
  <div class="row text-center text-lg-start">
    @foreach ($asrama as $data) 
    <div class="col-lg-3 col-md-4 col-6">
      <img class="img-fluid" src="{{ asset ('aset/img/'. $data->gambar) }}" alt="{{ $data->gambar }}">
      <p class="galeri-content">{{ $data['nama'] }}</p>
    </div>
    @endforeach
  </div>
</div>
@endsection