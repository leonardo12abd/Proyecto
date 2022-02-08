@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('Calidad Edomex')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-info text-center">
            <h4 class="card-title"><strong>{{ __('Registro') }}</strong></h4>
            <div class="social-line">
            <i class="fas fa-laptop-medical"></i>
            </div>
          </div>
          <div class="card-body ">
          <p class="card-description text-center">{{ __('Acreditación ') }} <strong>de unidades hospitalarias</strong> {{ __(' del Estado de México.') }} </p>
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="{{ __('Nombre...') }}" value="{{ old('name') }}" required>
              </div>
              @if ($errors->has('name'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>

            <!-- Add Username -->

            <div class="bmd-form-group{{ $errors->has('username') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                  <i class="fas fa-user-check"></i>
                  </span>
                </div>
                <input type="text" name="username" class="form-control" placeholder="{{ __('Usuario...') }}" value="{{ old('username') }}" required>
              </div>
              @if ($errors->has('username'))
                <div id="username-error" class="error text-danger pl-3" for="username" style="display: block;">
                  <strong>{{ $errors->first('username') }}</strong>
                </div>
              @endif
            </div>




            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Correeo electronico...') }}" value="{{ old('email') }}" required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>




          {{--   <div class="bmd-form-group mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-camera-retro"></i>
                    </span>
                  </div>
                  <input type="file" name="photo" id="photo" class="form-control" placeholder="{{ __('photo') }}"  required>
                </div>
                @if ($errors->has('photo'))
                <div id="photo" class="error text-danger pl-3" for="photo" style="display: block;">
                  <strong>{{ $errors->first('photo') }}</strong>
                </div>
              @endif
              </div> --}}




            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Contraseña...') }}" required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirma la contraseña...') }}" required>
              </div>
              @if ($errors->has('password_confirmation'))
                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
              @endif
            </div>

          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-success btn-link btn-lg">{{ __('Crear Cuenta') }}</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
