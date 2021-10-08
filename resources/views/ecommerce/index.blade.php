@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to my shop!</h1>            
        <hr><br>
        <div>
                <h3>New products available Shop Now!</h3>
                <hr><a href="/ecommerce/create" class="btn btn-primary">Create Product</a>
            <hr>
        </div>
        @if(count($posts) > 0)
        @foreach($posts as $Product)
            <div class="well">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <img style="width:100%" src="/storage/cover_images/{{$Product->cover_image}}">
                    </div>                
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/ecommerce/{{$Product->id}}">{{$Product->product_name}}</a></h3>
                        <small>Product posted on {{$Product->created_at}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
        @else
            <p><h5>No products found! Please create..</h5></p>
        @endif
    </div>  
    
@endsection
