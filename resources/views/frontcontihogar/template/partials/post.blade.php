<!-- post Section -->
<section id="post">
<section id="lts_sec">
    <div class="l-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>Tips Decoracion</h1>
                    <h2>WE’RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
                </div>
            </div>
            @foreach($categories as $category)
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="lts_pst edit_foto" style="position: relative;">
                    <div class="capa_categoria">
                        <img src="/img/categories/{{ $category->image }}" class="imag_zoom" alt=""/>
                    </div>
                    <a href="{{route('frontcontihogar.front_blog.search.category', $category->name)}}" class=" category__tag">{{ $category->name }}</a>
                    {{--<p>Nullam metus arcu, pharetra eu tempor vel, consectetur nec metus. Praesent malesuada, purus et euismod rutrum, augue nisi facilisis diam, vitae auctor nisl libero nec eros. Vivamus vitae pulvinar augue. Nulla facilisi. Quisque rutrum ante interdum</p>--}}
                    {{--<a href="blog.html" class="alinear-vertical--leer-mas">Leer más <i class="fa fa-long-arrow-right"></i></a>--}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
</section>