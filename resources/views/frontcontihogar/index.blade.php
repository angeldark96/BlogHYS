@extends('frontcontihogar.template.mainblog')


@section('title')
    ..::Blog
@endsection


@section('blog_principal')

    <main class="cd-main-content">

        @include('frontcontihogar.template.partials.slider')
        @include('frontcontihogar.template.partials.acerca')
        @include('frontcontihogar.template.partials.post')
        {{--@include('frontcontihogar.template.partials.portafolio')--}}
        @include('frontcontihogar.template.partials.testimonios')
        @include('frontcontihogar.template.partials.team')
        @include('frontcontihogar.template.partials.marcas')
        @include('frontcontihogar.template.partials.servicios')
        @include('frontcontihogar.template.partials.contact')
        @include('frontcontihogar.template.partials.map')
        @include('frontcontihogar.template.partials.footer')

    </main>


@endsection