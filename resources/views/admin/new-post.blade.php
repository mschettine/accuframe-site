@extends('admin.layouts.master')

@section('title')
  New Blog Post
@endsection

@section('content')
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">New Blog Post </h1>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif


    <form method="post" action="{{ route("admin.new.post.publish") }}">

      @csrf

      <p>You are posting this as <b>{{ Auth::user()->name }}</b></p>

      <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title">
      </div>

      <div class="form-group">
        <label>Summary</label>
        <input type="text" class="form-control" name="summary">
        <small class="form-text text-muted">Enter a summary of this post</small>
      </div>

      <div class="form-group">
        <label>Post body</label>
        <textarea name="body" id="editor1" rows="50">
        </textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Publish!</button>
      </div>

    </form>

  </main>

  <script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor1' );
  </script>
@endsection
