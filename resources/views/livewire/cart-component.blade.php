<div>
    <h3>Shopping Cart</h3>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($this->getCartItems() as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>{{ $item->price * $item->qty }}</td>
                </tr>
                <hr>
            @endforeach
        </tbody>
    </table>
</div>
