@extends('layouts.master')

@section('title')
  Search Results
@endsection

@section('content')
  <div class="jumbotron">
    <div class="container" style="padding-top: 5%;">
      <h1>Search Results: <small>{{ $query }}</small></h1>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @if ($results->count() > 0)
          @foreach($results as $result)
            <div class="card">
              <div class="card-body">
                <h3>{{ $result->title }}</h3>
                <small>{{ $result->updated_at->diffForHumans() }}</small>
                <p>{!! $result->summary !!}</p>
                <a href="/blog/post/{{ $result->id }}" class="btn btn-lg btn-outline-primary">View Post</a>
              </div>
            </div>
            <br>
          @endforeach
        @else
          <div class="alert alert-info">
            <b>So sorry!</b> No posts matched your query.
          </div>
        @endif
      </div>
    </div>
    <hr>
  </div>
@endsection
