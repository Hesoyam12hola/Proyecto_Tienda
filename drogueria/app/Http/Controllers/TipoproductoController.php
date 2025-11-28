<?php

namespace App\Http\Controllers;

use App\Models\Tipoproducto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TipoproductoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TipoproductoController extends Controller
{
   
    public function index(Request $request): View
    {
        // CORREGIDO: antes estaba $tipoproducto
        $tipoproductos = Tipoproducto::paginate(20);

        return view('tipoproducto.index', compact('tipoproductos'))
            ->with('i', ($request->input('page', 1) - 1) * 20);
    }

   
    public function create(): View
    {
        $tipoproducto = new Tipoproducto();

        return view('tipoproducto.create', compact('tipoproducto'));
    }

    
    public function store(TipoproductoRequest $request): RedirectResponse
    {
        Tipoproducto::create($request->validated());

        return Redirect::route('tipoproducto.index')
            ->with('success', '');
    }

    
    public function show($id): View
    {
        $tipoproducto = Tipoproducto::find($id);

        return view('tipoproducto.show', compact('tipoproducto'));
    }

    
    public function edit($id): View
    {
        $tipoproducto = Tipoproducto::find($id);

        return view('tipoproducto.edit', compact('tipoproducto'));
    }

    
    public function update(TipoproductoRequest $request, Tipoproducto $tipoproducto): RedirectResponse
    {
        $tipoproducto->update($request->validated());

        return Redirect::route('tipoproducto.index')
            ->with('success', '');
    }

    public function destroy($id): RedirectResponse
    {
        Tipoproducto::find($id)->delete();

        return Redirect::route('tipoproducto.index')
            ->with('success', '');
    }
}
