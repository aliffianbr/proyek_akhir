@extends('kerangka.master')
@section('content')

<section class="section">
    <div class="row" id="table-striped">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Data Dosen</h4>
                    <a class="btn btn-primary" href="{{ route('dosen.create') }}">Tambah Dosen</a>
                </div>
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @elseif (session()->has('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('failed')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card-content">
                    <!-- table striped -->
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <th>No</th>
                                <th>NIDN</th>
                                <th>FOTO</th>
                                <th>NAMA DOSEN</th>
                                <th>JABATAN</th>
                                <th>ALAMAT</th>
                                <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dosen as $dosen)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $dosen->nidn }}</td>
                                    <td><img src="{{ asset('storage/' . $dosen->foto) }}" alt="Foto Dosen" style="width: 35px;"></td>
                                    <td>{{ $dosen->nama }}</td>
                                    <td>{{ $dosen->gender }}</td>
                                    <td>{{ $dosen->alamat }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a class="btn btn-warning mx-1" href="{{ route('dosen.edit', $dosen->id)}}">Edit</a>
                                            <form action="{{ route('dosen.destroy', $dosen->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
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
</section>

@endsection