@extends('layout.main')

@section('content')
<nav class="navbar bg-primary">
    <div class="container-fluid">
        @if ($galery->isNotEmpty() && $category->find($galery->first()->room_id))
            <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">{{ $category->find($galery->first()->room_id)->category }}</span>
        @else
            <!-- Handle case when category or galery is empty or room_id is not found -->
        @endif
    </div>
</nav>
<!-- Text -->
<section class="py-2">
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-lg-15">
                @if ($galery->isNotEmpty() && $category->find($galery->first()->room_id))
                    <p class="text-lg-start mt-10 text-justify"><?php echo $category->find($galery->first()->room_id)->description ?></p>
                @else
                    <p class="text-lg-start mt-10 text-justify">No description available</p>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- Galeri Section -->
<div class="container">
    <div class="row text-center text-lg-start">
        @foreach ($galery as $gambar)
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="{{ asset('aset/img/'.$gambar->images) }}">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
