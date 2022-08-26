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

    <header>
        <div class="logo">
            <img src="{{ asset('img/workplace.jpg') }}" >
        </div>
        <div class="menu">
            <ul>
                <li>home</li>
                <li>profile</li>
                <li>contact us</li>
                <li>login</li>
            </ul>
        </div>
    </header>
    <div class="login">
        <form action="" method="post">
            <label for="email">email</label>
            <input type="text" name="email">
            <label for="password">password</label>
            <input type="password" name="password">
            <input type="submit">
        </form>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <p>all @copywrites reserved for sayed safwet</p>
    </footer>

    <script src="{{ asset('JS/index.js') }}"></script>
</body>
</html>
