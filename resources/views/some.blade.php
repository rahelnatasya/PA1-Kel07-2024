{{-- <!-- Page Content -->
<div class="container">
    <div class="row">
      <?php foreach ($strukturdosen as $item): ?>
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-0 shadow">
            <div class="card-body text-center">
              <img class="img-fluid rounded mb-3 mb-md-0" src="{{ URL::asset('aset/img/' . $item->images) }}" alt="{{ $item->images }}">
              <h5 class="card-title mb-0"><?php echo $item->name; ?></h5>
              <div class="card-text text-black-50"><?php echo $item->posisition; ?></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  </div>
  @endsection --}}


  {{-- @extends('layout.main')

@section('content') --}}
{{-- <nav class="navbar bg-primary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">STRUKTUR ORGANISASI</span>
    </div>
</nav>
<nav class="navbar">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1 text-center mx-auto text-dark">STRUKTUR ORGANISASI FAKULTAS TEKNOLOGI INDUSTRI<br>
            JURUSAN MANAJEMEN REKAYASA<br>
            INSTITUT TEKNOLOGI DEL</span>
    </div>
</nav>

<!-- Struktur Organisasi -->
<div id="org-structure">
  <style>
    #org-structure {
        font-family: Arial, sans-serif;
    }
    #org-structure .org-chart {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    #org-structure .level {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px 0;
    }
    #org-structure .node {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin: 0 10px;
    }
    #org-structure .node img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }
    #org-structure .node .title {
        margin-top: 10px;
        font-weight: bold;
    }
    #org-structure .node .subtitle {
        margin-top: 5px;
    }
    #org-structure .connector {
        width: 2px;
        background-color: black;
        position: relative;
    }
    #org-structure .connector.horizontal {
        height: 20px;
    }
    #org-structure .connector.vertical {
        height: 50px;
        width: 2px;
    }
  </style>

  <div class="org-chart">
    <!-- Level 1 -->
    <div class="level">
      <div class="node">
          <div class="title">REKTOR INSTITUT TEKNOLOGI DEL</div>
          <div class="subtitle">(Dr. Arnaldo Marulitua Sinaga, S.T., M.InfoTech)</div>
      </div>
    </div>
    <div class="connector vertical"></div>

    <!-- Level 2 -->
    <div class="level">
      <div class="node">
          <img src="{{URL::asset('aset/img/Picture2.png')}}" alt="Senat Fakultas Teknologi Industri">
          <div class="title">SENAT FAKULTAS TEKNOLOGI INDUSTRI</div>
          <div class="subtitle">Dr. Fitriani Tupa Ronauli Silalahi, S.Si, M.Si</div>
      </div>
      <div class="connector vertical"></div>
      <div class="node">
          <img src="{{URL::asset('aset/img/Picture3.png')}}" alt="Senat Fakultas Teknologi Industri">
          <div class="title">SENAT FAKULTAS TEKNOLOGI INDUSTRI</div>
          <div class="subtitle">Wesly Mailander Siagian, S.Pt., M.M.</div>
      </div>
      <div class="connector vertical"></div>
      <div class="node">
          <img src="{{URL::asset('aset/img/Picture6.png')}}" alt="Senat Fakultas Teknologi Industri">
          <div class="title">SENAT FAKULTAS TEKNOLOGI INDUSTRI</div>
          <div class="subtitle">Hadi Sutanto Saragi, S.T, M.Eng</div>
      </div>
      
    </div>

    <!-- Level 3 -->
    <div class="level">
      <div class="node">
          <img src="{{URL::asset('aset/img/Picture7.png')}}" alt="Kepala Laboratorium Sistem Produksi">
          <div class="title">KEPALA LABORATORIUM SISTEM PRODUKSI</div>
          <div class="subtitle">Samuel H. Tampubolon, S.T., MSc.</div>
      </div>
      <div class="connector vertical"></div>
      <div class="node">
          <img src="{{URL::asset('aset/img/Picture5.png')}}" alt="Ketua Program Studi S1 Manajemen Rekayasa">
          <div class="title">KETUA PROGRAM STUDI S1 MANAJEMEN REKAYASA</div>
          <div class="subtitle">Josua Boyke William Jawak, ST., M.Ds</div>
      </div>
      <div class="connector vertical"></div>
      <div class="node">
          <img src="{{URL::asset('aset/img/Picture13.png')}}" alt="Gugus Jaminan Mutu Fakultas Teknologi Industri">
          <div class="title">GUGUS JAMINAN MUTU FAKULTAS TEKNOLOGI INDUSTRI</div>
          <div class="subtitle">Santi Febri Arianti S.Si, M.Sc</div>
      </div>
    </div>

    <!-- Level 4 -->
    <div class="level">
      <div class="node">
          <img src="{{URL::asset('aset/img/Picture5.png')}}" alt="Kepala Laboratorium Desain Produk dan Inovasi">
          <div class="title">KEPALA LABORATORIUM DESAIN PRODUK DAN INOVASI</div>
          <div class="subtitle">Josua Boyke William Jawak, ST., M.Ds</div>
      </div>
      <div class="connector vertical"></div>
      <div class="node">
          <img src="{{URL::asset('aset/img/Picture4.png')}}" alt="Gugus Kendali Mutu Prodi S1 Manajemen Rekayasa">
          <div class="title">GUGUS KENDALI MUTU PRODI S1 MANAJEMEN REKAYASA</div>
          <div class="subtitle">Iswanti Sihaloho, S.Si., M.Si</div>
      </div>
    </div>
  </div>
</div>

{{-- @endsection --}}





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Layout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .news-card {
            background-color: #e0e0e0;
            border: 2px solid #2196F3;
            width: 300px;
            padding: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .news-card img {
            width: 100%;
            height: auto;
        }
        .date-overlay {
            position: relative;
            color: white;
            font-weight: bold;
            font-size: 24px;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 8px;
            width: fit-content;
        }
        .date-overlay span {
            display: block;
        }
        .news-title {
            font-size: 18px;
            font-weight: bold;
            margin: 16px 0 8px;
        }
        .news-date {
            color: #666;
            margin-bottom: 8px;
        }
        .news-content {
            color: #333;
            margin-bottom: 16px;
        }
        .read-more {
            text-align: center;
            font-weight: bold;
            color: #2196F3;
        }
    </style>
</head>
<body>
    <div class="news-card">
        <div class="date-overlay">
            <span>26</span>
            <span>Mar</span>
            <span>2024</span>
        </div>
        <img src="path/to/your/image.jpg" alt="News Image">
        <div class="news-title">Program Studi Manajemen Rekayasa melakukan Studi Banding ke Program Studi Teknik Industri Universitas Gadjah Mada</div>
        <div class="news-date">26 Maret 2024</div>
        <div class="news-content">
            Pada Jumat 15 Maret 2024, Program Studi Manajemen Rekayasa melakukan Studi Banding ke Program...
        </div>
        <div class="read-more">
            Selengkapnya>>
        </div>
    </div>
</body>
</html> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Modal</title>
    <style>
        /* Modal styles */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
            padding-top: 60px; 
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto; 
            padding: 20px;
            border: 1px solid #888;
            width: 80%; 
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .profile-container {
            display: flex;
            flex-wrap: wrap;
        }
        .profile-image {
            flex: 1;
            padding: 10px;
        }
        .profile-details {
            flex: 2;
            padding: 10px;
        }
        .profile-details h2, .profile-details h3, .profile-details p, .profile-details ul {
            margin: 0 0 10px 0;
        }
    </style>
</head>
<body>

<h2>Profile Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="profile-container">
        <div class="profile-image">
            <img src="profile-picture.jpg" alt="Profile Picture" style="width:100%">
        </div>
        <div class="profile-details">
            <h2>Dr. Fitriani Tupa Ronauli Silalahi, S.Si, M.Si</h2>
            <p>NIDN: 0112039001</p>
            <h3>Pendidikan</h3>
            <ul>
                <li>Matematika (Universitas Negeri Medan)</li>
                <li>Matematika (Institut Teknologi Bandung)</li>
                <li>Sains dan Manajemen (Institut Teknologi Bandung)</li>
            </ul>
            <h3>Riset Penelitian</h3>
            <ul>
                <li>Pengungkapan dan Pengelolaan Sumber Daya Hayati Tumbuhan Berbasis Masyarakat Lokal Di Provinsi Sumatera Utara</li>
                <li>Implementasi Fuzzy Ahp-Topsis Untuk Pemilihan Prioritas Supplier Bahan Bakar Palm Caul Dan Lokasi Pemasangan Key Point Di Up2d Sumatera Utara</li>
                <li>Penyusunan Kajian Analisa Kelayakan Pendirian Badan Usaha Milik Daerah Bidang Aneka Usaha Di Kabupaten Toba</li>
                <li>Model Penentuan Tarif Khusus Daring</li>
                <li>Analisis Strategi Marketing Dan Faktor-Faktor Yang Mempengaruhi Calon Mahasiswa Dalam Memilih Perguruan Tinggi Swasta (Studi Kasus Pts di Sumatera Utara)</li>
                <li>Formulasi Bauran Kebijakan Ekonomi Berbasis Inovasi</li>
                <li>Pemodelan Energi Strategis Untuk Pembangunan Berkelanjutan</li>
            </ul>
            <h3>Mata Kuliah yang diampu</h3>
            <ul>
                <li>Statistika Inferensi</li>
                <li>Probabilitas dan Statistika</li>
                <li>Matematika Lanjut</li>
                <li>Metodologi Penelitian</li>
                <li>Simulasi Sistem</li>
                <li>Pengambilan Keputusan</li>
                <li>Pengantar Manajemen Rekayasa</li>
                <li>Praktikum Analisis Data</li>
                <li>Sistem Operasional</li>
            </ul>
            <p>Email: fitri.silalahi@del.ac.id</p>
            <p>LinkedIn: Fitriani Silalahi</p>
            <p>Gedung Fakultas Teknologi Industri, Lantai 1, Ruang Dekan, R.911A</p>
        </div>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
