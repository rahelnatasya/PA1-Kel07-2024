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
            @foreach ($strukturdosen as $item)
                @if ($item->level == 2)
                    <div class="node">
                        <img src="{{ URL::asset('aset/img/' . $item->images) }}" alt="{{ $item->position }}">
                        <div class="title">{{ $item->position }}</div>
                        <div class="subtitle">{{ $item->name }}</div>
                    </div>
                    @if (!$loop->last)
                        <div class="connector vertical"></div>
                    @endif
                @endif
            @endforeach
        </div>
    
        <!-- Level 3 -->
        <div class="level">
            @foreach ($strukturdosen as $item)
                @if ($item->level == 3)
                    <div class="node">
                        <img src="{{ URL::asset('aset/img/' . $item->images) }}" alt="{{ $item->position }}">
                        <div class="title">{{ $item->position }}</div>
                        <div class="subtitle">{{ $item->name }}</div>
                    </div>
                    @if (!$loop->last)
                        <div class="connector vertical"></div>
                    @endif
                @endif
            @endforeach
        </div>
    
        <!-- Level 4 -->
        <div class="level">
            @foreach ($strukturdosen as $item)
                @if ($item->level == 4)
                    <div class="node">
                        <img src="{{ URL::asset('aset/img/' . $item->images) }}" alt="{{ $item->position }}">
                        <div class="title">{{ $item->position }}</div>
                        <div class="subtitle">{{ $item->name }}</div>
                    </div>
                    @if (!$loop->last)
                        <div class="connector vertical"></div>
                    @endif
                @endif
            @endforeach
        </div>
    </div>
    
</body>
</html>
@endsection

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
{{--  --}}