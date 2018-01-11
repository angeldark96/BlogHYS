@extends('admin.template.main')


@section('title')
    ..::List Usuarios
@endsection


@section('list-user')
    <div class="box">
        <div class="box-header">
            <h2>Lista de Usuarios Registrados</h2>
        </div>
        <div class="box-body">
            <div class="row">
            <div class=" col-md-6">
            Buscar :  <input id="filter" type="text" class="form-control input-sm w-auto inline m-r"/>
            </div>
            <div class="col-md-6">
            <a class="btn btn-primary btn-round"  href="{{ route('users.create') }}">
                <i class="material-icons">person_add</i>
            </a>
            </div>
            </div>
        </div>
    <div class="table-responsive">
        <table class="table table m-b-none footable-loaded footable tablet breakpoint">
            <thead>
            <tr>

                <th class="text-center">#</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Dni</th>
                <th>Edad</th>
                <th>Tipo</th>
                <th class="text-center" colspan="2">Actions</th>

            </tr>
            </thead>
            <tbody>

            @foreach($users as $user)
                <tr>
                    <td class="text-center">{{ $user->id}}</td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->apellido}}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->dni}}</td>
                    <td>{{ $user->edad}}</td>
                    <td>
                        @if($user->type == "admin")
                            <span class="label danger">{{ $user->type}}</span>
                        @else
                            <span class="label success">{{ $user->type}}</span>
                        @endif

                    </td>

                    <td><a href="{{route('users.edit', $user -> id)}}" class="btn btn-warning  btn-xs"><i class="material-icons">edit</i></a></td>
                    <td><a href="{{route('users.destroy', $user -> id)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger btn-xs"><i class="material-icons">remove_circle</i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div style="text-align: center">
            {!! $users->render() !!}
        </div>
    </div>
    </div>

@endsection