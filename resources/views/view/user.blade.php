@if(Session::has('user'))
<!DOCTYPE html>
<html>
<head>
	<title>SaveMusic</title>
	<base href="{{asset('')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	{{-- File Css --}}

	<link rel="stylesheet" type="text/css"  href="source/css/user.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/flick/jquery-ui.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	{{-- File JS --}}
	{{-- <script type="text/javascript"  src="source/js/jquery-3.2.1.min.js" ></script> --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
	<script
	src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
	integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
	crossorigin="anonymous"></script>
	<script type="text/javascript" src='https://www.youtube.com/iframe_api'></script>
	<script type="text/javascript"  src="source/js/savemusic.js" ></script>
	<script type="text/javascript"  src="source/js/jquery-ui.min.js" ></script>
	
	{{-- <script stype="text/javascript" src="source/js/jquery-ui.js""></script> --}}
	<script src="https://use.fontawesome.com/9325ad171d.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	{{-- script YT --}}
	
</head>
<body>
	<div class="header navbar navbar-light">
		<div class="icon navbar-left  navbar-nav">
			<a href="#" class="image-logo">
				<i class="fas fa-headphones fa-2x"></i>
			</a>
		</div>     
		<div class="user-logo navbar-right">
			<span class=""></span>
		</div>     
	</div>
	<div id="player"></div>
	<div class="content">
		<section class="playlists" id="">
			<h2 class="font-thin m-b">Playlists</h2>
			<div class="row row-sm">
				<div class="col-sm-2 ">
					<div class="item">
						<div class="bottom">{{-- <span class="badge bg-info m-l-sm m-b-sm"></span>  time --}}</div>
						<div class="item-overlay opacity r r-2x bg-black">
							<div class="center text-center m-t-n">
								<a href="#" class='logo-play'>
									<i class="fas fa-play fa-2x"></i>
								</a>
							</div>
						</div>
						<a href="#">
							<img src="source/image/p1.jpg" alt="" class="r r-2x img-full">
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class='playcontrol navbar-light'>
		<div class='row'>
			<ul class='elements'>
				<li class='control col-sm-2'>
					<ul class='control-btn '>
						<li id='control-icon' class="play-step-backward">
							<i class="fas fa-step-backward fa-2x" aria-hidden="true"></i>
						</li>
						<li id='control-icon' class="control-play" style="display:block;">
							<i class="fas fa-play fa-2x" "></i>
						</li>
						<li id='control-icon' class="control-pause" style="display:none">
							<i class="fas fa-pause fa-2x" ></i>
						</li>
						<li id='control-icon' class="play-step-forward" style="left">
							<i class="fas fa-step-forward fa-2x" aria-hidden="true"></i>
						</li>
					</ul>
				</li>
				<li class='time-line col-sm-6'>
					<ul class='control-time-line'>
						<li class='start col-sm-1'>0:00</li>
						<li class='time-bar col-sm-10'></li>
						<li class='end col-sm-1'>0:00</li>
					</ul>
				</li>
				<li class='volume col-sm-2'>
					<ul class='control-volume'>
						<li class='icon-volume col-sm-3'>
							<i class="fas fa-volume-up fa-lg"></i>
						</li>
						<li class='volume-bar col-sm-'>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		
	</div>
</div>
</body>
</html>
@endif