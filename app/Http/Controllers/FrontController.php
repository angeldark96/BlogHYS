<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use  App\Category;
use App\User;

class FrontController extends Controller
{

    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
        $posts = Post::orderBy('id','DESC')->paginate(3);

        $posts->each(function ($posts) {
            $posts->category;
            $posts->images;
        });
        return view('frontcontihogar.front_blog.index')->with('posts',$posts);
    }

    public function SearchCategory($name)
    {
        $category = Category::SearchCategory($name)->first();
        $posts = $category->posts()->orderBy('created_at','desc')->paginate(4);
        $posts->each(function ($posts) {
            $posts->category;
        });

        return view('frontcontihogar.front_blog.index')->with('posts',$posts);
    }
    public function SearchUser($name)
    {
        $user = User::SearchUser($name)->first();
        $posts = $user->posts()->paginate(3);
        $posts->each(function ($posts) {
            $posts->user;
        });

        return view('frontcontihogar.front_blog.post_user')->with(compact('user','posts'));
    }

    public function viewPost($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->category;
        $post->user;
        $post->images;

        return view('frontcontihogar.front_blog.post')->with('post',$post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
