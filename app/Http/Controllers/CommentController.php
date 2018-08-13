<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function post(Request $request)
    {
      $this->validate($request, [
        'name' => 'required|string',
        'comment' => 'required',
        'post_id' => 'required|integer'
      ]);

      $comment = new Comment();
      $comment->name = $request->name;
      $comment->comment = $request->comment;
      $comment->post_id = $request->post_id;

      if($comment->save())
      {
        return redirect()->back()->with('success', 'Comment published!');
      }

      return redirect()->back()->with('error', 'Comment failed to publish! Try again?');
    }
}
