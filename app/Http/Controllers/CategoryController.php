<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view('Category.index', compact('categories'));
    }

    public function displayCategory($category_name)
    {
        $categorys = Category::all();
        $brands = Brand::all();
        $category_name = Category::where('categories_name', $category_name)->first();

        if ($category_name) {
            $products = $category_name->products()->paginate(8);
            return view('category.categoryProduct', compact('products', 'category_name', 'categorys', 'brands'));
        } else {
            return abort(404); // Or handle brand not found scenario
        }
    }
}
