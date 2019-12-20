@extends('layouts/default')

@section('title', 'F.A.Q.')

@section('css')
	<link rel="stylesheet" href="/css/faq.css">
@endsection

@section('content')
<main>
			<section class="titulo">
				<div class="container">
					<div class="caja-titulo">
						<h1>PREGUNTAS FRECUENTES</h1>
					</div>
				</div>
			</section>


			<section class="preguntas">
				<div class="container">
					<div class="accordion" id="accordionPreguntas">
					  <div class="card border-0">
					    <div class="card-header bg-transparent border-0 px-0" id="preguntaUno">
					      <h2 class="mb-0">
					        <button class="btn btn-link text-dark text-decoration-none pl-0 pb-0 mb-2" type="button" data-toggle="collapse" data-target="#pregunta1" aria-expanded="true" aria-controls="pregunta1">
					          ¿Cómo consulto stock?
					        </button>
					      </h2>
					    </div>

					    <div id="pregunta1" class="collapse" aria-labelledby="preguntaUno" data-parent="#accordionPreguntas">
					      <div class="card-body px-0 pt-0 text-secondary">
					        Los productos en nuestra página web tienen stock en tiempo real, esto quiere decir que si el producto tiene la palabra "Stock" se podrá hacer la compra online, aplica lo mismo para los que tienen "Poco Stock".
					      </div>
					    </div>
					  </div>
					  <div class="card border-0">
					    <div class="card-header bg-transparent border-0 px-0" id="preguntaDos">
					      <h2 class="mb-0">
					        <button class="btn btn-link text-dark text-decoration-none pl-0 pb-0 mb-2" type="button" data-toggle="collapse" data-target="#pregunta2" aria-expanded="false" aria-controls="pregunta2">
					          ¿Dónde puedo asesorarme sobre algunos productos?
					        </button>
					      </h2>
					    </div>

					    <div id="pregunta2" class="collapse" aria-labelledby="preguntaDos" data-parent="#accordionPreguntas">
					      <div class="card-body px-0 pt-0 text-secondary">
					        Podés pedir asesoramiento a través de nuestra seccion de Contacto o llamando al 4869-6811.
					      </div>
					    </div>
					  </div>
					  <div class="card border-0">
					    <div class="card-header bg-transparent border-0 px-0" id="preguntaTres">
					      <h2 class="mb-0">
					        <button class="btn btn-link text-dark text-decoration-none pl-0 pb-0 mb-2" type="button" data-toggle="collapse" data-target="#pregunta3" aria-expanded="false" aria-controls="pregunta3">
					          ¿Otra persona puede ir a retirar mi compra en mi lugar?
					        </button>
					      </h2>
					    </div>

					    <div id="pregunta3" class="collapse" aria-labelledby="preguntaTres" data-parent="#accordionPreguntas">
					      <div class="card-body px-0 pt-0 text-secondary">
					        En caso de que se presente un tercero a retirar un producto debe presentar su DNI, DNI del titular de la tarjeta y el comprobante de pago que se envía por email al realizar la compra.
					      </div>
					    </div>
					  </div>
					  <div class="card border-0">
					    <div class="card-header bg-transparent border-0 px-0" id="preguntaCuatro">
					      <h2 class="mb-0">
					        <button class="btn btn-link text-dark text-decoration-none pl-0 pb-0 mb-2" type="button" data-toggle="collapse" data-target="#pregunta4" aria-expanded="false" aria-controls="pregunta4">
					          ¿Puedo realizar una compra a través de dos medios de pago?
					        </button>
					      </h2>
					    </div>

					    <div id="pregunta4" class="collapse" aria-labelledby="preguntaCuatro" data-parent="#accordionPreguntas">
					      <div class="card-body px-0 pt-0 text-secondary">
					        En un principio solo se permite abonar con un único medio de pago habilitado.
					        Si desea realizar un pago con dos tarjetas diferentes o una parte en efectivo y otra por tarjeta se deberá comunicar con Atención al Cliente llamando al 4869-6811.
					      </div>
					    </div>
					  </div>
					  <div class="card border-0">
					    <div class="card-header bg-transparent border-0 px-0" id="preguntaCinco">
					      <h2 class="mb-0">
					        <button class="btn btn-link text-dark text-decoration-none pl-0 pb-0 mb-2" type="button" data-toggle="collapse" data-target="#pregunta5" aria-expanded="false" aria-controls="pregunta5">
					          ¿Realizan envíos a todo el país?
					        </button>
					      </h2>
					    </div>

					    <div id="pregunta5" class="collapse" aria-labelledby="preguntaCinco" data-parent="#accordionPreguntas">
					      <div class="card-body px-0 pt-0 text-secondary">
					        En Korbax trabajamos para ofrecer la mejor calidad y servicio a nuestros clientes.
					        En estos momentos solo hacemos envios a CABA, Provincia de Buenos Aires, Córdoba y Rosario.
					        Seguimos trabajando para llegar a más provincias del interior.
					      </div>
					    </div>
					  </div>
					  <div class="card border-0">
					    <div class="card-header bg-transparent border-0 px-0" id="preguntaSeis">
					      <h2 class="mb-0">
					        <button class="btn btn-link text-dark text-decoration-none pl-0 pb-0 mb-2" type="button" data-toggle="collapse" data-target="#pregunta6" aria-expanded="false" aria-controls="pregunta6">
					          No me llegó el comprobante de pago. ¿Qué debo hacer?
					        </button>
					      </h2>
					    </div>

					    <div id="pregunta6" class="collapse" aria-labelledby="preguntaSeis" data-parent="#accordionPreguntas">
					      <div class="card-body px-0 pt-0 text-secondary">
					        Si el comprobante de pago no llegó a su email, le sugerimos en un primer momento que revise su casilla de correo no deseado.
					        En caso de no haber recibido el email contáctenos a través de nuestra sección de Contacto o llamando al 4869-6811.
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</section>
		</main>
@endsection