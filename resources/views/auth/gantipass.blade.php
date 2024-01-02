<!-- @extends('kerangka.master') -->
@section('content')

<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-center">Ubah Password User</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="resetpassword" class="form form-horizontal" method="POST">
                    @csrf
                    @if (session()->has('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @elseif (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <!-- @if ('status')
                        <div class="alert alert-success">{{ session('status')}}</div>

                    @elseif (session('error'))
                        <div class="alert alert-danger">{{ session('error')}}</div>
                    @endif -->
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Password Lama</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="password" id="oldpassword" class="form-control" name="old_password" placeholder="Password lama">
                            </div>
                            <div class="col-md-4">
                                <label>Password Baru</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="password" id="newpassword" class="form-control" name="new_password" placeholder="Masukan Password baru">
                            </div>
                            <div class="col-md-4">
                                <label>Ulangi Password Baru</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="password" id="repeatpassword" class="form-control" name="repeat_password" placeholder="Masukan ulang Password Baru">
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