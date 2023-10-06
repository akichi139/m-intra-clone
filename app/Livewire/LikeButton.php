<?php

namespace App\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class LikeButton extends Component
{
    public $isChecked;
    public $product_id;
    public $product_name;
    public $product_price;

    public function mount($product_id, $product_name, $product_price)
    {
        $this->product_id = $product_id;
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->isChecked = false;

        $cartContent = Cart::instance('like')->content();
        foreach ($cartContent as $item) {
            if ($item->name == $this->product_name) {
                $this->isChecked = true;
            }
        }
    }
    public function toggleLike()
    {
        $this->isChecked = !$this->isChecked;

        $cartInstance = Cart::instance('like');

        if ($this->isChecked) {
            $cartContent = Cart::instance('like')->content();

            foreach ($cartContent as $item) {
                if ($item->name == $this->product_name) {
                    $cartInstance->remove($item->rowId);
                }
            }
        } else {
            $cartInstance->add([
                'id' => $this->product_id,
                'name' => $this->product_name,
                'qty' => 1,
                'price' => $this->product_price,
            ]);
        }

        $this->dispatch('updatelike');
    }

    public function render()
    {
        return view('livewire.like-button');
    }
}