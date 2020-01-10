@extends('layouts.default')

@section('title', 'Editar producto')

@section('css')
	<style>
	.product-img {
		width: 100%;
	}
	</style>
@endsection

@section('content')

	<section class="formulario">
		<div class="container">
			<div class="row">
				<div class="col col-lg-6">
					<div>
						<img class="product-img{{-- w-25 border foto --}}" src="{{ imgProduct($product) }}" alt="imagen" style="background-color: white">
					</div>
				</div>
				<div class="col col-lg-6">
					<div class="form-box">
						<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
							{{ method_field('PATCH') }}

							@include('products._form')

						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection