@extends('admin.master')

@section('title')
    Profil Lulusan
@endsection

@section('subtitle')
    <a class="btn btn-primary" href="{{ route('admin.profillulusan.create') }}" role="button">Tambah <i
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
                                        <th scope="col">No.</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Job Title</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Aksi</th> <!-- Tambah kolom aksi -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($profillulusan as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->judul}}</td>
                                            <td>{{ $item->jobtitle }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td class="d-flex justify-content-center">
                                                <a href="{{ route('admin.profillulusan.edit', ['profillulusan' => $item->id]) }}"
                                                    class="btn btn-primary mr-2"><i class="fa fa-edit"></i></a>

                                                <form action="{{ route('admin.profillulusan.destroy', ['profillulusan' => $item->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                                            class="fa fa-trash"></i></button>
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
