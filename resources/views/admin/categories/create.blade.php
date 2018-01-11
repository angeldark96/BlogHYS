@extends('admin.template.main')


@section('title')
    ..::Crear Categorías
@endsection


@section('form-categorias')

    <div class="row">
        <div class="col-sm-12">
            {{--<form ui-jp="parsley">--}}
            <div class="box">
                <div class="box-header">
                    <h2>Registrar Categorías</h2>
                </div>
                <div class="box-divider m-a-0"></div>
                <div class="box-body p-v-md">
                    <div class="row">
                        {!! Form::open(['route' => 'categories.store', 'method' => 'POST',  'files' => true , 'ui-jp' => 'parsley']) !!}
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nombre</label>
                                {!! Form::text('name', null, array( 'class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Avatar</label>
                                {!! Form::file('image', ['class' => 'form-control']) !!}﻿
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