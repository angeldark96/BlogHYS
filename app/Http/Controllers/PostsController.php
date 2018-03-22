<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\File;
use App\Http\Requests\StorePost;
use App\Category;
use App\Post;
use App\Image;
use Auth;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if(Auth::user()->admin())
        {
            $posts = Post::Search($request->title)->orderBy('created_at','desc')->paginate(4);
            $posts->each(function ($posts)
            {
                $posts->category;
                $posts->user;
            });
        }
        else
        {
            $posts = Post::Search($request->title)->where('user_id',auth()->user()->id)->orderBy('created_at','desc')->paginate(5);
            $posts->each(function ($posts)
            {
                $posts->category;
                $posts->user;
            });
        }

        return view('admin.posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        return view('admin.posts.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
        if ($request->file('image'))
        {
            $file = $request->file('image');
            $name = 'blog' . time(). '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/img/posts/';
            $file->move($path,$name);
        }

        $post = new Post($request->all());
        $post->user_id = \Auth::user()->id;
        $post->save();

        $image = new Image();
        $image->name = $name;

        $image->post()->associate($post);
        $image->save();
        return redirect()->route('posts.index')->with('mensaje',"Se ha registrado el articulo $post->title correctamente");

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
        $post =  Post::find($id);
        $post->category;

        $categories = Category::orderBy('name','DESC')->pluck('name','id');
        return view('admin.posts.edit')->with('categories',$categories)
            ->with('post',$post);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePost $request, $id)
    {
        $post = Post::find($id);
        $post->fill($request->all());
        $post->slug = null;
        $post->update(['title' => $post->title]);
        $post->save();

        return redirect()->route('posts.index')-> with('mensaje2',"El post $post->title ha sido editado con éxito ! ");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $path = public_path() . '/img/posts/';
        $imagen=Image::where('post_id','LIKE','%'.$post->id.'%')->first();
        $name=$imagen->name;
        \File::delete($path.$name);
        $post-> delete();
        return redirect()->route('posts.index')-> with('mensaje1',"Se ha eliminado a $post->title correctamente ");
    }


}
