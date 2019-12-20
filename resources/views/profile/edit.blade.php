@extends('layouts/default')

@section('title', 'Configuracion cuenta')

@section('css')
	<style>
		.foto-box {
			width: 400px;
		}

		.foto {
			width: 100% !important;
		}

		label {
			font-weight: bold;
		}

		[type="text"] {
			border-radius: 5px;
			border: 1px solid gray;
			padding: 5px 10px;
		}

		[type="text"]:focus {
			outline: none;
		}

	</style>
@endsection

@section('content')

	<section class="profile-conf my-3">
		<div class="container">
			<div class="row">
				<div class="col-12">
					@if(session()->has('succes_msg'))
						<div class="alert alert-succes">
							{{ session()->get('succes_msg') }}
						</div>
					@endif
				</div>
				<div class="col col-lg-6">
					<div class="foto-box">
						<img class="w-25 border foto" src="{{ imgProfile(Auth::user()) }}" alt="perfil" style="background-color: white">
					</div>
				</div>
				<div class="col col-lg-6">
					<div class="profile-form">
						<form action=" {{ route('profile.edit') }} " method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="mb-2">
								<label for="nombre">Nombre</label><br>
								<input type="text" name="nombre" id="nombre" value=" {{ Auth::user()->datosPersonales->nombre }} ">
								@error('nombre')
                                    <div class="alert alert-warning py-1">
                                        {{$message}}
                                    </div>
                                @enderror
							</div>
							<div class="mb-2">
								<label for="apellido">Apellido</label><br>
								<input type="text" name="apellido" id="apellido" value=" {{ Auth::user()->datosPersonales->apellido }} ">
								@error('apellido')
                                    <div class="alert alert-warning py-1">
                                        {{$message}}
                                    </div>
                                @enderror
							</div>
							<div class="mb-2">
								<label for="direccion">Dirección</label><br>
								<input type="text" name="direccion" id="direccion" value="{{old('direccion', Auth::user()->datosPersonales->direccion)}}">
								@error('direccion')
                                    <div class="alert alert-warning py-1">
                                        {{$message}}
                                    </div>
                                @enderror
							</div>
							<div class="mb-2">
								<label for="fnac">Fecha de nacimiento (aaaa-mm-dd)</label><br>
								<input type="text" name="fnac" id="fnac" value="{{old('fnac', Auth::user()->datosPersonales->fecha_de_nacimiento)}}">
								@error('fnac')
                                    <div class="alert alert-warning py-1">
                                        {{$message}}
                                    </div>
                                @enderror
							</div>
							<div class="mb-2">
								<label for="telefono">Teléfono</label><br>
								<input type="text" name="telefono" id="telefono" value="{{old('telefono', Auth::user()->datosPersonales->telefono)}}">
								@error('telefono')
                                    <div class="alert alert-warning py-1">
                                        {{$message}}
                                    </div>
                                @enderror
							</div>
							<div class="mb-3">
								<label for="avatar">
									{{ Auth::user()->avatar ? 'Cambiar imagen' : 'Subir imagen' }}
								</label><br>
								<input type="file" name="avatar" id="avatar">
								@error('avatar')
                                    <div class="alert alert-warning py-1">
                                        {{$message}}
                                    </div>
                                @enderror
							</div>
							<div>
								<input type="submit" value="Guardar" class="btn btn-dark">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
