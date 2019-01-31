@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        <h3>
        	@if(count($services) > 0)
        	<ul class="list-group">
        		@foreach($services as $s)
        			<li class="list-group-item">{{$s}}</li>
        		@endforeach
        	</ul>
        	@endif
        </h3>
@endsection