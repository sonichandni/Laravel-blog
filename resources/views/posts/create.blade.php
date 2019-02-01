@extends('layouts.app')

@section('content')
	<div class="card-header"><h1>Create Post</h1></div>
    <div class="card-body">
    	{!!Form::open(['action'=>'PostsController@store','method'=>'POST'])!!}
        	<div class="form-group">
        		{{Form::label('title','Title')}}
        		{{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
        	</div>
        	<div class="form-group">
        		{{Form::label('body','Body')}}
        		{{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body'])}}
        	</div>
        	{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    	{!!Form::close()!!}
    </div>
@endsection