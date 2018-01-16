<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        View::Composer(['frontcontihogar.front_blog.index',
            'frontcontihogar.front_blog.post',
            'frontcontihogar.front_blog.post_user',
            'frontcontihogar.template.partials.post',
            'frontcontihogar.template.partials.team',
            'frontcontihogar.template.partials.header'],

            'App\Http\ViewComposers\AsideComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
