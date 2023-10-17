@extends('layouts.app')

@section('content')

<div>
    <style>
        .container {
            font-family: "THSarabunNew";
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-title">
                    <h4 class="float-end font-size-15">Invoice #{{ $sale_order->id }}
                        <span class="badge bg-success font-size-12 ms-2">{{ array_search($sale_order->status,
                            App\Models\SaleOrder::STATUS_MAPPING) }}</span>
                    </h4>
                    <div class="mb-4">
                        <img src="https://v4i.rweb-images.com/www.measuretronix.com/images/logo/large-1658484550269.png"
                            style="width:200px;height:50px;">
                    </div>
                    <div class="text-muted">
                        <p class="mb-1">2425/2 ถนนลาดพร้าว แขวงสะพานสอง เขตวังทองหลาง กรุงเทพฯ 10310</p>
                        <p class="mb-1"><i class="uil uil-envelope-alt me-1"></i> info@measuretronix.com</p>
                        <p><i class="uil uil-phone me-1"></i> 02-514-1000, 02-514-1234</p>
                    </div>
                </div>

                <hr class="my-2">

                <div class="d-flex justify-content-between mb-2">
                    <div style="width: 50%; float: left;">
                        <p class="mb-1" style="font-size: 25px;color: black;font-weight: bold;">Billed To: {{
                            $sale_order->user->name }}</p>
                        <p class="mb-1">4068 Post Avenue Newfolden, MN 56738</p>
                        <p class="mb-1">PrestonMiller@armyspy.com</p>
                        <p>001-234-5678</p>
                    </div>
                    <div class="text-end" style="width: 50%; float: right;">
                        <div class="mt-4">
                            <h5 class="font-size-15 mb-1">Invoice Date:</h5>
                            <p>{{ date('Y-m-d H:i:s') }}</p>
                        </div>
                        <div class="mt-4">
                            <h5 class="font-size-15 mb-1">Payment Type:</h5>
                            <p>{{ $sale_order->payment_type }}</p>
                        </div>
                    </div>
                </div>

                <div class="py-2">
                    <h5 class="font-size-15">Order Summary</h5>

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-centered mb-0">
                            <thead>
                                <tr>
                                    <th class="mx-1">No.</th>
                                    <th class="mx-1">Item</th>
                                    <th class="mx-1">Price</th>
                                    <th class="mx-1">Quantity</th>
                                    <th class="text-end mx-1">Total</th>
                                </tr>
                            </thead><!-- end thead -->
                            <tbody>
                                @foreach(json_decode($sale_order->cart_content, true) as $index => $item)
                                <tr>
                                    <th class="mx-1" scope="row">{{ $index + 1 }}</th>
                                    <td class="mx-1">
                                        <div>
                                            <p class="text-truncate mb-0"
                                                style="font-size: 20px;color: black;font-weight: bold;">{{ $item['name']
                                                }}</p>
                                            <p class="text-muted mb-0">{{ $item['id'] }}</p>
                                        </div>
                                    </td>
                                    <td class="mx-1">{{ money($item['price'], 'THB', true) }}</td>
                                    <td class="mx-1">{{ $item['quantity'] }}</td>
                                    <td class="text-end mx-1">{{ money($item['price']*$item['quantity'], 'THB', true) }}
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <th scope="row" colspan="4" class="text-end">Sub Total</th>
                                    <td class="text-end">{{ money($sale_order->subtotal, 'THB', true) }}</td>
                                </tr>
                                <!-- end tr -->
                                <tr>
                                    <th scope="row" colspan="4" class="border-0 text-end">
                                        Discount :</th>
                                    <td class="border-0 text-end">-
                                        {{ money($sale_order->total-$sale_order->tax-$sale_order->subtotal, 'THB',
                                        true)}}
                                    </td>
                                </tr>
                                <!-- end tr -->
                                <tr>
                                    <th scope="row" colspan="4" class="border-0 text-end">
                                        Tax</th>
                                    <td class="border-0 text-end">{{ money($sale_order->tax, 'THB', true) }}</td>
                                </tr>
                                <!-- end tr -->
                                <tr>
                                    <th scope="row" colspan="4" class="border-0 text-end">Total</th>
                                    <td class="border-0 text-end"
                                        style="font-size: 20px;color: black;font-weight: bold;">
                                        {{ money($sale_order->total, 'THB', true) }}
                                    </td>
                                </tr>
                                <!-- end tr -->
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div><!-- end table responsive -->
                </div>
            </div><!-- end col -->
        </div>
    </div>
    <div class="row justify-content-center">
        <a href="{{ route('pdf',['id' => $sale_order->id]) }}" type="button" class="btn btn-dark btn-block btn-lg"
            target="_blank" rel="noopener">
            Display on pdf
        </a>
    </div>
</div>


@endsection