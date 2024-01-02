@extends('kerangka.master')
@section('content')

<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-center">Tambah Dosen</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="POST" action="{{route('dosen.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>NIDN</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nidn" class="form-control @error('nidn') is invalid
                                @enderror" name="nidn" value="{{ old('nidn') }}" placeholder="NIDN">
                                @error('nidn')
                                <div class="alert alert-danger mt-1 text-center">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Foto</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="file" id="foto" class="form-control @error('foto') is invalid
                                @enderror" name="foto" value="{{ old('foto') }}" placeholder="Foto">
                                @error('foto')
                                <div class="alert alert-danger mt-1 text-center">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Nama Dosen</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nama" class="form-control @error('nama') is invalid
                                @enderror" name="nama" value="{{ old('nama') }}" placeholder="Nama Dosen">
                                @error('nama')
                                <div class="alert alert-danger mt-1 text-center">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Jabatan</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="gender" class="form-control @error('gender') is invalid
                                @enderror" name="gender" value="{{ old('gender')}}" placeholder="Jabatan">
                                @error('gender')
                                <div class="alert alert-danger mt-1 text-center">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Alamat</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="alamat" class="form-control @error('alamat') is invalid
                                @enderror" name="alamat" value="{{ old('alamat')}}" placeholder="Alamat">
                                @error('alamat')
                                <div class="alert alert-danger mt-1 text-center">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Tambahkan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection