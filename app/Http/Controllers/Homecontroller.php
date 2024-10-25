<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductLog;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    function dashboard(){
        $products = Product::get();
        return view('dashboard',compact('products'));
    }

    function edit(Product $product){
        $productslogs = ProductLog::where('product_id',$product->id)->get();
        return view('backend.product.edit',compact('productslogs','product'));
    }

    function update(Product $product){
        ProductLog::create([
            'product_id' => $product->id,
            'name'=> request('name'),
            'name_old' => $product->name,
            'user_id' => auth()->user()->id,
        ]);
        $product->update([
            'name' => request('name')
        ]);
        return back();
    }

    function report_sale(){
        return view('backend.report_sale');
    }
}
