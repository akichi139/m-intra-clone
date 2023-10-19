<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\Brand;

class FilterBrandProducts extends Component
{
    public $brand, $minValue, $maxValue, $brands, $categorys;
    public $categoryIds = [];

    public function mount($brand_name)
    {
        $this->brand = Brand::where('brand_name', $brand_name)->first();
        
        $this->brands = Brand::all();
        $this->categorys = Category::where('is_root_category','0')->get();
    }

    public function render()
    {
        $productsQuery = $this->brand->products();

        if (!empty($this->categoryIds)) {
            $productsQuery->whereIn('category_id', $this->categoryIds);
        }

        if ($this->minValue !== null) {
            $productsQuery->where('price','>',$this->minValue);
        }

        if ($this->maxValue !== null) {
            $productsQuery->where('price','<',$this->maxValue);
        }

        $products = $productsQuery->paginate(6);

        return view('livewire.filter-brand-products',compact('products'));
    }

    public function filterProducts()
    {
        $this->minValue = $this->minValue ?: 0;
        $this->maxValue = $this->maxValue ?: 100000;
    }

    public function clearFilters()
    {
        $this->categoryIds = [];
        $this->minValue = null;
        $this->maxValue = null;
    }
}