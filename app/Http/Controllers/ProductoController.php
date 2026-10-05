<?php
namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $productos = Producto::query()
            ->when($request->q, fn($q, $b) => $q->where('nombre', 'like', "%$b%"))
            ->when($request->categoria, fn($q, $c) => $q->where('categoria', $c))
            ->get();

        $categorias = Producto::select('categoria')->distinct()->pluck('categoria');

        return view('catalogo', compact('productos', 'categorias'));
    }
}