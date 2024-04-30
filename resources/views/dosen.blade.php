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
              <img src="{{ URL::asset('aset/img/'. $item->gambar) }}" class="card-img-top" alt="{{ $item->gambar }}">
              <div class="card-body text-center">
                  <h5 class="card-title mb-0">{{ $item['nama'] }}</h5>
                  <!-- Add data-dosen-id attribute with the faculty member's ID -->
                  <button type="button" class="btn btn-primary mt-2 btn-view-details" data-toggle="modal" data-target="#exampleModal{{$item['id']}}" data-dosen-id="{{ $item['id'] }}">
                      View Details
                  </button>
              </div>
          </div>
      </div>
      @endforeach
  </div>
</div>
@foreach ($dosen as $item)
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$item['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalScrollableTitle">{{ $item['nama'] }}<br> NIDN: {{ $item['nidn'] }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <!-- Content here -->
              <img src="{{ URL::asset('aset/img/'. $item->gambar) }}" class="card-img-top" alt="{{ $item->gambar }}">
              <div class="card-body text-center">
                  <h5 class="card-title mb-0">Pendidikan</h5>
                  <p>{{ $item['pendidikan'] }}</p>
                  <div class="card-text text-black-50">{{ $item['role'] }}</div>
              </div>
          </div>
      </div>
  </div>
</div>
@endforeach

<!-- jQuery and Bootstrap JS (Ensure they are included) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
      // Function to handle click event on "View Details" button
      $('.btn-view-details').click(function () {
          var dosenId = $(this).data('dosen-id'); // Get the data-dosen-id attribute value
          var dosenData = getDataForDosen(dosenId); // Fetch data for the selected faculty member

          // Populate modal with data
          $('#exampleModal' + dosenId).find('.modal-title').text(dosenData.nama + ' - NIDN: ' + dosenData.nidn);
          $('#exampleModal' + dosenId).find('.card-img-top').attr('src', dosenData.gambar);
          $('#exampleModal' + dosenId).find('.card-body').find('.card-title').text('Pendidikan');
          $('#exampleModal' + dosenId).find('.card-body').find('p').text(dosenData.pendidikan);
          $('#exampleModal' + dosenId).find('.card-body').find('.card-text').text(dosenData.role);

          // Show the modal
          $('#exampleModal' + dosenId).modal('show');
      });

      // Function to fetch data for the selected faculty member from the database
      function getDataForDosen(dosenId) {
          var dosenData;

          // AJAX request to fetch data from the backend
          $.ajax({
              url: '/admin/dosen/' + dosenId, // Endpoint to fetch dosen data by ID
              type: 'GET',
              async: false, // Wait for the response before continuing
              success: function (response) {
                  dosenData = response;
              },
              error: function (xhr, status, error) {
                  console.error(xhr.responseText);
              }
          });

          return dosenData;
      }
  });
</script>
@endsection


