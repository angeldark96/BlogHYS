
<!-- content -->
<div id="content" class="app-content box-shadow-z0" role="main">
    <div class="app-header white box-shadow">
        <div class="navbar">
            <!-- Open side - Naviation on mobile -->
            <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up">
                <i class="material-icons">&#xe5d2;</i>
            </a>
            <!-- / -->

            <!-- Page title - Bind to $state's title -->
            <div class="navbar-item pull-left h5" ng-bind="$state.current.data.title" id="pageTitle"></div>

            <!-- navbar right -->
            @if(Auth::user() )
            <ul class="nav navbar-nav pull-right">
                <li class="nav-item dropdown">
                    <a class="nav-link clear" href data-toggle="dropdown">
                  <span class="avatar w-32">
                    <img src="/img/users/{{Auth::user()->imginame}}" class="img-responsive">
                    <i class="on b-white bottom"></i>
                  </span>
                    </a>
                    <div class="dropdown-menu pull-right dropdown-menu-scale ng-scope">
                        <a class="dropdown-item" ui-sref="app.inbox.list" href="{{ route('admin.auth.logout') }}"><span>Cerrar Sesión</span></a>
                </li>
                <li class="nav-item hidden-md-up">
                    <a class="nav-link" data-toggle="collapse" data-target="#collapse">
                        <i class="material-icons">&#xe5d4;</i>
                    </a>
                </li>
            </ul>
            @endif
            <!-- / navbar right -->

            <!-- navbar collapse -->
            <div class="collapse navbar-toggleable-sm" id="collapse">
                <div ui-include="'../views/blocks/navbar.form.right.html'"></div>
                <!-- link and dropdown -->
                <ul class="nav navbar-nav">
                    <img src="" alt="">
                </ul>
                <!-- / -->
            </div>
            <!-- / navbar collapse -->
        </div>
    </div>
    <div class="app-footer">

    </div>
    <div ui-view class="app-body" id="view">