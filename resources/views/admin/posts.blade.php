@extends('admin.layouts.master')

@section('title')
  Blog Post Management
@endsection

@section('content')

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Manage Your Blog Posts</h1>
    </div>

    @if(\App\Post::all()->count() == 0)
    <div class="alert alert-info">
      Sorry, you have no posts. <b>Go write one now!</b>
    </div>
    @endif

    @foreach(\App\Post::all() as $post)

      <h1>{{ $post->title }}</h1>
      
      <p>{{ $post->summary }}</p>
      
      <a class="btn btn-success" href="{{ route('admin.edit.post', $post->id) }}">Edit post</a>
      
      <a class="btn btn-danger" href="{{ route('admin.delete.post', $post->id) }}">Delete post</a>
      
      <a class="btn btn-info" href="{{ route('admin.view.post', $post->id) }}">View post</a>
      
      <hr>

    @endforeach

  </main>

@endsection
