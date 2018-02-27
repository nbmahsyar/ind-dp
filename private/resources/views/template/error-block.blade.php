@if(count($errors)>0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger" role="alert">{{$error}}</div>
	@endforeach
@endif

@if(Session::has('error'))
	<div class="alert alert-danger" role="alert">{{Session::get('error')}}</div>
@endif