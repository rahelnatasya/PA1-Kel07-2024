@extends('layout.main')

@section('content')
<nav class="navbar bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">KURIKULUM</span>
    </div>
</nav>
<!-- Header - set the background image for the header in the line below-->
<header class="py-5 bg-image-full" style="background-image: url('{{URL::asset('aset/img/header5.png')}}'); height: 400px;">
    <div class="text-center my-5">
        <div class="navbar">
            <!-- Navbar content -->
        </div>
    </div>
</header>

<div class="container text-center"> SEMESTER I
    <div class="row">
        <div class="row">
            <div class="col fw-bold">Kode Mata Kuliah</div>
            <div class="col fw-bold">Nama Mata Kuliah</div>
            <div class="col fw-bold">SKS</div>
        </div>

        @foreach($kurikulum as $data)
        <div class="row">
            <div class="col">{{ $data['kode'] }}</div>
            <div class="col">{{ $data['nama'] }}</div>
            <div class="col">{{ $data['sks'] }}</div>
        </div>
        @endforeach

    </div>
</div>
@endsection


{{-- @foreach($kurikulum as $data)
<div class="container text-center"> {{ $data[ 'semester ']}}
<div class="row">
    <div class="col">{{ $data['kode'] }}</div>
    <div class="col">{{ $data['nama'] }}</div>
    <div class="col">{{ $data['sks'] }}</div>
</div>
</div>
@endforeach --}}