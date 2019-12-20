@extends('layouts.default')

@section('title', 'Agregar producto')

@section('css')


@endsection

@section('content')

	<section class="formulario">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="form-box">
						<form action="{{ route('products.create') }}" method="post">
							{{ csrf_field() }}
							<div>
								<label for="nombre">Nombre</label><br>
								<input type="text" name="nombre" id="nombre">
							</div>
							<div>
								<label for="precio">Precio</label><br>
								<input type="number" name="precio" id="precio">
							</div>
							<div>
								<p>Stock</p>
								<label for="stock-yes">Si</label>
								<input type="radio" name="stock" value="1" id="stock-yes">
								<label for="stock-no">No</label>
								<input type="radio" name="stock" value="0" id="stock-no">
							</div>
							<div>
								<label for="description">Descripción</label><br>
								<textarea name="description" id="description"></textarea>
							</div>
							<div>
								<label for="categoria">Categoria</label><br>
								<select name="categoria" id="categoria">
									<option value="muebles">Muebles</option>
									<option value="banio">Baño</option>
									<option value="cocina">Cocina</option>
								</select>
							</div>
							<div>
								<label for="marca">Categoria</label><br>
								<select name="marca" id="marca">
									<option value="samsung">Samsung</option>
									<option value="lg">LG</option>
									<option value="suave">Suave</option>
								</select>
							</div>

							<ul>
								@forelse($errors->all() as $error)
									<li>{{ $error }}</li>
								@empty

								@endforelse
							</ul>

							<div>
								<input type="submit" value="Enviar"><br>
								<input type="reset" value="Resetear">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection