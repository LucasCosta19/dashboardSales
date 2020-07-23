<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  media="screen,projection"/>

	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	@include('admin/layout._includes.css')

	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" type="text/javascript"></script>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<header>
		<nav>
			<div class="nav-wrapper cyan darken-4">
				<a href="#!" class="brand-logo">&nbsp;&nbsp;Dashboard</a>
				<a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="{{ route('admin.home') }}">Home</a></li>
					<li><a href="{{ route('admin.products') }}">Produtos</a></li>
					<li><a href="badges.html">Vendas</a></li>
					<li><a href="{{ route('admin.users') }}">Usuários</a></li>

					<li><a href="badges.html" title="Notificações"><i class="material-icons">notifications</i></a></li>

					<li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons left">account_circle</i>{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
				</ul>
			</div>
		</nav>

		<ul class="sidenav" id="mobile">
			<li><a href="{{ route('admin.home') }}">Home</a></li>
			<li><a href="{{ route('admin.products') }}">Produtos</a></li>
			<li><a href="badges.html">Vendas</a></li>
			<li><a href="{{ route('admin.users') }}">Usuários</a></li>

			<li><a href="badges.html"><i class="material-icons">notifications</i> Notificações</a></li>
			
			<li><a class="dropdown-trigger" href="#!" data-target="dropdown2"><i class="material-icons left">account_circle</i>{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
		</ul>

		<ul id="dropdown1" class="dropdown-content">
			<li><a href="sass.html">Perfil</a></li>
			<li><a href="sass.html">Alterar Senha</a></li>
			<li><a href="{{route('site.login.logout')}}">Sair</a></li>
		</ul>

		<ul id="dropdown2" class="dropdown-content">
			<li><a href="sass.html">Perfil</a></li>
			<li><a href="sass.html">Alterar Senha</a></li>
			<li><a href="{{route('site.login.logout')}}">Sair</a></li>
		</ul>		
	</header>