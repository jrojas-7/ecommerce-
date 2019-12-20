<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categoria::all();
        $products = Producto::inRandomOrder()->take(12)->get();

        /*if (request()->categoria)
        {
            $category = Categoria::where('titulo', '=', request()->categoria)->firstOrFail();
            $products = Producto::where('categoria_id', '=', $category->id);
        } else {
            $products = Producto::where('titulo', 'like', 'dormitorio-%')->inRandomOrder();
        }


        if (request()->orden === 'menor_a_mayor')
        {
            $products = $products->orderBy('precio')->paginate(9);
        } else if (request()->orden === 'mayor_a_menor')
        {
            $products = $products->orderBy('precio', 'desc')->paginate(9);
        } else {
            $products = $products->paginate(9);
        }*/

        return view('products.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            'description' => 'required',
            'categoria' => 'required',
            'marca' => 'required'
        ], [
            'required' => 'El :attribute es obligatorio'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $product = Producto::where('titulo', '=', $title)->firstOrFail();
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function searchCategory($title)
    {
        $categories = Categoria::all();

        $category = Categoria::where('titulo', '=', $title)->firstOrFail();
        $categoryTitle = $category->titulo;

        $products = Producto::where('categoria_id', '=', $category->id);

        if (request()->orden === 'menor_a_mayor')
        {
            $products = $products->orderBy('precio')->paginate(9);
        } else if (request()->orden === 'mayor_a_menor')
        {
            $products = $products->orderBy('precio', 'desc')->paginate(9);
        } else {
            $products = $products->paginate(9);
        }

        return view('products.category', compact('products', 'categoryTitle', 'categories'));

    }
}
