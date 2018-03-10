@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
	<h1>База жителів України<br>1650-1920 рр. народження</h1>

	<div class="pt-5">
		<div class="row justify-content-md-center">
			<div class="col col-lg-2">
				<a href="#" class="btn btn-block btn-warning">База</a>
			</div>
			<div class="col col-lg-2">
				<a href="#" class="btn btn-block btn-info">Волонтерам</a>
			</div>
		</div>
		<div class="row justify-content-md-center">
			<div class="col col-lg-2">
				<a href="#" class="btn btn-block btn-secondary">Бібліотека</a>
			</div>
			<div class="col col-lg-2">
				<a href="#" class="btn btn-block btn-primary">Тексти</a>
			</div>
		</div>
	</div>

	<div class="container pt-5">
		<div class="row">
			<div class="col-sm-4 text-sm-left">
				<div class="h3"><b>3,145,548</b></div>
				<div class="text-green">Осіб в базі</div>
			</div>
			<div class="col-sm-4 text-sm-center">
				<div class="h3"><b>3,145,548</b></div>
				<div class="text-green">Додано за останній місяць</div>
			</div>
			<div class="col-sm-4 text-sm-right">
				<div class="h3"><b>3,145,548</b></div>
				<div class="text-green">Родоводів</div>
			</div>
		</div>
	</div>
</div>
@endsection
