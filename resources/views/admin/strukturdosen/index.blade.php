@extends('admin.master')

@section('title')
Struktur Dosen
@endsection

@section('subtitle')
    <a class="btn btn-primary" href="{{ route('admin.strukturdosen.create') }}" role="button">Tambah <i
            class="fa-solid fa-plus"></i></a>
@endsection

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="example1">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Nama Dosen</th>
                                    <th scope="col">Posisi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($strukturdosen as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset('aset/img/' . $item->images) }}" alt="{{ $item->name }}" width="100"></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->posisition }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('admin.strukturdosen.edit', $item->id) }}" class="btn btn-warning "onclick="return confirm('Apakah Anda yakin ingin memperbaharui?')">Edit</a>
                                            <form action="{{ route('admin.strukturdosen.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger mx-1"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
