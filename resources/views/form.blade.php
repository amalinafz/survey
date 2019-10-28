@extends('layout')

@section('content')
<div class="flex-center position-ref full-height">
	<div>
		<h3>Survey</h3>
		<br>
		<form method="POST" action="/">
			@csrf

			<div class="form-row">
				<div class="form-group col-md-12">
					{{-- @error('age')
				  		<p class="help is-danger">{{$error->first('age')}} </p>
				  	@enderror --}}
			     	<label for="Q1">1. What is your age group?</label>
			     	<select class="form-control @error('age') is-danger @enderror" name="age">
					    <option selected hidden >Choose...</option>
						<option>< 18</option>
						<option>18 to 35</option>
						<option>35 to 60</option>
						<option>Above 60</option>
				 	</select>
			    </div>
			    <div class="form-group col-md-12">
			    	{{-- @error('education')
				  		<p class="help is-danger">{{$error->first('education')}} </p>
				  	@enderror --}}
			      <label for="Q2">2. What is your education level?</label>
			      <select class="form-control @error('education') is-danger @enderror" name="education">
			      	<option selected hidden>Choose...</option>
				  	<option>Secondary school and below</option>
				  	<option>Diploma</option>
				  	<option>Degree</option>
				  	<option>Post graduated degree</option>
				  </select>
			    </div>
			    <div class="form-group col-md-12">
			    	{{-- @error('income')
				  		<p class="help is-danger">{{$error->first('income')}} </p>
				  	@enderror --}}
			      <label for="Q3">3. What is your monthly income?</label>
			      <select class="form-control @error('income') is-danger @enderror" name="income">
			      	<option selected hidden>Choose...</option>
				  	<option>Less than RM1000</option>
				  	<option>Between RM1000 to RM3000</option>
				  	<option>Between RM3000 to RM5000</option>
				  	<option>More than RM5000</option>
				  </select>
			    </div>
			    <div class="form-group col-md-12">
			    	{{-- @error('gender')
				  		<p class="help is-danger">{{$error->first('gender')}} </p>
				  	@enderror --}}
			      <label for="Q4">4. Your gender:</label>
			      <select class="form-control @error('gender') is-danger @enderror" name="gender">
			      	<option selected hidden>Choose...</option>
				  	<option>Male</option>
				  	<option>Female</option>
				  </select>
			    </div>
			</div>
			<div class="form-group col-md-12" style="text-align: center;">
			 	<button type="submit" class="btn btn-outline-success">Submit</button>
			</div>
		</form>
		
	</div>
	
</div>
@endsection


@push('scripts')

<script>
    'use strict';
	
</script>