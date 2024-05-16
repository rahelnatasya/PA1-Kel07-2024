@extends('layout.main')

@section('content')
<nav class="navbar bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">BERITA</span>
    </div>
</nav>
<!-- Page Content -->
<div class="container col-mb-4 mx-auto">

    <!-- Portfolio Item Heading -->
    <div class="col-md-8 mt-4 mx-auto">
        <p class="mb-0"><?php echo  \Carbon\Carbon::parse($berita->date)->translatedFormat('d F Y') ?></p>
        <h3 class="my-2 col-md-10" style="text-align: justify;">{{ $berita->title }}</h3>
        <p class="mb-3 mx-auto">Oleh: <?php echo $berita->created_by ?></p>
    </div>

    <!-- Portfolio Item Row -->
    <div class="row">
        <div class="col-md-8 mx-auto">
            <img class="img-fluid" src="{{ asset('aset/img/'.$berita->images) }}" style="max-width: 100%; height: auto;" alt="">
        </div>
    </div>

    <div class="col-md-8 mx-auto">
        <p style="text-align: justify;"><?php echo $berita->description ?></p>
    </div>
  
</div>
@endsection
