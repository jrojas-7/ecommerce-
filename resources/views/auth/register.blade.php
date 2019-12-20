@extends('layouts/default')

@section('title', 'Registro')

@section('css')
    <link rel="stylesheet" href="/css/registro.css">
@endsection

<script src="/js/validacion-registro.js"></script>

@section('content')
<main style="background-color: #24303c">
            <section class="registro">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form id="form-register" class="form-register" action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                                <h4 class="display-4">Registro</h4>
                                <div>
                                    <input class="control" type="text" name="nombre" value="{{old('nombre')}}" placeholder="Ingrese su nombre">
                                    @error('nombre')
                                            <div class="alert alert-warning py-1">
                                                {{$message}}
                                            </div>
                                    @enderror
                                </div>
                                <div>
                                    <input class="control" type="text" name="apellido" value="{{old('apellido')}}" placeholder="Ingrese su apellido">
                                    @error('apellido')
                                            <div class="alert alert-warning py-1">
                                                {{$message}}
                                            </div>
                                    @enderror
                                </div>
                                <div>
                                    <input class="control" type="email" name="email" value="{{old('email')}}" placeholder="Ingrese su correo">
                                    @error('email')
                                            <div class="alert alert-warning py-1">
                                                {{$message}}
                                            </div>
                                    @enderror
                                </div>
                                <div>
                                    <input class="control" type="password" name="password" placeholder="Ingrese su contraseña">
                                    @error('password')
                                            <div class="alert alert-warning py-1">
                                                {{$message}}
                                            </div>
                                    @enderror
                                </div>
                                <div>
                                    <input class="control" type="password" name="password_confirmation" placeholder="Repita su contraseña">

                                </div>
                                <div>
                                    <label for="avatar">Imagen de perfil (opcional):</label>
                                    <input type="file" name="avatar" id="avatar">
                                    @error('avatar')
                                            <div class="alert alert-warning py-1 mt-3">
                                                {{$message}}
                                            </div>
                                    @enderror
                                </div>
                                <!-- <p>
                                    <input type="checkbox" name="TyC" value="s" id="TyC"> 
                                    <label for="TyC">
                                        Estoy de acuerdo con los <a href="#" class="text"> Términos y Condiciones           
                                    </label>
                                </p> -->
                                <input class="boton" type="submit" name="submit" value="Registrarse">
                                <p><a href="{{ route('login') }}">¿Ya tenés una cuenta?</a></p>
                           </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection
