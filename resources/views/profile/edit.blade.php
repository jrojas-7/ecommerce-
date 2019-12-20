@extends('layouts/default')

@section('title', 'Configuracion cuenta')

@section('css')

@endsection

@section('content')

	<section class="profile-conf">
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
					<div class="foto">
						<img class="w-25 border" src="{{ imgProfile(Auth::user()) }}" alt="perfil" style="background-color: white">
					</div>
				</div>
				<div class="col col-lg-6">
					<div class="profile-form">
						<form action=" {{ route('profile.edit') }} " method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div>
								<label for="nombre">Nombre</label><br>
								<input type="text" name="nombre" id="nombre" value=" {{ Auth::user()->datosPersonales->nombre }} ">
								@error('nombre')
                                    <div class="alert alert-warning py-1">
                                        {{$message}}
                                    </div>
                                @enderror
							</div>
							<div>
								<label for="apellido">Apellido</label><br>
								<input type="text" name="apellido" id="apellido" value=" {{ Auth::user()->datosPersonales->apellido }} ">
								@error('apellido')
                                    <div class="alert alert-warning py-1">
                                        {{$message}}
                                    </div>
                                @enderror
							</div>
							<div>
								<label for="direccion">Dirección</label><br>
								<input type="text" name="direccion" id="direccion" value="{{old('direccion', Auth::user()->datosPersonales->direccion)}}">
								@error('direccion')
                                    <div class="alert alert-warning py-1">
                                        {{$message}}
                                    </div>
                                @enderror
							</div>
							<div>
								<label for="fnac">Fecha de nacimiento (aaaa-mm-dd)</label><br>
								<input type="text" name="fnac" id="fnac" value="{{old('fnac', Auth::user()->datosPersonales->fecha_de_nacimiento)}}">
								@error('fnac')
                                    <div class="alert alert-warning py-1">
                                        {{$message}}
                                    </div>
                                @enderror
							</div>
							<div>
								<label for="telefono">Teléfono</label><br>
								<input type="text" name="telefono" id="telefono" value="{{old('telefono', Auth::user()->datosPersonales->telefono)}}">
								@error('telefono')
                                    <div class="alert alert-warning py-1">
                                        {{$message}}
                                    </div>
                                @enderror
							</div>
							<div>
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
								<input type="submit" value="Guardar">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection