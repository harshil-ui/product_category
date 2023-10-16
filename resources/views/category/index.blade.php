<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
</head>

<body>

    <a href="{{ route('form') }}">Create Product</a>
        <br><br>
    <a href="{{ route('product-list') }}">Product List</a>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>product</th>
                <th>product_count</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        @foreach ($item->products as $product)
                            {{ $product->name }}
                        @endforeach
                    </td>
                    <td>{{ count($item->products) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
