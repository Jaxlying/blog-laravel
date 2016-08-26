<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>blod-laravel</title>

</head>
<body>
<nav>
    <div>
        <div>
            <!-- Branding Image -->
            <a href="{{ url('/') }}">
                主页
            </a>
        </div>
    </div>
</nav>

@yield('content')

</body>
</html>
