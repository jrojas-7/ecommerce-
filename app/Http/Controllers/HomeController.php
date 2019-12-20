<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class HomeController extends Controller
{
    public function index()
    {
        $productos = Producto::inRandomOrder()->take(3)->get();

        return view('home', compact('productos'));
    }

}
