@extends('kerangka.master')
@section('content')

<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-center">Edit Data Mahasiswa</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="POST" action="{{route('mahasiswa.update', $mahasiswa->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>NIM</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nim" class="form-control @error('nim') is invalid
                                @enderror" name="nim" value="{{ old('nim') ?? $mahasiswa->nim }}" placeholder="NIM">
                                @error('nim')
                                <div class="alert alert-danger mt-1 text-center">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Foto</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="file" id="foto" class="form-control text-center @error('foto') is invalid
                                @enderror" name="foto" value="{{ old('foto') ?? $mahasiswa->foto }}" placeholder="Foto">
                                @error('foto')
                                <div class="alert alert-danger mt-1 text-center">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Nama</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nama" class="form-control @error('nama') is invalid
                                @enderror" name="nama" value="{{ old('nama') ?? $mahasiswa->nama }}" placeholder="Nama">
                                @error('nama')
                                <div class="alert alert-danger mt-1 text-center">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Gender</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="gender" class="form-control @error('gender') is invalid
                                @enderror" name="gender" value="{{ old('gender') ?? $mahasiswa->gender }}" placeholder="Gender">
                                @error('gender')
                                <div class="alert alert-danger mt-1 text-center">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Fakultas</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="fakultas" class="form-control @error('fakultas') is invalid
                                @enderror" name="fakultas" value="{{ old('fakultas') ?? $mahasiswa->fakultas }}" placeholder="Fakultas">
                                @error('fakultas')
                                <div class="alert alert-danger mt-1 text-center">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Ubah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection