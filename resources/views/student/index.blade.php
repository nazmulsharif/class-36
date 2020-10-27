@extends('layout.master')
@section('content')
	
	<div class="container">
		<h2 class="text-center">Student Information</h2>
		<table class="table table-bordered">
			<tr>
				<th>Sl</th>
				<th>Name</th>
				<th>Roll</th>
				<th>Address</th>
				<th>Action</th>
			</tr>
		
	</div>
	@php $i =1 ;@endphp
	@foreach($students as $student)
		<tr>
			<td>{{ $i++ }}</td>
			<td>{{ $student->name}}</td>
			<td>{{ $student->roll}}</td>
			<td>{{ $student->address}}</td>
			<td>
				<a href="" class="btn btn-primary">edit</a>
				<a href="" class="btn btn-danger">delete</a>
			</td>
		</tr>
		
		
		

	@endforeach

	</table>

@endsection
