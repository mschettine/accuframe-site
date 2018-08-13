<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class SearchController extends Controller
{
    public function posts(Request $request)
    {
    	$results = Post::search($request['query'])->get();

    	return view('blog.search', [
    		'query' => $request['query'],
    		'results' => $results
    	]);
    }
}
