@extends('layouts/default')

@section('title', 'Login')

@section('css')
    <link rel="stylesheet" href="/css/login.css">
@endsection

@section('content')
<main>
            <section class="login">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form class="form-register" method="post" action="{{ route('login') }}">
                            {{csrf_field()}}
                                <h4 class="display-4">LogIn</h4>
                                <div>
                                    <input class="control" type="email" name="email" placeholder="Ingrese su email">
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
                                @if(isset($mensaje))
                                    <div class="alert alert-warning py-1">
                                        {{$mensaje}}
                                    </div>
                                @endif
                                <input class="boton" type="submit" name="ingresar" value="Ingresar">
                                <p><a href="/registro">¿No tenes una cuenta?</a></p>
                                <div class="text-center">
                                    <input type="checkbox" id="recordar" name="recordar" value="recordar" {{ old('recordar') ? 'checked' : '' }}>
                                    <label for="recordar" style="display: inline">Recordar usuario</label>
                                </div>
                           </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection