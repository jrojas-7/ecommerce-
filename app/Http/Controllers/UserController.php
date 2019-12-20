<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;
use App\DatosPersonales;

class UserController extends Controller
{
    public function registro(Request $req)
    {
        $reglas = [
            'nombre' => 'required|max:60',
            'apellido' => 'required|max:60',
            'email' => 'required|email|max:60|unique:clientes,email',
            'password' => 'required|min:5|confirmed',
            'password_confirmation' => 'required|min:5',
            'avatar' => 'image'
        ];

        $errores = [
            'required' => 'Complete su :attribute',
            'password.required' => 'Complete su contraseña',
            'min' => 'El :attribute debe tener al menos :min carácteres',
            'email' => 'Formato de email invalido',
            'max' => 'El :attribute no puede superar los :max carácteres',
            'image' => 'Formato de archivo invalido',
            'confirmed' => 'La contraseña no coincide',
            'unique' => 'Email ya registrado'
        ];

        $this->validate($req, $reglas, $errores);

        $cliente = new Cliente();
        $datosPersonales = new DatosPersonales();

        $datosPersonales->nombre = $req->nombre;
        $datosPersonales->apellido = $req->apellido;
        $datosPersonales->save();

        $cliente->email = $req->email;
        $cliente->password = bcrypt($req->password);
        $cliente->datosPersonales_id = $datosPersonales->id;

        if ($req->hasFile('avatar'))
        {
            $path = $req->file('avatar')->store('public/avatar');
            $nombreArchivo = basename($path);
            $cliente->avatar = $nombreArchivo;
        }

        $cliente->save();


        return redirect(route('login'));
    }

    public function login(Request $login)
    {
        $this->validate($login, [
            'email' => 'required',
            'password' => 'required'
        ], [
            'required' => 'Complete el :attribute'
        ]);

        $cliente = Cliente::where('email', '=', $login->email)->first();

        if ($cliente && \Hash::check($login->password, $cliente->password))
        {
            session_start();
            if (isset($login->recordar))
            {
                setcookie('recordar', $login->email, time() + 60 * 60 * 24 * 7);
                $_SESSION['email'] = $cliente->email;
            }
            $_SESSION['avatar'] = $cliente->avatar;
            return redirect('/perfil');
        } else {
            $mensaje = 'Email o contraseña incorrectos';
            return view('login', compact('mensaje'));
        }
    }
}
