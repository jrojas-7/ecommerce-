@extends('layouts/default')

@section('title', 'Mi perfil')


@section('css')
	<link rel="stylesheet" href="/css/perfil.css">
	<style>
		.bienvenida {
		background-color: #2ecc71;
		}

		.caja-titulo {
		height: 50vh;
		display: flex;
		justify-content: center;
		align-items: center;
		color: white;
		}
	</style>
@endsection

@section('content')
	<main>
		<section class="bienvenida">
			<div class="container">
				<div class="caja-titulo text-center">
					<h1 class="display-2"><?= 'BIENVENIDO '. $_SESSION['email']?></h1>
				</div>
			</div>
		</section>
	</main>
@endsection