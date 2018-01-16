<header class="cd-main-header">
    <a class="cd-logo" href="http://blog.hogaryspacios.com">
        <img src="{{ asset('img/logo.svg') }}" alt="Logo" class="img___tamamo">
    </a>
    <ul class="cd-header-buttons">
        <li><a class="cd-nav-trigger" href="#cd-primary-nav">
			 <span>
			 </span>
            </a></li>
    </ul> <!-- cd-header-buttons -->
    <nav class="cd-nav">
        <ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
            <li>
                <a href="/">Inicio</a>
            </li>

            <li class="has-children">
                <a href="">Decoración</a>

                <ul class="cd-secondary-nav is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li class="see-all"></li>
                    @foreach($categories as $category)
                        <li class="has-children">
                            <a href="{{route('frontcontihogar.front_blog.search.category', $category->name)}}">{{ $category->name }}</a>
                        </li>
                     @endforeach

                </ul>
            </li>

            <li class="has-children">
                <a href="http://codyhouse.co/?p=409">Novedades</a>

                <ul class="cd-nav-gallery is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li class="see-all"></li>
                    {{--@foreach($posts as $post)--}}
                    {{--<li>--}}
                        {{--<a class="cd-nav-item" href="">--}}
                              {{--<img src="/img/posts/{{ $post->images()->first()->name }}" alt="">--}}
                            {{--<h3><a href="{{route('frontcontihogar.front_blog.view.post', $post->slug) }}">{{ $post->title }}</a></h3>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--@endforeach--}}


                </ul>
            </li>
            <li>
                <a class="page-scroll" href="#catalogo">Catálogo</a>
            </li>
            <li>
                <a class="page-scroll" href="#disenador">Diseñadores</a>
            </li>
            <li>
                <a class="page-scroll" href="#decoracion">Decoraciones </a>
            </li>
            <li>
                <a class="page-scroll" href="#contact">Contacto</a>
            </li>
            <li>
                <a href="https://www.hogaryspacios.com" target="_blank">
                    <img src="{{url('img/bolsa.svg')}}" alt="" style="height: 35px">
                </a>
            </li>
            <li>
                <a href="{{ route('admin.auth.login') }}">
                    <img src="{{url('img/usuario.svg')}}" alt="" style="width: 35px">
                </a>
            </li>
        </ul> <!-- primary-nav -->
    </nav> <!-- cd-nav -->
</header>
