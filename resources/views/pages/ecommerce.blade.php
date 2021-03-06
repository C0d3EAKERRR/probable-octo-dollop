@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
    <h1>C0d3reakerr => DevTEST</h1>
    <p>This is Laravel Web Application made from scratch! Developed by: C0d3reakerr</p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
<hr>
    <h1>Product Blogs</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>                
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection
</div>