<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PonudaMjeseca;

class PonudaMjesecaController extends Controller
{
    public function index()
    {
        $ponude = PonudaMjeseca::all();
        return view('admin.ponuda.index', compact('ponude'));
    }

    public function create()
    {
        return view('admin.ponuda.create');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'naziv' => 'required|string|max:255',
            'opis' => 'nullable|string',
            'cijena' => 'required|numeric',
        ]);

        PonudaMjeseca::create($request->all());

        return redirect()->route('admin.ponuda')->with('success', 'Ponuda uspješno dodata.');
    }

    public function edit($id)
    {
        $ponuda = PonudaMjeseca::findOrFail($id);
        return view('admin.ponuda.edit', compact('ponuda'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'naziv' => 'required|string|max:255',
            'opis' => 'nullable|string',
            'cijena' => 'required|numeric',
        ]);

        $ponuda = PonudaMjeseca::findOrFail($id);
        $ponuda->update($request->all());

        return redirect()->route('admin.ponuda')->with('success', 'Ponuda uspješno izmjenjena.');
    }

    public function delete($id)
    {
        PonudaMjeseca::destroy($id);
        return redirect()->route('admin.ponuda')->with('success', 'Ponuda obrisana.');
    }
}
