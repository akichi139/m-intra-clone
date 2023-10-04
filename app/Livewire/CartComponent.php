<?php

namespace App\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Attributes\On;

class CartComponent extends Component
{
    
    #[On('itemAddedToCart')]
    public function refresh(){
        $this->getCartItems();
    }

    public function getCartItems()
    {
        return Cart::content();
    }

    public function getTotalCartItems()
    {
        return Cart::count();
    }

    public function removeFromCart($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success', 'Item removed from Cart');
        $this->dispatch('itemAddedToCart');
    }

    public function getSubTotalPrice(){
        return Cart::subtotal();
    }

    public function getTax(){
        return Cart::tax();
    }

    public function getTotalPrice()
    {
        return Cart::total();
    }

    public function render()
    {
        return view('livewire.cart-component');
    }
}
