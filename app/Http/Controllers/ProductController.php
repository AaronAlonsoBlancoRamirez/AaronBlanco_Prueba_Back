<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Listar todos los productos
    public function index()
    {
        return Product::all();
    }

    // Crear un nuevo producto
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        return Product::create($request->all());
    }

    // Mostrar un solo producto
    public function show($id)
    {
        return Product::find($id);
    }

    // Actualizar un producto existente
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());

        return $product;
    }

    // Eliminar un producto
    public function destroy($id)
    {
        return Product::destroy($id);
    }
}
