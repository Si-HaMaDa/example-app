<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('page-title')</title>

    @stack('head-links')

</head>

<body>

    <header>
        Hello from Head
    </header>

    @yield('content')

    <footer>
        Hello from footer
    </footer>

    @stack('footer-links')
</body>

</html>
