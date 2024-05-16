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
          @foreach($prestasi as $data)
          <tr>
              <td>{{ $data->name }}</td>
              <td>{{ $data->time_event }}</td>
              <td>{{ $data->achievement_level }}</td>
              <td><?php echo $data->description ?></td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection