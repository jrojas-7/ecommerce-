@extends('layouts.default')

@section('title', $product->titulo)

@section('css')
	<style>
	.stock {
		color: #5cb85c !important;
		font-weight: bold;
	}

	.poco-stock {
		color: #f0ad4e !important;
		font-weight: bold;
	}

	.sin-stock {
		color: #d9534f !important;
		font-weight: bold;
	}
	</style>
@endsection

@section('content')

	<section class="product my-5">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6">
					<div class="product-img">
						<img src="/img/products/producto.png" alt="product">
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="product-content">
						<h3 class="display-1">{{ $product->nombre }}</h3>
						<h5 class="{{ setStock($product->stock) }}"> {{ stock($product->stock) }} </h5>
						<h2>${{ $product->precio }}</h2>
						<p>
							{{ $product->descripcion }}
						</p>
						{{-- <a href="#">Añadir al carrito</a> --}}
						<form action=" {{ route('cart.index') }} " method="post">
							{{ csrf_field() }}
							<input type="hidden" name="id" value=" {{ $product->id }} ">
							<input type="hidden" name="nombre" value=" {{ $product->nombre }} ">
							<input type="hidden" name="precio" value=" {{ $product->precio }} ">
							@if(stock($product->stock) === 'Sin stock')
							@else
							<input type="submit" class="btn btn-outline-danger" value="Añadir al carrito">
						@endif
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
