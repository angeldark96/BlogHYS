<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [

    'as' =>   'frontcontihogar.index', function () {
    return view('frontcontihogar.index');
}]);

Route::get('/blog', [
      'as' =>   'frontcontihogar.front_blog.index',
     'uses' => 'FrontController@index',
]);

Route::get('categories/{name}',
    [
        'uses' => 'FrontController@SearchCategory',
        'as' =>   'frontcontihogar.front_blog.search.category'

    ]);

Route::get('user/{name}',
    [
        'uses' => 'FrontController@SearchUser',
        'as' =>   'frontcontihogar.front_blog.search.user'

    ]);


Route::get('posts/{slug}',
    [
        'uses' => 'FrontController@viewPost',
        'as' =>   'frontcontihogar.front_blog.view.post'

    ]);


Route::group(['prefix'=>'admin', 'middleware' => ['auth']],function(){

    Route::get('/', [ 'as' =>   'admin.index', function () {
        return view('admin.index');
    }]);




    Route::group(['middleware' => 'admin'],function(){

        Route::resource('users','UsersController');

        Route::get('users/{id}/destroy',[

            'uses' => 'UsersController@destroy',
            'as' =>   'users.destroy'
        ]);
    });




    Route::resource('categories','CategoriesController');

    Route::get('categories/{id}/destroy',[

        'uses' => 'CategoriesController@destroy',
        'as' =>   'categories.destroy'
    ]);

    Route::resource('posts','PostsController');

    Route::get('posts/{id}/destroy',[

        'uses' => 'PostsController@destroy',
        'as' =>   'posts.destroy'
    ]);

    Route::resource('images','ImagesController');

    Route::get('posts/{id}/images',[

        'uses' => 'ImagesController@index',
        'as' =>   'images.index'
    ]);
    Route::post('posts/{id}/images',[

        'uses' => 'ImagesController@store',
        'as' =>   'images.store'
    ]);

    Route::get('images/{id}/destroy',[

        'uses' => 'ImagesController@destroy',
        'as' =>   'images.destroy'
    ]);

});

Auth::routes();
Route::get('admin/auth/login',[
    'uses' => 'Auth\LoginController@showLoginForm',
    'as'   => 'admin.auth.login'
]);

Route::post('admin/auth/login',[
    'uses' => 'Auth\LoginController@login',
    'as'   => 'admin.auth.login'
]);

Route::get('admin/auth/logout',[
    'uses' => 'Auth\LoginController@logout',
    'as'   => 'admin.auth.logout'
]);

//Route::get('/admin', 'HomeController@index');
