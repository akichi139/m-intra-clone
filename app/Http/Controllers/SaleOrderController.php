<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\SaleOrder;

class SaleOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cartContents = Cart::content();
        return view('saleOrder.create', compact('cartContents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function cartToSaleOrder()
    {
        $cart_content = [];

        foreach (Cart::content() as $item) {
            $cart_content[] = [
                'id' => $item->id,
                'name' => $item->name,
                'price' => $item->price,
                'quantity' => $item->qty,
                'attributes' => $item->options->toArray(),
            ];
        }

        SaleOrder::create([
            'cart_content' => json_encode($cart_content),
            'status' => 0,
            'total' => Cart::total(2, '.', ''),
            'user_id' => auth()->user()->id,
        ]);

        Cart::destroy();

        return redirect()->route('welcome');
    }
}