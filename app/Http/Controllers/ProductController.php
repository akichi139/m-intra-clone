<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
        return view('product.index', compact('products'));
    }

    public function displayBrand(Request $request, $brand_name = null)
    {

        if (is_null($brand_name)) {
            return redirect()->back();
        } else {
            $products = Product::where('brand', 'LIKE', $brand_name)->paginate(3);
        }
        return view('product.brand', compact('products', 'brand'));
    }

    public function displayProduct($id)
    {
        $product = Product::find($id);

        return view('product.item', compact('product'));
    }

    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        $employees = User::all();
        return view('product.create', compact('brands', 'categories', 'employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|string',
            'product_name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|integer',
            'brand' => 'required|integer',
            'price' => 'required|regex:/^\d+(\.\d{2})?$/',
            'pdf_input' => 'required|mimes:pdf|max:2048',
            'guarantee' => 'required|integer'
        ]);

        $supervise = $request->input('supervise');
        $supervise_str = implode(',', $supervise);

        $pdf_file = $request->file('pdf_input');
        $pdf_file->storeAs('public/pdfs', $pdf_file->getClientOriginalName());

        $image_file = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $image_file);

        $product = new Product;
        $product->product_id = $request->product_id;
        $product->product_name = $request->product_name;
        $product->image = $image_file;
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        $product->price = $request->price;
        $product->status = 'new';
        $product->datasheet = $pdf_file->getClientOriginalName();
        $product->supervise = $supervise_str;
        $product->guarantee = $request->guarantee;
        $product->save();

        return redirect()->route('product.index');
    }

    public function edit(Product $product)
    {
        $brands = Brand::all();
        $categories = Category::all();
        $employees = User::all();

        return view('product.edit', compact('brands', 'categories', 'employees', 'product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required|string',
            'product_name' => 'required|string',
            'category' => 'required|integer',
            'brand' => 'required|integer',
            'price' => 'required|regex:/^\d+(\.\d{2})?$/',
            'status' => 'required|string',
            'guarantee' => 'required|integer'
        ]);

        $product = Product::find($id);

        if ($request->hasFile('image')) {
            $image_file = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $image_file);
            Storage::delete('public/images/' . $product->image);
            $product->image = $image_file;
        }

        if ($request->hasFile('pdf_input')) {
            $pdf_file = $request->file('pdf_input');
            $pdf_file->storeAs('pdfs', $pdf_file->getClientOriginalName());
            Storage::delete('pdfs/' . $product->datasheet);
            $product->datasheet = $pdf_file;
        }

        $supervise = $request->input('supervise');
        $supervise_str = implode(',', $supervise);

        $product->product_id = $request->product_id;
        $product->product_name = $request->product_name;
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->supervise = $supervise_str;
        $product->guarantee = $request->guarantee;
        $product->save();

        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin_product.index')->with('success', 'Reserve has been delete successfully.');
    }

}