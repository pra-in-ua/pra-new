@extends('layouts.app')

@section('content')
<div class="jumbotron text-center text-white">
	<h1 class="pt-7 h2"><b>База жителів України<br>1650-1920 рр. народження</b></h1>

	<div class="pt-5">
		<div class="row justify-content-md-center">
			<div class="col col-md-3 col-lg-2">
				<a href="#" class="btn btn-block btn-lg btn-warning">База</a>
			</div>
			<div class="col col-md-3 col-lg-2">
				<a href="#" class="btn btn-block btn-lg btn-success">Волонтерам</a>
			</div>
		</div>
		<div class="row justify-content-md-center pt-4">
			<div class="col col-md-3 col-lg-2">
				<a href="#" class="btn btn-block btn-lg btn-secondary">Бібліотека</a>
			</div>
			<div class="col col-md-3 col-lg-2">
				<a href="#" class="btn btn-block btn-lg btn-primary">Тексти</a>
			</div>
		</div>
	</div>

	<div class="container pt-6">
		<div class="row">
			<div class="col-sm-4 text-sm-left pb-4">
				<div class="h3"><b>3,145,548</b></div>
				<div class="text-success">Осіб в базі</div>
			</div>
			<div class="col-sm-4 text-sm-center pb-4">
				<div class="h3"><b>3,145,548</b></div>
				<div class="text-success">Додано за останній місяць</div>
			</div>
			<div class="col-sm-4 text-sm-right pb-4">
				<div class="h3"><b>3,145,548</b></div>
				<div class="text-success">Родоводів</div>
			</div>
		</div>
	</div>
</div>
@endsection
