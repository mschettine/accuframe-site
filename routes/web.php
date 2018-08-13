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

use App\Post;
use App\Comment;

Route::get('/', function(){
  return view('welcome');
});

Route::get('/performance', function(){
  return view('performance');
});

Route::get('/builders', function(){
  return view('builders');
});

Route::get('/specs', function(){
  return view('specs');
});

Route::get('/survey', function(){
  return view('survey');
});

Route::get('/blog', function(){
  $posts = Post::orderBy('id', 'DESC')->get();
  return view('blog.index', compact('posts'));
});

Route::get('/blog/post/{post}', function(Post $post){
  return view('blog.post', compact('post'));
});

Route::post('/blog/comment/publish', 'CommentController@post');

Route::post('/blog/posts/search', 'SearchController@posts');

// USER ROUTES
Auth::routes();

Route::name('user.')->group(function(){
  Route::prefix('user')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
  });
});

// ADMIN ROUTES
Route::name('admin.')->group(function(){
  Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('login.submit');

    Route::get('/', 'AdminHomeController@index')->name('dashboard');
    
    Route::get('/new/post', 'PostController@index')->name('new.post');
    Route::post('/new/post', 'PostController@post')->name('new.post.publish');
    Route::get('/posts', function(){
      return view('admin.posts');
    })->name('posts');
    Route::get('/post/{post}/delete', 'PostController@delete')->name('delete.post');
    Route::get('/post/{post}/edit', 'PostController@edit')->name('edit.post');
    Route::post('/post/{post}/edit', 'PostController@update')->name('edit.post.publish');
    Route::get('/post/{post}/view', 'PostController@get')->name('view.post');

  });
});


Route::name('shop.')->group(function(){
  Route::prefix('shop')->group(function(){
    Route::get('/', 'ShopHomeController@index')->name('home');
  });
});

