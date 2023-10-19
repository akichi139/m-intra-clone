<div>
    <style>
        .long {
            max-width: 200px;
            width: 200px;
            margin-right: 2px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .short {
            width: 100px;
            margin-right: 2px;
            text-align: center;
        }
    </style>

    @php
    $jsonString = $getState();
    $jsonData = json_decode($jsonString, true);
    @endphp

    <table>
        <thead>
            <tr>
                <th class="long">ID</th>
                <th class="long">Name</th>
                <th class="short">Price</th>
                <th class="short">Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jsonData as $item)
            <tr>
                <td class="long">{{ $item['id'] }}</td>
                <td class="ellipsis long">
                    <span>{{ $item['name'] }}</span>
                </td>
                <td class="short">{{ money($item['price'], 'THB', true) }}</td>
                <td class="short">{{ $item['quantity'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <!-- {{ $getState() }} -->
</div>