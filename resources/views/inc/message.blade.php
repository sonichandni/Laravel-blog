@if(count($errors) > 0)
	@foreach($errors->all() as $e)
		<div class="alert alert-danger">
			{{$e}}
		</div>
	@endforeach
@endif

@if(session('success'))
	<div class="alert alert-success">
			{{session('success')}}
		</div>
@endif

@if(session('error'))
	<div class="alert alert-danger">
			{{session('error')}}
		</div>
@endif