@extends('layouts.adminauth')

@section('title')
    <title>Abus | Halaman Login</title>
@endsection

@section('content')
<main class="d-flex w-100 h-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h2">Abus | Login</h1>
                        @if (session('error'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <div class="alert-message">
                                {{ session('error') }}
                            </div>
                        </div>
                        @endif
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <div class="text-center">
                                    <img src="{{ asset('adminkit/img/logo_pkm.png')}}" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Email/Username/No. HP</label>
                                        <input class="form-control form-control-lg @error('username') is-invalid @enderror" type="text" name="username" placeholder="Email/Username/No. HP" value="{{ old('username') }}" required autocomplete="username" autofocus/>

                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" name="password" placeholder="Isi Password anda" required autocomplete="current-password"/>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        @if (Route::has('password.request'))
                                        <small>
                                            <a href="{{ route('password.request') }}">Forgot password?</a>
                                        </small>
                                        @endif
                                    </div>
                                    <div>
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span class="form-check-label">
                                                ingat saya
                                            </span>
                                        </label>
                                    </div>
                                    <div class="text-center mt-3">
                                        {{-- <a href="index-2.html" class="btn btn-lg btn-primary">Sign in</a> --}}
                                        <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                                            <a class="btn btn-link" href="{{ route('register') }}">
                                                {{ __('Daftar') }}
                                            </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection
