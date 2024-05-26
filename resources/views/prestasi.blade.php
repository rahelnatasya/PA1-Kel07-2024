@extends('layout.main')

@section('content')
<!-- Navbar -->
<nav class="navbar bg-primary mb-4">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">PRESTASI MAHASISWA</span>
  </div>
</nav>

<!-- Content -->
<div class="container text-center"> 
  @php
      $groupedPrestasi = [];
      foreach($prestasi as $data) {
          $year = date('Y', strtotime($data->time_event));
          $groupedPrestasi[$year][] = $data;
      }
  @endphp

  @foreach($groupedPrestasi as $year => $achievements)
      <div class="year-title"><strong>Tahun {{ $year }}</strong></div>
      <table class="table">
          <thead>
              <tr>
                  <th class="fw-bold">Nama Kegiatan</th>
                  <th class="fw-bold">Waktu Pelaksanaan</th>
                  <th class="fw-bold">Tingkat</th>
                  <th class="fw-bold">Prestasi yang dicapai</th>
              </tr>
          </thead>
          <tbody>
              @foreach($achievements as $achievement)
                  <tr>
                      <td>{{ $achievement->name }}</td>
                      <td>{{ \Carbon\Carbon::parse($achievement->time_event)->translatedFormat('d F Y') }}</td>
                      <td>{{ $achievement->achievement_level }}</td>
                      <td>{{ $achievement->description }}</td>
                  </tr>
              @endforeach
          </tbody>
      </table>
  @endforeach
</div>
@endsection
