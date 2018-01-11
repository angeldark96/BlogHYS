@extends('admin.template.mainlogin')

@section('title')
    ..::Login | HogarySpacios
@endsection

@section('form-user-login')


    <div class="container fondo_vision">
        {!! Form::open(['route' => 'admin.auth.login', 'method' => 'POST','class' => 'fondo_negro col-md-8 col-md-offset-2']) !!}

        {{--<form role="form" class="fondo_negro col-md-8 col-md-offset-2">--}}
            <div style="width: 100%" >
                <h1 class="title_disenadores">Cuenta de diseñadores</h1>
            </div>
            <div class="form-group col-sm-6 col-xs-12">
                <label for=""  class="color_letra">Email</label>
                {!! Form::email('email', null, array( 'class' => 'form-control','placeholder'=>'example@hogaryspacios.com','autocomplete' => 'off')) !!}
            </div>
            <div class="form-group col-sm-6 col-xs-12">
                <label for="" class="color_letra">Contraseña</label>
                {!! Form::password('password', array( 'class' => 'form-control','placeholder'=>'********')) !!}
            </div>

            <div class="col-sm-12 col-xs-12">
                {!! Form::submit('Entrar',['class'=>'btn btn-default col-sm-12 col-xs-12 relleno_boton']) !!}
                {{--<button type="submit" class="btn btn-default col-sm-12 col-xs-12 relleno_boton">Iniciar Sesión</button>--}}
            </div>
        {!! Form::close() !!}
    </div>

@endsection