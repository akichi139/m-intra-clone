<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function searchProducts(Request $request){
        if($request->search){
            $searchProducts = Product::where('product_name','LIKE','%'.$request->search.'%')->paginate(15);
            $search = $request->search;
            return view('search', compact('searchProducts','search'));
        }else{
            return redirect()->back();
        }
    }
}
