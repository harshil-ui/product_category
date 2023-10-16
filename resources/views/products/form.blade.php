<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>

<body>
    <form action="{{ route('create-product') }}" method="post">
        @csrf
        <label>Name:
            <input type="text" name="name">
        </label> <br><br>

        <label>
            Category:
            <select name="category_id">
                @foreach ($category as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </label> <br><br>

        <input type="submit" value="Create">
    </form>
</body>

</html>
