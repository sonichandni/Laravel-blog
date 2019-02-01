@extends('layouts.app')

@section('content')
	<div class="card-header"><h1>{{$post->title}}</h1></div>
	<div class="card-body">
		<a href="/posts" class="btn btn-default">Back</a>
		{!!$post->body!!}
		<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
		<hr>
		<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
		{!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
			{{Form::hidden('_method','DELETE')}}
			{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
		{!!Form::close()!!}
	</div>
@endsection