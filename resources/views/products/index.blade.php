<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <a href="{{ route('form') }}">Create Product</a> 
    <a href="{{ route('home') }}">Display Categories</a>

    <table>
        <tr>
            <th>Id</th>
            <th>Category Name</th>
            <th>Product</th>
        </tr>
        @foreach ($products as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->category->name }}</td>
                <td>{{ $item->name }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
