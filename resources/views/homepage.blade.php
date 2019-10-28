@extends('layout')

@section('content')
<div class="flex-center position-ref full-height">
	<div>
		<h2>Let start the survey now</h2>
		<br>
		<div style="text-align: center;">
			<a href=" {{route('create')}} " class="btn btn-outline-primary">Start</a>
		</div>
	</div>
</div>
<div>
	<h3>Survey Result</h3>
	<br>
	<div class="row">
	  <div class="col-sm-6">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Age Group</h5>
	        <p class="card-text">
	        	@foreach($outcomes as $out)
				<ul>
					<li>{{$out->age}}</li>
				</ul>
				@endforeach
	        </p>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-6">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Education Level</h5>
	        <p class="card-text">
	        	@foreach($outcomes as $out)
				<ul>
					<li>{{$out->education}}</li>
				</ul>
				@endforeach
	        </p>
	      </div>
	    </div>
	  </div>
	</div>
	<br>
	<div class="row">
	  <div class="col-sm-6">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Monthly Income</h5>
	        <p class="card-text">
	        	@foreach($outcomes as $out)
				<ul>
					<li>{{$out->income}}</li>
				</ul>
				@endforeach
	        </p>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-6">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Gender</h5>
	        <p class="card-text">
	        	@foreach($outcomes as $out)
				<ul>
					<li>{{$out->gender}}</li>
				</ul>
				@endforeach
	        </p>
	      </div>
	    </div>
	  </div>
	</div>
</div>
@include('layout.footer')
@endsection

<script>
    'use strict';
	
</script>

