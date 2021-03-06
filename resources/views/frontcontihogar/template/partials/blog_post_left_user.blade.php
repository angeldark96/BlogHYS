<div class="col-lg-8 col-md-8 col-sm-8">

    @if($posts->isEmpty())
        <p>No hay post por el momento ... </p>
    @else

        @foreach($posts as $post)
            <div class="sngl_blg">

                <div class="post_info" style="padding-top: 1em;">
                    <div class="post_intro">
                        <h2><a href="{{route('frontcontihogar.front_blog.search.user', $post->user->name) }}" style="color: #333"></a> <a href="{{route('frontcontihogar.front_blog.view.post', $post->slug) }}">{{ $post->title }}</a></h2>
                    </div>
                    <ul>
                        <li>{{ $post->created_at->diffForHumans() }}</li>
                    </ul>
                </div>
                <img src="/img/posts/{{ $post->images->isEmpty() ?'default-img.gif' : $post->images()->first()->name  }}" style="padding-top: 1.5em" alt=""/>
                <div class="post_content">
                    <p> {!!substr($post->content, 0,200)!!}</p>
                    <a href="{{route('frontcontihogar.front_blog.view.post', $post->slug) }}">ver mas <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        @endforeach
            <div style="text-align: right">
                {!! $posts->render() !!}
            </div>
    @endif
</div>
