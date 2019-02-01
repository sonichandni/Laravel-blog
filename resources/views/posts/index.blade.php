@extends('layouts.app')

@section('content')
	@if(count($post)>0)
		<div class="card-header"><h1>Posts</h1></div>
		<div class="card-body">
			@foreach($post as $p)
				<h3><a href="/posts/{{$p->id}}">{{$p->title}}</a></h3>
				<small>Written on {{$p->created_at}} by {{$p->user->name}}</small>
			@endforeach
			{{$post->links()}}
		</div>
	@else
		<p>No Posts Found</p>
	@endif
@endsection