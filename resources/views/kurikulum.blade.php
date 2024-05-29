@extends('layout.main')

@section('content')
<nav class="navbar bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1 text-center mx-auto text-white ">KURIKULUM</span>
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
    @php
        $groupedKurikulum = [];
        foreach($kurikulum as $data) {
            $groupedKurikulum[$data->semester][] = $data;
        }
    @endphp

    @foreach($groupedKurikulum as $semester => $courses)
        <div class="semester-title"><strong>SEMESTER  {{ $semester }}</strong></div>
        <table class="table">
            <thead>
                <tr>
                    <th class="fw-bold">Kode Mata Kuliah</th>
                    <th class="fw-bold">Nama Mata Kuliah</th>
                    <th class="fw-bold">SKS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->kode_mk }}</td>
                        <td>{{ $course->subject }}</td>
                        <td>{{ $course->sks }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach
</div>

@endsection
