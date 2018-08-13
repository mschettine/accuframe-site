@extends('admin.layouts.master')

@section('title')
  {{ $post->title }}
@endsection

@section('content')

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">{{ $post->title }} </h1><small>by {{ $post->admin->name }}</small>
    </div>

    {!! $post->body !!}

    <div class="alert alert-info">
      This post was created on {{ $post->created_at->toFormattedDateString() }} and was last updated on {{ $post->updated_at->toFormattedDateString() }}
    </div>

  </main>

@endsection
