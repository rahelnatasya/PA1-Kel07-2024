@extends('admin.master')

@section('title', 'Visi Misi Tujuan')

@section('subtitle')
    <a class="btn btn-primary" href="{{ route('admin.visimisi.create') }}" role="button">Tambah <i class="fas fa-plus"></i></a>
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
                                    <th scope="col">No.</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($visimisi as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{ route('admin.visimisi.edit', ['visimisi' => $item->id]) }}" class="btn btn-primary mr-2"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('admin.visimisi.destroy', ['visimisi' => $item->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></button>
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

