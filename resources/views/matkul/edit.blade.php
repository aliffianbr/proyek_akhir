@extends('kerangka.master')
@section('content')

<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-center">Ubah Data Mata Kuliah</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="POST" action="{{route('matkul.update', $matkul->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>KODE</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="kode" class="form-control @error('kode') is invalid
                                @enderror" name="kode" value="{{ old('kode') ?? $matkul->kode  }}" placeholder="KODE">
                                @error('kode')
                                <div class="alert alert-danger mt-1 text-center">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Mata Kuliah</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="matkul" class="form-control @error('matkul') is invalid
                                @enderror" name="matkul" value="{{ old('matkul') ?? $matkul->matkul }}" placeholder="Mata Kuliah">
                                @error('matkul')
                                <div class="alert alert-danger mt-1 text-center">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Kelas</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="kelas" class="form-control @error('kelas') is invalid
                                @enderror" name="kelas" value="{{ old('kelas') ?? $matkul->kelas}}" placeholder="Kelas">
                                @error('kelas')
                                <div class="alert alert-danger mt-1 text-center">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Foto</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="file" id="foto" class="form-control @error('foto') is invalid
                                @enderror" name="foto" value="{{ old('foto') ?? $matkul->foto }}" placeholder="Foto">
                                @error('foto')
                                <div class="alert alert-danger mt-1 text-center">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Pengajar</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="pengajar" class="form-control @error('pengajar') is invalid
                                @enderror" name="pengajar" value="{{ old('pengajar') ?? $matkul->pengajar }}" placeholder="Pengajar">
                                @error('pengajar')
                                <div class="alert alert-danger mt-1 text-center">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Jam</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="time" id="jam" class="form-control @error('jam') is invalid
                                @enderror" name="jam" value="{{ old('jam') ?? $matkul->jam }}" placeholder="Jam">
                                @error('jam')
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