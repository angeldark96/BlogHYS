<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">

    <link href="{{ asset('flatkit/assets/styles/font.css') }}"  type="text/css" >
    <!-- style -->
    <link href="{{ asset('css/app.css') }}" type="text/css" />
    <link href="{{ asset('flatkit/assets/glyphicons/glyphicons.css') }}"  type="text/css" />
    <link href="{{ asset('flatkit/assets/font-awesome/css/font-awesome.min.css') }}"  type="text/css" >
    <link href="{{ asset('flatkit/assets/material-design-icons/material-design-icons.css') }}"  type="text/css" >

    <link href="{{ asset('flatkit/assets/bootstrap/dist/css/bootstrap.min.css') }}"  type="text/css" >
    <!-- build:css ../assets/styles/app.min.css -->
    <link href="{{ asset('flatkit/assets/styles/app.css') }}"  type="text/css" >
    <!-- endbuild -->
    <link href="{{ asset('flatkit/assets/styles/font.css') }}"  type="text/css" >
    <link href="{{ asset('trumbowyg/ui/trumbowyg.css') }}"  type="text/css" >
    <link rel="shortcut icon" href="{{ asset('img/isotipo0.png') }}">
    <title>@yield('title','Default') | Blog</title>
</head>
    <body>
        @include('admin.template.partials.main-header')
        @include('admin.template.partials.content')

        <div class="padding">

            <section>
            @if(!session('mensaje')==null)
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{session('mensaje')}}
                </div>
            @elseif(!session('mensaje1')==null)
                <div class="alert alert-danger"  >
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   {{session('mensaje1')}}
                </div>
            @elseif(!session('mensaje2')==null)
                <div class="alert alert-warning"  >
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{session('mensaje2')}}
                </div>
            @endif﻿
                @yield('list-user')
                @yield('list-category')
                @yield('list-post')
            </section>


            <section>
                @yield('form-user')
                @yield('form-categorias')
                @yield('form-posts')

            </section>
        </div>

        <!-- jQuery -->
        <script src="{{ asset('flatkit/libs/jquery/jquery/dist/jquery.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('flatkit/libs/jquery/tether/dist/js/tether.min.js') }}"></script>
        <script src="{{ asset('flatkit/libs/jquery/bootstrap/dist/js/bootstrap.js') }}"></script>
        <!-- core -->
        <script src="{{ asset('flatkit/libs/jquery/underscore/underscore-min.js') }}"></script>
        <script src="{{ asset('flatkit/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js') }}"></script>
        <script src="{{ asset('flatkit/libs/jquery/PACE/pace.min.js') }}"></script>

        <script src="{{ asset('flatkit/scripts/config.lazyload.js') }}"></script>

        <script src="{{ asset('flatkit/scripts/palette.js') }}') }}"></script>
        <script src="{{ asset('flatkit/scripts/ui-load.js') }}"></script>
        <script src="{{ asset('flatkit/scripts/ui-jp.js') }}"></script>
        <script src="{{ asset('flatkit/scripts/ui-include.js') }}"></script>
        <script src="{{ asset('flatkit/scripts/ui-device.js') }}"></script>
        <script src="{{ asset('flatkit/scripts/ui-form.js') }}"></script>
        <script src="{{ asset('flatkit/scripts/ui-nav.js') }}"></script>
        <script src="{{ asset('flatkit/scripts/ui-screenfull.js') }}"></script>
        <script src="{{ asset('flatkit/scripts/ui-scroll-to.js') }}"></script>
        <script src="{{ asset('flatkit/scripts/ui-toggle-class.js') }}"></script>

        <script src="{{ asset('flatkit/scripts/app.js') }}"></script>
        <!-- ajax -->
        <script src="{{ asset('flatkit/libs/jquery/jquery-pjax/jquery.pjax.js') }}"></script>
        <script src="{{ asset('flatkit/scripts/ajax.js') }}"></script>
        <script src="{{asset ('trumbowyg/trumbowyg.min.js') }}"></script>
        @yield('js')
        <!-- endbuild -->
    </body>
</html>
