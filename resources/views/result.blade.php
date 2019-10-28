@extends('layout')

@section('content')
<div class="flex-center position-ref full-height">
	<div>
		<div>
			<h3>Survey Result</h3>
			<br>
			<div class="row">
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title" >Age Group</h5>
			        <p class="card-text">
			        	<table class="table table-borderless" style="text-align: center">
						  <thead>
						    <tr>
						      <th scope="col"></th>
						      <th scope="col">Total</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td>< 18</td>
						      <td>{{$dataA1}} </td>
						    </tr>
						    <tr>
						      <td>18 to 35</td>
						      <td>{{$dataA2}} </td>
						    </tr>
						    <tr>
						      <td>35 to 60</td>
						      <td>{{$dataA3}} </td>
						    </tr>
						    <tr>
						      <td>Above 60</td>
						      <td>{{$dataA4}} </td>
						    </tr>
						  </tbody>
						</table>
			        </p>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title">Education Level</h5>
			        <p class="card-text">
			        	<table class="table table-borderless" style="text-align: center">
						  <thead>
						    <tr>
						      <th scope="col"></th>
						      <th scope="col">Total</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td>Secondary school and below</td>
						      <td>{{$dataE1}} </td>
						    </tr>
						    <tr>
						      <td>Diploma</td>
						      <td>{{$dataE2}} </td>
						    </tr>
						    <tr>
						      <td>Degree</td>
						      <td>{{$dataE3}} </td>
						    </tr>
						    <tr>
						      <td>Post graduated degree</td>
						      <td>{{$dataE4}} </td>
						    </tr>
						  </tbody>
						</table>
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
			        	<table class="table table-borderless" style="text-align: center">
						  <thead>
						    <tr>
						      <th scope="col"></th>
						      <th scope="col">Total</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td>Less than RM1000</td>
						      <td>{{$dataI1}} </td>
						    </tr>
						    <tr>
						      <td>Between RM1000 to RM3000</td>
						      <td>{{$dataI2}} </td>
						    </tr>
						    <tr>
						      <td>Between RM3000 to RM5000</td>
						      <td>{{$dataI3}} </td>
						    </tr>
						    <tr>
						      <td>More than RM5000</td>
						      <td>{{$dataI4}} </td>
						    </tr>
						  </tbody>
						</table>
			        </p>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title">Gender</h5>
			        <p class="card-text">
			        	<table class="table table-borderless" style="text-align: center">
						  <thead>
						    <tr>
						      <th scope="col"></th>
						      <th scope="col">Total</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td>Male</td>
						      <td>{{$dataM}} </td>
						    </tr>
						    <tr>
						      <td>Female</td>
						      <td>{{$dataF}} </td>
						    </tr>
						  </tbody>
						</table>
			        </p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<div style="text-align: center;">
			<a href=" {{route('/')}} " class="btn btn-outline-primary">Homepage</a>
		</div>
	</div>
	
</div>
@endsection