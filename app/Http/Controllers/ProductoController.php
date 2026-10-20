<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\View\View;

class ProductoController extends Controller
{
    public function index(): View
    {
        $productos = Producto::latest()->get();

        return view('producto.index', compact('productos'));
    }
}
