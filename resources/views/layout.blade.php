<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title' , 'TeamArcade')</title>
</head>
<body>

    @yield('content')

    <ul>
            <li>  <a href="/">home</a> </li>
        <li>  <a href="/contact">contact</a> </li>
        <li>  <a href="/about">about</a> </li>
    </ul>
</body>
</html>