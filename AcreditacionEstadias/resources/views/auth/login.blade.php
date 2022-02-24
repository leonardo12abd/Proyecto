@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('ÁREA ESTATAL DE CALIDAD')])

@section('content')

<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
      <h3></h3>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-warning text-center">
            <h4 class="card-title"><strong>{{ __('INSTITUTO DE SALUD DEL ESTADO DE MÉXICO
                ÁREA ESTATAL DE CALIDAD') }}</strong></h4>
            <div class="social-line">
            </div>
          </div>
          <div class="card-body">
            <p class="card-description text-center">{{ __('Acreditación ') }} <strong>de unidades hospitalarias</strong> {{ __(' del Estado de México.') }} </p>
            <!-- <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Correo Electronico...') }}" value="{{ old('email', 'admin@material.com') }}" required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div> -->

            <!-- User Name -->

            <div class="bmd-form-group{{ $errors->has('username') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="username" class="form-control" placeholder="{{ __('Usuario/Email...') }}" value="{{ old('username', null) }}" required>
              </div>
              @if ($errors->has('username'))
                <div id="username-error" class="error text-danger pl-3" for="username" style="display: block;">
                  <strong>{{ $errors->first('username') }}</strong>
                </div>
              @endif
            </div>


            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Contraseña...') }}" value="{{ !$errors->has('password') ? "secret" : "" }}" required>
                <button class="btn btn-secondary" type="button" onclick="mostrarContrasena()"><i class="far fa-eye-slash"></i></button>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>

          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-success btn-link btn-lg">{{ __('Iniciar sesión') }}</button>
          </div>
        </div>
      </form>
      <div class="row">
        <div class="col-12">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-light">
                    <center><small>{{ __('¿Has olvidado la contraseña?') }}</small></center>
                </a>
            @endif
        </div>

      </div>
    </div>
  </div>

</div>


@endsection
