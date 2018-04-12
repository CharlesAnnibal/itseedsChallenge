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
        $title = "Product: ".$product->name;                
        return view('product.description', compact('title', 'product'));
    }


    public function create(){
        $title = "Create a new product";    
        return view('product.create', compact('title', 'product'));
    }


    public function edit(Product $objProduct,$id){
        $product = $objProduct->find($id);
        $title = "Editing product ".$product->name;       
        return view('product.edit', compact('title', 'product'));
    }

    public function delete(Product $objProduct,$id){
        $product = $objProduct->where('id',$id)
                        ->get()
                        ->first();
        $title = "Delete Product ".$product->name.". Are you sure?";                
        return view('product.delete', compact('title', 'product'));
    }

    public function save(Product $objProduct,Request $request,$id){
        $product = $objProduct->find($id);
        $product->name = $request->name;
        $product->cost = $request->cost;
        $saved = $product->save();
        if(!$saved)
            $message = "Product hasnt updated.";
        else
            $message = "Product has been updated.";
        return redirect('index')->with('message', $message);   
    }

    public function insert(Request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->cost = $request->cost;
        $saved = $product->save();
        if(!$saved)
            $message = "Product hasnt created.";
        else
            $message = "Product has been created.";
        return redirect('index')->with('message', $message);
    }

    public function destroy(Product $objProduct,Request $request,$id){
        $product = $objProduct->find($id);
        $deleted = $product->delete();
        if(!$deleted)
            $message = 'Product not deleted!';
        else
            $message = 'Product deleted!';
        return redirect('index')->with('message', $message);
    }
}
