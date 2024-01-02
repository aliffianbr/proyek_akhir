@extends('kerangka.master')
@section('content')

<section class="section">
    <div class="row" id="table-striped">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Daftar Mata Kuliah</h4>
                    <a class="btn btn-primary" href="{{ route('matkul.create') }}">Tambah Mata Kuliah</a>
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
                                <th>NO</th>
                                <th>KODE</th>
                                <th>MATA KULIAH</th>
                                <th>KELAS</th>
                                <th>FOTO</th>
                                <th>PENGAJAR</th>
                                <th>JAM</th>
                                <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($matkul as $matkul)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $matkul->kode }}</td>
                                    <td>{{ $matkul->matkul }}</td>
                                    <td>{{ $matkul->kelas }}</td>
                                    <td><img src="{{ asset('storage/' . $matkul->foto) }}" alt="Foto matkul" style="width: 35px;"></td>
                                    <td>{{ $matkul->pengajar }}</td>
                                    <td>{{ $matkul->jam }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a class="btn btn-warning mx-1" href="{{ route('matkul.edit', $matkul->id)}}">Edit</a>
                                            <form action="{{ route('matkul.destroy', $matkul->id)}}" method="post">
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