@extends('layouts.app')

@section('content')
	
	@if(count($post)>0)
		<h3>Posts</h3>
		@foreach($post as $p)
			<h3><a href="/posts/{{$p->id}}">{{$p->title}}</a></h3>
			<small>Written on {{$p->created_at}}</small>
		@endforeach
		{{$post->links()}}
	@else
		<p>No Posts Found</p>
	@endif
@endsection