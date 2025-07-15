@extends('layouts.app')

@section('content')
<div class="container login-bg pt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-7 col-lg-6 mx-auto">
            <div class="card shadow-lg rounded-4 border-0">
                <div class="card-header bg-white border-0 text-center py-4 rounded-top-4">
                    <span class="d-flex justify-content-center align-items-center gap-2">
                        <i class="bi bi-person-circle text-primary" style="font-size:2.2rem;"></i>
                        <span class="fw-bold text-primary" style="font-size:1.3rem;">Iniciar sesión</span>
                    </span>
                </div>
                <div class="card-body px-4 py-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold text-primary">Correo electrónico</label>
                            <input id="email" type="email" class="form-control rounded-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold text-primary">Contraseña</label>
                            <input id="password" type="password" class="form-control rounded-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    Recuérdame
                                </label>
                            </div>
                        </div>

                        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between mt-4 gap-2">
                            <button type="submit" class="btn btn-primary px-4 py-2 rounded-3 shadow-sm fw-bold">
                                <i class="bi bi-box-arrow-in-right me-1"></i>Iniciar sesión
                            </button>
                            @if (Route::has('password.request'))

                                <div class="mt-1 small text-muted text-center">
                                    <i class="bi bi-info-circle me-1"></i>Contacte al administrador para recuperar su contraseña.
                                </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
