<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>category_id</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>
                        <form action="{{ route('product.edit',$product->id) }}">
                            <button type="submit">update</button>
                        </form>
                        <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button>delete</button>
                        </form>
                        <form action="{{ route('product.show',$product->id) }}">
                            <button>show</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('product.create') }}">
        <button>create</button>
    </form>
</body>
</html>