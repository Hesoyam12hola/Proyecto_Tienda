<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Tipoproducto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProductoController extends Controller
{
    public function index(Request $request): View
    {
        $productos = Producto::paginate();

        return view('producto.index', compact('productos'))
            ->with('i', ($request->input('page', 1) - 1) * $productos->perPage());
    }

    public function create(): View
    {
        $producto = new Producto();
        $tipos = Tipoproducto::all();

        return view('producto.create', compact('producto', 'tipos'));
    }

    public function store(ProductoRequest $request): RedirectResponse
    {
        Producto::create($request->validated());

        return Redirect::route('producto.index')
            ->with('success', '');
    }

    public function show($id): View
    {
        $producto = Producto::find($id);

        return view('producto.show', compact('producto'));
    }

    public function edit($id): View
    {
        $producto = Producto::findOrFail($id);
        $tipos = Tipoproducto::all();

        return view('producto.edit', compact('producto', 'tipos'));
    }

    public function update(ProductoRequest $request, Producto $producto): RedirectResponse
    {
        $producto->update($request->validated());

        return Redirect::route('producto.index')
            ->with('success', '');
    }

    public function destroy($id): RedirectResponse
    {
        Producto::find($id)->delete();

        return Redirect::route('producto.index')
            ->with('success', '');
    }
}
