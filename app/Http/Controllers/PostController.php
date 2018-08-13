<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Admin;

use Auth;

class PostController extends Controller
{

	public function __construct()
	{
		return $this->middleware('auth:admin');
	}

    public function index()
    {
        return view('admin.new-post');
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'summary' => 'required',
            'body' => 'required'
        ]);

    	Post::create([
    		'title' => $request->title,
    		'summary' => $request->summary,
    		'body' => $request->body,
    		'admin_id' => Auth::user()->id
    	]);

    	return back();
    }

    public function delete(Post $post)
    {
        $post->delete();
        return back();
    }

    public function edit(Post $post)
    {
        return view('admin.edit', compact('post'));
    }

    public function get(Post $post)
    {
        return view('admin.view', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->summary = $request->summary;
        $post->body = $request->body;
        $post->save();
        return redirect(route('admin.posts'));
    }

}
