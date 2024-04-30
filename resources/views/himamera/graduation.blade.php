@extends('layout.himpunan')

@section('himamera')
<nav class="navbar bg-dark mt-0 mb-4"> 
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h6 text-center mx-auto text-white">ACARA GRADUATION</span> 
    </div>
</nav>
<!-- Galeri Content -->
<div class="container">
    <div class="row text-center text-lg-start">
  
      <div class="wp1">
          <img class="img-fluid img-thumbnail" src="{{URL::asset('aset/img/wp1.png')}}" alt="">
      </div>
      <div class="wp2">
          <img class="img-fluid img-thumbnail" src="{{URL::asset('aset/img/wp2.png')}}" alt="">
      </div>
      <div class="wp3">
          <img class="img-fluid img-thumbnail" src="{{URL::asset('aset/img/wp3.png')}}" alt="">
      </div>
      <div class="wp4">
          <img class="img-fluid img-thumbnail" src="{{URL::asset('aset/img/wp4.png')}}" alt="">
      </div>
      <div class="wp5">
          <img class="img-fluid img-thumbnail" src="{{URL::asset('aset/img/wp5.png')}}" alt="">
      </div>
      <div class="wp6">
          <img class="img-fluid img-thumbnail" src="{{URL::asset('aset/img/wp6.png')}}" alt="">
      </div>
      <div class="wp7">
          <img class="img-fluid img-thumbnail" src="{{URL::asset('aset/img/wp7.png')}}" alt="">
      </div>
      <div class="wp8">
          <img class="img-fluid img-thumbnail" src="{{URL::asset('aset/img/wp8.png')}}" alt="">
      </div>
      <style>
        .wp1{
        position: absolute;
        width: 274px;
        height: 340px;
        left: 43px;
        top: 101px;
        background: url({{URL::asset('aset/img/wp1.png')}});
        }
        .wp2{
        position: absolute;
        width: 241px;
        height: 168px;
        left: 321px;
        top: 273px;
        background: url(DSC_0271.jpg);
        }
        .wp3{
        position: absolute;
        width: 350px;
        height: 169px;
        left: 565px;
        top: 101px;
        background: url(_DSC0394.jpg);
        }
        .wp4{
        position: absolute;
        width: 174px;
        height: 168px;
        left: 565px;
        top: 273px;
        background: url(DSC_0326.jpg);
        }
        .wp5{
        position: absolute;
        width: 171px;
        height: 168px;
        left: 744px;
        top: 273px;
        background: url(_DSC0171.jpg);
        }
        .wp6{
        position: absolute;
        width: 471px;
        height: 179px;
        left: 43px;
        top: 445px;
        background: url(_DSC0387.jpg);
        }
        .wp7{
        position: absolute;
        width: 172px;
        height: 179px;
        left: 517px;
        top: 445px;
        background: url(_DSC0124.jpg);
        }
        .wp8{
        position: absolute;
        width: 221px;
        height: 179px;
        left: 694px;
        top: 445px;
        background: url(_DSC0428.jpg);
        }
        </style>
@endsection