<?php

namespace App\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartComponent extends Component
{
    
    public function getCartItems()
    {
        return Cart::content();
    }

    public function render()
    {
        return view('livewire.cart-component');
    }
}
