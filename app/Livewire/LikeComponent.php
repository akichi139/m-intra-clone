<?php

namespace App\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Attributes\On;

class LikeComponent extends Component
{
    #[On('updatelike')]
    public function refresh(){
        $this->getCartItems();
    }
    public function getCartItems()
    {
        return Cart::instance('like')->content();
    }

    public function getTotalCartItems()
    {
        return Cart::instance('like')->count();
    }

    public function removeFromCart($rowId)
    {
        Cart::instance('like')->remove($rowId);
        session()->flash('success', 'Item removed from Cart');
        $this->dispatch('itemAddedToCart');
    }

    public function getSubTotalPrice(){
        return Cart::instance('like')->subtotal();
    }

    public function getTax(){
        return Cart::instance('like')->tax();
    }

    public function getTotalPrice()
    {
        return Cart::instance('like')->total();
    }
    public function render()
    {
        return view('livewire.like-component');
    }
}
