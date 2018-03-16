@extends('layouts.app')

@section('content')
<div class="jumbotron text-center text-white">
	<h1 class="pt-3 pt-md-5 pt-lg-7 h2"><b>База жителів України<br>1650-1920 рр. народження</b></h1>

	<div class="pt-4 pt-md-5">
		<div class="row justify-content-sm-center">
			<div class="col col-sm-4 col-lg-2">
				<a href="#" class="btn btn-block btn-lg btn-warning">База</a>
			</div>
			<div class="col col-sm-4 col-lg-2">
				<a href="#" class="btn btn-block btn-lg btn-success">Волонтерам</a>
			</div>
		</div>
		<div class="row justify-content-sm-center pt-4">
			<div class="col col-sm-4 col-lg-2">
				<a href="#" class="btn btn-block btn-lg btn-secondary">Бібліотека</a>
			</div>
			<div class="col col-sm-4 col-lg-2">
				<a href="#" class="btn btn-block btn-lg btn-primary">Тексти</a>
			</div>
		</div>
	</div>

	<div class="container pt-5 pt-md-6">
		<div class="row">
			<div class="col col-4 text-left pb-md-4">
				<div class="h3 d-none d-sm-block"><b>3,145,548</b></div>
				<div class="h5 d-block d-sm-none"><b>3,145,548</b></div>
				<div class="text-success">Осіб в базі</div>
			</div>
			<div class="col col-4 text-center pb-md-4">
				<div class="h3 d-none d-sm-block"><b>3,145,548</b></div>
				<div class="h5 d-block d-sm-none"><b>3,145,548</b></div>
				<div class="text-success">Додано за останній місяць</div>
			</div>
			<div class="col col-4 text-right pb-md-4">
				<div class="h3 d-none d-sm-block"><b>3,145,548</b></div>
				<div class="h5 d-block d-sm-none"><b>3,145,548</b></div>
				<div class="text-success">Родоводів</div>
			</div>
		</div>
	</div>
</div>
@endsection
