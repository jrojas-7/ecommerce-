@extends('layouts/default')

@section('title', 'Inicio')

@section('css')
	<link rel="stylesheet" href="/css/estilos.css">
@endsection

@section('content')
	<main>
			<section class="presentacion d-flex align-items-center">
				<div class="container">
					<div class="d-flex flex-column flex-wrap justify-content-center align-items-center text-light">
						<h1 class="display-1">Bienvenidos</h1>
						<p class="lead text-center">
							En <span>Ecommerce</span> encontrarás todo lo que necesitás para tu hogar al mejor precio.
						</p>
						<p class="lead text-center">Muebles de oficina, jardineria, articulos de limpieza, camas, sillones y más.</p>
					</div>
				</div>
			</section>
			<section class="nosotros">
				<div class="container">
					<div class="row">
						<div class="col-12 mb-3">
							<h2 class="text-center">Nos aseguramos de satisfacer y dar confiabilidad a nuestros clientes a traves de: </h2>
						</div>
						<div class="col-12 col-md-6 col-lg-3 d-flex flex-wrap justify-content-center">
							<div class="box text-center mb-3">
								<div class="ilustracion mb-2">
									<i class="fas fa-truck"></i>
								</div>
								<div class="desc">
									<p>Un servicio de logística más económico</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-3 d-flex flex-wrap justify-content-center">
							<div class="box text-center mb-3">
								<div class="ilustracion mb-2">
									<i class="fas fa-lock"></i>
								</div>
								<div class="desc">
									<p>Compra fácil y segura</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-3 d-flex flex-wrap justify-content-center">
							<div class="box text-center mb-3">
								<div class="ilustracion mb-2">
									<i class="fas fa-user-shield"></i>
								</div>
								<div class="desc">
									<p>La mejor y más confiable garantia</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-3 d-flex flex-wrap justify-content-center">
							<div class="box text-center mb-3">
								<div class="ilustracion mb-2">
									<i class="fas fa-piggy-bank"></i>
								</div>
								<div class="desc">
									<p>Ahorro con nuestras super ofertas</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="productos pt-3">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2 class="text-center">Algunos de nuestros mejores productos</h2>
						</div>

						<!-- Slider lg-->
						<div class="col-12 mb-5 d-none d-lg-block">
							<div id="slide" class="carousel slide" data-ride="carousel">
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <div class="row">

									{{--	@foreach($productos as $producto)
											<div class="col-lg-4">
												<article class="card text-center">
													<a href=" {{ route('products.show', $producto->titulo) }} ">
														<img src="/img/products/producto.png" class="card-img-top" alt="">
													</a>
													<div class="card-header border-bottom-0">
														<a href=" {{ route('products.show', $producto->titulo) }} ">
															<h3 class="card-title">{{ $producto->nombre }} </h3>
														</a>
													</div>
													<div class="card-body">

														<div class="precio">
															<p>${{ $producto->precio }} </p>
															<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
														</div>
													</div>
												</article>
											</div>
										@endforeach --}}

										<div class="col-lg-4">
										 <article class="card text-center">
									 <img src="img/mueble1.jpg" class="card-img-top" alt="">
									 <div class="card-header border-bottom-0">
										 <h3 class="card-title">Mueble vintage</h3>
									 </div>
									 <div class="card-body">

										 <div class="precio">
											 <p>$999</p>
											 <a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
										 </div>
									 </div>
								 </article>
									 </div>

							      	 <div class="col-lg-4">
							      		<article class="card text-center">
											<img src="img/cama2.webp" class="card-img-top" alt="">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Colchon Topper</h3>
											</div>
											<div class="card-body">

												<div class="precio">
													<p>$999</p>
													<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
												</div>
											</div>
										</article>
							      	</div>
							      	<div class="col-lg-4">
							      		<article class="card text-center">
											<img src="img/sofa2.webp" class="card-img-top" alt="">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Protector de sofá</h3>
											</div>
											<div class="card-body">

												<div class="precio">
													<p>$999</p>
													<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
												</div>
											</div>
										</article>
							      	</div>

							      </div>
							    </div>
							    <div class="carousel-item">
							      <div class="row">
							      	<div class="col-lg-4">
							      		<article class="card text-center">
											<img src="img/cama1.webp" class="card-img-top" alt="">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Protector de colchón</h3>
											</div>
											<div class="card-body">

												<div class="precio">
													<p>$999</p>
													<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
												</div>
											</div>
										</article>
							      	</div>
							      	<div class="col-lg-4">
							      		<article class="card text-center">
											<img src="img/bano1.webp" class="card-img-top" alt="">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Trapero giratorio</h3>
											</div>
											<div class="card-body">

												<div class="precio">
													<p>$999</p>
													<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
												</div>
											</div>
										</article>
							      	</div>
							      	<div class="col-lg-4">
							      		<article class="card text-center">
											<img src="img/plancha.webp" class="card-img-top" alt="">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Plancha a vapor</h3>
											</div>
											<div class="card-body">

												<div class="precio">
													<p>$999</p>
													<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
												</div>
											</div>
										</article>
							      	</div>
							      </div>
							    </div>
							  </div>
							  <ol class="carousel-indicators">
				                <li data-target="#slide" data-slide-to="0" class="active rounded-circle"></li>
				                <li data-target="#slide" data-slide-to="1"></li>
				              </ol>
							</div>
						</div>

						<!-- Slider /lg -->

						<!-- Slider md -->

						<div class="col-12 mb-5 d-none d-md-block d-lg-none">
							<div id="slide2" class="carousel slide" data-ride="carousel">
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <div class="row">
							      	<div class="col-md-6">
							      		<article class="card text-center">
											<img src="img/silla1.jpeg" class="card-img-top" alt="">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Titulo del producto</h3>
											</div>
											<div class="card-body">

												<div class="precio">
													<p>$999</p>
													<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
												</div>
											</div>
										</article>
							      	</div>
							      	<div class="col-md-6">
							      		<article class="card text-center">
											<img src="img/silla1.jpeg" class="card-img-top" alt="">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Titulo del producto</h3>
											</div>
											<div class="card-body">

												<div class="precio">
													<p>$999</p>
													<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
												</div>
											</div>
										</article>
							      	</div>
							      </div>
							    </div>
							    <div class="carousel-item">
							      <div class="row">
							      	<div class="col-md-6">
							      		<article class="card text-center">
											<img src="img/silla1.jpeg" class="card-img-top" alt="">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Titulo del producto</h3>
											</div>
											<div class="card-body">

												<div class="precio">
													<p>$999</p>
													<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
												</div>
											</div>
										</article>
							      	</div>
							      	<div class="col-md-6">
							      		<article class="card text-center">
											<img src="img/silla1.jpeg" class="card-img-top" alt="">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Titulo del producto</h3>
											</div>
											<div class="card-body">

												<div class="precio">
													<p>$999</p>
													<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
												</div>
											</div>
										</article>
							      	</div>
							      </div>
							    </div>
							    <div class="carousel-item">
							      <div class="row">
							      	<div class="col-md-6">
							      		<article class="card text-center">
											<img src="img/silla1.jpeg" class="card-img-top" alt="">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Titulo del producto</h3>
											</div>
											<div class="card-body">

												<div class="precio">
													<p>$999</p>
													<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
												</div>
											</div>
										</article>
							      	</div>
							      	<div class="col-md-6">
							      		<article class="card text-center">
											<img src="img/silla1.jpeg" class="card-img-top" alt="">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Titulo del producto</h3>
											</div>
											<div class="card-body">

												<div class="precio">
													<p>$999</p>
													<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
												</div>
											</div>
										</article>
							      	</div>
							      </div>
							    </div>
							  </div>
							  <ol class="carousel-indicators">
				                <li data-target="#slide2" data-slide-to="0" class="active"></li>
				                <li data-target="#slide2" data-slide-to="1"></li>
				                <li data-target="#slide2" data-slide-to="2"></li>
				              </ol>
							</div>
						</div>

						<!-- Slider /md -->

						<!-- Slider xs -->

						<div class="col-12 mb-5 d-md-none">
							<div id="slide3" class="carousel slide" data-ride="carousel">
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <div class="row">
							      	<div class="col-12">
							      		<article class="card text-center">
											<img src="img/silla1.jpeg" class="card-img-top" alt="">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Titulo del producto</h3>
											</div>
											<div class="card-body">
												<p class="card-text">Breve descripción</p>
												<div class="precio">
													<p>$999</p>
													<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
												</div>
											</div>
										</article>
							      	</div>
							      </div>
							    </div>
							    <div class="carousel-item">
							      <div class="row">
							      	<div class="col-12">
							      		<article class="card text-center">
											<img src="img/silla1.jpeg" class="card-img-top" alt="">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Titulo del producto</h3>
											</div>
											<div class="card-body">
												<p class="card-text">Breve descripción</p>
												<div class="precio">
													<p>$999</p>
													<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
												</div>
											</div>
										</article>
							      	</div>
							      </div>
							    </div>
								<div class="carousel-item">
							      <div class="row">
							      	<div class="col-12">
							      		<article class="card text-center">
											<img src="img/silla1.jpeg" class="card-img-top" alt="">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Titulo del producto</h3>
											</div>
											<div class="card-body">
												<p class="card-text">Breve descripción</p>
												<div class="precio">
													<p>$999</p>
													<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
												</div>
											</div>
										</article>
							      	</div>
							      </div>
							    </div>
							    <div class="carousel-item">
							      <div class="row">
							      	<div class="col-12">
							      		<article class="card text-center">
											<img src="img/silla1.jpeg" class="card-img-top" alt="">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Titulo del producto</h3>
											</div>
											<div class="card-body">
												<p class="card-text">Breve descripción</p>
												<div class="precio">
													<p>$999</p>
													<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
												</div>
											</div>
										</article>
							      	</div>
							      </div>
							    </div>
							    <div class="carousel-item">
							      <div class="row">
							      	<div class="col-12">
							      		<article class="card text-center">
											<img src="img/silla1.jpeg" class="card-img-top" alt="">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Titulo del producto</h3>
											</div>
											<div class="card-body">
												<p class="card-text">Breve descripción</p>
												<div class="precio">
													<p>$999</p>
													<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
												</div>
											</div>
										</article>
							      	</div>
							      </div>
							    </div>
							    <div class="carousel-item">
							      <div class="row">
							      	<div class="col-12">
							      		<article class="card text-center">
											<img src="img/silla1.jpeg" class="card-img-top" alt="">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Titulo del producto</h3>
											</div>
											<div class="card-body">
												<p class="card-text">Breve descripción</p>
												<div class="precio">
													<p>$999</p>
													<a class="btn px-5 py-2 rounded-pill" href="#">Sumar al carrito</a>
												</div>
											</div>
										</article>
							      	</div>
							      </div>
							    </div>
								 <ol class="carousel-indicators">
					                <li data-target="#slide3" data-slide-to="0" class="active"></li>
					                <li data-target="#slide3" data-slide-to="1"></li>
					                <li data-target="#slide3" data-slide-to="2"></li>
					                <li data-target="#slide3" data-slide-to="3"></li>
					                <li data-target="#slide3" data-slide-to="4"></li>
					                <li data-target="#slide3" data-slide-to="5"></li>
					             </ol>

							  </div>
							</div>

							</div>
						</div>

						<!-- Slider /xs -->

					</div>
				</div>
			</section>
		</main>
	}
@endsection
