<?php

namespace App\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Attributes\On;

class LikeCount extends Component
{
    #[On('updatelike')]
    public function refresh(){
        $this->getTotalCartItems();
    }
    public function getTotalCartItems()
    {
        return Cart::instance('like')->count();
    }
    public function render()
    {
        return view('livewire.like-count');
    }
}
