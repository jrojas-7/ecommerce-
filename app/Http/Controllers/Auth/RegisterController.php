<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\DatosPersonales;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        if ($request->hasFile('avatar'))
        {
            $path = $request->file('avatar')->store('public/avatar');
            $nombreArchivo = basename($path);

            event(new Registered($user = $this->create($request->all(), $nombreArchivo)));
        } else {
            event(new Registered($user = $this->create($request->all())));
        }

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|max:60|string',
            'apellido' => 'required|max:60|string',
            'email' => 'required|email|max:60|unique:clientes,email',
            'password' => 'required|min:5|confirmed',
            'password_confirmation' => 'required|min:5',
            'avatar' => 'image'
        ], [
            'required' => 'Complete su :attribute',
            'password.required' => 'Complete su contraseña',
            'min' => 'El :attribute debe tener al menos :min carácteres',
            'email' => 'Formato de email invalido',
            'max' => 'El :attribute no puede superar los :max carácteres',
            'image' => 'Formato de archivo inválido',
            'confirmed' => 'La contraseña no coincide',
            'unique' => 'Email ya registrado'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data, string $nombreArchivo = null)
    {
        $datosPersonales = new DatosPersonales();

        $datosPersonales->nombre = $data['nombre'];
        $datosPersonales->apellido = $data['apellido'];
        $datosPersonales->save();

        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => $nombreArchivo,
            'datos_personales_id' => $datosPersonales->id
        ]);
    }
}
