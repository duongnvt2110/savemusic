<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{asset('')}}">
	<meta charset="UTF-8">
	<title>login</title>
	<link type="text/css" rel="stylesheet" href="fpshop/admin/template/css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="fpshop/admin/template/css/font-awesome.css">
	<link type="text/css" rel="stylesheet" href="fpshop/admin/template/css/mycss.css">
	<script type="text/javascript" src="fpshop/admin/template/js/bootstrap.js"></script>
</head>
<body>
	
	<fieldset>
		<legend>Login</legend> 
	{{-- <form method="POST" action="{{route('admin')}}" id="form-login"> --}}
		{!!Form::open(array('action' =>'AdminController@adminLogin','id'=>'form-login'))!!}
		<div class="form-group">
			<label for="exampleInputEmail1">Username</label>
			<input type="text" name="txtname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" name="txtpass" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<div class='submit'>
			<input type="submit" value='Đăng Nhập' class="btn btn-primary">
		</div>
		<div class='message'>
			
		</div>
	{{-- </form> --}}
	{!!Form::close()!!}
	</fieldset>
</body>
</html>