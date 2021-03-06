<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class AdminHomeController extends Controller
{
  /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
      $this->middleware('auth:admin');
    }

    /**
      * Show the application dashboard.
      *
      * @return \Illuminate\Http\Response
      */
    public function index()
    {
      $posts = Post::all();
      $users = User::all();

      return view('admin.dashboard', [
        'posts' => $posts,
        'users' => $users
      ]);
    }

}
