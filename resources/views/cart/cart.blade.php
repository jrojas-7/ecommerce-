@extends('layouts.default')

@section('title', 'Producto')

@section('css')
	<style>
		.img-prod {
			width: 100%;
		}

		.cart {
			min-height: 60vh;
		}
	</style>

@endsection

@section('content')

	<section class="cart my-3">
		<div class="container">

			@if(session()->has('succes_msg'))
				<div class="alert alert-succes">
					{{ session()->get('succes_msg') }}
				</div>
			@endif

			@if(Cart::count() > 0)

				<h4>{{ Cart::count() }} producto(s) en el carrito</h4>
				<hr>

				@foreach(Cart::content() as $product)
				{{--	{{dd($product->model)}} --}}
					<div class="row">
						<div class="col-12 col-lg-2">
							<div class="product-img">
								<a href="{{ route('products.show', $product->model->titulo) }}">
									<img class="img-prod" src="/img/products/producto.png" alt="producto">
								</a>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="productos-lista">
								<h5><a href="{{ route('products.show', $product->model->titulo) }}">{{ $product->model->nombre }} </a></h5>

							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="settings">
								{{-- <a href="#" class="remove">Quitar</a> --}}
								<form action="{{ route('cart.destroy', $product->rowId) }}" method="post">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<input type="submit" class="btn btn-outline-dark" value="Quitar">
								</form>
								{{--<a href="#" class="save">Guardar para despues</a> --}}
							</div>
						</div>
						<div class="col-12 col-lg-1">
							<div class="price">
								<p>${{ $product->model->precio }}</p>
							</div>
						</div>
						<div class="col-12 col-lg-2">
							<div class="cant">
								<select name="" id="" class="cant">
									<option value="" selected>1</option>
									<option value="">2</option>
									<option value="">3</option>
									<option value="">4</option>
								</select>
							</div>
						</div>
					</div>
					<hr>
				@endforeach
				<div class="row">
					<div class="col-12">
						<div>
							<p>Total: $ {{ Cart::subtotal() }} </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<a class="btn px-4 py-2 rounded-pill btn-outline-dark" href="#">Pagar</a>
						<a class="btn px-4 py-2 rounded-pill btn-danger" href="{{ route('cart.destroyCart') }}">Quitar todo</a>
					</div>
				</div>
			@else

			<h5>No hay productos en el carrito</h5>
			<a href="{{ route('products.index') }}" class="btn btn-outline-warning">Ir a la tienda</a>

			@endif
		</div>
	</section>

@endsection
