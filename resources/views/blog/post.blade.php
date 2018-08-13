@extends('layouts.master')

@section('title')
  {{ $post->title }}
@endsection

@section('content')
  <div class="container">
  <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">{{ $post->title }}</h1>

          <!-- Author -->
          <p class="lead">
            by {{ $post->admin->name }}
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on {{ $post->created_at->toFormattedDateString() }}</p>

          <hr>

          <!-- Post Content -->
          {!! $post->body !!}

          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            @if(Auth::check())
              <div class="card-body">
              @if(session()->has('success'))
                  <div class="alert alert-success">
                      Your comment was published!
                  </div>
              @endif

              @if(session()->has('error'))
                  <div class="alert alert-danger">
                      An error occured! Your comment could not be published!
                  </div>
              @endif

              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <form method="post" action="/blog/comment/publish">
                {{ csrf_field() }}
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                <p>You are posting this comment as <b>{{ Auth::user()->name }}</b> ({{ Auth::user()->email }}).</p>
                <div class="form-group">
                  <label>Comment</label>
                  <textarea name="comment" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            @else
              <div class="card-body">
                Please <a href="{{ route('login') }}">login</a> or <a <a href="{{ route('register') }}">register</a> to post a comment!
              </div>
            @endif
          </div>

          @if ($post->comments->count() > 0)
            @foreach ($post->comments as $comment)
              <!-- Comment -->
              <div class="media mb-4">
                <div class="media-body">
                  <h5 class="mt-0">{{ $comment->name }}</h5>
                  <small>{{ $comment->created_at->diffForHumans() }}</small>
                  <p>{{ $comment->comment }}</p>
                </div>
              </div>
            @endforeach
          @else
            <div class="alert alert-info">
              <b>Hey!</b> This post has no comments! Be the first to leave one!
            </div>
          @endif

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <form action="/blog/posts/search" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" name="query" class="form-control" placeholder="Search for a post...">
                    <span class="input-group-btn">
                      <button class="btn btn-outline-primary" type="submit">Go!</button>
                    </span>
                </div>
              </form>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->
      <hr>
    </div>


@endsection
