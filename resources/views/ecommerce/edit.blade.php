@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Edit</h1>
    <p>This is edit page</p>
    <p></p>
</div>
<a href="/ecommerce" class="btn btn-default">Go Back</a><hr>
<div class="jumbotron">  
    
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['EcommerceController@update', $post->id], 
                                 'method' => 'POST',
                                 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('product_name', 'Product Name')}}
            {{Form::text('product_name', $post->product_name,['class' => 'form-control', 
                                                'placeholder' => 'product_name'])}}
        </div>
        <div class="form-group">
            {{Form::label('price', 'Price')}}
            {{Form::text('price', $post->price,['class' => 'form-control', 'placeholder' => 'price'])}}
        </div>
        <div class="form-group">
            {{Form::label('status', 'Status')}}
            {{Form::text('status', $post->status,['class' => 'form-control', 'placeholder' => 'status'])}}
        </div>
        <div class="form-group">
            {{Form::textarea('description', $post->description, [
                'class' => 'form-control ckeditor', 
                'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection