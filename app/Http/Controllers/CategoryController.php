<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categorys = Category::all();
        return view('Category.index', compact('categorys'));
    }

    public function displayCategory($category_name)
    {
        $categorys = Category::all();
        $category_name = Category::where('categories_name', $category_name)->first();

        if ($category_name) {
            $products = $category_name->products()->paginate(8);
            return view('category.categoryProduct', compact('products', 'category_name', 'categorys'));
        } else {
            return abort(404); // Or handle brand not found scenario
        }
    }
}
