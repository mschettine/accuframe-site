@extends('layouts.master')

@section('title')
  10 Second Survey
@endsection

@section('content')
  <div class="jumbotron">
    <div class="container" style="padding-top: 5%;">
      <h1>10 Second Survey</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-info" role="alert">
          <h2>Hey.</h2>
          <p>If you don't mind, please fill out this survey to help us create an even better product!</p>
          <p><button type="button" class="btn btn-lg btn-secondary" data-dismiss="alert" aria-label="Close">Okay!</button></p>
        </div>
        <iframe src="https://docs.google.com/a/accuframe.com/forms/d/e/1FAIpQLSei44sBoDwG4U4cfei9QawFjToUoIApjwwu2mXO_6uF9H_82w/viewform?embedded=true" width="100%" height="1500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
      </div>
    </div>
  </div>
@endsection
