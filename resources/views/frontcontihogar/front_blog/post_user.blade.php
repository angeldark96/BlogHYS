@extends('frontcontihogar.template.mainblog')


@section('title')
    ..::Blog
@endsection

@section('blog_principal_index')
    <main class="cd-main-content">

        <section id="blg_sec" style="padding: 0 !important;">
            <div class="l-container">
                <div class="">
                    @include('frontcontihogar.template.partials.banner__user')
                    @include('frontcontihogar.template.partials.blog_post_left_user')
                    @include('frontcontihogar.template.partials.blog_post_right')
                </div>
            </div>
        </section>
        @include('frontcontihogar.template.partials.footer')
    </main>

@endsection