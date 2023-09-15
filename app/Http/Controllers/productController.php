<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        

        $product=new product;
        $product->name=$request->input('name');
        $product->price=$request->input('price');
        $product->quantity=$request->input('quantity');
        $product->save();
        return back()->with('success', 'Product added successfully');

        $data=product::all();
        //dd($data);
        return view('welcome')->with('products',$data);
    }

    public function deleteproduct($id){
        $product=Product::find($id);

        if ($product) {
            $product->delete(); // Delete the product if it exists
        } else {
            // Handle the case where the product doesn't exist
            return redirect()->back()->with('error', 'Product not found');
        }
    
        return redirect()->back()->with('success', 'Product deleted successfully');

        //$product->delete();
        //return redirect()->back();
    }

    public function updateproductview($id){
        $product=Product::find($id);

        return view('updateproduct')->with('productdata',$product);

    }

    public function updateproduct(Request $request){


        $id=$request->id;
        $name=$request->name;
        $price=$request->price;
        $quantity=$request->quantity;
        $data=Product::find($id);
        $data->name=$name;
        $data->price=$price;
        $data->quantity=$quantity;
        $data->save();
        $datas=Product::all();

        return redirect('/')->with('products', $datas)->with('success', 'Product updated successfully');

        //return view('welcome')->with('products',$datas);

        

    
}
}