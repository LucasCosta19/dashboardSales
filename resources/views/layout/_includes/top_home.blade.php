<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  media="screen,projection"/>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<header>
		<nav>
			<div class="nav-wrapper cyan darken-4">
				<a href="#" class="brand-logo">&nbsp;&nbsp;Dashboard</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="{{route('site.login')}}">Login</a></li>
				</ul>
			</div>
		</nav>
	</header>