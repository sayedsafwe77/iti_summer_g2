<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('product.update',$product->id) }}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="name" value="{{ $product->name }}">
        <input type="number" name="price" value="{{ $product->price }}">
        <input type="number" name="category_id" value="{{ $product->category_id }}">
        <input type="submit">
    </form>
    
</body>
</html>