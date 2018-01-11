@extends('admin.template.main')


@section('title')
    ..::Editar Posts
@endsection


@section('form-posts')

    <div class="row">
        <div class="col-sm-12">
            {{--<form ui-jp="parsley">--}}
            <div class="box">
                <div class="box-header">
                    <h2>Editar Posts</h2>
                </div>
                <div class="box-divider m-a-0"></div>
                <div class="box-body p-v-md">
                    <div class="row">
                        {!! Form::open(['route' => ['posts.update',$post->id], 'method' => 'PUT', 'files' => true , 'ui-jp' => 'parsley']) !!}
                        <div class="col-sm-6">

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                {!! Form::label('title', 'Title:') !!}

                                {!! Form::text('title',
                                    $post->title,
                                    [
                                        'class' => 'form-control'
                                    ]
                                ) !!}

                                @if($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                {!! Form::label('category_id', 'Categoría') !!}

                                {!! Form::select('category_id',
                                   // $categories,
                                    $categories,$post->category_id,
                                    [
                                        'class' => 'selected_category form-control'
                                    ]
                                ) !!}

                                @if($errors->has('category_id'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-12">

                            <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                                {!! Form::label('content', 'Contenido:') !!}

                                {!! Form::textarea('content',
                                    $post->content,
                                    [

                                        'class' => 'form-control'
                                    ]
                                ) !!}

                                @if($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Imagen</label>
                                {!! Form::file('image', array('class' => 'form-control')) !!}﻿
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            {!! Form::submit('Guardar',['class'=>'btn col-sm-12 col-xs-12 md-btn md-raised m-b-sm  orange']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script>

        $('.textarea-content').trumbowyg({
        });
    </script>
@endsection
