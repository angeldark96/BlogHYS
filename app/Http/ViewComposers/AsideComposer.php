<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\User;
use App\Category;
use App\Post;

class AsideComposer
{
    public function compose(View $view)
    {
        // SearchCategory($name)->first()->
        $categories = Category::orderBy('name','DESC')->get();
        $users = User::orderBy('name','DESC')->get();
       /* $posts = Post::orderBy('created_at','desc')->paginate(4);
        $posts->each(function ($posts) {
            $posts->category;
        });*/

        $view->with(compact('categories','users'));
    }
}



