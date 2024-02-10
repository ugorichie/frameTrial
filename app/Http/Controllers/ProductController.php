<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //FIRST PUBLIC FUNCTION FOR THE TRIAL
    public function index(){
        return view('products/index');
    }


    public function create(){
        return view('products/create');
    }

    public function create_post(Request $request){
       // return view('products/create');
      // dd($request->name);
      $request = $request-> validate([
        'name' => 'required',
        'qty'=> 'required|numeric',
        'price' => 'required|numeric',
        'description' =>'required'
      ]);

      $newproduct = Product::create($request);

      return redirect(route('product.index'));
    }
}
