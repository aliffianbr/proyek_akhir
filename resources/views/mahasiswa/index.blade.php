@extends('kerangka.master')
@section('content')

<section class="section">
    <div class="row" id="table-striped">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Data Mahasiswa</h4>
                    <a class="btn btn-primary" href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>
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
                                <th>NIM</th>
                                <th>FOTO</th>
                                <th>NAMA MAHASISWA</th>
                                <th>GENDER</th>
                                <th>FAKULTAS</th>
                                <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswas as $mahasiswa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $mahasiswa->nim }}</td>
                                    <td><img src="{{ asset('storage/' . $mahasiswa->foto) }}" alt="Foto Mahasiswa" style="width: 40px;"></td>
                                    <td>{{ $mahasiswa->nama }}</td>
                                    <td>{{ $mahasiswa->gender }}</td>
                                    <td>{{ $mahasiswa->fakultas }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a class="btn btn-warning mx-1" href="{{ route('mahasiswa.edit', $mahasiswa->id)}}">Edit</a>
                                            <form action="{{ route('mahasiswa.destroy', $mahasiswa->id)}}" method="post">
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