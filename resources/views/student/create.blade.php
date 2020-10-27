@extends('layout.master')

@section('content')
<h2 class="text-center">Add New Student</h2>
<div class="container">
	<form action="{{ Route('student.store') }}" class="col-md-6 m-auto" method="post" >
		@csrf
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" name="name" id="name">
		</div>
		<div class="form-group">
			<label for="roll">Roll</label>
			<input type="text" class="form-control" name="roll" id = "roll">
		</div>
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" class="form-control" name="address" id = "address">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" name ="submit" value="add">
		</div>
	</form>


</div>

@endsection
