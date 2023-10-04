<?php

namespace App\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Attributes\On;

class CartCounter extends Component
{
    #[On('itemAddedToCart')]
    public function refresh(){
        $this->getTotalCartItems();
    }
    public function getTotalCartItems()
    {
        return Cart::count();
    }
    public function render()
    {
        return view('livewire.cart-counter');
    }
}
