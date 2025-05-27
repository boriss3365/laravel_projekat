<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return view("product.index",[
        'products' => Product::all(),
        'categories' => Category::all()

        ]);
    }
    function category($category_id){
        $category=Category::FindOrFail($category_id);
        return view("product.category", [
            'category'=>$category,
            'categories'=>Category::all()
        ]);
    }
    function show($product_id){
        $product=Product::FindOrFail($product_id);
        return view("product.show", [
            'product'=>$product,
            'categories'=>Category::all()
        ]);
    }

    function list(){
        return view("admin.product.list",[
            'products' => Product::all(),
        ]);
    }

    function create(){
        return view("admin.product.create",[
            'categories' => Category::all(),
        ]);
    }

    function insert(Request $request){
    $product = new Product();
    $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->category_id = $request->category_id;
    $product->save();

    return redirect()->route('admin.product', $product->id)->with("success", "Product created successfully");
}

function edit($id){
    $product = Product::findOrFail($id);
    return view('admin.product.edit', [
        'product' => $product,
        'categories' => Category::all()
    ]);
}

function update(Request $request, $id){
    $product = Product::findOrFail($id);
    $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->category_id = $request->category_id;
    $product->save();

    return redirect()->route('admin.product.edit', $id)->with("success", "Product updated successfully");
}

function delete($id){
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('admin.product')->with("success", "Product deleted successfully");
}

function featured() {
    $ponuda = DB::table('ponuda_mjeseca')->get();
    return view('homepage', compact('ponuda'));
}

public function katalog()
{

    $products = Product::all();
    $categories = Category::all();

    return view('katalog', compact('products', 'categories'));
}


}
