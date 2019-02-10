@extends('layouts.blog-home')

@section('content')

<!--
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
                </div>
            </div>
        </div>
    </div>
</div>--> 
<div class="row">
    <div class="col-md-8">
        @if($posts)
                @foreach($posts as $post)
                <h2>
                    <a href="{{route('home.post', $post->slug)}}">{{$post->title}}</a>
                </h2>
                <p class="lead">
                    by {{$post->user->name}}
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted {{$post->created_at->diffForHumans()}}</p>
                <hr>
                <img class="img-responsive" src="{!! URL::asset($post->photo ? $post->photo->file :  '/images/image_placeholder.png') !!}" alt="">
                <hr>
                <p>{{str_limit($post->body, 100)}}</p>
                <a class="btn btn-primary" href="{{route('home.post', $post->slug)}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                @endforeach
            @endif
            <div class="row">
                <div class="col-sm-6 col-sm-offset-5">
                    {{$posts->render()}}
                </div>
            </div>
    </div>
    @include('includes.front_sidebar')      
@endsection
