<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category.create');
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

            $imageNewName = time()."-".$file->getClientOriginalName();

            $file->move(public_path('categoryImage'), $imageNewName);
        }

        $newCategory = new Category();
        $newCategory->name = $request->name;
        $newCategory->description = $request->description;
        $newCategory->image = $imageNewName;
        $newCategory->save();

        return redirect()->route('category.index')->with("success", "Category Added Successfully!");
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
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
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
        $category = Category::findOrFail($id);
        $imageNewName = null;
        if($request->hasFile('newImage')){
            $file = $request->file('newImage');
            $imageNewName = time()."-".$file->getClientOriginalName();
            $file->move(public_path('categoryImage'), $imageNewName);
        }
        else{
            $imageNewName = $request->oldImage;
        }

        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $imageNewName;

        $category->save();

        return redirect()->route('category.index')->with('success', 'Catergory Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Catergory Deleted Successfully!');
    }
}
