
    <div class="col-sm-12">
        <div class="contenedor ">
            <img src="{{ url('img/portada-disenador.png') }}" class="img-responsive img-edit" alt=""/>
            <div class="img__user--container">
                <img src="/img/users/{{$user->imginame}}" alt="" style="border-radius: 50%;width: 80%" class="width_image">
                <div class="img--details">
                    <h1>{{$user->name}}  {{$user->apellido}}</h1>
                    <p style="text-transform: uppercase" class="type_user">{{$user->type}}</p>
                </div>
            </div>
            <div class="img--editar">
                <img src="{{ url('img/editar.svg') }}" alt="">
            </div>
        </div>
    </div>
