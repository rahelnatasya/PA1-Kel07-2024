@extends('layout.main')

@section('content')
<!-- Navbar-->
<nav class="navbar bg-primary mb-4"> <!-- Menambahkan kelas mb-4 untuk memberikan margin bottom -->
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">PRESTASI MAHASISWA</span>
  </div>
</nav>

<!--Content -->
<div class="container text-center"> 
    <div class="row">
        <div class="row">
            <div class="col fw-bold">Jenis Prestasi</div>
            <div class="col fw-bold">Nama Mahasiswa</div>
            <div class="col fw-bold">Deksripsi</div>
        </div>

        @foreach($prestasi as $data)
        <div class="row">
            <div class="col">{{ $data['jenisprestasi'] }}</div>
            <div class="col">{{ $data['nama'] }}</div>
            <div class="col">{{ $data['deskripsi'] }}</div>
        </div>
        @endforeach

    </div>
</div>

@endsection