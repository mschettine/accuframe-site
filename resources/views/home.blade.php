@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
<div class="container" style="padding-top: 50px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome, {{ Auth::user()->name }}!
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Things to do</div>

                <div class="card-body">
                  While you're here, feel free to check out our blog and leave a comment. Also, feel free to check out our online store!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
