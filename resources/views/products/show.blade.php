@extends('layouts.default')

@section('title', $product->titulo)

@section('css')


@endsection

@section('content')

	<section class="product">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6">
					<div class="product-img">
						<img src="/img/products/producto.png" alt="product">
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="product-content">
						<h3>{{ $product->nombre }}</h3>
						<h5> {{ stock($product->stock) }} </h5>
						<h2>{{ $product->precio }}</h2>
						<p>
							{{ $product->descripcion }}
						</p>
						{{-- <a href="#">Añadir al carrito</a> --}}
						<form action=" {{ route('cart.index') }} " method="post">
							{{ csrf_field() }}
							<input type="hidden" name="id" value=" {{ $product->id }} ">
							<input type="hidden" name="nombre" value=" {{ $product->nombre }} ">
							<input type="hidden" name="precio" value=" {{ $product->precio }} ">
							<input type="submit" class="btn btn-outline-danger" value="Añadir al carrito">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection