@extends('admin.template.main')


@section('title')
    ..::Crear Posts
@endsection


@section('form-posts')


    <div class="col-sm-12">
        {{--<form ui-jp="parsley">--}}
        <div class="box">
            <div class="box-header">
                <h2>Galeria de  Imagenes del post {{  $post->title }}</h2>
            </div>

            <div class="box-divider m-a-0"></div>
            <br>
            {!! Form::open(['method' => 'POST', 'files' => true]) !!}
            <div class="container">
                <div class=" col-sm-5 ">
                    <input type="file" name="name">
                </div>
                <div class=" col-sm-offset-6 col-sm-3 ">
                    <button type="submit" class="btn btn-primary btn-round"  href="">
                        Subir Nueva Imagen
                    </button>
                </div>
                <div class="col-sm-3">
                    <a class="btn btn-info btn-round"  href="{{ route('posts.index') }}">
                        Volver al listado de Post
                    </a>
                </div>
            </div>
            {!! Form::close() !!}
            <br><br>
            <div class="box-body p-v-md">
                <div class="row">
                    @foreach($images as $image)
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-body">

                                    <div class="box p-a-xs">
                                        <a href="#"><img src="/img/posts/{{ $image->name }}" alt="" class="img-responsive"></a>
                                        <div class="p-a-sm">
                                            <div class="text-ellipsis" style="text-align: center">
                                                <a class="btn btn-danger btn-round"  href="">
                                                    Eliminar Imagen
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer"></div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection