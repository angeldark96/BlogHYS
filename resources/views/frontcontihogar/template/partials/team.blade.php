<section id="disenador">
<section id="tm_sec">
    <div class="l-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>Nuestro Diseñadores</h1>
                    <h2>LOREM IMPUS</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12">
                <div class="all_team">
                    @foreach($users as $user)
                        <div class="sngl_team">
                            <img src="/img/users/{{ $user->imginame }}" alt=""/>
                            <a href=""><h3>{{ $user->name }}  <span>Diseñador</span></h3></a>
                            <p>{{ $user->posts->count() }} Post Publicado </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
</section>
<!-- Equipo Section -->