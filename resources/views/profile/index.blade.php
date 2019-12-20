@extends('layouts/default')

@section('title', 'Mi perfil')

@section('css')
	<link rel="stylesheet" href="/css/perfil.css">
@endsection

@section('content')
<main>
			<section class="pefil py-3" style="background-color: #ecf0f1">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<div class="foto">
								<img class="w-25 border" src="{{ imgProfile(Auth::user()) }}" alt="perfil" style="background-color: white">
							</div>
							<div class="info">
								<h4>
									<span>{{ Auth::user()->nombreCompleto() }}</span>
								</h4>
							</div>
						</div>
						<div class="col-12 text-center">
							<ul class="nav flex-column">
								<li class="nav-item"><a class="nav-link" href="{{ route('profile.edit')}} ">Configuración de cuenta</a></li>
								<li class="nav-item"><a class="nav-link" href="">Ayuda</a></li>
								<li class="nav-item">
									<a class="nav-link" href="#carrito" data-toggle="collapse">Carrito</a>
									<div class="collapse mb-3" id="carrito">
										<h4>Detalles de la compra</h4>
										<hr>
										<div class="productos-lista">
											<div class="imagen-producto">
												<img class="img-prod" src="img/cajon1.jpg" alt="producto">
											</div>
											<h5>Nombre de producto</h5>
											<p>$999</p>
											<p>Total: $999</p>
											<a class="btn px-4 py-2 rounded-pill" href="#">Pagar</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</main>
@endsection