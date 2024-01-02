<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @include('include.style')
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <h1 class="auth-title">Login</h1>

                    <form method="post" action="{{ route('login.store')}}">
                        @csrf
                        @if (session()->has('loginError'))
                        <div class="alert alert-danger text-center" role="alert">
                            {{ session('loginError')}}
                        </div>
                        @endif
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" id="email" name="email" class="form-control @error('email') is invalid
                                
                            @enderror form-control-xl" placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('email')
                            <small class="btn btn-danger mt-2">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" id="password" name="password" class="form-control @error('password') is invalid    
                            @enderror form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('password')
                            <small class="btn btn-danger mt-2">{{ $message }}</small>
                            @enderror
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Belum punya akun ? <a href="{{ route('register') }}" class="font-bold">Sign
                                up</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right" class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('svglogin.svg') }}" alt="" width="92%">
                </div>
            </div>
        </div>

    </div>
</body>

</html>