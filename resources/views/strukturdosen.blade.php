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
<link href="{{URL::asset('/aset/css/custom-vid.css')}}" rel="stylesheet" />
<!-- Struktur Dosen -->
<div class="container-dosen">
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
</div>

@endsection

