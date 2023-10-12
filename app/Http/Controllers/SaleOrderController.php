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
        //
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

    public function ConfirmSaleOrder($saleOrderId)
    {
        $saleOrder = SaleOrder::find($saleOrderId);

        return view('saleOrder.confirm', compact('saleOrder'));
    }

    public function cartToSaleOrder(Request $request)
    {
        $request->validate([
            'payment_type' => 'required|string',
        ]);

        $cart_content = [];

        foreach (Cart::instance("cart")->content() as $item) {
            $cart_content[] = [
                'id' => $item->id,
                'name' => $item->name,
                'price' => $item->price,
                'quantity' => $item->qty,
                'attributes' => $item->options->toArray(),
            ];
        }

        $saleOrder = SaleOrder::create([
            'cart_content' => json_encode($cart_content),
            'payment_type' => $request->input('payment_type'),
            'promo_code' => $request->input('promotion_code') ?? '-',
            'status' => 0,
            'cart_item' => Cart::count(),
            'subTotal' => Cart::subtotal(2, '.', ''),
            'tax' => Cart::Tax(2, '.', ''),
            'total' => Cart::total(2, '.', ''),
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('confirm_saleOrder', ['saleOrderId' => $saleOrder->id]);
    }

    public function SaleorderToInvoice($id)
    {
        Cart::destroy();

        return redirect()->route('pdf',['id' => $id]);
    }
}