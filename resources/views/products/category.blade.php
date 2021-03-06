@extends('layouts/default')

@section('title', 'Productos | '. $categoria->titulo)

@section('css')
	<link rel="stylesheet" href="/css/productos.css">
	<style>
		.activo {
			background-color: #000 !important;
		}
	</style>
@endsection

@section('content')

<main style="background-color: #ecf0f1">
			<div class="container pt-3">
				<div class="row">
					<div class="col-12 col-lg-3 mb-3">
						<ul class="nav flex-column">
							<span class="py-3 mb-2 bg-warning text-white text-center text-uppercase font-weight-bold h4 rounded">Categorias</span>

							@foreach($categories as $category)
								<li class="nav-item"><a class="pl-2 rounded nav-link bg-dark mb-1 text-white
									{{ route('products.searchCategory', $category->titulo) === request()->url() ? 'activo' : '' }}
									" href="{{ route('products.searchCategory', $category->titulo) }}">{{ $category->nombre }}</a></li>
							@endforeach

						</ul>
						<ul class="nav flex-column">
							<span class="py-2 mb-2 mt-1 bg-warning text-white text-center text-uppercase font-weight-bold h4 rounded">Precio</span>
							<li class="nav-item"><a class="pl-2 rounded nav-link bg-dark mb-1 text-white" href="{{ route('products.searchCategory', ['title' => $categoria->titulo, 'orden' => 'menor_a_mayor']) }}">Menor a mayor</a></li>
							<li class="nav-item"><a class="pl-2 rounded nav-link bg-dark mb-1 text-white" href="{{ route('products.searchCategory', ['title' => $categoria->titulo, 'orden' => 'mayor_a_menor']) }}">Mayor a menor</a></li>
						</ul>
					</div>
					<div class="col-12 col-lg-9">
						<div class="row">
							<div class="col-12">
								<h3 class="display-4" style="font-size: 30px;">{{ $categoria->nombre }}</h3>
								<hr>
							</div>

							@foreach($products as $product)

								<div class="col-12 col-md-6 col-lg-4">
									<div class="card text-center border-0 shadow-sm mb-4">
										<div class="card-img d-flex flex-wrap justify-content-center">
											<img src="{{ imgProduct($product) }}" class="card-img-top" alt="">
											<div class="enlace_carrito align-self-center py-2 px-4">
												<a class="text-white" href="#" onclick="event.preventDefault();
                        document.getElementById('cart-form').submit();">Agregar al carrito</a>

												<form action="{{ route('cart.index') }}" method="post" id="cart-form" style="display: none;">
													{{ csrf_field() }}
													<input type="hidden" name="id" value=" {{ $product->id }} ">
													<input type="hidden" name="nombre" value=" {{ $product->nombre }} ">
													<input type="hidden" name="precio" value=" {{ $product->precio }} ">
												</form>

											</div>
										</div>
										<div class="card-body">
											<h3 class="card-title">{{ $product->nombre }}</h3>
											<p class="precio">${{ $product->precio }}</p>
											<p class="card-text"><span class="text-muted stock {{ setStock($product->stock) }} "> {{ stock($product->stock) }} </span></p>
											<a class="btn btn-outline-info px-5 py-2 rounded-pill mb-2" href="{{ route('products.show', $product->id) }}">Ver más</a>
											@auth
												@if(auth()->user()->is_admin == 1)
													<a class="btn btn-outline-info px-5 py-2 rounded-pill" href="{{ route('products.edit', $product->id) }}">Editar</a>
												@endif
											@endauth
										</div>
									</div>
								</div>

							@endforeach


							<div class="col">
								{{ $products->appends(request()->input())->links() }}
							</div>

						</div>
					</div>
				</div>
			</div>
		</main>
@endsection
