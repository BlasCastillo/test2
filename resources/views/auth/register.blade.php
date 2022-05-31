@extends('layouts.plantillapadre')

@section('plantillapadre')
<div class="container-login100" style="background-image: url('img/bg-01.jpg');">
        <div class="wrap-login100">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
        <span class="login100-form-logo">
             <img src="img/LOGO-JUAN.JPG" height="80px" width="80px" >
            </span>
            <span class="login100-form-title p-b-34 p-t-27">
              Registrar
            </span>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="wrap-input100 validate-input">
                            

                            <div class="col-md-10">
                                <input id="name" type="text" placeholder="Nombre" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="wrap-input100 validate-input">
                            

                            <div class="col-md-10">
                                <input id="email" type="email" placeholder="Correo" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <span class="focus-input100" data-placeholder="&#xf159;"></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="wrap-input100 validate-input">
                            

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Clave" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="wrap-input100 validate-input">
                            

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Confirmar clave" class="input100" name="password_confirmation" required autocomplete="new-password">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn">
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
</div>
</div>
@endsection
