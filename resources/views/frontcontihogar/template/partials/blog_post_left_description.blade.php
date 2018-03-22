

<div class="col-lg-8 col-md-8 col-sm-8 ">

    <div class="sngl_blg">

        <div class="post_info">
            <div class="post_intro">
                <h2><a href="{{route('frontcontihogar.front_blog.view.post', $post->slug) }}">{{ $post->title }}</a></h2>
                <i class="" style="float: none;background: none"></i>
            </div>
            <ul>
                <li>{{ $post->created_at->diffForHumans() }}</li>
            </ul>
        </div>
        <br>
        <div class="post_content">
            <p>{!!$post->content !!}</p>
        </div>
        <div class="post_content1">
            @foreach($post->images as $image)
                <img src="/img/posts/{{  $image->name }}" alt="" style="display: block;margin-bottom: 1em"/>
            @endforeach
        </div>
        <div id="disqus_thread"></div>
        <script>
            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://hogaryspacios.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </div>

</div>