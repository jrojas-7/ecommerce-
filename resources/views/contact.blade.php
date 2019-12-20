@extends('layouts/default')

@section('title', 'Contacto')

@section('css')
	<link rel="stylesheet" href="/css/contacto.css">
@endsection

@section('content')
<main>
		<section class="titulo">
			<div class="container">
				<div class="caja-titulo">
					<h1>CONTACTO</h1>
				</div>
			</div>
		</section>


		<section class="contacto pt-3">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-5">
						<div class="info">
							<h2 class="font-weight-bold">Información</h2>
							<hr>
							<div class="direccion">
								<div>
									<i class="d-inline-block fas fa-home pr-1"></i>
									<h3 class="d-inline-block">Dirección</h3>
								</div>
								<p>Av. Santa Fe 4815</p>
								<p>Ciudad Autonoma de Buenos Aires</p>
								<p>Tel: 4869-6811</p>
							</div>
							<div class="email">
								<div>
									<i class="d-inline-block fas fa-envelope pr-1"></i>
									<h3 class="d-inline-block">Email</h3>
								</div>	
								<p><a href="#">soporte@korbax.com.ar</a></p>
							</div>
							<div class="atencion">
								<div>
									<i class="d-inline-block fas fa-user-friends pr-1"></i>
									<h3 class="d-inline-block">Atención</h3>
								</div>
								<p>Lunes a Viernes de 10:30 a 20:00hs</p>
								<p>Sabados de 10:30 a 14:00hs</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-7">
						<div class="formulario">  
							<form id="contact" action="{{ route('contact') }}" method="post">
								{{csrf_field()}}
								<h2 class="font-weight-bold text-center">Dejenos su consulta!</h2>
								<div class="form-item">
									<label for="nombre">Nombre</label>
									<input placeholder="Ingrese su nombre" type="text" id="nombre" required>
								</div class="form-item">
								<div class="form-item">
									<label for="apellido">Apellido</label>
									<input placeholder="Ingrese su apellido" type="text" id="apellido" required>
								</div class="form-item">
								<div class="form-item">
									<label for="email">Email</label>							    
									<input placeholder="Ingrese su email" type="email" id="email" required>
								</div class="form-item">
								<div class="form-item">
									<label for="tel">Teléfono</label>
									<input placeholder="Ingrese su número de telefono" type="tel" id="tel" required>
								</div class="form-item">
									<div class="form-item">
									<label for="msj">Mensaje</label>
									<textarea class="" placeholder="Escriba su mensaje acá" id="msj" required></textarea>
								</div class="form-item">
								<div class="form-item">
									<button type="submit" class="btn px-5 py-2 rounded-pill">Enviar</button>
								</div class="form-item">
							<!-- <div class="form-item">
								<button type="reset" class="btn px-5 py-2 rounded-pill">Reinicar</button>
							</div class="form-item"> -->
							</form>
						</div>
					</div>
				</div>
			</div>


			
		</section>
	</main>
@endsection