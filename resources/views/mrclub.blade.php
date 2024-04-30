@extends('layout.main')

@section('content')
<nav class="navbar bg-primary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">MR CLUB</span>
    </div>
</nav>
<!-- Text -->
<section class="py-2">
    <div class="container my-3">
        <?php foreach ($mrclub as $item): ?>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h6 class="text-lg-start mt-10 text-justify"><strong><?php echo $item->judul; ?></strong></h6>
                <p class="text-lg-start mt-10 text-justify"><?php echo $item->deskripsi; ?></p>
                <img src="<?php echo URL::asset('aset/img/'. $item->gambar ); ?>" class="img-fluid" >
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
@endsection