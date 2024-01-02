<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    @include('include.style')

</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <h1 class="auth-title">Daftar</h1>

                    <form method="post" action="{{route('register.store')}}">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" id="name" name="name" class="form-control @error('name') is invalid
                            @enderror form-control-xl" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('name')
                            <small class="btn btn-danger mt-1">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" id="email" name="email" class="form-control @error('email') is invalid
                                
                            @enderror form-control-xl" placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            @error('email')
                            <small class="btn btn-danger mt-1">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" id="password" name="password" class="form-control @error('password') is invalid
                                
                            @enderror form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('password')
                            <small class="btn btn-danger mt-1">{{ $message }}</small>
                            @enderror
                        </div>

                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>Sudah punya akun? <a href="{{ route('login') }}" class="font-bold">Log
                                in</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right" class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('svgregister.svg') }}" alt="" >
                </div>
            </div>
        </div>

    </div>
</body>

</html>