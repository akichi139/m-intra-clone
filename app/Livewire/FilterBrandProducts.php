<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\Brand;

class FilterBrandProducts extends Component
{
    public $brand_name, $minValue, $maxValue, $brands, $categorys;
    public $categoryIds = [];

    public function mount($brand_name)
    {
        $this->brand_name = Brand::where('brand_name', $brand_name)->first();
    }

    public function render()
    {
        dump($this->minValue, $this->maxValue, $this->categoryIds);

        $productsQuery = $this->brand_name->products();

        if (!empty($this->categoryIds)) {
            $productsQuery->whereIn('category_id', $this->categoryIds);
        }

        if ($this->minValue !== null && $this->maxValue !== null) {
            $productsQuery->whereBetween('price', [$this->minValue, $this->maxValue]);
        }

        $products = $productsQuery->paginate(6);

        $this->brands = Brand::all();
        $this->categorys = Category::all();

        return view('livewire.filter-brand-products', compact('products'));
    }

    public function filterProducts()
    {
        $this->rules();
    }

    public function clearFilters()
    {
        $this->categoryIds = [];
        $this->minValue = null;
        $this->maxValue = null;
    }
}