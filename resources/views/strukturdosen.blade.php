@extends('layout.main')

@section('content')
<nav class="navbar bg-primary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">STRUKTUR ORGANISASI</span>
    </div>
</nav>
<nav class="navbar">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1 text-center mx-auto text-dark">STRUKTUR ORGANISASI FAKULTAS TEKNOLOGI INDUSTRI<br>
            JURUSAN MANAJEMEN REKAYASA<br>
            INSTITUT TEKNOLOGI DEL</span>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <?php foreach ($strukturdosen as $item): ?>
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <div class="card-body text-center">
            <img class="img-fluid rounded mb-3 mb-md-0" src="{{ URL::asset('aset/img/' . $item->images) }}" alt="{{ $item->images }}">
            <h5 class="card-title mb-0"><?php echo $item->name; ?></h5>
            <div class="card-text text-black-50"><?php echo $item->posisition; ?></div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
</div>
@endsection