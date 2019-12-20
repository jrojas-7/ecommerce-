<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        /*$products = Producto::inRandomOrder()->take(8)->get();*/

        return view('cart.cart'/*, compact('products')*/);
    }

    public function store(Request $request)
    {
        Cart::add($request->id, $request->nombre, 1, $request->precio)->associate('App\Producto');

        return redirect()->route('cart.index')->with('succes_msg', 'Producto añadido correctamente!');
    }

    public function destroyCart()
    {
        Cart::destroy();

        return redirect()->route('cart.index');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('succes_msg', 'Producto eliminado del carrito');
    }
}
