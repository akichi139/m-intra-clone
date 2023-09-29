<?php

namespace App\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class AddItemToCart extends Component
{
    public $quantity = 1;
    public $product_id;
    public $product_name;
    public $product_price;

    public function mount($product_id, $product_name, $product_price)
    {
        $this->product_id = $product_id;
        $this->product_name = $product_name;
        $this->product_price = $product_price;
    }

    public function increment()
    {
        $this->quantity++;
    }

    public function decrement()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }
    
    public function isQuantityOne()
    {
        return $this->quantity <= 1;
    }

    public function addToCart()
    {
        Cart::add($this->product_id, $this->product_name, $this->quantity, $this->product_price)->associate('\App\Models\Product');
        session()->flash('success','Item added in Cart');
        $this->reset('quantity');
        $this->dispatch('itemAddedToCart');
    }

    public function render()
    {
        return view('livewire.add-item-to-cart');
    }
}
