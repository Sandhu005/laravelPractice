<?php

namespace App\Http\Controllers;

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

}
