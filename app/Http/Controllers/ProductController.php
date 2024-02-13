<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //FIRST PUBLIC FUNCTION FOR THE TRIAL
    public function index(){
        $results = Product::all();
        return view('products/index', ['result'=> $results]);
    }


    public function create(){
        return view('products/create');
    }

    public function create_post(Request $request){
      $request = $request-> validate([
        'name' => 'required',
        'qty'=> 'required|numeric',
        'price' => 'required|numeric',
        'description' =>'required'
      ]);

      $newproduct = Product::create($request);

      return redirect(route('product.index'));
    }

    public function fetchProduct( $id){
         $product = Product::find($id);
        //dd ($product);
        return view('products/view', ['product' => $product ]);
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
            return redirect('product')->with('success', 'product has been updates successfully');
          }
    }

    public function deleteProduct(Request $request, $id){
        $request = db::table('products')->where('id', $id)->delete();
        if($request){
        return redirect('product')->with('success', 'product has been deleted successfully');
        }
    }

}
