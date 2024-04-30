@extends('layout.himpunan')

@section('himamera')
<nav class="navbar bg-dark mt-0 mb-4"> 
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h6 text-center mx-auto text-white">WELCOMING PARTY</span> 
    </div>
</nav>
<!-- Galeri Content -->
<div class="row text-center text-lg-start">
    <div class="col-lg-2 col-md-4 col-6 mb-4">
        <img class="img-fluid" src="{{URL::asset('aset/img/wp1.png')}}" alt="">
    </div>
    <div class="col-lg-2 col-md-4 col-6 mb-4">
        <img class="img-fluid" src="{{URL::asset('aset/img/wp2.png')}}" alt="">
    </div>
    <div class="col-lg-2 col-md-4 col-6 mb-4">
        <img class="img-fluid" src="{{URL::asset('aset/img/wp3.png')}}" alt="">
    </div>
    <div class="col-lg-2 col-md-4 col-6 mb-4">
        <img class="img-fluid" src="{{URL::asset('aset/img/wp4.png')}}" alt="">
    </div>
    <div class="col-lg-2 col-md-4 col-6 mb-4">
        <img class="img-fluid" src="{{URL::asset('aset/img/wp5.png')}}" alt="">
    </div>
    <div class="col-lg-2 col-md-4 col-6 mb-4">
        <img class="img-fluid" src="{{URL::asset('aset/img/wp6.png')}}" alt="">
    </div>
    <div class="col-lg-2 col-md-4 col-6 mb-4">
        <img class="img-fluid" src="{{URL::asset('aset/img/asrama1.png')}}" alt="">
    </div>
    <div class="col-lg-2 col-md-4 col-6 mb-4">
        <img class="img-fluid" src="{{URL::asset('aset/img/asrama1.png')}}" alt="">
    </div>
</div>

@endsection