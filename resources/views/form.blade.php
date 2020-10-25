<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div class="container">
		

		<form class="col-md-6 mt-5" method="post" action='store'>
			@csrf
			<div class="form-group">
				<input type="text" name="username"class = "form-control" placeholder="username">
				<span class="text-danger">@error('username')  {{ $message }}   @enderror</span>
			</div>
			<div class="form-group">
				<input type="password" name="pass"class = "form-control" placeholder="password">
				<span class="text-danger">@error('pass') {{ $message}} @enderror</span>
			</div>
			<div class="form-group">
				<input type="submit" name="submit"class = "btn btn-primary">
				
			</div>
		</form>
	</div>



	<script type="text/javascript" src = "{{ asset('js/app.js') }}"></script>
</body>
</html>