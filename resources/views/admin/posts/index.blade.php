@extends('layouts.admin')

@section('content')
	<h1>Posts</h1>
<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Title</th>
        <th>User</th>
        <th>Category</th>
        <th>Post</th>
        <th>Comments</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
    @if($posts)
    @foreach($posts as $post)
      <tr>
        <td>{{$post->id}}</td>
        <td><img height="50" src="{!! URL::asset($post->photo ? $post->photo->file :  '/images/image_placeholder.png') !!}"></td>
        <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->title}}</a></td>
        <td>{{$post->user->name}}</td>
        <td>{{$post->category ? $post->category->name : "Uncategorized"}}</td>
        <td><a href="{{route('home.post', $post->slug)}}">See post</a></td>
        <td><a href="{{route('admin.comments.show', $post->id)}}">See coments</a></td>
        <td>{{$post->created_at->diffForHumans()}}</td>
        <td>{{$post->updated_at->diffForHumans()}}</td>
        <th>
      </tr>
      @endforeach
     @endif
    </tbody>
  </table>
  <div class="row">
    <div class="col-sm-6 col-sm-offset-5">
      
      {{$posts->render()}}
    </div>
  </div>

@stop