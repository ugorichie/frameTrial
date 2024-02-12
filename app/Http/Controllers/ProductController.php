<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //FIRST PUBLIC FUNCTION FOR THE TRIAL
    public function index(){
        $result = Product::all();
        return view('products/index', ['result'=> $result]);
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

    public function fetchProduct($id){
        $product = Product::find($id);
        return view('products/view', ['product' =>$product ]);
    }
}
