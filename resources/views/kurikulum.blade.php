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

<div class="container text-center"> 
    <table class="table">
        <thead>
            <tr>
                <th class="fw-bold">Semester</th>
                <th class="fw-bold">Kode Mata Kuliah</th>
                <th class="fw-bold">Nama Mata Kuliah</th>
                <th class="fw-bold">SKS</th>
                <th class="fw-bold">Status</th>
        </thead>
        <tbody>
            @foreach($kurikulum as $data)
            <tr>
                <td>{{ $data->semester }}</td>
                <td>{{ $data->kode_mk }}</td>
                <td>{{ $data->subject }}</td>
                <td>{{ $data->sks }}</td>
                <td>{{ $data->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
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