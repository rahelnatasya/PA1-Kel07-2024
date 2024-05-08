@extends('layout.main')

@section('content')
<nav class="navbar bg-primary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">PROFIL LULUSAN</span>
    </div>
</nav>
        <!-- Header - set the background image for the header in the line below-->
        <header class="py-5 bg-image-full" style="background-image: url('{{URL::asset('aset/img/header1.png')}}'); height: 400px;">
            <div class="text-center my-5">
                <div class="navbar">
                    <!-- Navbar content -->
                </div>
            </div>
        </header>
        {{-- @php
$sections = [
    [
        'title' => 'Perekayasa Pengembangan Bisnis (Business Development Engineer)',
        'lead' => 'Business Analyst, Business Developer, dan R&D Engineer',
        'content' => 'Seseorang yang berkemampuan dalam: Mengidentifikasi dan menganalisis peluang pengembangan bisnis, memformulasikan strategi dan membuat rencana pengembangan bisnis kepada manajemen puncak. Memimpin dan mengorganisir sebuah tim teknis dalam mengimplementasikan rencana program bagi pengembangan bisnis.'
    ],
];
@endphp  --}}
<!-- Content section -->
@foreach ($profillulusan as $section)
<section class="py-2">
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h5>{{ $section->name }}</h5>
                <p class="lead">{{ $section->jobtitle }}</p>
                <p class="mb-0">{{ $section->description }}</p>
            </div>
        </div>
    </div>
</section>
@endforeach
@endsection