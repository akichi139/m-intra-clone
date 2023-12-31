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
        return Cart::instance("cart")->content();
    }

    public function getTotalCartItems()
    {
        return Cart::instance("cart")->count();
    }

    public function removeFromCart($rowId)
    {
        Cart::instance("cart")->remove($rowId);
        session()->flash('success', 'Item removed from Cart');
        $this->dispatch('itemAddedToCart');
    }

    public function getSubTotalPrice(){
        return Cart::instance("cart")->subtotal();
    }

    public function getTax(){
        return Cart::instance("cart")->tax();
    }

    public function getTotalPrice()
    {
        return Cart::instance("cart")->total();
    }

    public function render()
    {
        return view('livewire.cart-component');
    }
}
