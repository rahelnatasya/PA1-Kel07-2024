@extends('admin.master')

@section('title')
    Create Dosen & Staff
@endsection

@section('content')
<div class="section-body">
    <form action="{{ route('admin.dosen.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="images">Masukkan foto dosen :</label>
                            <input type="file" class="form-control" id="images" name="images" value="{{ old('images') }}">
                            @error('images')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="name">Nama Dosen:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="employee_no">Kode Pegawai :</label>
                            <input type="text" class="form-control" id="employee_no" name="employee_no" value="{{ old('employee_no') }}">
                            @error('employee_no')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div> 
                        <div class="form-group mb-3">
                            <label for="education">Pendidikan dosen :</label>
                            <textarea class="form-control" id="education" name="education" rows="3">{{ old('education') }}</textarea>
                            @error('education')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>                       
                        <div class="form-group mb-3">
                            <label for="role">Role :</label>
                            <select class="form-control" id="role" name="role">
                                <option value="dosen">Dosen</option>
                                <option value="staff">Staff</option>
                            </select>
                            @error('role')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>    
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan Dosen dan Staff</button>
                        </div>               
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
