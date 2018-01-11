
@extends('admin.template.main')


@section('title')
    ..::Lista de Categorías
@endsection


@section('list-category')
    <div class="box">
        <div class="box-header">
            <h2>Lista de Categorías </h2>
        </div>
        <div class="box-body">
            <div class="row">
                <div class=" col-md-6">
                    Buscar :  <input id="filter" type="text" class="form-control input-sm w-auto inline m-r"/>
                </div>
                <div class="col-md-6">
                    <a class="btn btn-primary btn-round"  href="{{ route('categories.create') }}">
                        <i class="material-icons">settings</i>
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
                    <th class="text-center" colspan="2">Acciones</th>

                </tr>
                </thead>
                <tbody>

                @foreach($categories as $category)
                    <tr>
                        <td class="text-center">{{ $category->id}}</td>
                        <td>{{ $category->name}}</td>
                        <td><a href="{{route('categories.edit', $category -> id)}}" class="btn btn-warning  btn-xs"><i class="material-icons">edit</i></a></td>
                        <td><a href="{{route('categories.destroy', $category -> id)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger btn-xs"><i class="material-icons">remove_circle</i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div style="text-align: center">
                {!! $categories->render() !!}
            </div>
        </div>
    </div>

@endsection

