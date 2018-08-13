@extends('layouts.master')

@section('title')
  Blog
@endsection

@section('content')
  <div class="jumbotron">
    <div class="container" style="padding-top: 5%;">
      <h1>Blog</h1>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @if ($posts->count() > 0)
          @foreach($posts as $post)
            <div class="card">
              <div class="card-body">
                <h3>{{ $post->title }}</h3>
                <small>{{ $post->updated_at->diffForHumans() }}</small>
                <p>{{ $post->summary }}</p>
                <a href="/blog/post/{{ $post->id }}" class="btn btn-lg btn-outline-primary">View Post</a>
              </div>
            </div>
            <br>
          @endforeach
        @else
          <div class="alert alert-info">
            <b>Stay tuned!</b> We currently have no blog posts!
          </div>
        @endif
      </div>
    </div>
    <hr>
  </div>
@endsection
