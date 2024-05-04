@extends('layout.main')

@section('content')
<!-- Navbar-->
<nav class="navbar bg-primary mb-4"> <!-- Menambahkan kelas mb-4 untuk memberikan margin bottom -->
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">LABORATORIUM</span>
  </div>
</nav>
<!-- Content -->
<!-- Page Content -->
<div class="container mb-4">
    <!-- Loop through each lab data -->
    @foreach($laboratorium as $mylab)
    <div class="row mt-4">
        <div class="col-md-5">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="{{ URL::asset('aset/img/' . $mylab->gambar) }}" alt="{{ $mylab->name }}">
            </a>
        </div>
        <div class="col-md-6">
            <h4>{{ $mylab->nama }}</h4>
            <p>{{ $mylab->deskripsi }}</p>
        </div>
    </div>
    <!-- /.row -->
    @endforeach
</div>
@endsection