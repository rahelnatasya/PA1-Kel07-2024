@extends('admin.master')

@section('title')
    Dosen
@endsection

@section('subtitle')
    <a class="btn btn-primary" href="{{ route('admin.dosen.create') }}" role="button">Tambah <i
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
                                    <th scope="col">Pendidikan</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">NIDN</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dosen as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset('aset/img/' . $item->gambar) }}" alt="{{ $item->judul }}" width="100"></td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->pendidikan }}</td>
                                    <td>{{ $item->role }}</td>
                                    <td>{{ $item->nidn }}</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{ route('admin.dosen.edit', $item->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('admin.dosen.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
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
