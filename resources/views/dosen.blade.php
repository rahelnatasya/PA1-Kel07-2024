@extends('layout.main')

@section('content')
<nav class="navbar bg-primary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">DOSEN/STAF PENGAJAR</span>
    </div>
</nav>
<!-- Header - set the background image for the header in the line below-->
<header class="py-5 bg-image-full" style="background-image: url('{{URL::asset('aset/img/header3.png')}}'); height: 400px; margin-bottom: 20px;">
    <div class="text-center my-5">
        <div class="navbar">
            <!-- Navbar content -->
        </div>
    </div>
</header>

<nav class="navbar bg-dark mt-3 mb-4"> <!-- Menambahkan kelas mt-3 dan mb-4 untuk memberikan margin top dan bottom pada navbar -->
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h6 text-center mx-auto text-white">DOSEN & STAFF</span> <!-- Menambahkan kelas mb-3 untuk memberikan margin bottom -->
    </div>
</nav>
<!-- Page Content -->
<div class="container">
  <div class="row">
      <!-- Team Dosen -->
      @foreach ($dosen as $item)
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-0 shadow">
              <img src="{{ URL::asset('aset/img/'. $item->images) }}" class="card-img-top" alt="{{ $item->images }}">
              <div class="card-body text-center">
                  <!-- Add data-dosen-id attribute with the faculty member's ID -->
                  <button type="button" class="btn btn-light mt-2 btn-view-details" data-toggle="modal" data-target="#exampleModal{{$item['id']}}" data-dosen-id="{{ $item['id'] }}">
                    <h5 class="card-title mb-0">{{ $item->name }}</h5>
                  </button>
              </div>
          </div>
      </div>
      @endforeach
  </div>
</div>
@foreach ($dosen as $item)
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalScrollableTitle">{{ $item->name }}<br> Nomor Pegawai: {{ $item->employee_no }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <!-- Content here -->
              <img src="{{ URL::asset('aset/img/'. $item->images) }}" class="card-img-top" alt="{{ $item->images }}">
              <div class="card-body text-center">
                  <h5 class="card-title mb-0">Pendidikan</h5>
                  <p>{{ $item->education }}</p>
                  <div class="card-text text-black-50">{{ $item->role }}</div>
              </div>
          </div>
      </div>
  </div>
</div>
@endforeach

<!-- jQuery and Bootstrap JS (Ensure they are included) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Tambahkan script JavaScript -->
<script>
    // Menggunakan event delegation untuk menangani tombol View More
    document.addEventListener('click', function(event) {
        // Periksa apakah tombol yang ditekan memiliki kelas 'view-more'
        if (event.target.classList.contains('view-more')) {
            // Ambil target modal berdasarkan atribut data-target pada tombol
            var targetModalId = event.target.getAttribute('data-target');
            // Cari modal dengan ID yang sesuai dan panggil metode modal Bootstrap 'show()'
            var modal = document.querySelector(targetModalId);
            if (modal) {
                var bsModal = new bootstrap.Modal(modal);
                bsModal.show();
            }
        }
    });
</script>
@endsection


