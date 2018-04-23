<!DOCTYPE html>
<html>
<head>
	<title>SaveMusic</title>
	<base href="{{asset('')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	{{-- File Css --}}
	<link rel="stylesheet" type="text/css"  href="source/css/custom.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	{{-- File JS --}}
	<script type="text/javascript"  src="source/js/jquery-3.2.1.min.js" ></script>
	<script type="text/javascript"  src="source/js/js.js" ></script>
	<script stype="text/javascript" src="source/js/jquery-ui.js""></script>
	<script src="https://use.fontawesome.com/9325ad171d.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class='header'>
		<div class='container'>
			<div class='logo'>
				<a href="">SaveMusic</a>
			</div>
			<div class='contain'>
				<a href="{{route('login')}}" class="btn btn-primary">Login</a>
				<a href="#" class="btn btn-primary">SignUp</a>
			</div>
		</div>
	</div>
</body>
</html>