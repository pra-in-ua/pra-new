@extends('layouts.resources')

@section('app')
<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
	<div class="container">
		<a class="navbar-brand" href="#">Pra.in.ua</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Головна <span class="sr-only">(Поточна сторінка)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Про проект</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Пошук по базі</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Волонтерам</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Контакти</a>
				</li>
			</ul>

			<a href="#" class="btn btn-sm btn-outline-success mr-1">Підтримати проект</a>
			<a href="#" class="btn btn-sm btn-outline-warning">Увійти</a>
		</div>
	</div>
</nav>

@yield('content')

@endsection
