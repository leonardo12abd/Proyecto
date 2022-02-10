<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Calidad Acreditación') }}

    </a>
    <center><i class="fas fa-user-md"></i></center>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Panel de control') }}</p>
        </a>
      </li>
      {{-- Select --}}
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
            <i class="fas fa-book-medical"></i>
          <p>{{ __('Contenido') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'acreditaprimer' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('altaprimernivel') }}">
                <i class="fas fa-medkit"></i>
                <span class="sidebar-normal">{{ __('Primer Nivel(Seccion 1)') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'acreditaprimer2' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('altaprimernivelsec2') }} ">
                    <i class="fas fa-file-medical"></i>
                  <span class="sidebar-normal">{{ __('Primer Nivel (Seccion 2)') }} </span>
                </a>
              </li>

              <li class="nav-item{{ $activePage == 'acreditaprimer3' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('altaprimernivelsec3') }} ">
                    <i class="fas fa-heartbeat"></i>
                  <span class="sidebar-normal">{{ __('Primer Nivel (Seccion 3)') }} </span>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'acreditaprimer4' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('altaprimernivelsec4') }} ">
                    <i class="fas fa-procedures"></i>
                  <span class="sidebar-normal">{{ __('Primer Nivel (Seccion 4)') }} </span>
                </a>
              </li>
              <li class="nav-item{{ $activePage == 'acreditaprimer5' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('altaprimernivelsec5') }} ">
                    <i class="fas fa-procedures"></i>
                  <span class="sidebar-normal">{{ __('Primer Nivel (Seccion 5)') }} </span>
                </a>
              </li>

              

          </ul>
        </div>


      </li>

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
