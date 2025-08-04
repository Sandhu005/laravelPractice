<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
     public function home()
    {
        return view('products.index');
    }
    
    public function add()
    {
        return view('products.add');
    }

      public function edit()
    {
        return view('products.edit');
    }

    public function store(Request $request)
    {
        $newProduct = new Products();
        $newProduct->name = $request->name;
        $newProduct->categoryID = $request->categoryID;        
        $newProduct->duration = $request->duration;        
        $newProduct->fee = $request->fee;        
        $newProduct->description = $request->description;        
        $newProduct->image = $request->image;   
        
        $newProduct->save();

        return redirect()->route('products')->with("success", "Product Added Successfully!");
    }
}
