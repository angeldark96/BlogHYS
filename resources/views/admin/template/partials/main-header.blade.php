<div class="app" id="app">
<div id="aside" class="app-aside modal fade nav-dropdown">
    <!-- fluid app aside -->
    <div class="left navside dark dk" layout="column">
        <div class="navbar no-radius">
            <!-- brand -->
            <a class="navbar-brand" href="http://blog.hogaryspacios.com/admin/posts">
                {{--<div ui-include="../flatkit/assets/images/logo.svg"></div>--}}
                <img src="{{ asset('img/logo.svg') }}" alt="" class="">
                {{--<span class="hidden-folded inline">Flatkit</span>--}}
            </a>
            <!-- / brand -->
        </div>
        <div flex class="hide-scroll">
            <nav class="scroll nav-light">

                <ul class="nav" ui-nav>
                    <li class="nav-header hidden-folded">
                        <small class="text-muted">Main</small>
                    </li>
                    @if(Auth::user()->admin())
                    <li>
                        <a href="{{ route('users.index') }}" >
                        <span class="nav-icon">
                          <i class="material-icons">&#xe3fc;
                            <span ui-include="../flatkit/assets/images/i_0.svg"></span>
                          </i>
                        </span>
                        <span class="nav-text">Usuarios</span>
                        </a>
                    </li>


                    <li>
                    <a href="{{ route('categories.index') }}" >

                        <span class="nav-label"></span>
                        <span class="nav-icon">
                            <i class="material-icons">&#xe3e8;
                        <span ui-include="../flatkit/assets/images/i_5.svg"></span>
                        </i>
                        </span>
                            <span class="nav-text">Categorias</span>
                        </a>

                    </li>
                    @endif
                    <li>
                        <a  href="{{ route('posts.index') }}">
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8d2;
                        <span ui-include="../flatkit/assets/images/i_3.svg"></span>
                      </i>
                    </span>
                            <span class="nav-text">Post</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        @if(Auth::user() )
        <div flex-no-shrink class="b-t">
            <div class="nav-fold">
                <a href="profile.html">
        	    <span class="pull-left">
                    {{--/img/users/@if(Auth::check()) {{Auth::user()->imginame}} @endif--}}
        	      <img src="/img/users/{{Auth::user()->imginame}}" alt="..." class="w-40 img-circle">
        	    </span>
                    <span class="clear hidden-folded p-x">
        	      <span class="block _500">@if(Auth::check()) {{Auth::user()->name}} @endif</span>
        	      <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>{{Auth::user()->type}}</small>
        	    </span>
                </a>
            </div>
        </div>
        @endif
    </div>
</div>
