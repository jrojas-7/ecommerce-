@extends('layouts.default')

@section('title', 'Agregar producto')

@section('css')


@endsection

@section('content')

	<section class="formulario">
		<div class="container">
			<div class="row">
				<div class="col col-lg-6">
					<div class="imagen-box">
						<img class="w-25 border foto" src="{{ imgProduct($product) }}" alt="imagen" style="background-color: white">
					</div>
				</div>
				<div class="col col-lg-6">
					<div class="form-box">
						<form action="{{ route('products.create') }}" method="POST" enctype="multipart/form-data">

							@include('products._form')

						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection