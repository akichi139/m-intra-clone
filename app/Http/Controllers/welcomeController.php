<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function render(){
        $products = Product::orderBy('created_at','desc')->take(16)->get();

        return view('welcome', compact('products'));
    }
}
