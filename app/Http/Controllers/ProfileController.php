<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'max:60|string',
            'apellido' => 'max:60|string',
            'direccion' => 'max:60|string|nullable',
            'fnac' => 'string|nullable|date_format:Y-m-d',
            'telefono' => 'digits_between:0,20|numeric|nullable',
            'avatar' => 'image'
        ], [
            'max' => 'El :attribute no puede superar los :max carácteres',
            'direccion.max' => 'La direccion no puede superar los :max carácteres',
            'date_format' => 'Formato de fecha inválido',
            'image' => 'Formato de archivo inválido',

        ]);

        $datosPersonales = $request->user()->datosPersonales;
        $datosPersonales->nombre = $request->nombre;
        $datosPersonales->apellido = $request->apellido;
        $datosPersonales->direccion = $request->direccion;
        $datosPersonales->fecha_de_nacimiento = $request->fnac;
        $datosPersonales->telefono = $request->telefono;

        if ($request->hasFile('avatar'))
        {
            $path = $request->file('avatar')->store('public/avatar');
            $nombreArchivo = basename($path);
            $request->user()->avatar = $nombreArchivo;
            $request->user()->save();
        }

        $datosPersonales->save();

        return back()->with('succes_msg', 'Datos guardados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
