<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
   <center> <a class="logo-normal" style="color: black">
      {{ __('INSTITUTO DE SALUD DEL ESTADO DE MÉXICO
            ÁREA ESTATAL DE CALIDAD') }}


    </a>
</center>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">masks</i>
            <p>{{ __('INICIO') }}</p>
        </a>
      </li>
      {{-- Select --}}
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
            <i class="material-icons">
                emergency
            </i>
          <p>{{ __('Contenido') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'acreditaprimer' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('altaprimernivel') }}">
                <i class="material-icons">
                    task
                </i>                <span class="sidebar-normal">{{ __('ACREDITACIÓN') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'acreditaprimer2' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('altaprimernivelsec2') }} ">
                    <i class="material-icons">
                        pending_actions
                    </i>
                  <span class="sidebar-normal">{{ __('CALIDAD PERCIBIDA') }} </span>
                </a>
              </li>

              <li class="nav-item{{ $activePage == 'acreditaprimer3' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('altaprimernivelsec3') }} ">

                    <span class="sidebar-auto">   <i class="material-icons">
                        healing
                    </i>{{ __('CALIDAD TÉCNICA Y SEGURIDAD AL PACIENTE') }}  </span>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'acreditaprimer4' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('altaprimernivelsec4') }} ">
                    <i class="material-icons">
                        leaderboard
                    </i>
                  <span class="sidebar-normal">{{ __('COCASEP') }} </span>
                </a>
              </li>
              <li class="nav-item{{ $activePage == 'acreditaprimer5' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('altaprimernivelsec5') }} ">
                    <i class="material-icons">
                        emergency_recording
                    </i>
                  <span class="sidebar-normal">{{ __('INDICAS') }} </span>
                </a>
              </li>

              <li class="nav-item{{ $activePage == 'acreditaprimer6' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('altaprimernivelsec6') }} ">
                    <i class="material-icons">
                        attach_money
                    </i>
                    <span class="sidebar-normal">{{ __('APOYOS E INCENTIVOS') }} </span>
                </a>
              </li>


          </ul>




        </div>


      </li>


      {{-- Calidad Percibida --}}




       {{-- Select Fin --}}
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fas fa-user-friends"></i>
            <p>Usuarios</p>
        </a>

      </li>




    </ul>
  </div>
</div>
