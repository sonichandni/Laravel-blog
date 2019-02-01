@extends('layouts.app')

@section('content')
	<div class="card-header"><h1>Edit Post</h1></div>
    <div class="card-body"> 
    	{!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST']) !!}
        	<div class="form-group">
        		{{Form::label('title','Title')}}
        		{{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
        	</div>
        	<div class="form-group">
        		{{Form::label('body','Body')}}
        		{{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body'])}}
        	</div>
            {{Form::hidden('_method','PUT')}}
        	{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    	{!! Form::close() !!}
    </div>
@endsection