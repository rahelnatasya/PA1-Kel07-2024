@extends('layout.main')

@section('content')
<!-- Navbar-->
<nav class="navbar bg-primary mb-4"> <!-- Menambahkan kelas mb-4 untuk memberikan margin bottom -->
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">LABORATORIUM</span>
  </div>
</nav>
<!-- Content -->
<!-- Page Content -->
<div class="container mb-4">
<!-- Project One -->
<div class="row">
  <div class="col-md-5">
    <a href="#">
      <img class="img-fluid rounded mb-3 mb-md-0" src="https://via.placeholder.com/700x300" alt="">
    </a>
  </div>
  <div class="col-md-6">
    <h4>Laboratorium Sistem Produksi <br>(Production System Lab)</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
    <a class="btn btn-success" href="/production">Selengkapnya</a>
  </div>
</div>
  <!-- /.row -->
  <!-- Project Two -->
  <div class="row mt-4">
    <div class="col-md-5">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="https://via.placeholder.com/700x300" alt="">
      </a>
    </div>
    <div class="col-md-6">
      <h4>Laboratorium Desain Produk dan Inovasi<br> (Product Design and Inovation Lab)</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
      <a class="btn btn-success" href="/productdesign">Selengkapnya</a>
    </div>
  </div>
  <!-- /.row -->
  <!-- Project Three -->
  <div class="row mt-4">
    <div class="col-md-5">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="https://via.placeholder.com/700x300" alt="">
      </a>
    </div>
    <div class="col-md-6">
      <h4>Laboratorium Bahasa <br>(Language Lab)</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
      <a class="btn btn-success" href="/bahasa">Selengkapnya</a>
    </div>
  </div>
  <!-- Project Four -->
  <div class="row mt-4">
    <div class="col-md-5">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="https://via.placeholder.com/700x300" alt="">
      </a>
    </div>
    <div class="col-md-6">
      <h4>Laboratorium Fisika <br> (Physics Lab)</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
      <a class="btn btn-success" href="/fisika">Selengkapnya</a>
    </div>
  </div>
  <!-- /.row -->
  <div class="row mt-4">
    <div class="col-md-5">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="https://via.placeholder.com/700x300" alt="">
      </a>
    </div>
    <div class="col-md-6">
      <h4>Laboratorium Praktikum Analisis Data <br> (Data Analysis Practical Lab)</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
      <a class="btn btn-success" href="/data">Selengkapnya</a>
    </div>
  </div>
  <!-- /.row -->
</div>


@endsection