@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header text-light bg-primary">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-2">
                            <label for="name" class="col col-md-4 col-form-label text-md-right">Nombre Completo</label>

                            <div class="col col-md-6">
                                <input id="name" type="text" class="form-control @error('nombre_completo') is-invalid @enderror" name="name" value="{{ old('nombre_completo') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="name_us" class="col col-md-4 col-form-label text-md-right">Nombre Usuario</label>

                            <div class="col col-md-6">
                                <input id="name_us" type="text" class="form-control @error('nombre_usuario') is-invalid @enderror" name="name_us" value="{{ old('nombre_usuario') }}" required autocomplete="name_us" >

                                @error('name_us')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="email" class="col col-md-4 col-form-label text-md-right">Correo Electrónico</label>

                            <div class="col col-md-6">
                                <input id="email" type="email" class="form-control @error('correo') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="password" class="col col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="password-confirm" class="col col-md-4 col-form-label text-md-right">Confirmar Password</label>

                            <div class="col col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary ">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
