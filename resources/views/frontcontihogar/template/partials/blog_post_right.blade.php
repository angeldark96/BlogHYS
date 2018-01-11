<div class="col-lg-4 col-md-4 col-sm-4">
    <div class="sidebar">
        <div class="widget">
            <h2>Buscar por Categoría</h2>
            <div class="title_br"></div>
            @foreach($categories as $category)
            <ul>
                <li><a href="{{route('frontcontihogar.front_blog.search.category', $category->name)}}">{{ $category->name }}</a></li>
            </ul>
            @endforeach
        </div>
        {{--<div class="widget">--}}
            {{--<h2>Post Destacado</h2>--}}
            {{--<div class="title_br"></div>--}}
            {{--@foreach($posts as $poste)--}}
            {{--<ul>--}}
                {{--<li class="flex--img">--}}
                    {{--@foreach($poste->images as $image)--}}
                        {{--<img src="/img/posts/{{ $image->name }}" alt="" style="width: 74px"/>--}}
                    {{--@endforeach--}}
                    {{--<a href="" class="detalle--buscar"><p class="quitar-espacio">{{ $poste->title }}</p><p>{{ $poste->created_at->toDateString() }}</p></a>--}}
                {{--</li>--}}
            {{--</ul>--}}
            {{--@endforeach--}}
        {{--</div>--}}
        <div class="widget">
            <h2>Galeria de Imágenes</h2>
            <!--<div class="title_br"></div>-->
            <!--<ul class="flickr">-->
            <!--<li><img src="img/flckr.jpg" alt=""/></li>-->
            <!--<li><img src="img/categories1.png" alt=""/></li>-->
            <!--<li><img src="img/categories2.png" alt=""/></li>-->
            <!--<li><img src="img/flckr.jpg" alt=""/></li>-->
            <!--<li><img src="img/flckr.jpg" alt=""/></li>-->
            <!--<li><img src="img/flckr.jpg" alt=""/></li>-->
            <!--<li><img src="img/flckr.jpg" alt=""/></li>-->
            <!--<li><img src="img/flckr.jpg" alt=""/></li>-->
            <!--</ul>-->
            <div class="slider">
                <div class="slider__content">
                    <div class="slider__item">
                        <img src="{{ asset('img/blog1.jpg') }}" alt="" class="slider__img">
                        <p class="slider__caption">Sala</p>
                    </div>
                    <div class="slider__item">
                        <img src="{{ asset('img/blog2.jpg') }}" alt="" class="slider__img">
                        <p class="slider__caption">Muebles</p>
                    </div>
                    <div class="slider__item">
                        <img src="{{ asset('img/blog3.jpg') }}" alt="" class="slider__img">
                        <p class="slider__caption">Muebles</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>