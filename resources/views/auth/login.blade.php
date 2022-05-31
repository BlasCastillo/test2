@extends('layouts.plantillapadre')

@section('plantillapadre')



  <div class="limiter">
      <div class="container-login100" style="background-image: url('img/bg-01.jpg');">
        <div class="wrap-login100">
    <div id="dropDownSelect1"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
            <span class="login100-form-logo">
             <img src="img/LOGO-JUAN.JPG" height="80px" width="80px" >
            </span>
            <span class="login100-form-title p-b-34 p-t-27">
              Iniciar
            </span>

                <div class="wrap-input100 validate-input">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            

                            <div class="col-md-15">
                            <div class="wrap-input100 validate-input" data-validate = "Enter username"> 
                                <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-6">
                            

                            <div class="col-md-15">
                            <div class="wrap-input100 validate-input" data-validate="Enter password"> 
                                <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="contact100-form-checkbox">
                                    <input class="input-checkbox100" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="label-checkbox100" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="text-center p-t-90" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
</div>
@endsection
