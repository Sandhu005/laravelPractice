<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function home()
    {
        $products = Products::get();
        return view('products.index', compact('products'));
    }

    public function add()
    {
        return view('products.add');
    }

    public function edit($id)
    {
        return view('products.edit');
    }

    public function store(Request $request)
    {
        $imageNewName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageNewName = time()."-".$file->getClientOriginalName();
            $file->move(public_path('productImage'), $imageNewName);
        }

        $newProduct = new Products();
        $newProduct->name = $request->name;
        $newProduct->categoryID = $request->categoryID;
        $newProduct->duration = $request->duration;
        $newProduct->fee = $request->fee;
        $newProduct->description = $request->description;
        $newProduct->image = $imageNewName;

        $newProduct->save();

        return redirect()->route('products')->with("success", "Product Added Successfully!");
    }
}
