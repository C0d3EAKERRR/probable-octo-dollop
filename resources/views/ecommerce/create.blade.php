@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Create</h1>
        <p>This is create page</p>
        <p></p>
    </div>    
    <a href="/ecommerce" class="btn btn-default">Go Back</a><hr>
    <div class="jumbotron">         
        <h1>Create Product</h1>
    {!! Form::open(['action' => 'EcommerceController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('product_name', 'Product name')}}
            {{Form::text('product_name', '',['class' => 'form-control', 'placeholder' => 'Product name'])}}
        </div>
        <div class="form-group">
            {{Form::label('price', 'Price')}}
            {{Form::text('price', '',['class' => 'form-control', 'placeholder' => 'Price'])}}
        </div>
        <div class="form-group">
            {{Form::label('status', 'Status')}}
            {{Form::text('status', '',['class' => 'form-control', 'placeholder' => 'Status'])}}
        </div>
        <div class="form-group">            
            {{Form::textarea('description', '',['class' => 'form-control ckeditor', 'placeholder' => 'Product Description'])}}
        </div>
        <div class="form-group">
                {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection