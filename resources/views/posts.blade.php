@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class='row'>
                    <div class="col-md-8"><h2>All Post</h2></div>
                    <div class="col-md-4"><span class="pull-right">
                    <a href="{{ route('post.create')}}" class="btn btn-primary">Create Post
                    </a></span></div>


                </div>



                <div class="panel-body">
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>User</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($postview as $post)
                        <tr>
                            <td>{{ $post->id}}</td>
                            <td>{{ $post->title}}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->updated_at }}</td>
                            <td>{{ $post->user_id }}</td>
                            <td><div class ="btn-group">
                            <a href="{{ route('post.edit', $post-> id) }}" class="btn btn-sm btn-default">Edit</a><a href="{{ route('post.delete', $post->id) }} "
                            class="btn btn-sm btn-default">Delete</a>
                            </div>
                            </td>
    
                        </tr>
                    @endforeach
                    

                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection