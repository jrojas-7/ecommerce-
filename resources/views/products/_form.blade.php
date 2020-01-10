{{ csrf_field() }}

<div>
	<label for="nombre">Nombre</label><br>
	<input type="text" name="nombre" id="nombre" value="{{ old('nombre', $product->nombre) }}">
</div>
<div>
	<label for="nombre">Titulo</label><br>
	<input type="text" name="titulo" id="titulo" value="{{ old('titulo', $product->titulo) }}">
</div>
<div>
	<label for="precio">Precio</label><br>
	<input type="number" step="any" name="precio" id="precio" value="{{ old('precio', $product->precio) }}">
</div>
<div>
	<label for="stock">Stock</label><br>
	<input type="number" name="stock" id="stock" value="{{ old('stock', $product->stock) }}">
</div>
<div>
	<label for="imagen">Imagen</label><br>
	<input type="file" name="imagen" id="imagen" value="{{ old('imagen', $product->imagen) }}">
</div>
<div>
	<label for="descripcion">Descripción</label><br>
	<textarea name="descripcion" id="descripcion"> {{ old('descripcion', $product->descripcion) }} </textarea>
</div>
<div>
	<label for="categoria">Categoria</label><br>
	<select name="categoria" id="categoria">

		@foreach($categories as $category)
			<option value="{{ $category->id }}" {{ setSelected($category->titulo, $product->categoria->titulo) }} >{{ $category->nombre }}</option>
		@endforeach

	</select>
</div>

<ul>

	@if($errors->any())
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	@endif

</ul>

<div>
	<input type="submit" value="Enviar"><br>
	<input type="reset" value="Resetear">
</div>