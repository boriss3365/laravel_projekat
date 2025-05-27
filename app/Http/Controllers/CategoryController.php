<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        return view('admin.category.index', [
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        Category::create([
        'name' => $request->name,
        'description' => $request->description
        ]);

        return redirect()->route('admin.category')->with('success', 'Kategorija dodata');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update([
        'name' => $request->name,
        'description' => $request->description
        ]);


        return redirect()->route('admin.category')->with('success', 'Kategorija izmjenjena');
    }

    public function delete($id)
    {
        Category::destroy($id);
        return redirect()->route('admin.category')->with('success', 'Kategorija obrisana');
    }
}
