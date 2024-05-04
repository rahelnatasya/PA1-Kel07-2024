@extends('admin.master')

@section('title')
    Selamat Datang Admin!
@endsection

@section('subtitle')
    Kumpulan Data
@endsection

@section('content')
    {{-- custom --}}
    <div class="row mt-3">

        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <p>Kurikulum</p>
                </div>
                <div class="icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <a href="{{ Route('admin.kurikulum.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <p>Profil Lulusan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <a href="{{ Route('admin.profillulusan.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <p>Visi Misi Tujuan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <a href="{{ Route('admin.visimisi.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">        
                    <p>Galeri Kategori Fasiltas</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chalkboard"></i>
                </div>
                <a href="{{ Route('admin.ruang.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">        
                    <p>Deskripsi Kategori Fasilitas</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chalkboard"></i>
                </div>
                <a href="{{ Route('admin.category.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">        
                    <p>MR Club</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{ Route('admin.mrclub.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>  
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">        
                    <p>Kegiatan Besar Himpunan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{ Route('admin.himamera.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
                <div class="inner">        
                    <p>Galeri Asrama</p>
                </div>
                <div class="icon">
                    <i class="fas fa-home"></i>
                </div>
                <a href="{{ Route('admin.asrama.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>  

    </div> 
@endsection