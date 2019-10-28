@extends('layout')

@section('content')
<div class="flex-center position-ref full-height">
	<div>
		<h3>Survey Result</h3>
		<br>
		{{-- @foreach($outcomes as $out)
			{{$out->age}}
		@endforeach --}} 
		<div style="text-align: center;">
			<a href=" {{route('')}} " class="btn btn-outline-primary">Homepage</a>
		</div>
	</div>
	
</div>
@endsection