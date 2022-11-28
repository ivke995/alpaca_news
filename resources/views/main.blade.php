<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alpaka news</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav">
            @guest
            @else
            @endguest
        </ul>

    </div>
</div>
<div class="container mt-5">
    @yield('main_content')
</div>
</body>
</html>
