@extends('layouts.resources')

@section('app')
<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img src="/assets/images/global/logo.png" width="80" alt="">
		</a>

		<div class="ml-auto mr-4 d-xs-block d-lg-none">
			<a href="#" class="btn btn-sm btn-outline-success btn-outline-has-bg text-white mr-3"><i class="fas fa-life-ring"></i> <span class="d-none d-sm-inline">Підтримати проект</span></a>
			<a href="#" class="btn btn-sm btn-outline-warning btn-outline-has-bg text-white"><i class="fas fa-sign-in-alt"></i> Увійти</a>
		</div>

		<button class="btn btn-sm btn-outline-primary btn-outline-has-bg d-xs-block d-lg-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto pt-5 pt-lg-0 pb-5 pb-lg-0">
				<li class="nav-item pt-1 pb-1 pt-lg-0 pb-lg-0 active">
					<a class="nav-link" href="#">Головна <span class="sr-only">(Поточна сторінка)</span></a>
				</li>
				<li class="nav-item pt-1 pb-1 pt-lg-0 pb-lg-0">
					<a class="nav-link" href="#">Про проект</a>
				</li>
				<li class="nav-item pt-1 pb-1 pt-lg-0 pb-lg-0">
					<a class="nav-link" href="#">Пошук по базі</a>
				</li>
				<li class="nav-item pt-1 pb-1 pt-lg-0 pb-lg-0">
					<a class="nav-link" href="#">Волонтерам</a>
				</li>
				<li class="nav-item pt-1 pb-1 pt-lg-0 pb-lg-0">
					<a class="nav-link" href="#">Контакти</a>
				</li>
			</ul>

			<div class="ml-4 d-none d-lg-block">
				<a href="#" class="btn btn-sm btn-outline-success btn-outline-has-bg text-white mr-3">Підтримати проект</a>
				<a href="#" class="btn btn-sm btn-outline-warning btn-outline-has-bg text-white">Увійти</a>
			</div>
		</div>
	</div>
</nav>

@yield('content')

@endsection
