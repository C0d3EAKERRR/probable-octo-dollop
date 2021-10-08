@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Product page</h1>
        <p>This is show page</p>
        <p></p>
    </div>  
    <a href="/ecommerce" class="btn btn-default">Go Back</a><hr>
    <div class="jumbotron">        
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a href="/ecommerce/{{$post->id}}/edit" class="btn btn-success btn-lg float-left">Edit</a>                
                {!!Form::open(['action' => ['EcommerceController@destroy', $post->id], 'method' => 'POST','class' => 'pull-right'])!!}                
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-success btn-lg float-left'])}}                 
                {!!Form::close()!!}
            @endif
        @endif    
        <hr>
        <h3>Product ID: {{$post->id}}</h2><hr>
        <h3>Product Name: {{$post->product_name}}</h1><hr>
    
        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
        <br><br>
    
        <h3>Product Description:<br><br>{!!$post->description!!}</h3><hr>
        <h3>Price: {{$post->price}}</h3><hr>
        <h3>Inventory Stats: {{$post->status}}</h3><hr>      
        <small>Product Creation @ {{$post->created_at}}</small>
     </div>  
@endsection