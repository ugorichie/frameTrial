<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function updateProduct(Request $request, $id){
        $request = $request-> validate([
            'name' => 'required',
            'qty'=> 'required|numeric',
            'price' => 'required|numeric',
            'description' =>'required'
          ]);

          //$request->update($request);

          $request = DB::table('products')->where('id', $id)->update([
            'name' => $request['name'],
            'qty' => $request['qty'],
            'price' => $request['qty'],
            'description' => $request['description']
          ]);

          if($request){
            return redirect('product/index')->with('success', 'product has been updates successfully');
          }
    }
}
