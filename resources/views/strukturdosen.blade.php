@extends('layout.main')

@section('content')
<nav class="navbar bg-primary">
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


    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .org-chart {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .level {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0;
        }
        .node {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin: 0 10px;
        }
        .node img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
        .node .title {
            margin-top: 10px;
            font-weight: bold;
        }
        .node .subtitle {
            margin-top: 5px;
        }
        .connector {
            width: 2px;
            background-color: black;
            position: relative;
        }
        .connector.horizontal {
            height: 20px;
        }
        .connector.vertical {
            height: 50px;
            width: 2px;
        }
    </style>
</head>
<body>

<div class="org-chart">
    <!-- Level 1 -->
    <div class="level">
        <div class="node">
            <div class="title">REKTOR INSTITUT TEKNOLOGI DEL</div>
            <div class="subtitle">(Dr. Arnaldo Marulitua Sinaga, S.T., M.InfoTech)</div>
        </div>
    </div>
    <div class="connector horizontal"></div>

    <!-- Level 2 -->
    <div class="level">
        <div class="node">
            <img src="{{URL::asset('aset/img/Picture2.png')}}" alt="Senat Fakultas Teknologi Industri">
            <div class="title">SENAT FAKULTAS TEKNOLOGI INDUSTRI</div>
            <div class="subtitle">Dr. Fitriani Tupa Ronauli Silalahi, S.Si, M.Si</div>
        </div>
        <div class="connector horizontal"></div>
        <div class="node">
            <img src="{{URL::asset('aset/img/Picture3.png')}}" alt="Senat Fakultas Teknologi Industri">
            <div class="title">SENAT FAKULTAS TEKNOLOGI INDUSTRI</div>
            <div class="subtitle">Wesly Mailander Siagian, S.Pt., M.M.</div>
        </div>
        <div class="connector horizontal"></div>
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
            <img src="{{URL::asset('aset/img/pak5.png')}}" alt="Gugus Jaminan Mutu Fakultas Teknologi Industri">
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

</body>
</html>

<!-- Page Content -->
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
@endsection