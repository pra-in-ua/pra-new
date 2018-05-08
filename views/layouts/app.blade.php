@extends('layouts.resources')

@section('app')
<nav class="navbar fixed-top navbar-expand-lg navbar-dark js-transparent-default" id="mainNavWrapper">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img src="/assets/images/global/logo.png" width="80" alt="">
		</a>

		<div class="ml-auto mr-4 d-xs-block d-lg-none">
			<a href="#" class="btn btn-sm btn-outline-success btn-outline-has-bg text-white mr-3"><i class="fas fa-life-ring"></i> <span class="d-none d-sm-inline">Підтримати проект</span></a>
			<a href="#" class="btn btn-sm btn-outline-warning btn-outline-has-bg text-white"><i class="fas fa-sign-in-alt"></i> Увійти</a>
		</div>

		<button class="btn btn-sm btn-outline-primary btn-outline-has-bg d-xs-block d-lg-none" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="mainNav">
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

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img class="img-fluid rounded-circle border-double mr-2" width="35" src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-1/p320x320/13096311_1032160293520192_4640577965936816502_n.jpg?_nc_cat=0&oh=eec7b035e2bdc95ca3d56b19258412b5&oe=5B2CE810" alt="">
						Ярослав
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#"><small><i class="fas fa-user-circle"></i> Профіль</small></a>
						<a class="dropdown-item" href="#"><small><i class="fas fa-wrench"></i> Налаштування</small></a>
						<a class="dropdown-item" href="#"><small><i class="fas fa-lock-open text-warning"></i> PRO-Аккаунт</small></a>
						<a class="dropdown-item" href="#"><small><i class="fas fa-at"></i> Мої інтереси</small></a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><small><i class="fas fa-sign-out-alt"></i> Вийти</small></a>
					</div>
				</li>
			</ul>

			{{-- <div class="ml-4 d-none d-lg-block">
				<a href="#" class="btn btn-sm btn-outline-success btn-outline-has-bg text-white mr-3">Підтримати проект</a>
				<a href="#" class="btn btn-sm btn-outline-warning btn-outline-has-bg text-white">Увійти</a>
			</div> --}}
		</div>
	</div>
</nav>

@yield('content')

<div class="clearfix"></div>

<footer class="bg-dark footer ">
	<div class="navbar navbar-expand-sm navbar-dark">
		<div class="container">
			<a class="navbar-brand d-none d-lg-inline" href="#">
				<img src="/assets/images/global/logo-footer.png" width="113" alt="">
			</a>
			<ul class="navbar-nav pr-auto d-none d-lg-flex">
				<li class="nav-item active">
					<a class="nav-link" href="#">Про нас <span class="sr-only">(Поточна сторінка)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Контакти</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Правила</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Бібліотека</a>
				</li>
			</ul>

			<div class="ml-auto mr-auto mr-lg-0 pt-2 pt-lg-1">
				<a href="https://runsite.com.ua" target="_blank" class="btn btn-sm btn-outline-primary btn-outline-has-bg text-white">Розробка: ТОВ Рансайт</a>
			</div>
		</div>
	</div>
</footer>

@endsection
