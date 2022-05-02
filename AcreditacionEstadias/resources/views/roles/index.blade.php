
@extends('layouts.main', ['activePage' => 'roles', 'titlePage' => __('Roles')])

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-header card-header-danger">
                              <h4 class="card-tittle">Roles</h4>
                              <p class="card-category">Roles Registrados</p>
                          </div>
                          <div class="card-body">


                              <div class="row">
                                  <div class="col-12 text-right">
                                      <a href="{{ route('roles.create') }}" class="btn btn-facebook btn-round">
                                      <i class="material-icons">person_add</i>  Añadir rol
                                  </a>
                                  </div>


                              </div>
                              <div class="table-responsive">
                                  <table class="table">
                                      <thead class="text-primary">
                                          <th>ID</th>
                                          <th>Nombre</th>
                                          <th>Guard</th>
                                          <th>Crated_at</th>
                                          <th>Permisos</th>
                                          <th class="text-right">Acciones</th>
                                      </thead>
                                      <tbody>
                                          @forelse($roles as $role)
                                          <tr>
                                              <td>{{  $role->id           }}</td>
                                              <td>{{  $role->name         }}</td>
                                              <td>{{  $role->guard_name   }}</td>
                                               <td>{{  $role->created_at   }}</td>
                                              <td>
                                                  @forelse ($role->permissions as $permission)
                                                <span class="badge badge-info">{{ $permission->name }}</span>
                                                  @empty
                                                  <span class="badge badge-danger">No permissions</span>
                                                  @endforelse
                                              </td>
                                           <td class="td-actions text-right">
                                                  <a href="{{ route('roles.show',$role->id) }} "class="btn btn-info"> <i class="material-icons">person</i></a>
                                                  <a href=" {{ route('roles.edit',$role->id) }}"class="btn btn-warning"><i class="material-icons">edit</i></a>

                                               <form action="{{ route('roles.destroy',$role->id) }}  " method="POST" style="display:inline-block;" onsubmit="return confirm('¿Segro que deseas eliminar al?')">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button class="btn btn-danger" type="submit">
                                                      <i class="material-icons">close</i>
                                                  </button>
                                              </form>



                                              </td>
                                          </tr>
                                          @empty
                                        No permission registered
                                          @endforelse
                                      </tbody>
                                  </table>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
