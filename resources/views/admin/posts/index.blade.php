@extends('admin.template.main')

@section('title')
    ..::List Post
@endsection

@section('list-post')
    <div class="box">
        <div class="box-header">
            <h2>Lista de Post</h2>
        </div>
        <div class="box-body">
            <div class="row">
                {!! Form::open(['route' => 'posts.index', 'method' => 'GET']) !!}
                <div class=" col-md-6">
                    {!! Form::text('title', null, array( 'class' => 'form-control input-sm w-auto inline m-r','placeholder'=>'Buscar Post por título....')) !!}
                </div>
                <div class="col-md-6">
                    <a class="btn btn-primary btn-round"  href="{{ route('posts.create') }}">
                        <i class="material-icons">add</i>
                    </a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table m-b-none footable-loaded footable tablet breakpoint">
                <thead>
                <tr>
                    {{--<th class="text-center">#</th>--}}
                    <th>Titulo</th>
                    <th>Categoria</th>
                    <th>Usuario</th>
                    <th class="text-center" colspan="3">Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($posts as $post)
                    <tr>
                        {{--<td class="text-center">{{ $post->id}}</td>--}}
                        <td>{{ $post->title}}</td>
                        <td>{{ $post->category->name}}</td>
                        <td>{{ $post->user->name}}</td>
                        <td><a href="{{ route('images.index',$post -> id) }}" class="btn btn-warning  btn-xs"><i class="material-icons">camera enhance</i></a></td>
                        <td><a href="{{route('posts.edit', $post -> id)}}" class="btn btn-success  btn-xs"><i class="material-icons">edit</i></a></td>
                        <td><a href="{{route('posts.destroy', $post -> id)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger btn-xs"><i class="material-icons">remove_circle</i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div style="text-align: center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@endsection