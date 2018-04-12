<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Product $objProduct){
        $title = "Products";
        $products = $objProduct->paginate(5);
        return view('index', compact('title', 'products'));
    }


    public function show(Product $objProduct,$id){
        $product = $objProduct->where('id',$id)
                        ->get()
                        ->first();
        $title = "Product ".$product->name;                
        return view('product.description', compact('title', 'product'));
    }


    public function create(){
        return view('product.create', compact('title', 'product'));
    }


    public function edit(Product $objProduct,$id){
        return view('product.edit', compact('title', 'product'));
    }


    public function destroy(Product $objProduct,$id){
        return view('product.delete', compact('title', 'product'));
    }


    public function save(Product $objProduct,Request $request){
        $product = $objProduct->find(1);
        $product->name = $request->name;
        $product->cost = $request->cost;
        $saved = $product->save();
        if(!$saved)
            return "";
        else
            return "";    
    }

    public function delete(Product $objProduct,Request $request){
        $product = $objProduct->find(1);
        $deleted = $product->delete();
        if(!$deleted)
            return "";
        else
            return "";
    }
}
