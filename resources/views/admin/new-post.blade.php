@extends('admin.layouts.master')

@section('title')
  New Blog Post
@endsection

@section('content')
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">New Blog Post <a data-toggle="modal" data-target="#blogHelp" href="#" class="btn btn-lg btn-outline-primary">Need Help?</a></h1>
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
        <input type="text" class="form-control" name="title" autocomplete="false">
      </div>

      <div class="form-group">
        <label>Summary</label>
        <input type="text" class="form-control" name="summary" autocomplete="false">
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

<!-- Modal -->
<div class="modal fade" id="blogHelp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Help has arrived.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><b>There are three important parts of a blog post on the AccuFrame System.</b></p>
        <ol>
          <li><b>Title:</b> This is a super short, enticing line to grab the readers attention.</li>
          <li><b>Summary:</b> This is a short summary of what the post is about, to grab the readers attention even further. Don't give too much away in the summary though!</li>
          <li><b>Post body:</b> This is where the actual post goes. You can add all sorts of multimedia content in here such as videos, photos, charts, tables, embeded iFrames, and more!</li>
        </ol>
        <p>When adding an iFrame or picture, it's important you set the <b>width to be <u>100%</u> and the height to <u>500px</u></b>. This ensures it takes up all available screen real estate.</p>
        <p>If you're embeding a YouTube video, the iFrame URL is <code>https://youtube.com/embed/THE_VIDEO_ID</code> where THE_VIDEO_ID is the ID of the video you are embeding.</p>
        <p><b>See this video for more information:</b></p>
        <iframe width="100%" height="300px" src="https://www.youtube.com/embed/FM-y6TlGhPc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection
