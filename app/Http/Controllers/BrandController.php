<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brand.index', compact('brands'));
    }

    public function displayBrand($brand_name, $categoryIds=null, $minValue=null, $maxValue=null)
    {
        if($categoryIds == 'null'){
            $categoryIds = null;
        }

        $categoryIds_array = explode(",",$categoryIds);

        $brand = Brand::where('brand_name',$brand_name)->first();

        $productsQuery = $brand->products();

        if ($categoryIds!=null) {
            $productsQuery->whereIn('category_id', $categoryIds_array);
        }

        if ($minValue !== null) {
            $productsQuery->where('price','>',$minValue);
        }

        if ($maxValue !== null) {
            $productsQuery->where('price','<', $maxValue);
        }

        $products = $productsQuery->paginate(6);

        $brandId = $brand->id;

        $brands = Brand::all();
        $categories = Category::whereHas('products', function($query) use ($brandId) {
            $query->where('brand_id', $brandId);
        })->get();

        return view('brand.brandProduct',compact('brand', 'brands', 'categories', 'products', 'categoryIds', 'minValue', 'maxValue'));
    }
}
