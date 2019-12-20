@extends('layouts/default')

@section('title', 'Error 404')

@section('css')
	<style>
		.error-404 {
			height: 80vh;
		}
	</style>
@endsection

@section('content')

	<section class="error-404">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>Página no encontrada</h1>
				</div>
			</div>
		</div>
	</section>

@endsection