<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="please enter name">
        <input type="number" name="price" placeholder="please enter price">
        <input type="number" name="category_id" placeholder="please enter category_id">
        <input type="submit">
    </form>

</body>
</html>
