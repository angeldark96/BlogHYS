@extends('admin.template.main')


@section('title')
    ..::Crear Usuarios
@endsection


@section('form-user')

    <div class="row">
        <div class="col-sm-12">
            {{--<form ui-jp="parsley">--}}
            <div class="box">
                <div class="box-header">
                    <h2>Editar Usuarios</h2>
                </div>
                <div class="box-divider m-a-0"></div>
                <div class="box-body p-v-md">
                        <div class="row">
                        {!! Form::open(['route' => ['users.update', $user->id],  'method' => 'PUT', 'files' => true , 'ui-jp' => 'parsley']) !!}

                        <div class="col-sm-6">

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                {!! Form::label('name', 'Nombre:') !!}

                                {!! Form::text('name',
                                    $user->name,
                                    [
                                        'class' => 'form-control'
                                    ]
                                ) !!}

                                @if($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">

                            <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                                {!! Form::label('apellido', 'Apellido:') !!}

                                {!! Form::text('apellido',
                                    $user->apellido,
                                    [
                                        'class' => 'form-control'
                                    ]
                                ) !!}

                                @if($errors->has('apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                {!! Form::label('email', 'Email:') !!}

                                {!! Form::text('email',
                                    $user->email,
                                    [
                                        'class' => 'form-control'
                                    ]
                                ) !!}

                                @if($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">

                            <div class="form-group{{ $errors->has('dni') ? ' has-error' : '' }}">
                                {!! Form::label('dni', 'DNI:') !!}

                                {!! Form::text('dni',
                                    $user->dni,
                                    [
                                        'class' => 'form-control'
                                    ]
                                ) !!}

                                @if($errors->has('dni'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dni') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">

                            <div class="form-group{{ $errors->has('edad') ? ' has-error' : '' }}">
                                {!! Form::label('edad', 'Edad:') !!}

                                {!! Form::text('edad',
                                    $user->edad,
                                    [
                                        'class' => 'form-control'
                                    ]
                                ) !!}

                                @if($errors->has('edad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('edad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                {!! Form::label('type', 'Tipo') !!}

                                {!! Form::select('type',
                                    ['diseñador' => 'Diseñador', 'admin' => 'Administrador'],
                                    null,
                                    [
                                        'class' => 'form-control'
                                    ]
                                ) !!}

                                @if($errors->has('type'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('type') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Avatar</label>
                                {!! Form::file('imginame', null ,['class' => 'form-control']) !!}﻿
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