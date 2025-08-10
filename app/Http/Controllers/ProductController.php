<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::with('category')->get();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $imageNewName = null;

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $imageNewName = time() . "-" . $file->getClientOriginalName();

            $file->move(public_path('productImage'), $imageNewName);
        }

        $newProduct = new Product();
        $newProduct->name = $request->name;
        $newProduct->categoryId = $request->categoryId;
        $newProduct->description = $request->description;
        $newProduct->fee = $request->fee;
        $newProduct->duration = $request->duration;
        $newProduct->image = $imageNewName;
        $newProduct->save();

        return redirect(route('product.index'))->with("success", "Product Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $categories = Category::get();
        $product = Product::with('category')->findOrFail($id);
        $categories = Category::all();
        return view('product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $imageNewName = null;

        if ($request->hasFile('newImage')) {

            $file = $request->file('newImage');

            $imageNewName = time() . "-" . $file->getClientOriginalName();

            $file->move(public_path('productImage'), $imageNewName);
        } else {
            $imageNewName = $request->oldImage;
        }

        $product->name = $request->name;
        $product->categoryId = $request->categoryId;
        $product->description = $request->description;
        $product->fee = $request->fee;
        $product->duration = $request->duration;
        $product->image = $imageNewName;
        $product->save();

        return redirect(route('product.index'))->with("success", "Product Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
