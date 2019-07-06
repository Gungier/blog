@extends('layouts.app')

@section('content')
<div class="container">
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

                    You are logged in!

                  <h5>  {{$name}} </h5> 

                  <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a Post</h1>
                <form method="post" action="{{ route('create_post') }}">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title"/>
                    </div>

                    <div class="form-group">
                        <label for="slug">Slug:</label>
                        <input type="text" class="form-control" name="slug"/>
                    </div>

                    <div class="form-group">
                        <label for="intro">Intro:</label>
                        <input type="text-area" class="form-control" name="intro"/>
                    </div>
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="text" class="form-control" name="image"/>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <input type="text" class="form-control" name="status"/>
                    </div>
                    <button type="submit" class="btn btn-primary-outline">Create Post</button>
                </form>
            </div>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
