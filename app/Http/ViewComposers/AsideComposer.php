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
        $categories = Category::orderBy('name','ASC')->get();
        $users = User::orderBy('name','ASC')->get();
       // $posts = Post::orderBy('created_at','desc')->paginate(4);

        $view->with(compact('categories','users'));
    }
}



